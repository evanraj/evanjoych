<?php
	global $wpdb;

 	$pricing_table 	= $wpdb->prefix.'chaos_setting';

	if(isset($_POST['action']) AND $_POST['action'] =='pricing') {


	$group_team = $_POST['group_team'] ;
	unset($_POST['group_team']);
	unset($_POST['action']);

	foreach ($_POST as $key => $value) {
		updateSettings($key, $value);
	}
	

	if($_POST['football_session_logic'] == 1 )
	{
		$setting_table  = $wpdb->prefix.'chaos_setting';
		$wpdb->update( $setting_table ,array( 'active' => '0' ),array( 'keyword' => 'football_session_pricing' ));
		foreach ( $group_team as $group) {
			$key = 'football_session_pricing';
			$value = $group['start_time'].'-'.$group['end_time'].'-'.$group['football_time_pricing'];

				updateRepeaterSettings($key, $value);
			}
	}


	}

		$data_query  = "SELECT * FROM $pricing_table WHERE active = 1";
		$update_data = $wpdb->get_row($data_query, OBJECT);


		//for checking check box
		$data_query_check  = "SELECT * FROM $pricing_table WHERE active = 1 and keyword = 'football_session_logic'";
		$update_data_check_in = $wpdb->get_row($data_query_check, OBJECT);
		$update_data_check = $update_data_check_in->value;

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

<?php if($update_data_check == 1) {
	?>
<style>
.football_pricing_time{
	display: block;
} 
</style>
<?php  } else { ?>
<style>
.football_pricing_time{
	display: none;
} 
</style>
<?php }
?>
</style>
<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h1>Football Billing</h1>
			
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour(week)</label></div>
					<div><input type="text" name="football_hour_week" id="football_hour_week" value="<?php echo displaySettings('football_hour_week'); ?>" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Hour(weekend)</label></div>
					<div><input type="text" name="football_hour_weekend" id="football_hour_weekend" value="<?php echo displaySettings('football_hour_weekend'); ?>" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>GST</label></div>
					<div><input type="text" name="football_vat_cst" id="football_vat_cst" value="<?php echo displaySettings('football_vat_cst'); ?>" /> % </div>
				</div>
			</div>
			<?php if($update_data_check == 1) { ?>
			<div class="football_price">
				<span><label>Session Timing:</label></span>
				<input type="radio" name="football_session_logic" value="0" class="football_session_logic" /><label style="font-size:16px;">No</label> 
				<input type="radio" name="football_session_logic" value="1" class="football_session_logic" checked /><label style="font-size:16px;">Yes</label>
			</div>
			<?php } else { ?>
			<div class="football_price">
				<span><label>Session Timing:</label></span>
				<input type="radio" name="football_session_logic" value="0" class="football_session_logic" checked /><label style="font-size:16px;">No</label> 
				<input type="radio" name="football_session_logic" value="1" class="football_session_logic"  /><label style="font-size:16px;">Yes</label>
			</div>

			<?php } ?>
			<div class="football_pricing_time">
				<div class="retail-repeater group_team">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>   
					    <div class="div-table-head ">Start Time</div>
					    <div class="div-table-head ">End Time</div>
					    <div class="div-table-head ">Price</div>
					    
					   
					</div>
					<?php 
					if($update_data_check == 1) {
					$i=1;
					$relation_query     	="SELECT * FROM $pricing_table WHERE active = 1 and  keyword = 'football_session_pricing'"; 
					$update_relation_data   = $wpdb->get_results($relation_query, OBJECT);
						foreach ($update_relation_data as $r_value ) {
							$stringValue = $r_value ->value;
							$result = explode('-', $stringValue);			
								
								
					?>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno"><?php echo $i; ?></div>
                        </div>
					     
					    <div class="div-table-col">
                            <div class="no_of_player player">
                            	<input type="text" name="start_time" class="time"  value="<?php echo $result[0]; ?>">
                            	
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="hours player">
                            	<input type="text" name="end_time"  class="time" value="<?php echo $result[1]; ?>">
                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="text" name="football_time_pricing" id="football_time_pricing" class="football_time_pricing" value="<?php echo $result[2]; ?>">
					    </div>
					     
			        </div>
				<?PHP          ++$i;
							}
						}else { ?>

					<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">                               
                            </div>
                            <div class="rowno">1</div>
                        </div>
					     
					    <div class="div-table-col">
                            <div class="no_of_player player">
                            	<input type="text" name="start_time" class="time" >
                            	
                            </div>
					    </div>
					    <div class="div-table-col">
                            <div class="hours player">
                            	<input type="text" name="end_time"  class="time">
                            </div>
					    </div>
					    <div class="div-table-col">
                            <input type="text" name="football_time_pricing" id="football_time_pricing" class="football_time_pricing">
					    </div>
					     
			        </div>


						<?php }
							
							?>
			     </div>

			    <ul class="icons-labeled">
					<li>
						<a data-repeater-create href="javascript:void(0);" id="add_new_price_range">
						<span class="icon-block-color add-c"></span>Add Row</a>
					</li>
				</ul>
			 </div>
			</div>
			
				<input type="hidden" name="action" id="submit" value="pricing"></br>	
				<input type="submit" id="submit" class="player_add submit_button" value="Update">
		</div>
		
	</section>
</form>