<?php

//Utility Manager Psgination
function custom_pagination_utility($arg)
{
    global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT *, DATEDIFF( DATE(tot.next_pay_date), CURDATE() ) as days_remain, 

                                (CASE 
                                 WHEN DATEDIFF( DATE(tot.next_pay_date), CURDATE() ) >= tot.ut_alert_days
                                 THEN 0
                                 WHEN DATEDIFF( DATE(tot.next_pay_date), CURDATE() ) < 0 
                                 THEN 0
                                 ELSE 1
                                END ) as under_alert

                                from ( SELECT 
                                *,

                                ( CASE 
                                 WHEN p.was_postponded = '1'
                                 THEN u.ut_postponed_days
                                 WHEN u.ut_periods = 'w'
                                 THEN DATE(u.ut_utillity_date + INTERVAL (u.ut_duration) WEEK )
                                 ELSE DATE(u.ut_utillity_date + INTERVAL (u.ut_duration) MONTH )
                                 END ) as next_pay_date
                                                                                                              
                               
                                from wp_chaos_utility as u 

                                JOIN 

                                ( SELECT 

                                ( CASE
                                 WHEN (DATEDIFF( ut_postponed_days, ut_utillity_date  ) ) IS NULL
                                THEN 0
                                WHEN (DATEDIFF( ut_postponed_days, ut_utillity_date  ) ) <  0
                                THEN 0
                                ELSE 1
                                END ) as was_postponded, cu1.id as cu1_id 

                                FROM wp_chaos_utility as cu1 ) as p 

                                ON u.id = p.cu1_id WHERE u.active = 1  ${arg['condition']} ) as tot ";


    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );
    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
     if(isset($_POST['action']) && $_POST['action'] == 'utility_manager') {

        $page_arg['receipt_per_page']                = $_POST['receipt_per_page'];
        $page_arg['utility_name']                    = $_POST['utility_name'];
        $page_arg['emailid']                         = $_POST['emailid'];
        $page_arg['current_date']                    = $_POST['current_date'];


    } else {
        $page_arg['receipt_per_page']                = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $page_arg['utility_name']                    = isset( $_GET['utility_name'] ) ? $_GET['utility_name'] : '';
        $page_arg['emailid']                         = isset( $_GET['emailid'] ) ? $_GET['emailid'] : '';
        $page_arg['current_date']                    = isset( $_GET['current_date'] ) ? $_GET['current_date'] : '';
    }


    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=view_utility')), 
                'format' => '',
                'type' => 'array',
                'prev_text' => __('prev'),
                'next_text' => __('next'),
                'total' => $totalPage,
                'current' => $page
                )
            );


        if ( ! empty( $pagination ) ) : 
            $customPagHTML .= '<ul class="paginate pag3 clearfix"><li class="single">Page '.$page.' of '.$totalPage.'</li>';
            foreach ($pagination as $key => $page_link ) {
                if( strpos( $page_link, ' current' ) !== false ) {
                    $customPagHTML .=  '<li class="current">'.$page_link.'</li>';
                } else {
                    $customPagHTML .=  '<li>'.$page_link.'</li>';
                }
            }
            $customPagHTML .=  '</ul>';
        endif;
    }  

    $data['pagination'] = $customPagHTML;
    return $data;

}
function custom_pagination_utility_list($arg)
{
    global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT * FROM ${arg['table_name']} WHERE active = 1  ${arg['condition']}";

    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );
    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
     if(isset($_POST['action']) && $_POST['action'] == 'football_billing') {
        $page_arg['pc_name']                        = $_POST['pc_name'];
        $page_arg['pc_category']                    = $_POST['pc_category'];
    } 
    else {
        $page_arg['pc_name']                       = isset( $_GET['pc_name'] ) ? abs( (int) $_GET['pc_name'] ) : 5;
        $page_arg['pc_category']                   = isset( $_GET['pc_category'] ) ? $_GET['pc_category']  : ''; 
    }

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=utility_setting')), 
                'format' => '',
                'type' => 'array',
                'prev_text' => __('prev'),
                'next_text' => __('next'),
                'total' => $totalPage,
                'current' => $page
                )
            );


        if ( ! empty( $pagination ) ) : 
            $customPagHTML .= '<ul class="paginate pag3 clearfix"><li class="single">Page '.$page.' of '.$totalPage.'</li>';
            foreach ($pagination as $key => $page_link ) {
                if( strpos( $page_link, 'current' ) !== false ) {
                    $customPagHTML .=  '<li class="current">'.$page_link.'</li>';
                } else {
                    $customPagHTML .=  '<li>'.$page_link.'</li>';
                }
            }
            $customPagHTML .=  '</ul>';
        endif;
    }  

    $data['pagination'] = $customPagHTML;
    return $data;

}


?>