<?php
	global $wpdb;

 	$pricing_table 	= $wpdb->prefix.'chaos_setting';

	if(isset($_POST['action']) AND $_POST['action'] =='pricing') {
	
		unset($_POST['action']);

		foreach ($_POST as $key => $value) {
			updateSettings($key, $value);
		}
	}

		$data_query  = "SELECT * FROM $pricing_table WHERE active = 1";
		$update_data = $wpdb->get_row($data_query, OBJECT);
	
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
	font-size: 20px;
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
			<h1>Gaming Billing</h1>
			
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Head(week)</label></div>
					<div><input type="text" name="gaming_head_week" id="gaming_head_week" value="<?php echo displaySettings('gaming_head_week'); ?>" /></div>
				</div>				
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Head(weekend)</label></div>
					<div><input type="text" name="gaming_head_weekend" id="gaming_head_weekend" value="<?php echo displaySettings('gaming_head_weekend'); ?>" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>GST</label></div>
					<div><input type="text" name="gaming_vat_cst" id="gaming_vat_cst" value="<?php echo displaySettings('gaming_vat_cst'); ?>" />  % </div>
				</div>
			</div>
	
				<input type="hidden" name="action" id="submit" value="pricing"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Update">
		</div>
		
	</section>
</form>