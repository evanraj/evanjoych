
//<------ Start Football Billing jQuery Functions---->

jQuery(document).ready(function () {


//<--- Start Date Picker---->
  jQuery('#billing_date,.football_bill_date,#gaming_billing_date,.gaming_bill_date,.lazertag_bill_date').datepicker({
        dateFormat: 'yy-mm-dd'
    });

//<--- End Date Picker---->
  

  //<---- Start new user --->
 

    jQuery('.new_user_a').on('click', function(){
        jQuery('.select2-container, .new_user_a').css('display', 'none');
        jQuery('.new_user, .old_user_a').css('display', 'inline-block');

        jQuery('.discount_per').text(0);
        jQuery('.discount').val(0);
        calculation(); 
        jQuery.ajax({
            method: "POST",
            dataType: 'json',
            url: frontendajax.ajaxurl,
            data: {
                action                           : 'ft_member_insert',
                member_id                        : '',
                name                             : '',
                phone                            : '',
                membership_no                    : '',
                billing_date                     : '',
            },
            success: function (data) {

            var bill =jQuery('#billing_no').val(data.member_no); 
            jQuery('.billing_id').val(data.id);
            jQuery('.billing_no_div').text(data);

            }
        });
      })

  //<---- End new user --->

//<---- Start New user --->
    jQuery('.old_user_a').on('click', function(){
    jQuery('.select2-container, .new_user_a').css('display', 'inline-block');
    jQuery('.new_user, .old_user_a').css('display', 'none');

    jQuery('.discount_per').text('10%');
    jQuery('.discount').val(10);
    calculation(); 
 
  })
    //<---- End Old user --->

 //<---- Start Search bar --->


  jQuery('#receipt_per_page,#member_name,#member_number, #football_bill_date,#bill_no,#bill_amt').on('change', function() {
    console.log(jQuery('#member_name').val());
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                        : 'football_listing',
              receipt_per_page                              : jQuery('#receipt_per_page').val(),
              member_name                                   : jQuery('#member_name').val(),
              member_number                                 : jQuery('#member_number').val(),
              football_bill_date                            : jQuery('#football_bill_date').val(),
              bill_no                                       : jQuery('#bill_no').val(),
              bill_amt                                      : jQuery('#bill_amt').val(),

            },
            success: function (data) {
              jQuery('.football_listing').html(data);
            }
          });

  });

//F icon Search bar
  jQuery('.search_icons').on('click', function() {

      jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                        : 'football_listing',
              receipt_per_page                              : jQuery('#receipt_per_page').val(),
              member_name                                   : jQuery('#member_name').val(),
              member_number                                 : jQuery('#member_number').val(),
              football_bill_date                            : jQuery('#football_bill_date').val(),
              bill_no                                       : jQuery('#bill_no').val(),
              bill_amt                                      : jQuery('#bill_amt').val(),

            },
            success: function (data) {
              jQuery('.football_listing').html(data);
            }
          });

  });
 //<---- End Search bar --->


  //<--- Start Delete Billling --->
  jQuery('.c-delete-football').live( "click", function() {
    if(confirm('Are you sure you want to delete this element?')){
      var data=jQuery(this).attr("data-id");
      window.location.replace('admin.php?page=view_football_billing&id='+data+'&action=delete');
    }

  });
   //<--- End Delete Billling --->


