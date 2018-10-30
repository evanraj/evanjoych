<?php

date_default_timezone_set('Asia/Kolkata');


/*Sowmiya*/

//for Football Billing

require get_template_directory() . '/inc/admin/billing/pagination-functions.php';

add_action('admin_menu', 'admin_menu_register_billing');

function admin_menu_register_billing(){

  global $src_capabilities;

 //Billing Manager
    add_menu_page(
        __( 'Football Billing', 'chaos'),
        'Football Billing',
        $src_capabilities['football']['permission']['football_biling'],
        'football_billing',
        'football_billing',
        'dashicons-groups',
        2
    );
     add_menu_page(
        __( 'Lazertag Billing', 'chaos'),
        'Lazertag Billing',
        $src_capabilities['lazertag']['permission']['lazertag_biling'],
        'lazertag_billing',
        'lazertag_billing',
        'dashicons-shield',
        3
    );
      add_menu_page(
        __( 'Gaming Billing', 'chaos'),
        'Gaming Billing',
        $src_capabilities['gaming']['permission']['gaming_billing'],
        'gaming_billing',
        'gaming_billing',
        'dashicons-desktop',
        4
    );


  //Foot ball Billing

    add_submenu_page('football_billing', 'View List', 'View List', $src_capabilities['football']['permission']['football_biling'], 'view_football_billing', 'view_football_billing' );


  //lazer billing
    add_submenu_page('lazertag_billing', 'View Lazer tag Billing', 'View Lazer tag Billing', $src_capabilities['lazertag']['permission']['lazertag_biling'], 'view_lazertag_bill', 'view_lazertag_bill' );

    //Computer Gaming
    add_submenu_page('gaming_billing', 'Add System', 'Add & View System History', $src_capabilities['gaming']['permission']['gaming_billing'], 'add_gaming_system', 'add_gaming_system' );
    add_submenu_page('gaming_billing', 'Allocate System', 'Allocate System',$src_capabilities['gaming']['permission']['gaming_billing'], 'allocate_gaming_system', 'allocate_gaming_system' );
    add_submenu_page('gaming_billing', 'List Gaming', 'List Gaming',$src_capabilities['gaming']['permission']['gaming_billing'], 'view_gaming_billing', 'view_gaming_billing');
  
    


}


add_action( 'admin_enqueue_scripts', 'custom_wp_admin_scripts_billing' );
function custom_wp_admin_scripts_billing() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/inc/admin/billing/css/bootstrap-material-datetimepicker.css',false,'1.0','all');
  wp_enqueue_style( 'billing', get_template_directory_uri() . '/inc/admin/billing/css/billing.css',false,'1.0','all');
  wp_enqueue_style( 'timepicker-css', get_template_directory_uri() . '/inc/css/jquery.timepicker.css',false,'1.0','all');
  wp_enqueue_style( 'timepicker-min-css', get_template_directory_uri() . '/inc/css/jquery.timepicker.min.css',false,'1.0','all');
  wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/inc/css/bootstrap-datepicker.css',false,'1.0','all');
