<?php
global $wpdb;

$pricing_table 	= $wpdb->prefix.'chaos_setting';

if(isset($_POST['action']) AND $_POST['action'] =='pricing') {
	$gaming_type 		= $_POST['gaming_type'];
	if($_POST['gaming_type'] == 'console'){
		$ps4_price 		= $_POST['gaming_hour_ps4'];
		$ps4_members 	= $_POST['gaming_members_ps4'];
		$ps2_price 		= $_POST['gaming_hour_ps2'];
		$ps2_members 	= $_POST['gaming_members_ps2'];	
	}
	if($_POST['gaming_type'] == 'virtual_reality_gaming'){
		$ps4_price 		= $_POST['gaming_hour_ps4'];
		$ps4_members 	= $_POST['gaming_members_ps4'];
		$ps2_price 		= $_POST['gaming_hour_ps2'];
		$ps2_members 	= $_POST['gaming_members_ps2'];	
	}
	$gst 	= $_POST['gaming_gst'];
	print('<script>window.location.href="admin.php?page=gaming_billing&pagess=2&action=price_setting&gaming_type='.$gaming_type.'&ps4_price='.$ps4_price.'&ps4_members='.$ps4_members.'&ps2_price='.$ps2_price.'&ps2_members='.$ps2_members.'&gst='.$gst.'"</script>');
			exit();
}

if($_GET['session'] == 'morning_session'){
	$price = 2500;
} else if ($_GET['session'] == 'evening_session'){
	$price = 2000;
} else {
	$price = 0;
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
</style>

<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h3>Price Details</h3>
			
			<input type="hidden" name="gaming_type" value="<?php echo $_GET['gaming_type']; ?>">
			<div class="football_pricing">		
			<?php if($_GET['gaming_type'] == 'console'){
				?>
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour(PS4)</label></div>
					<div><input type="text" name="gaming_hour_ps4" id="gaming_hour_ps4" onkeypress="return isNumberKeyWithDot(event)" value="75" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>No Of Members(PS4)</label></div>
					<div><input type="text" name="gaming_members_ps4" id="gaming_members_ps4" onkeypress="return isNumberKeyWithDot(event)" value="1" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour(PS2)</label></div>
					<div><input type="text" name="gaming_hour_ps2" id="gaming_hour_ps2" onkeypress="return isNumberKeyWithDot(event)" value="50" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>No Of Members(PS2)</label></div>
					<div><input type="text" name="gaming_members_ps2" id="gaming_members_ps2" onkeypress="return isNumberKeyWithDot(event)" value="1" /></div>
				</div>

			<?php } ?>		
				
				
				<div class="football_pricing_in">
					<div class="label_top"><label>GST</label></div>
					<div><input type="text" name="gaming_gst" id="gaming_gst" onkeypress="return isNumberKeyWithDot(event)" value="<?php echo '18'; ?>" /> % </div>
				</div>
			</div>		
				<input type="hidden" name="action" id="submit" value="pricing"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Submit">
		</div>
		
	</section>
</form>