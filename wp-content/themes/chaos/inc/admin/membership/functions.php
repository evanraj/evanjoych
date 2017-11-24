<?php 
add_action('admin_menu', 'admin_menu_register_membership');

function admin_menu_register_membership(){
add_menu_page(
        __( 'Add Membership', 'chaos'),
        'Add Membership',
        'manage_options',
        'add_membership',
        'add_membership',
        'dashicons-universal-access',
        2
    );
    add_submenu_page('add_membership', 'Add Membership', 'Add Membership', 'manage_options', 'add_membership', 'add_membership' );
    add_submenu_page('add_membership', 'List Membership', 'List Membership', 'manage_options', 'list_membership', 'list_membership' );
}


function add_membership() {
    require 'membership/views/add-membership.php';
}

function list_membership() {
    require 'membership/list-template/list-chaos-membership.php';
}




?>  