//Select 2 
    jQuery(".search_billing").select2({
            multiple: false,
            minimumInputLength: 1,
            allowClear: true,
            placeholder: "Search Member",

            ajax: {
                type: 'POST',
                url: frontendajax.ajaxurl,
                delay: 250,
                dataType: 'json',
                data: function(params) {
                    return {
                        action: 'searchMember', // search term
                        page: 1,
                        search_key: params.term,

                    };
                },
                processResults: function(data) {
                    var results = [];

                    return {
                        results: jQuery.map(data.items, function(obj) {
                          
                            return { id: obj.user_id,name:obj.user_login, phone:obj.phone, membership_no:obj.membership_no};
                        })
                    };
                },
                cache: true,
            },
            initSelection: function (element, callback) {
                callback({ id: '-', name: 'Search Member' });
            },
            templateResult: formatCustomerNamea,
            templateSelection: formatCustomerNamea
    }).on('select2:select', function (e) {
      var phone         = jQuery('#phone_number').val(e.params.data.phone);
      var name          = jQuery('#old_member_name').val(e.params.data.name);
      var id            = jQuery('#member_id').val(e.params.data.id);
      var membership_no = jQuery('#member_no').val(e.params.data.membership_no);
      var date          = jQuery('#billing_date').val(); 
   
      

      jQuery.ajax({
        method: "POST",
        dataType: 'json',
        url: frontendajax.ajaxurl,
        data: {
          action                           : 'ft_member_insert',
          member_id                        : e.params.data.id,
          name                             : e.params.data.name,
          phone                            : e.params.data.phone,
          membership_no                    : e.params.data.membership_no,
          billing_date                     : date,

        },
        success: function (data) {
        var bill = jQuery('#billing_no').val(data.member_no);
        jQuery('.billing_id').val(data.id);
        jQuery('.discount').val(10);
        jQuery('.discount_per').text('10%');
                
        }

      }); 
      jQuery('.discount').val(10);
      calculation();    

    }); 
    //<---- End Select2---->

//Call Calculation function when enter Hours

    jQuery('.no_of_player,.discount_percentage').on('change',function() {

    calculation();
  });
//<--- End Call Function --->


//<---- Start Print Function ---->

jQuery('#football_print').on('click', function() {
      var bill_no=jQuery('#bill_no').text();
      var datapass =  printajax.internalprint+'/football-print/?bill_no='+bill_no+'&action=football_print';

      // billing_list_single
      var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });

// jQuery.ajax({
//             method: "POST",
//             url: frontendajax.ajaxurl,
//             data: {
//               action                           : 'footballPricing',
//             },
//             success: function (data) {
//               jQuery('.football').val(data);
//               jQuery('.football_in').text(data);
//             }
//           });


//<---- End Print Function ---->

});
  


 function formatCustomerNamea (state) {
        if (!state.id) {
            return state.id;
        }
        var $state = jQuery(
        '<span>' +
          state.name +
        '</span>'
        );
        return $state;
    };

    function formatCustomerNameb (state) {
        if (!state.id) {
            return state.id;
        }
        var $state = jQuery(
        '<span>' +
          state.id +
        '</span>'
        );
        return $state;
    };
    function calculation() {
            var no_of_player    = jQuery('.no_of_player').val();
            var bill            = jQuery('.per_hour_price').val();    
            var value           = bill * no_of_player;
            jQuery('.total_value').text(value);
            jQuery('.total_value').val(value);
            var vat             = jQuery('.vat').val();
            var vat_value       = (value * vat)/100;
            var after_vat_value = parseFloat(vat_value) + parseFloat(value);
            jQuery('.vat_value').text(vat_value);
            jQuery('.vat_value_input').val(vat_value);
            var disconut        = parseFloat(jQuery('.discount_percentage').val())
            if( disconut == 0 ) {

                var member_discount=parseFloat(jQuery('.discount').val());
                var after_discount =(after_vat_value*member_discount)/100;
                jQuery('.after_discount').val(after_discount);
                jQuery('.discount').text(after_discount);
                jQuery('.discount_value').val(0);
                jQuery('.discount_value').text(0);
                jQuery('.discount_per').text(jQuery('.discount').val() +'%');
               

            }
            else {
                jQuery('.after_discount').val(0);
                jQuery('.discount_per').text(0);
                jQuery('.discount').text(0);
                var after_discount=(after_vat_value*disconut)/100;
                jQuery('.discount_value').val(after_discount);
                jQuery('.discount_value').text(after_discount);
            }

            var final= Math.ceil(after_vat_value-after_discount);
            jQuery('.final_bill').text(final);
            jQuery('.final_bill').val(final);
           

    }

//<------ End Football Billing jQuery Functions---->


  //
  //<-- Start Gaming jQuery functions----->
  //


