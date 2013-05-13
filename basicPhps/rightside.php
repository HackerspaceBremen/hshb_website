<!-- rechte Seitenleiste -->
<div id="sidebar-2">
	<!-- oberer Kasten -->
	<h1>OpenSpaceMelder</h1>
	<table class="openSpaceTable">
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
				<a href="https://play.google.com/store/apps/details?id=de.hackerspacebremen"><img alt="Get it on Google Play" src="images/gplay.png" width=100></a>
				<a href="https://chrome.google.com/webstore/detail/hackerspace-bremen/apadeikhfnipflbiglhdcilnfocbikhc"><img alt="Get it in the Chrome Web Store" src="images/chrome-ext.png" width=100 /></a>
			</td>
		</tr>
	</table>

	<!-- unterer Kasten -->
	<h1>Termine | Veranstaltungen</h1>
	<table>
		<tr>
			<td>
				Montags, ab 19:00 <br>&rarr;<b>Open Space oder </b><br>&rarr;<b>jeden 2.Montag "Bremen.js"-Stammtisch</b>
				<br /><br />Dienstags, ab 19:00 <br>&rarr;<b>Öffentlicher Themenabend</b>
				<br /><br />Mittwochs, ab 17:00 <br>&rarr;<b>Roboter bauen und programmieren</b>
				<br /><br />Mittwochs, ab 19:00 <br>&rarr;<b>eve(ning) of projects</b>
				<br /><br />Donnerstags, ab 19:00 <br>&rarr;<b>Rapid Prototyping (3D-Druck Abend)</b>
				<br /><br />Sonntags, ab 19:00 <br>&rarr;<b>Linux-User-Group-Bremen Stammtisch</b>
			</td>
		</tr>
	</table>
	<p  style="text-align: right; margin: 0px; padding: 0px"><a href="events.php"> &rarr; Details und weitere Termine</a></p>
</div>

<?php
// Anzeige des letzten PHP-Fehlers
// print_r(error_get_last());
?>
