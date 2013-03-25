<?php
	header("Content-Type: text/html; charset=utf-8"); 
	$dom = new DOMDocument('1.0','UTF-8');
	//$profile->file_get_contents('https://chili.hackerspace-bremen.de/projects/web/wiki/Sponsoren');
	//$dom->loadHTML(mb_convert_encoding($profile, 'HTML-ENTITIES', 'UTF-8'));
	$dom->loadHTMLFile($chiliurl);
	$dom->encoding = 'UTF-8';
	$xpath = new DOMXPath($dom);
	$elements = $xpath->query('//div[contains(attribute::class, "wiki")]');
	//get all content
	foreach( $elements as $element ) {
		$newdoc = new DOMDocument();
		$cloned = $element->cloneNode(TRUE);
		$newdoc->appendChild($newdoc->importNode($cloned,TRUE));
		echo str_replace('src="/attachments/download/','src="https://chili.hackerspace-bremen.de/attachments/download/',$newdoc->saveHTML());
	}
?>
