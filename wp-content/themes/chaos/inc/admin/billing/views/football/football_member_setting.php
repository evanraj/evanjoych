
<?php 
global $wpdb;

if(isset($_POST['action']) AND $_POST['action'] =='member_setting') {

	 	$billing_table       	= $wpdb->prefix.'chaos_football_billing';
	 	$member_data = array(
	 		'ft_member_discount'	 	=> $_POST['member_discount'],
	 		'ft_discount'		 		=> $_POST['discount_percentage'],
	 		'ft_membership_no'			=> $_POST['member_no'],
	 		'member_id'					=> $_POST['member_id'],
	 		'ft_member_name'			=> $_POST['search_billing'],
	 		'ft_member_phone_number'	=> $_POST['phone_number'],
	 		'ft_member_email'			=> $_POST['member_email'],
	 		'ft_member_address'			=> $_POST['member_address'],
	 		'ft_member_gst'				=> $_POST['gst_number'],
	 		'ft_member_pan'				=> $_POST['pan_number'],
	 		);
	 	$wpdb->update($billing_table ,$member_data,array('id'=>$_POST['inv_id'],'active'=>1));
		print('<script>window.location.href="admin.php?page=football_billing&pagess=3&inv_id='.$_POST['inv_id'].'&action=update"</script>');
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
<?php 
global $wpdb;
$billing_table 					= $wpdb->prefix. 'chaos_football_billing';
	$id  			= $_GET['id'];
	$query        	= "SELECT * FROM {$billing_table} WHERE active = 1 AND id =".$_GET['inv_id'];
   	$update_data   	= $wpdb->get_row( $query, OBJECT );
?>
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
						<input type-"text" name="search_billing" class="new_search_billing" id="new_search_billing" value="<?php echo ($update_data)? $update_data->ft_member_name : ''; ?>" />
						<input type="text" name="member_name" id="new_user" value="" class="new_user">
						<input type="hidden" name="member_id" id="member_id" value="<?php if($update_data){ echo $update_data->member_id; }?>" class="member_id">
						<input type="hidden" name="member_no" id="member_no" value="<?php echo ($update_data)? $update_data->ft_membership_no: ''; ?>" class="member_no">
						<input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name">
						<!-- <a class="new_user_a">New User</a>
						<a class="old_user_a">Old User</a> -->
					</div>
				</div>
				<div class="billing_name">
					<div class="label_top"><label>Phone Number </label></div>
					<div class="billing_in"><input type="text" name="phone_number"  id="phone_number" onkeypress="return isNumberKey(event)" value="<?php echo isset($_GET['phone_number'])? $_GET['phone_number']:$update_data->ft_member_phone_number; ?>""></div>
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
					<div><input type="text" name="member_discount" id="member_discount" onkeypress="return isNumberKeyWithDot(event)" value="10" /></div>
				</div>

				
				<div class="football_pricing_in">
					<div class="label_top"><label>Discount Percentage</label></div>
					<div><input type="text" name="discount_percentage" id="discount_percentage" onkeypress="return isNumberKeyWithDot(event)" value="0" /> % </div>
				</div>
			</div>		
			
				<input type="hidden" name="action" id="submit" value="member_setting"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Submit">
		</div>
		
	</section>
</form>

