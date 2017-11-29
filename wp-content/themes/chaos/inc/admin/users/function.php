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
 

 add_menu_page(
        __( 'Credit/Debit Notes', 'chaos'),
        'Credit/Debit Notes',
        'manage_options',
        'add_credit_debit',
        'add_credit_debit',
        'dashicons-universal-access',
        9
    );
    add_submenu_page('add_credit_debit', 'Add Credit/Debit Notes', 'Add Credit/Debit Notes', 'manage_options', 'add_credit_debit', 'add_credit_debit' );

    add_menu_page(
        __( 'Redeem Points', 'chaos'),
        'Redeem Points',
        'manage_options',
        'add_redeem_points',
        'add_redeem_points',
        'dashicons-universal-access',
        9
    );
    add_submenu_page('add_redeem_points', 'Add Credit/Debit Notes', 'Add Credit/Debit Notes', 'manage_options', 'add_redeem_points', 'add_redeem_points' );

     add_menu_page(
        __( 'Point History', 'chaos'),
        'Point History',
        'manage_options',
        'view_history',
        'view_history',
        'dashicons-pressthis',
        9
    );
    add_submenu_page('view_history', 'Add Credit/Debit Notes', 'Add Credit/Debit Notes', 'manage_options', 'view_history', 'view_history' );
  

}


//<------- Admin ---->

function add_admin() {
    require get_template_directory() .'/inc/admin/users/add-admin.php';
}
function list_admin_users() {
    require get_template_directory() .'/inc/admin/users/listing/user-list.php';
}


function add_credit_debit(){
	require get_template_directory() .'/inc/admin/users/credit-debit-notes.php';	
}

function add_redeem_points(){
	require get_template_directory() .'/inc/admin/users/redeem.php';	
}

function view_history(){
	require get_template_directory() .'/inc/admin/users/history.php';
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

function getMemberDetails($member_id = 0) {
	global $wpdb;
	$member_table = $wpdb->prefix.'chaos_members';
	$query = "SELECT * FROM ${member_table} WHERE user_id = '$member_id'";
	$member_result = $wpdb->get_row($query);
	return $member_result;

}


function getRedeemPoint($member_id = 0) {
	global $wpdb;
	$member_table = $wpdb->prefix.'chaos_members';
	$query = "SELECT (case when  member_table.balance_points >= 1000 then 1 else 0 end ) as is_eligible,member_table.* FROM (SELECT `earned_points`,`redeem_points`,`balance_points`,first_name,user_id FROM {$member_table} WHERE `user_id`= $member_id) as member_table";
	$member_result = $wpdb->get_row($query);
	return $member_result;
}

function getPointHistory($member_id = 0){
	global $wpdb;
	$history_table = $wpdb->prefix.'chaos_credits_points';
	$query = "SELECT `credit_points`,`date`,
(case when key_value = 'debit_notes' or key_value = 'credit_notes'  then 'By Point Adjust' 
when key_value = 'foot_ball'  then 'By Foot Ball Billing'
when key_value = 'lazertag_bill'  then 'By Lazertag Billing'
when key_value = 'gaming_bill' then 'By Gaming Billing'
when key_value = 'redeem_table' then 'By Redeem'
 else '' end
) as key_value,
(case when key_value = 'debit_notes'  or key_value = 'redeem_table'  then '-' 
when (key_value = 'foot_ball' or key_value = 'credit_notes' or key_value = 'lazertag_bill' or key_value = 'gaming_bill')  then '+'
 else '' end
) as sign,
(case when key_value = 'debit_notes' or key_value = 'redeem_table' then 'Redeem' else 'Earned' end) as type FROM {$history_table} WHERE `member_id` ={$member_id} and `active`=1 order by  `date` desc limit 20";
	$history_result = $wpdb->get_results($query);
	return $history_result;

}

//Football Billing List

function user_listing(){
  include( get_template_directory().'/inc/admin/users/ajax_loading/user-list.php' );
  die();
}

add_action( 'wp_ajax_user_listing','user_listing' );
add_action( 'wp_ajax_nopriv_user_listing','user_listing' );
?>

