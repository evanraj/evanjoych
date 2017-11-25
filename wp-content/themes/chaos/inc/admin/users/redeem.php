<?php
$args2 = array(
 'role' => 'member',
 'orderby' => 'id',
 'order' => 'ASC'
);
 $authors = get_users($args2);

if ( isset($_POST['action']) && $_POST['action'] == 'redeem_data') {
	echo "hiiiiii"; 
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
					<h2>Manage Redeem Point</h2>
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

						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	
	                          	<input type="submit" class="player_add" id="submit" value="Submit">
	                          	<input type="hidden" name="action" class="action" value="redeem_data">

	                        </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>