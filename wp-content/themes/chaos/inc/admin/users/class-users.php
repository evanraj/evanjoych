<?php


function user_list_pagination($arg) {

	global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT member_table.`id`,member_table.`user_id`,member_table.`membership_no`,member_table.`first_name`,member_table.`phone`,user_tab.user_email,user_tab.user_registered FROM `wp_chaos_members` as member_table left join wp_users as user_tab on user_tab.id=member_table.`user_id` WHERE active =1 {$arg['condition']}";

    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );

    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
    if(isset($_POST['action']) && $_POST['action'] == 'user_listing') {
        $page_arg['user_per_page']               = $_POST['user_per_page'];
        $page_arg['user_name']                   = $_POST['user_name'];
        $page_arg['user_phone']                  = $_POST['user_phone'];
   
    } 
    else {
        $page_arg['user_per_page']               = isset( $_GET['user_per_page'] ) ? abs( (int) $_GET['user_per_page'] ) : 5;
        $page_arg['user_name']                   = isset( $_GET['user_name'] ) ? $_GET['user_name']  : '';
        $page_arg['user_phone']                  = isset( $_GET['user_phone'] ) ? $_GET['user_phone']  : '';
     
    
    }

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=list_admin_users')), 
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