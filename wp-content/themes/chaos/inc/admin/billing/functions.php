<?php

date_default_timezone_set('Asia/Kolkata');


/*Sowmiya*/

//for Football Billing

require get_template_directory() . '/inc/admin/billing/pagination-functions.php';

add_action('admin_menu', 'admin_menu_register_billing');

function admin_menu_register_billing(){

 //Billing Manager
    add_menu_page(
        __( 'Football Billing', 'chaos'),
        'Football Billing',
        'manage_options',
        'football_billing',
        'football_billing',
        'dashicons-groups',
        1
    );
     add_menu_page(
        __( 'Lazertag Billing', 'chaos'),
        'Lazertag Billing',
        'manage_options',
        'lazertag_bill',
        'lazertag_bill',
        'dashicons-shield',
        2
    );
      add_menu_page(
        __( 'Gaming Billing', 'chaos'),
        'Gaming Billing',
        'manage_options',
        'gaming_billing',
        'gaming_billing',
        'dashicons-desktop',
        3
    );
    //Foot ball Billing
    add_submenu_page('football_billing', 'Add Foot Ball Billing', 'Add Foot Ball Billing', 'manage_options', 'football_billing', 'football_billing');
    add_submenu_page('football_billing', 'View Foot Ball Billing', 'View Foot Ball Billing', 'manage_options', 'view_football_billing', 'view_football_billing' );
    add_submenu_page('football_billing', 'Price Setting', 'Price Setting', 'manage_options', 'add_football_price_setting', 'add_football_price_setting' );
    add_submenu_page('football_billing', 'Display Football Billing', '', 'manage_options', 'display_football', 'display_football' );


 	//lazer billing
    add_submenu_page('lazertag_bill', 'Add Lazer tag Billing', 'Add Lazer tag Billing', 'manage_options', 'lazertag_bill', 'lazertag_bill');
    add_submenu_page('lazertag_bill', 'View Lazer tag Billing', 'View Lazer tag Billing', 'manage_options', 'view_lazertag_bill', 'view_lazertag_bill' );
    add_submenu_page('lazertag_bill', 'Price Setting', 'Price Setting', 'manage_options', 'add_lazertag_price_setting', 'add_lazertag_price_setting' );
    add_submenu_page('lazertag_bill', 'Display Lazer Tag', '', 'manage_options', 'display_lazertag', 'display_lazertag' );


    //computer gaming
    add_submenu_page('gaming_billing', 'Add Gaming Billing', 'Add Gaming Billing', 'manage_options', 'gaming_billing', 'gaming_billing');
    add_submenu_page('gaming_billing', 'Computer Gaming Billing', 'View Gaming Billing', 'manage_options', 'view_gaming_billing', 'view_gaming_billing' );
    add_submenu_page('gaming_billing', 'Price Setting', 'Price Setting', 'manage_options', 'add_gaming_price_setting', 'add_gaming_price_setting' );
    add_submenu_page('gaming_billing', 'Display Gaming Billing', '', 'manage_options', 'display_gaming', 'display_gaming' );
    add_submenu_page('gaming_billing', 'Add System', 'Add & View System History', 'manage_options', 'add_gaming_system', 'add_gaming_system' );
    add_submenu_page('gaming_billing', 'Allocate System', 'Allocate System', 'manage_options', 'allocate_gaming_system', 'allocate_gaming_system' );
  
    


}


add_action( 'admin_enqueue_scripts', 'custom_wp_admin_scripts_billing' );
function custom_wp_admin_scripts_billing() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/inc/admin/billing/css/bootstrap-material-datetimepicker.css',false,'1.0','all');
  wp_enqueue_style( 'billing', get_template_directory_uri() . '/inc/admin/billing/css/billing.css',false,'1.0','all');

    //Billing Js
 
 
 //Create Site URL for Print Function
  

