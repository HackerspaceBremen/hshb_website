<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hackerspace Bremen e.V.</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta name="description" content="Hackerspace Bremen, mack|hack|modify, Deine Hobbywerkstatt in Bremen">
		<meta name="keywords" content="Hackerspace, Hobby, Werkstatt,
		Bremen, entwerfen, programmieren, löten, bauen, Workshops, Vorträge, Kunst, Handwerk, Informatik, Elektronik, 3D-Druck,">
		<meta name="copyright" content="Hackerspace Bremen e.V.">
		<meta name="author" content="Daniel Wendt-Fröhlich">
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css"></style>
	</head>
	<body>
		<div id="body">
			<div id="accessibility"></div>
			<div id="container">
				<? include ("basicPhps/header.php"); ?>
				<? include ("basicPhps/leftside.php"); ?>
				<!-- Hauptbereich -->
				<div id="content">
					<!-- Sponsors-->  
					<?php
						$c = curl_init('https://chili.hackerspace-bremen.de/projects/web/wiki/Sponsoren');
						// TODO maybe some more options
						$chilihtml = curl_exec($c);
						//if (curl_error($c))
						//	die(curl_error($c));

						// Get the status code
						//$status = curl_getinfo($c, CURLINFO_HTTP_CODE);
						
						//if($status==200){
							echo("<p><b>test</b></p>");
							//$DOM = new DOMDocument;
							//$DOM->loadHTML($html);

							//get all content
							//$xpath = new DOMXPath($DOM);
							//foreach( $xpath->query('//div[contains(attribute::class, "wiki")]') as $e ) {
							//	echo $e->nodeValue, "<br />\n<b>test</b>";
							//}
						//} else {
							// TODO change this for an error include
						//	echo("<p><b>Diese Seite kann vorübergehend nicht dargestellt werden!</b></p>");
						//}
						
						curl_close($c);
					?>
				</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
