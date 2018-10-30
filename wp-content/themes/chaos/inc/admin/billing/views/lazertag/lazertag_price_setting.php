<?php
global $wpdb;

if(isset($_POST['action']) AND $_POST['action'] =='birthday') {
	
	$data = lazer_invoice_create();
	 	$billing_table       	= $wpdb->prefix.'chaos_lazertag_billing';
	 	$price_data = array(
	 		'area1'	 			=> $_POST['area1'],
	 		'area2'		 		=> $_POST['area2'],
	 		'area3'				=> $_POST['area3'],
	 		'from_time'			=> $_POST['from'],
	 		'to_time'			=> $_POST['to'],
	 		'from_date'			=> $_POST['from_date'],
	 		'lazertag_type'		=> $_POST['lazertag_type'],
	 		'lazertag_amount'  	=> $_POST['lazertag_hours'],
	 		'lazertag_gst'  	=> $_POST['lazertag_gst'],
	 		);
	 	$wpdb->update($billing_table ,$price_data,array('id'=>$data['id'],'active'=>1));
		print('<script>window.location.href="admin.php?page=lazertag_billing&pagess=2&inv_id='.$data['id'].'&action=member_setting"</script>');
		exit();
	}
	

	if($_GET['lazertag_type'] == 'birthday'){
		$price = 6000;
		$display = "style='display:block'";
	} else if ($_GET['lazertag_type'] == 'corporate'){
		$price = 6000;
		$display = "style='display:block'";
	} else {
		$price = 250;
		$display = "style='display:none'";
	}


?>
<style>
.price_setting{
	width:100%;
}
.price_setting_in{
	/*width:50%;*/
	margin:0 auto;
	margin-top: 70px;
}
label
{
	font-size: 15px;
}

