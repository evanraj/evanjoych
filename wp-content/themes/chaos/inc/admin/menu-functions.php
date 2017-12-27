<?php 
add_action('admin_menu', 'admin_menu_register');

function admin_menu_register(){
// add_menu_page(
//         __( 'Add Team', 'chaos'),
//         'Add Team',
//         'manage_options',
//         'add_team',
//         'add_team',
//         'dashicons-universal-access',
//         2
//     );
//     add_submenu_page('add_team', 'List Team', 'List Team', 'manage_options', 'list_team', 'list_team');
//     add_submenu_page('add_team', 'Add Team Members', 'Add Team Members', 'manage_options', 'add_team_member', 'add_team_members' );
//     add_submenu_page('add_team', 'List Team Members', 'List Team Members', 'manage_options', 'list_team_member', 'list_team_members' );

// add_menu_page(
//         __( 'Chaos Members ', 'chaos'),
//         'Chaso Members',
//         'manage_options',
//         'add_chaos_member',
//         'add_chaos_member',
//         'dashicons-universal-access-alt',
//         2
//     );
//     add_submenu_page('add_chaos_member', 'Add Member', 'Add Member', 'manage_options', 'add_chaos_member', 'add_chaos_member');
//     add_submenu_page('add_chaos_member', 'List Member', 'List Member', 'manage_options', 'list_chaos_member', 'list_chaos_member' );

// add_menu_page(
//         __( 'Credit Points', 'chaos'),
//         'Credit Points',
//         'manage_options',
//         'list_credits',
//         'list_credits',
//         'dashicons-star-half',
//         2
//     );



    // add_submenu_page('add_chaos_member', 'Add Member', 'Add Member', 'manage_options', 'add_chaos_member', 'add_chaos_member');
    // add_submenu_page('add_chaos_member', 'List Member', 'List Member', 'manage_options', 'list_chaos_member', 'list_chaos_member' );
}

function add_team() {
    require 'leagues/views/add-team.php';
}

function list_team() {
    require 'leagues/list-template/list-team.php';
}

function add_team_members() {
    require 'leagues/views/add-team-members.php';
}

function list_team_members() {
    require 'leagues/list-template/list-team-members.php';
}
function add_chaos_member() {
    require 'chaos_members/views/add-chaos-member.php';
}

function list_chaos_member() {
    require 'chaos_members/members.php';
}

function list_credits() {
    require 'credits/credits.php';
}


?>