//Billing Style
  wp_enqueue_style('chaos_bootstrap_css', get_template_directory_uri().'/inc/css/bootstrap.min.css'); 
  wp_enqueue_script('chaos_bootstrap', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery'),false, false);
  

//For only datepicker

  wp_enqueue_script('datepair-min', get_template_directory_uri().'/inc/js/datepair.min.js', array('jquery'),false, false);
  wp_enqueue_script('jquery.datepicker-js', get_template_directory_uri().'/inc/js/jquery.datepair.js', array('jquery'),false, false);
  wp_enqueue_script('jquery.datepicker-min', get_template_directory_uri().'/inc/js/jquery.datepair.min.js', array('jquery'),false, false);
  wp_enqueue_script('chaos_arrow27' , 'http://arrow.scrolltotop.com/arrow27.js', array('jquery'),false, false); 
//Create Site URL for Print Function
  

//Time Picker
  wp_enqueue_script('jquery-time', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js');
  wp_enqueue_script('jquery-moment', 'http://momentjs.com/downloads/moment-with-locales.min.js');
  wp_enqueue_script( 'billing_style', get_template_directory_uri() . '/inc/admin/billing/js/bootstrap-material-datetimepicker.js', array ( 'jquery' ), true, false);



//Billing Js
  wp_enqueue_script( 'billing', get_template_directory_uri() . '/inc/admin/billing/js/billing.js', array ( 'jquery' ), true, false);
  wp_localize_script( 'billing', 'printajax', array( 'internalprint' => site_url( '' )));
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-ui-core');
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' ,array('jquery'),false, false);
  wp_enqueue_style('jquery-ui-css1', 'http://code.jquery.com/ui/1.8.24/themes/blitzer/jquery-ui.css');
  wp_enqueue_script('datepicker-js', get_template_directory_uri().'/inc/js/bootstrap-datepicker.js', array('jquery'),false, false);
  wp_enqueue_script('datepair', get_template_directory_uri().'/inc/js/datepair.js', array('jquery'),false, false);
  wp_enqueue_script('timepicker-js', get_template_directory_uri().'/inc/js/jquery.timepicker.js', array('jquery'),false, false);
  wp_enqueue_script('timepicker-min-js', get_template_directory_uri().'/inc/js/jquery.timepicker.min.js', array('jquery'),false, false);
  wp_enqueue_style('jquery-timepicker-css', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.css');
  wp_enqueue_script('jquery-timepicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.js', array('jquery'),false, false);

}

//Billing
//Foot ball Billing
function football_billing() {
    require get_template_directory() .'/inc/admin/billing/views/football/football_masterpage.php';
}
function view_football_billing() {
    require get_template_directory() .'/inc/admin/billing/list-template/list_football_billing.php';

}
//<---- End Foot ball Billing ----->


//Lazer Tag Billing
function lazertag_billing() {
    require get_template_directory() .'/inc/admin/billing/views/lazertag/lazertag_masterpage.php';
}

function view_lazertag_bill() {
    require get_template_directory() .'/inc/admin/billing/list-template/list_lazertag_billing.php';
}
//<--- End Lazer Tag Billing--->


//Gaming Billing
function gaming_billing() {
    require get_template_directory() .'/inc/admin/billing/views/gaming/gaming_masterpage.php';
}

function add_gaming_system(){
     require get_template_directory() .'/inc/admin/billing/views/gaming/gaming_system.php';
}
function allocate_gaming_system(){
     require get_template_directory() .'/inc/admin/billing/views/gaming/gaming_system_allocate.php';
}
function view_gaming_billing(){
       require get_template_directory() .'/inc/admin/billing/list-template/list_gaming_billing.php';
}


//<----- End Gaming ----->

//Select Members 
function searchMember(){
  global $wpdb;
  $data['success']  = 0;
  $member_table     = $wpdb->prefix.'chaos_members';
  $user_table       = $wpdb->prefix.'users';
  $search_term      = $_POST['search_key'];
  $query            = "SELECT member.*,user_table.user_login FROM {$member_table} as member left join {$user_table} as user_table on member.`user_id` = user_table.id where user_table.user_login like '%${search_term}%' or member.membership_no like '%${search_term}%' ";
  $data['result']   = $wpdb->get_results($query);
  echo json_encode($data);
  die();
}

add_action( 'wp_ajax_searchMember','searchMember' );
add_action( 'wp_ajax_nopriv_searchMember','searchMember' );



//<---- Allocate --->
function allocate(){
    global $wpdb;
    $date               = date('Y-m-d H:i:s');
    $system_id          = $_POST['system_id'];
    $inv_id             = $_POST['inv_id'];
    $allocate_num       = ($_POST['allocate']  == 'true') ? 1 : 0;
    $system_allocate    = $wpdb->prefix.'chaos_system_allocate';
    $bill_details       = $wpdb->prefix.'chaos_gaming_billing_relation';
    $query              = "SELECT * FROM {$system_allocate} WHERE active = 1 and system_id='$system_id' ORDER BY system_id='$system_id' DESC ";
    $system_id_fetch    = $wpdb->get_row( $query, OBJECT);

    if($system_id_fetch && $allocate_num == 0) {

        $system_allocate_data =  array(
        'end_time'              => $date,
        'allocate'              => $allocate_num,
        );

        $wpdb->update( $system_allocate , $system_allocate_data ,array( 'system_id' => $system_id ));
        $wpdb->update($bill_details,$system_allocate_data,array('gaming_id'=>$inv_id,'was_build'=>0,'active'=>1,'gaming_pc_id'=>$system_id));
    }
    else {

    $system_allocate_data =  array(
        'system_id'             => $_POST['system_id'],
        'start_time'            => $date,
        'allocate'              => $allocate_num,
        'pc_category'           => $_POST['pc_category'],
        'bill_id'               => $_POST['inv_id'],
    );
    $bill_allocate_data =  array(
        'gaming_id'             => $_POST['inv_id'],
        'gaming_pc_id'          => $_POST['system_id'],
        'start_time'            => $date,
        'allocate'              => $allocate_num,
        'pc_category'           => $_POST['pc_category'],
        'was_build'             => 0,
    );

    $wpdb->insert( $system_allocate , $system_allocate_data);
    var_dump($wpdb->last_query);
    $wpdb->insert( $bill_details , $bill_allocate_data);
    }

    die();
}

add_action( 'wp_ajax_allocate','allocate' );
add_action( 'wp_ajax_nopriv_allocate','allocate' );



// function convertToHoursMins($time, $format = '%02d:%02d') {
//     if ($time < 1) {
//         return;
//     }
//     $hours    = floor($time / 60);
//     $minutes  = ($time % 60);
//     return sprintf($format, $hours, $minutes);
// }

function pc_name($system_id = '') {
    global $wpdb; 
    $allocate_system      = $wpdb->prefix.'chaos_system_allocate';
    $all_system           = $wpdb->prefix.'chaos_system'; 
    $select_id_allocate   = "SELECT  s.*, a.pc_name from ${allocate_system} s JOIN  ${all_system} a on s.system_id= a.id where s.active=1 and s.system_id='$system_id'";

    $select_allocate      = $wpdb->get_row( $select_id_allocate);


    return $select_allocate;
}


function updatePoints($member_id = 0,$point = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `earned_points` = (`earned_points` + $point) WHERE `id` = $member_id");
  balancePoints($member_id);
}

function balancePoints($member_id = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `balance_points` = (`earned_points` - `redeem_points`) WHERE `id` = $member_id");

}

function redeemPoints($member_id = 0,$point = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `redeem_points` = (`redeem_points` + $point) WHERE `id` = $member_id");

  balancePoints($member_id);

}


function deletebill($member_id = 0,$point = 0,$key_value = '',$key_id = 0) {
  global $wpdb;
  $member_table       =   $wpdb->prefix.'chaos_members';
  $member_update      =   $wpdb->query("UPDATE {$member_table} SET `earned_points` = (`earned_points` - $point) WHERE `id` = $member_id");
  $credit_table       =   $wpdb->prefix.'chaos_credits_points';
  $wpdb->update($credit_table,array('active' =>0 ),array('key_value' => "$key_value",'key_id' => $key_id ));



  balancePoints($member_id);

}


function addPointsInCreditPointsTable($member_id = 0,$earn_points = 0,$key_value = '',$key_id = 0) {
  global $wpdb;
  $date = date('Y-m-d');
  $credit_table             =  $wpdb->prefix.'chaos_credits_points';
  $credit_query             = "SELECT * from {$credit_table} where key_value = '$key_value' and key_id = $key_id";

    if($wpdb->get_row($credit_query)) {
        $wpdb->update($credit_table,array('credit_points' =>$earn_points ),array('key_value' => "$key_value",'key_id' => $key_id));
    }
    else {
      $credit_data = array(
        'member_id'     =>  $member_id,
        'credit_points' =>  $earn_points,
        'key_value'     =>  $key_value,
        'key_id'        =>  $key_id,
        'date'          =>  $date,
        );
      $wpdb->insert($credit_table,$credit_data);
    }

}




//Lazertag

function lazertag_type(){
  global $wpdb;
  $data['success']  = 0;
  $value            = $_POST['value'];
  $data['success']  = 1;
  $data['redirect'] = network_admin_url( 'admin.php?page=lazertag_billing&pagess=1&lazertag_type='.$value);
     
  echo json_encode($data);
  die();
}

add_action( 'wp_ajax_lazertag_type','lazertag_type' );
add_action( 'wp_ajax_nopriv_lazertag_type','lazertag_type' );

function gaming_type(){
  global $wpdb;
  $data['success']  = 0;
  $value            = $_POST['value'];
  $data['success']  = 1;
  $data['redirect'] = network_admin_url( 'admin.php?page=gaming_billing&pagess=1&gaming_type='.$value);     
  echo json_encode($data);
  die();
}

add_action( 'wp_ajax_gaming_type','gaming_type' );
add_action( 'wp_ajax_nopriv_gaming_type','gaming_type' );

function football_pricing($session = '' ,$hours = '',$date = ''){
  $condition = '';
  if($session == "morning_session"){
    $condition = "AND session = 'morning_session'";
  } else if($session == "evening_session"){
    $condition = "AND session = 'evening_session'";
  } else {
    $condition = "";
  }
  global $wpdb;
  $table        = $wpdb->prefix .'chaos_football_pricing';
  $query        = "SELECT main_session.*,(case when allocated_sessions.id is null then 0 else allocated_sessions.id end) as sale_id,
  (case when allocated_sessions.ft_member_phone_number is null then 0 else allocated_sessions.ft_member_phone_number end) as phone_number,ft_bill_date,
  (case when allocated_sessions.ft_member_name is null then '' else allocated_sessions.ft_member_name end) as member_name,
(case when allocated_sessions.session_id = main_session.id  is null  then 'no' else 'yes' end ) as allocated_session
from  (SELECT * FROM wp_chaos_football_pricing WHERE hours = '$hours' and active = 1 $condition) as main_session
left join 
(SELECT ft_bill_date,id,ft_member_phone_number,ft_member_name,(case when price_details.session_id is null then 0 else  price_details.session_id end ) as session_id  FROM 
wp_chaos_football_billing 
as ftbilltable  
left join 
(
    SELECT inv_id,session_id FROM wp_chaos_football_pricing_details WHERE active=1
) as price_details 
on ftbilltable.id = price_details.inv_id 
WHERE ftbilltable.active=1 and ftbilltable.ft_bill_date = '$date' and ftbilltable.was_bulid = 1 ) as allocated_sessions 
on main_session.id = allocated_sessions.session_id order by main_session.id  ASC";

  $data['price_data']   = $wpdb->get_results($query);
  $data['html'] = '';
  foreach ($data['price_data'] as $p) {
    $class_btn = ($p->allocated_session == "yes")? 'btn-danger':'btn-success' ;
    $style = '';
    $style1 = ($p->allocated_session == "yes")? 'style="pointer-events: none"': '';
    $title = ($p->allocated_session =='yes')? 'title="Name :'.$p->member_name.'    Booking date:'.$p->ft_bill_date.'       Phone number:'.$p->phone_number.' ' : 'title=""';
    $readonly = ($p->allocated_session == "yes")? 'readonly': '';
    $data['html'].='<lable class="check-one btn '.$class_btn.'"'.$style.' '.$title.'">
              <input type="checkbox" autocomplete="off" '.$readonly.' class="session" name="session[]" data-phone = "'.$p->phone_number.'" data-date="'.$p->ft_bill_date.'" data-time="'.$p->name.'"  data-name = "'.$p->member_name.'" data-sale_id = "'.$p->sale_id.'" data-session = "'.$p->session.'" data-session_id="'.$p->id.'" value="'.$p->id.'"/>'.$p->name.'
              <input type="hidden" autocomplete="off"  class="price" name="session_time['. $p->id.']" value="'.$p->session.'" />
          </lable>';
}
return $data;

}


function football_pricing_ajax(){
  $date = isset($_POST['date'] ) ? $_POST['date'] : '';
  $hours = isset($_POST['hours'] ) ? $_POST['hours'] : '';
  $session = "all";
  $data['morning'] = football_pricing('morning_session', $hours, $date);
  $data['evening'] = football_pricing('evening_session', $hours, $date);
  echo json_encode($data);
  die();
}
add_action( 'wp_ajax_football_pricing_ajax','football_pricing_ajax' );
add_action( 'wp_ajax_nopriv_football_pricing_ajax','football_pricing_ajax' );



function ft_invoice_create() {
    global $wpdb;
    $params = array();
    parse_str($_POST['data'], $params);

    $football                   = $wpdb->prefix.'chaos_football_billing';
    $football_price_details     = $wpdb->prefix.'chaos_football_pricing_details';
    $query                      = "SELECT * FROM {$football} WHERE active = 1 and was_bulid='0'";
    $football_id                = $wpdb->get_row( $query, OBJECT);
    if($football_id) {
        $id  = $football_id->id;
    }
    else {
        $wpdb->insert($football,array('active' =>1,'was_bulid'=>0));
        $id = $wpdb->insert_id;
    }
    $wpdb->update($football , array('ft_bill_no' =>'INV'.$id,'ft_bill_date'=>$params['billing_date'],'ft_date'=>$params['billing_date']),array( 'id' => $id ));
    $data['member_no']  ='INV'.$id;
    $data['id']         = $id; 


  //insert Timing data
  $wpdb->update($football_price_details,array('active'=>0),array('inv_id'=>$id));
  foreach ($params['session'] as $football_session) {
      $football_price_data = array(
          'inv_id'      => $id,
          'session_id'  => $football_session,
          'session'     => $params['session_time'][$football_session],
          );
       $wpdb->insert($football_price_details,$football_price_data);
  }
  $data['success']  = 1;
  $data['redirect'] = network_admin_url( 'admin.php?page=football_billing&pagess=1&inv_id='.$id);     
  echo json_encode($data);
  die();

}

add_action( 'wp_ajax_ft_invoice_create','ft_invoice_create' );
add_action( 'wp_ajax_nopriv_ft_invoice_create','ft_invoice_create' );


function getPrice($inv_id = 0){
  global $wpdb;
  $detail_table      = $wpdb->prefix.'chaos_football_pricing_details';
  $main_table        = $wpdb->prefix.'chaos_football_pricing';
  $query        = "SELECT sum(main.hours) as played_hours,detail.session as session,main.price,main.name from (
    SELECT session,`session_id`,price FROM ${detail_table} WHERE inv_id = ${inv_id} and active = 1 
) as detail left join (
    select id,name,hours,price from  ${main_table} 
) as main 
on detail.session_id = main.id group by detail.session";
  $data         = $wpdb->get_results( $query, OBJECT);
  return $data;
}

function getPriceBilling($inv_id = 0){
  global $wpdb;
  $detail_table      = $wpdb->prefix.'chaos_football_pricing_details';
  $main_table        = $wpdb->prefix.'chaos_football_pricing';
  $query        = "SELECT sum(main.hours) as played_hours,detail.session as session,detail.price from (
    SELECT session,`session_id`,price FROM ${detail_table} WHERE inv_id = ${inv_id} and active = 1 
) as detail left join (
    select id,name,hours from  ${main_table} 
) as main 
on detail.session_id = main.id group by detail.session";
  $data         = $wpdb->get_results( $query, OBJECT);
  return $data;
}


