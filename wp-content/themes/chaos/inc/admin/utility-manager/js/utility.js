jQuery(document).ready(function () {

  jQuery('#date, .postponed_cal,.current_date').datepicker({
        dateFormat: 'yy-mm-dd'
    });


  //Utility Status
jQuery(".utility_status").change(function()
{
      var status=jQuery(this).val();  
      var id = jQuery(this).attr('data-id')
     
  console.log(status);

      if(status=='postponed'){
          jQuery(this).parent().find('.postponed_days').css('display', 'inline-block');
      }
      else{

        jQuery(this).parent().find('.postponed_days').css('display', 'none');


        jQuery.ajax({
          method: "POST",
          url: frontendajax.ajaxurl,
          data: {
            action                  : 'utility_status',
            status                  : status,
            id                      : id,
           
          },
          success: function (data) {
            alert('Your Utility had been Updated');
          }
        }); 

        
      }
    });
//Utility Status
jQuery(".postponed_cal").change(function() {
  var id = jQuery(this).attr('data-id')
  var postponed_days= jQuery(this).parent().find('.postponed_cal').val();
      jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        data: {
          action                  : 'utility_status',
          id                      : id,
          status                  : 'postponed',
          postponed_days          : postponed_days,
        },
        success: function (data) {
          alert('Your Posponed Date had been Updated');
        }
      });  
});

 //week and month Display

jQuery('input[type=radio][name=periods]').change(function() {
        if (this.value == 'w') {
            jQuery('.duration_month').css('display', 'none');
        jQuery('.duration_week').css('display', 'inline-block');
        }
        else if (this.value == 'm') {
           jQuery('.duration_week').css('display', 'none');
      jQuery('.duration_month').css('display', 'inline-block');
        }
    });

//Search Bar
  jQuery('#receipt_per_page,#utility_name, #emailid, #current_date').on('change', function() {
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                  : 'utility_manager',
              receipt_per_page        : jQuery('#receipt_per_page').val(),
              utility_name            : jQuery('#utility_name').val(),
              emailid                 : jQuery('#emailid').val(),
              current_date            : jQuery('#current_date').val(),
            },
            success: function (data) {
              jQuery('.receipt_listing').html(data);
            }
          });
  });
  //search icons
  jQuery('.search_icons').on('click', function() {
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                  : 'utility_manager',
              receipt_per_page        : jQuery('#receipt_per_page').val(),
              utility_name            : jQuery('#utility_name').val(),
              emailid                 : jQuery('#emailid').val(),
              current_date            : jQuery('#current_date').val(),
            },
            success: function (data) {
              jQuery('.receipt_listing').html(data);
            }
          });
  });



  //new and old user for Utility Form


   jQuery('.new_user_a').on('click', function(){
    jQuery('.dealer_name, .new_user_a').css('display', 'none');
    jQuery('.new_user, .old_user_a').css('display', 'inline-block');
   
  })

  jQuery('.old_user_a').on('click', function(){
    jQuery('.dealer_name, .new_user_a').css('display', 'inline-block');
    jQuery('.new_user, .old_user_a').css('display', 'none');
  
  })



  });



//Delete Utility
  jQuery('.c-delete-utility').live( "click", function() {
    if(confirm('Are you sure you want to delete this element?')){
      var data=jQuery(this).attr("data-id");
      window.location.replace('admin.php?page=view_utility&id='+data+'&action=delete');
    }

  });
//delete utility setting

  jQuery('.c-delete-utility-setting').live( "click", function() {
    if(confirm('Are you sure you want to delete this element?')){
      var data=jQuery(this).attr("data-id");
      window.location.replace('admin.php?page=utility_setting&id='+data+'&action=delete');
    }

  });

//popup Receipt
  jQuery('.utility_detail').live( "click", function() {
    var data_utility=jQuery(this).attr("data-id");

    jQuery('.popup-container-utility').bPopup({
            easing: 'easeOutBack', //uses jQuery easing plugin
            speed: 450,
            transition: 'slideDown'
        });
      receipt_pop(data_utility);
  });



  function receipt_pop(data_utility) {
        jQuery.ajax({
          method: "POST",
          url: frontendajax.ajaxurl,
          data: {
            action                  : 'popup_utility',
            id                      :  data_utility
          },
          success: function (data) {

                jQuery('.popup_utility_container').html(data);
            }
        });

  }

   

 