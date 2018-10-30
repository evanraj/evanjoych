<?php


date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i');
$timestamp = date("Y-m-d H:i:s", time());

//Display Values
global $wpdb;
$lazertag_billing 					= $wpdb->prefix. 'chaos_lazertag_billing';


//Get Current User 

$current_user 		= wp_get_current_user();
$current_nice_name 	= $current_user->user_nicename;

//Calculate Hours 



//Get update value 
if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {
	$id  			= $_GET['id'];
	$query        	= "SELECT * FROM {$lazertag_billing} WHERE active = 1 AND id =".$_GET['inv_id'];
   	$update_data   	= $wpdb->get_row( $query, OBJECT );
}



$from_date 			= new DateTime(trim(html_entity_decode($update_data->from_date.' '.$update_data->from_time )));
$to_date 			= new DateTime(trim(html_entity_decode($update_data->from_date.' '.$update_data->to_time)));



//For display input Text Box 
$from_date1 		= $from_date->format('d-m-Y H:i:s');
$to_date1 			= $to_date->format('d-m-Y H:i:s');

$from_to_hours 		= $from_date1 .' - '.$to_date1;

//Get Difference between two hours
$dteDiff  		= $from_date->diff($to_date);
$only_hours 	= ($dteDiff->d *24) + $dteDiff->h;
$hours 			= ($dteDiff->d *24) + $dteDiff->h.":".$dteDiff->i;



// get next hours based on played minuts

if(($dteDiff->i) > 0){
	$nextHour = $only_hours + 1;
} else {
	$nextHour = $only_hours;
}


	if(isset($_POST['action']) AND $_POST['action'] == 'update_lazertag_bill'  ) {

		if(isset($_POST['lazertag_member_id']) AND $_POST['lazertag_member_id'] != 0) {

			$amount =  	$_POST['lazertag_total_value'];
			$credit = 	$amount/25;

			$credit_data 	= array (
			'member_id'  	=> $_POST['lazertag_member_id'],
			'bill_id' 		=> $_POST['lazertag_billing_no'],
			'game_name' 	=> 'lazertag',
			'amount' 		=> $amount,
			'credit_points' => $credit,
			);

			
			$add_points 	= updatePoints($_POST['lazertag_member_id'],$credit);
			$credit_point_table = addPointsInCreditPointsTable($_POST['lazertag_member_id'],$credit,'lazertag_bill',$_POST['billing_id']);
		}
		else {
			$credit = 0;
		}	
		$bill_no = $_POST['lazertag_billing_no'];


		$insert_data	 = array (
			'lazertag_date'           				=> $_POST['lazertag_billing_date'],
			'lazertag_bill_no' 						=> $_POST['lazertag_billing_no'],
			'lazertag_played_hours'                 => $_POST['lazertag_played_hours'],
			'lazertag_member_name'    				=> $_POST['search_billing'],
			'lazertag_membership_no'    			=> $_POST['lazertag_member_no'],
			'lazertag_member_phone_number'        	=> $_POST['lazertag_phone_number'],
			'lazer_date'        					=> $_POST['date'],
			'lazer_time'        					=> $_POST['time'],
			'lazertag_players'						=> $_POST['no_of_player'],	
			'lazertag_hours'						=> $_POST['lazer_hours'],
			'lazertag_amount'						=> $_POST['per_hour_price_lazertag'],
			'lazertag_total'						=> $_POST['lazertag_total_value'],
			'lazertag_credit_points'                => $credit,
			'lazertag_gst'							=> $_POST['lazertag_gst'],
			'lazertag_gst_value'					=> $_POST['lazertag_gst_value'],
			'lazertag_member_discount'				=> $_POST['member_discount'],
			'lazertag_member_discount_value'		=> $_POST['member_discount_val'],
			'lazertag_discount'				        => $_POST['discount_percentage'],
			'lazertag_discount_value'				=> $_POST['discount_value'],
			'lazertag_bill' 						=> $_POST['final_bill_lazertag'],
			'created_by' 							=> $current_nice_name,
			);  

		$wpdb->update($lazertag_billing,$insert_data,array('id' => $_POST['billing_id']));

		//Send mail to admin

		$emailid = 'karthik97933@gmail.com';
		$subject = 'Updated in Lazertag Billing For '.$bill_no;
		$message = $_POST['search_billing'].' Paid '.$_POST['final_bill_lazertag'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );

		

		
		print('<script>window.location.href="admin.php?page=lazertag_billing&pagess=4&action=display_lazertag&inv_id='.$_POST['billing_id'].'"</script>');
				exit();

	}