function getIndividualPlayingHours($inv_id = 0){
  global $wpdb;
  $detail_table      = $wpdb->prefix.'chaos_football_pricing_details';
  $main_table        = $wpdb->prefix.'chaos_football_pricing';
  $query        = "SELECT main.hours as played_hours,detail.price,main.name from (
    SELECT session,`session_id`,price FROM ${detail_table} WHERE inv_id = ${inv_id} and active = 1 
) as detail left join (
    select id,name,hours from  ${main_table} 
) as main 
on detail.session_id = main.id ";

  $data         = $wpdb->get_results( $query, OBJECT);
  return $data;
}


//LazerTag
function lazer_invoice_create() {
    global $wpdb;
    $lazertag                   = $wpdb->prefix.'chaos_lazertag_billing';
    $query                      = "SELECT * FROM {$lazertag} WHERE active = 1 and was_bulid='0'";
    $football_id                = $wpdb->get_row( $query, OBJECT);
    if($football_id) {
        $data['id']  = $football_id->id;
    }
    else {
        $wpdb->insert($lazertag,array('active' =>1,'was_bulid'=>0));
        $data['id'] = $wpdb->insert_id;
    }
    return $data;
 

}

//Gaming Billing
function Gaming_invoice_create(){
    global $wpdb;
    $gaming_table                   = $wpdb->prefix.'chaos_gaming_billing';

    $wpdb->insert($gaming_table,array('active' =>1,'was_bulid'=>0));
    $data['id'] = $wpdb->insert_id;

    return $data;

}
function gamingBillingMemberSearch(){
    global $wpdb;
    $data['success']    = 0;
    $gaming_table       = $wpdb->prefix.'chaos_gaming_billing';
    $member_table       = $wpdb->prefix.'chaos_members';
    $search_term        = $_POST['search_key'];
    $searched_date      = $_POST['date'];

    $before_date = strtotime ( '-7 day' , strtotime ( $searched_date ) ) ;
    $new_before = date ( 'Y-m-d' , $before_date );

    $after_date = strtotime ( '+7 day' , strtotime ( $searched_date ) ) ;
    $new_after = date ( 'Y-m-d' , $after_date );


    $query              = "SELECT 
(case when member.user_id is null then 0 else member.user_id end ) as user_id,
(case when member.user_id is null then billing.gaming_member_name else  member.first_name end ) as gaming_member_name,
(case when member.user_id is null then billing.gaming_member_phone_number else member.phone end ) as gaming_member_phone_number,
(case when member.user_id is null then '' else member.membership_no end ) as membership_no,
billing.id as inv_id
from (
    SELECT `id`,
    `member_id`,
    `gaming_member_name`,
    `gaming_member_phone_number` FROM {$gaming_table} WHERE `active`=1 and was_bulid = 0 and game_date BETWEEN '{$new_before}' AND '{$new_after}'
) as billing 
left join 
(
    SELECT user_id,membership_no,first_name,phone from {$member_table} WHERE active = 1
) as member
on billing.member_id = member.user_id  WHERE billing.gaming_member_name like '%{$search_term}%' or member.first_name like '%{$search_term}%' or billing.id like '%{$search_term}%' ";
    

    $data['result']   = $wpdb->get_results($query);
    echo json_encode($data);
    die();
}

