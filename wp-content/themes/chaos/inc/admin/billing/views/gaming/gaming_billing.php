<?php


if(isset($_GET['member_no']) AND $_GET['member_no'] == ''){
		$membership_no  = 0; 
		$member_name    = $_GET['new_user'];

}  else {

		$membership_no  = $_GET['member_no']; 
		$member_name    = $_GET['old_member_name'];

} 


global $wpdb;
date_default_timezone_set('Asia/Kolkata');
$date 		= date('Y-m-d');
$time 		= date('H:i');
$timestamp 	= date("Y-m-d H:i:s", time());

//Get Current User 

$current_user 		= wp_get_current_user();
$current_nice_name 	= $current_user->user_nicename;





$gaming_billing 			= $wpdb->prefix. 'chaos_gaming_billing';
$gaming_billing_relation 	= $wpdb->prefix. 'chaos_gaming_billing_relation';
$allocate_table 			= $wpdb->prefix. 'chaos_system_allocate';

$update_data 				= false;
$update_relation_data 		= false;
$old_credit_points  		= $_POST['old_credit_points'];


if(isset($_POST['action']) AND $_POST['action'] == 'update_gaming_bill' ) {

$bill_no = $_POST['billing_id'];
$id = $_GET['id'];
if(isset($_POST['member_id']) AND $_POST['member_id'] != 0) {

		$amount =  	$_POST['gaming_sub_tot'];
		$credit = 	$amount/25;

		$credit_data 	= array (
		'member_id'  	=> $_POST['member_id'],
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
		'gaming_bill_no'           			=> 'INV'.$bill_no,
		// 'gaming_date'           			=> $_POST['gaming_date'],
		// 'gaming_member_name'    			=> $_POST['new_search_billing'],
		// 'gaming_membership_no'    		=> $_POST['gaming_member_no'],
		// 'gaming_member_phone_number'     => $_POST['gaming_phone_number'],
		'gaming_sub_total'					=> $_POST['gaming_sub_tot'],
		'gaming_credit_points'              => $credit,
		'gaming_gst'						=> $_POST['gst'],
		'gaming_gst_val'					=> $_POST['gst_value_input'],		
		'gaming_member_discount' 			=> $_POST['member_discount'],
		'gaming_member_discount_value' 		=> $_POST['member_discount_value'],
		'gaming_discount' 					=> $_POST['discount_percentage'],
		'gaming_discount_value' 			=> $_POST['discount_value'],
		'gaming_bill' 						=> $_POST['final_bill'],
		'created_by' 						=> $current_nice_name,
		'was_bulid' 						=> 1,
		);   
	$wpdb->update($gaming_billing,$insert_data,array('id' => $bill_no));



		$relation_data_delete=$wpdb->update( $gaming_billing_relation,array( 'active' =>'0' ),array( 'gaming_id' => $bill_no ));

	foreach ($_POST['group_team'] as $group_val ) {
		$no_of_games = isset($group_val['no_of_games'])? $group_val['no_of_games'] : 1;
	 		$gaming_relation_data 					= array(
	 				'gaming_id' 					=> $bill_no,
	 				'gaming_pc_id' 					=> $group_val['pc_list'],
	 				'gaming_actual_played_hours' 	=> $group_val['actual_played_hours_val'], 				
	 				'gaming_hours' 					=> $group_val['hours_gaming'],
					// 'gaming_amount'					=> $group_val['per_hour_price_gaming'],
	 				'gaming_total'		    		=> $group_val['gaming_total_value'],
	 				'no_of_games'		    		=> $no_of_games,
	 				'allocate'  	=> 0,
	 				'start_time'  	=> $_POST['gaming_date'],
	 				'end_time'  	=> $_POST['gaming_date'],
	 				'was_build'  	=> 1,
	 				'pc_category'  	=> $group_val['cat_id'],
	 			);


	 		$wpdb->insert( $gaming_billing_relation, $gaming_relation_data );
	 		$system_actual_time = $group_val['pc_list'];
	 		$actual = array(
	 			'allocate'  => 0,
	 			'end_time'  => $_POST['gaming_date'],
	 			'bill_id'  => $bill_no,
	 			);		 		
	 		$wpdb->update($allocate_table,$actual,array('system_id' => $system_actual_time));

	 		
	 	}
	 	//Send mail to admin

		$emailid = 'karthik97933@gmail.com';
		$subject = 'Updated In Gaming Billing For '.$bill_no;
		$message = $_POST['search_billing'].' Paid '.$_POST['gaming_total_value'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );

	 	print('<script>window.location.href="admin.php?page=gaming_billing&pagess=2&bill_no='.$bill_no.'"</script>');
			exit();
}
if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {

$id  			= $_GET['inv_id'];
$query        	= "SELECT * FROM {$gaming_billing} WHERE active = 1 AND id ='$id' and was_bulid = 0";
$update_data   	= $wpdb->get_row( $query, OBJECT );


//relation table

$relation_query              = "SELECT * FROM $gaming_billing_relation WHERE active = 1 AND gaming_id='$id' and was_build=0";
$update_relation_data        = $wpdb->get_results($relation_query, ARRAY_A);



}


?>
<style>

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
			<!-- <div class="col-md-6 title">
				<h1>Gaming Billing</h1>
			</div> -->
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
					
			<div class="billing_details">
				<div>
					<div class="billing_name_left" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 30px;">Bill No       : </label></span>
						<input type="text" name="gaming_billing_no" id="gaming_billing_no" class="gaming_billing_no" value="<?php echo 'INV'.$update_data->id; ?>" readonly>
						<input type="hidden" name="billing_id" id="billing_id" class="billing_id" value="<?php echo $_GET['inv_id']; ?>">
						
						<br>
						
						<input type="hidden" name="date" id="bill_date" value="<?php if($update_data){ echo $date; } else { echo $date; } ?>">
						<input type="hidden" name="time" id="bill_time" value="<?php if($update_data){ echo $time; } else { echo $time; } ?>">
						<input type="hidden" name="gaming_date" id="gaming_date" value="<?php  echo $timestamp; ?>">
					</div>
					<div class="billing_name" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 37px;">Date : </label></span>
						<span class="billing_in"><input type="text" name="billing_date_view" id="billing_date_view" value="<?php 
						if( $_GET['action'] == 'update') { 
							echo $timestamp; 
						}
						?>">
						</span>
					</div>
					
				</div>
				
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 1px;"><label style="padding: 2px 5px;">Member Name:</label></span>
						<input type="hidden" name="member_id" id="member_id" class="member_id" value="<?php if($update_data){ echo $update_data->member_id; }?>">
					<span class="billing_in">
						<!-- <select style="width: 170px;"  class="search_billing" name="search_billing" id="search_billing">
						</select> -->
						<input type="text" name="search_billing" id="new_search_billing" value="<?php echo ($update_data)? $update_data->gaming_member_name : ''; ?>" class="new_search_billing">
						<input type="text" name="member_name" id="gaming_new_user" value="" class="gaming_new_user">
						<input type="hidden" name="member_no" id="member_no" value="<?php echo ($update_data)? $update_data->gaming_membership_no: ''; ?>" class="member_no">
						<!-- <input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name"> -->					
					</span>
				</div>
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 2px;"><label style="padding: 6px;">Phone Number </label></span>
					<span class="billing_in"><input type="text" name="phone_number"  id="phone_number" value="<?php echo $update_data->gaming_member_phone_number; ?>" ></span>
				</div>
<?php 
	$id = array_keys(array_column($update_relation_data, 'pc_category'), "4");
	$id = ($id)? 1:0;

	
?>
			</div>
			<div class="retail-repeater group_team">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head sl-no">Pc Name/Member Wise</div>
					    <div class="div-table-head action">No of member</div>
					    <div class="div-table-head action">Actual Played Hours</div>
					    <div class="div-table-head action">Hours</div>
					    <?php if($id == 1) { ?> <div class="div-table-head action">No Of games</div> <?php  } ?>
					   <!--  <div class="div-table-head action">Price</div> -->
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
					<?php
						$i = 1;
						
							if($_GET['action'] == 'update') {

								foreach ($update_relation_data as $r_value ) {
									
									
									$start_time = $r_value['start_time'];
									$end_time   = ($r_value['end_time'] != '0000-00-00 00:00:00')? $r_value['end_time'] : $timestamp;
	

									$date_a = new DateTime($start_time);
									$date_b = new DateTime($end_time);


									$interval = date_diff($date_a,$date_b);

									$hours = $interval->format('%h');
									$minuts = $interval->format('%i');
									$date = $interval->format('%d');

									$total_time_withDate = $date * 24;
									$total_time = ($total_time_withDate+$hours).'.'.$minuts;
									$price = gamingActualPlayedHoursCalculate($total_time,$r_value['pc_category']);
									
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
                            	$game_id 	= $r_value['gaming_pc_id'];
                            	$update 	= pc_name($r_value['gaming_pc_id']);
                            	echo $update->pc_name;
                            	?>
                            	<label class="switch"  style=<?php echo ($id==1 && $r_value['pc_category'] == '4')? 'display:block' : 'display:none'; ?>>
                            			<input type="checkbox" id="togBtn_game" class="togBtn_game" name="togBtn_game" data-catid="<?php echo $d_value->pc_category; ?>" data-sysid="<?php echo $d_value->id; ?>" checked />
                            		<div class="slider round">
						           	<!--ADDED HTML -->
							           	<span class="off" >NO</span>
								        <span class="on" checked>YES</span>
							           	
							        <!--END-->
					           		</div>
					           </label>
                            	<input type ="hidden" name="pc_list" value="<?php echo $r_value['gaming_pc_id']; ?>"/>
                            	<input type ="hidden" name="cat_id" class="cat_id" value="<?php echo $r_value['pc_category']; ?>"/>
                            </div>
					    </div>
					    <div class="div-table-col">
                           	<div class="no_of_player_in player slot_div">
                            	<input type="text" name="no_of_mem_gaming" id="no_of_mem_gaming" value="1" class="no_of_mem_gaming" >	
                            </div>                             
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="hidden" name="actual_played_hours_val" id="actual_played_hours_val" value="<?php echo $total_time; ?>" class="actual_played_hours_val">
                            	<div class="actual_played_hours"><?php echo $total_time; ?></div>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="hours_gaming" id="hours_gaming" value="<?php if($update_data) { echo $total_time; } else { echo '1'; } ?>" <?php if($r_value['pc_category']==4) { echo 'readonly'; } ?> class="hours_gaming">
                            </div>
					    </div>
					   <!--  <div class="div-table-col">
                            <input type="hidden" name="per_hour_price_gaming" id="per_hour_price_gaming" class="per_hour_price_gaming" value="<?php echo round($r_value->gaming_amount); ?>">
                            <div class="per_hour_price_gaming player">
                            	<?php                            	
                            		//echo round($r_value->gaming_amount);
                            	?>
                            </div>
					    </div> -->
					    <?php if($id == 1) { ?> 
					    <div class="div-table-col">
                           	<div class="no_of_player_in player slot_div">
                            	<input type="text" name="no_of_games" id="no_of_games" value="1" class="no_of_games" <?php if($r_value['pc_category']!=4){ echo 'readonly'; } ?> />
                       		</div>   
                       </div>  
                            <?php } ?>                        
					    
					    <div class="div-table-col">
					    <input type="hidden" name="gaming_total_value" id="gaming_total_value" class="gaming_total_value" value="<?php echo $price['total_price']; ?>">
					    <input type="hidden" name="gaming_total_value_cal" id="gaming_total_value_cal" class="gaming_total_value_cal" value="<?php echo $price['total_price']; ?>">
					    <input type="hidden" name="gaming_total_value_cal_motion_hr" id="gaming_total_value_cal_motion_hr" class="gaming_total_value_cal_motion_hr" value="<?php echo '200.00'; ?>">
					    <input type="hidden" name="gaming_total_value_cal_mem" id="gaming_total_value_cal_mem" class="gaming_total_value_cal_mem" value="<?php echo $price['total_price']; ?>">
                           <div class="gaming_total_value_text" id="gaming_total_value_text">
                            	<?php 
                            		echo $price['total_price']; 
                            	?>
                            </div>
					    </div>  
			        </div>

			        
			        <?php
				        		$i++;
				        		}
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
					    <div class="div-table-col" style="width: 219px;">Member Discount(<span id="gaming_member_discount_per" class="gaming_member_discount_per"><?php echo $update_data->gaming_member_discount; ?></span>)</div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="member_discount" id="member_discount" class="member_discount" value="
					    	<?php if($_GET['action'] == 'update'){
					    		echo $update_data->gaming_member_discount;

					    		} 
					    			?>">
					    	<input type="hidden" name="member_discount_value" id="member_discount_value" class="member_discount_value" value="<?php echo  $update_data ->gaming_member_discount_value;  ?>">
                           	<div class="member_discount_value_div" id="member_discount_value_div">
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
					    	<input type="text" name="discount_percentage" size="5" class="discount_percentage" id="discount_percentage" value="<?php if($update_data){ echo ceil($update_data->gaming_discount);} ?>"/> %
					    </div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="discount_value" id="discount_value" class="discount_value" value="<?php echo  $update_data ->gaming_discount_value;  ?>">
                           	<div class="discount_value_div" id="discount_value_div">
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
					    <div class="div-table-col" style="width: 219px;">GST(<?php echo $update_data->gaming_gst; ?>) %</div>  
					    <div class="div-table-col" style="width: 218px;">
					    	<input type="hidden" name="gst" id="gst" class="gst" value="<?php if($update_data){ echo $update_data->gaming_gst; } ?>">
					    	<input type="hidden" name="gst_value_input" id="gst_value_input" class="gst_value_input" value="<?php if($update_data){ echo $update_data->gaming_vat_val; }?>">
                           	<div class="gst_value">
							<?php 
                           	if($_GET['action'] == 'update'){
					    		echo $update_data->gaming_gst_val;
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
					    	<input type="hidden" name="final_bill" id="final_bill" class="final_bill" value="<?php if($update_data){ echo $update_data->gaming_bill; } else { echo '0'; } ?>">
                           	<div class="final_bill_div" id="final_bill_div">
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

<script type="text/javascript">
jQuery("document").ready(function() {
   	//GamingCalculation();
   	jQuery('.no_of_games,.no_of_mem_gaming,.hours_gaming').live('change',function(){
		GamingCalculation();
   	});
	jQuery('.togBtn_game').live('change',function(){
		var checked = jQuery(this).attr('checked');
		if(checked == 'checked'){
			jQuery(this).parent().parent().parent().parent().find('.hours_gaming').attr('readonly',true);
			jQuery(this).parent().parent().parent().parent().find('.no_of_games').attr('readonly',false);
			var check = 1;
		}
		else{
			jQuery(this).parent().parent().parent().parent().find('.no_of_games').attr('readonly',true);
			jQuery(this).parent().parent().parent().parent().find('.hours_gaming').attr('readonly',false);
			var check = 0;
		}
GamingCalculation();
	});
});
</script>