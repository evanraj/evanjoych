<style type="text/css">
	.label_main {
		margin-bottom: 20px;
	}
	.txt_label {
		width: 200px;
		float: left;
	}
	.label_val {
		width: 500px;
		float: left;
	}
	.input_type {
		width: 100%;
	}
	.input_text {
		height: 35px;
	}
	.clear {
		clear: both;
	}
	.sortable-css {
		min-height: 33px;
		border: 2px dotted #989595;
	}
	.draggable {
		min-width: 180px;
	    float: left;
	    text-align: center;
	    background: #fff;
	    padding: 5px;
	    border: 2px solid #797979;
	    border-radius: 9px;
	    cursor: pointer;
	    z-index: 1;

	}
	.sortable-css .draggable {
		z-index: 0;
	}
	.team_container {
		width: 60%;
		margin: 0 auto;
	}

	.play_vs .sortable-css, .play_vs .play_vs_in {
		float: left;
	}
	.play_vs .sortable-css {
		border-radius: 10px;
		padding: 2px;
		min-width: 195px;
	}
	.play_vs .play_vs_in {
		width: 18%;
	}
	.team-txt {
		font-weight: bold;
	}
	.sl-no {
		width: 80px;
	}
	.match-head {
		width: 250px;
	}
	.date-head {
		width: 250px;
	}
	.div-table-head.action {
		width: 250px;
	}
	.play_vs {
		width: 40%;
    	margin: 0 auto;
    	min-width: 65% !important;
	}
	.left-sortable .ui-draggable-handle{
		float: right;
		position: relative;
	}
	.right-sortable .ui-draggable-handle{
		float: left;
		position: relative;
	}
	.team-close {
		width: 20px;
	    height: 20px;
	    position: absolute;
	    top: 1px;
	    cursor: pointer;
	    right: 1px;
	    line-height: 15px;
	    color: #f00;
	    font-weight: bold;
	    font-size: 17px;
	    border-radius: 8px;
	}
	.team-close:hover {
		background: #e6e6e6;
	}
	.match-no input {
		width: 60px;
	}

</style>
<?php
	global $wpdb;

	$tournament_table = $wpdb->prefix.'chaos_tournaments';
	$tournament_team_table = $wpdb->prefix.'chaos_tournament_teams';
	$tournament_schedule_table = $wpdb->prefix.'chaos_tournament_schedule';

	$tournament_detail = false;
	$tournament_schedule_detail = false;
	$tournament_teams = false;
	$tour_teams = array();

	if( isset($_GET['id']) && $tournament_detail = getTournamentDetail($_GET['id']) ) {
		$tournament_id = $_GET['id'];

		if(isset($_POST['action']) && $_POST['action'] == 'tournament_update') {
			$tournament_data = array(
	    			'tournament_name' 	=> $_POST['class_name'],
	    			'tournament_start' 	=> $_POST['start_from'],
	    			'tournament_end'	=> $_POST['end_to']
	    		);
			$wpdb->update($tournament_table, $tournament_data, array('id' => $tournament_id));




			$tournament_teams = getTournamentTeams($tournament_id, 0);

			$tournament_teams = $tournament_teams ? $tournament_teams : array(); 
			$tour_teams = array_column( $tournament_teams, 'team_id');
			$tour_teams = (is_array($tour_teams) && count($tour_teams) > 0 )  ? $tour_teams : array();

			$wpdb->update( $tournament_team_table, array('active' => 0), array('tournament_id' => $tournament_id)  );

			if( isset($_POST['teams']) && is_array($_POST['teams']) && count($_POST['teams'])>0 ) {


				foreach ($_POST['teams'] as $f_value) {
					if( in_array($f_value, $tour_teams) ) {
						$wpdb->update( $tournament_team_table, array('active' => 1), array('tournament_id' => $tournament_id, 'team_id' => $f_value) );
					} else {
						$wpdb->insert( $tournament_team_table, array('tournament_id' => $tournament_id,'team_id' => $f_value) );
					}
					
				}

			
			$wpdb->update( $tournament_schedule_table, array('active' => 0), array('tournament_id' => $tournament_id)  );

			if( isset($_POST['group_team']) && is_array($_POST['group_team']) && count($_POST['group_team'])>0 ) {
				foreach ($_POST['group_team'] as $g_value) {
					$schedule_data = array(
						'tournament_id' => $tournament_id,
						'match_order' 	=> $g_value['match_order'],
						'team1' 	=> ($g_value['team1'] && $g_value['team1'] != 0 && $g_value['team1'] != '' ) ? $g_value['team1'] : 0,
						'team2' 	=> ($g_value['team2'] && $g_value['team2'] != 0 && $g_value['team2'] != '' ) ? $g_value['team2'] : 0,
						'match_date' => $g_value['match_date'],
						'active' 	=> 1
					);

					if($g_value['match_id'] != 0) {
						$wpdb->update( $tournament_schedule_table, $schedule_data, array('id' => $g_value['match_id']) );
					} else {
						$wpdb->insert( $tournament_schedule_table, $schedule_data );
					}
				}
			}

			}
		}

		$tournament_teams = getTournamentTeams($tournament_id);

		$tournament_teams = $tournament_teams ? $tournament_teams : array(); 
		$tour_teams = array_column( $tournament_teams, 'team_id');
		$tour_teams = (is_array($tour_teams) && count($tour_teams) > 0 )  ? $tour_teams : array();

		$tournament_schedule = getTournamentSchedule($_GET['id']);
	}



	if(isset($_POST['action']) AND $_POST['action'] == 'tournament_create'  ) {

	    if( isset($_POST['class_name']) AND $_POST['class_name'] != '' ) {
	    	$tournament_data = array(
	    			'tournament_name' 	=> $_POST['class_name'],
	    			'tournament_start' 	=> $_POST['start_from'],
	    			'tournament_end'	=> $_POST['end_to']
	    		);

	    	$wpdb->insert($tournament_table, $tournament_data);
			$tournament_id = $wpdb->insert_id;


			if(isset($_POST['teams']) && is_array($_POST['teams']) && count($_POST['teams'])>0) {
				foreach ($_POST['teams'] as $t_value) {
					$relation_data = array(
						'tournament_id' => $tournament_id,
						'team_id' => $t_value,
					);
					$wpdb->insert($tournament_team_table,	$relation_data );
				}
			}


			if( isset($_POST['group_team']) && is_array($_POST['group_team']) && count($_POST['group_team'])>0 ) {
				foreach ($_POST['group_team'] as $g_value) {
					$schedule_data = array(
						'tournament_id' => $tournament_id,
						'match_order' 	=> $g_value['match_order'],
						'team1' 	=> ($g_value['team1'] && $g_value['team1'] != 0 && $g_value['team1'] != '' ) ? $g_value['team1'] : 0,
						'team2' 	=> ($g_value['team2'] && $g_value['team2'] != 0 && $g_value['team2'] != '' ) ? $g_value['team2'] : 0,
						'match_date' => $g_value['match_date'],
					);

					$wpdb->insert( $tournament_schedule_table, $schedule_data );
				}
			}
		}
	}



	$teams = getTeams();
