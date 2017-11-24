jQuery(document).ready(function () {
	jQuery("#create_user").bind('submit', function (e) {
        console.log('sfdf');
            jQuery.ajax({
                type: "POST",
                dataType : "json",
                width:'25%',
                url: frontendajax.ajaxurl,
                data: {
                    action : jQuery('#create_user .user_action').val(),
                    data : jQuery('#create_user :input').serialize()
                },
                success: function (data) {                  

                    if(data.redirect != 0) { 
                        setTimeout(function() {
                            managePopupContent(data);
                        }, 1000);
                    }

                    if(data.success == 0) {
                        popItUp('Error', data.msg);
                    } else {
                        popItUp('Success', data.msg);
                    }
                }
            });

        e.preventDefault();
        return false;
    });

});

function managePopupContent( data ) {
    window.location = data.redirect;
}
