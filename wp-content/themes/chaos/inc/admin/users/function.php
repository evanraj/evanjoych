<?php
require get_template_directory() . '/inc/admin/users/class-users.php';

function load_users_scripts() {
	wp_enqueue_script( 'users-script', get_template_directory_uri() . '/inc/admin/users/inc/js/users.js', array('jquery'), false, false );
}
add_action( 'admin_enqueue_scripts', 'load_users_scripts' );
add_action('admin_menu', 'admin_menu_register_user');

function admin_menu_register_user(){


add_menu_page(
        __( 'Member', 'chaos'),
        'Member',
        'manage_options',
        'add_admin',
        'add_admin',
        'dashicons-businessman',
        9
    );
    add_submenu_page('add_admin', 'New Member', 'New  Member', 'manage_options', 'add_admin', 'add_admin' );
    add_submenu_page('add_admin', 'Member List', 'Member List', 'manage_options', 'list_admin_users', 'list_admin_users' );


}


//<------- Admin ---->

function add_admin() {
    require get_template_directory() .'/inc/admin/users/add-admin.php';
}
function list_admin_users() {
    require get_template_directory() .'/inc/admin/users/listing/user-list.php';
}



function create_admin_user() {
	global $wpdb;
	$member_table   		= $wpdb->prefix.'chaos_members';
	$data['success'] 		= 0;
	$data['msg'] 			= 'User Name Already Used! OR Email Already Used! Please Check and Create again!';
	$data['redirect'] 		= 0;

	$params = array();
	parse_str($_POST['data'], $params);
	$user_name = $params['user_name'];
	$password = $params['password'];
	$mobile = $params['mobile'];
	$email = $params['email'];
	$user_role = $params['role'];

	$user_id = username_exists( $user_name );

	if ( !$user_id && email_exists($email) == false ) {
			$user_id = wp_create_user( $user_name, $password, $email ); 
		wp_update_user(array('ID' => $user_id,'role' => $user_role));
		update_user_meta($user_id, 'mobile', $mobile);


		$member_id = get_unused_id();
			
		 $member_data =  array( 
	        'user_id' 		=> 	$user_id,
	        'first_name' 	=> 	$params['first_name'],
	        'membership_no' =>	$member_id,
	        'phone'  		=> 	$params['mobile'],
	        );
	    $wpdb->insert($member_table,$member_data);
	    $id = $wpdb->insert_id;


		$data['success'] = 1;
		$data['msg'] 	= 'User Account Created!';	
		$data['redirect'] = network_admin_url( 'admin.php?page=list_admin_users');
	}
	echo json_encode($data);
	die();
}
add_action( 'wp_ajax_create_admin_user', 'create_admin_user' );
add_action( 'wp_ajax_nopriv_create_admin_user', 'create_admin_user' );

function update_admin_user() {

	global $wpdb;
	$member_table   		= $wpdb->prefix.'chaos_members';

	$data['success'] 	= 0;
	$data['msg'] 	= 'Something Went Wrong Please Try Again!';
	$data['redirect'] 	= 0;


	$params = array();
	parse_str($_POST['data'], $params);
	$user = false;

	$current_role = array();
	if(isset($params['user_id']) && ( get_user_by('id', $params['user_id'])->user_email == $params['email'] || email_exists($params['email']) == false )  && $user = get_userdata($params['user_id']) ) {
		$user_id = $params['user_id'];
		$current_role = implode(', ', $user->roles);
	} else {
		$data['msg'] = 'User Not Exist! OR Email Already Used! Please Check and Update again';
	}


	if( $user ) {

		$user_name = $params['user_name'];
		$password = $params['password'];
		$mobile = $params['mobile'];
		$email = $params['email'];
		$user_role = $params['role'];

		$u = new WP_User( $user_id );
		$u->remove_role( $current_role );

		$update_data = array('ID' => $user_id, 'user_pass' => $password, 'role' => $user_role, 'user_email' => $email);
		$success = wp_update_user($update_data);
		update_user_meta($user_id, 'mobile', $mobile);

		$member_data =  array( 
	        'phone'  => $params['mobile'],
	        );
	    $wpdb->update($member_table,$member_data,array('user_id'=> $user_id ));




		$data['success'] = 1;
		$data['msg'] 	= 'User Detail Updated!';
		$data['redirect'] = network_admin_url( 'admin.php?page=list_admin_users');
	}


	echo json_encode($data);
	die();
}
add_action( 'wp_ajax_update_admin_user', 'update_admin_user' );
add_action( 'wp_ajax_nopriv_update_admin_user', 'update_admin_user' );



 function get_unused_id() { 

	global $wpdb;
	$member_table   		= $wpdb->prefix.'chaos_members';
    $random_unique_int = 2147483648 + mt_rand( -2147482448, 2147483647 );
    $member_no = 'CH'.date("y").$random_unique_int;

    $query  = "SELECT * FROM ${member_table} WHERE membership_no = '$member_no'";

    if( $inv_result = $wpdb->get_row($query))
    {
   
        return get_unused_id();
    }
    else {
    	 return $member_no;
    }
       
}   

function getMemberDetails($member_id = 0){
global $wpdb;
$member_table = $wpdb->prefix.'chaos_members';
$query = "SELECT * FROM ${member_table} WHERE user_id = '$member_id'";
$member_result = $wpdb->get_row($query);
return $member_result;

}

?>