?>
<div>
	<div>
		<h1 style="margin-bottom:50px;">Add Tournament</h1>
		<form action="" method="POST">
			<div class="label_main">
				<div class="txt_label">
					Tournament Name :
				</div>
				<div class="label_val">
					<input type="text" name="class_name" class="input_type input_text" value="<?php echo $tournament_detail->tournament_name; ?>">
				</div>
				<div class="clear"></div>
			</div>
			<div class="label_main">
				<div class="txt_label">
					Tournament Teams : 
				</div>
				<div class="label_val">
					<select class="select_team input_type" name="teams[]" multiple="multiple">
						<?php if($teams) {
								foreach ($teams as $t_value) {
									$selected = (in_array($t_value->id, $tour_teams) ) ? 'selected' : '';
									echo "<option ".$selected." value='".$t_value->id."'>".$t_value->team_name."</option>";
								}
							} ?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
			<div class="label_main">
				<div class="txt_label">
					Start Date
				</div>
				<div class="label_val">
					<input type="text" name="start_from" class="input_text date_pic">
				</div>
				<div class="clear"></div>
			</div>
			<div class="label_main">
				<div class="txt_label">
					End Date
				</div>
				<div class="label_val">
					<input type="text" name="end_to" class="input_text date_pic">
				</div>
				<div class="clear"></div>
			</div>




			<div class="team_container">
				<div class="teams_in">
					<div class="clear"></div>
					<?php 
						if($tournament_teams) {
							foreach ($tournament_teams as $tt_value) {
								echo '<div class="draggable ui-draggable ui-draggable-handle" data-teamid="'.$tt_value['team_id'].'"><div class="team-txt">'.$tt_value['team_name'].'</div><div class="team-close">x</div><div class="clear"></div></div>';
							}
						}

					?>
					
				</div>
				<div class="clear"></div>
			</div>





<style type="text/css">

