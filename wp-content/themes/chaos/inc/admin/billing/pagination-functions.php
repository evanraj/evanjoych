
<?php
//Football Billing
function custom_pagination_football_billing($arg)
{
    global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT * FROM ${arg['table_name']} WHERE active = 1 AND  was_bulid = 1 ${arg['condition']}";

    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );
    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
    if(isset($_POST['action']) && $_POST['action'] == 'football_listing') {
        $page_arg['receipt_per_page']               = $_POST['receipt_per_page'];
        $page_arg['member_name']                    = $_POST['member_name'];
        $page_arg['member_number']                  = $_POST['member_number'];
        $page_arg['football_bill_date']             = $_POST['football_bill_date'];
        $page_arg['football_bill_date_to']          = $_POST['football_bill_date_to'];
        $page_arg['bill_no']                        = $_POST['bill_no'];
        $page_arg['bill_amt']                       = $_POST['bill_amt'];
    } 
    else {
        $page_arg['receipt_per_page']               = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $page_arg['member_name']                    = isset( $_GET['member_name'] ) ? $_GET['member_name']  : '';
        $page_arg['member_number']                  = isset( $_GET['member_number'] ) ? $_GET['member_number']  : '';
        $page_arg['football_bill_date']          = isset( $_GET['football_bill_date'] ) ? $_GET['football_bill_date']  : '';
        $page_arg['football_bill_date_to']          = isset( $_GET['football_bill_date_to'] ) ? $_GET['football_bill_date_to']  : '';
        $page_arg['bill_no']                        = isset( $_GET['bill_no'] ) ? $_GET['bill_no']  : '';
        $page_arg['bill_amt']                       = isset( $_GET['bill_amt'] ) ? $_GET['bill_amt']  : '';
    
    }

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=view_football_billing')), 
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


//Gaming Billing
function custom_pagination_gaming_billing($arg)
{
     global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT * FROM ${arg['table_name']} WHERE active = 1 AND  was_bulid = 1 ${arg['condition']}";

    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );
    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
    if(isset($_POST['action']) && $_POST['action'] == 'gaming_listing') {
        $page_arg['gaming_per_page']                    = $_POST['gaming_per_page'];
        $page_arg['gaming_member_name']                 = $_POST['gaming_member_name'];
        $page_arg['gaming_member_number']               = $_POST['gaming_member_number'];
        $page_arg['gaming_bill_date']                   = $_POST['gaming_bill_date'];
        $page_arg['gaming_bill_no']                     = $_POST['gaming_bill_no'];
        $page_arg['gaming_bill_amt']                    = $_POST['gaming_bill_amt'];
    } 
    else {
        $page_arg['gaming_per_page']                    = isset( $_GET['gaming_per_page'] ) ? abs( (int) $_GET['gaming_per_page'] ) : 5;
        $page_arg['gaming_member_name']                 = isset( $_GET['gaming_member_name'] ) ? $_GET['gaming_member_name']  : '';
        $page_arg['gaming_member_number']               = isset( $_GET['gaming_member_number'] ) ? $_GET['gaming_member_number']  : '';
        $page_arg['gaming_bill_date']                   = isset( $_GET['gaming_bill_date'] ) ? $_GET['gaming_bill_date']  : '';
        $page_arg['gaming_bill_no']                     = isset( $_GET['gaming_bill_no'] ) ? $_GET['gaming_bill_no']  : '';
        $page_arg['gaming_bill_amt']                    = isset( $_GET['gaming_bill_amt'] ) ? $_GET['gaming_bill_amt']  : '';
    
    }

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=view_gaming_billing')), 
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

