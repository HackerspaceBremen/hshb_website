<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Mailingliste und Newsletter - Hackerspace Bremen e.V.</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta name="description" content="Hackerspace Bremen, mack|hack|modify, Deine Hobbywerkstatt in Bremen">
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
					<h1 id="mailinglist">Trage dich in unsere Mailingliste ein: </h1>
					<p>
						Auf unserer Mailingliste wird gefachsimpelt und diskutiert. Dort werden Veranstaltungen geplant und angekündigt. 
						Die Mailingliste dient nicht nur Vereinsmitgliedern, sondern ist für jede_n offen, solange die Regeln eingehalten werden. 
					</p>
					<form action="http://lists.fiff.de/mailman/subscribe/liebhben" method="post">
						<table border="0">
							<tr>
								<td>
									<div class="required">E-Mail:</div>
								</td>
								<td>
									<!-- TODO: check input --> 
									<input name="email" type="text" size="20">
								</td>
							</tr>
							<tr>
								<td>
									<div class="required">Name:</div>
								</td>
								<td>
									<input name="fullname" type="text" size="20">
								</td>
							</tr>
							<tr>
								<td>
									<div class="required">Passworteingabe:</div>
								</td>
								<td>
									<input name="pw" type="password" size="20">
								</td>
							</tr>
							<tr>
								<td>
								<div class="required">Erneute Passworteingabe:</div>
								</td>
								<td>
									<input name="pw-conf" type="password" size="20">
									
								</td>
							</tr>
						</table>
						<input name="language" value="de" type="hidden">
						<input name="digest" value="0" type="hidden">
						<p>
							<input name="email-button" value="Abonnieren" type="submit">
						</p>
					</form>

					<h1 id="newsletter">Abboniere unseren Newsletter: </h1>
					<p>
						Über unseren Newsletter erhälst du alle drei Monate Informationen über Projekte, Veranstaltungen und den Verein selber.
						Du möchtest nur ab und zu mal Informationen zu dem Verein erhalten? Dann ist der Newsletter genau richtig für dich! 
					</p>
					<form method=post action="http://newsletter.hackerspace-bremen.de/lists/?p=subscribe&id=2" name="subscribeform" target="windowName" onsubmit="window.open('', this.target,'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');">

						<input type="hidden" name="formtoken" value="bf131fba57df676a6aa3e2bab13c9a2f" />
						<table border=0>
							<tr>
								<td>
									<div class="required">E-Mail:</div>
								</td>
								<td class="attributeinput">
									<input class="emailinput" type=text name=email value="" size="20">
									<script language="Javascript" type="text/javascript">addFieldToCheck("email","E-Mail");</script>
								</td>
							</tr>
							<tr>
								<td>
									<div class="required">E-Mail best&auml;tigen:</div>
								</td>
								<td class="attributeinput">
									<input class="emailinput" type=text name=emailconfirm value="" size="20">
									<script language="Javascript" type="text/javascript">addFieldToCheck("emailconfirm","E-Mail best&auml;tigen");</script>
								</td>
							</tr>
							<tr>
								<td>
									<span class="attributename">Bevorzugtes Format f&uuml;r E-Mails:</span><br/>
								</td>
								<td>
									<span class="attributeinput">
										<input type=radio name="htmlemail" value="0"/>
									</span>
									<span class="attributename">Text</span>
									<span class="attributeinput">
										<input type=radio name="htmlemail" value="1" checked="checked" />
									</span>
									<span class="attributename">HTML</span>
								</td>
							</tr>
						</table>
						<input type="hidden" name="list[2]" value="signup">
						<input type="hidden" name="listname[2]" value="test"/>
						<div style="display:none">
							<input type="text" name="VerificationCodeX" value="" size="20">
						</div>
						<p>
							<input type=submit name="subscribe" value="Eintragen" onClick="return checkform();">
						</p>
					</form>
					
					</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
