<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i');

global $wpdb;
$lazertag_billing 			= $wpdb->prefix. 'chaos_lazertag_billing';


$price_per_hour = getLazertagPrice('slot', $date, $time);

if(isset($_POST['action']) AND $_POST['action'] == 'lazertag_billing_submit'  ) {


	if(isset($_POST['lazertag_member_no']) AND $_POST['lazertag_member_no'] == ''){
		$membership_no  = 0; 
		$member_name    = $_POST['member_name'];

	}  else {

		$membership_no  = $_POST['lazertag_member_no']; 
		$member_name    = $_POST['lazertag_old_member_name'];

	} 

	if(isset($_POST['lazertag_member_id']) AND $_POST['lazertag_member_id'] != 0) {

			$amount =  	$_POST['lazertag_total_value'];
			$credit = 	$amount/25;
			$add_points = updatePoints($_POST['lazertag_member_id'],$credit);
			$credit_point_table = addPointsInCreditPointsTable($_POST['lazertag_member_id'],$credit,'lazertag_bill',$_POST['billing_id']);
		}
		else {
			$credit = 0;
		}


	 $player = ($_POST['gametype'] ==  'slot') ? $_POST['slot_player'] : $_POST['hour_player'];

	$happyhours = ( isset($_POST['lazertag_happyhours']) &&  $_POST['lazertag_happyhours']) ? 1 : 0 ;
			
		$bill_no = $_POST['lazertag_billing_no'];

		$insert_data	 = array (
			'lazertag_date'           				=> $_POST['lazertag_billing_date'],
			'lazertag_member_name'    				=> $member_name,
			'lazertag_membership_no'    			=> $membership_no,
			'lazertag_member_phone_number'        	=> $_POST['lazertag_phone_number'],
			'lazer_date'        					=> $_POST['date'],
			'lazer_time'        					=> $_POST['time'],
			'gametype'        						=> $_POST['gametype'],
			'lazertag_players'						=> $player,	
			'lazertag_hours'						=> $_POST['lazer_hours'],
			'lazertag_amount'						=> $_POST['per_hour_price_lazertag'],
			'lazertag_total'						=> $_POST['lazertag_total_value'],
			'lazertag_credit_points'                => $credit,
			'lazertag_vat'							=> $_POST['lazertag_vat'],
			'lazertag_vat_value'					=> $_POST['lazertag_vat_value'],
			'lazertag_member_discount'				=> $_POST['discount_lazertag'],
			'lazertag_member_discount_value'		=> $_POST['after_discount_lazertag'],
			'lazertag_discount'				        => $_POST['discount_percentage_lazertag'],
			'lazertag_discount_value'				=> $_POST['discount_value_lazertag'],
			'lazertag_bill' 						=> $_POST['final_bill_lazertag'],
			'was_bulid' 							=> 1,
			);  

		$wpdb->update($lazertag_billing,$insert_data,array('lazertag_bill_no' => $bill_no));

		//Send mail to admin

		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Lazertag Billing For '.$bill_no;
		$message = $member_name.' Paid '.$_POST['lazertag_final_bill'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );



	
		print('<script>window.location.href="admin.php?page=display_lazertag&action=display_lazertag&bill_no='.$bill_no.'"</script>');
				exit();
}
	$update_data = false;
 	$old_credit_points  = $_POST['old_credit_points'];

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

			$wpdb->update($credit_table,$credit_data,array('bill_id' => $bill_no,'game_name' => 'lazertag'));
			$new_credits 	= $credit - $old_credit_points;
			$add_points 	= updatePoints($_POST['lazertag_member_id'],$new_credits);

			$credit_point_table = addPointsInCreditPointsTable($_POST['lazertag_member_id'],$credit,'lazertag_bill',$_POST['billing_id']);
		}
		else {
			$credit = 0;
		}



	if(isset($_POST['lazertag_member_no']) AND $_POST['lazertag_member_no'] == ''){
		$membership_no  = 0; 
		$member_name    = $_POST['member_name'];

	}  else {

		$membership_no  = $_POST['lazertag_member_no']; 
		$member_name    = $_POST['lazertag_old_member_name'];

	} 
	
		$player = ($_POST['gametype'] ==  'slot') ? $_POST['slot_player'] : $_POST['hour_player'];	
		$bill_no = $_POST['lazertag_billing_no'];


		$insert_data	 = array (
			'lazertag_date'           				=> $_POST['lazertag_billing_date'],
			'lazertag_member_name'    				=> $member_name,
			'lazertag_membership_no'    			=> $membership_no,
			'lazertag_member_phone_number'        	=> $_POST['lazertag_phone_number'],
			'lazer_date'        					=> $_POST['date'],
			'lazer_time'        					=> $_POST['time'],
			'gametype'        						=> $_POST['gametype'],
			'lazertag_players'						=> $player,	
			'lazertag_hours'						=> $_POST['lazer_hours'],
			'lazertag_amount'						=> $_POST['per_hour_price_lazertag'],
			'lazertag_total'						=> $_POST['lazertag_total_value'],
			'lazertag_credit_points'                => $credit,
			'lazertag_vat'							=> $_POST['lazertag_vat'],
			'lazertag_vat_value'					=> $_POST['lazertag_vat_value'],
			'lazertag_member_discount'				=> $_POST['discount_lazertag'],
			'lazertag_member_discount_value'		=> $_POST['after_discount_lazertag'],
			'lazertag_discount'				        => $_POST['discount_percentage_lazertag'],
			'lazertag_discount_value'				=> $_POST['discount_value_lazertag'],
			'lazertag_bill' 						=> $_POST['final_bill_lazertag'],
			'was_bulid' 							=> 1,
			);  

		$wpdb->update($lazertag_billing,$insert_data,array('lazertag_bill_no' => $bill_no));

		//Send mail to admin

		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Updated in Lazertag Billing For '.$bill_no;
		$message = $member_name.' Paid '.$_POST['lazertag_final_bill'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );

		

		
		print('<script>window.location.href="admin.php?page=display_lazertag&action=display_lazertag&bill_no='.$bill_no.'"</script>');
				exit();

	}

	if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {

	$id  			= $_GET['id'];
	$query        	= "SELECT * FROM {$lazertag_billing} WHERE active = 1 AND id ='$id'";
   	$update_data   	= $wpdb->get_row( $query, OBJECT );


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
.billing label{
	float:left;
}
.billing_details{
	margin-left: 160px;
}
.billing_name_left input{
	width: 300px;
    height: 30px;

}
.billing_name_left{
	
   float: right;
}
.billing_name{
	height: 40px;
}
.lazertag_new_user, .old_user_a_lazertag{
	display: none;
}

.old_user_a_lazertag, .new_user_a_lazertag {
	cursor: pointer;
}
.team{
	display: none;
	cursor: pointer;
}


</style>
<?php if($update_data->gametype == 'hours') { ?>
<style>
.lazertag_hour_price,.hours_div{
	display: inline;
}
.slot_div{
	display: none;
}
</style>
<?php } else {  ?> 

<style>
.lazertag_hour_price,.hours_div{
	display: none;
}
</style>

<?php } ?>
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="col-md-6 title">
				<h1>Lazertag Billing</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div>
					<div class="billing_name_left">
						<span class="billing" style="padding: 8px 28px;"><label>Bill No : </label></span>
						<input type="text" name="lazertag_billing_no" id="lazertag_billing_no" class="lazertag_billing_no" value="<?php echo $update_data->lazertag_bill_no; ?>" readonly>
						<input type="hidden" name="billing_id" id="billing_id" class="billing_id" value="<?php echo $update_data->id; ?>">
						<input type="hidden" name="old_credit_points" id="old_credit_points" class="old_credit_points" value="<?php if($update_data){ echo $update_data->lazertag_credit_points; } else { echo ''; } ?>">
						<br>
						<br>
						<label class="billing">Bill For :</label><span class="bill_for_lazertag"><?php echo $price_per_hour['for']; ?></span>
						<br>
						<br>
						<label class="billing">Bill Date & Time :</label> <?php echo $timestamp = date("Y-m-d H:i:s", time()); ?>
						<input type="hidden" name="date" id="bill_date" value="<?php if($update_data){ echo $update_data->lazer_date;} else { echo $date; } ?>">
						<input type="hidden" name="time" id="bill_time" value="<?php if($update_data){ echo $update_data->lazer_time;} else { echo $time; } ?>">
						<input type="hidden" name="lazertag_billing_date" id="lazertag_billing_date" value="<?php if($update_data){ echo $update_data->lazertag_date;} else { echo $timestamp; } ?>">
					</div>
					<div class="billing_name">
						<span class="billing" style="padding: 8px 28px;"><label>Date : </label></span>
						<span class="billing_in"><input type="text" name="lazertag_billing" id="lazertag_billing" value="<?php 
						if( $_GET['action'] == 'update') { 
							echo $update_data->lazertag_date;
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
					<span class="billing_in">Lazertag Billing</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 1px;"><label>Member Name:</label></span>
					<span class="billing_in">
					<input type="hidden" name="lazertag_member_id" id="lazertag_member_id" class="lazertag_member_id" value="<?php if($update_data){ echo $update_data->member_id; } else { echo '0'; } ?>">

					<?php 
						if($_GET['action']=='update') {

							echo '<input type="text" name="lazertag_old_member_name" id="lazertag_old_member_name" value="'.$update_data->lazertag_member_name.'" class="member_no">';

						} else{
						?>
						<select style="width: 300px;"  class="search_lazertag_billing" name="search_lazertag_billing" id="search_lazertag_billing">
						</select>
						<input type="text" name="member_name" id="lazertag_new_user" class="lazertag_new_user">
						<input type="hidden" name="lazertag_member_no" id="lazertag_member_no" class="lazertag_member_no">
						<input type="hidden" name="lazertag_old_member_name" id="lazertag_old_member_name" class="lazertag_old_member_name">
						<a class="new_user_a_lazertag">New User</a>
						<a class="old_user_a_lazertag">Old User</a>
						<?php } ?>
					</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 2px;"><label>Phone Number </label></span>
					<span class="billing_in"><input type="text" name="lazertag_phone_number"  id="lazertag_phone_number" required value="<?php echo $update_data->lazertag_member_phone_number; ?>"></span>
				</div>
				<div class="billing_name_in">
					<span class="billing" style="padding: 3px 9px;"><label>Game Type </label></span>
					<span class="billing_in">
					<?php 
					if($_GET['action'] == 'update')
					{ 
						$check = $update_data->gametype; 
					?>


						<input type="radio" name="gametype" class="gametype" value="hours" <?php if( $check == 'hours' ) { echo "checked"; } ?>/> Hours
  						<input type="radio" name="gametype" class="gametype" value="slot" <?php if( $check == 'slot' ) {  echo "checked"; } ?>/> Slot
  						<br>


						
				<?php } else { ?>
						<input type="radio" name="gametype" class="gametype" value="hours" > Hours
  						<input type="radio" name="gametype" class="gametype" value="slot" checked> Slot<br>

  						<?php 
  					}
  						?>
					</span>
				</div>
			</div>			
			
			<div class=" ">
			  	<div data-repeater-list="" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">No of member/Team</div>
					    <div class="div-table-head action">Hours/Game</div>
					    <div class="div-table-head action">Price</div>
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container"> </div>                               
                           
                            <div class="rowno">1</div>
                        </div>
					     <div class="div-table-col">
					     	<?php 
					     	if($update_data) {

					     	?>
					     	 <div class="player hours_div" >
                            	<input type="text" name="hour_player" id="team" value="1" class="no_of_player_lazer_hour" readonly>
                            </div>
                            
                            <div class="no_of_player_in player slot_div">
                            	<input type="text" name="slot_player" id="team" value="<?php if($update_data) { echo  $update_data ->lazertag_players; } else { echo '1'; } ?>" class="no_of_player_lazer_slot" >
                            </div>
                           
                           <?php  	

                       			} else { ?>

                           <div class="no_of_player_in player slot_div">
                            	<input type="text" name="slot_player" id="team" value="1" class="no_of_player_lazer_slot" >
                            </div>
                            <div class="hours_div player">
                            	<input type="text" name="hour_player" id="team" value="1" class="no_of_player_lazer_hour" readonly>
                            </div>

                           <?php } ?>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="lazer_hours" id="lazer_hours" value="<?php if($update_data) { echo  $update_data ->lazertag_hours; } else { echo '1'; } ?>" class="lazer_hours">
                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="hidden" name="per_hour_price_lazertag" id="per_hour_price_lazertag" class="per_hour_price_lazertag" value="<?php if($update_data) { echo $update_data->lazertag_amount; } else { echo $price_per_hour['price']; }?>">
                            <div class="lazetag_in_price player">
                            	<?php 
                            	if($update_data){
                            		echo $update_data->lazertag_amount;
                            	}else {
                            		echo $price_per_hour['price'];
                            	}
                            		
                            	?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="lazertag_total_value" id="lazertag_total_value" class="lazertag_total_value" value="<?php if($update_data){ echo $update_data->lazertag_total; } else { echo $price_per_hour['price']; }?>">
                           <div class="lazertag_total_value" id="lazertag_total_value">
                            	<?php 
                            	if($update_data){ 
                            		echo $update_data->lazertag_total; 
                            	} else {
                            		echo $price_per_hour['price']; 
                            	}
                            	?>
                            </div>
					    </div>  
			        </div>
			         <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> GST(<?php echo $price_per_hour['vat']; ?>) %</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="lazertag_vat" id="lazertag_vat" class="lazertag_vat" value="<?php if($update_data){
					    		echo floatval($update_data->lazertag_vat);

					    		} else {
					    			echo floatval($price_per_hour['vat']);
					    			}
					    			?>"
					    			/>
					    	<input type="hidden" name="lazertag_vat_value" id="lazertag_vat_value" class="lazertag_vat_value" value="<?php if($update_data) { echo $update_data->lazertag_vat_value; } else { echo '0';} ?>">
                           	<div class="lazertag_vat_value_txt" id="lazertag_vat_value_txt">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data->lazertag_vat_value; 
		 								
									}else
									{
										echo 0;
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> Member Discount(<span id="discount_per_lazertag" class="discount_per_lazertag"></span>)</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount_lazertag" id="discount_lazertag" class="discount_lazertag" value="<?php if($update_data){
					    		echo floatval($update_data ->lazertag_member_discount);

					    		} else {
					    			echo 0;
					    			}
					    			?>"
					    			>
					    	<input type="hidden" name="after_discount_lazertag" id="after_discount_lazertag" class="after_discount_lazertag" value="<?php if($update_data) { echo $update_data->lazertag_member_discount_value; } else { echo '0';} ?>">
                           	<div class="discount_lazertag" id="discount_lazertag">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->lazertag_member_discount_value; 
		 								
									}else
									{
										echo 0;
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
					     	<input type="text" name="discount_percentage_lazertag" id="discount_percentage_lazertag" class="discount_percentage_lazertag" size="5" value="<?php if($update_data){ echo floatval($update_data->lazertag_discount); } else { echo '0'; }?>"/>  %                                              
					    	
					 	</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount_value_lazertag" id="discount_value_lazertag" class="discount_value_lazertag" value="<?php if($update_data){ echo $update_data->lazertag_discount_value; } else { echo '0'; }?>"/> 
					    	<div id="discount_value_lazertag" class="discount_value_lazertag">
					    		<?php if($update_data){
					    			echo $update_data->lazertag_discount_value;
					    		} else {
					    			echo '0';
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
					    	<input type="hidden" name="final_bill_lazertag" id="final_bill_lazertag" class="final_bill_lazertag" value="<?php if($update_data) { echo $update_data->lazertag_bill; } else { echo '0'; } ?>">
                           	<div class="final_bill_lazertag" id="final_bill_lazertag">
							<?php 
                            	if($update_data){
	 								echo  $update_data ->lazertag_bill; 
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


			<input type="hidden" name="action" id="" value="update_lazertag_bill"></br>
			<input type="submit" name="submit" id="submit" class="player_add" class="submit" value="Update">
			<?php } else { ?>

			<input type="hidden" name="action" id="" value="lazertag_billing_submit"></br>
			<input type="submit" name="submit" id="submit" style="display:none;" class="player_add lazertag_submit"  value="Submit">
			<?php } ?>

		</form>
	</div>
</section>