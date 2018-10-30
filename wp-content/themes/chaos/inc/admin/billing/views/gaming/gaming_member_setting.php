

<?php 
global $wpdb;

if(isset($_POST['action']) AND $_POST['action'] =='member_setting') {

	 	$billing_table       	= $wpdb->prefix.'chaos_gaming_billing';
	 	$member_data = array(
	 		'gaming_member_name'	 	 	=> $_POST['alrdy_alloct_mem_name'],
	 		'gaming_member_phone_number' 	=> $_POST['alrdy_alloct_mem_phone'],
	 		'gaming_gst'				 	=> $_POST['gaming_gst'],
	 		'gaming_member_discount'		=> $_POST['member_discount'],
	 		'gaming_discount'				=> $_POST['discount_percentage'],
	 		'gaming_member_email'			=> $_POST['member_email'],
	 		'gaming_member_address'			=> $_POST['member_address'],
	 		'gaming_member_gst'				=> $_POST['gst_number'],
	 		'gaming_member_pan'				=> $_POST['pan_number'],
	 		);
	 	$wpdb->update($billing_table ,$member_data,array('id'=>$_POST['alrdy_alloct_inv_id'],'active'=>1));
		print('<script>window.location.href="admin.php?page=gaming_billing&pagess=1&inv_id='.$_POST['alrdy_alloct_inv_id'].'&action=update"</script>');
		exit();
	}
?>

<style>
.price_setting{
	width:100%;
}
.price_setting_in{
	width:50%;
	margin:0 auto;
	margin-top: 70px;
}
label
{
	font-size: 15px;
}

.submit_button{
	
    margin-top: 30px;
}
.label_top{
	float: left;
	width: 200px;	
}
.football_pricing_in{
	margin-top: 30px;
	margin-bottom: 10px;
}

.football_pricing_time{
	margin-top: 30px;
}
.div-table{
    border: 0px; 
}
.new_user, .old_user_a{
	display: none;
}

.old_user_a, .new_user_a {
	cursor: pointer;
}

</style>

<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h3>Member Details</h3>
			<input type="hidden" name="gaming_type" value="<?php echo $_GET['gaming_type']; ?>">
			<input type="hidden" name="gaming_date" class="gaming_date" id="gaming_date" style="margin-top: 30px;" value="<?php echo date('Y-m-d'); ?>"/>
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>INV No/Member Name : </label></div>
					<div>
						<input type="text" name="search_inv_id" class="search_inv_id" id="search_inv_id" />
						<input type="hidden" name="alrdy_alloct_inv_id" id="alrdy_alloct_inv_id" class="alrdy_alloct_inv_id">
						<input type="hidden" name="alrdy_alloct_mem_name" id="alrdy_alloct_mem_name" value="" class="alrdy_alloct_mem_name">
						<input type="hidden" name="alrdy_alloct_mem_phone" id="alrdy_alloct_mem_phone" value="" class="alrdy_alloct_mem_phone">
					</div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Email</label></div>
					<div class="billing_in"><input type="text" name="member_email" id="member_email" class="member_email"  /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Address</label></div>
					<div class="billing_in"><input type="text" name="member_address" id="member_address" class="member_address"  /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>GST Number</label></div>
					<div class="billing_in"><input type="text" name="gst_number" id="gst_number" class="gst_number"  /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Pan</label></div>
					<div class="billing_in"><input type="text" name="pan_number" id="pan_number" class="pan_number"  /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Gst(%)</label></div>
					<div><input type="text" name="gaming_gst" id="gaming_gst" value="18" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Discount</label></div>
					<div><input type="text" name="member_discount" id="member_discount" value="10" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Discount Percentage</label></div>
					<div><input type="text" name="discount_percentage" id="discount_percentage" value="0" /> % </div>
				</div>
			</div>		
			
				<input type="hidden" name="action" id="submit" value="member_setting"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Update">
		</div>
		
	</section>
</form>

<script type="text/javascript"
jQuery('#member_discount').live('change',function(){
	var member_discount = parseFloat(jQuery('#member_discount').val());
	var discount = parseFloat(jQuery('#discount_percentage').val());
	if(member_discount > 0){
		jQuery('#discount_percentage').val(0);
	} 
	
});


jQuery('#discount_percentage').live('change',function(){
	var member_discount = parseFloat(jQuery('#member_discount').val());
	var discount 		= parseFloat(jQuery('#discount_percentage').val());
	if(discount > 0){
		jQuery('#member_discount').val(0);
	}	
});
</script>