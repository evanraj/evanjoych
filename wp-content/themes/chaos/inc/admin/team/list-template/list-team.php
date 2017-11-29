<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Team Id</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Team Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Total Members</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="list:wp_list_text_link">
 	<?php
 	global $wpdb;
    $table_name = $wpdb->prefix. 'chaos_football_team';
    $result_args = array(
    		'table' 		   => $table_name,
    		'orderby_field'    => 'id',
    		'page'			   => isset($_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1 ,
    		'order_by'		   => 'DESC',
    		'items_per_page'   => 20,
    		'condition'		   => ''
    	);
    $results = football_team_pagination($result_args);

    if(count($results['result'])>0) {  
        $start_count = $results['start_count'];
        foreach ($results['result'] as $t_value) {
        $start_count++;
	?>
  	<tr>
	  	<td class=""><?php echo $start_count; ?>
        </td>
	  	<td> <?php echo $t_value->id; ?></td>
	  	<td> <?php echo $t_value->team_name; ?></td>
        <td> <?php echo $t_value->mem_count; ?></td>
	  	<td> <button>Delete</button>&nbsp; &nbsp;
        <button class="team-edit" data-teamid="<?php echo $t_value->id; ?>">Edit</button></td>
  	</tr>
  	<?php
    }
}
 ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>






<!-- 
SELECT tot.*, 
SUM(tot.is_membar) as mem_count from 
 (SELECT 
 ft.id, 
 ft.team_name, 
 ft.active as team_active, 
 (CASE WHEN ftr.active is NULL THEN 1 ELSE ftr.active END ) as relation_active, 
 (CASE WHEN ftr.active is NULL THEN 0 ELSE 1 END ) as is_membar 
FROM wp_chaos_football_team ft LEFT JOIN wp_chaos_football_team_relation ftr ON ft.id = ftr.team_id ) tot WHERE tot.relation_active = 1 AND tot.team_active = 1 GROUP BY id -->