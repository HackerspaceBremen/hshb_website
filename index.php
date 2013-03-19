<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hackerspace Bremen e.V.</title>
		<? include ("basicPhps/head.php"); ?>
	</head>
	<body>
		<div id="body">
			<? include ("basicPhps/socialNetworkAndStuff.php"); ?>
			<div id="container">
				<? include ("basicPhps/header.php"); ?>
				<? include ("basicPhps/leftside.php"); ?>
				<!-- Hauptbereich -->
				<div id="content">
					<a href="be_a_member.php"><img src="images/banner.png" border=0 width=470></img></a>
					<h1>Aktuell</h1>
					<!-- Atom-Feed-Reader-->  
					<?php
						define('MAGPIE_DIR', 'magpierss/');
						define('MAGPIE_CACHE_AGE', 600);
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
							
							echo "<tr><td width=52><img src='images/icon.png'></img></td><td>";
							echo "<a href=$link><h2>$title</h2></a>";
							echo "<p>$content</p>";
							echo "<p style='text-align:right;'><small>vom $updated , $author </small></p>";
							echo "<hr></hr></td></tr>";
						}
						echo "</table>";
						
					?>
					<p  style="text-align: right; margin: 0px; padding: 0px"><a href="http://chili.hackerspace-bremen.de/news"> &rarr; Alle Einträge</a></p>
				</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
