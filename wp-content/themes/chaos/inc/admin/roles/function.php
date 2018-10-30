<?php


require get_template_directory() . '/inc/admin/roles/class-roles.php';

function load_roles_scripts() {
	wp_enqueue_script( 'roles-script', get_template_directory_uri() . '/inc/admin/roles/inc/js/roles.js', array('jquery'), false, false );
}
add_action( 'admin_enqueue_scripts', 'load_roles_scripts' );



add_action('admin_menu', 'admin_menu_register_role');
function admin_menu_register_role(){
global $src_capabilities;

	add_menu_page(
	    __( 'Admin Roles', 'src'),
	    'Roles',
	    $src_capabilities['roles']['permission']['add_roles'],
	    'add_admin_role',
	    'add_admin_role',
	    'dashicons-awards',
	    13
	);
	add_submenu_page('add_admin_role', 'New Role', 'New Role', $src_capabilities['roles']['permission']['add_roles'], 'add_admin_role', 'add_admin_role' );
	add_submenu_page('add_admin_role', 'Role List', 'Role List', $src_capabilities['roles']['permission']['role_list'], 'list_roles', 'list_roles' );


}


//<----- Role------>
function add_admin_role() {
    require get_template_directory() . '/inc/admin/roles/add-role.php';
}
function list_roles() {
    require get_template_directory() . '/inc/admin/roles/listing/role-list.php';
}


function src_global_var() {
    global $src_capabilities;
	$src_capabilities = array( 
  
		'football' => array(
			'name' => 'Football',
			'data' => array(
				'football_biling' => 'Football Billing Access',
			),
			'permission' => array(
				'football_biling' => (is_super_admin()) ? 'manage_options' : 'football_biling',
			),
		),
		'lazertag' => array(
			'name' => 'Lazertag',
			'data' => array(
				'lazertag_biling' => 'Lazertag Billing Access',
			),
			'permission' => array(
				'lazertag_biling' => (is_super_admin()) ? 'manage_options' : 'lazertag_biling',
			),			
		),
		'gaming' => array(
			'name' => 'Gaming',
			'data' => array(
				'gaming_billing' => 'Gaming Billing Access',
			),
			'permission' => array(
				'gaming_billing' => (is_super_admin()) ? 'manage_options' : 'gaming_billing',
			),			
		),

		'utility' => array(
			'name' => 'Utility',
			'data' => array(
				'add_utility' => 'Add Utility', 
				'view_utility' => 'Utility List', 
				'utility_setting' => 'Utility Settings', 
			),
			'permission' => array(
				'add_utility' => (is_super_admin()) ? 'manage_options' : 'add_utility',
				'view_utility' => (is_super_admin()) ? 'manage_options' : 'view_utility', 
				'utility_setting' => (is_super_admin()) ? 'manage_options' : 'utility_setting', 
			),			

		),

		'admin_add' => array(
			'name' => 'Admin Users',
			'data' => array(
				'add_membership' => 'Add New Member', 
				'list_membership' => 'Member List',
			),
			'permission' => array(
				'add_membership' => (is_super_admin()) ? 'manage_options' : 'add_membership',
				'list_membership' => (is_super_admin()) ? 'manage_options' : 'list_membership', 
			),			
		),
		'admin_user' => array(
			'name' => 'Admin Users',
			'data' => array(
				'add_admin' => 'Add New Member', 
				'list_admin_users' => 'Member List',
			),
			'permission' => array(
				'add_admin' => (is_super_admin()) ? 'manage_options' : 'add_admin',
				'list_admin_users' => (is_super_admin()) ? 'manage_options' : 'list_admin_users', 
			),			
		),
		'history' => array(
			'name' => 'Add History',
			'data' => array(
				'view_history' => 'Add New Admin', 
			),
			'permission' => array(
				'view_history' => (is_super_admin()) ? 'manage_options' : 'view_history',
			),			
		),
		'add_cd' => array(
			'name' => 'Add Credit/Debit',
			'data' => array(
				'add_credit_debit' => 'Add Credit Debit', 
			),
			'permission' => array(
				'add_credit_debit' => (is_super_admin()) ? 'manage_options' : 'add_credit_debit',
			),			
		),
		'add_redeem' => array(
			'name' => 'Add Redeem Points',
			'data' => array(
				'add_redeem_points' => 'Add New Admin',
			),
			'permission' => array(
				'add_redeem_points' => (is_super_admin()) ? 'manage_options' : 'add_redeem_points',
				
			),			
		),
		'roles' => array(
			'name' => 'Admin Roles',
			'data' => array(
				'add_roles' => 'Add New Role', 
				'role_list' => 'Role List', 
			),
			'permission' => array(
				'add_roles' => (is_super_admin()) ? 'manage_options' : 'add_roles',
				'role_list' => (is_super_admin()) ? 'manage_options' : 'role_list', 
			),			

		),

		'event' => array(
			'name' => 'Events',
			'data' => array(
				'edit_events' =>'Edit Events',
				'publish_events' =>'Publish Events',
				'delete_events' =>'Delete Events',
				'edit_others_events' =>'Edit Others\' Events',
				'delete_others_events' =>'Delete Other\'s Events',
				'read_private_events' =>'Read Private Events',
				'manage_venues' =>'Manage Venues',
				'manage_event_categories' =>'Manage Event Categories & Tags',
				'calender_view' =>'Calender View',
			),
			'permissions' => array(
				'edit_events' => (is_super_admin()) ? 'manage_options' :'edit_events',
				'publish_events' => (is_super_admin()) ? 'manage_options' :'publish_events',
				'delete_events' => (is_super_admin()) ? 'manage_options' :'delete_events',
				'edit_others_events' => (is_super_admin()) ? 'manage_options' :'edit_others_events',
				'delete_others_events' => (is_super_admin()) ? 'manage_options' :'delete_others_events',
				'read_private_events' => (is_super_admin()) ? 'manage_options' :'read_private_events',
				'manage_venues' => (is_super_admin()) ? 'manage_options'  :'manage_venues',
				'manage_event_categories' => (is_super_admin()) ? 'manage_options' :'manage_event_categories',
				'calender_view' => (is_super_admin()) ? 'manage_options' :'calender_view',
			),			

		),
	);

}
add_action( 'init', 'src_global_var' );


