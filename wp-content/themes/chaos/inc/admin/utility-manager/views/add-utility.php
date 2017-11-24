
 <?php
   global $wpdb;
   $utility_table 	= $wpdb->prefix.'chaos_utility';
   date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');
	$utility_db = utility_database();

   if ( isset($_POST['action']) && $_POST['action'] == 'submit_utility') 
   {
		
   	$duration = (isset($_POST['periods']) AND $_POST['periods'] == 'w') ? $_POST['week_duration'] : $_POST['month_duration'];
		//To insert challan table
   		$utility_data 						= array(
   				'ut_name' 							=> $_POST['utility_name'],
   				'ut_emailid'						=> $_POST['emailid'],
   				'ut_secondery_email'				=> $_POST['secondery_emailid'],
   				'ut_periods'						=> $_POST['periods'],
   				'ut_duration'						=> $duration,
   				'ut_utillity_date'					=> $_POST['pay_date'],
   				'ut_alert_days'						=> $_POST['alert_date'],

   			);
   		$wpdb->insert( $utility_table, $utility_data );
   		$utility_id = $wpdb->insert_id;

   
   	}

	   	$update_data = false;
		

	if ( isset($_POST['action']) && $_POST['action'] == 'update_utility') 
   	{
		
   		$id = $_GET['id'];

   		$duration = (isset($_POST['periods']) AND $_POST['periods'] == 'w') ? $_POST['week_duration'] : $_POST['month_duration'];


		//Update Utility Table
   		$utility_data 						= array(
   				'ut_name' 							=> $_POST['utility_name'],
   				'ut_emailid'						=> $_POST['emailid'],
   				'ut_secondery_email'				=> $_POST['secondery_emailid'],
   				'ut_periods'						=> $_POST['periods'],
   				'ut_duration'						=> $duration,
   				'ut_utillity_date'					=> $_POST['pay_date'],
   				'ut_alert_days'						=> $_POST['alert_date'],

   			);
   		$wpdb->update( $utility_table , $utility_data ,array( 'id' => $id ));

   	}

	if($_GET['action']=='update')	{
		$id = $_GET['id'];
		$data_query              = "SELECT * FROM $utility_table WHERE active = 1 AND id='$id'";
		$update_data = $wpdb->get_row($data_query, OBJECT);
	}

    ?> 


<style>
label{
	font-weight: bold;
	font-size: 15px;
}
#utility_name,#date{
	margin-bottom: 20px;
}
.utility_name input,.utility_name input {
   	width: 190px;
    height: 30px;
}
.left_side,.right_side{
	float:left;
	width:50%;
}
.form-horizontal{
	width:100%;
}
.left_side_in{
	width: 50%;
    margin: 0 auto;
}
.right_side_in{
	width: 50%;
    float:left;
}
.left_side_in div{
	float:left;
}
.right_side_in div{
	float:left;
}

