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
					<a href="http://chili.hackerspace-bremen.de/projects/web/wiki/Wiki"><img src="banner.png" border=0 width=470></img></a>
					<h1>Aktuell</h1>
					   <!-- Atom-Feed-Reader-->  
						<?php
							define('MAGPIE_DIR', 'magpierss/');
							require_once(MAGPIE_DIR . 'rss_fetch.inc');
							$url = 'https://chili.hackerspace-bremen.de/news.atom?key=805614cad417775206a812eee70fbec4fc596ffb';
							$rss = fetch_rss( $url );
							$rss->items = array_slice($rss->items, 0, 10); //begrenzt auf 10 Beiträge
							// print_r($rss); // Gibt komplettes Array aus.
							echo "<table>";
							foreach ($rss->items as $item) {
								$title = $item['title'];
								$link = $item['link'];
								$content = $item['atom_content'];
								$updated = date('j.m.Y, H:i', strtotime($item['updated']));
								$author = $item['author_name'];
								
								echo "<tr><td width=52><img src=icon.png></img></td><td>";
								echo "<a href=$link><h2>$title</h2></a>";
								echo "<p>$content</p>";
								echo "<p style='text-align:right;'><small>vom $updated , $author </small></p>";
								echo "<hr></hr></td></tr>";
							}
							echo "</table>";
							
						?>

					<p  style="text-align: right; margin: 0px; padding: 0px"><a href="http://chili.hackerspace-bremen.de/news"> &rarr; Alle Einträge</a></p>
				</div>
				<!-- rechte Seitenleiste -->
				<div id="sidebar-2">
					<!-- oberer Kasten -->
					<h1>OpenSpaceMelder!!!</h1>
					<table height=67px>
						<tr>
							<td>
								<h2>			
									<?php
										$jsonurl = "https://hackerspacehb.appspot.com/status?format=de&htmlEncoded=true";
										$json = file_get_contents($jsonurl);
										$json_output = json_decode($json,true);				
										if($json_output['RESULT']['ST3'] === 'CLOSED'){
											echo 'Der Space ist geschlossen';	
										}elseif ($json_output['RESULT']['ST3'] === 'OPEN'){
											echo 'Der Space ist geöffnet';
										}
									?>
								</h2>
								<h3>
									<?php
										echo $json_output['RESULT']['ST5'];	
									?>
								</h3>
								<a href="https://play.google.com/store/apps/details?id=de.hackerspacebremen"><img alt="Get it on Google Play" src="./gplay.png" width=100></a>
								<a href="https://chrome.google.com/webstore/detail/hackerspace-bremen/apadeikhfnipflbiglhdcilnfocbikhc"><img alt="Get it in the Chrome Web Store" src="./chrome-ext.png" width=100 /></a>
							</td>
						</tr>
					</table>

					<!-- unterer Kasten -->
					<h1>Termine | Veranstaltungen</h1>
					<table>
						<tr>
							<td>
								Montags, 19:00-21:00 <br>&rarr;<b>Open Space</b>
								<br>Dienstags, ab 19:00 <br>&rarr;<b>Öffentlicher Themenabend</b>
								<br>Mittwochs, ab 17:00 <br>&rarr;<b>Roboter bauen und programmieren</b>
								<br>Mittwochs, 19:00-21:00 <br>&rarr;<b>eve(ning) of projects</b>
								<br>Donnerstags, 19:00-21:00 <br>&rarr;<b>SDR-Abend</b>
								<br>Freitags, 19:00-21:00 <br>&rarr;<b>Rapid Prototyping</b>
							</td>
						</tr>
					</table>
					<p  style="text-align: right; margin: 0px; padding: 0px"><a href="https://chili.hackerspace-bremen.de/projects/veranstaltungen/wiki/Wiki"> &rarr; Details und weitere Termine</a></p>
				</div>

				<?php
				// Anzeige des letzten PHP-Fehlers
				// print_r(error_get_last());
				?>

				<!-- Fusszeile -->
				<div id="foot">
					Hackerspace Bremen e.V. | Bornstr. 14-15 | 28195 Bremen
				</div>
			</div>
		</div>
	</body>
</html>