add_action( 'wp_ajax_gamingBillingMemberSearch','gamingBillingMemberSearch' );
add_action( 'wp_ajax_nopriv_gamingBillingMemberSearch','gamingBillingMemberSearch' );

function gamingActualPlayedHoursCalculate($hours = 0,$cat_id= 0){
  $cat_id = isset($_POST['cat_id'])? $_POST['cat_id']: $cat_id;
  $hours = isset($_POST['hours'])? $_POST['hours']: $hours;
  $minuts = floor(minutes($hours));
  global $wpdb;
  $query = "SELECT price,mins,category from wp_chaos_gaming_billing_price where active = 1 and category = '$cat_id' order by mins desc";
  $getResults     = $wpdb->get_row($query);
  $price          = $getResults->price;
  $mins_per       = $getResults->mins;


  $Calculate_time = $minuts/$mins_per;
  $whole = floor($Calculate_time);      // 1
  $fraction = $Calculate_time - $whole; // .29


  $divide_total_price = $whole * $price;
  $divide_total_min   =  $fraction * $mins_per;

if($divide_total_min !=0){
  $query1 = "SELECT * FROM wp_chaos_gaming_billing_price WHERE category = '$cat_id' and mins >= $divide_total_min ORDER BY mins LIMIT 1";

  $getPrice = $wpdb->get_row($query1);
  $second_price = $getPrice->price;
} else{
  $second_price = 0;
  
}
 $category = $cat_id; 

  if($cat_id == '4' && isset($_POST['hours'])){

    $data['total_price'] = 200;
   
  } else if($cat_id == '4'){

    $data['total_price'] = 60;
  }
  else {
    $data['total_price'] =   $divide_total_price + $second_price;

  }
  
  $data['category']    =   $category;

  if(isset($_POST['cat_id'])){

        echo json_encode($data);
        die();
  } else {
        return $data;
  }


}

