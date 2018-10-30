
<div class="package">
	<div class="" style="padding:25px;margin-left:40%;">
		<label class="btn btn-success birthday_package" data="birthday">Birthday Packages</label>
	</div>
	<div class="" style="padding:25px;margin-left:40%;">
		<label class="btn btn-success corporate_package" data="corporate">Corporate Packages</label>
	</div>
	<div class="" style="padding:25px;margin-left:40%;">
		<label class="btn btn-success normal_gaming" data="normal">Normal Billing</label>
	</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.birthday_package,.corporate_package,.normal_gaming').on('click change',function(){	
		jQuery.ajax({
			method:"POST",
			dataType : 'json',
			url : frontendajax.ajaxurl,
			data : {
				action 		: 'lazertag_type',
				value  		: jQuery(this).attr("data"),
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
});
</script>