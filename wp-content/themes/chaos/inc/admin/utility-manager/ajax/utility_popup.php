<?php 
       global $wpdb;
       $table   = $wpdb->prefix.'chaos_utility';

        if(isset($_POST['action']) && $_POST['action'] == 'popup_utility') {
           $id= $_POST['id'];
        } 
        else {
            $id = isset( $_GET['id'] ) ? $_GET['id']  : '';
        }
        $mylink = $wpdb->get_row( "SELECT * FROM $table WHERE id = $id",OBJECT );
    ?>
    <style>
	.utillty_member label,.utillty_member_in label{
		font-weight: bold;
		font-size: 15px;
	}
	.left_side{
		float:left;
		width:50%;
		margin-left: 200px;
	}
	.form-horizontal{
		width:100%;
	}
	.left_side_in{
		width: 80%;
	    margin: 0 auto;
	}
	.left_side_in div{
		float:left;
	}
	#submit{
		margin-left: 700px;
	}

	.player_add{
		background: #0073aa;
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

</style>

<div class="utility">
	<div class="utility_in">
		<section class="add-team">
			<form class="form-horizontal" action="" method="POST" id="">
				<div class="left_side">
					<div class="left_side_in">
						<div class="utillty_member">
							<div style="width: 100px;height: 24px;"><label>Player Name : </label></div>
							<div class="utility_fetch"><?php echo $mylink->ut_name; ?></div>
						</div>
						<div class="utillty_member">
							<div style="width: 100px;height: 24px;"><label>Email Id :</label> </div>
							<div class="utility_fetch"><?php echo $mylink->ut_emailid; ?></div>
						</div>
						<div class="utillty_member">
							<div style="width: 100px;height: 24px;"><label>Email Id 2 :</label> </div>
							<div class="utility_fetch"><?php echo $mylink->ut_secondery_email; ?></div>
						</div>
						<div class="utillty_member">
							<div style="width: 110px;height: 24px;"><label>Bill Paid Date:</label> </div>
							<div class="utility_fetch"><?php echo $mylink->ut_utillity_date; ?></div>
						</div>
						<div class="utillty_member">
							<div style="width: 100px;height: 24px;"><label>Alert Days:</label> </div>
							<div class="utility_fetch"><?php echo $mylink->ut_alert_days; ?></div>
						</div>
					</div>
				</div>
			</form>
		</section>
	</div>
</div>