add_action( 'wp_ajax_gamingActualPlayedHoursCalculate','gamingActualPlayedHoursCalculate' );
add_action( 'wp_ajax_nopriv_gamingActualPlayedHoursCalculate','gamingActualPlayedHoursCalculate' );

function minutes($time = '00.00'){

  $time = explode('.', $time);
  return ($time[0]*60) + ($time[1]);
}

function getLazertagPrevSlots($date = '' ){
  global $wpdb;
  $lazer_table = $wpdb->prefix.'chaos_lazertag_billing';
  $query = "SELECT * FROM $lazer_table WHERE from_date='$date' and was_bulid=1 and active=1";
  $data['results'] = $wpdb->get_results($query);

  foreach ($data['results'] as $results) {
         $data['table'].='<tr><td>'.$results->from_time.'<input type="hidden" name="from_time_db" value="'.$results->from_time.'" class="form_time_db"/></td><td>'.$results->to_time.'<input type="hidden" name="to_time_db" value="'.$results->to_time.'" class="to_time_db"/></td><td><input type="button" name="Cancel" id="lazertag_cancel" value="Cancel" data-id="'.$results->id.'" data-date ="'.$results->lazertag_date.'" data-time="'.$results->from_time.' to'.$results->to_time.'" data-bill_from ="lazrtag" data-name="'.$results->lazertag_member_name.'" data-phone="'.$results->lazertag_member_phone_number.'" class="lazertag_cancel btn btn-danger"/></td></tr>';
      }
  return $data;
}
if(!function_exists("array_column"))
{
    function array_column($array,$column_name)
    {
        return array_map(function($element) use($column_name){return $element[$column_name];}, $array);
    }
}



