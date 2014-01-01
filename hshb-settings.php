<?php
/** Step 2. */
add_action( 'admin_menu', 'hshb_plugin_menu' );

/** Step 1. */
function hshb_plugin_menu() {
	add_options_page( 'HSHB-Plugin', 'Hackerspace Bremen Plugin', 'manage_options', 'hshb-plugin-options', 'hshb_plugin_options' );
}

add_option('hshb_author_link', 'true');
add_option('hshb_filter_categories', 'true');
add_option('hshb_categories', array()); 
/** Step 3. */
function hshb_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	
	if($_POST['action'] == 'update') {
	    update_option('hshb_author_link', $_POST['hshb_author_link'] === 'checked' ? 'true' : 'false');
	    update_option('hshb_filter_categories', $_POST['hshb_filter_categories'] === 'checked' ? 'true' : 'false');
	    update_option('hshb_categories', explode(',', str_ireplace(' ', '', $_POST['hshb_categories'])));
	    echo('<div class="updated"><p><strong>Einstellungen gespeichert</strong></p></div>');
	}
	echo '<div class="wrap">';
	echo '<h2>Hackerspace Bremen Plugin</h2>';
	?>
	<form method="post" action=""> 
	<?php
	settings_fields( 'hshb_options' );
	do_settings_sections( 'hshb_options' );
	$hshb_author_link = get_option('hshb_author_link');
	$hshb_filter_categories = get_option('hshb_filter_categories');
	$hshb_categories = implode(',', get_option('hshb_categories'));
	?>
	<table cellspacing="2" cellpadding="5">
	    <tr><td>Login-Name in Autoren-URLs</td><td><input type="checkbox" name="hshb_author_link" value="checked" <?php echo($hshb_author_link === 'true' ? 'checked' : '') ?>></input></td></tr>
	    <tr><td>Startseiten-Posts filtern</td><td><input type="checkbox" name="hshb_filter_categories" value="checked" <?php echo($hshb_filter_categories === 'true' ? 'checked' : '') ?>></input></td></td></tr>
	    <tr><td>Zugelassene Kategorien</td><td><input type="input" name="hshb_categories" style="width: 300px" value="<?php echo($hshb_categories) ?>"></input></td></tr>
	</table>
	<p>Werte mit Kommas trennen, Kategorien-Titelform (Slug) verwenden (d.h. aus "Gurke Tomate" wird "gurke-tomate" - Entspricht dem, was in der URL der jeweiligen Kategorie verwendet wird.) Diese Liste wird nur ber&uuml;cksichtigt, wenn die Option "Startseiten-Posts filtern" aktiv ist.</p>
	<?php
	submit_button(); 
	echo '</form></div>';
}

function hshb_register_settings() {
    register_setting( 'hshb_options' , 'hshb_author_link' ); 
    register_setting( 'hshb_options' , 'hshb_filter_categories' ); 
    register_setting( 'hshb_options' , 'hshb_categories' );
} 
add_action( 'admin_init', 'hshb_register_settings' );
?>
