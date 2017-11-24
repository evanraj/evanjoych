<?php
function custom_pagination($args ) {
    global $wpdb;
    $customPagHTML      = "";
    $query              = "SELECT * FROM ${args['table']} WHERE 1=1 ${args['condition']}";
    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";
    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $args['page'] );
    $offset             = ( $page * $args['items_per_page'] ) - $args['items_per_page'] ;

    $data['result']         = $wpdb->get_results( $query . "ORDER BY ${args['orderby_field']} ${args['order_by']} LIMIT ${offset}, ${args['items_per_page']}" );
    $totalPage         = ceil($total / $args['items_per_page']);
    


    if($totalPage > 1){
    	$data['start_count'] = ($ppage * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( 'cpage', '%#%' ),
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


function football_team_pagination($args ) {
    global $wpdb;

    $team_relation = $wpdb->prefix. 'chaos_football_team_relation';
    $customPagHTML      = "";
    $query              = "SELECT tot.*, SUM(tot.is_membar) as mem_count from 
     (SELECT 
     ft.id, 
     ft.team_name, 
     ft.active as team_active, 
     (CASE WHEN ftr.active is NULL THEN 1 ELSE ftr.active END ) as relation_active, 
     (CASE WHEN ftr.active is NULL THEN 0 ELSE 1 END ) as is_membar 
    FROM ${args['table']} ft LEFT JOIN ${team_relation} ftr ON ft.id = ftr.team_id ) tot WHERE tot.relation_active = 1 AND tot.team_active = 1 ${args['condition']} GROUP BY tot.id ";

    $total_query        = "SELECT COUNT(1) FROM (${query}) AS combined_table";


    $total              = $wpdb->get_var( $total_query );
    $page               = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : abs( (int) $args['page'] );
    $offset             = ( $page * $args['items_per_page'] ) - $args['items_per_page'] ;

    $data['result']         = $wpdb->get_results( $query . "ORDER BY ${args['orderby_field']} ${args['order_by']} LIMIT ${offset}, ${args['items_per_page']}" );
    $totalPage         = ceil($total / $args['items_per_page']);
    


    if($totalPage > 1){
        $data['start_count'] = ($ppage * ($page-1));
        $pagination = paginate_links( array(
                'base' => add_query_arg( 'cpage', '%#%' ),
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