function array_first_start($a) {
  // $from_time = date('H:ia',strtotime(strtotime($a->to_time)));
    return array($a->from_time, $a->to_time);
}
function array_first_end($a) {
  $from_time = date('H:ia',strtotime('+0 hour +30 minutes',strtotime($a->from_time)));
  $to_time = date('H:ia',strtotime('+0 hour +30 minutes',strtotime($a->to_time)));
    return array($from_time, $to_time);
}
function getLazertagPrevSlots_Ajax(){
  global $wpdb;
  $date = $_POST['date'];
  $lazer_table = $wpdb->prefix.'chaos_lazertag_billing';
  $query = "SELECT * FROM $lazer_table WHERE from_date='$date' and was_bulid=1 and active=1";
  $data['results'] = $wpdb->get_results($query);

  $baz_end = array_map('array_first_end', $data['results']);
  $baz_start = array_map('array_first_start', $data['results']);

  $data['multi_demisional_view_start'] = json_encode($baz_start);
  $data['multi_demisional_view_end'] = json_encode($baz_end);

  foreach ($data['results'] as $results) {
    $data['table'].='<tr><td>'.$results->from_time.'<input type="hidden" name="from_time_db" value="'.$results->from_time.'" class="form_time_db"/></td><td>'.$results->to_time.'<input type="hidden" name="to_time_db" value="'.$results->to_time.'" class="to_time_db"/></td><td><input type="button" id="lazertag_cancel" name="Cancel" value="Cancel" data-id="'.$results->id.'" data-date ="'.$results->lazertag_date.'" data-time="'.$results->from_time.' to'.$results->to_time.'" data-bill_from ="lazrtag" data-name="'.$results->lazertag_member_name.'" data-phone="'.$results->lazertag_member_phone_number.'" class="lazertag_cancel btn btn-danger"/></td></tr>';
  }
  echo json_encode($data);
  die();
}