jQuery(document).ready(function () {

//<---Start Gaming select2--->

    jQuery(".search_gaming_billing").select2({
          multiple: false,
          minimumInputLength: 1,
          allowClear: true,
          placeholder: "Search Member",

          ajax: {
              type: 'POST',
              url: frontendajax.ajaxurl,
              delay: 250,
              dataType: 'json',
              data: function(params) {
                  return {
                      action: 'searchMember', // search term
                      page: 1,
                      search_key: params.term,

                  };
              },
              processResults: function(data) {
                  var results = [];

                  return {
                      results: jQuery.map(data.items, function(obj) {
                          return { id: obj.user_id, name:obj.user_login, phone:obj.phone, membership_no:obj.membership_no};
                      })
                  };
              },
              cache: true,
          },
          initSelection: function (element, callback) {
              callback({ id: '-', name: 'Search Member' });
          },
          templateResult: formatCustomerNamea,
          templateSelection: formatCustomerNamea
    }).on('select2:select', function (e) {

    var phone         = jQuery('#gaming_phone_number').val(e.params.data.phone);
    var name          = jQuery('#gaming_old_member_name').val(e.params.data.name);
    var id            = jQuery('#gaming_member_id').val(e.params.data.id);
    var membership_no = jQuery('#gaming_member_no').val(e.params.data.membership_no);
    var date          = jQuery('#gaming_billing_date').val(); 

    

    jQuery.ajax({
      method: "POST",
      dataType: 'json',
      url: frontendajax.ajaxurl,
      data: {
        action                           : 'gaming_member_insert',
        member_id                        : e.params.data.id,
        name                             : e.params.data.name,
        phone                            : e.params.data.phone,
        membership_no                    : e.params.data.membership_no,
        billing_date                     : date,

      },
      success: function (data) {

      var bill = jQuery('.gaming_billing_no').val(data.member_no);
      jQuery('.billing_id').val(data.id);
      jQuery('.gaming_member_discount').val(10);
      jQuery('.gaming_member_discount_per').text('10%');
              
      }

    }); 
    jQuery('.gaming_member_discount').val(10);
    gaming_calculation();    

  }); 

    //<---End Gaming select2--->

     //<---- Start new user --->
 

    jQuery('.new_user_a_gaming').on('click', function(){
        jQuery('.select2-container, .new_user_a_gaming').css('display', 'none');
        jQuery('.gaming_new_user, .old_user_a_gaming').css('display', 'inline-block');

        jQuery('.gaming_member_discount_per').text(0);
        jQuery('.gaming_member_discount').val(0);
        gaming_calculation(); 
        jQuery.ajax({
          method: "POST",
          dataType: 'json',
          url: frontendajax.ajaxurl,
          data: {
            action                           : 'gaming_member_insert',
            member_id                        : '',
            name                             : '',
            phone                            : '',
            membership_no                    : '',
            billing_date                     : '',
          },
          success: function (data) {

            var bill =jQuery('.gaming_billing_no').val(data.member_no);
            jQuery('.billing_id').val(data.id);
            var bill =jQuery('.gaming_billing_no_div').text(data);
            

          }
        });
  });

//<---- End new user --->

//<---- Start New user --->
  jQuery('.old_user_a_gaming').on('click', function(){

    jQuery('.select2-container, .new_user_a_gaming').css('display', 'inline-block');
    jQuery('.gaming_new_user, .old_user_a_gaming').css('display', 'none');

    jQuery('.gaming_member_discount_per').text('10%');
    jQuery('.gaming_member_discount').val(10);
    gaming_calculation(); 
 
  });
  //<---- End Old user --->


//<---- Start Search bar --->


  jQuery('#gaming_per_page,#gaming_member_name,#gaming_member_number, #gaming_bill_date,#gaming_bill_no,#gaming_bill_amt').on('change', function() {
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                       : 'gaming_listing',
              gaming_per_page                              : jQuery('#gaming_per_page').val(),
              gaming_member_name                           : jQuery('#gaming_member_name').val(),
              gaming_member_number                         : jQuery('#gaming_member_number').val(),
              gaming_bill_date                             : jQuery('#gaming_bill_date').val(),
              gaming_bill_no                               : jQuery('#gaming_bill_no').val(),
              gaming_bill_amt                              : jQuery('#gaming_bill_amt').val(),

            },
            success: function (data) {
              jQuery('.gaming_listing').html(data);
            }
          });

  });

