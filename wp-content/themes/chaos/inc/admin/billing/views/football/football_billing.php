<?php


date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i');
$timestamp = date("Y-m-d H:i:s", time());

//Display Values
global $wpdb;
$billing_table 					= $wpdb->prefix. 'chaos_football_billing';
$billing_table_details 			= $wpdb->prefix. 'chaos_football_billing_details';

//Get Current User 

$current_user 		= wp_get_current_user();
$current_nice_name 	= $current_user->user_nicename;


if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {
	$id  			= $_GET['id'];
	$query        	= "SELECT * FROM {$billing_table} WHERE active = 1 AND id =".$_GET['inv_id'];
   	$update_data   	= $wpdb->get_row( $query, OBJECT );
}
$GetPlayedHours = getPriceBilling($_GET['inv_id']);
$GetIndividualPlayedHours = getIndividualPlayingHours($_GET['inv_id']);
if(isset($_POST['action']) AND $_POST['action'] == 'update_football_bill'  ) {
	
	if(isset($_POST['member_id']) AND $_POST['member_id'] != 0) {
		$tot_val = 0;
		foreach ($_POST['group_team'] as $group_val ) {
	 		$tot_val = $group_val['total_value'] + $tot_val;
		 }
		$amount =  	$tot_val;
		$credit = 	$tot_val/25;
		
		$add_points = updatePoints($_POST['member_id'],$credit);
		$credit_point_table = addPointsInCreditPointsTable($_POST['member_id'],$credit,'foot_ball',$_POST['billing_id']);
	}
	else {
		$credit = 0;
	}

		$bill_no = $_POST['billing_no'];
		$insert_data	 = array (
			'ft_date'           			=> $_POST['billing_date_view'],
			'member_id'           			=> $_POST['member_id'],
			'ft_member_name'    			=> $_POST['search_billing'],
			'ft_membership_no'    			=> $_POST['member_no'],
			'ft_bill_date'    				=> $_POST['date'],
			'ft_bill_time'    				=> $_POST['time'],
			'ft_played_hours'    			=> $_POST['played_hours'],
			'ft_member_phone_number'        => $_POST['phone_number'], 
			'ft_credit_points'              => $credit,
			'ft_gst'  						=> $_POST['gst'],
			'ft_gst_value'  				=> $_POST['gst_value_input'],
			'ft_member_discount' 			=> $_POST['member_discount'],
			'ft_member_discount_value' 		=> $_POST['member_discount_value'],
			'ft_discount' 					=> $_POST['discount_percentage'],
			'ft_discount_value' 			=> $_POST['discount_value'],
			'ft_football_bill' 				=> $_POST['final_bill'],
			'created_by' 					=> $current_nice_name,
			'was_bulid' 					=> 1,
			);  
		$wpdb->update($billing_table,$insert_data,array('id' => $_POST['billing_id']));

		$wpdb->update($billing_table_details,array('active'=>0),array('inv_id'=>$_POST['billing_id']));
		foreach ($_POST['group_team'] as $group_val ) {
	 		$billing_relation_data 					= array(
	 				'inv_id' 						=> $_POST['billing_id'],
	 				'hours' 						=> $group_val['player'],
	 				'price_per_hour'                => $group_val['per_hour_price'],
	 				'price' 						=> $group_val['total_value'],
	 			);

	 		$wpdb->insert($billing_table_details, $billing_relation_data );		
		 }

		//Send mail to admin

		$emailid = 'karthik97933@gmail.com';
		$subject = 'Football Billing For '.$bill_no;
		$message =  $_POST['search_billing'].' Paid '.$_POST['final_bill'].' Rupees';




		//Mail Function
		wp_mail( $emailid, $subject, $message );

		print('<script>window.location.href="admin.php?page=football_billing&pagess=4&action=display_football&bill_id='.$_POST['billing_id'].'"</script>');
				exit();



		
}
	// $update_data = false;
	// $old_credit_points  = $_POST['old_credit_points'];
	// if(isset($_POST['action']) AND $_POST['action'] == 'update_football_bill'  ) {

	// 	if(isset($_POST['member_id']) AND $_POST['member_id'] != 0) {
			
	// 		$amount =  	$_POST['total_value'];
	// 		$credit = 	$_POST['total_value']/25;

	// 		$credit_data 	= array (
	// 		'member_id'  	=> $_POST['member_id'],
	// 		'amount' 		=> $amount,
	// 		'credit_points' => $credit,
	// 		);
	// 		$wpdb->update($credit_table,$credit_data,array('bill_id' => $bill_no,'game_name' => 'football'));

	// 		$new_credits 	= $credit - $old_credit_points;

	// 		$add_points 	= updatePoints($_POST['member_id'],$new_credits);

	// 		$credit_point_table = addPointsInCreditPointsTable($_POST['member_id'],$credit,'foot_ball',$_POST['billing_id']);


	// 	} else {
	// 		$credit = 0;
	// 	}

	
	// 	$bill_no = $_POST['billing_no'];

	// 	$insert_data	 = array (
	// 		'ft_date'           			=> $_POST['billing_date_view'],
	// 		'member_id'           			=> $_POST['member_id'],
	// 		'ft_member_name'    			=> $_POST['old_member_name'],
	// 		'ft_membership_no'    			=> $_POST['member_no'],
	// 		'ft_bill_date'    				=> $_POST['date'],
	// 		'ft_bill_time'    				=> $_POST['time'],
	// 		'ft_played_hours'    			=> $_POST['played_hours'],
	// 		'ft_member_phone_number'        => $_POST['phone_number'],
	// 		'ft_total'        				=> $_POST['total_value'],
	// 		'ft_credit_points'              => $credit,
	// 		'ft_no_of_hours'  				=> $_POST['player'],
	// 		'ft_no_of_member'  				=> $_POST['no_of_members'],
	// 		'ft_amount_value'  				=> $_POST['per_hour_price'],
	// 		'ft_vat'  						=> $_POST['vat'],
	// 		'ft_vat_value'  				=> $_POST['vat_value_input'],
	// 		'ft_member_discount' 			=> $_POST['discount'],
	// 		'ft_member_discount_value' 		=> $_POST['after_discount'],
	// 		'ft_discount' 					=> $_POST['discount_percentage'],
	// 		'ft_discount_value' 			=> $_POST['discount_value'],
	// 		'ft_football_bill' 				=> $_POST['final_bill'],
	// 		'was_bulid' 					=> 1,

	// 		);  
	// 	$wpdb->update($billing_table,$insert_data,array('ft_bill_no' => $bill_no));

	// 	$emailid = 'sowmiya@ajnainfotech.com';
	// 	$subject = 'Updated In Football Billing For '.$bill_no;
	// 	$message = $_POST['old_member_name'].' Paid '.$_POST['final_bill'].' Rupees';

	// 	//Mail Function
	// 	wp_mail( $emailid, $subject, $message );

	// 	print('<script>window.location.href="admin.php?page=football_billing&pagess=4&action=display_football&bill_no='.$bill_no.'"</script>');
	// 			exit();
		
	//}

	


