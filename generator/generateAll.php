<?php
require_once 'generator.php';

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
			$webhook = !empty($tr->getElementsByTagName('td')->item(4)) && hasClass($tr->getElementsByTagName('td')->item(4), 'HasWebhook');
			parseEndpoint( trim($href->getAttribute('href')), $methods, $function, $webhook );
		}
	}
}

echo 'Done';