//F icon Search bargaming_per_page
  jQuery('.search_icons_gaming').on('click', function() {

    jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        data: {
            action                                       : 'gaming_listing',
            gaming_per_page                              : jQuery('#gaming_per_page').val(),
            gaming_member_name                           : jQuery('#gaming_member_name').val(),
            gaming_member_number                         : jQuery('#gaming_member_number').val(),
            gaming_bill_date                             : jQuery('#gaming_bill_date').val(),
            gaming_bill_no                               : jQuery('#gaming_bill_no').val(),
            gaming_bill_amt                              : jQuery('#gaming_bill_amt').val(),

        },
      success: function (data) {
        jQuery('.gaming_listing').html(data);
      }
    });

  });
 ////<---- End Search bar --->

//<--- Start Delete Billling --->
    jQuery('.c-delete-gaming').live( "click", function() {
        if(confirm('Are you sure you want to delete this element?')){
            var data=jQuery(this).attr("data-id");
            window.location.replace('admin.php?page=view_gaming_billing&id='+data+'&action=delete');
        }

    });
   //<--- End Delete Billling --->




//<---- Start Print Function ---->

    jQuery('#gaming_print').on('click', function() {
      console.log(jQuery('.gaming_bill_no').val());
        var bill_no   = jQuery('.gaming_bill_no_display').val();
        var id        = jQuery('.gaming_id').val();
        var datapass  =  printajax.internalprint+'/gaming-print/?bill_no='+bill_no+'&id='+id+'&action=gaming_print';

          // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
            thePopup.print(); 
    });

//<---- End Print Function ---->


//<------Toggle Button ---->
jQuery('.togBtn').on('change', function(){
  var on_off = jQuery(this).prop('checked');
  var id     = jQuery(this).attr('data-sysid');

  jQuery.ajax({
      method: "POST",
      url: frontendajax.ajaxurl,
      data: {
        action                           : 'allocate',
        system_id                        : id,
        start_time                       : jQuery('.allocate_date').val(),
        end_time                         : jQuery('.allocate_date').val(),
        allocate                         : on_off,
       

      },
      success: function (member_no) {
              
      }

    });
});
//<---- End Toggle Button ----->
jQuery('.pc_list').live('change',function() {
  var selector = jQuery(this).parent().parent().parent();


    var system_id = selector.find( ".pc_list option:selected" ).val();
    jQuery.ajax({
        method: "POST",
        dataType: 'json',
        url: frontendajax.ajaxurl,
        data: {
          action            : 'calculate_sys_time',
          allocate_id       : system_id,
          date              : jQuery( ".bill_current_time" ).val(),
        },
        success: function (data) {

          selector.find('.actual_played_hours_val').val(data.actual_hours);
          selector.find('.actual_played_hours').text(data.actual_hours);
          selector.find('.hours_gaming').val(data.billed_hours).change();
          
        }
    });

    jQuery.ajax({
        method: "POST",
        dataType: 'json',
        url: frontendajax.ajaxurl,
        data: {
          action            : 'getGamingPrice',
          allocate_id       : system_id,
        },
        success: function (data) {

          jQuery('.per_hour_price_gaming').val(data.price);
          
        }
    });

   
});

//Call Calculation function when enter Hours
    jQuery('.hours_gaming').live('change',function() {

      gaming_row_calculation(jQuery(this).parent().parent().parent());

    });

    jQuery('.gaming_total_value').live('change',function() {
      gaming_calculation();
    });

    jQuery('.gaming_discount').on('change',function(){ 
      gaming_calculation();
    });
//<--- End Call Function --->

});


function gaming_row_calculation(selector = '') {
  var no_hours = selector.find('.hours_gaming').val();
  var price = jQuery('.per_hour_price_gaming').val();
  var tot_bill = (price * no_hours);

  selector.find('.gaming_total_value').val(tot_bill).change();
  selector.find('.gaming_total_value_text').text(tot_bill);
}