//Time Picker
  wp_enqueue_script('jquery-time', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js');
  wp_enqueue_script('jquery-material', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js');
  wp_enqueue_script('jquery-master', 'https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js');
  wp_enqueue_script('jquery-moment', 'http://momentjs.com/downloads/moment-with-locales.min.js');
  wp_enqueue_script( 'billing_style', get_template_directory_uri() . '/inc/admin/billing/js/bootstrap-material-datetimepicker.js', array ( 'jquery' ), true, false);



//Billing Js
  wp_enqueue_script( 'billing', get_template_directory_uri() . '/inc/admin/billing/js/billing.js', array ( 'jquery' ), true, false);

  wp_localize_script( 'billing', 'printajax', array( 'internalprint' => site_url( '' )));
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-ui-core');
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_style('jquery-ui-css', 'http://code.jquery.com/ui/1.8.24/themes/blitzer/jquery-ui.css');

}

//Billing
//Foot ball Billing
function football_billing() {
    require get_template_directory() .'/inc/admin/billing/views/football_billing.php';
}

function view_football_billing() {
    require get_template_directory() .'/inc/admin/billing/list-template/list_football_billing.php';

}
function add_football_price_setting() {
     require get_template_directory() .'/inc/admin/billing/views/football_price_setting.php';
}
function display_football(){
     require get_template_directory() .'/inc/admin/billing/views/display_football_billing.php';
}

//<---- End Foot ball Billing ----->


//Lazer Tag Billing
function lazertag_bill() {
    require get_template_directory() .'/inc/admin/billing/views/lazertag_billing.php';
}

function view_lazertag_bill() {
    require get_template_directory() .'/inc/admin/billing/list-template/list_lazertag_billing.php';
}
function add_lazertag_price_setting() {
     require get_template_directory() .'/inc/admin/billing/views/lazertag_price_setting.php';
}

function display_lazertag(){
     require get_template_directory() .'/inc/admin/billing/views/display_lazertag_billing.php';
}
//<--- End Lazer Tag Billing--->


//Gaming Billing
function gaming_billing() {
    require get_template_directory() .'/inc/admin/billing/views/gaming_billing.php';
}

function view_gaming_billing() {
    require get_template_directory() .'/inc/admin/billing/list-template/list_gaming_billing.php';
}

function add_gaming_price_setting(){
     require get_template_directory() .'/inc/admin/billing/views/gaming_price_setting.php';
}
function add_gaming_system(){
     require get_template_directory() .'/inc/admin/billing/views/gaming_system.php';
}
function allocate_gaming_system(){
     require get_template_directory() .'/inc/admin/billing/views/gaming_system_allocate.php';
}

function display_gaming(){
     require get_template_directory() .'/inc/admin/billing/views/display_gaming_billing.php';
}



//<----- End Gaming ----->

//Select Members 
function searchMember(){
  global $wpdb;
  $data['success'] = 0;
  $member_table   = $wpdb->prefix.'chaos_members';
  $user_table   = $wpdb->prefix.'users';
  $search_term  = $_POST['search_key'];
  $query        = "SELECT member.*,user_table.user_login FROM {$member_table} as member left join {$user_table} as user_table on member.`user_id` = user_table.id where user_table.user_login like '%${search_term}%' or member.membership_no like '%${search_term}%' ";

  if( $data['items'] = $wpdb->get_results( $query, ARRAY_A ) ) {
    $data['success'] = 1;  
  }
  echo json_encode($data);
  die();
}

add_action( 'wp_ajax_searchMember','searchMember' );
add_action( 'wp_ajax_nopriv_searchMember','searchMember' );



//member insert form
function ft_member_insert() {
  global $wpdb;
  $football         = $wpdb->prefix.'chaos_football_billing';
  $query            = "SELECT * FROM {$football} WHERE active = 1 and was_bulid='0'";
  $football_id      = $wpdb->get_row( $query, OBJECT);
  if($football_id) {
    $id=$football_id->id;
  }
  else {

    $football_data =  array( 
    'ft_member_name'  => $_POST['name'],
   );

    $wpdb->insert($football,$football_data);
    $id = $wpdb->insert_id;
  }
  

  $football_bill_no =  array(
        'member_id'                 => $_POST['member_id'],
        'ft_member_name'            => $_POST['name'],
        'ft_member_phone_number'    => $_POST['phone'],
        'ft_membership_no'          => $_POST['membership_no'],
        'ft_date'                   => $_POST['billing_date'],
        'ft_bill_no'                => 'INV'.$id,
   );


  $wpdb->update( $football , $football_bill_no ,array( 'id' => $id ));
  $data['member_no']  ='INV'.$id;
  $data['user_id']         = $id; 
  echo json_encode($data);
  die();

}

add_action( 'wp_ajax_ft_member_insert','ft_member_insert' );
add_action( 'wp_ajax_nopriv_ft_member_insert','ft_member_insert' );

//
//Fetch Football Princing
//
function footballPricing(){
  global $wpdb;
  $data['success'] = 0;
  $user_table         = $wpdb->prefix.'chaos_bill_princing';
  $query              = "SELECT * FROM {$user_table} WHERE active = 1 order by id desc";
  $football_pricing   = $wpdb->get_row( $query, OBJECT);
  echo $football_pricing->p_football_hour_week;
  die();
}

add_action( 'wp_ajax_footballPricing','footballPricing' );
add_action( 'wp_ajax_nopriv_footballPricing','footballPricing' );


//Football Billing List

function football_listing(){
  include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_football_billing.php' );
  die();
}

add_action( 'wp_ajax_football_listing','football_listing' );
add_action( 'wp_ajax_nopriv_football_listing','football_listing' );



//
//For Gaming Insert
//
//member insert form
function gaming_member_insert() {
  global $wpdb;
  $gaming         = $wpdb->prefix.'chaos_gaming_billing';
  $query          = "SELECT * FROM {$gaming} WHERE active = 1 and was_bulid='0'";
  $gaming_id      = $wpdb->get_row( $query, OBJECT);
  if($gaming_id) {
    $id=$gaming_id->id;
  }
  else {

    $gaming_data =  array( 
    'gaming_member_name'  => $_POST['name'],
   );

    $wpdb->insert($gaming,$gaming_data);
    $id = $wpdb->insert_id;
  }
  

    $gaming_data_update =  array(
        'member_id'                 => $_POST['member_id'],
        'gaming_member_name'            => $_POST['name'],
        'gaming_member_phone_number'    => $_POST['phone'],
        'gaming_membership_no'          => $_POST['membership_no'],
        'gaming_date'                   => $_POST['billing_date'],
        'gaming_bill_no'                => 'INV'.$id,
   );


    $wpdb->update( $gaming , $gaming_data_update ,array( 'id' => $id ));
    $data['member_no']  ='INV'.$id;
    $data['user_id']         = $id; 
    echo json_encode($data);
    die();
}

add_action( 'wp_ajax_gaming_member_insert','gaming_member_insert' );
add_action( 'wp_ajax_nopriv_gaming_member_insert','gaming_member_insert' );


//Gaming Pricing
function gamingPricing(){
    global $wpdb;
    $data['success'] = 0;
    $user_table         = $wpdb->prefix.'chaos_bill_princing';
    $query              = "SELECT * FROM {$user_table} WHERE active = 1 order by id desc";
    $football_pricing   = $wpdb->get_row( $query, OBJECT);
    echo $football_pricing->p_gaming_hour_week;
    die();
}

add_action( 'wp_ajax_gamingPricing','gamingPricing' );
add_action( 'wp_ajax_nopriv_gamingPricing','gamingPricing' );

//Gaming Listing

function gaming_listing(){
    include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_gaming_billing.php' );
    die();
}

add_action( 'wp_ajax_gaming_listing','gaming_listing' );
add_action( 'wp_ajax_nopriv_gaming_listing','gaming_listing' );


//<------------ Start Lazer Tag------>

function lazertag_member_insert() {
    global $wpdb;
    $lazertag         = $wpdb->prefix.'chaos_lazertag_billing';
    $query            = "SELECT * FROM {$lazertag} WHERE active = 1 and was_bulid='0'";
    $lazertag_id      = $wpdb->get_row( $query, OBJECT);
    if($lazertag_id) {
        $id=$lazertag_id->id;
    }
    else {

        $lazertag_data =  array( 
        'lazertag_member_name'  => $_POST['name'],
    );

    $wpdb->insert($lazertag,$lazertag_data);
    $id = $wpdb->insert_id;
    }


    $lazertag_data_update =  array(
        'member_id'                       => $_POST['member_id'],
        'lazertag_member_name'            => $_POST['name'],
        'lazertag_member_phone_number'    => $_POST['phone'],
        'lazertag_membership_no'          => $_POST['membership_no'],
        'lazertag_date'                   => $_POST['billing_date'],
        'lazertag_bill_no'                => 'INV'.$id,
    );


    $wpdb->update( $lazertag , $lazertag_data_update ,array( 'id' => $id ));
    $data['member_no']  ='INV'.$id;
    $data['user_id']         = $id; 
    echo json_encode($data);
    die();
}

add_action( 'wp_ajax_lazertag_member_insert','lazertag_member_insert' );
add_action( 'wp_ajax_nopriv_lazertag_member_insert','lazertag_member_insert' );


//Gaming Pricing
function lazertagPricing(){
    global $wpdb;
    $data['success']    = 0;
    $price              = $_POST['price'];
    $user_table         = $wpdb->prefix.'chaos_bill_princing';
    $query              = "SELECT * FROM {$user_table} WHERE active = 1 order by id desc";
    $football_pricing   = $wpdb->get_row( $query, OBJECT);
    if($price == 'slot'){
        echo $football_pricing->p_lasertag_head_week;
    }
    else if($price == 'hours'){
        echo $football_pricing->p_lasertag_hour_week;
    }
    else {  
        echo $football_pricing->p_lasertag_happyhours_week;
    }

    die();
}

add_action( 'wp_ajax_lazertagPricing','lazertagPricing' );
add_action( 'wp_ajax_nopriv_lazertagPricing','lazertagPricing' );

//lazer tag billing

function lazertag_listing(){
    include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_lazertag_billing.php' );
    die();
}

add_action( 'wp_ajax_lazertag_listing','lazertag_listing' );
add_action( 'wp_ajax_nopriv_lazertag_listing','lazertag_listing' );


/*----------- End Lazer Tag------------*/


function updateSettings($key = '', $value = '')
{

  	global $wpdb;
  	$setting_table  = $wpdb->prefix.'chaos_setting';
  	$data_query     ="SELECT * FROM $setting_table WHERE active = 1 and  keyword = '$key'";
  

    if($wpdb->get_row( $data_query, ARRAY_A )) {

      	$data_update =  array(
        	'keyword'           => $key,
        	'value'             => $value,        
      	); 
      	$wpdb->update( $setting_table ,$data_update, array( 'keyword' => $key ));
      	// var_dump($wpdb->last_query);
    }
    else {
      	$data_update =  array(
        	'keyword'           => $key,
        	'value'             => $value,        
      	);  

      	$wpdb->insert( $setting_table, $data_update); 
    } 
}

function updateRepeaterSettings($key = '', $value = '')
{
  global $wpdb;
  $setting_table  = $wpdb->prefix.'chaos_setting';
  $data_query     ="SELECT * FROM $setting_table WHERE active = 1 and  keyword = '$key'";
    
       $data_update =  array(
        'keyword'           => $key,
        'value'             => $value,        
      ); 
       $wpdb->insert( $setting_table, $data_update); 
 
}


function displaySettings($key = '', $return = false)
{
    global $wpdb;
    $setting_table  = $wpdb->prefix.'chaos_setting';
    $data_query     ="SELECT * FROM $setting_table WHERE active = 1 and  keyword = '$key'"; 

    if(!$return) {

        $query = $wpdb->get_row( $data_query, OBJECT );
        return $query->value;
    } else {
        $query = $wpdb->get_results( $data_query, OBJECT );
        return $query;
    }

 
}
function displayCheckSettings($key = '')
{

  global $wpdb;
  $setting_table  = $wpdb->prefix.'chaos_setting';
  $data_query     ="SELECT * FROM $setting_table WHERE active = 1 and  keyword = '$key'"; 
  $update_query = $wpdb->get_row( $data_query, OBJECT );
  echo $update_query->value;
 
}



function getFootballPrice($date='', $time='')
{
    $date = (isset($_POST['date'])) ? $_POST['date'] : $date;
    $time = (isset($_POST['time'])) ? $_POST['time'] : $time;
    global $wpdb;
    $data['price'] = false;
    $data['for'] = false;
    $data['vat'] = false;

    $setting_table  = $wpdb->prefix.'chaos_setting'; 

    if( $football_timing = displaySettings('football_session_logic') ) {
        
        $current = false;
        if( $session_prices = displaySettings('football_session_pricing' , 'array') ) {
            foreach ($session_prices as $s_value) {
                if( $result = explode('-', $s_value->value) ) {
                    $current = betweenTime( $result[0], $result[1], $time);
                    if($current) {
                        $data['price'] = $result[2];
                        $data['for'] = 'session';
                        $data['vat'] = displaySettings('football_vat_cst');
                        return $data;
                    }
                }
            }

            if(!$current) {
                if( isWeekend( $date ) ) {
                    $data['price'] = displaySettings('football_hour_weekend');
                    $data['for'] = 'Weekend';
                    $data['vat'] = displaySettings('football_vat_cst');
                    return $data;
                } else {
                    $data['price'] = displaySettings('football_hour_week');
                    $data['for'] = 'Weekday';
                    $data['vat'] = displaySettings('football_vat_cst');
                    return $data;
                }
            }

        }

    } else {

        if( isWeekend( $date ) ) {
            $data['price'] = displaySettings('football_hour_weekend');
            $data['for'] = 'Weekend';
            $data['vat'] = displaySettings('football_vat_cst');
            return $data;
        } else {
            $data['price'] = displaySettings('football_hour_week');
            $data['for'] = 'Weekday';
            $data['vat'] = displaySettings('football_vat_cst');
            return $data;
        }
    }   

    return $data;

}

function getGamingPrice($date='', $time='')
{
    $date = (isset($_POST['date'])) ? $_POST['date'] : $date;
    $time = (isset($_POST['time'])) ? $_POST['time'] : $time;
    global $wpdb;
    $data['price'] = false;
    $data['for'] = false;
    $data['vat'] = false;

    $setting_table  = $wpdb->prefix.'chaos_setting'; 

        if( isWeekend( $date ) ) {
            $data['price'] = displaySettings('gaming_head_weekend');
            $data['for'] = 'Weekend';
            $data['vat'] = displaySettings('gaming_vat_cst');
            if(isset($_POST['allocate_id'])) {
                echo json_encode($data);
                die();
            } else {
                return $data;
            }
        } else {
            $data['price'] = displaySettings('gaming_head_week');
            $data['for'] = 'Weekday';
            $data['vat'] = displaySettings('gaming_vat_cst');
            if(isset($_POST['allocate_id'])) {
                echo json_encode($data);
                die();
            } else {
                return $data;
            }
        }
 
        if(isset($_POST['allocate_id'])) {
            echo json_encode($data);
            die();
        } else {
            return $data;
        }

}

add_action( 'wp_ajax_getGamingPrice', 'getGamingPrice' );
add_action( 'wp_ajax_nopriv_getGamingPrice', 'getGamingPrice' );

function getLazertagPrice($type='', $date='', $time='')
{
    $type = (isset($_POST['type'])) ? $_POST['type'] : $type;
    $date = (isset($_POST['date'])) ? $_POST['date'] : $date;
    $time = (isset($_POST['time'])) ? $_POST['time'] : $time;

    global $wpdb;
    $data['price'] = false;
    $data['for'] = false;
    $data['vat'] = false;

    $setting_table  = $wpdb->prefix.'chaos_setting'; 



    if($type == 'slot') {
        if( $football_timing = displaySettings('lazertag_happayhours') ) {
            
            $current = false;
            if( $session_prices = displaySettings('lazertag_happyhours_pricing' , 'array') ) {
                foreach ($session_prices as $s_value) {
                    if( $result = explode('-', $s_value->value) ) {
                        $current = betweenTime( $result[0], $result[1], $time );
                        if($current) {
                            $data['price'] = $result[2];
                            $data['for'] = 'Happy Hours';
                            $data['vat'] = displaySettings('lazertag_vat_cst');

                            if(isset($_POST['type'])) {
                                echo json_encode($data);
                                die();
                            } else {
                                return $data;
                            }
                        }
                    }
                }

                if(!$current) {
                    if( isWeekend( $date ) ) {
                        $data['price'] = displaySettings('lazertag_head_weekend');
                        $data['for'] = 'Weekend';
                        $data['vat'] = displaySettings('lazertag_vat_cst');

                        if(isset($_POST['type'])) {
                            echo json_encode($data);
                            die();
                        } else {
                            return $data;
                        }
                    } else {
                        $data['price'] = displaySettings('lazertag_head_week');
                        $data['for'] = 'Weekday';
                        $data['vat'] = displaySettings('lazertag_vat_cst');

                        if(isset($_POST['type'])) {
                            echo json_encode($data);
                            die();
                        } else {
                            return $data;
                        }
                    }
                }

            }

        } else {

            if( isWeekend( $date ) ) {
                $data['price'] = displaySettings('lazertag_head_weekend');
                $data['for'] = 'Weekend';
                $data['vat'] = displaySettings('lazertag_vat_cst');
                if(isset($_POST['type'])) {
                    echo json_encode($data);
                    die();
                } else {
                    return $data;
                }
            } else {
                $data['price'] = displaySettings('lazertag_head_week');
                $data['for'] = 'Weekday';
                $data['vat'] = displaySettings('lazertag_vat_cst');

                if(isset($_POST['type'])) {
                    echo json_encode($data);
                    die();
                } else {
                    return $data;
                }
            }
        }    
    } else {
        if( isWeekend( $date ) ) {
            $data['price'] = displaySettings('lazertag_hour_weekend');
            $data['for'] = 'Weekend';
            $data['vat'] = displaySettings('lazertag_vat_cst');
            if(isset($_POST['type'])) {
                echo json_encode($data);
                die();
            } else {
                return $data;
            }
        } else {
            $data['price'] = displaySettings('lazertag_hour_week');
            $data['for'] = 'Weekday';
            $data['vat'] = displaySettings('lazertag_vat_cst');
    if(isset($_POST['type'])) {
        echo json_encode($data);
        die();
    } else {
        return $data;
    }
        }
    }

    if(isset($_POST['type'])) {
        echo json_encode($data);
        die();
    } else {
        return $data;
    }


}

add_action( 'wp_ajax_getLazertagPrice', 'getLazertagPrice' );
add_action( 'wp_ajax_nopriv_getLazertagPrice', 'getLazertagPrice' );



function isWeekend($date) {
    $weekDay = date('w', strtotime($date));
    return ($weekDay == 0 || $weekDay == 6);
}


function betweenTime($start_time = '00:00', $end_time = '00:00', $current_time = '00:00')
{


    $date1 = DateTime::createFromFormat('H:i', $current_time);
    $date2 = DateTime::createFromFormat('H:i', $start_time);
    $date3 = DateTime::createFromFormat('H:i', $end_time);
    if ($date1 > $date2 && $date1 < $date3)
    {
       return true;
    }
    return false;
}

//<---- Allocate --->
function allocate(){
    global $wpdb;
    $date               = date('Y-m-d H:i:s');
    $system_id          = $_POST['system_id'];
    $allocate_num       = ($_POST['allocate']  == 'true') ? 1 : 0;
    $system_allocate    = $wpdb->prefix.'chaos_system_allocate';
    $query              = "SELECT * FROM {$system_allocate} WHERE active = 1 and system_id='$system_id' ORDER BY system_id='$system_id' DESC ";
    $system_id_fetch    = $wpdb->get_row( $query, OBJECT);


    if($system_id_fetch && $allocate_num == 0) {

         $system_allocate_data =  array(
        'end_time'              => $date,
        'allocate'              => $allocate_num,
        );

          $wpdb->update( $system_allocate , $system_allocate_data ,array( 'system_id' => $system_id ));
          var_dump($wpdb->last_query);
          die();
    }
    else {

    $system_allocate_data =  array(
        'system_id'             => $_POST['system_id'],
        'start_time'            => $date,
        'allocate'              => $allocate_num,
    );

    $wpdb->insert( $system_allocate , $system_allocate_data);
    var_dump($wpdb->$last_query);
   

    }

    die();
}

add_action( 'wp_ajax_allocate','allocate' );
add_action( 'wp_ajax_nopriv_allocate','allocate' );


function allocate_system_bill(){
    global $wpdb;
    $data['name'] = false;
    $data['id'] = false;
    $allocate_system      = $wpdb->prefix.'chaos_system_allocate';
    $all_system           = $wpdb->prefix.'chaos_system'; 
    $select_id_allocate   = "SELECT  s.*, a.pc_name from ${allocate_system} s JOIN  ${all_system} a on s.system_id= a.id where allocate = 1 and s.active=1";

    $select_allocate      = $wpdb->get_results( $select_id_allocate);
    
    return $select_allocate;

}

function calculate_sys_time(){
    global $wpdb;
    $id                   = $_POST['allocate_id'];
    $date                 = $_POST['date'];
    $allocate_system      = $wpdb->prefix.'chaos_system_allocate';
    $select_id_allocate   = "SELECT * from {$allocate_system} where id = '$id'";
    $select_allocate      = $wpdb->get_row( $select_id_allocate);
    $date1                = $select_allocate->start_time;
    $to_time              = strtotime($date);
    $from_time            = strtotime($date1);

    $dteStart = new DateTime($date1); 
    $dteEnd   = new DateTime($date); 

    $dteDiff  = $dteStart->diff($dteEnd); 

    $days = $dteDiff->format('%a');
    $hours = $dteDiff->format('%h');
    $minuts = $dteDiff->format('%i');

    $total_minuts_played = ($days * 24 * 60) + ($hours * 60) + $minuts;
    $billed_hours =ceil($total_minuts_played / 60);   
    $total_hours = intval($total_minuts_played/60);
    $tot_minuts = ($total_minuts_played % 60);

    $data['actual_hours'] = convertToHoursMins($total_minuts_played,'%02d : %02d');
    $data['billed_hours'] = $billed_hours;
    echo json_encode($data);
/*    var_dump($date);
    echo '<br>';ss
    var_dump($date1);
    echo '<br>';
    echo $min=round(abs($to_time - $from_time)/60,2)."minute";
   
    */


    die();

}

add_action( 'wp_ajax_calculate_sys_time','calculate_sys_time' );
add_action( 'wp_ajax_nopriv_calculate_sys_time','calculate_sys_time' );

function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

function pc_name($system_id = '') {
    global $wpdb; 
    $allocate_system      = $wpdb->prefix.'chaos_system_allocate';
    $all_system           = $wpdb->prefix.'chaos_system'; 
    $select_id_allocate   = "SELECT  s.*, a.pc_name from ${allocate_system} s JOIN  ${all_system} a on s.system_id= a.id where s.active=1 and s.id='$system_id'";

    $select_allocate      = $wpdb->get_row( $select_id_allocate);

    
    return $select_allocate;
}


function updatePoints($member_id = 0,$point = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `earned_points` = (`earned_points` + $point) WHERE `user_id` = $member_id");
  balancePoints($member_id);
}

function balancePoints($member_id = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `balance_points` = (`earned_points` - `redeem_points`) WHERE `user_id` = $member_id");

}

function redeemPoints($member_id = 0,$redeem_points = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `redeem_points` = (`redeem_points` + $point) WHERE `user_id` = $member_id");
  balancePoints($member_id);

}


function addPointsInCreditPointsTable($member_id = 0,$earn_points = 0,$key_value = '',$key_id = 0) {
  global $wpdb;
  $date = date('Y-m-d');
  $credit_table             =  $wpdb->prefix.'chaos_credits_points';
  $credit_query             = "SELECT * from {$credit_table} where key_value = $key_value and key_id = $key_id";
    if($wpdb->get_row($credit_query)) {

        $wpdb->update($credit_table,array('credit_points' =>$earn_points ),array('id'=>$member_id));
    }
    else {
      $credit_data = array(
        'member_id'     =>  $member_id,
        'credit_points' =>  $earn_points,
        'key_value'     =>  $key_value,
        'key_id'        =>  $key_id,
        'date'          => $date,
        );
      $wpdb->insert($credit_table,$credit_data);
    }

}










?>