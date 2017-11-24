<?php
$editable_roles = get_editable_roles();
unset($editable_roles['administrator']);
unset($editable_roles['editor']);
unset($editable_roles['author']);
unset($editable_roles['contributor']);
unset($editable_roles['subscriber']);
unset($editable_roles['customer']);
unset($editable_roles['employee']);

$user = false;
$current_role = array();
if(isset($_GET['user_id']) && $user = get_userdata($_GET['user_id']) ) {
	$user_id = $_GET['user_id'];
	$current_role = implode(', ', $user->roles);
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
					<h2>Add New Member</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form class="form-horizontal form-label-left admin_submit" id="create_user">
						<div class="user_form_up">
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Member Name (Login Name) <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="user_name" autocomplete="off" id="user_name" required class="user_name"  <?php echo ($user) ? 'readonly' : ''; ?> value="<?php echo ($user) ? $user->data->user_login : '';  ?>" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">First Name <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="first_name" autocomplete="off" id="first_name" class="first_name" required  <?php echo ($user) ? 'readonly' : ''; ?> value="<?php echo ($user) ? $user->data->user_login : '';  ?>" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Password <span class="required"><?php echo ($user) ? '' : '*';  ?></span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="password" autocomplete="off" id="password" required class="form-control col-md-7 col-xs-12" >
								</div>
							</div>
							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Mobile <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="mobile" autocomplete="off" id="mobile" required  maxlength="10"  value="<?php echo get_user_meta($user->data->ID, 'mobile', true ); ?>" class="form-control col-md-7 col-xs-12">
								</div>
							</div>

							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Email <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="email" autocomplete="off" id="email" required value="<?php echo ($user) ? $user->data->user_email : '';  ?>" class="form-control col-md-7 col-xs-12">
								</div>
							</div>


							<div class="form-group user_form">
								<div>
									<label class="" for="first-name">Role <span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="role" data-placeholder="Choose a Role..." class=""   class="form-control col-md-7 col-xs-12" style="width: 190px;">
										<?php
										$selected = '';
										echo '<option value="">No Role</option>';
										foreach ($editable_roles as $key => $role_value) {
											if($user && $current_role === $key) {
												$selected = 'selected';
											} else {
												$selected = '';
											}
											echo '<option '.$selected.'  value="'.$key.'">'.$role_value['name'].'</option>';
										}
										?>
									</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	
	                          	<button type="submit" class="btn btn-success admin_sub player_add" id="submit">Submit</button>
	
	                          	

								<?php 
									if(  $user ) {
										echo '<input type="hidden" name="user_id" value="'.$user_id.'">';
										echo '<input type="hidden" name="action" class="user_action" value="update_admin_user">';
									} else {
										echo '<input type="hidden" name="action" class="user_action" value="create_admin_user">';
									}
								?>

	                        </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>