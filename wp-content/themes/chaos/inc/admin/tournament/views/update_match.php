<style type="text/css">
	.match_title {
		text-align: center;
	}
	.span_team {
		font-size: 24px;
		background: #fff;
	    padding: 20px;
	    border-radius: 30px;
	}
	.style_vs {
		font-size: 20px;
		color: red;
	}
	.team1_container, .team2_container {
		width: 50%;
		float: left;
		min-height: 500px;
		background: #fff;
	}
	.detail_container {
		margin-top: 50px;
	}
	.team1_in, .team2_in {
		padding: 30px;
	}
	.team_title, .goal-total {
		text-align: center;
	}
</style>
<?php 
	$match_id = ( isset($_GET['match_id']) && $_GET['match_id'] != '' ) ? $_GET['match_id'] : 0;
	$match_detail = getMatchDetails($match_id);

	$team1_players = get_team_detail($match_detail->team1);
	$team2_players = get_team_detail($match_detail->team2);

?>
<style type="text/css">
	.table-head {
		background-color: #060606;
		color: #fff;
	}
	table {
	    border-collapse: collapse;
	    width: 100%;
	}
	tr{
		border: 4px solid #959696;
	}
	th, td {
	    text-align: left;
	    padding: 8px;
	    border: 3px solid #959696;
	}
	table input[type=number] {
		width: 50px;
	}

	tr:nth-child(even){background-color: #cecece;}
</style>
<h1>Match Details</h1>
<form action="" method="GET">
	<input type="text" name="match_id"> <input type="submit" value="Search">
	<input type="hidden" name="page" value="update_match">
</form>

<div class="match_title">
	<span class="span_team"><?php echo $match_detail->team1_name; ?></span>
	<span class="style_vs">VS</span>
	<span class="span_team"><?php echo $match_detail->team2_name; ?></span>
</div>

<div class="detail_container">
	<div class="team1_container">
		<div class="team1_in">
			<div class="team_title">
				<?php
					echo 'Team Name : '.ucfirst( $match_detail->team1_name );
				?>
			</div>
			<div class="goal-total">
				<?php
					echo 'Total Goal : <input type="number" name="team1_goal">';
				?>
			</div>

			<div class="">

				<table>
				  <tr class="table-head">
				    <th>Player</th>
				    <th>Goals</th>
				    <th>Own Goals</th>
				  </tr>
					<?php
						if($team1_players['members_data']) {
							foreach ($team1_players['members_data'] as $p1_value) {
					?>
						<tr>
							<td>
							<?php echo $p1_value->name; ?>
							<input type="hidden" name="team1[][id]" value="<?php echo $p1_value->id; ?>">
							</td>
							<td><input type="number" name="team1[][goal]" value=""></td>
							<td><input type="number" name="team1[][own_goal]" value=""></td>
						</tr>
					<?php
							}
						}
					?>

				</table>


			</div>
		</div>
	</div>
	<div class="team2_container">
		<div class="team1_in">
			<div class="team_title">
				<?php echo ucfirst( $match_detail->team2_name ); ?>
			</div>
			<div class="">
				<table>
				  <tr class="table-head">
				    <th>Player</th>
				    <th>Goals</th>
				    <th>Own Goals</th>
				  </tr>
					<?php
						if($team2_players['members_data']) {
							foreach ($team2_players['members_data'] as $p2_value) {
					?>
						<tr>
							<td>
							<?php echo $p2_value->name; ?>
							<input type="hidden" name="team1[][id]" value="<?php echo $p2_value->id; ?>">
							</td>
							<td><input type="number" name="team1[][goal]" value=""></td>
							<td><input type="number" name="team1[][own_goal]" value=""></td>
						</tr>
					<?php
							}
						}
					?>

				</table>
			</div>
		</div>
	</div>
</div>