</style>



			<div class="matches-repeater group_team">
			  	<div data-repeater-list="group_team" class="div-table">
				    <div class="div-table-row">
					    <div class="div-table-head sl-no">S.No</div>
					    <div class="div-table-head match-head">Match</div>
					    <div class="div-table-head team-head">Teams</div>
					    <div class="div-table-head date-head">Date Time</div>
					    <div class="div-table-head action">Action</div>
					</div>

					<?php
						if($tournament_schedule) {
							$i = 1;
							foreach ($tournament_schedule as $ts_value) {
					?>
				    	<div data-repeater-item class="repeterin div-table-row">
							<div class="div-table-col sale-rowno">
	                            <div class="type-container">
	                                <input type="hidden" name="match_id" value="<?php echo $ts_value->id; ?>">
	                            </div>
	                            <div class="rowno"><?php echo $i; ?></div>
	                        </div>
						    <div class="div-table-col">
						    	<div class="match-no">
						    		Match - <input type="number" name="match_order" min="1" value="<?php echo $ts_value->match_order; ?>">
						    	</div>
						    </div> 
						    <div class="div-table-col">
							    <div class="play_vs">
		                            <div class="sortable-css left-sortable <?php echo ($ts_value->team1 !=0) ? 'no-sortable' : 'sortable'; ?>">
		                            	<div class="clear">
		                            		<input type="hidden" name="team1" class="vs_team" value="<?php echo $ts_value->team1; ?>">
		                            	</div>

		                            	<?php 
		                            		if($ts_value->team1 !=0) {
		                            	?>
			                            	<div class="draggable ui-draggable ui-draggable-handle" style="position: relative; left: 0px; top: 0px; width: 180px; height: 18px; z-index: 0;" data-teamid="<?php echo $ts_value->team1; ?>">
			                            		<div class="team-txt"><?php echo $ts_value->team1_name; ?></div>
			                            		<div class="team-close">x</div>
			                            		<div class="clear"></div>
			                            	</div>
		                            	<?php
		                            		} 
		                            	?>

									</div>
									<div class="play_vs_in">
										Vs
									</div>
									<div class="sortable-css right-sortable <?php echo ($ts_value->team2 !=0) ? 'no-sortable' : 'sortable'; ?>">
		                            	<div class="clear"><input type="hidden" name="team2" class="vs_team" value="<?php echo $ts_value->team2; ?>">
		                            	</div>
		                            	<?php 
		                            		if($ts_value->team2 !=0) {
		                            	?>
			                            	<div class="draggable ui-draggable ui-draggable-handle" style="position: relative; left: 0px; top: 0px; width: 180px; height: 18px; z-index: 0;" data-teamid="<?php echo $ts_value->team2; ?>">
			                            		<div class="team-txt"><?php echo $ts_value->team2_name; ?></div>
			                            		<div class="team-close">x</div>
			                            		<div class="clear"></div>
			                            	</div>
		                            	<?php
		                            		} 
		                            	?>
									</div>
							    </div>
						    </div>
						    <div class="div-table-col">
							    <div class="play_date">
							    	<input type="text" name="match_date" class="date_pic_r" value="<?php echo $ts_value->match_date; ?>">
							    </div>
						    </div>
						    <div class="div-table-col">
						    	<a href="#" data-repeater-delete style="font-size: 16px; font-weight: bold; color: #ff0000;" data-id="0">x</a>
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
	                                <input type="hidden" name="match_id" value="0">
	                            </div>
	                            <div class="rowno">1</div>
	                        </div>
						    <div class="div-table-col">
						    	<div class="match-no">
						    		Match - <input type="number" name="match_order" min="1">
						    	</div>
						    </div> 
						    <div class="div-table-col">
							    <div class="play_vs">
		                            <div class="sortable sortable-css left-sortable">
		                            	<div class="clear"><input type="hidden" name="team1" value="0" class="vs_team"></div>
									</div>
									<div class="play_vs_in">
										Vs
									</div>
									<div class="sortable sortable-css right-sortable">
		                            	<div class="clear"><input type="hidden" name="team2" value="0" class="vs_team"></div>
									</div>
							    </div>
						    </div>
						    <div class="div-table-col">
							    <div class="play_date">
							    	<input type="text" name="match_date" class="date_pic_r">
							    </div>
						    </div>
						    <div class="div-table-col">
						    	<a href="#" data-repeater-delete style="font-size: 16px; font-weight: bold; color: #ff0000;" data-id="0">x</a>
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
						<span class="icon-block-color add-c"></span>Add Schedule</a>
					</li>
				</ul>
			</div>











			<div class="label_main">
				<div class="label_val">
					<?php 
						if(!$tournament_detail) {
							echo '<input type="submit" name="submit" id="" class="tournament_add" value="Submit">';
							echo '<input type="hidden" name="action" value="tournament_create">';
						} else {
							echo '<input type="submit" name="submit" id="" class="tournament_add" value="Update">';
							echo '<input type="hidden" name="action" value="tournament_update">';
						}

					?>
					
				</div>
				<div class="clear"></div>
			</div>

			
		</form>
	</div>
</div>
