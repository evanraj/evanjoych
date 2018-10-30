
<?php
global $wpdb;
$lazertag_table = $wpdb->prefix. 'chaos_lazertag_billing';

if(isset($_GET['action']) AND $_GET['action'] == 'display_lazertag' ) {

	$inv_id  				= $_GET['inv_id'];
	$query        			= "SELECT * FROM {$lazertag_table} WHERE  id ='$inv_id' and was_bulid = 1 AND active = 1 ";

   	$update_data   			= $wpdb->get_row( $query, OBJECT ); 
  


	} 
?>
 
<style>


.billing_name_left{
	
   	float: right;
    margin-right: 100px;
}

#lazertag_print{    
	background-color: #0073aa;
	color: #fff;
	width: 84px;
	height: 40px;
	float: right;
	margin-right: 20px;

}
#lazertag_sms{    
	background-color: #0073aa;
	color: #fff;
	width: 84px;
	height: 40px;

}
.add-billing{
	 margin-top: 30px;
}

.lazer_tag_float{
	float: left;
	width: 200px;
	
}
#billing_form{
	font-size: 16px;
}
.div-table{
	margin-top: 30px;
}
.lazer_in{
	margin-top: 10px;
}
</style>
<div calss="football_print">
	<input type="button" Name="lazertag_print" id="lazertag_print" value="Print" /> 
	<input type="hidden" Name="lazertag_id" id="lazertag_id" value="<?php echo $_GET['inv_id']; ?>" /> 
	<!-- <input type="button" Name="lazertag_sms" id="lazertag_sms" value="Send Sms" /> <br/><br/> -->
</div>
<!-- <a style="font-size: 16px;" href="<?php //echo admin_url('admin.php?page=lazertag_billing').'&pagess=3&id='.$update_data->id.'&action=update'; ?>">Update</a> -->
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="title">
				<h1>Lazertag Billing</h1>
			</div>
			<div class=" title">
				<h1></h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">

			<div class="lazer_up">
					
				<div class="lazer">
					<div class="lazer_in">
						<div class="lazer_tag_float">Bill No  </div>
						<div class="lazer_tag_in" id="lazertag_bill_no">: <?php echo $update_data->lazertag_bill_no; ?></div>
						<input type="hidden" class="lazer_tag_in" id="lazertag_bill_id" value="<?php echo $update_data->id; ?>">
					</div>
					<div class="lazer_in">
						<div class="lazer_tag_float">Date </div>
						<div class="lazer_tag_in">: <?php echo $update_data->lazertag_date; ?></div>
					</div>
					<div class="lazer_in">
						<div class="lazer_tag_float">Billing Type </div>
						<div class="lazer_tag_in">: Lazertag Billing</div>
					</div>
					<div class="lazer_in">		
						<div class="lazer_tag_float">Member Name</div>
						<div class="lazer_tag_in">: <?php echo $update_data->lazertag_member_name; ?></div>
					</div>
					<div class="lazer_in">
						<div class="lazer_tag_float">Phone Number </div>
						<div class="lazer_tag_in">: <?php echo $update_data->lazertag_member_phone_number; ?><input type="hidden" value="<?php echo $update_data->lazertag_member_phone_number; ?>" name="lazertag_phone" id="lazertag_phone" class="lazertag_phone" ></div>
					</div>
					<div class="lazer_in">
						<div class="lazer_tag_float">Playing Area </div>
						<div class="lazer_tag_in">: <?php
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
						?></div>
					</div>
					
				</div>
			
			</div>			
			
			<div class="">
			  	<div data-repeater-list="" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Members</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">Per Game/Member(Rs.)</div>
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno">1</div>
                        </div>
					     <div class="div-table-col">
                            <div class="no_of_player_in player slot_div">
                            	<?php echo  $update_data ->lazertag_players;  ?>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player_in player">
                            	<?php echo $update_data ->lazertag_hours;  ?>
                            </div>
					    </div>
					    <div class="div-table-col">  
                        	<?php
                        		echo $update_data->lazertag_amount;
                        	?>
					    </div>
					    <div class="div-table-col">

                        	<?php 
                        	echo $update_data->lazertag_total;
                        	?>
					    </div>  
			        </div>
			       
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> Member Discount(<?php echo $update_data->lazertag_member_discount; ?>)</div>  
					    <div class="div-table-col">
					    	<?php echo $update_data ->lazertag_member_discount_value; ?>                    
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">
					     	Discount(<?php echo $update_data->lazertag_discount; ?>)
					 	</div>  
					    <div class="div-table-col">
					    	<?php 
					    		echo $update_data->lazertag_discount_value;
					    	?>	
					    </div>                                             
					</div>
					<?php if($update_data ->lazertag_gst_value != '0.00'){ ?>
					 <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">GST(<?php echo $update_data ->lazertag_gst; ?>)</div>  
					    <div class="div-table-col">
					    	<?php echo $update_data ->lazertag_gst_value; ?>                    
					    </div>  
			        </div> 
					<?php } ?>
					 
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col">Total </div>                           
					    <div class="div-table-col">
                           	<?php 
                           	echo  $update_data ->lazertag_bill; 	
                            ?>
                        </div>              	                           
					</div>  
			    </div>
			</div>
		</form>
	</div>
</section>
