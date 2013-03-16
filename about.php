<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Über uns - Hackerspace Bremen e.V.</title>
		<? include ("basicPhps/head.php"); ?>
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
						$chiliurl = 'https://chili.hackerspace-bremen.de/projects/web/wiki/%C3%9Cber_uns';
					?>
					<? include ("basicPhps/chiliwiki.php"); ?>
				</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
