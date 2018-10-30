
<?php 
global $wpdb;

if(isset($_POST['action']) AND $_POST['action'] =='member_setting') {
	$id  			= $_POST['inv_id'];
	$query        	= "SELECT * FROM {$lazertag_billing} WHERE active = 1 AND id =".$_GET['inv_id'];
   	$update_data   	= $wpdb->get_row( $query, OBJECT );

	smsGateWayPhp($_POST['phone_number'],$_POST['search_billing'],$_POST['inv_id'],'book','lazertag',date('d-m-Y'),$update_data->from_time.' to'.$update_data->to_time);
	 	$billing_table       	= $wpdb->prefix.'chaos_lazertag_billing';
	 	$member_data = array(
	 		'lazertag_member_discount'	 	=> $_POST['member_discount'],
	 		'lazertag_discount'		 		=> $_POST['discount_percentage'],
	 		'lazertag_membership_no'		=> $_POST['member_no'],
	 		'member_id'						=> $_POST['member_id'],
	 		'lazertag_member_name'			=> $_POST['search_billing'],
	 		'lazertag_member_phone_number'	=> $_POST['phone_number'],
	 		'lazertag_member_email'			=> $_POST['member_email'],
	 		'lazertag_member_address'		=> $_POST['member_address'],
	 		'lazertag_member_gst'			=> $_POST['gst_number'],
	 		'lazertag_member_pan'			=> $_POST['pan_number'],
	 		'lazertag_players'				=> $_POST['no_of_players'],
	 		'was_bulid' 					=> 1,
	 		);
	 	$wpdb->update($billing_table ,$member_data,array('id'=>$_POST['inv_id'],'active'=>1));
		print('<script>window.location.href="admin.php?page=lazertag_billing&pagess=3&inv_id='.$_POST['inv_id'].'&action=update"</script>');
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
			<input type="hidden" name="inv_id" value="<?php echo $_GET['inv_id']; ?>">
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Name</label></div>
					<div>
						<!-- <select style="width: 300px;"  class="search_billing" name="search_billing" id="search_billing">
						</select> -->
						<input type-"text" name="search_billing" class="new_search_billing" id="new_search_billing" />
						<input type="text" name="member_name" id="new_user" value="" class="new_user">
						<input type="hidden" name="member_id" id="member_id" value="" class="member_id">
						<input type="hidden" name="member_no" id="member_no" value="" class="member_no">
						<input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name">
						<!-- <a class="new_user_a">New User</a>
						<a class="old_user_a">Old User</a> -->
					</div>
				</div>
				<div class="billing_name">
					<div class="label_top"><label>Phone Number </label> <span class="required">    *</span> </div>
					<div class="billing_in"><input type="text" name="phone_number"  id="phone_number" value="" required></div>
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
					<div class="label_top"><label>Member Discount</label></div>
					<div><input type="text" name="member_discount" id="member_discount" value="10" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Discount Percentage</label></div>
					<div><input type="text" name="discount_percentage" id="discount_percentage" value="0" /> % </div>
				</div>
				<div class="billing_name">
					<div class="label_top"><label>No Of Players </label></div>
					<div class="billing_in"><input type="text" name="no_of_players"  id="no_of_players" value="1"></div>
				</div>
			</div>		
			
				<input type="hidden" name="action" id="submit" value="member_setting"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Update">
		</div>
		
	</section>
</form>

<script type="text/javascript">
// jQuery('#member_discount').live('change',function(){
// 	var member_discount = parseFloat(jQuery('#member_discount').val());
// 	var discount = parseFloat(jQuery('#discount_percentage').val());
// 	if(member_discount > 0){
// 		jQuery('#discount_percentage').val(0);
// 	} 
	
// });


// jQuery('#discount_percentage').live('change',function(){
// 	var member_discount = parseFloat(jQuery('#member_discount').val());
// 	var discount 		= parseFloat(jQuery('#discount_percentage').val());
// 	if(discount > 0){
// 		jQuery('#member_discount').val(0);
// 	}	
// });
</script>