if($_GET['lazertag_type'] == 'birthday'){
	
	$display = "style='display:block;margin-top: 10px;'";
} else if ($_GET['lazertag_type'] == 'corporate'){
	
	$display = "style='display:block;margin-top: 10px;'";
} else {
	
	$display = "style='display:none;margin-top: 10px;'";
}

?>
<style>

.lazertag_new_user, .lazertag_old_user_a{
	display: none;
}

.lazertag_old_user_a, .new_user_a_lazertag {
	cursor: pointer;
}
.lazertag_hour_price,.hours_div{
	display: none;
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
						<input type="text" name="lazertag_billing_no" id="lazertag_billing_no" class="lazertag_billing_no" value="<?php echo 'INV'.$_GET['inv_id'] ?>" readonly>
						<input type="hidden" name="billing_id" id="billing_id" class="billing_id" value="<?php echo $update_data->id; ?>">

						<input type="hidden" name="date" id="bill_date" value="<?php  echo $date; ?>">
						<input type="hidden" name="time" id="bill_time" value="<?php  echo $time; ?>">
					</div>
					<div class="billing_name" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 37px;">Date : </label></span>
						<span class="billing_in"><input type="text" name="lazertag_billing_date" id="lazertag_billing_date" value="<?php 
						if( $_GET['action'] == 'update') { 
							echo $timestamp; 
						}
						?>">
						</span>
					</div>
					<div class="billing_name" style="margin-top: 10px;">
						<span class="billing" style=""><label style="padding: 2px 9px;">Played Hours : </label></span>
						<span class="billing_in">
							<input type="text" name="lazertag_played_hours" id="lazertag_played_hours" value="<?php 
		
									echo $update_data->from_time.' - '.$update_data->to_time ;
								?>"
							/>
						</span>
					</div>
					
				</div>
				
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 1px;"><label style="padding: 2px 5px;">Member Name:</label></span>
						<input type="hidden" name="lazertag_member_id" id="member_id" class="member_id" value="<?php if($update_data){ echo $update_data->member_id; }?>">
					<span class="billing_in">
						<!-- <select style="width: 170px;"  class="search_billing" name="search_billing" id="search_billing">
						</select> -->
						<input type="text" name="search_billing" id="new_search_billing" value="<?php echo ($update_data)? $update_data->lazertag_member_name : ''; ?>" class="new_search_billing">
				<!-- 		<input type="text" name="member_name" id="new_user" value="" class="new_user"> -->
						<input type="hidden" name="member_no" id="member_no" value="<?php echo ($update_data)? $update_data->lazertag_membership_no: ''; ?>" class="member_no">
						<!-- <input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name"> -->					
					</span>
				</div>
				
				<div class="billing_name" style="margin-top: 10px;">
					<span class="billing" style="padding: 2px;"><label style="padding: 6px;">Phone Number </label></span>
					<span class="billing_in"><input type="text" name="lazertag_phone_number"  id="lazertag_phone_number" value="<?php echo $update_data->lazertag_member_phone_number; ?>"></span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 2px;"><label style="padding: 6px;">Playing Area </label></span>
					<span class="billing_in">
						<?php
						if($update_data->area1 == 'console'){
							echo 'Console Gaming(PS4),';
						} 
						if ($update_data->area2 == 'vr') {
							echo 'VR Gaming,';
						} 
						if ($update_data->area3 == 'motion') {
							echo 'Retro & Motion Sensor Game';
						} 
						else{
							echo '';
						}
						?>
					</span>
				</div>
			</div>		
			
			<div class=" ">
			  	<div data-repeater-list="" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Members</div>
					    <div class="div-table-head action">Hours/Game</div>
					    <div class="div-table-head action">Per Game/Member(Rs.)</div>
					    <div class="div-table-head action">Bill Amount</div>
					   
					</div>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container"> </div>                               
                           
                            <div class="rowno">1</div>
                        </div>
					     <div class="div-table-col">
					     	<?php if($update_data->lazertag_type == 'normal')  { ?>
					     	<div class="player" >
                            	<input type="text" name="no_of_player"  value="<?php echo $update_data ->lazertag_players; ?>" class="no_of_player_lazer_slot" >
                            	<input type="hidden" name="gametype" id="gametype" value="slot" class="gametype">
                            </div>
					    	<?php  }  else {
					    		?>
					     	
                            
                            <div class="no_of_player_in player">
                            	<input type="text" name="no_of_player" id="team" value="1" class="no_of_player_lazer_hour">
                            	
                            	<input type="hidden" name="gametype" id="gametype" value="hours" class="gametype">
                            </div>   
                           <?php } ?>    
                          
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="lazer_hours" id="lazer_hours" value="<?php  echo $nextHour; ?>" class="lazer_hours">
                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="hidden" name="per_hour_price_lazertag" id="per_hour_price_lazertag" class="per_hour_price_lazertag" value="<?php if($update_data) { echo $update_data->lazertag_amount; } ?>">
                            <div class="lazetag_in_price player">
                            	<?php 
                            	if($update_data){
                            		echo $update_data->lazertag_amount;
                            	} 
                            		
                            	?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="lazertag_total_value" id="lazertag_total_value" class="lazertag_total_value" value="">
                           <div class="lazertag_total_value" id="lazertag_total_value">
                            </div>
					    </div>  
			        </div>
			        
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> Member Discount(<span id="discount_per_lazertag" class="discount_per_lazertag"><?php  echo floatval($update_data->lazertag_member_discount).' % '; ?></span>)</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="member_discount" id="lazertag_member_discount" class="lazertag_member_discount" value="<?php if($update_data){
					    		echo floatval($update_data ->lazertag_member_discount);

					    		} 
					    			?>"
					    			>
					    	<input type="hidden" name="member_discount_val" id="lazertag_member_discount_val" class="lazertag_member_discount_val" value="<?php if($update_data) { echo $update_data->lazertag_member_discount_value; }  ?>">
                           	<div class="lazertag_member_discount_val_div" id="lazertag_member_discount_val_div">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->lazertag_member_discount_value; 
		 								
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">
					     	Discount
					     	<input type="text" name="discount_percentage" id="lazertag_discount_percentage" class="lazertag_discount_percentage" size="5" value="<?php if($update_data){ echo floatval($update_data->lazertag_discount); } else { echo '0'; }?>"/>  %                                              
					    	
					 	</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount_value" id="lazertag_discount_value" class="lazertag_discount_value" value="<?php if($update_data){ echo $update_data->lazertag_discount_value; } ?>"/> 
					    	<div id="lazertag_discount_value_div" class="lazertag_discount_value_div">
					    		<?php if($update_data){
					    			echo $update_data->lazertag_discount_value;
					    		} 
					    		?>
					    		
					    	</div>                                             
					    </div>  
			        </div>

			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> GST(<?php echo $update_data->lazertag_gst; ?>) %</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="lazertag_gst" id="lazertag_gst" class="lazertag_gst" value="<?php if($update_data){
					    		echo floatval($update_data->lazertag_gst);

					    		} 
					    			?>"
					    			/>
					    	<input type="hidden" name="lazertag_gst_value" id="lazertag_gst_value" class="lazertag_gst_value" value="<?php if($update_data) { echo $update_data->lazertag_gst_value; } ?>">
                           	<div class="lazertag_gst_value_txt" id="lazertag_gst_value_txt">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data->lazertag_gst_value; 
		 								
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col">Total </div>                           
					    <div class="div-table-col">
					    	<input type="hidden" name="final_bill_lazertag" id="final_bill_lazertag" class="final_bill_lazertag" value="<?php if($update_data) { echo $update_data->lazertag_bill; }?>">
                           	<div class="final_bill_lazertag_div" id="final_bill_lazertag_div">
							<?php 
                            	if($update_data){
	 								echo  $update_data ->lazertag_bill; 
								}
                            ?>
                           	</div>              	                           
					    </div>  
			        </div>
			    </div>
			</div>	
			<?php if(($_GET['action']) == 'update'){ ?>


			<input type="hidden" name="action" id="" value="update_lazertag_bill"></br>
			<input type="submit" name="submit" id="submit" class="player_add" class="submit" value="Update">
			<?php } else { ?>

			<input type="hidden" name="action" id="" value="lazertag_billing_submit"></br>
			<input type="submit" name="submit" id="submit" style="display:none;" class="player_add lazertag_submit"  value="Submit">
			<?php } ?>

		</form>
	</div>
</section>

<script type="text/javascript">
jQuery("document").ready(function() {
    lazertag_calculation();
});
</script>