?>
<style>
.new_user, .old_user_a{
	display: none;
}

.old_user_a, .new_user_a {
	cursor: pointer;
}

</style>
<section class="add-billing">
	<div class="">
		<div class="text-center">
			
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div>
					<div class="billing_name_left" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 30px;">Bill No       : </label></span>
						<input type="text" name="billing_no" id="billing_no" class="billing_no" value="<?php echo $update_data->ft_bill_no; ?>" readonly>
						<input type="hidden" name="billing_id" id="billing_id" class="billing_id" value="<?php echo $update_data->id; ?>">
						
						<br>
						
						<input type="hidden" name="date" id="bill_date" value="<?php if($update_data){ echo $date; } else { echo $date; } ?>">
						<input type="hidden" name="time" id="bill_time" value="<?php if($update_data){ echo $time; } else { echo $time; } ?>">
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

					<div class="billing_name" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 9px;">Played Hours : </label></span>
						<span class="billing_in" >
							<?php 
								if( $_GET['action'] == 'update') { 
									foreach ($GetIndividualPlayedHours as $played_hours) {
										echo $played_hours->name.',';
									}
								}
								?>
							
						</span>
						<input type="hidden" name="played_hours" value="<?php 
							if( $_GET['action'] == 'update') { 
								foreach ($GetIndividualPlayedHours as $played_hours) {
									echo $played_hours->name.',';
								}
							}
							?>">
					</div>
					
				</div>
				
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 1px;"><label style="padding: 2px 5px;">Member Name:</label></span>
						<input type="hidden" name="member_id" id="member_id" class="member_id" value="<?php if($update_data){ echo $update_data->member_id; }?>">
					<span class="billing_in">
						<!-- <select style="width: 170px;"  class="search_billing" name="search_billing" id="search_billing">
						</select> -->
						<input type="text" name="search_billing" id="new_search_billing" value="<?php echo ($update_data)? $update_data->ft_member_name : ''; ?>" class="new_search_billing">
						<input type="text" name="member_name" id="new_user" value="" class="new_user">
						<input type="hidden" name="member_no" id="member_no" value="<?php echo ($update_data)? $update_data->ft_membership_no: ''; ?>" class="member_no">
						<!-- <input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name"> -->					
					</span>
				</div>
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 2px;"><label style="padding: 6px;">Phone Number </label></span>
					<span class="billing_in"><input type="text" name="phone_number"  id="phone_number" value="<?php echo isset($_GET['phone_number'])? $_GET['phone_number']:$update_data->ft_member_phone_number; ?>" ></span>
				</div>
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 2px;"><label style="padding: 6px;">Member Email </label></span>
					<span class="billing_in"><input type="text" name="member_email"  id="member_email" value="<?php echo isset($_GET['member_email'])? $_GET['member_email']:$update_data->ft_member_email; ?>" class="member_email"></span>
				</div>
			</div>			
			
			<div class="retail-repeater">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">Price Per Hour</div>
					    <div class="div-table-head action">Bill Amout</div>
					</div>
					<?php  
					$i = 1;
						foreach($GetPlayedHours as $played_hours){

						
					?>
			    	<div data-repeater-item class="repeterin div-table-row cal" >
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno"><?php echo $i; ?></div>
                        </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<?php
                            		$minutes = $played_hours->played_hours;
									$zero    = new DateTime('@0');
									$offset  = new DateTime('@' . $minutes * 60);
									$diff    = $zero->diff($offset);


                            		$hours = $diff->format('%a, %h, %i');
                            	?>
                            	<input type="text" name="player" id="player" value="<?php echo $diff->h; ?>" class="no_of_player" value="1">



                            </div>
					    </div>
					   
					    <div class="div-table-col">
                            
                            <div class="football_in_price player">
                            	<?php echo $played_hours->price; ?>
                            </div>
                            <input type="hidden" name="per_hour_price" id="per_hour_price" class="per_hour_price" value="<?php  echo $played_hours->price; ?>">
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="total_value" id="total_value" class="total_value"/>
                           <div class="total_value_div" id="total_value_div">
                            	<?php 
                            	if(($_GET['action'])=='update'){
									echo $update_data ->ft_total;
								}
								else {
									echo $_GET['price'];
								}
                            	?>
                            </div>
					    </div>  
			        </div>
			        <?php } ?>
			        
			        <div class="div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					                               	    
					    <div class="div-table-col"> Member Discount(<span id="discount_per" class="discount_per"><?php if($_GET['action'] == 'update'){ echo floatval($update_data ->ft_member_discount); }?></span>)  </div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="member_discount" id="member_discount" class="member_discount" value="<?php if($_GET['action'] == 'update'){
					    		echo $update_data ->ft_member_discount;

					    		} 
					    			?>"
					    			/>
					    	<input type="hidden" name="member_discount_value" id="member_discount_value" class="member_discount_value" value="<?php if($update_data){ echo $update_data->ft_member_discount_value; } else {
					    		echo '0'; 
					    	} ?>">
                           	<div class="member_discount_value_div" id="member_discount_value_div">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->ft_member_discount_value; 
		 								
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div class="div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    
					    <div class="div-table-col">
					     	Discount
					     	<input type="text" name="discount_percentage" id="discount_percentage" class="discount_percentage" size="5" value="<?php if(($_GET['action'])=='update'){ echo floatval($update_data->ft_discount); } else { echo $_GET['discount_percentage']; }?>"/>  %                                              
					    	
					 	</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount_value" id="discount_value" class="discount_value" value="<?php if(($_GET['action'])=='update'){ echo $update_data->ft_discount_value; } else { echo '0'; }?>"/> 
					    	<div id="discount_value_div" class="discount_value_div">
					    		<?php if($_GET['action'] == 'update'){
					    			echo $update_data->ft_discount_value;
					    		} else {
					    			echo '0';
					    		}
					    		?>
					    		
					    	</div>                                             
					    </div>  
			        </div>
			        <div class="div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					                               	    
					    <div class="div-table-col"> GST( <?php if($_GET['action'] == 'update'){echo floatval($update_data ->ft_gst);}?> ) %</div> 
					    <div class="div-table-col">
					    	<input type="hidden" name="gst" id="gst" class="gst" value="<?php if($_GET['action'] == 'update'){
					    		echo $update_data ->ft_gst;

					    		} 
					    			?>"
					    			/>
					    	<input type="hidden" name="gst_value_input" id="gst_value_input" class="gst_value_input" value="<?php if($update_data){ echo $update_data ->ft_vat_value; } else {
					    		echo '0';
					    	} ?>">
                           	<div class="gst_value" id="gst_value">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->ft_gst_value; 
		 								
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div class="div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    
					                              					    
					    <div class="div-table-col">Total </div>                           
					    <div class="div-table-col">
					    	<input type="hidden" name="final_bill" id="final_bill" class="final_bill" value="<?php echo $update_data ->ft_football_bill; ?>">
                           	<div class="final_bill_div" id="final_bill_div">
							<?php 
                            	if(($_GET['action'])=='update'){
	 								echo  $update_data ->ft_football_bill; 
								}else
								{
									echo 0;
								}
                            ?>
                           	</div>              	                           
					    </div>  
			        </div>
			    </div>
			</div>
			<?php if(($_GET['action']) == 'update'){ ?>


			<input type="hidden" name="action" id="" value="update_football_bill"></br>
			<input type="submit" name="submit" id="submit" class="player_add" class="submit" value="Update">
			<?php } else { ?>

			<input type="hidden" name="action" id="" value="football_billing_submit"></br>
			<input type="submit" name="submit" style="display:none;" id="submit" class="player_add football_submit" value="Submit">
			<?php } ?>

		</form>
	</div>
</section> 
<script type="text/javascript">
jQuery("document").ready(function() {
    Football_billing();
});
</script>


<!-- SELECT  * FROM 
(
  select bill.*,
(case when member_table.membership_no is null then 0 else member_table.membership_no end) as  membership_no,
    (case when member_table.first_name is null then '' else member_table.first_name end) as  first_name,
    (case when member_table.phone is null then 0 else member_table.phone end) as  phone
    from 
(
  select id,member_id,	ft_bill_no,	ft_date,ft_played_hours,ft_member_name,ft_member_phone_number,ft_total,ft_gst,ft_member_discount,ft_discount,created_by from wp_chaos_football_billing WHERE active = 1 
  ) as bill 
left join
  (
    select id as mem_id,membership_no,first_name,phone  from wp_chaos_members WHERE active = 1 
  ) as member_table
  on bill.member_id= member_table.mem_id
) as football 
left join 
(select inv_id,hours,price_per_hour,price from wp_chaos_football_billing_details WHERE active = 1) as  football_details
on football.id = football_details.inv_id -->