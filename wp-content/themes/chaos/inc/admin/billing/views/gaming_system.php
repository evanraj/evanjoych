<?php
	global $wpdb;

 	$system_table 	= $wpdb->prefix.'chaos_system';

	if(isset($_POST['action']) AND $_POST['action'] =='submit_pc') {

		foreach ($_POST['group_team'] as $group_val ) {
	 		$gaming_pc_data 		= array(
	 				'pc_name' 			=> $group_val['pc_name'],
	 				'pc_category' 		=> $group_val['category'],
	 			);
	 		$wpdb->insert( $system_table, $gaming_pc_data);

		 		
		}
	}

	if(isset($_POST['action']) AND $_POST['action'] =='update_pc') {

		$id = $_GET['id'];
		//delete updated pc 
		$relation_data_delete=$wpdb->update( $system_table,array( 'active' =>'0' ),array( 'id' => $id  ));
		//insert updated pc
		foreach ($_POST['group_team'] as $group_val ) {
	 		$gaming_pc_data 		= array(
	 				'pc_name' 			=> $group_val['pc_name'],
	 				'pc_category' 		=> $group_val['category'],
	 			);
	 		$wpdb->insert( $system_table, $gaming_pc_data);

		 		
		}
	}
	$update_system_data == false;

	if(isset($_GET['action']) AND $_GET['action'] =='update') {

		$id = $_GET['id'];
		
		$data_query  		= "SELECT * FROM $system_table WHERE active = 1 and id ='$id'";
		$update_system_data = $wpdb->get_row($data_query, OBJECT);

		 		
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
			<h1>Add System</h1>
			
			
			<div class="football_pricing_time">
				<div class="retail-repeater group_team">
				  	<div data-repeater-list="group_team" class="div-table">
					    <div class="div-table-row">
						    <div class="div-table-head sl-no">S.No</div>   
						    <div class="div-table-head ">Pc Name</div>
						    <div class="div-table-head ">Category</div>						   
						</div>

						<div data-repeater-item class="repeterin div-table-row">
							<div class="div-table-col sale-rowno">
	                            <div class="type-container">                               
	                            </div>
	                            <div class="rowno">1</div>
	                        </div>
						     
						    <div class="div-table-col">
	                            <div class="no_of_player player">
	                            	<input type="text" name="pc_name" class="pc_name" value="<?php echo $update_system_data->pc_name; ?>" >
	                            	
	                            </div>
						    </div>
						    <div class="div-table-col">
	                            <div class="hours player">
	                            <select name="category">
	                            	<?php 
	                            	if($update_system_data){
	                            		$cat = $update_system_data->pc_category;
	                            	}
	                            	else {
	                            		$cat = '';
	                            	}

	                            	?>
								  	<option value="1"<?php if($cat == '1'){ echo 'selected';} ?>>PC</option>
								  	<option value="2"<?php if($cat == '2'){ echo 'selected';} ?>>Xbox</option>
								  	<option value="3"<?php if($cat == '3'){ echo 'selected';} ?>>PS4</option>
								</select>	
	                            </div>
						    </div> 
				        </div>


				     </div>

				    <ul class="icons-labeled">
						<li>
							<a data-repeater-create href="javascript:void(0);" id="add_new_price_range">
							<span class="icon-block-color add-c"></span>Add Row</a>
						</li>
					</ul>
			 	</div>
			</div>
			<?php  if (isset($_GET['action']) AND $_GET['action'] =='update') { ?>

				<input type="hidden" name="action" id="submit" value="update_pc"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Submit">

			<?php } else 
			{ ?>

			<input type="hidden" name="action" id="submit" value="submit_pc"></br>	
			<input type="submit" id="submit" class="player_add submit_button" value="Submit">

			<?php } ?>
			
			<div>
				<h1>List Team</h1>
				<table class="wp-list-table widefat fixed " cellspacing="0" >
				    <thead>
				        <tr style="background: #23282d;color: #fff;">
				            <th class="manage-column column-id"><span>S No</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Pc Name</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Category</span></th>
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
				    $results = custom_pagination_gaming_system($result_args);


				    // echo "<pre>";
				    // var_dump($results); die();

				        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
				            $per_page = $results['start_count'];
				            foreach ($results['result'] as $d_value) {
				                $per_page++;
				    ?>
				    <tr style="background:#fff;">
				        <td> <?php echo $per_page; ?></td>
				        <td> <?php echo $d_value->pc_name; ?></td>
				        <td> <?php $cat = $d_value->pc_category;
				        if($cat == '1'){
				        	echo 'PC';
				        } 
				        else if($cat == '2'){
				        	echo 'Xbox';
				        }
				        else {
				        	echo 'PS4';
				        }?></td>
				        <td class="center">
				            <span>
				                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=add_gaming_system').'&id='.$d_value->id.'&action=update'; ?>" title="Edit" data-roll="1" data-id="26"></a>
				            </span>
				            <span><a class="action-icons c-delete-system user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
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


