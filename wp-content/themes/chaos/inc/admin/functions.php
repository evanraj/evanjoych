<?php 
require get_template_directory() . '/inc/admin/menu-functions.php';
require get_template_directory() . '/inc/admin/leagues/pagination-functions.php';
require get_template_directory() . '/inc/admin/leagues/functions/ajax-functions.php';
require get_template_directory() . '/inc/admin/chaos_members/functions/ajax-functions.php';
require get_template_directory() . '/inc/admin/chaos_members/pagination-functions.php';
require get_template_directory() . '/inc/admin/billing/functions.php';
require get_template_directory() . '/inc/admin/utility-manager/functions.php';
require get_template_directory() . '/inc/admin/users/function.php';
require get_template_directory() . '/inc/admin/roles/function.php';

add_action( 'admin_enqueue_scripts', 'custom_wp_admin_scripts' );
function custom_wp_admin_scripts() {
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/inc/admin/css/admincss.css' );




	wp_enqueue_style( 'src-select2', get_template_directory_uri() . '/inc/admin/js/select2/dist/css/select2.min.css' );  
	wp_enqueue_style('chaos_jquery_ui_design', 'http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
	wp_enqueue_script( 'src-select2', get_template_directory_uri() . '/inc/admin/js/select2/dist/js/select2.full.min.js', array('jquery'), false, false );
	
	wp_enqueue_script('chaos_jquery_ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'),false, false);

	wp_enqueue_script( 'repeater', get_template_directory_uri() . '/inc/admin/js/jquery.repeater.js', array('jquery'), false, false );

	wp_enqueue_script( 'admin-script',  get_template_directory_uri() . '/inc/admin/js/script.js', array('jquery'), false, false );
	wp_localize_script( 'admin-script', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

	// wp_enqueue_script( 'bpopup', 'http://dinbror.dk/bpopup/assets/jquery.bpopup-0.9.4.min.js', array('jquery'), false, false );
	// wp_enqueue_script( 'easing', 'http://dinbror.dk/bpopup/assets/jquery.easing.1.3.js', array('jquery'), false, false );
}

function remove_dashboard_meta() {
/*	remove_action( 'welcome_panel', 'wp_welcome_panel' );*/
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');

}
add_action( 'admin_init', 'remove_dashboard_meta' ); 

function my_footer_shh() {
	remove_filter( 'update_footer', 'core_update_footer' ); 
	add_filter( 'screen_options_show_screen', '__return_false' );

	remove_submenu_page( 'index.php', 'update-core.php');
	remove_menu_page( 'jetpack');                    //Jetpack* 
	remove_menu_page( 'edit.php');                   //Posts
	remove_menu_page( 'upload.php');                 //Media
	remove_menu_page( 'edit.php?post_type=page');    //Pages
	remove_menu_page( 'edit-comments.php');          //Comments
	remove_menu_page( 'themes.php');                 //Appearance
	remove_menu_page( 'plugins.php');                //Plugins
	remove_menu_page( 'users.php');                  //Users
	remove_menu_page( 'tools.php');                  //Tools
	remove_menu_page( 'options-general.php');        //Settings
}
add_action( 'admin_menu', 'my_footer_shh' );


function searchPlayer($search = ''){

	global $wpdb;
	$customer_name = $_POST['search_key'];

	$member_table = $wpdb->prefix. 'chaos_members';
	$query = "SELECT * FROM {$member_table} WHERE  name LIKE '".$customer_name."%' AND active = 1";
	$data['items'] =  $wpdb->get_results( $query ) ;
	echo json_encode($data);
	die();
}
add_action( 'wp_ajax_searchPlayer', 'searchPlayer' );
add_action( 'wp_ajax_nopriv_searchPlayer', 'searchPlayer' );

function add_dashboard_widgets() {
	add_meta_box( 'event', 'Today Events List', 'events_list', 'dashboard', 'normal', 'high' );
} 
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );

function events_list( $post, $callback_args ) {
	include('billing/ajax/listing-template/event-list.php');
}

?>