add_action( 'wp_ajax_getLazertagPrevSlots_Ajax','getLazertagPrevSlots_Ajax' );
add_action( 'wp_ajax_nopriv_getLazertagPrevSlots_Ajax','getLazertagPrevSlots_Ajax' );

function smsGateWay($phone_number = 0,$name='',$sale_id=0,$message_type='',$bill_from='',$date='',$time=''){

  global $wpdb;
  $table = $wpdb->prefix.'chaos_sms_details';
  // Account details
  
  $phone_number = (isset($_POST['phone_number'])) ? $_POST['phone_number'] : $phone_number;
  $name = (isset($_POST['name'])) ? $_POST['name'] : $name;
  $sale_id = (isset($_POST['sale_id'])) ? $_POST['sale_id'] : $sale_id;
  $message_type = (isset($_POST['message_type'])) ? $_POST['message_type'] : $message_type;
  $bill_from = (isset($_POST['bill_from'])) ? $_POST['bill_from'] : $bill_from;
  $date = (isset($_POST['bill_date'])) ? $_POST['bill_date'] : $date;
  $time = (isset($_POST['time'])) ? $_POST['time'] : $time;
  $apiKey = urlencode('u0cOZ+5+jq0-D7wLyqGbS3NH3LUowicdNyf7Akn0RL');
if($message_type == 'cancel'){

    $booking_details = getCancelBillSmsDetails($sale_id,$phone_number,$bill_from);

    $booking_id   = $booking_details->booking_no;
    $message_txt  = "Booking ID : ".$booking_id." ".$name." With mobile number ".$phone_number." has been cancelled a slot on".$date ." slot ".$time." ";
} else{
    $booking_id   = mt_rand(100000,999999);
    $message_txt  = "Booking ID : ".$booking_id." ".$name." With mobile number ".$phone_number." has been successfully booked a slot at Chaos Entertainment  on ".$date ." slot ".$time.".Slots cancelled post 6 hours from booking timing will be charged cancellation fees offer RS.1000.";
}
  
  // Message details
  $numbers = array($phone_number);
  $sender  = urlencode('TXTLCL');
  $message = rawurlencode($message_txt);
  $numbers = implode(',', $numbers);
 
  // Prepare data for POST request
  $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
  // Send the POST request with cURL
  $ch = curl_init('https://api.textlocal.in/send/');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  
  // Process your response here
  //echo $response;

  $insert_data = array('recipient' =>$phone_number ,'sale_id'=>$sale_id,'booking_no'=>$booking_id ,'bill_from' =>$bill_from,'status'=>$message_type );
  $wpdb->insert($table,$insert_data);
    echo json_encode($response);
    die();
  
  
}

add_action( 'wp_ajax_smsGateWay','smsGateWay');
add_action( 'wp_ajax_nopriv_smsGateWay','smsGateWay');

function smsGateWayPhp($phone_number = 0,$name='',$sale_id=0,$message_type='',$bill_from='',$date='',$time=''){

  global $wpdb;
  $table = $wpdb->prefix.'chaos_sms_details';
  // Account details
  
  $phone_number = (isset($_POST['phone_number'])) ? $_POST['phone_number'] : $phone_number;
  $name = (isset($_POST['name'])) ? $_POST['name'] : $name;
  $sale_id = (isset($_POST['sale_id'])) ? $_POST['sale_id'] : $sale_id;
  $message_type = (isset($_POST['message_type'])) ? $_POST['message_type'] : $message_type;
  $bill_from = (isset($_POST['bill_from'])) ? $_POST['bill_from'] : $bill_from;
  $date = (isset($_POST['bill_date'])) ? $_POST['bill_date'] : $date;
  $time = (isset($_POST['time'])) ? $_POST['time'] : $time;
  $apiKey = urlencode('u0cOZ+5+jq0-D7wLyqGbS3NH3LUowicdNyf7Akn0RL');
if($message_type == 'cancel'){

    $booking_details = getCancelBillSmsDetails($sale_id,$phone_number,$bill_from);
    $booking_id   = $booking_details->booking_no;

    $message_txt  = "Booking ID : ".$booking_id." ".$name." With mobile number ".$phone_number." has been cancelled a slot on".$date ." slot ".$time." ";
} else{
    $booking_id = mt_rand(100000,999999);
    $message_txt  = "Booking ID : ".$booking_id." ".$name." With mobile number ".$phone_number." has been successfully booked a slot at Chaos Entertainment  on ".$date ." slot ".$time.".Slots cancelled post 6 hours from booking timing will be charged cancellation fees offer RS.1000.";
}
  
  // Message details
  $numbers = array($phone_number);
  $sender  = urlencode('TXTLCL');
  $message = rawurlencode($message_txt);
  $numbers = implode(',', $numbers);
 
  // Prepare data for POST request
  $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
  // Send the POST request with cURL
  $ch = curl_init('https://api.textlocal.in/send/');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  
  // Process your response here
  //echo $response;

  $insert_data = array('recipient' =>$phone_number ,'sale_id'=>$sale_id,'booking_no'=>$booking_id ,'bill_from' =>$bill_from,'status'=>$message_type );
  $wpdb->insert($table,$insert_data);
    return true;
  
}

