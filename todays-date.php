<?php

/*
 Plugin Name: Today's date
 Description: Display today's date on admin penel
 Version: 1.0
 Author: Benachi
 Author URI:
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) 
    exit();     

// Load plugin when user is in admin panel only
if ( ! is_admin() ) 
    return; 

function todaysDate_adminbar( WP_Admin_Bar $wp_admin_bar ){
    $currentTime = current_datetime();
    $currentDate = date('l, F j, Y');
    $todaysDate = $currentDate . ' ' . $currentTime->format('g:i A');

    $wp_admin_bar->add_menu( array(
        'id' => false,
        'title' => $todaysDate,
        'href' => false
    ));
}
add_action('admin_bar_menu', 'todaysDate_adminbar', 500);
