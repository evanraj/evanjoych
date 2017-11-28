<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Team Id</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Team Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="list:wp_list_text_link">
 	<?php
 	global $wpdb;
    $table_name = $wpdb->prefix. 'chaos_football_team';
    $result_args = array(
    		'table' 		=> $table_name,
    		'orderby_field' => 'id',
    		'page'			=> isset($_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1 ,
    		'order_by'		=> 'DESC',
    		'items_per_page' => 5,
    		'condition'		=> $condition
    	);
    $results = custom_pagination($result_args);

    if(count($results['result'])>0) {  
        $start_count = $results['start_count'];
        foreach ($results['result'] as $t_value) {
        $start_count++;
	?>
  	<tr>
	  	<td class="">
            <?php echo $start_count; ?>
        </td>
	  	<td> <?php echo $t_value->team_id; ?></td>
	  	<td> <?php echo $t_value->team_name; ?></td>
	  	<td> <button>Delete</button>&nbsp; &nbsp;<button>Edit</button></td>
  	</tr>
  	<?php
    }
}

 ?>
 </tbody>