.submit_button{
	
    margin-top: 30px;
}
.label_top{
	float: left;
	width: 200px;	
	height: 43px;
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
input[type=checkbox], input[type=radio] {
	margin: 4px 4px 0 !important;
}
</style>

</style>
<form class="form-horizontal" action="" method="POST" id="">
	<section class="price_setting">
		<div class="price_setting_in">
			<h3>Price Details</h3>
			<div class="football_pricing">				
				<div class="football_pricing_in">
					<div class="label_top"><label>Playing Hours</label></div>
					<div>
						<div>
							<p id="basicExample">
							    From : 
							    	<input type="text" name="from_date"  class="date" value="<?php echo date('m/d/Y'); ?>" />
							    	<span class="time_from">
							    		<input type="text" name="from" class="time start" /> 
							    	</span>
							    To:
							    	<span class="time_to">
							    		<input type="text" name="to" class="time end" />
							    	</span>
							    	
							    	<!-- <input type="text" name="to" class="date end" /> -->
							</p>
						</div>
					</div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>Per Game/Per Head</label></div>
					<div><input type="text" name="lazertag_hours" id="lazertag_hours" class="lazertag_hours" value="<?php echo $price; ?>" /></div>
				</div>
				<div class="football_pricing_in">
					<div class="label_top"><label>GST</label></div>
					<div>
						<input type="hidden" name="lazertag_type" value="<?php echo $_GET['lazertag_type']; ?>" class="lazertag_type"/>
						<input type="text" name="lazertag_gst" id="lazertag_gst" value="<?php echo '18'; ?>" /> % 
					</div>
				</div>
				<div class="football_pricing_in " <?php echo $display; ?>>
					<div class="label_top"><label>Playing area</label></div>
					<div>
						<input type="checkbox" name="area1" class="area1" value="console">Console Gaming(PS4)<br>
  						<input type="checkbox" name="area2" class="area2" value="vr">VR Gaming - 1000/Per Hour<br>
  						<input type="checkbox" name="area3" class="area3" value="motion">Retro & Motion Sensor Game - 400/Per Hour<br>
					</div>
				</div>
			</div>		

			
				<input type="hidden" name="action" id="submit" value="birthday"></br>	
				<input type="submit" id="submit" class="player_add birthday_submit" value="Submit">
		</div>
		<div style="float:left;margin-left:18%;">
				<?php
					$getPrevSlots = getLazertagPrevSlots(date('m/d/Y'));
					$baz_start = array_map('array_first_start', $getPrevSlots['results']);
					$baz_end = array_map('array_first_end', $getPrevSlots['results']);

					$multi_demisional_view_end = json_encode($baz_end);
					$multi_demisional_view_start = json_encode($baz_start);
					echo "<input type='hidden' class='multi_demisional_view' name='multi_demisional_view' value=".$multi_demisional_view.">";

				 ?>
			<table class="widefat fixed" style="width: 14%;" >
				<thead><tr style="background: #23282d;color: #fff;"><td>From Time</td><td>To Time</tr></thead>
				
				<tbody id="the-list" class="lazertable">
					<?php echo $getPrevSlots['table']; ?>
				 </tbody>
			</table>
		</div>
	</section>
</form>
<script type="text/javascript">
jQuery(document).ready(function(){ 

	jQuery('.start').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia',
        'disableTimeRanges': <?php echo $multi_demisional_view_start; ?>,
    });

    jQuery('.end').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia',
        'disableTimeRanges': <?php echo $multi_demisional_view_end; ?>,
    });

    jQuery('#basicExample .date').datepicker({
        'dateFormat': 'mm/dd/yy',
        'autoclose': true
    });

	jQuery('#basicExample').datepair({
	    parseDate: function(input){
	        var picker = jQuery(input).data('pikaday');
	        return picker.getDate();
	    },
	    updateDate: function(input, dateObj){
	        var picker = jQuery(input).data('pikaday');
	        return picker.setDate(dateObj);
	    }
	});
    //initialize datepair
    // var basicExampleEl = document.getElementById('basicExample');
    // var datepair = new Datepair(basicExampleEl);
	
    jQuery(document).on('change','#basicExample .date',function(){
    	var rand1 = makeid();
    	var rand2 = makeid();
    	jQuery('.time_from .time, .time_to .time').remove();

    	var in1 = '<input type="text" name="from" class="time '+rand1+'">';
    	jQuery('.time_from').html(in1);

    	var in2 = '<input type="text" name="to" class="time '+rand2+'">';
    	jQuery('.time_to').html(in2);

    	jQuery('.lazertable').html('');

    	jQuery.ajax({
			method:"POST",
			dataType : 'json',
			url : frontendajax.ajaxurl,
			data : {
				action 		: 'getLazertagPrevSlots_Ajax',
				date  		: jQuery(this).val(),
			},
			success:function (data){
			  	jQuery('.lazertable').html(data.table);
			  	var timeRange_start = [];
			  	var timeRange_end = [];
			  	if(data.multi_demisional_view_start != 'null') {
			  		timeRange_start = data.multi_demisional_view_start;
			  	}
			  	if(data.multi_demisional_view_end != 'null') {
			  		timeRange_end = data.multi_demisional_view_end;
			  	}


			  	ajaxTimePickerGenerate(rand1, rand2, timeRange_start,timeRange_end);

			}
		});
    });

jQuery('#lazertag_cancel').live('click', function() {
        var bill_id = jQuery(this).attr('data-id');
        var phone   = jQuery(this).attr('data-phone');
        var name   = jQuery(this).attr('data-name');
        var time   = jQuery(this).attr('data-time');
        var date   = jQuery(this).attr('data-date');
        if(phone !=''){
        	if (confirm('Are you sure you want to Cancel this slot?')) {
          			sendSms(phone,bill_id,name,time,date,'cancel','lazertag');
          	 }
        }
         else {
          alert('Phone number Dose not Exists!!!');
         }
    });
});



function ajaxTimePickerGenerate(rand1, rand2, timeRange_start,timeRange_end) {
	var in1_class = '.'+rand1;
	var in2_class = '.'+rand2;

/*	timeRangesToDisable = new Array();
	timeRangesToDisable = jQuery('.time_blocked').val();*/

	timeRangesToDisable_start = new Array();
	timeRangesToDisable_end = new Array();
	timeRangesToDisable_start = jQuery.parseJSON(timeRange_start);
	timeRangesToDisable_end = jQuery.parseJSON(timeRange_end);

  	jQuery(in1_class).timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia',
        'disableTimeRanges': timeRangesToDisable_start,
    });

    jQuery(in2_class).timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia',
        'disableTimeRanges': timeRangesToDisable_end,
    });

}

</script>