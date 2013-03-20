<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Über uns - Hackerspace Bremen e.V.</title>
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
					<form action="http://lists.fiff.de/mailman/subscribe/liebhben" method="post">
						<dl class="impress">
						<dt>E-Mail: <input name="email" type="text" size="22"></dt>
						<dt>Name: <input name="fullname" type="text" size="22"></dt>
						<dt><input name="pw" type="hidden"></dt>
						<dt><input name="pw-conf" type="hidden"></dt>
						<dt><input name="language" value="de" type="hidden"></dt>
						<dt><input name="digest" value="0" type="hidden"></dt>
						<dd><input name="email-button" value="Abonnieren" type="submit"></dd>
						</dl>
					</form>

					<? include ("basicPhps/newsletter.php"); ?>
					
					</div>
				<? include ("basicPhps/rightside.php"); ?>
				<? include ("basicPhps/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
