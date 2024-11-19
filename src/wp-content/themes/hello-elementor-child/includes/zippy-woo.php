<?php

//fix mini cart
function enqueue_wc_cart_fragments() { wp_enqueue_script( 'wc-cart-fragments' ); } add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );


// function remove_codeixer_menu() {
//     // Remove the "Codeixer" menu
//     remove_menu_page('codeixer');

//     // Remove the "Dashboard" submenu under "Codeixer"
//     remove_submenu_page('codeixer', 'codeixer-dashboard');
// }
// add_action('admin_menu', 'remove_codeixer_menu', 999);