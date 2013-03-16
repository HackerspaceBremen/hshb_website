<h1>Abboniere unseren Newsletter: </h1>
<form method=post action="http://newsletter.hackerspace-bremen.de/lists/?p=subscribe" name="subscribeform" target="windowName" onsubmit="window.open('', this.target,'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');">

	<input type="hidden" name="formtoken" value="bf131fba57df676a6aa3e2bab13c9a2f" />
	<table border=0>
		<tr>
			<td>
				<div class="required">E-Mail</div>
			</td>
			<td class="attributeinput">
				<input type=text name=email value="" size="20">
				<script language="Javascript" type="text/javascript">addFieldToCheck("email","E-Mail");</script>
			</td>
		</tr>
		<tr>
			<td>
				<div class="required">E-Mail best&auml;tigen</div>
			</td>
			<td class="attributeinput">
				<input type=text name=emailconfirm value="" size="20">
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
		<input type=submit name="subscribe" value="Eintragen" onClick="return checkform();">
	</p>
</form>