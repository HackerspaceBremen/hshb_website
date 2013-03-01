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
<style type="text/css">
</style>
</head>
<body>
   <div id="body">
      <div id="accessibility">
      </div>

      <div id="container">

<!--- Kopfzeile -->

         <div id="head">
            <table width=960 height=27 border=0 cellspacing="0" cellpadding="0" background="#top.png" >
               <tr>
                  <td width=200></td>
                  <td align=left>
                     <ul>
                        <li><a href="http://www.hackerspace-bremen.de">Startseite</a></li>
                        <li>|</li>
                        <li><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/%C3%9Cber_uns">Über uns</a></li>
                        <li>|</li>
                        <li><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/Location">Location</a></li>
                        <li>|</li>
                        <li><a href="https://chili.hackerspace-bremen.de/projects">Projekte</a></li>
                        <li>|</li>
                        <li><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/Regelm%C3%A4%C3%9Fige_Termine"> Veranstaltungen </a></li>
						<li>|</li>
                        <li><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/Sponsoren"> Sponsoren </a></li>
                     </ul>
                  </td>
                  <td align=right><div id="impressum"><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/Impressum">Impressum</font></a></div></td>
               </tr>
            </table>
         </div>

<!-- linke Seitenleiste -->

         <div id="sidebar-1">

            <img src="logo.png" width=180></img>

			<!--<a href="http://www.hackerspace-bremen.de" target=_blank><h1>Newsletter (bald)</h1></a>-->
			
			<h1>Follow on</h1>
			<li><a href="http://www.facebook.com/pages/Hackerspace-Bremen/217887601561428?ref=ts" target=_blank>Facebook</a></li>
			<li><a href="https://plus.google.com/106849621647585475724" target=_blank>Google+</a></li>
			<br><a href="HackerspaceBremen-Flyer.pdf" target=_blank><img src=flyer.jpg width=80></img></br>Download Flyer (PDF)</a>
			<br></br><a href="https://chili.hackerspace-bremen.de/attachments/download/5/Satzung.pdf" target=_blank>Download Satzung (PDF)</a>
			<br></br><a href="https://chili.hackerspace-bremen.de/projects/web/wiki/Mitglied_werden">&rarr; Mitglied werden</a>
         



         </div>

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
            <h1>OpenSpaceMelder</h1>
            <table height=67px>
               <tr>
                  <td>
                     <h2>			
			 				<?php
								$jsonurl = "https://hackerspacehb.appspot.com/status";
								$json = file_get_contents($jsonurl);
								$json_output = json_decode($json,true);				
								if($json_output['RESULT']['ST3'] === 'CLOSED'){
									echo 'Der Space ist geschlossen';	
								}elseif ($json_output['RESULT']['ST3'] === 'OPEN'){
									echo 'Der Space ist offen';
								}
			 				?>
					</h2>
					<h3>
			 				<?php
								$jsonurl = "https://hackerspacehb.appspot.com/status";
								$json = file_get_contents($jsonurl);
								$json_output = json_decode($json,true);				
								echo $json_output['RESULT']['ST5'];	
			 				?>
					</h3>
					<a href="https://play.google.com/store/apps/details?id=de.hackerspacebremen"><img alt="Get it on Google Play" src="./gplay.png" width=100 />
					<a href="https://chrome.google.com/webstore/detail/hackerspace-bremen/apadeikhfnipflbiglhdcilnfocbikhc"><img alt="Get it in the Chrome Web Store" src="./chrome-ext.png" width=100 /></a></br>

                  </td>
               </tr>
            </table>
<!-- unterer Kasten -->
            <h1>Termine | Veranstaltungen</h1>
            <table>
               <tr>
                  <td>
                    Montags, 19:00-21:00 <br>&rarr;<b>Open Space</b></br>
					<br>Dienstags, ab 19:00 <br>&rarr;<b>Öffentlicher Themenabend</b></br>
					<br>Mittwochs, ab 17:00 <br>&rarr;<b>Roboter bauen und programmieren</b></br>
					<br>Mittwochs, 19:00-21:00 <br>&rarr;<b>eve(ning) of projects</b></br>
					<br>Donnerstags, 19:00-21:00 <br>&rarr;<b>SDR-Abend</b></br>
					<br>Freitags, 19:00-21:00 <br>&rarr;<b>Rapid Prototyping</b></br>
                  </td>
               </tr>
            </table>
            <p  style="text-align: right; margin: 0px; padding: 0px"><a href="https://chili.hackerspace-bremen.de/projects/veranstaltungen/wiki/Wiki"> &rarr; Details und weitere Termine</a></p>
         </div>
<p></p>


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
