<?php

function chaos_members_pagination($args ) {
    global $wpdb;
    $customPagHTML      = "";
    $query              = "SELECT * FROM ${args['table']} WHERE active = 1 ${args['condition']}";
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $args['page'] );
    $offset             = ( $page * $args['items_per_page'] ) - $args['items_per_page'] ;

    $data['result']     = $wpdb->get_results( $query . "ORDER BY ${args['orderby_field']} ${args['order_by']} LIMIT ${offset}, ${args['items_per_page']}" );
    $totalPage         = ceil($total / $args['items_per_page']);
    $ppage = isset( $_GET['ppage'] ) ? abs( (int) $_GET['ppage'] ) : $args['items_per_page'];
    

    if(isset($_POST['action']) && $_POST['action'] == 'chaos_members_list') {
        $ppage      = $_POST['per_page'];        
        $member_no  = $_POST['member_no'];        
        $name       = $_POST['name'];        
        $phone      = $_POST['phone'];        
        
    } else {
        $ppage      = isset( $_GET['ppage'] ) ? abs( (int) $_GET['ppage'] ) : 10;        
        $member_no  = isset( $_GET['member_no'] ) ? abs( (int) $_GET['member_no'] ) : '';        
        $name       = isset( $_GET['name'] ) ? abs( (int) $_GET['name'] ) : '';        
        $phone      = isset( $_GET['phone'] ) ? abs( (int) $_GET['phone'] ) : '';        
    }
    $page_arg = [];
    if($member_no != '') {
        $page_arg['member_no'] = $member_no;
    }
    if($name != '') {
        $page_arg['name'] = $name;
    }
    if($phone != '') {
        $page_arg['phone'] = $phone;
    }

    $page_arg['cpage'] = '%#%';
    $page_arg['ppage'] = $ppage;

    if($totalPage > 1){
        $data['start_count'] = ($ppage * ($page-1));
        $pagination = paginate_links( array(
                
                'base' => add_query_arg( $page_arg, admin_url('admin.php?page=list_chaos_member') ),
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