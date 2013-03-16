<!-- linke Seitenleiste -->

<div id="sidebar-1">

	<img src="logo.png"></img>

	<!--<a href="http://www.hackerspace-bremen.de" target=_blank><h1>Newsletter (bald)</h1></a>-->
	<form method=post action="http://newsletter.hackerspace-bremen.de/lists/?p=subscribe" name="subscribeform" target="windowName" onsubmit="window.open('', this.target,'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');">
	
		<input type="hidden" name="formtoken" value="bf131fba57df676a6aa3e2bab13c9a2f" />
		<table border=0>
			<tr>
				<td>
					<div class="required">E-Mail</div>
				</td>
				<td class="attributeinput">
					<input type=text name=email value="" size="40">
					<script language="Javascript" type="text/javascript">addFieldToCheck("email","E-Mail");</script>
				</td>
			</tr>
			<tr>
				<td>
					<div class="required">E-Mail best&auml;tigen</div>
				</td>
				<td class="attributeinput">
					<input type=text name=emailconfirm value="" size="40">
					<script language="Javascript" type="text/javascript">addFieldToCheck("emailconfirm","E-Mail best&auml;tigen");</script>
				</td>
			</tr>
			<tr>
				<td colspan=2>
					<span class="attributename">Bevorzugtes Format f&uuml;r E-Mails:</span><br/>
					<span class="attributeinput"><input type=radio name="htmlemail" value="0"  /></span>
					<span class="attributename">Text</span>
					<span class="attributeinput">
						<input type=radio name="htmlemail" value="1" checked="checked" />
					</span>
					<span class="attributename">HTML</span>
				</td>
			</tr>
		</table>
		<input type="hidden" name="list[1]" value="signup">
		<input type="hidden" name="listname[1]" value="test"/>
		<div style="display:none">
			<input type="text" name="VerificationCodeX" value="" size="20">
		</div>
		<p>
			<input type=submit name="subscribe" value="Anmelden beim Newsletter" onClick="return checkform();">
		</p>
    </form>

	<h1>Folge uns auf: </h1>
	<ul>
		<li><a href="http://www.facebook.com/pages/Hackerspace-Bremen/217887601561428?ref=ts" target=_blank>Facebook</a></li>
		<li><a href="https://plus.google.com/106849621647585475724" target=_blank rel="publisher">Google+</a></li>
		<li><a href="https://twitter.com/hspacehb" target=_blank>Twitter</a></li>
	</ul>
	<br /><a href="HackerspaceBremen-Flyer.pdf" target=_blank><img src="flyer.jpg"></img><p style="margin-top:5px;">Download Flyer (PDF)</p></a>
	<br />
	<br /><a href="https://chili.hackerspace-bremen.de/attachments/download/5/Satzung.pdf" target=_blank>Download Satzung (PDF)</a>
	<br />
	<br /><a href="be_a_member.php">&rarr; Mitglied werden</a>

</div>