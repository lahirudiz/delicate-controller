<?php
/*
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin_menu' action hook, run the function named 'dhs_admin()'
add_action( 'admin_menu', 'dhs_admin' );
// Add a new top level menu link to the ACP
function dhs_admin()
{
      add_menu_page(
        'DHS Controller', // Title of the page
        'DHS Controller', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'admin/dashboard.php' // The 'slug' - file to display when clicking the link
    );
}