function custom_pagination_lazertag_billing($arg)   
{
    global $wpdb;
    $customPagHTML      = "";
    $query              ="SELECT * FROM ${arg['table_name']} WHERE active = 1 AND  was_bulid = 1 ${arg['condition']}";

    
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${arg['orderby_field']} ${arg['order_by']} LIMIT ${offset}, ${arg['items_per_page']}" );
    $totalPage          = ceil($total / $arg['items_per_page']);
    


    $page_arg['cpage'] = '%#%';


    //Utility From
    if(isset($_POST['action']) && $_POST['action'] == 'lazertag_listing') {
        $page_arg['lazertag_per_page']                    = $_POST['lazertag_per_page'];
        $page_arg['lazertag_member_name']                 = $_POST['lazertag_member_name'];
        $page_arg['lazertag_member_number']               = $_POST['lazertag_member_number'];
        $page_arg['lazertag_bill_date']                   = $_POST['lazertag_bill_date'];
        $page_arg['lazertag_bill_date_to']                = $_POST['lazertag_bill_date_to'];
        $page_arg['lazertag_bill_no']                     = $_POST['lazertag_bill_no'];
        $page_arg['lazertag_bill_amt']                    = $_POST['lazertag_bill_amt'];
    } 
    else {
        $page_arg['lazertag_per_page']                    = isset( $_GET['lazertag_per_page'] ) ? abs( (int) $_GET['lazertag_per_page'] ) : 5;
        $page_arg['lazertag_member_name']                 = isset( $_GET['lazertag_member_name'] ) ? $_GET['lazertag_member_name']  : '';
        $page_arg['lazertag_member_number']               = isset( $_GET['lazertag_member_number'] ) ? $_GET['lazertag_member_number']  : '';
        $page_arg['lazertag_bill_date']                   = isset( $_GET['lazertag_bill_date'] ) ? $_GET['lazertag_bill_date']  : '';
        $page_arg['lazertag_bill_date_to']                = isset( $_GET['lazertag_bill_date_to'] ) ? $_GET['lazertag_bill_date_to']  : '';
        $page_arg['lazertag_bill_no']                     = isset( $_GET['lazertag_bill_no'] ) ? $_GET['lazertag_bill_no']  : '';
        $page_arg['lazertag_bill_amt']                    = isset( $_GET['lazertag_bill_amt'] ) ? $_GET['lazertag_bill_amt']  : '';
    
    }

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=view_lazertag_bill')), 
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

//Football Billing
function custom_pagination_gaming_system($arg)
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
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=add_gaming_system')), 
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

function custom_pagination_gaming_system_allocate($arg)
{
    global $wpdb;
    $gaming_detail_table    = $wpdb->prefix.'chaos_gaming_billing_relation';
    $system_allocate_table  = $wpdb->prefix.'chaos_system_allocate';
    $system_table           = $wpdb->prefix.'chaos_system';
    $customPagHTML      = "";
    $query              ="SELECT * FROM 
(
    SELECT `gaming_pc_id` as system_id,`allocate` FROM {$gaming_detail_table} WHERE `active`=1 and `gaming_id` = ${arg['inv_id']}

UNION ALL

SELECT sys_table.id as system_id,
(
    case when system_allocate.allocate is null then 0 else system_allocate.allocate end 
) as allocate 
from  
(
    SELECT * from {$system_table} WHERE active = 1
) as sys_table
left join 
(
    SELECT id as sys_allo_id,system_id,allocate FROM {$system_allocate_table} WHERE id IN 
(
    SELECT MAX(id)
    FROM {$system_allocate_table}
    GROUP BY system_id
) 
) as system_allocate
on sys_table.id = system_allocate.system_id WHERE (case when system_allocate.allocate is null then 0 else system_allocate.allocate end ) = 0
) 
as tab 
left join 
(
   SELECT id,pc_name,pc_category,pc_gaming_type from {$system_table} WHERE active = 1
) as sys 
on tab.system_id = sys.id ";

  
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query." ORDER BY tab.allocate desc LIMIT ${offset}, ${arg['items_per_page']}");
    $totalPage          = ceil($total / $arg['items_per_page']);
    
//var_dump($query." ORDER BY tab.allocate desc LIMIT ${offset}, ${arg['items_per_page']}"); 

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
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=allocate_gaming_system')), 
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


function custom_pagination_event_list($arg)
{
    global $wpdb;
    $event_table    = $wpdb->prefix.'eo_events';
    $post_table     = $wpdb->prefix.'posts';
    $customPagHTML      = "";
    $query              ="SELECT events_table.*,posts.post_title,posts.post_content FROM {$event_table} as events_table left join {$post_table} as posts on events_table.post_id = posts.id WHERE events_table.StartDate='${arg['date']}'";

  
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $arg['page'] );
    $offset             = ( $page * $arg['items_per_page'] ) - $arg['items_per_page'] ;
    
    $data['result']     = $wpdb->get_results( $query." ORDER BY StartDate desc LIMIT ${offset}, ${arg['items_per_page']}");
    $totalPage          = ceil($total / $arg['items_per_page']);
    
//var_dump($query." ORDER BY tab.allocate desc LIMIT ${offset}, ${arg['items_per_page']}"); 

    $page_arg['cpage'] = '%#%';


    //Utility From

    if($totalPage > 1) {
        $data['start_count'] = ($arg['items_per_page'] * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( $page_arg , admin_url('admin.php?page=allocate_gaming_system')), 
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