
<?php

if(isset($_GET['pages']) && $_GET['pages']=='1' ){
	include get_template_directory() .'/inc/admin/billing/views/gaming/gaming_system_allocate_manage.php';
} 
else { 	
global $wpdb;
$billing_table = $wpdb->prefix.'chaos_gaming_billing';
if(isset($_POST['action']) AND $_POST['action'] =='member_submit') {

	$data = Gaming_invoice_create();
	if(isset($_POST['search_billing'])){
		$id = $data['id'];
		$member_data = array(
		 		'gaming_member_name'	 	=> $_POST['search_billing'],
		 		'gaming_member_phone_number'=> $_POST['phone_number'],
		 		'gaming_membership_no'		=> $_POST['member_no'],
		 		'member_id'					=> $_POST['member_id'],
		 		'game_date'					=> $_POST['gaming_date'],
		);

			$wpdb->update($billing_table ,$member_data,array('id'=>$data['id'],'active'=>1,'was_bulid' =>0));	
	} else {

		$id = $_POST['alrdy_alloct_inv_id'];
	}
		
		print('<script>window.location.href="admin.php?page=allocate_gaming_system&pages=1&inv_id='.$id.'&action=update"</script>');
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
		Date : <input type="text" name="gaming_date" class="gaming_date" id="gaming_date" style="margin-top: 30px;" value="<?php echo date('Y-m-d'); ?>"/>
		<span style="float:right;margin-right:100px;">
			INV No/Member Name : <input type="text" name="search_inv_id" class="search_inv_id" id="search_inv_id" value="" style="margin-top: 30px;" />
			<input type="button" value="Ok" name="submit" class="btn btn-success gaming_search" style="margin: 0px;"/>
			<input type="hidden" name="alrdy_alloct_inv_id" id="alrdy_alloct_inv_id" class="alrdy_alloct_inv_id">
			<input type="hidden" name="alrdy_alloct_mem_name" id="alrdy_alloct_mem_name" value="" class="alrdy_alloct_mem_name">
			<input type="hidden" name="alrdy_alloct_mem_phone" id="alrdy_alloct_mem_phone" value="" class="alrdy_alloct_mem_phone">
		</span> 
		<div class="price_setting_in">
			<h3>Member Details</h3>

			<input type="hidden" name="gaming_type" value="<?php echo $_GET['gaming_type']; ?>">
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Member Name</label></div>
					<div>
						<input type-"text" name="search_billing" class="new_search_billing" id="new_search_billing" />
						<input type="hidden" name="member_id" id="member_id" value="" class="member_id">
						<input type="hidden" name="member_no" id="member_no" value="" class="member_no">
					</div>
				</div>
				<div class="billing_name">
					<div class="label_top"><label>Phone Number </label></div>
					<div class="billing_in"><input type="text" name="phone_number"  id="phone_number" value="" required></div>
				</div>
<!-- 				<div class="football_pricing_in">
					<div class="label_top"><label>Member Discount</label></div>
					<div><input type="text" name="member_discount" id="member_discount" value="10" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Discount Percentage</label></div>
					<div><input type="text" name="discount_percentage" id="discount_percentage" value="0" /> % </div>
				</div> -->
			</div>		
			
				<input type="hidden" name="action" id="submit" value="member_submit"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Allocate">
		</div>
		
	</section>
</form>


<?php } ?>