function create_roles() {

	$data['success'] 	= 0;
	$data['msg'] 	= 'Something Went Wrong Please Try Again!';
	$data['redirect'] 	= 0;

	global $src_capabilities;
	$params = array();
	parse_str($_POST['data'], $params);


	$role_name 	=  	$params['role_name'];
	$role_slug 	= 	$params['role_slug'];

	$grant_true		= true;
	$grant_false 	= false;	

	foreach ($params['main_menu'] as $cap_value) {
		if($src_capabilities[$cap_value]) {

			if(is_array($src_capabilities[$cap_value])) {
				foreach ($src_capabilities[$cap_value]['data'] as $cap_key => $c_value) {
					$capabilities[] = $cap_key;
				}
			} else {
				$capabilities[] = $cap_value;
			}
		} else {
			$capabilities[] = $cap_value;
		}
	}
	$new_cap = array_unique($capabilities); 
	$new_cap[] = 'read';


	$new_role = add_role( $role_slug, __( $role_name ) );
	if ( null !== $new_role ) {
		foreach ($new_cap as  $cap_value) {
			$new_role->add_cap( $cap_value, $grant_true );
		}
		$data['success'] = 1;
		$data['msg'] 	= 'Role Created!';
		$data['redirect'] = network_admin_url( 'admin.php?page=add_admin_role' );
	}


	echo json_encode($data);
	die();
}
add_action( 'wp_ajax_create_roles', 'create_roles' );
add_action( 'wp_ajax_nopriv_create_roles', 'create_roles' );


function update_roles() {
	$data['success'] 	= 0;
	$data['msg'] 	= 'Role Not Exist Please Try Again!';
	$data['redirect'] 	= 0;

	global $src_capabilities;
	$params = array();
	parse_str($_POST['data'], $params);

	$current_cap = get_role($params['role_slug']);
	$editable_roles = get_editable_roles();


	$capabilities = array();

	if($params['main_menu']) {
		foreach ($params['main_menu'] as $cap_value) {
			if($src_capabilities[$cap_value]) {
				if(is_array($src_capabilities[$cap_value])) {
					foreach ($src_capabilities[$cap_value]['data'] as $cap_key => $c_value) {
						$capabilities[] = $cap_key;
					}
				} else {
					$capabilities[] = $cap_value;
				}
			} else {
				$capabilities[] = $cap_value;
			}
		}
	}


	$new_cap = array_unique($capabilities);  
	$new_cap[] = 'read';

	$new_fliped1 = array_flip($new_cap);
	$new_fliped2 = $current_cap->capabilities;

	$new_data 		= array_diff_key($new_fliped1, $new_fliped2);
	$delete_data 	= array_diff_key($new_fliped2, $new_fliped1);


	if( count($new_data) > 0) {
		foreach ($new_data as $n_key => $n_value) {
			$current_cap->add_cap( $n_key );
		}
	}
	if( count($delete_data) > 0) {
		foreach ($delete_data as $d_key => $d_value) {
			$current_cap->remove_cap( $d_key );
		}
	}

	$data['success'] = 1;
	$data['msg'] 	= 'Role Updated!';

	echo json_encode($data);
	die();

}
add_action( 'wp_ajax_update_roles', 'update_roles' );
add_action( 'wp_ajax_nopriv_update_roles', 'update_roles' );