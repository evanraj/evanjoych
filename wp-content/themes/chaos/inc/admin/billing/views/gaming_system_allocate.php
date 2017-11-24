
<?php
	global $wpdb;
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
 	$system_table 		= $wpdb->prefix.'chaos_system';
 	$allocate_system 	= $wpdb->prefix.'chaos_system_allocate';

?>
<style>
.price_setting{
  width:100%;
}
.price_setting_in{
  width:75%;
  margin:0 auto;
  margin-top: 70px;
}
label
{
  font-size: 20px;
}

.submit_button{
  
    margin-top: 30px;
}
.label_top{
  float: left;
  width: 200px; 
}
.football_pricing_in{
  margin-top: 30px;
  margin-bottom: 10px;
}

.football_pricing_time{
  margin-top: 30px;
}
.div-table{
    border: 0px; 
}
 .display_date {
    float: right;
    font-weight: bold;
    font-size: 16px;
  }
</style>
<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<div class="display_date">
				<span class="date">Date:</span>
				<span><?php echo $date; ?></span>
			</div>
			<h1>Allocate Systems</h1>
			
			<div>
				<input type="hidden" name="allocate_date" id="allocate_date" class="allocate_date" value="<?php echo $date; ?>"/>
				
				<table class="wp-list-table widefat fixed " cellspacing="0" >
				    <thead>
				        <tr style="background: rgb(229, 229, 229);color: #fff;">
				            <th class="manage-column column-id"><span>S No</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Pc Name</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Category</span></th>
				            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Allocate</span></th>
				        </tr>
				    </thead>
				    <tbody id="the-list" class="">
				    <?php
				   //pagination
				    
				    $condition = '';
				    $receipt_per_page  = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
				    

				    $result_args = array(
				        'table_name' => $system_table,
				        'orderby_field' => 'id',
				        'page' => 1,
				        'order_by' => 'DESC',
				        'items_per_page' => $receipt_per_page,
				        'condition' => $condition,
				    );
				    $results = custom_pagination_gaming_system_allocate($result_args);


				    // echo "<pre>";
				    // var_dump($results); die();

				        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
				            $per_page = $results['start_count'];
				            foreach ($results['result'] as $d_value) {
				                $per_page++;
				    ?>
				    <tr style="background:#fff;">
				        <td> <?php echo $per_page; ?></td>
				        <td> <?php echo $d_value->pc_name; ?></td>
				        <td> <?php $cat = $d_value->pc_category;
				        if($cat == '1'){
				        	echo 'PC';
				        } 
				        else if($cat == '2'){
				        	echo 'Xbox';
				        }
				        else {
				        	echo 'PS4';
				        }?></td>
				        <td class="center">
				           <label class="switch">
					           	<input type="checkbox" id="togBtn" class="togBtn" name="togBtn" data-sysid="<?php echo $d_value->id; ?>" 
					           	<?php 

					           	$allocate_query = "select * from $allocate_system where system_id ='$d_value->id' and allocate != '0' and active = 1";
					           	$allocation = $wpdb->get_row( $allocate_query, OBJECT);

					           	if($allocation) {
					           	 echo 'checked'; }
					           	
					           	 ?>
					           	/>
					           	<div class="slider round">
					           	<!--ADDED HTML -->
					           	<span class="off" >OFF</span>
						        <span class="on" checked>ON</span>
						           	
						        <!--END-->
					           </div>
				           </label>
				        </td>
				    </tr>
				    <?php
				    }
				}
				 ?>
				    </tbody>
				</table>
				<?php echo $results['pagination']; ?>
			</div>
			
		</div>
		

	</section>

</form>


