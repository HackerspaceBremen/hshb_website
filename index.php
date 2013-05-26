<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Hackerspace Bremen e.V.</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta name="description" content="Hackerspace Bremen, make|hack|modify, Deine Hobbywerkstatt in Bremen">
		<meta name="keywords" content="Hackerspace, Hobby, Werkstatt,
		Bremen, entwerfen, programmieren, löten, bauen, Workshops, Vorträge, Kunst, Handwerk, Informatik, Elektronik, 3D-Druck,">
		<meta name="copyright" content="Hackerspace Bremen e.V.">
		<meta name="author" content="Daniel Wendt-Fröhlich,Steve Liedtke">
		<link rel="stylesheet" type="text/css" href="stylesheets/index.css">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<script src="javascripts/newsletter.js"></script>
	</head>
	<body>
		<div id="body">
			<div id="accessibility"></div>
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
						$url = 'https://chili.hackerspace-bremen.de/projects/test-news-unterprojekt/news.atom'.
                    '?key=afdca4771b193929976af544d5a6fb24abe6da83';
						$rss = fetch_rss( $url );
						$rss->items = array_slice($rss->items, 0, 6); //begrenzt auf 6 Beiträge
						if(count($rss->items)==0){
              echo '<p><b>Unser Vereinsarchiv besitzt momentan keine Newsbeiträge.</b> '.
              'Ein Grund dafür könnten Umbauarbeiten sein.</p>'
            }else{
              // print_r($rss); // Gibt komplettes Array aus.
  						echo "<table>";
              
  						foreach ($rss->items as $item) {
  							$title_chili = $item['title'];
  							$title_array = explode(' - ',$title_chili);
  							$category = $title_array[0];
  							$title = '';
  							for ($i = 1; $i <= count($title_array); $i++) {
  								$title .= $title_array[$i];
  							}
  							$link = $item['link'];
  							$content = $item['atom_content'];
  							$updated = date('j.m.Y, H:i', strtotime($item['updated']));
  							$author = $item['author_name'];
  							echo "<tr><td>";
  							echo "<a href=$link><h2>$title</h2></a>";
  							echo "<h3 class='feed_category'><b>Kategorie:</b> $category</h3>";
  							echo "<p>$content</p>";
  							echo "<p style='text-align:right;'><small>vom $updated, $author </small></p>";
  							echo "<hr></hr></td></tr>";
  						}
  						echo "</table>";
            }
					?>
					<p  style="text-align: right; margin: 0px; padding: 0px"><a href="http://chili.hackerspace-bremen.de/news"> &rarr; Alle Einträge</a></p>
				</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
