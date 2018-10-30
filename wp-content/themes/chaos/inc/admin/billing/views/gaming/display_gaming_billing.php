<?php
global $wpdb;
$gaming_table 				= $wpdb->prefix. 'chaos_gaming_billing';
$gaming_relation_data 		= $wpdb->prefix. 'chaos_gaming_billing_relation';

// $price_per_hour = getGamingPrice($date, $time);



	$bill_no  				= $_GET['bill_no'];
	$id      				= $_GET['id'];
	$query        			= "SELECT * FROM {$gaming_table} WHERE active = 1 AND id ='$bill_no'";
   	$update_data   			= $wpdb->get_row( $query, OBJECT ); 

   	$relation_query    		= "SELECT * FROM {$gaming_relation_data} WHERE active = 1 AND gaming_id = '$bill_no'";
   	$update_relational_data = $wpdb->get_results( $relation_query, OBJECT ); 
// var_dump($relation_query);
 	

?>
 
<style>
.add-billing{
	margin-top: 120px;
}

.billing_name_left{
	
   	float: right;
    margin-right: 100px;
}

 #distributor_id {
   	display: none;
}


#gaming_print{    
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
.div-table{
	margin-top: 30px;
}
.lazer_in{
	margin-top: 10px;
}
</style>
<div calss="football_print">
<input type="button" Name="gaming_print" id="gaming_print" class="gaming_print" value="Print" /> 
</div>
<!-- <a style="font-size: 16px;" href="<?php echo admin_url('admin.php?page=gaming_billing').'&id='.$update_data->id.'&action=update'; ?>">Update</a> -->
<section class="add-billing">
	<div class="">
		<!-- <div class="text-center">
			<div class="col-md-6 title">
				<h1>Gaming Billing</h1>
			</div>
		</div> -->
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_details">
				<div>
					<div class="billing_name_left">
						<span class="billing_in" ><label>Bill No :</label></span>
						<span id="lazertag_billing"><?php echo $update_data->gaming_bill_no; ?></span>
					</div>
					<input type="hidden" name="gaming_id" value="<?php echo $id; ?>" class="gaming_id" />	
					<input type="hidden" name="gaming_bill_no_display" value="<?php echo $bill_no; ?>" class="gaming_bill_no_display" />
					<div class="lazer_up">							
						<div class="lazer">
							<div class="lazer_in">
								<div class="lazer_tag_float">Date </div>
								<div class="lazer_tag_in">: <?php echo $update_data->game_date.' '.$update_data->game_time; ?></div>
							</div>
							<div class="lazer_in">
								<div class="lazer_tag_float">Billing Type </div>
								<div class="lazer_tag_in">: Gaming Billing</div>
							</div>
							<div class="lazer_in">		
								<div class="lazer_tag_float">Member Name</div>
								<div class="lazer_tag_in">: <?php echo $update_data->gaming_member_name; ?></div>
							</div>
							<div class="lazer_in">
								<div class="lazer_tag_float">Phone Number </div>
								<div class="lazer_tag_in">: <?php echo $update_data->gaming_member_phone_number; ?></div>
							</div>
						</div>
					</div>
				</div>			
			</div>
			<div class=" ">
			  	<div data-repeater-list="" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head action">System Name</div>
					    <div class="div-table-head action">Actual Hours</div>
					    <div class="div-table-head action">Hours</div>
					    <div class="div-table-head action">No of Games</div>
					   <!--  <div class="div-table-head action">Price</div> -->
					    <div class="div-table-head action">Bill Amout</div>
					   
					</div>
					<?php
						$i = 1;
						
							if($update_relational_data) {

								foreach ($update_relational_data as $r_value ) {
									

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
                            	$game_id 				= $r_value->gaming_pc_id;
                            	$update = pc_name($r_value->gaming_pc_id);
                            	echo $update->pc_name;
                            	?>
                            </div>
					    </div>
					     
					    <div class="div-table-col">
                            <div class="no_of_player player">
                            	<?php echo  $r_value ->gaming_actual_played_hours; ?>
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="hours player">
                            	<?php echo  $r_value ->gaming_hours; ?>
                            </div>
					    </div>
					     <div class="div-table-col">
                            <div class="hours player">
                            	<?php echo  $r_value ->no_of_games; ?>
                            </div>
					    </div> 

					    <div class="div-table-col">
                           <div class="gaming_total_value" id="gaming_total_value">
                            	<?PHP echo $r_value->gaming_total; ?>
                            </div>
					    </div>  
			        </div>
			        
			        <?php
				        		$i++;
				        		}
				    		} ?>

			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					   <!--  <div class="div-table-col"></div>       -->                      	    
					    <div class="div-table-col">Sub Total</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
		 							echo  $update_data->gaming_sub_total; 
							
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			         
					<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <!-- <div class="div-table-col"></div>   -->                          	    
					    <div class="div-table-col">Member Discount( <?php echo $update_data->gaming_member_discount; ?>) </div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
		 							echo  $update_data ->gaming_member_discount_value; 
							
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					   <!--  <div class="div-table-col"></div>  -->                           	    
					    <div class="div-table-col"> Discount( <?php echo $update_data->gaming_discount; ?> ) </div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
		 							echo  $update_data ->gaming_discount_value; 
							
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			        <?php if($update_data->gaming_gst_val != '0.00'){ ?>
			         <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					  <!--   <div class="div-table-col"></div>    -->                         	    
					    <div class="div-table-col">GST (<?php echo $update_data->gaming_gst; ?>)</div>  
					    <div class="div-table-col">
                           	<div class="discount" id="discount">
	                           	<?php 
		 							echo  $update_data->gaming_gst_val; 
							
	                            ?>
                           	</div>                                                   
					    </div>  
			        </div>
			      <?php   } ?>
			       
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>	                         				     
					    <div class="div-table-col"> </div>                           					    
					   <!--  <div class="div-table-col"> </div>   -->                         					    
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col"> </div>                           					    
					    <div class="div-table-col">Total </div>                           
					    <div class="div-table-col">
					    	<input type="hidden" name="final_bill" id="final_bill" class="final_bill" value="<?php $update_data ->ft_football_bill; ?>">
                           	<div class="final_bill" id="final_bill">
							<?php                            	
	 								echo  $update_data ->gaming_bill; 
                            ?>
                           	</div>              	                           
					    </div>  
			        </div>
			    </div>
			</div>
		</form>
	</div>
</section>