function gaming_calculation() {
  var sub_tot = parseFloat(0); 
  jQuery('.gaming_total_value').each(function(){
    sub_tot = sub_tot + parseFloat(jQuery(this).val());
    console.log(sub_tot);
  });

  jQuery('.gaming_sub_tot').val(sub_tot);
  jQuery('.gaming_sub_tot').text(sub_tot);
  var vat       = jQuery('.gaming_vat').val();
  var vat_value = (sub_tot*vat)/100;
  jQuery('.gaming_vat_value').val(vat_value);
  jQuery('.gaming_vat_txt').text(vat_value);
  var after_vat_value = parseFloat(vat_value) + parseFloat(sub_tot);
  var discount = jQuery('.gaming_discount').val();

  if(discount == 0){
   
    var member_discount = jQuery('.gaming_member_discount').val();
    var after_discount =(after_vat_value*member_discount)/100;
    jQuery('.gaming_member_discount_text').text(after_discount);
    jQuery('.after_member_gaming_discount').val(after_discount);
    jQuery('.after_gaming_discount').val(0);
    jQuery('.gaming_discount_text').text(0);
    jQuery('.gaming_member_discount_per').text(jQuery('.gaming_member_discount').val() + '%');


  }
  else {
    jQuery('.gaming_member_discount_text').text(0);
    jQuery('.after_member_gaming_discount').val(0);
    jQuery('.gaming_member_discount_per').text(0);
    var after_discount =(after_vat_value*discount)/100;
    jQuery('.after_gaming_discount').val(after_discount);
    jQuery('.gaming_discount_text').text(after_discount);
      
  }
    

  var final_gaming = Math.ceil(after_vat_value - after_discount);
  jQuery('.gaming_final_bill').val(final_gaming);
  jQuery('.gaming_final_bill_text').text(final_gaming);

}

//
//<-- End Gaming jQuery functions----->
//




//
//<-- Start Lazer Tag jQuery functions----->
//

