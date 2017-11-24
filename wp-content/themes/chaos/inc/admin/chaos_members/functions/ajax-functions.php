

<?php 



function chaos_members_list() {
	include( get_template_directory().'/inc/admin/chaos_members/list-template/list-chaos-members.php' );
	die();
}
add_action( 'wp_ajax_chaos_members_list', 'chaos_members_list' );
add_action( 'wp_ajax_nopriv_chaos_members_list', 'chaos_members_list' );


?>