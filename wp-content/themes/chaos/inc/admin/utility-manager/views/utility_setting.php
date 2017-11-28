<?php
	global $wpdb;

 	$system_table 	= $wpdb->prefix.'chaos_utility_setting';

	if(isset($_POST['action']) AND $_POST['action'] =='submit_pc') {

	 		$gaming_pc_data 		= array(
	 				'utility_name' 			=> $_POST['utility_name'],
	 				'utility_email_id' 		=> $_POST['primary_email_id'],
	 			);
	 		$wpdb->insert( $system_table, $gaming_pc_data);
		 		
	}
	if(isset($_POST['action']) AND $_POST['action'] =='update_pc') {
			$update_id = $_GET['id'];
	 		$gaming_pc_data 		= array (
	 				'utility_name' 			=> $_POST['utility_name'],
	 			);
	 		$wpdb->update( $system_table, $gaming_pc_data,array('id' => $update_id));
		 		
	}

		
		$update_system_data == false;
		
		$data_query  		= "SELECT * FROM $system_table WHERE active = 1 Order By id Desc";
		$update_system_data = $wpdb->get_row($data_query, OBJECT);

		$update_system == false;
		if($_GET['action'] == 'update') {

		$data_query  		= "SELECT * FROM $system_table WHERE active = 1 Order By id Desc";
		$update_system 		= $wpdb->get_row($data_query, OBJECT);

		}
		 		

?>
<style>
.price_setting{
	width:100%;
}
.price_setting_in{
	width:75%;
	margin:0 auto;
	margin-top: 70px;
}
label
{
	font-size: 20px;
}

.submit_button{
	
    margin-top: 30px;
}
.label_top{
	float: left;
	width: 200px;	
}
.football_pricing_in{
	margin-top: 30px;
	margin-bottom: 10px;
}

.football_pricing_time{
	margin-top: 30px;
}
.div-table{
    border: 0px; 
}
</style>

<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h1>Add Utility</h1>

			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Utility Name</label></div>
					<div><input type="text" name="utility_name" id="utility_name" value="<?php if($update_system){ echo $update_system->utility_name; } ?>" /></div>
				</div>				
				<?php if(!$update_system){ ?>
				<div class="football_pricing_in">
					<div class="label_top"><label>Primary Email Id</label></div>
					<div><input type="text" name="primary_email_id" id="primary_email_id" value="<?php echo $update_system_data->utility_email_id; ?>" /></div>
				</div>
				<?php } ?>
			</div>
			
			<?php if($update_system) { ?>
			<input type="hidden" name="action" id="submit" value="update_pc"></br>	
			<input type="submit" id="submit" class="player_add submit_button" value="Update">
			<?php } else { ?>
			<input type="hidden" name="action" id="submit" value="submit_pc"></br>	
			<input type="submit" id="submit" class="player_add submit_button" value="Add">
			<?PHP  } ?>
		
			
			<div>
				<h1>List Team</h1>
				<table class="wp-list-table widefat fixed " cellspacing="0" >
				    <thead>
				        <tr style="background: #23282d;color: #fff;">
				            <th class="manage-column column-id"><span>S No</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Utility Name</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
				        </tr>
				    </thead>
				    <tbody id="the-list" class="">
				    <?php
				   //pagination
				    if($_GET['action']=='delete'){
				        $id = $_GET['id'];
				        $data_delete=$wpdb->update( $system_table ,array( 'active' =>'0' ),array( 'id' => $id ));
				    }

				    $condition = '';
				    $receipt_per_page  = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
				    

				    $result_args = array(
				        'table_name' => $system_table,
				        'orderby_field' => 'id',
				        'page' => 1,
				        'order_by' => 'DESC',
				        'items_per_page' => $receipt_per_page,
				        'condition' => $condition,
				    );
				    $results = custom_pagination_utility_list($result_args);


				    // echo "<pre>";
				    // var_dump($results); die();

				        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
				            $per_page = $results['start_count'];
				            foreach ($results['result'] as $d_value) {
				                $per_page++;
				    ?>
				    <tr style="background:#fff;">
				        <td> <?php echo $per_page; ?></td>
				        <td> <?php echo $d_value->utility_name; ?></td>
				        
				        <td class="center">
				            <span>
				                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=utility_setting').'&id='.$d_value->id.'&action=update'; ?>" title="Edit" data-roll="1" data-id="26"></a>
				            </span>
				            <span><a class="action-icons c-delete-utility-setting user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
				            </span>
				        </td>
				    </tr>
				    <?php
				    }
				}
				 ?>
				    </tbody>
				</table>
				<?php echo $results['pagination']; ?>
			</div>
			
		</div>
		

	</section>

</form>