//<----- Select 2 for lazer Tag------>
jQuery(document).ready(function () {

  jQuery(".search_lazertag_billing").select2({
    multiple: false,
    minimumInputLength: 1,
    allowClear: true,
    placeholder: "Search Member",

    ajax: {
        type: 'POST',
        url: frontendajax.ajaxurl,
        delay: 250,
        dataType: 'json',
        data: function(params) {
            return {
                action: 'searchMember', // search term
                page: 1,
                search_key: params.term,

            };
        },
        processResults: function(data) {
            var results = [];

            return {
                results: jQuery.map(data.items, function(obj) {
                    return { id: obj.user_id, name:obj.user_login, phone:obj.phone, membership_no:obj.membership_no};
                })
            };
        },
        cache: true,
    },
      initSelection: function (element, callback) {
          callback({ id: '-', name: 'Search Member' });
      },
      templateResult: formatCustomerNamea,
      templateSelection: formatCustomerNamea
  }).on('select2:select', function (e) {

    var phone         = jQuery('#lazertag_phone_number').val(e.params.data.phone);
    var name          = jQuery('#lazertag_old_member_name').val(e.params.data.name);
    var id            = jQuery('#lazertag_member_id').val(e.params.data.id);
    var membership_no = jQuery('#lazertag_member_no').val(e.params.data.membership_no);
    var date          = jQuery('#lazertag_billing_date').val(); 

  

    jQuery.ajax({
      method: "POST",
      dataType: 'json',
      url: frontendajax.ajaxurl,
      data: {
        action                           : 'lazertag_member_insert',
        member_id                        : e.params.data.id,
        name                             : e.params.data.name,
        phone                            : e.params.data.phone,
        membership_no                    : e.params.data.membership_no,
        billing_date                     : date,

      },
      success: function (data) {

        var bill = jQuery('.lazertag_billing_no').val(data.member_no);
        jQuery('.billing_id').val(data.id);
        jQuery('.discount_lazertag').val(10);
        jQuery('.discount_per_lazertag').text('10%');
              
      }

    }); 
    jQuery('.discount_lazertag').val(10);
    lazertag_calculation();

  });


    //<---- Start new user --->
 

  jQuery('.new_user_a_lazertag').on('click', function(){
    jQuery('.select2-container, .new_user_a_lazertag').css('display', 'none');
    jQuery('.lazertag_new_user, .old_user_a_lazertag').css('display', 'inline-block');

    jQuery('.discount_per_lazertag').text(0);
    jQuery('.discount_lazertag').val(0);
    lazertag_calculation(); 
    jQuery.ajax({
      method: "POST",
      dataType: 'json',
      url: frontendajax.ajaxurl,
      data: {
        action                           : 'lazertag_member_insert',
        member_id                        : '',
        name                             : '',
        phone                            : '',
        membership_no                    : '',
        billing_date                     : '',
      },
      success: function (data) {

        var bill =jQuery('.lazertag_billing_no').val(data.member_no);
        jQuery('.billing_id').val(data.id);
        var bill =jQuery('.lazertag_billing_no_div').text(data.member_no);
        

      }
    });
  });

//<---- End new user --->

//<---- Start New user --->
  jQuery('.old_user_a_lazertag').on('click', function(){

    jQuery('.select2-container, .new_user_a_lazertag').css('display', 'inline-block');
    jQuery('.lazertag_new_user, .old_user_a_lazertag').css('display', 'none');

    jQuery('.discount_per_lazertag').text('10%');
    jQuery('.discount_lazertag').val(10);
    lazertag_calculation(); 
 
  });
//<---- End Old user --->


  

//<-------- call calculation when clicking player and hour change----->

  jQuery('.no_of_player_lazer_slot,.lazer_hours,.per_hour_price_lazertag,.discount_percentage_lazertag').on('change',function() {

    lazertag_calculation();
      
  });

//<-------- End call calculation when clicking player and hour change----->

//<--- Display pricing in lazer tag form---->
  jQuery('.gametype').on('click',function(){
    var value = jQuery('input[name=gametype]:checked').val();
    
    jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        dataType: 'json',
        data: {
          action  : 'getLazertagPrice',
          type : value,
          date : jQuery('#bill_date').val(),
          time : jQuery('#bill_time').val(),
        
        },
        success: function (data) {
            console.log(data);
            jQuery('.per_hour_price_lazertag').val(data.price).change();
            jQuery('.bill_for_lazertag').text(data.for);
            jQuery('.lazetag_in_price').text(data.price).change();
            // jQuery('.lazertag_total_value').text(data.price);
            // jQuery('.lazertag_total_value').val(data.price);
        }
    });
    if(value == 'hours'){
      jQuery('.slot_div').css('display', 'none');
      jQuery('.hours_div').css('display', 'inline-block');
      lazertag_calculation();

    }
    else if(value == 'slot'){
      jQuery('.slot_div').css('display', 'inline-block');
      jQuery('.hours_div').css('display', 'none');
      lazertag_calculation();
    }

    lazertag_calculation();
    

  });

//<--- End disply pricing in lazer tag form---->

//<---- Start Search bar --->


  jQuery('#lazertag_per_page,#lazertag_member_name,#lazertag_member_number, #lazertag_bill_date,#lazertag_bill_no,#lazertag_bill_amt').on('change', function() {
     jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        data: {
          action                                         : 'lazertag_listing',
          lazertag_per_page                              : jQuery('#lazertag_per_page').val(),
          lazertag_member_name                           : jQuery('#lazertag_member_name').val(),
          lazertag_member_number                         : jQuery('#lazertag_member_number').val(),
          lazertag_bill_date                             : jQuery('#lazertag_bill_date').val(),
          lazertag_bill_no                               : jQuery('#lazertag_bill_no').val(),
          lazertag_bill_amt                              : jQuery('#lazertag_bill_amt').val(),

        },
        success: function (data) {
          jQuery('.lazertag_listing_team').html(data);
        }
      });

  });

//  icon Search bar
  jQuery('.search_icons_lazertag').on('click', function() {

    jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        data: {
          action                                         : 'lazertag_listing',
          lazertag_per_page                              : jQuery('#lazertag_per_page').val(),
          lazertag_member_name                           : jQuery('#lazertag_member_name').val(),
          lazertag_member_number                         : jQuery('#lazertag_member_number').val(),
          lazertag_bill_date                             : jQuery('#lazertag_bill_date').val(),
          lazertag_bill_no                               : jQuery('#lazertag_bill_no').val(),
          lazertag_bill_amt                              : jQuery('#lazertag_bill_amt').val(),

        },
        success: function (data) {
          jQuery('.lazertag_listing').html(data);
        }
      });

  });
 ////<---- End Search bar --->


