<?php
/*
Plugin Name: Astahub - Disable post type Post
Plugin URI: 
Description: Disable build in post type post and remove it from the menu.
Author: harisrozak
Author URI: 
Version: 0.1
Text Domain: astahub-disable-posts
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_action('init', 'astahub_unregister_post_type_post', 11);
function astahub_unregister_post_type_post() {
    global $wp_post_types;

    // echo "<pre>";
    // print_r($wp_post_types);
    // echo "</pre>";

    if ( isset( $wp_post_types[ 'post' ] ) ) {
        unset( $wp_post_types[ 'post' ] );
        return true;
    }
    return false;
}