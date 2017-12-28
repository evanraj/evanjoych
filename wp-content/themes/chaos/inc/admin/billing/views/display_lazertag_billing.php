
<?php
global $wpdb;
$lazertag_table = $wpdb->prefix. 'chaos_lazertag_billing';
$pricing       = $wpdb->prefix.'chaos_bill_princing';
if(isset($_GET['action']) AND $_GET['action'] == 'display_lazertag' ) {

	$bill_no  				= $_GET['bill_no'];
	$query        			= "SELECT * FROM {$lazertag_table} WHERE active = 1 AND lazertag_bill_no ='$bill_no'";

   	$update_data   			= $wpdb->get_row( $query, OBJECT ); 
   	$football_pricing_query = "SELECT * FROM {$pricing} WHERE active = 1";
   	$pricing_football   	= $wpdb->get_row( $football_pricing_query, OBJECT ); 


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
</div>
<a style="font-size: 16px;" href="<?php echo admin_url('admin.php?page=lazertag_bill').'&id='.$update_data->id.'&action=update'; ?>">Update</a>
<section class="add-billing">
	<div class="">
		<div class="text-center">
			<div class="col-md-6 title">
				<h1>Lazertag Billing</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="billing_form">
			<div class="billing_name_left">
				<span class="billing_in" ><label>Bill No :</label></span>
				<span id="lazertag_billing"><?php echo $update_data->lazertag_bill_no; ?></span>
			</div>
			<div class="lazer_up">
					
				<div class="lazer">
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
						<div class="lazer_tag_in">: <?php echo $update_data->lazertag_member_phone_number; ?></div>
					</div>
					<div class="lazer_in">
						<div class="lazer_tag_float">Game Type </div>
						<div class="lazer_tag_in">: <?php echo $update_data->gametype; ?></div>
					</div>
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
					    <div class="div-table-col">GST</div>  
					    <div class="div-table-col">
					    	<?php echo $update_data ->lazertag_vat_value; ?>                    
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"> Member Discount</div>  
					    <div class="div-table-col">
					    	<?php echo $update_data ->lazertag_member_discount_value; ?>                    
					    </div>  
			        </div>
			        <div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">  </div>		                         			     
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col"></div>                            	    
					    <div class="div-table-col">
					     	Discount
					 	</div>  
					    <div class="div-table-col">
					    	<?php 
					    		echo $update_data->lazertag_discount_value;
					    	?>	
					    </div>                                             
					</div>  
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
