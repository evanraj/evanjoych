<?php global $wpdb; $billing_table = $wpdb->prefix. 'chaos_football_billing';
$billing_detail_table = $wpdb->prefix. 'chaos_football_billing_details';
$pricing       = $wpdb->prefix.'chaos_bill_princing';
if(isset($_GET['action']) AND $_GET['action'] == 'display_football'  ) {

	$bill_no  				= $_GET['bill_id'];
	$query        			= "SELECT * FROM {$billing_table} WHERE active = 1 AND id ='$bill_no' and was_bulid = 1";
   	$update_data   			= $wpdb->get_row( $query, OBJECT ); 
   	$query_details 			= "SELECT * FROM {$billing_detail_table} WHERE active = 1 and inv_id ='$bill_no'";
   	$pricing_football   	= $wpdb->get_results( $query_details, OBJECT ); 


	} 
?>
 
<style>
.add-billing{
	margin-top: 60px;
}

.billing_details{
	   margin-left: 10px;
}
.billing_name_left{	
   	/*float: right;*/
    margin-right: 100px;
}

#football_print {
    background-color: #0073aa;
    color: #fff;
    width: 84px;
    height: 40px;
    float: right;
    margin-right: 20px;
}
#football_sms {
    background-color: #0073aa;
    color: #fff;
    width: 84px;
    height: 40px;
}

#football_email {
    background-color: #1eb522;
    color: #fff;

}
.lazer_tag_float{
	float: left;
	width: 200px;	
}
#billing_form{
	font-size: 16px;
}
.football_in{
	margin-top: 10px;
}
</style>

<div class="football_print">
<input type="button" Name="football_print" id="football_print" value="Print" /> <br/>
<!-- <input type="button" Name="football_sms" id="football_sms" value="Send Sms" /> <br/><br/> -->
<!-- <input type="button" Name="email_all" id="email_all" value="Send All Bill" />  -->

</div>
<div class="football email">
</div>
<!-- <a style="font-size: 16px;" href="<?php //echo admin_url('admin.php?page=football_billing').'&pagess=3&id='.$update_data->id.'&action=update'; ?>">Update</a> -->
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="title">
				<h1>Football Billing</h1>
			</div>
			<div class=" title">
				<h1></h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">

				<div class="lazer_up">
					
				<div class="lazer">
					<div class="football_in">
						<div class="lazer_tag_float">Bill No </div>
						<div class="lazer_tag_in" id="bill_no_display">: <?php echo $update_data->ft_bill_no; ?></div>
						<input type="hidden" class="lazer_tag_in" id="bill_id" value="<?php echo $update_data->id; ?>">
					</div>
					<div class="football_in">
						<div class="lazer_tag_float">Date </div>
						<div class="lazer_tag_in">: <?php echo $update_data->ft_date; ?></div>
					</div>
					<div class="football_in">
						<div class="lazer_tag_float">Billing Type </div>
						<div class="lazer_tag_in">: Football Billing</div>
					</div>
					<div class="football_in">		
						<div class="lazer_tag_float">Member Name</div>
						<div class="lazer_tag_in">: <?php echo $update_data->ft_member_name; ?></div>
					</div>
					<div class="football_in">
						<div class="lazer_tag_float">Phone Number </div>
						<div class="lazer_tag_in">: <?php echo $update_data->ft_member_phone_number; ?><input type="hidden" value="<?php echo $update_data->ft_member_phone_number; ?>" name="ft_phone" id="ft_phone" class="ft_phone" ></div>
					</div>
					<div class="football_in">
						<div class="lazer_tag_float">Email Id</div>
						<div class="lazer_tag_in">: <?php echo $update_data->ft_member_email; ?></div>
					</div>
					
				</div>
			
			</div>	
			</div>			
			
			<div class=" ">
			  	<div data-repeater-list="" class="div-table" style="margin-top: 50px;">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Hours</div>
					    <!-- <div class="div-table-head action">Players</div> -->
					    <div class="div-table-head action">Price Per Hour</div>
					    <div class="div-table-head action">Bill Amount</div>
					   
					</div>
					<?php
					$i=1;
					foreach($pricing_football as $played_detail){
					 ?>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno"><?php echo $i; ?></div>
                        </div>
					     
					    <div class="div-table-col">
                            <div class="no_of_player player">
                            	<?php echo  $played_detail ->hours; ?>
                            </div>
					    </div>
					    <!-- <div class="div-table-col">
                            <div class="no_of_player player">
                            	<?php //echo  $update_data ->ft_no_of_member; ?>
                            </div>
					    </div> -->
					    <div class="div-table-col">
					    <?php echo $played_detail ->price_per_hour; ?>
					    </div>
					    <div class="div-table-col">
                           <div class="total_value" id="total_value">
     						<?php 
								echo $played_detail ->price;
                            ?>
                            </div>
					    </div>  
			        </div>
			        <?php 
			        $i++;
			    } ?>
			       
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					                               	    
					    <div class="div-table-col">Member Discount(<?php echo round($update_data ->ft_member_discount,1); ?> %)</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
	                           		if($update_data ->ft_member_discount_value){
		 							echo  $update_data ->ft_member_discount_value; 
									}
									else {
										echo 0;
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					                              	    
					    <div class="div-table-col"> Discount(<?php echo round($update_data ->ft_discount,1); ?> %)</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
	                           	if($update_data ->ft_discount_value){
		 							echo  $update_data ->ft_discount_value; 
								}
								else {
									echo 0;
								}

	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <?php if($update_data ->ft_gst_value !='0.00'){ ?>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					                              	    
					    <div class="div-table-col">GST(<?php echo round($update_data ->ft_gst,1); ?>) %</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
	                           		if($update_data ->ft_gst_value){
		 							echo  $update_data ->ft_gst_value; 
									}
									else {
										echo 0;
									}
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			       <?php  } ?>
			         
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    					                               					    
					    <div class="div-table-col">Total </div>                           
					    <div class="div-table-col">
					    	<input type="hidden" name="final_bill" id="final_bill" class="final_bill" value="<?php $update_data ->ft_football_bill; ?>">
                           	<div class="final_bill" id="final_bill">
							<?php                            	
	 							echo  $update_data ->ft_football_bill; 
                            ?>
                           	</div>              	                           
					    </div>  
			        </div>
			    </div>
			</div>
		</form>
	</div>
</section>

<script type="text/javascript">


</script>