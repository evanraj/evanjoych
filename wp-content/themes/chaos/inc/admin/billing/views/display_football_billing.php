<?php
global $wpdb;
$billing_table = $wpdb->prefix. 'chaos_football_billing';
$pricing       = $wpdb->prefix.'chaos_bill_princing';
if(isset($_GET['action']) AND $_GET['action'] == 'display_football'  ) {

	$bill_no  				= $_GET['bill_no'];
	$query        			= "SELECT * FROM {$billing_table} WHERE active = 1 AND ft_bill_no ='$bill_no'";
   	$update_data   			= $wpdb->get_row( $query, OBJECT ); 
   	$football_pricing_query = "SELECT * FROM {$pricing} WHERE active = 1";
   	$pricing_football   	= $wpdb->get_row( $football_pricing_query, OBJECT ); 


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
   	float: right;
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
<input type="button" Name="football_print" id="football_print" value="Print" /> 
</div>
<a style="font-size: 16px;" href="<?php echo admin_url('admin.php?page=football_billing').'&id='.$update_data->id.'&action=update'; ?>">Update</a>
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="col-md-6 title">
				<h1>Football Billing</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div class="billing_name_left">
					<span class="billing_in" ><label>Bill No :</label></span>
					<span id="bill_no"><?php echo $update_data->ft_bill_no; ?></span>
				</div>
				<div class="lazer_up">
					
				<div class="lazer">
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
						<div class="lazer_tag_in">: <?php echo $update_data->ft_member_phone_number; ?></div>
					</div>
					
				</div>
			
			</div>	
			</div>			
			
			<div class=" ">
			  	<div data-repeater-list="" class="div-table" style="margin-top: 50px;">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">Players</div>
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
                            <div class="no_of_player player">
                            	<?php echo  $update_data ->ft_no_of_hours; ?>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="no_of_player player">
                            	<?php echo  $update_data ->ft_no_of_member; ?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    <?php echo $update_data ->ft_amount_value; ?>
					    </div>
					    <div class="div-table-col">
                           <div class="total_value" id="total_value">
     						<?php 
								echo $update_data ->ft_total;
                            ?>
                            </div>
					    </div>  
			        </div>
			         <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">Vat/Cst(<?php echo round($update_data ->ft_vat,1); ?>) %</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
	                           		if($update_data ->ft_vat_value){
		 							echo  $update_data ->ft_vat_value; 
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
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">Member Discount</div>  
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
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> Discount</div>  
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
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    
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