.add-team{
	margin-top: 186px;
}
.player_add{
	background: #0073aa;
	width: 140px;
    height: 42px;
}
.utility{
	width: 100%;
    height: 100%;
    margin-top: -25px;
    margin-bottom: 120px;
	background: #fff;
}
.utility_in{
	background-color: #fff;
    margin-bottom: 120px;
    margin-top: 50px;
}
.star{
	color: red;
    font-size: 16px;
}
.submit_button_out{
	float: left;
    position: relative;
    left: 50%;
}
.submit_button{
	float: left;
    position: relative;
    left: -50%;
}
.utility_name{
	margin-top: 10px;
}
.utillty_member_in{
	margin-top: 10px;
}
#submit{
	margin-left: 218px;
    margin-top: 20px;
}
</style>
<div class="utility">
	<div class="utility_in">
		<div class="">
			<div class="">
				<h1>Add New Utility</h1>
			</div>
		</div>
		<section class="add-team">
			<form class="form-horizontal" action="" method="POST" id="">
				<div class="left_side">
					<div class="left_side_in">
						<div class="utility_name">
							<div style="width: 102px"><label>Utility Name <span class="star">*</span></label></div>
							<div>
							<?php if($update_data) {?> 
								<input type="text" value="<?php echo $update_data->ut_name; ?>" name="utility_name" />
							<?php } else { ?>
								<select name="utility_name">									
                            		
                            		<?php 
                            		if($utility_db){
                            			foreach ($utility_db as $s_value) {
										echo '<option value = "'.$s_value->utility_name.'">'.$s_value->utility_name.'</option>';
										
										}
                            		}
                            		 ?>

                            	</select>
                            	<?php } ?>
							</div>
						</div>
						<div class="utility_name">
							<div style="width: 100px"><label>Email Id <span class="star">*</span></label> </div>
							<div><input type="text"  readonly name="emailid" id="utility_name" value="<?php  $email = utility_emailid(); echo $email->utility_email_id; ?>"></div>
						</div>
						<div class="utility_name">
							<div style="width: 100px"><label>Secondary Email Id </label> </div>
							<div><input type="email"  name="secondery_emailid" id="utility_name" value="<?php echo $update_data->ut_secondery_email; ?>"></div>
						</div>
					</div>
				</div>
				<div class="right_side">
					<div class="right_side_in">
						<div class="utillty_member_in_radio utillty_member_in">
							<div style="width: 120px;"><label>Periods</label> </div>
							<?php if($_GET['action']=='update'){
								?>
							<div>	
								<input type="radio" name="periods"<?php $periods = $update_data->ut_periods; if($periods=='w') { ?> checked<?php } ?> value="w"> Weekly 
  								<input type="radio" name="periods" <?php if($periods=='m') { ?> checked <?php } ?> value="m"> Monthly<br/> 
  							</div>
								<?php } else { ?>
							<div> 
								<input type="radio" name="periods" value="w" checked> Weekly
  								<input type="radio" name="periods" value="m"> Monthly<br/>
  							</div>
  							<?php } ?>
						</div>
						<div class="utillty_member_in_select utillty_member_in">
							<div style="width: 120px;"><label>Duration</label> </div>
							<div>


							<?php
							if($_GET['action']=='update') {
								$duration_val = $update_data->ut_duration;

							?>
								<div class="duration_week" style="display: <?php echo ($periods=='w') ? 'block' : 'none'; ?>">
									<select name="week_duration" class="duration_week">
									    <option value="1" <?php echo ($duration_val == '1' && $periods=='w') ? 'selected' : ''; ?> >1 week</option>
									    <option value="2" <?php echo ($duration_val == '2' && $periods=='w') ? 'selected' : ''; ?>>2 weeks</option>
									    <option value="3" <?php echo ($duration_val == '3' && $periods=='w') ? 'selected' : ''; ?>>3 weeks</option>
								  	</select>
							  	</div>
								<div class="duration_month" style="display:<?php echo ($periods=='m') ? 'block' : 'none'; ?>">
	  								<select name="month_duration" class="duration_month">
	  							
									    <option value="1" <?php echo ($duration_val == '1' && $periods=='m') ? 'selected' : ''; ?>>1 month</option>
									    <option value="2" <?php echo ($duration_val == '2' && $periods=='m') ? 'selected' : ''; ?>>2 months</option>
									    <option value="3" <?php echo ($duration_val == '3' && $periods=='m') ? 'selected' : ''; ?>>3 months</option>
									    <option value="4" <?php echo ($duration_val == '4' && $periods=='m') ? 'selected' : ''; ?>>4 months</option>
									    <option value="5" <?php echo ($duration_val == '5' && $periods=='m') ? 'selected' : ''; ?>>5 months</option>
									    <option value="6" <?php echo ($duration_val == '6' && $periods=='m') ? 'selected' : ''; ?>>6 months</option>
									    <option value="7" <?php echo ($duration_val == '7' && $periods=='m') ? 'selected' : ''; ?>>7 months</option>
									    <option value="8" <?php echo ($duration_val == '8' && $periods=='m') ? 'selected' : ''; ?>>8 months</option>
									    <option value="9" <?php echo ($duration_val == '9' && $periods=='m') ? 'selected' : ''; ?>>9 months</option>
									    <option value="10" <?php echo ($duration_val == '10' && $periods=='m') ? 'selected' : ''; ?>>10 months</option>
									    <option value="11" <?php echo ($duration_val == '11' && $periods=='m') ? 'selected' : ''; ?>>11 months</option>
									    <option value="12" <?php echo ($duration_val == '12' && $periods=='m') ? 'selected' : ''; ?>>12 months</option>
								  	</select>
							  	</div>
							<?php
							} else {
							?>
								<div class="duration_week" style="display: block;">
									<select name="week_duration" class="duration_week">
									    <option value="1">1 week</option>
									    <option value="2">2 weeks</option>
									    <option value="3">3 weeks</option>
								  	</select>
							  	</div>
								<div class="duration_month" style="display: none;">
	  								<select name="month_duration" class="duration_month">
									    <option value="1">1 month</option>
									    <option value="2">2 months</option>
									    <option value="3">3 months</option>
									    <option value="4">4 months</option>
									    <option value="5">5 months</option>
									    <option value="6">6 months</option>
									    <option value="7">7 months</option>
									    <option value="8">8 months</option>
									    <option value="9">9 months</option>
									    <option value="10">10 months</option>
									    <option value="11">11 months</option>
									    <option value="12">12 months</option>
								  	</select>
							  	</div>

							<?php
							}
							?>



  							</div>
						</div>
						<div class="utillty_member_in">
							<div style="width: 120px;"><label>Date <span class="star">*</span></label> </div>
							<div><input type="text"  name="pay_date" required id="date" <?php if($_GET['action']=='update'){ ?> value="<?php echo $update_data->ut_utillity_date; ?>" <?php }else{ ?>  value="<?php echo $date; ?>" <?php } ?>></div>
						</div>
						<div class="utillty_member_in">
							<div style="width: 120px"><label>Alert Days <span class="star">*</span></label> </div>
							<div class="alert_periods">
								<input type="text" name="alert_date" required id="utillty_member" value="<?php echo $update_data->ut_alert_days;	 ?>">
								
							</div>
						</div>
					</div>
				</div>
					<div class="">
						<?php if($_GET['action']){
						echo '<input type="hidden" name="action" id="" value="update_utility"></br>';
						echo '<input type="submit" name="submit" id="submit" class="player_add" value="Update">';
						}
						else{

						echo '<input type="hidden" name="action" id="" value="submit_utility"></br>';
						echo '<input type="submit" name="submit" id="submit" class="player_add" value="Submit">';
						}
						?>
					</div>
			</form>
		</section>
	</div>	
</div>





