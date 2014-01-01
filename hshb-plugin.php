<?php
/**
 * Plugin Name: Hackerspace Bremen Plugin
 * Plugin URI: -
 * Description: Der Link zu den Autorenseiten kann so modifiziert werden, dass der login-name statt des Klarnamen verwendet wird. Außerdem wird die Möglichkeit gegeben, die Posts auf der Startseite auf bestimmte Kategorien zu begrenzen.
 * Version: 1.0
 * Author: Jannes Höke
 * Author URI: http://www.hackerspace-bremen.de/author/jannes
 * License: GPL2
 */
 
//Die Funktion get_author_link() modifizieren, sodass der login-name statt des Klarnamen verwendet wird.
function hshb_author_link( $link, $author_id, $author_nicename )
{
    $curauth = get_userdata( $author_id );
    $author_nickname = $curauth->user_login;
    if ( $author_nickname ) {
        $link = str_replace( $author_nicename, $author_nickname, $link );
    }
    return $link;
}

if(get_option('hshb_author_link') === 'true') {
    add_filter( 'author_link', 'hshb_author_link', 10, 3);
}
//Requests filtern, dass auch die neuen Autorenlinks als solche erkannt werden.
function hshb_request( $query_vars )
{
    if ( array_key_exists( 'author_name', $query_vars ) ) {
        global $wpdb;
        $author_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM {$wpdb->users} WHERE user_login='%s'", $query_vars['author_name'] ) );
        if ( $author_id ) {
            $query_vars['author'] = $author_id;
            unset( $query_vars['author_name'] );    
        }
    }
    return $query_vars;
}

if(get_option('hshb_author_link') === 'true') {
    add_filter( 'request', 'hshb_request' );
}
/**
* Nur bestimmte Kategorien auf der Startseite anzeigen
* @param object $query data
* example from Monika texto.de
*/
function hshb_category_homepage( $query ) {
global $wp_the_query;
    if( $wp_the_query === $query && $query->is_home() ) {
            $cat_ids = array();
            $cat_slugs = get_option('hshb_categories');
            foreach($cat_slugs as $slug) {
                $cat_obj = get_category_by_slug( $slug );
                $cat_ids[] = $cat_obj->term_id;
            }
            $query->set( 'cat', implode(',', $cat_ids) );
    }
}
if(get_option('hshb_filter_categories') === 'true') {
    add_action( 'pre_get_posts', 'hshb_category_homepage' );
}
//Settings einbinden
include('hshb-settings.php');
?>
