<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i');
global $wpdb;
$billing_table 			= $wpdb->prefix. 'chaos_football_billing';
$credit_table  			= $wpdb->prefix. 'chaos_credits';
$member_table  			= $wpdb->prefix. 'chaos_members';
$credit_points_table  	= $wpdb->prefix. 'chaos_credits_points';

$price_per_hour = getFootballPrice($date, $time);

if(isset($_POST['action']) AND $_POST['action'] == 'football_billing_submit'  ) {
	

	if(isset($_POST['member_no']) AND $_POST['member_no'] == ''){
		$membership_no  = 0; 
		$member_name    = $_POST['member_name'];

	}  else{

		$membership_no  = $_POST['member_no']; 
		$member_name    = $_POST['old_member_name'];

	} 

		if(isset($_POST['member_id']) AND $_POST['member_id'] != 0) {

			$amount =  	$_POST['total_value'];
			$credit = 	$_POST['total_value']/25;

			$credit_data 	= array (
			'member_id'  	=> $_POST['member_id'],
			'bill_id' 		=> $_POST['billing_no'],
			'game_name' 	=> 'football',
			'amount' 		=> $amount,
			'credit_points' => $credit,
			);

			$wpdb->insert($credit_table,$credit_data);

			
			$add_points = add_points($_POST['member_id'],$credit);
			
		}


		$bill_no = $_POST['billing_no'];

		$insert_data	 = array (
			'ft_date'           			=> $_POST['billing_date'],
			'ft_member_name'    			=> $member_name,
			'ft_membership_no'    			=> $membership_no,
			'ft_bill_date'    				=> $_POST['date'],
			'ft_bill_time'    				=> $_POST['time'],
			'ft_member_phone_number'        => $_POST['phone_number'], 
			'ft_total'        				=> $_POST['total_value'],
			'ft_no_of_hours'  				=> $_POST['player'],
			'ft_no_of_member'  				=> $_POST['no_of_members'],
			'ft_amount_value'  				=> $_POST['per_hour_price'],
			'ft_vat'  						=> $_POST['vat'],
			'ft_vat_value'  				=> $_POST['vat_value_input'],
			'ft_member_discount' 			=> $_POST['discount'],
			'ft_member_discount_value' 		=> $_POST['after_discount'],
			'ft_discount' 					=> $_POST['discount_percentage'],
			'ft_discount_value' 			=> $_POST['discount_value'],
			'ft_football_bill' 				=> $_POST['final_bill'],
			'was_bulid' 					=> 1,
			);  
		$wpdb->update($billing_table,$insert_data,array('ft_bill_no' => $bill_no));
 

		//Send mail to admin

		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Football Billing For '.$bill_no;
		$message = $member_name.' Paid '.$_POST['final_bill'].' Rupees';




		//Mail Function
		wp_mail( $emailid, $subject, $message );

		print('<script>window.location.href="admin.php?page=display_football&action=display_football&bill_no='.$bill_no.'"</script>');
				exit();



		
}
	$update_data = false;

	if(isset($_POST['action']) AND $_POST['action'] == 'update_football_bill'  ) {

	
		$bill_no = $_POST['billing_no'];

		$insert_data	 = array (
			'ft_date'           			=> $_POST['billing_date'],
			'ft_member_name'    			=> $_POST['old_member_name'],
			'ft_membership_no'    			=> $_POST['member_no'],
			'ft_bill_date'    				=> $_POST['date'],
			'ft_bill_time'    				=> $_POST['time'],
			'ft_member_phone_number'        => $_POST['phone_number'],
			'ft_total'        				=> $_POST['total_value'],
			'ft_no_of_hours'  				=> $_POST['player'],
			'ft_no_of_member'  				=> $_POST['no_of_members'],
			'ft_amount_value'  				=> $_POST['per_hour_price'],
			'ft_vat'  						=> $_POST['vat'],
			'ft_vat_value'  				=> $_POST['vat_value_input'],
			'ft_member_discount' 			=> $_POST['discount'],
			'ft_member_discount_value' 		=> $_POST['after_discount'],
			'ft_discount' 					=> $_POST['discount_percentage'],
			'ft_discount_value' 			=> $_POST['discount_value'],
			'ft_football_bill' 				=> $_POST['final_bill'],
			'was_bulid' 					=> 1,

			);  
		$wpdb->update($billing_table,$insert_data,array('ft_bill_no' => $bill_no));

		if(isset($_POST['member_id']) AND $_POST['member_id'] != 0) {
			
			$amount =  	$_POST['total_value'];
			$credit = 	$_POST['total_value']/25;

			$credit_data 	= array (
			'member_id'  	=> $_POST['member_id'],
			'amount' 		=> $amount,
			'credit_points' => $credit,
			);
			$wpdb->update($credit_table,$credit_data,array('bill_id' => $bill_no,'game_name' => 'football'));

		}


		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Updated In Football Billing For '.$bill_no;
		$message = $_POST['old_member_name'].' Paid '.$_POST['final_bill'].' Rupees';

		//Mail Function
		wp_mail( $emailid, $subject, $message );

		print('<script>window.location.href="admin.php?page=display_football&action=display_football&bill_no='.$bill_no.'"</script>');
				exit();
		
	}

	if(isset($_GET['action']) AND $_GET['action'] == 'update'  ) {
		$id  			= $_GET['id'];
		$query        	= "SELECT * FROM {$billing_table} WHERE active = 1 AND id ='$id'";
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
.billing_name_left input {
	width: 300px;
    height: 30px;

}
.billing_name_left {	
    float: right;
}
.billing_name{
	height: 40px;
}
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
			<div class="col-md-6 title">
				<h1>Football Billing</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div>
					<div class="billing_name_left">
						<span class="billing" style="padding: 8px 28px;"><label>Bill No : </label></span>
						<input type="text" name="billing_no" id="billing_no" class="billing_no" value="<?php echo $update_data->ft_bill_no; ?>" readonly>
						<br>
						<br>
						<label class="billing">Bill For :</label> <?php echo $price_per_hour['for']; ?>
						<br>
						<br>
						<label class="billing">Bill Date & Time :</label> <?php echo $timestamp = date("Y-m-d H:i:s", time()); ?>
						<input type="hidden" name="date" id="bill_date" value="<?php if($update_data){ echo $update_data->ft_bill_date; } else { echo $date; } ?>">
						<input type="hidden" name="time" id="bill_time" value="<?php if($update_data){ echo $update_data->ft_bill_time; } else { echo $time; } ?>">
						<input type="hidden" name="billing_date" id="billing_date" value="<?php if($update_data){ echo $update_data->ft_date; } else { echo $timestamp; } ?>">
					</div>
					<div class="billing_name">
						<span class="billing" style="padding: 8px 28px;"><label>Date : </label></span>
						<span class="billing_in"><input type="text" name="billing_date_view" id="billing_date_view" value="<?php 
						if( $_GET['action'] == 'update') { 
							echo $update_data->ft_date;
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
					<span class="billing_in">Football Billing</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 1px;"><label>Member Name:</label></span>
						<input type="hidden" name="member_id" id="member_id" class="member_id" value="<?php if($update_data){ echo $update_data->member_id; } else { echo '0'; } ?>">
					<span class="billing_in">

					<?php 
						if($_GET['action']=='update') {

							echo '<input type="text" name="old_member_name" id="old_member_name" value="'.$update_data->ft_member_name.'" class="member_no">';
							
						} else{
						?>
						<select style="width: 300px;"  class="search_billing" name="search_billing" id="search_billing">
						</select>
						<input type="text" name="member_name" id="new_user" value="" class="new_user">
						<input type="hidden" name="member_no" id="member_no" value="" class="member_no">
						<input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name">
						<a class="new_user_a">New User</a>
						<a class="old_user_a">Old User</a>
						<?php } ?>
					</span>
				</div>
				<div class="billing_name">
					<span class="billing" style="padding: 2px;"><label>Phone Number </label></span>
					<span class="billing_in"><input type="text" name="phone_number"  id="phone_number" value="<?php echo $update_data->ft_member_phone_number; ?>" required></span>
				</div>
			</div>			
			
			<div class=" ">
			  	<div data-repeater-list="" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">No of players</div>
					    <div class="div-table-head action">Value</div>
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno">1</div>
                        </div>
					     
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="player" id="player" value="<?php if($_GET['action'] == 'update') { echo  $update_data ->ft_no_of_hours; } else { echo '1'; } ?>" class="no_of_player" value="1">
                            </div>
					    </div>
					     <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<input type="text" name="no_of_members" id="no_of_members" value="<?php if($_GET['action'] == 'update') { echo  $update_data ->ft_no_of_member; } else { echo '1'; } ?>" value="1">
                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="hidden" name="per_hour_price" id="per_hour_price" class="per_hour_price" value="<?php if($_GET['action'] =='update'){ echo $update_data->ft_amount_value; } else { echo $price_per_hour['price']; }?>">
                            <div class="football_in_price player">
                            	<?php
                            		echo $price_per_hour['price'];
                            	?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <input type="hidden" name="total_value" id="total_value" class="total_value" value="<?php if($_GET['action'] =='update'){ echo $update_data->ft_total; } else { echo $price_per_hour['price']; }?>">
                           <div class="total_value" id="total_value">
                            	<?php 
                            	if(($_GET['action'])=='update'){
										echo $update_data ->ft_total;
								}
								else {
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
					    <div class="div-table-col"> Vat/Cst( <?php echo $price_per_hour['vat']; ?> ) %</div> 
					    <div class="div-table-col">
					    	<input type="hidden" name="vat" id="vat" class="vat" value="<?php if($_GET['action'] == 'update'){
					    		echo $update_data ->ft_vat;

					    		} else {
					    			echo $price_per_hour['vat'];
					    			}
					    			?>"
					    			/>
					    	<input type="hidden" name="vat_value_input" id="vat_value_input" class="vat_value_input" value="<?php if($update_data){ echo $update_data ->ft_vat_value; } else {
					    		echo '0';
					    	} ?>">
                           	<div class="vat_value" id="vat_value">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->ft_vat_value; 
		 								
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
					    <div class="div-table-col"> Member Discount(<span id="discount_per" class="discount_per"></span>)</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount" id="discount" class="discount" value="<?php if($_GET['action'] == 'update'){
					    		echo $update_data ->ft_member_discount;

					    		} else {
					    			echo 0;
					    			}
					    			?>"
					    			/>
					    	<input type="hidden" name="after_discount" id="after_discount" class="after_discount" value="<?php if($update_data){ echo $update_data->ft_member_discount_value; } else {
					    		echo '0'; 
					    	} ?>">
                           	<div class="discount" id="discount">
	                           	<?php 
	                            	if(($_GET['action'])=='update'){
		 								echo  $update_data ->ft_member_discount_value; 
		 								
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
					     	<input type="text" name="discount_percentage" id="discount_percentage" class="discount_percentage" size="5" value="<?php if(($_GET['action'])=='update'){ echo floatval($update_data->ft_discount); } else { echo '0'; }?>"/>  %                                              
					    	
					 	</div>  
					    <div class="div-table-col">
					    	<input type="hidden" name="discount_value" id="discount_value" class="discount_value" value="<?php if(($_GET['action'])=='update'){ echo $update_data->ft_discount_value; } else { echo '0'; }?>"/> 
					    	<div id="discount_value" class="discount_value">
					    		<?php if($_GET['action'] == 'update'){
					    			echo $update_data->ft_discount_value;
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
					    	<input type="hidden" name="final_bill" id="final_bill" class="final_bill" value="<?php echo $update_data ->ft_football_bill; ?>">
                           	<div class="final_bill" id="final_bill">
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
			<input type="submit" name="submit" id="submit" class="player_add" class="submit" value="Submit">
			<?php } ?>

		</form>
	</div>
</section>