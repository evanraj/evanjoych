<?php
 $authors = getAllUserSelect();

$memberData = false;


if ( isset($_GET['action']) && $_GET['action'] == 'history') {
	$memberData = getPointHistory($_GET['user_id']);

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
.x_content{
        margin-left: 200px;
		width: 70%;
}
</style>


<?php if($memberData)  { ?>
<div class="x_title">
	<h2>History Table</h2>
	<div class="clearfix"></div>
</div>
<div class="x_content">
    <div class="table-responsive">
        <table class="wp-list-table widefat fixed ">
            <thead>
                <tr class="headings" style="background: #23282d;color: #fff;">
                    <th class="manage-column column-id">
                        S.No
                    </th>
                    <th scope="col" id="wplc_name_colum" class="manage-column column-id">Description</th>
                    <th scope="col" id="wplc_name_colum" class="manage-column column-id">Points</th>
                    <th scope="col" id="wplc_name_colum" class="manage-column column-id">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
                if( isset($memberData) && $memberData ) {
                    //$i = $admin_user_list['start_count']+1;
                    $i = 1;

                    foreach ($memberData as $h_value) {

            ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?php echo $i; ?>
                            </td>
                            <td class=""><?php echo $h_value->key_value; ?></td>
                            <td class=""><?php echo '('.$h_value->sign .') '.$h_value->credit_points; ?></td>
                            <td class=""><?php echo $h_value->type; ?></td>
                        </tr>
            <?php
                        $i++;
                    }
                }
            ?>

            </tbody>
        </table>
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
									<label class="" for="first-name">Member Id / Name<span class="required">*</span>
									</label>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<span class="billing_in">
										<select style="width: 300px;"  class="search_billing" name="user_id" id="search_billing"></select>
									</span>									
								</div>
							</div>
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
	                          	<input type="submit" class="player_add" id="submit" value="Submit"/>
	                          	<input type="hidden" name="action" class="action" value="history"/>
	                          	<input type="hidden" name="page" class="page" value="view_history"/>
	                        </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }  ?>