<?php
$args2 = array(
 'role' => 'member',
 'orderby' => 'id',
 'order' => 'ASC'
);
 $authors = get_users($args2);

 	global $wpdb;
   	$credit_table 	= $wpdb->prefix.'chaos_credit_notes';
   	$debit_table 	= $wpdb->prefix.'chaos_debit_notes';
   	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');

   if ( isset($_POST['action']) && $_POST['action'] == 'credit_debit') 
   {
   		$notes_data 				= array(
			'member_id' 			=> $_POST['user_id'],
			'points'				=> $_POST['points'],
			'details'				=> $_POST['note'],
			'date'					=> $date,
   		);

	   	if(isset($_POST['note_type'] ) && $_POST['note_type'] == 'credit') {
	   		$wpdb->insert( $credit_table, $notes_data );
	   		$insert_id = $wpdb->insert_id;
	   		$add_points = updatePoints($_POST['user_id'],$_POST['points']);
			$credit_point_table = addPointsInCreditPointsTable($_POST['user_id'],$_POST['points'],'credit_notes',$insert_id);

	   	}
	   	else {
	   		$wpdb->insert( $debit_table, $notes_data );
	   		$insert_id = $wpdb->insert_id;
	   		$add_points = redeemPoints($_POST['user_id'],$_POST['points']);

			$credit_point_table = addPointsInCreditPointsTable($_POST['user_id'],$_POST['points'],'debit_notes',$insert_id);


	   	}
   
   	}


?>



<style>
label{
	font-weight: bold;
	font-size: 15px;
}
.x_panel{
    margin: 0 auto;
}
.x_content{
	margin-left: 200px;
}
.user_form_up .user_form div:nth-child(1){
	float: left;
	width: 260px;

}

.user_form input,.user_form input {
   	width: 190px;
    height: 30px;
}
.user_form{
	margin-top: 10px;
}
.player_add{
	background: #0073aa;
	width: 100px;
    height: 40px;
}
</style>
<div class="container">

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add Credit Debit Notes</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form class="form-horizontal form-label-left admin_submit" action="" method="POST" id="" >
						<div class="user_form_up">

							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Member Id <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="user_id" id="user_id" style="width: 190px;height: 30px;">
									<?php 
										foreach ($authors as $user) { 
											echo '<option value="'.$user->id.'">'.$user->id.'('.$user->user_login.')</option>';

										}
									?>
									</select>
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Credit/Debit <span class="required"><?php echo ($user) ? '' : '*';  ?></span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="note_type" id="note_type" name="note_type" style="width: 190px;height: 30px;">
										<option value="credit">Credit</option>
										<option value="debit">Debit</option>
									</select>
								</div>
							</div>


							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Points <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="points" autocomplete="off" id="points" required  maxlength="10" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Note <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="note" autocomplete="off" id="note" required  class="form-control col-md-7 col-xs-12">
								</div>
							</div>

						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	
	                          	<input type="submit" class="player_add" id="submit" value="Submit">
	                          	<input type="hidden" name="action" class="action" value="credit_debit">

	                        </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>