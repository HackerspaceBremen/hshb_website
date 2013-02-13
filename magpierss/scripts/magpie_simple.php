<!-- Atom-Feed-Reader-->  

<?php

define('MAGPIE_DIR', '../');
require_once(MAGPIE_DIR.'rss_fetch.inc');
$url = 'https://chili.hackerspace-bremen.de/news.atom?key=805614cad417775206a812eee70fbec4fc596ffb';
$rss = fetch_rss( $url );

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

