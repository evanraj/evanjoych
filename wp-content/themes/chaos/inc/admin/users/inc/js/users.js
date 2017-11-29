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

    jQuery('.redeem_point').live('change keyup',function(){

        var redeem = parseFloat(jQuery('.redeem_point').val());
        var balance = parseFloat(jQuery('.balance_point').val());

        if(redeem > balance ){
            alert('Enter Available points!!!');
            jQuery('.redeem_point').val('');
        }


    });


      jQuery('#user_per_page,#user_name,#user_phone').on('change', function() {
  
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                     : 'user_listing',
              user_per_page                              : jQuery('#user_per_page').val(),
              user_name                                  : jQuery('#user_name').val(),
              user_phone                                 : jQuery('#user_phone').val(),
            },
            success: function (data) {
              jQuery('.user_listing').html(data);
            }
          });

  });

//F icon Search bar
  jQuery('.user_search_icons').on('click', function() {

      jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                     : 'user_listing',
              user_per_page                              : jQuery('#user_per_page').val(),
              user_name                                  : jQuery('#user_name').val(),
              user_phone                                 : jQuery('#user_phone').val(),

            },
            success: function (data) {
              jQuery('.user_listing').html(data);
            }
          });

  });


});

function managePopupContent( data ) {
    window.location = data.redirect;
}


function keyPressed(e)
{
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox      

     return (key != 13);
}