//Football Billing List

function football_listing(){
  include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_football_billing.php' );
  die();
}

add_action( 'wp_ajax_football_listing','football_listing' );
add_action( 'wp_ajax_nopriv_football_listing','football_listing' );


//Gaming Listing

function gaming_listing(){
    include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_gaming_billing.php' );
    die();
}

add_action( 'wp_ajax_gaming_listing','gaming_listing' );
add_action( 'wp_ajax_nopriv_gaming_listing','gaming_listing' );


//lazer tag billing

function lazertag_listing(){
    include( get_template_directory().'/inc/admin/billing/ajax/listing-template/list_lazertag_billing.php' );
    die();
}

add_action( 'wp_ajax_lazertag_listing','lazertag_listing' );
add_action( 'wp_ajax_nopriv_lazertag_listing','lazertag_listing' );

function getCancelBillSmsDetails($sale,$phone_number,$billing_from){
    global $wpdb;
    $sms_details      = $wpdb->prefix.'chaos_sms_details';
  if($billing_from == 'football'){
        $billing          = $wpdb->prefix.'chaos_football_billing';
        $billing_details  = $wpdb->prefix.'chaos_football_billing_details';
        $allocate_table   = $wpdb->prefix.'chaos_football_pricing_details';
        $update = $wpdb->update($billing,array('active'=>0,'was_bulid'=>0),array('id'=>$sale));
        $update = $wpdb->update($billing_details,array('active'=>0),array('inv_id'=>$sale));
        $update = $wpdb->update($allocate_table,array('active'=>0),array('inv_id'=>$sale));
        
  } else if($billing_from == 'lazertag'){
        $billing          = $wpdb->prefix.'chaos_lazertag_billing';
        $update = $wpdb->update($billing,array('active'=>0,'was_bulid'=>0),array('id'=>$sale));
  } else {
        $billing          = $wpdb->prefix.'chaos_football_billing';
        $billing_details  = $wpdb->prefix.'chaos_football_billing_details';
        $allocate_table   = $wpdb->prefix.'chaos_football_pricing_details';
        $update = $wpdb->update($billing,array('active'=>0,'was_bulid'=>0),array('id'=>$sale));
        $update = $wpdb->update($billing_details,array('active'=>0),array('inv_id'=>$sale));
        $update = $wpdb->update($allocate_table,array('active'=>0),array('inv_id'=>$sale));
  }
  
  $query = "SELECT * FROM {$sms_details} where sale_id = $sale and bill_from='$billing_from' and status='book' and active=1";
  $booking_details = $wpdb->get_row($query);
  return $booking_details;

}
function getFootballSlotDetails($sale_id,$session_id){
    global $wpdb;
    $sale_table = $wpdb->prefix.'chaos_football_billing'; 
    $price_table = $wpdb->prefix.'chaos_football_pricing_details'; 
    $query ="SELECT billing.*,session_id,inv_id,price FROM $price_table as session_details 
LEFT join 
(
    select * from $sale_table where active = 1
) as billing  
on billing.id = session_details.inv_id 
WHERE session_details.session_id = $session_id  and session_details.inv_id = $sale_id and session_details.active = 1";
$get_details = $wpdb->get_row($query);
    return $get_details;

}

function getFootballSlotDetails_ajax(){
    $sale_id = $_POST['sale_id'];
    $session_id = $_POST['session_id'];
    $data['results'] = getFootballSlotDetails($sale_id,$session_id);
    echo json_encode($data);
    die(); 
}

add_action( 'wp_ajax_getFootballSlotDetails_ajax','getFootballSlotDetails_ajax' );
add_action( 'wp_ajax_nopriv_getFootballSlotDetails_ajax','getFootballSlotDetails_ajax' );
?>