<?php
if (php_sapi_name() == "cli") {
    if (empty($argv[1])) {
        echo 'Usage: generateOne.php ClassName
    ';
        exit(2);
    } else {
        $className = $argv[1];      
    }
} else {
    if (empty($_GET['class'])) {
        echo 'Usage: generateOne.php?class=ClassName
    ';
        exit(2);
    } else {
        $className = $_GET['class'];      
    }
}

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
        @list($endpointName, $beta) = explode(' ', $tr->getElementsByTagName('td')->item(1)->textContent, 2);
        $currentClass = makeSingular($endpointName);

		if ( hasClass($href, 'Endpoints') && $argv[1] == $currentClass ) {
			$methods = $tr->getElementsByTagName('td')->item(3)->textContent;
			$function = false !== strpos($tr->textContent, 'Function Details');
			$webhook = hasClass($tr->getElementsByTagName('td')->item(4), 'HasWebhook');
			parseEndpoint( trim($href->getAttribute('href')), $methods, $function, $webhook );
		}
	}
}

echo 'Done';