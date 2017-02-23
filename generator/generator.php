<?php
define('EXACT_APIDOC_BASEURL', 'https://start.exactonline.nl/docs/');

$index_html = file_get_contents(EXACT_APIDOC_BASEURL . 'HlpRestAPIResources.aspx');

libxml_use_internal_errors(true);

$index = new DOMDocument();
$index->loadHTML($index_html, LIBXML_NOERROR | LIBXML_NOWARNING);

$referencetable = $index->getElementById('referencetable');

foreach($referencetable->childNodes as $tr) {
	if ($tr->nodeName != 'tr' || hasClass($tr, 'header') )  {
		continue;
	}
	
	$hrefs = $tr->getElementsByTagName('a');
	
	foreach ($hrefs as $href) {
		if ( hasClass($href, 'Endpoints') ) {
			$methods = $tr->getElementsByTagName('td')->item(3)->textContent;
			$function = false !== strpos($tr->textContent, 'Function Details');
			$webhook = hasClass($tr->getElementsByTagName('td')->item(4), 'HasWebhook');
			parseEndpoint( trim($href->getAttribute('href')), $methods, $function, $webhook );
		}
	}
}

echo 'Done';

function hasClass($node, $class) {
	if (!$node->hasAttributes()) {
		return false;
	}
	
	return in_array($class, explode(' ', $node->getAttribute('class') ) );
}

function makeSingular($plural) {
	if (substr($plural, -4) == 'sses') {
		return substr($plural, 0, strlen($plural) - 2);
	}
    
    if (substr($plural, -3) == 'ses') {
		return substr($plural, 0, strlen($plural) - 1);
	}
	
	if (substr($plural, -3) == 'ies') {
		return substr($plural, 0, strlen($plural) - 3) . 'y';
	}
		
	if ($plural == 'Returns') {
		return $plural;
	}
	
	if (substr($plural, -1) == 's') {
		return substr($plural, 0, strlen($plural) - 1);
	}
	
	return $plural;
}

function parseEndpoint($href, $methods = 'GET', $function = false, $webhook = '') {	
	$endpoint_html = @file_get_contents(EXACT_APIDOC_BASEURL . $href);
	if (!strlen($endpoint_html)) {
		sleep(1);
		$endpoint_html = @file_get_contents(EXACT_APIDOC_BASEURL . $href);
	}
	if (!strlen($endpoint_html)) {
		sleep(10);
		$endpoint_html = @file_get_contents(EXACT_APIDOC_BASEURL . $href);
	}
	if (!strlen($endpoint_html)) {
		trigger_error('Url ' . EXACT_APIDOC_BASEURL . $href . ' not found.', E_USER_WARNING);
		return false;
	}
	
	$endpoint = new DOMDocument();
	$endpoint->loadHTML($endpoint_html, LIBXML_NOERROR | LIBXML_NOWARNING);
	
	$model_name = makeSingular(str_replace('/', '', $endpoint->getElementById('endpoint')->textContent));
	
	$url = substr($endpoint->getElementById('serviceUri')->textContent, 19);
	$properties = [];
	
	$findable = false !== strpos($methods, 'GET'); 
	$storable = false !== strpos($methods, 'PUT') || false !== strpos($methods, 'POST') || false !== strpos($methods, 'DELETE'); 
	$relatable = $function;
	
	$parentKey = '';
	if ($function) {
		$inputs = $endpoint->getElementsByTagName('input');
		foreach($inputs as $input) {
			if ($input->getAttribute('name') == 'functionParameter') {
				$parentKey = $input->getAttribute('data-name');
				break;
			}
		}
	}
	
	$referencetable = $endpoint->getElementById('referencetable');
	$primaryKey = '';
    
	if (!$referencetable instanceof DOMNode) {
		if (false !== strpos($model_name, 'Count')) {
			$findable = false;
			$storable = false;
			$relatable = true;
			$properties = [
				$model_name => [
					'name' => $model_name,
					'type' => 'Edm.Int64',
					'description' => '',
				]
			];
		} elseif (false !== strpos($model_name, 'UserHasRight')) {
			// Implemented in Model::userHasRights()
			return false;
		} else {	
			trigger_error('Cannot find reference table on ' . $href, E_USER_WARNING);
			return false;
		}
	} else {
		foreach($referencetable->childNodes as $tr) { 
			if ($tr->nodeName != 'tr' || hasClass($tr, 'header') )  {
				continue;
			}
			
			$inputs = $tr->getElementsByTagName('input');
			if (!$inputs->length) {
				continue;
			}
						
			$input = $inputs->item(0);
			
			$description_tds = $tr->getElementsByTagName('td');
			$description_td = $description_tds->item($description_tds->length - 1);
			$description = ($description_td instanceof DOMNode)?trim($description_td->textContent):'';
			if (false !== strpos($description, 'Obsolete')) {
				continue; // Don't include obsolete properties
			}
			
			$properties[$input->getAttribute('name')] = [
				'name' => $input->getAttribute('name'),
				'type' => $input->getAttribute('data-type'),
				'description' => $description,
			];
            
            if (hasClass($tr, 'key') && $input->getAttribute('name') != 'ID') {
				$primaryKey = $input->getAttribute('name');
			}
		}
	}
	
	writeModel($model_name, EXACT_APIDOC_BASEURL . $href, $url, $properties, $findable, $storable, $relatable, $parentKey, $primaryKey);
	
	return true;
}

function writeModel($model_name, $doc_url, $url, $properties, $findable = false, $storable = false, $relatable = false, $parentKey = false, $primaryKey = false) {
	$template = file_get_contents('model.tpl');
	
	$properties_doc = '';
	foreach($properties as $property) {
		$property_type = (substr($property['type'], 0, 4) == 'Edm.') ? substr($property['type'], 4) : $property['type'];
		$properties_doc .= '
 * @property ' . $property_type . ' $' . $property['name'] . ' ' . $property['description'];
	}
	$properties_array = "
        '" . implode("',
        '", array_keys($properties)) . "'
    ";
	
	$traits = '';
	
	if ($findable) {
		$traits .= '    use Query\Findable;
';
	}
	
	if ($storable) {
		$traits .= '    use Persistance\Storable;
';
	}
	
	if ($relatable) {
		$traits .= '    use Query\Relatable;
';
	}
	
	$keys = '';
    if (strlen($primaryKey)) {
		$keys .= "
    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected \$primaryKey = '{$primaryKey}';
";
	}
    
	if (strlen($parentKey)) {
		$keys .= "
    /**
     * @var string Name of the parent key for this model
     */
    protected \$parentKey = '{$parentKey}';
";
	}

	$content = str_replace([
		'{model_name}',
		'{doc_url}',
		'{properties_doc}',
		'{traits}',
		'{keys}',
		'{properties_array}',
		'{url}',
	],[
		$model_name, 
		$doc_url, 
		$properties_doc,
		$traits,
		$keys,
		$properties_array,
		$url,
	], $template);
	
	file_put_contents('generated/' . $model_name . '.php', $content);
}