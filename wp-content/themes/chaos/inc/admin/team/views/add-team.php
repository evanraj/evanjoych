<?php

global $wpdb;
$team_table = $wpdb->prefix. 'chaos_football_team';
$member_team_relation_table = $wpdb->prefix. 'chaos_football_team_relation';
$team_detail = false;

if(isset($_POST['action']) AND $_POST['action'] == 'team_create'  ) {

    if( isset($_POST['team_name']) AND $_POST['team_name'] != '' ) {

    	$team_name         = ( isset($_POST['team_name']) && $_POST['team_name']!='')  ? $_POST['team_name'] : '';

      	$success = false;
		if( $team_name !='' ) {
		    $success = true;
		    $wpdb->insert($team_table, array(
		    	'team_name'         => $team_name
			));
			$team_id = $wpdb->insert_id;

			if(isset($_POST['group_team']) && is_array($_POST['group_team']) && count($_POST['group_team'])>0) {
				foreach ($_POST['group_team'] as $g_value) {
					$relation_data = array(
						'team_id' => $team_id,
						'member_id' => $g_value['player'],
					);
					$wpdb->insert($member_team_relation_table,	$relation_data );
				}
			}
		}
    } else {
    	echo "Please Fill All The Data";
    }
}


if( isset($_GET['action']) AND $_GET['action'] == 'get_team' AND isset($_GET['team_id']) AND $_GET['team_id'] != '') {

	$team_id = $_GET['team_id'];
	if( isset($_POST['action']) && $_POST['action'] == 'team_update' ) {

		$wpdb->update( $member_team_relation_table, array('active' => 0), array('team_id' => $team_id) );

		$team_name         = ( isset($_POST['team_name']) && $_POST['team_name']!='')  ? $_POST['team_name'] : '';
	    $wpdb->update($team_table, array('team_name'=> $team_name), array('id' => $team_id) );

		if(isset($_POST['group_team']) && is_array($_POST['group_team']) && count($_POST['group_team'])>0) {
			foreach ($_POST['group_team'] as $g_value) {
				$relation_data = array(
					'team_id' => $team_id,
					'member_id' => $g_value['player'],
				);
				$wpdb->insert($member_team_relation_table,	$relation_data );
			}
		}
	}

	$team_detail = get_team_detail($team_id);
}


?>

<section class="add-team">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6 title">
				<h1>Add New Team</h1>
			</div>
		</div>
		<form class="form-horizontal" action="" method="POST" id="team_form">



			<div class="team_name">
				<label>Team Name : </label>
				<input type="text" name="team_name" id="team_name" value="<?php echo $team_detail['team_data']->team_name; ?>">
			</div>

			<div class="retail-repeater group_team">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head">Player Name</div>
					    <div class="div-table-head">Phone Number</div>
					    <div class="div-table-head action">Action</div>
					</div>
					<?php
						if( isset($team_detail['members_data']) AND count($team_detail['members_data']) > 0) {
							$i = 1;
							foreach ($team_detail['members_data'] as $m_value) {
					?>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">
                                
                            </div>
                            <div class="rowno"><?php echo $i; ?></div>
                        </div>
					    <div class="div-table-col">

                            <select class="search_player" name="player" style="width:400px;" data-teamid="<?php echo $m_value->id; ?>" data-teamname="<?php echo $m_value->name; ?>" data-teamphone="<?php echo $m_value->phone; ?>">
                            	<option slected value="<?php echo $m_value->id; ?>"><?php echo $m_value->name; ?></option>
                            </select>
					    </div>
					    <div class="div-table-col">
                            <div class="player_phone">
                            	<?php echo $m_value->phone; ?>
                            </div>
					    </div>
					    <div class="div-table-col">
					    	<a href="#" data-repeater-delete style="font-size: 16px; font-weight: bold; color: #ff0000;" data-id="2">x</a>
					    	<input type="hidden" value="Delete"/>
					    </div>
			        </div>

					<?php
							$i++;
							}
						} else {
					?>
			    	<div data-repeater-item class="repeterin div-table-row">
						<div class="div-table-col sale-rowno">
                            <div class="type-container">
                                
                            </div>
                            <div class="rowno">1</div>
                        </div>
					    <div class="div-table-col">
                            <select class="search_player" name="player" style="width:400px;">
                            	
                            </select>
					    </div>
					    <div class="div-table-col">
                            <div class="player_phone">
                            	
                            </div>
					    </div>
					    <div class="div-table-col">
					    	<a href="#" data-repeater-delete style="font-size: 16px; font-weight: bold; color: #ff0000;" data-id="2">x</a>
					    	<input type="hidden" value="Delete"/>
					    </div>
			        </div>
					<?php
						}
					?>
			    </div>
				<ul class="icons-labeled">
					<li>
						<a data-repeater-create href="javascript:void(0);" id="add_new_price_range">
						<span class="icon-block-color add-c"></span>Add Players</a>
					</li>
				</ul>
			</div>
			<?php
				if(!$team_detail) {
					echo '<input type="hidden" name="action" id="" value="team_create"></br>';
					echo '<input type="submit" name="submit" id="" class="player_add" value="Submit">';
				} else {
					echo '<input type="hidden" name="action" id="" value="team_update"></br>';
					echo '<input type="submit" name="submit" id="" class="player_add" value="Update">';
				}
			?>
		</form>
	</div>
</section>