//<--- Start Delete Billling --->
jQuery('.c-delete-lazertag').live( "click", function() {
    if(confirm('Are you sure you want to delete this element?')){
      var data=jQuery(this).attr("data-id");
      window.location.replace('admin.php?page=view_lazertag_bill&id='+data+'&action=delete');
    }

});

//Lazer Tag Print
jQuery('#lazertag_print').on('click', function() {
    var bill_no=jQuery('#lazertag_billing').text();
    var datapass =  printajax.internalprint+'/lazertag-print/?bill_no='+bill_no+'&action=lazertag_print';

    // billing_list_single
    var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
    thePopup.print(); 
});



});

function lazertag_calculation() {

    var checked = jQuery('input[name=gametype]:checked').val();
    if(checked == 'slot'){
        var player = parseFloat(jQuery('.no_of_player_lazer_slot').val());
    } else {
        var player = parseFloat(jQuery('.no_of_player_lazer_hour').val());
    }
  
      var hours =parseFloat(jQuery('.lazer_hours').val());
      var price_per=parseFloat(jQuery('.per_hour_price_lazertag').val());
      var total = player * hours * price_per; 
      jQuery('.lazertag_total_value').val(total);
      jQuery('.lazertag_total_value').text(total);
      var vat = jQuery('.lazertag_vat').val();
      var vat_value = (total*vat)/100;
      jQuery('.lazertag_vat_value').val(vat_value);
      jQuery('.lazertag_vat_value_txt').text(vat_value);
      var after_vat_value = parseFloat(total) + parseFloat(vat_value);
      var disconut = parseFloat(jQuery('.discount_percentage_lazertag').val());
     if( disconut== 0 ) {

      var member_discount=parseFloat(jQuery('.discount_lazertag').val());
      var after_discount =(after_vat_value*member_discount)/100;
      jQuery('.after_discount_lazertag').val(after_discount);
      jQuery('.discount_lazertag').text(after_discount);
      jQuery('.discount_value_lazertag').val(0);
      jQuery('.discount_value_lazertag').text(0);
      jQuery('.discount_per_lazertag').text(jQuery('.discount_lazertag').val() + '%');

    }
    else {
      jQuery('.after_discount_lazertag').val(0);
      jQuery('.discount_lazertag').text(0);
      jQuery('.discount_per_lazertag').text(0);
      var after_discount=(after_vat_value*disconut)/100;
      jQuery('.discount_value_lazertag').val(after_discount);
      jQuery('.discount_value_lazertag').text(after_discount);
    }

    var final_lazer= Math.ceil(after_vat_value-after_discount);

    jQuery('.final_bill_lazertag').text(final_lazer);
    jQuery('.final_bill_lazertag').val(final_lazer);
}



    //<------- End Lazer Tag js-------->


//Football Pricing
jQuery(document).ready(function () {
  
jQuery('.football_session_logic').on('change', function (argument) {
    if( jQuery('.football_session_logic:checked').val() == '1' ) {
      jQuery('.football_pricing_time').css('display', 'block');
    } else {
      jQuery('.football_pricing_time').css('display', 'none');
    }
  });

jQuery('.lazertag_happayhours').on('change', function (argument) {
    if( jQuery('.lazertag_happayhours:checked').val() == '1' ) {
      jQuery('.lazetag_pricing_time').css('display', 'block');
    } else {
      jQuery('.lazetag_pricing_time').css('display', 'none');
    }
  });

//<--- Start Delete Billling --->
  jQuery('.c-delete-system').live( "click", function() {
    if(confirm('Are you sure you want to delete this element?')){
      var data=jQuery(this).attr("data-id");
      window.location.replace('admin.php?page=add_gaming_system&id='+data+'&action=delete');
    }

  });
   //<--- End Delete Billling --->

timePicker();
});

//time picker

  function timePicker() {
    jQuery('.time').bootstrapMaterialDatePicker
    ({
        date: false,
        shortTime: false,
        format: 'HH:mm'
    });
  }


