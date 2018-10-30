<?php
	 global $wpdb;

 	// $pricing_table 			= $wpdb->prefix.'chaos_setting';
 	$pricing_detail_table 	= $wpdb->prefix.'chaos_football_pricing_details';
 	$billing_table       	= $wpdb->prefix.'chaos_football_billing';

	if(isset($_POST['action']) AND $_POST['action'] =='pricing') {
		smsGateWayPhp($_POST['phone_number'],$_POST['search_billing'],$_POST['inv_id'],'book','football',date('d-m-Y'),$_POST['time']);
		$evening_price = (isset($_POST['price_evening']))? $_POST['price_evening']:2500;
		$morning_price = (isset($_POST['price_morning']))? $_POST['price_morning']:2000;
		$wpdb->update($pricing_detail_table ,array('price'=>$morning_price),array('inv_id'=>$_POST['inv_id'],'active'=>1,'session'=>'morning_session'));
		$wpdb->update($pricing_detail_table ,array('price'=>$evening_price),array('inv_id'=>$_POST['inv_id'],'active'=>1,'session'=>'evening_session'));
		$wpdb->update($billing_table ,array('ft_gst'=>$_POST['football_gst'],'was_bulid'=>1,'ft_member_name'=> $_POST['search_billing'],'ft_member_phone_number'=> $_POST['phone_number']),array('id'=>$_POST['inv_id'],'active'=>1));
		
		print('<script>window.location.href="admin.php?page=football_billing&pagess=2&inv_id='.$_POST['inv_id'].'"</script>');
		exit();
	}
$get_data = getPrice($_GET['inv_id']);
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

</style>
<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h3>Price Details</h3>
			<input type="hidden" name="inv_id" value="<?php echo $_GET['inv_id']; ?>">
			<div class="football_pricing">	
			<?php
			foreach ($get_data as $data) {

				if($data->session == 'morning_session'){
					echo '<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour</label></div>
					<div><input type="text" name="price_morning" id="price_morning" onkeypress="return isNumberKeyWithDot(event)" value="'.$data->price.'" />
					<input type="hidden" name="time" value="'.$data->name.'"/></div>
					</div>';
				} else {
					echo '<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour</label></div>
					<div><input type="text" name="price_evening" id="price_evening" onkeypress="return isNumberKeyWithDot(event)" value="'.$data->price.'" /><input type="hidden" name="time" value="'.$data->name.'"/></div>
				</div>';
					
				}
			}
			 ?>			
				
				
				<div class="football_pricing_in">
					<div class="label_top"><label>GST</label></div>
					<div><input type="text" name="football_gst" id="football_gst" onkeypress="return isNumberKeyWithDot(event)" value="<?php echo '18'; ?>" /> % </div>
				</div>
			
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Name</label></div>
					<div>

						<!-- <select style="width: 300px;"  class="search_billing" name="search_billing" id="search_billing">
						</select> -->
						<input type-"text" name="search_billing" class="new_search_billing" id="new_search_billing"  />
						<input type="text" name="member_name" id="new_user" value="" class="new_user">
						<input type="hidden" name="member_id" id="member_id" value="" class="member_id">
						<input type="hidden" name="member_no" id="member_no" value="" class="member_no">
						<input type="hidden" name="old_member_name" id="old_member_name" value="" class="old_member_name">
						<!-- <a class="new_user_a">New User</a>
						<a class="old_user_a">Old User</a> -->
					</div>
				</div>
				<div class="billing_name">
					<div class="label_top"><label>Phone Number </label></div>
					<div class="billing_in"><input type="text" name="phone_number"  id="phone_number" onkeypress="return isNumberKey(event)" value=""></div>
				</div>

				<input type="hidden" name="action" id="submit" value="pricing"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Submit">
		</div>
		
	</section>
</form>