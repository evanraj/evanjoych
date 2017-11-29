<?php
global $wpdb;
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i');

$price_per_hour = getGamingPrice($date, $time);

$select_allocate = allocate_system_bill();
// echo "<pre>";
// var_dump($select_allocate);
// echo "</pre>";
$gaming_billing 			= $wpdb->prefix. 'chaos_gaming_billing';
$gaming_billing_relation 	= $wpdb->prefix. 'chaos_gaming_billing_relation';
$allocate_table 			= $wpdb->prefix. 'chaos_system_allocate';

if(isset($_POST['action']) AND $_POST['action'] == 'gaming_billing_submit'  ) {


	if(isset($_POST['gaming_member_no']) AND $_POST['gaming_member_no'] == ''){
		$membership_no  = 0; 
		$member_name    = $_POST['member_name'];

	}  else {

		$membership_no  = $_POST['gaming_member_no']; 
		$member_name    = $_POST['gaming_old_member_name'];

	} 

	if(isset($_POST['gaming_member_id']) AND $_POST['gaming_member_id'] != 0) {

			$amount =  	$_POST['gaming_sub_tot'];
			$credit = 	$amount/25;

			$add_points = updatePoints($_POST['gaming_member_id'],$credit);
			$credit_point_table = addPointsInCreditPointsTable($_POST['gaming_member_id'],$credit,'gaming_bill',$_POST['billing_id']);
			
		}
		else {
			$credit = 0;
		}

		$bill_no = $_POST['gaming_billing_no'];

		$insert_data	 = array (
			'game_date'           				=> $_POST['date'],
			'game_time'           				=> $_POST['time'],
			'gaming_date'           			=> $_POST['timestamp'],
			'gaming_member_name'    			=> $member_name,
			'gaming_membership_no'    			=> $membership_no,
			'gaming_member_phone_number'        => $_POST['gaming_phone_number'],
			'gaming_sub_total'					=> $_POST['gaming_sub_tot'],
			'gaming_credit_points'              => $credit,	
			'gaming_vat'						=> $_POST['gaming_vat'],	
			'gaming_vat_val'					=> $_POST['gaming_vat_value'],	
			'gaming_member_discount' 			=> $_POST['gaming_member_discount'],
			'gaming_member_discount_value' 		=> $_POST['after_member_gaming_discount'],
			'gaming_discount' 					=> $_POST['gaming_discount'],
			'gaming_discount_value' 			=> $_POST['after_gaming_discount'],
			'gaming_bill' 						=> $_POST['gaming_final_bill'],
			'was_bulid' 						=> 1,
			);  

		$wpdb->update($gaming_billing,$insert_data,array('gaming_bill_no' => $bill_no));		

		$select_id_query="SELECT * from $gaming_billing where gaming_bill_no='$bill_no'";
		$select_id      = $wpdb->get_row( $select_id_query, OBJECT);
		
		$id = $select_id->id;
		
		foreach ($_POST['group_team'] as $group_val ) {
		 		$gaming_relation_data 					= array(
		 				'gaming_id' 					=> $id,
		 				'gaming_pc_id' 					=> $group_val['pc_list'],
		 				'gaming_actual_played_hours' 	=> $group_val['actual_played_hours_val'], 				
		 				'gaming_hours' 					=> $group_val['hours_gaming'],
		 				'gaming_amount'					=> $group_val['per_hour_price_gaming'],
		 				'gaming_total'		    		=> $group_val['gaming_total_value'],
		 			);

		 		$wpdb->insert( $gaming_billing_relation, $gaming_relation_data );
		 		
		 		$system_actual_time = $group_val['pc_list'];
		 		$actual = array(
		 			'allocate'  => 0,
		 			'end_time'  => $_POST['timestamp'],
		 			'bill_id'  => $id,
		 			);		 		
		 		$wpdb->update($allocate_table,$actual,array('id' => $system_actual_time));
		 		
		 	}

		 	
		//Send mail to admin

		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Gaming Billing For '.$bill_no;
		$message = $member_name.' Paid '.$_POST['gaming_final_bill'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );


		print('<script>window.location.href="admin.php?page=display_gaming&action=display_gaming&bill_no='.$bill_no.'&id='.$id.'"</script>');
				exit();
 }
	$update_data = false;
   	$update_relation_data = false;
	$old_credit_points  = $_POST['old_credit_points'];


	if(isset($_POST['action']) AND $_POST['action'] == 'update_gaming_bill'  ) {

	$bill_no = $_POST['gaming_billing_no'];
	$id = $_GET['id'];
	if(isset($_POST['gaming_member_id']) AND $_POST['gaming_member_id'] != 0) {

			$amount =  	$_POST['gaming_sub_tot'];
			$credit = 	$amount/25;

			$credit_data 	= array (
			'member_id'  	=> $_POST['gaming_member_id'],
			'amount' 		=> $amount,
			'credit_points' => $credit,
			);

			$wpdb->update($credit_table,$credit_data,array('bill_id' => $bill_no,'game_name' => 'gaming'));

			$new_credits 	= $credit - $old_credit_points;
			$add_points 	= updatePoints($_POST['gaming_member_id'],$new_credits);

			$credit_point_table = addPointsInCreditPointsTable($_POST['gaming_member_id'],$credit,'gaming_bill',$_POST['billing_id']);
		}

		else {
			$credit = 0;
		}
	
		$insert_data	 = array (
			'game_date'           				=> $_POST['date'],
			'game_time'           				=> $_POST['time'],
			'gaming_date'           			=> $_POST['timestamp'],
			'gaming_member_name'    			=> $_POST['gaming_old_member_name'],
			'gaming_membership_no'    			=> $_POST['gaming_member_no'],
			'gaming_member_phone_number'        => $_POST['gaming_phone_number'],
			'gaming_sub_total'					=> $_POST['gaming_sub_tot'],
			'gaming_credit_points'              => $credit,
			'gaming_vat'						=> $_POST['gaming_vat'],	
			'gaming_vat_val'					=> $_POST['gaming_vat_value'],		
			'gaming_member_discount' 			=> $_POST['gaming_member_discount'],
			'gaming_member_discount_value' 		=> $_POST['after_member_gaming_discount'],
			'gaming_discount' 					=> $_POST['gaming_discount'],
			'gaming_discount_value' 			=> $_POST['after_gaming_discount'],
			'gaming_bill' 						=> $_POST['gaming_final_bill'],
			'was_bulid' 						=> 1,
			);   
		$wpdb->update($gaming_billing,$insert_data,array('gaming_bill_no' => $bill_no));


		

   		$relation_data_delete=$wpdb->update( $gaming_billing_relation,array( 'active' =>'0' ),array( 'gaming_id' => $id  ));

		foreach ($_POST['group_team'] as $group_val ) {
		 		$gaming_relation_data 					= array(
		 				'gaming_id' 					=> $id,
		 				'gaming_pc_id' 					=> $group_val['pc_list'],
		 				'gaming_actual_played_hours' 	=> $group_val['actual_played_hours_val'], 				
		 				'gaming_hours' 					=> $group_val['hours_gaming'],
		 				'gaming_amount'					=> $group_val['per_hour_price_gaming'],
		 				'gaming_total'		    		=> $group_val['gaming_total_value'],
		 			);

		 		$wpdb->insert( $gaming_billing_relation, $gaming_relation_data );
		 		
		 		$system_actual_time = $group_val['pc_list'];
		 		$actual = array(
		 			'allocate'  => 0,
		 			'end_time'  => $_POST['timestamp'],
		 			'bill_id'  => $id,
		 			);		 		
		 		$wpdb->update($allocate_table,$actual,array('id' => $system_actual_time));
		 		
		 	}

		 	//Send mail to admin

			$emailid = 'sowmiya@ajnainfotech.com';
			$subject = 'Updated In Gaming Billing For '.$bill_no;
			$message = $_POST['gaming_old_member_name'].' Paid '.$_POST['gaming_final_bill'].' Rupees';

			//Mail Function
			wp_mail( $emailid, $subject, $message );

		 	// print('<script>window.location.href="admin.php?page=display_gaming&action=display_gaming&bill_no='.$bill_no.'&id='.$id.'"</script>');
				// exit();
	}
	if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {

	$id  			= $_GET['id'];
	$query        	= "SELECT * FROM {$gaming_billing} WHERE active = 1 AND id ='$id'";
   	$update_data   	= $wpdb->get_row( $query, OBJECT );


	//relation table

	$relation_query              = "SELECT * FROM $gaming_billing_relation WHERE active = 1 AND gaming_id='$id'";
	$update_relation_data        = $wpdb->get_results($relation_query, OBJECT);



	}


