<?php 


//for Football Billing
require get_template_directory() . '/inc/admin/utility-manager/pagination-functions.php';



//Utility Manager
add_action('admin_menu', 'admin_menu_register_utility');

function admin_menu_register_utility(){

global $src_capabilities;

    add_menu_page(
        __( 'Utility', 'chaos'),
        'Add Utility',
        $src_capabilities['utility']['permission']['add_utility'],
        'add_utility',
        'add_utility',
        'dashicons-calendar-alt',
        4
    );
    add_submenu_page('add_utility', 'Add Utility', 'Add Utility', $src_capabilities['utility']['permission']['add_utility'], 'add_utility', 'add_utility');
    add_submenu_page('add_utility', 'View Utility', 'View Utility', $src_capabilities['utility']['permission']['view_utility'], 'view_utility', 'view_utility' );
    add_submenu_page('add_utility', 'Utility Setting', 'Utility Setting', $src_capabilities['utility']['permission']['utility_setting'], 'utility_setting', 'utility_setting' );
    }


add_action( 'admin_enqueue_scripts', 'custom_wp_admin_scripts_utility' );
function custom_wp_admin_scripts_utility() {
  //utility Style,Scripts,Popup and datepicker
  wp_enqueue_script( 'utility', get_template_directory_uri() . '/inc/admin/utility-manager/js/utility.js', array ( 'jquery' ), true, false);
  wp_enqueue_script( 'bpopup', get_template_directory_uri() . '/inc/admin/utility-manager/js/jquery.bpopup.min.js', array ( 'jquery' ), true, false);
  wp_enqueue_script( 'easing', get_template_directory_uri() . '/inc/admin/utility-manager/js/jquery.easing.1.3.js', array ( 'jquery' ), true, false);
 
}




//Utility
function add_utility() {
    require get_template_directory() . '/inc/admin/utility-manager/views/add-utility.php';
}

function view_utility() {
    require get_template_directory() . '/inc/admin/utility-manager/list-template/list_utility.php';
}

function utility_setting() {
    require get_template_directory() . '/inc/admin/utility-manager/views/utility_setting.php';
}



//Utility Manager
function utility_manager(){

include( get_template_directory().'/inc/admin/utility-manager/ajax/listing-template/list_utility.php' );
  die();
}
add_action( 'wp_ajax_utility_manager', 'utility_manager' );
add_action( 'wp_ajax_nopriv_utility_manager', 'utility_manager' );

//Popup Utility Manager
function popup_utility(){
  include( get_template_directory().'/inc/admin/utility-manager/ajax/utility_popup.php' );
  die();
}
add_action( 'wp_ajax_popup_utility','popup_utility' );
add_action( 'wp_ajax_nopriv_popup_utility','popup_utility' );

//Utility Status
function utility_status(){
	global $wpdb;
  	$status =$_POST['status'];
  	$id =$_POST['id'];
  	if(isset($_POST['postponed_days'])){
  		$postponed_days = $_POST['postponed_days'];
  	}
  	else{
  		$postponed_days=0;
  	}


  	$user_table = $wpdb->prefix.'chaos_utility';
  	$utility_details = $wpdb->prefix.'chaos_utility_details';

    if($status != 'postponed') {
      $nxt_utility_query = "SELECT (CASE
        WHEN ut_periods = 'w'
        THEN DATE(ut_utillity_date + INTERVAL (ut_duration) WEEK )
        ELSE DATE(ut_utillity_date + INTERVAL (ut_duration) MONTH )
        END ) as next_pay_date FROM wp_chaos_utility WHERE id = ".$id;
      $nxt_utility = $wpdb->get_row( $nxt_utility_query );

      $utility_data = array(
        'ut_utility_status' => $status,
        'ut_postponed_days' => $postponed_days,
        'ut_utillity_date' => $nxt_utility->next_pay_date,
      );


    } else {
      $utility_data = array(
        'ut_utility_status' => $status,
        'ut_postponed_days' => $postponed_days,
      );    
    }



      $update_status = $wpdb->update( $user_table,$utility_data,array( 'id' => $id ));



  	//insert
  	$utility_data=array(
      'utility_id'		    => $id,
      'ut_utility_status' => $status,
      'ut_postponed_days' => $postponed_days 
    );
  	$update_status = $wpdb->insert( $utility_details,$utility_data);

  die();
}
add_action( 'wp_ajax_utility_status','utility_status' );
add_action( 'wp_ajax_nopriv_utility_status','utility_status' );

function utility_database(){
    global $wpdb;
    $allocate_system      = $wpdb->prefix.'chaos_utility_setting';
    $select_id_allocate   = "SELECT  * from ${allocate_system} where active = 1";
    $select_allocate      = $wpdb->get_results( $select_id_allocate);
    
    return $select_allocate;

}
function utility_emailid(){
    global $wpdb;
    $allocate_system      = $wpdb->prefix.'chaos_utility_setting';
    $select_id_allocate   = "SELECT  * from ${allocate_system} where active = 1 ORDER BY id Desc";
    $select_allocate      = $wpdb->get_row( $select_id_allocate);
    
    return $select_allocate;

}


?>