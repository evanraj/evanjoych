<?php
$args2 = array(
 'role' => 'member',
 'orderby' => 'id',
 'order' => 'ASC'
);
 $authors = get_users($args2);
 global $wpdb;
 $redeem_table = $wpdb->prefix.'chaos_redeem_points';

$memberData = false;


if ( isset($_GET['action']) && $_GET['action'] == 'member_data') {
	$memberData = getRedeemPoint($_GET['user_id']);

}

if( isset($_POST['action']) && $_POST['action'] == 'redeem_data' ) {
 	$redeem_data = array(
 		'member_id' => $_POST['member_id'],
 		'redeemed_point' =>$_POST['redeem_point'],
 		'balance_point'=>$_POST['balance_point'],
 		);
 	$wpdb->insert($redeem_table,$redeem_data);
 	$insert_id = $wpdb->insert_id;
 	$add_points = redeemPoints($_POST['member_id'],$_POST['redeem_point']);
	$credit_point_table = addPointsInCreditPointsTable($_POST['member_id'],$_POST['redeem_point'],'redeem_table',$insert_id);
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


<?php if($memberData)  { ?>
<div class="container">

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
			<div class="x_panel">
				<div class="x_title">
					<h2>Manage Redeem Point for  <?php echo $memberData->first_name; ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form class="form-horizontal form-label-left " action="" method="POST" id="" onKeyPress="return keyPressed(event)">
						<div class="user_form_up">

							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Earned Points 
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="hidden" name="member_id" value="<?php echo $memberData->user_id; ?>"/>
								<?php echo $memberData->earned_points; ?>	
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Redeem Ponits  <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="redeem_point" value="0" required  class="redeem_point" <?php if($memberData->is_eligible == '0'){ echo 'readonly'; } ?>/>	
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Balance Point <span class="required"></span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="hidden" name="balance_point" value="<?php echo $memberData->balance_points; ?>" class="balance_point" />
								<?php echo $memberData->balance_points; ?>	
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	
	                          <?php if($memberData->is_eligible == '1'){ ?><input type="submit" class="player_add" id="submit" value="Submit"> <?php }else { echo'<span style="color:red;font-size:14px;font-weight:bold;">You are not eligible to redeem your points.You need 1000 points to get eligiblity</span>'; } ?>
	                          	<input type="hidden" name="action" class="action" value="redeem_data">

	                        </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<?php } else {  ?>
<div class="container">

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
			<div class="x_panel">
				<div class="x_title">
					<h2>Redeem Point</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form class="form-horizontal form-label-left admin_submit" action="" method="GET" id="" onKeyPress="return keyPressed(event)" >
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
											echo '<option value="'.$user->id.'">'.$user->id.' - '.$user->user_login.'</option>';

										}
									?>
									</select>
								</div>
							</div>

						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	
	                          	<input type="submit" class="player_add" id="submit" value="Submit"/>
	                          	<input type="hidden" name="action" class="action" value="member_data"/>
	                          	<input type="hidden" name="page" class="page" value="add_redeem_points"/>

	                        </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php }  ?>