?>
<style>

.billing_in {
    font-size: 16px;
    font-family: Arial;
    padding: 1px;
    float;left;
    padding: 24px;
}
.billing {
	color: #000000;
	font-family: Arial;
	margin-bottom:5px;
}
.billing_name input {
    width: 300px;
    height: 30px;

}

 #distributor_id {
   	display: none;
}
.billing label {
	float:left;
}
.billing_details {
	margin-left: 160px;
}
.billing_name_left input {
	width: 300px;
    height: 30px;

}
.billing_name_left {	
   float: right;
}
.billing_name {
	height: 40px;
}

.gaming_new_user, .old_user_a_gaming {
	display: none;
}

.old_user_a_gaming, .new_user_a_gaming {
	cursor: pointer;
}

</style>
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="col-md-6 title">
				<h1>Gaming Billing</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div>
					<div class="billing_name_left">
						<span class="billing" style="padding: 8px 28px;"><label>Bill No : </label></span>
						<input type="text" name="gaming_billing_no" id="gaming_billing_no" class="gaming_billing_no" value="<?php echo $update_data->gaming_bill_no; ?>" readonly>
						<input type="hidden" name="billing_id" id="billing_id" class="billing_id" value="<?php echo $update_data->id; ?>">
						<input type="hidden" name="old_credit_points" id="old_credit_points" class="old_credit_points" value="<?php if($update_data){ echo $update_data->gaming_credit_points; } else { echo ''; } ?>">
						<br>
						<br>
						<label class="billing">Bill For :</label><span class="bill_for_lazertag"><?php echo $price_per_hour['for']; ?></span>
						<br>
						<br>
						<label class="billing">Bill Date & Time :</label> <?php if($update_data){ echo $update_data->gaming_date;} else { echo $timestamp = date('Y-m-d H:i:s'); }?>
						<input type="hidden" name="timestamp" value="<?php if($update_data){ echo $update_data->gaming_date;} else { echo $timestamp = date('Y-m-d H:i:s'); } ?>"	/>
						<input type="hidden" name="date" value="<?php echo $date; ?>" />
						<input type="hidden" name="time" value="<?php echo $time; ?>"/>
					</div>
					<div class="billing_name">
						<span class="billing" style="padding: 8px 28px;"><label>Date : </label></span>
						<span class="billing_in"><input type="text" name="gaming_billing_date" id="gaming_billing_date" value="<?php 
						if( $_GET['action'] == 'update') { 
							echo $update_data->game_date;
						}
						else {
							echo $date; 
						}
						?>">
						</span>
					</div>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 8px 12px;"><label>Billing Type </label></span>
					<span class="billing_in">Gaming Billing</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 1px;"><label>Member Name:</label></span>
					<span class="billing_in">
						<input type="hidden" name="gaming_member_id" id="gaming_member_id" class="gaming_member_id" value="<?php if($update_data){ echo $update_data->member_id; } else { echo 0; } ?>"> 

					<?php 
						if($_GET['action']=='update') {

							echo '<input type="text" name="gaming_old_member_name" id="gaming_old_member_name" value="'.$update_data->gaming_member_name.'" class="member_no">';
							echo '<input type="hidden" name="gaming_member_no" id="gaming_member_no" value="'.$update_data->gaming_membership_no.'" class="member_no">';
						} else{
						?>
						<select style="width: 300px;"  class="search_gaming_billing" name="search_gaming_billing" id="search_gaming_billing">
						</select>
						<input type="text" name="member_name" id="gaming_new_user" class="gaming_new_user">
						<input type="hidden" name="gaming_member_no" id="gaming_member_no" class="gaming_member_no">
						<input type="hidden" name="gaming_old_member_name" id="gaming_old_member_name" class="gaming_old_member_name">
						<a class="new_user_a_gaming">New User</a>
						<a class="old_user_a_gaming">Old User</a>
						<?php } ?>
					</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 2px;"><label>Phone Number </label></span>
					<span class="billing_in"><input type="text" name="gaming_phone_number"  id="gaming_phone_number" required value="<?php echo $update_data->gaming_member_phone_number; ?>"></span>
				</div>
			</div>			
			
			<div class="retail-repeater group_team">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head sl-no">Pc Name</div>
					    <div class="div-table-head action">No of member</div>
					    <div class="div-table-head action">Actual Played Hours</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">Value</div>
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
					<?php
						$i = 1;
						
							if($_GET['action'] == 'update') {

								foreach ($update_relation_data as $r_value ) {
									

						?>
					<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">  
                            </div>
                            <div class="rowno"><?php echo $i; ?></div>
                        </div>
					     <div class="div-table-col">
                            <div class="no_of_player player">
                            	<?php 
                            	$game_id 	= $r_value->gaming_pc_id;
                            	$update 	= pc_name($r_value->gaming_pc_id);
                            	echo $update->pc_name;
                            	?>
                            	<input type ="hidden" name="pc_list" value="<?php echo $update->id; ?>"/>
                            </div>
					    </div>
					    <div class="div-table-col">
                           	<div class="no_of_player_in player slot_div">
                            	<input type="hidden" name="no_of_mem_gaming" id="no_of_mem_gaming" value="1" class="no_of_mem_gaming" >
                            	<div>1</div>
                            </div>                             
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="hidden" name="actual_played_hours_val" id="actual_played_hours_val" value="<?php echo  $r_value->gaming_actual_played_hours; ?>" class="actual_played_hours_val">
                            	<div class="actual_played_hours"><?php echo  $r_value->gaming_actual_played_hours; ?></div>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="hours_gaming" id="hours_gaming" value="<?php if($update_data) { echo  $r_value ->gaming_hours; } else { echo '1'; } ?>" class="hours_gaming">

                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="hidden" name="per_hour_price_gaming" id="per_hour_price_gaming" class="per_hour_price_gaming" value="<?php echo round($r_value->gaming_amount); ?>">
                            <div class="per_hour_price_gaming player">
                            	<?php                            	
                            		echo round($r_value->gaming_amount);
                            	?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="gaming_total_value" id="gaming_total_value" class="gaming_total_value" value="<?php echo $r_value->gaming_total; ?>">
                           <div class="gaming_total_value_text" id="gaming_total_value_text">
                            	<?php 
                            		echo $r_value->gaming_total; 
                            	?>
                            </div>
					    </div>  
			        </div>

			        
			        <?php
				        		$i++;
				        		}
				    		}
				    		else{ ?>

			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">  
                            </div>
                            <div class="rowno">1</div>
                        </div>
					     <div class="div-table-col">
                           	<div class="no_of_player_in player slot_div">
                            	<input type="hidden" name="select_pc_bill" id="select_pc_bill" value="1" class="select_pc_bill" >
                            	<select class="pc_list" name="pc_list" id="pc_list">
                            		<option value="select">Select </option>
                            		<?php 
                            		if($select_allocate){
                            			foreach ($select_allocate as $s_value) {
										echo '<option value = "'.$s_value->id.'">'.$s_value->pc_name.'</option>';
										
										}
                            		}
                            		 ?>

                            	</select>
                            </div>                         
					    </div>
					    <div class="div-table-col">
                           	<div class="no_of_player_in player slot_div">
                            	<input type="hidden" name="no_of_mem_gaming" id="no_of_mem_gaming" value="1" class="no_of_mem_gaming" >
                            	<div>1</div>
                            </div>                             
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="hidden" name="actual_played_hours_val" id="actual_played_hours_val" value="<?php if($update_data) { echo  $update_data ->gaming_hours; } else { echo '1'; } ?>" class="actual_played_hours_val">
                            	<div class="actual_played_hours"></div>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="hours_gaming" id="hours_gaming" value="<?php if($update_data) { echo  $update_data ->gaming_hours; } else { echo '1'; } ?>" class="hours_gaming">

                            </div>
					    </div>
					    <div class="div-table-col">
					    	<input type="hidden" name="kt" value="1"/>
                            <input type="hidden" name="per_hour_price_gaming" id="per_hour_price_gaming" class="per_hour_price_gaming" value="<?php echo $price_per_hour['price']; ?>">
                            <div class="per_hour_price_gaming player">
                            	<?php                            	
                            		echo $price_per_hour['price'];
                            	?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="gaming_total_value" id="gaming_total_value" class="gaming_total_value" value="<?php if($update_data){ echo $update_data->lazertag_total; } else { echo $price_per_hour['price']; }?>">
                           <div class="gaming_total_value_text" id="gaming_total_value_text">
                            	<?php 
                            		echo $price_per_hour['price']; 
                            	?>
                            </div>
					    </div>  
			        </div>

			        <?php	
				    			}
				        ?>
			     </div>
			        <div class="div-table-row">            	    
					    <div class="div-table-col" style="width: 1253px;"></div>  
					    <div class="div-table-col" style="width: 219px;">Sub Total</div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="gaming_sub_tot" id="gaming_sub_tot" class="gaming_sub_tot" value="<?php if($update_data){ echo $update_data ->gaming_sub_total;} else { echo '0'; } ?>">
                           	<div class="gaming_sub_tot">
							<?php 
                           	if($_GET['action'] == 'update'){
					    		echo $update_data ->gaming_sub_total; 

					    		} else {
					    			echo 0;
					    			}

                           	?>
                           	</div>                                                   
					    </div>  
			        </div>
			         <div class="div-table-row">            	    
					    <div class="div-table-col" style="width: 1253px;"></div>  
					    <div class="div-table-col" style="width: 219px;">Vat/Cst(<?php echo $price_per_hour['vat']; ?>) %</div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="gaming_vat" id="gaming_vat" class="gaming_vat" value="<?php if($update_data){ echo $update_data->gaming_vat; } else { echo $price_per_hour['vat']; } ?>">
					    	<input type="hidden" name="gaming_vat_value" id="gaming_vat_value" class="gaming_vat_value" value="<?php if($update_data){ echo $update_data->gaming_vat_val; }  else { echo '0'; }?>">
                           	<div class="gaming_vat_txt">
							<?php 
                           	if($_GET['action'] == 'update'){
					    		echo $update_data->gaming_vat_val;
					    		} else {
					    			echo 0;
					    			}

                           	?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div class="div-table-row">
					    <div class="div-table-col" style="width: 1253px;"></div>  
					    <div class="div-table-col" style="width: 219px;">Member Discount(<span id="gaming_member_discount_per" class="gaming_member_discount_per"></span>)</div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="gaming_member_discount" id="gaming_member_discount" class="gaming_member_discount" value="
					    	<?php if($_GET['action'] == 'update' && $update_data->member_id != 0){
					    		echo 10;

					    		} else {
					    			echo 0;
					    			}
					    			?>">
					    	<input type="hidden" name="after_member_gaming_discount" id="after_member_gaming_discount" class="after_member_gaming_discount" value="<?php echo  $update_data ->gaming_member_discount_value;  ?>">
                           	<div class="gaming_member_discount_text" id="gaming_member_discount_text">
                           	<?php 
                           	if($_GET['action'] == 'update'){
					    		echo $update_data ->gaming_member_discount_value; 

					    		} else {
					    			echo 0;
					    			}

                           	?>
                           	</div>                                                   
					    </div>  
			        </div>
			         <div class="div-table-row">                   	    
					    <div class="div-table-col" style="width: 1253px;"></div>  
					    <div class="div-table-col" style="width: 219px;"> 
					    	Discount
					    	<input type="text" name="gaming_discount" size="5" class="gaming_discount" id="gaming_discount" value="<?php if($update_data){ echo ceil($update_data->gaming_discount);} ?>"/> %
					    </div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="after_gaming_discount" id="after_gaming_discount" class="after_gaming_discount" value="<?php echo  $update_data ->gaming_discount_value;  ?>">
                           	<div class="gaming_discount_text" id="gaming_discount_text">
                           	<?php 
                           	if($_GET['action'] == 'update'){
					    		echo $update_data ->gaming_discount_value; 

					    		} else {
					    			echo 0;
					    			}

                           	?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div class="div-table-row">				    
					    <div class="div-table-col" style="width: 1253px;"></div>                           
					    <div class="div-table-col" style="width: 219px;">Total </div>                           
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="gaming_final_bill" id="gaming_final_bill" class="gaming_final_bill" value="<?php if($update_data){ echo $update_data->gaming_bill; } else { echo '0'; } ?>">
                           	<div class="gaming_final_bill_text" id="gaming_final_bill_text">
							<?php 
                            	if(($_GET['action'])=='update'){
	 								echo  $update_data ->gaming_bill; 
								}else
								{
									echo 0;
								}
                            ?>
                           	</div>              	                           
					    </div>  
			        </div>
			   <?php if(!$update_data){ ?>
			   <ul class="icons-labeled">
					<li>
						<a data-repeater-create href="javascript:void(0);" id="add_new_price_range">
						<span class="icon-block-color add-c"></span>Add Players</a>
					</li>
				</ul>

			  <?php  } ?>
			    
			 </div>
				
			<?php if(($_GET['action']) == 'update'){ ?>


			<input type="hidden" name="action" id="" value="update_gaming_bill"></br>
			<input type="submit" name="submit" id="submit" class="player_add" class="submit" value="Update">
			<?php } else { ?>

			<input type="hidden" name="action" id="" value="gaming_billing_submit"></br>
			<input type="submit" name="submit" style="display:none;" id="submit" class="player_add gaming_submit"  value="Submit">
			<?php } ?>

		</form>
	</div>
</section>