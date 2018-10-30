

<STYLE TYPE="text/css">
.time_section,.morning_session,.evening_session{
	padding: 10px;
	/*margin-left: 20%;*/
}
.btn-success.active,.btn-success.active:focus,.btn-success:checked{
	background-color: #3a3eb1 !important;
}
.check-one {
	border-radius: 10px !important;
    width: 100px;
    height: 31px;
    margin-left: 2px !important;
    margin-top: 10px;
}
.btn-group-vertical>.btn, .btn-group>.btn{
	position: relative;
    float: none !important; 
}
input[type="checkbox"][readonly] {
    pointer-events: none !important;
}
</STYLE>
<div class="container-fluid">
	<div class="row">
		<section class="time_section">
			<form class="football_from" id="football_from">
				Date : <input type="text" value ="<?php echo date('Y-m-d'); ?>" class="billing_date" name="billing_date">
				<br/>
				<br>
				<div class="morning_session" data-toggle="buttons">
					<lable></lable>
					
					<label class="btn btn-success"> 
					 	<input type="checkbox"  name="action"  class="first-session"  value="morning" checked> 3 AM - 3 PM
					</label> 
					<b>PRICE - 2000 (PER HOUR)</b>
				</div>
				<div class="evening_session" data-toggle="buttons" >
			 		<lable></lable>
					<label class="btn btn-success" > 
					 	<input type="checkbox"  name="action"  class="second-session"  value="evening"> 3 PM - 3 AM
					</label> 	
					<b>PRICE - 2500 (PER HOUR)</b>
				</div>
				<div class=" morning-individual" data-toggle="buttons" style="margin-top: 10px;">
				 Morning Session
				 <div class="btn-group all_sessions_morning">	
				 	<?php
				 	 	$price_data  =football_pricing('morning_session', '60.00',date('Y-m-d'));
				 	 	echo $price_data['html'];		 	 
					?>
				  </div>
		 		</div>
			 	<div class="evening-individual" data-toggle="buttons" style="display:none;margin-top: 10px;">
			 	Evening Session	
				 	<div class="btn-group all_sessions_evening">
					<?php
					 	 	$price_data  =football_pricing('evening_session', '60.00',date('Y-m-d'));
					 	 	echo $price_data['html'];
				 	 
						?>
				 	</div>
			 	</div>
				<div class="individual_submit">
				 	<input type="button" class="btn btn-danger submit-time" style="margin-top: 10px;margin-left: 41%;" name="submit" value="submit"/>
				</div>
			</form>	
		</section>
	</div>	
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.first-session').live('click change',function(){
	  if(jQuery('.first-session').is(':checked')){
	    jQuery('.morning-individual').css('display','inline-block');
	  } else{
	  	 jQuery('.morning-individual').css('display','none');
	  }
	});
	jQuery('.second-session').live('click change',function(){
	  if(jQuery('.second-session').is(':checked')){
	   	  jQuery('.evening-individual').css('display','inline-block');
	  } else{
	  	  jQuery('.evening-individual').css('display','none');
	  	  jQuery('.evening-individual').css('display','none');
	  }
	});
	jQuery('.session').live('click change',function(){
		if(jQuery(this).attr('readonly') == 'readonly'){
			var sale_id = jQuery(this).attr("data-sale_id");
			var phone = jQuery(this).attr("data-phone");
			var name = jQuery(this).attr("data-name");
			var date = jQuery(this).attr("data-date");
			var time = jQuery(this).attr("data-time");
			var selector = jQuery(this);
			console.log(phone);
			if(phone == 0 ){
				alert('Not entered Phone number');
				jQuery(this).parent().removeClass('active');
				jQuery(this).parent().removeClass('focus');
				jQuery(this).attr("checked",false);
				jQuery(this).parent().css('pointer-events','none');
			} else {
				if (confirm('Are you sure you want to Cancel this slot?')) {
				    jQuery.ajax({
		            method: "POST",
		            url: frontendajax.ajaxurl,
		            data: {
		                action      	: 'smsGateWay',
		               	phone_number 	: phone,                
		               	name 			: name,                
		               	sale_id      	: sale_id,                
		               	date      		: date,                
		               	time      		: time,                
		               	message_type    : 'cancel',  
		               	bill_from       : 'football',             
		            },
		            success: function (data) {
		               	alert("Cancelled Sms was Sent to "+ phone);  
		                selector.attr("checked",false); 
		                selector.parent().removeClass('active');
						selector.parent().removeClass('focus');
						selector.parent().css('pointer-events','none');
						 location.reload(true);
		            }
	        	});
				} else {
				    jQuery(this).parent().removeClass('active');
					jQuery(this).parent().removeClass('focus');
					jQuery(this).attr("checked",false);
					jQuery(this).parent().css('pointer-events','none');
					 location.reload(true);
				}
				
				
			}

		} 
	});
	jQuery('.submit-time').live('click change',function(){
		jQuery.ajax({
			method:"POST",
			dataType : 'json',
			url : frontendajax.ajaxurl,
			data : {
				action :'ft_invoice_create',
				data :jQuery('#football_from :input').serialize(),
			},
			success:function (data){
			   	if(data.redirect != 0) { 
                    setTimeout(function() {
                        managePopupContent(data);
                    }, 0);
                }
			}
		});	
	});
	jQuery(document).on('hover','.check-one',function() {
		jQuery('.check-one').tooltip();
  	});
	
});
</script>
