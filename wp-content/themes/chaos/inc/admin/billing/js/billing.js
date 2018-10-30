
//<------ Start Football Billing jQuery Functions---->

jQuery(document).ready(function () {
//<--- Start Date Picker---->
    jQuery('.football_bill_date,#football_bill_date_to,#gaming_billing_date,.gaming_bill_date,.gaming_bill_date_to,.lazertag_bill_date,.lazertag_bill_date_to,.gaming_date,.billing_date').datepicker({
        dateFormat: 'yy-mm-dd'
    });

//<--- End Date Picker---->
//<---- Start New user --->
    jQuery('.old_user_a').on('click', function(){
        jQuery('.select2-container, .new_user_a').css('display', 'none');
        jQuery('.new_user, .old_user_a').css('display', 'inline-block');
        Football_billing(); 
        jQuery('.football_submit').css('display','block');
 
    });
//<---- End Old user --->
//<-------- search customer using name and mobile------>   
    jQuery( "#new_search_billing" ).autocomplete ({

        source: function( request, response ) {
            jQuery.ajax({
              url       : frontendajax.ajaxurl,
              type      : 'POST',
              dataType  : "json",
              data      : {
                action      : 'searchMember',
                search_key  : request.term
              },
                success: function( data ) {
                    response(jQuery.map( data.result, function( item ) {
                        return {
                            id: item.id,
                            value: item.first_name,
                            name : item.first_name,
                            phone : item.phone,
                            membership_no : item.membership_no,
                            email_id : item.email,
                           
                        }
                    }));
                }

            });
        },
        minLength: 1,
        select: function( event, ui ) {
          jQuery('#new_search_billing').val(ui.item.value);
          jQuery('#phone_number').val(ui.item.phone);
          jQuery('#old_member_name').val(ui.item.name);
          jQuery('#member_id').val(ui.item.id);
          jQuery('#member_no').val(ui.item.membership_no);
          jQuery('.member_email').val(ui.item.email_id);
          var date          = jQuery('#billing_date').val(); 
          Football_billing();    
          jQuery('.football_submit').css('display','block');
        }
    });


//Call Calculation function when enter Hours

    jQuery('.no_of_player,.discount_percentage').on('click change',function() {
        Football_billing();
    });
//<--- End Call Function --->


//<---- Start Print Function ---->

    jQuery('#football_print').on('click', function() {
        var bill_id=jQuery('#bill_id').val();
        var phone=jQuery('#ft_phone').val();
      
       var datapass =  printajax.internalprint+'/football-print/?bill_id='+bill_id+'&action=football_print';
      // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });

     jQuery('#football_report_print').on('click', function() {
        var date_from = jQuery('#football_bill_date').val();
        var date_to   = jQuery('#football_bill_date_to').val();
      
        var datapass =  printajax.internalprint+'/football-report/?date_from='+date_from+'&date_to='+ date_to +'&action=football_report';
      // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });

     jQuery('#lazertag_report_print').on('click', function() {
        var date_from = jQuery('#lazertag_bill_date').val();
        var date_to   = jQuery('#lazertag_bill_date_to').val();
      
        var datapass =  printajax.internalprint+'/lazertag-report/?date_from='+date_from+'&date_to='+ date_to +'&action=lazertag_report';
      // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });
    jQuery('#gaming_report_print').on('click', function() {
        var date_from = jQuery('#gaming_bill_date').val();
        var date_to   = jQuery('#gaming_bill_date_to').val();
      
        var datapass =  printajax.internalprint+'/gaming-report/?date_from='+date_from+'&date_to='+ date_to +'&action=gaming_report';
      // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });

    // jQuery('#football_sms').on('click', function() {
    //     var bill_id = jQuery('#bill_id').val();
    //     var phone   = jQuery('#ft_phone').val();
    //     var date   = jQuery('#date').val();
    //     var time   = jQuery('#time').val();
    //     var phone   = jQuery('#phone').val();
    //     var phone   = jQuery('#ft_phone').val();
    //     if(phone !=''){
    //       sendSms(phone,bill_id,name,time,date,'football','book');
    //     }
    //      else {
    //       alert('Phone number Dose not Exists!!!');
    //      }
    // });

    jQuery(document).on('change click','#football_sms_list',function() {

        var bill_id = jQuery(this).attr('data-id');
        var phone   = jQuery(this).attr('data-phone');
        var name   = jQuery(this).attr('data-name');
        var time   = jQuery(this).attr('data-time');
        var date   = jQuery(this).attr('data-date');
        if(phone !=''){
            sendSms(phone,bill_id,name,time,date,'football','book');
        }
         else {
            alert('Phone number Dose not Exists!!!');
         }
    });
    // jQuery('#lazertag_sms').on('click', function() {
    //     var bill_id = jQuery('#lazertag_bill_id').val();
    //     var phone   = jQuery('#lazertag_phone').val();
    //     if(phone !=''){
    //       sendSms(phone,bill_id);
    //     }
    //      else {
    //       alert('Phone number Dose not Exists!!!');
    //      }
    // });
      jQuery(document).on('change click','#football_sms_list_cancel',function() {
        
        var bill_id = jQuery(this).attr('data-id');
        var phone   = jQuery(this).attr('data-phone');
        var name   = jQuery(this).attr('data-name');
        var time   = jQuery(this).attr('data-time');
        var date   = jQuery(this).attr('data-date');
        if(phone !=''){
          if(confirm("Are you sure you want to Cancel this slot?"));
            {
              sendSms(phone,bill_id,name,time,date,'football','cancel');
            }
        }
         else {
            alert('Phone number Dose not Exists!!!');
         } 
        
    });

      jQuery(document).on('change click','#lazertag_sms_list_cancel',function() {
        
        var bill_id = jQuery(this).attr('data-id');
        var phone   = jQuery(this).attr('data-phone');
        var name   = jQuery(this).attr('data-name');
        var time   = jQuery(this).attr('data-time');
        var date   = jQuery(this).attr('data-date');
        if(phone !=''){
          if(confirm("Are you sure you want to Cancel this slot?"));
            {
              sendSms(phone,bill_id,name,time,date,'lazertag','cancel');
            }
        }
         else {
            alert('Phone number Dose not Exists!!!');
         } 
        
    });

    
    jQuery(document).on('change click','#lazertag_sms_list',function() {

        var bill_id = jQuery(this).attr('data-id');
        var phone   = jQuery(this).attr('data-phone');
        var name   = jQuery(this).attr('data-name');
        var time   = jQuery(this).attr('data-time');
        var date   = jQuery(this).attr('data-date');
        if(phone !=''){
          sendSms(phone,bill_id,name,time,date,'lazertag','book');
        }
         else {
          alert('Phone number Dose not Exists!!!');
         }
    });

//<---- End Print Function ---->

});
  
//<---- Start Search bar --->


  jQuery('#receipt_per_page,#member_name,#member_number, #football_bill_date,#football_bill_date_to,#bill_no,#bill_amt').live('change', function() {
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
              football_bill_date_to                            : jQuery('#football_bill_date_to').val(),
              bill_no                                       : jQuery('#bill_no').val(),
              bill_amt                                      : jQuery('#bill_amt').val(),

            },
            success: function (data) {
              jQuery('.football_listing').html(data);
            }
          });

  });

//F icon Search bar
  jQuery('.search_icons').live('click', function() {

      jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                        : 'football_listing',
              receipt_per_page                              : jQuery('#receipt_per_page').val(),
              member_name                                   : jQuery('#member_name').val(),
              member_number                                 : jQuery('#member_number').val(),
              football_bill_date                            : jQuery('#football_bill_date').val(),
                football_bill_date_to                            : jQuery('#football_bill_date_to').val(),
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

  //
  //<-- Start Gaming jQuery functions----->
  //


jQuery(document).ready(function () {
//<---- Start Print Function ---->
    jQuery('#gaming_print').on('click', function() {
        var bill_no   = jQuery('.gaming_bill_no_display').val();
        var id        = jQuery('.gaming_id').val();
        var datapass  =  printajax.internalprint+'/gaming-print/?bill_no='+bill_no+'&action=gaming_print';

          // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
            thePopup.print(); 
    });

//<---- End Print Function ---->


//<------Toggle Button ---->
    jQuery('.togBtn').on('change', function(){
        var on_off    = jQuery(this).prop('checked');
        var id        = jQuery(this).attr('data-sysid');
        var category  = jQuery(this).attr('data-catid');
        jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
                action                           : 'allocate',
                system_id                        : id,
                start_time                       : jQuery('.allocate_date').val(),
                end_time                         : jQuery('.allocate_date').val(),
                allocate                         : on_off,
                inv_id                           : jQuery('.inv_id').val(),
                pc_category                      : category,
            },
            success: function (member_no) {        
            }
        });
    });
//<---- End Toggle Button ----->
//<---- Start Search bar --->


  jQuery('#gaming_per_page,#gaming_member_name,#gaming_member_number, #gaming_bill_date,#gaming_bill_date_to,#gaming_bill_no,#gaming_bill_amt').on('change', function() {
         jQuery.ajax({
            method: "POST",
            url: frontendajax.ajaxurl,
            data: {
              action                                       : 'gaming_listing',
              gaming_per_page                              : jQuery('#gaming_per_page').val(),
              gaming_member_name                           : jQuery('#gaming_member_name').val(),
              gaming_member_number                         : jQuery('#gaming_member_number').val(),
              gaming_bill_date                             : jQuery('#gaming_bill_date').val(),
              gaming_bill_date_to                          : jQuery('#gaming_bill_date_to').val(),
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
            gaming_bill_date_to                          : jQuery('#gaming_bill_date_to').val(),
            gaming_bill_no                               : jQuery('#gaming_bill_no').val(),
            gaming_bill_amt                              : jQuery('#gaming_bill_amt').val(),

        },
      success: function (data) {
        jQuery('.gaming_listing').html(data);
      }
    });

  });
 ////<---- End Search bar --->

//Call Calculation function when enter Hours
    jQuery('.hours_gaming').live('change',function() {
        var selector = jQuery(this).parent().parent().parent();
        playing_hours(selector);
    });
//<--- End Call Function --->
});




//
//<-- Start Lazer Tag jQuery functions----->
//

//<----- Select 2 for lazer Tag------>
jQuery(document).ready(function () {

//<-------- call calculation when clicking player and hour change----->
    jQuery('.no_of_player_lazer_slot,.lazer_hours,.per_hour_price_lazertag,.lazertag_discount_percentage').on('change',function() {
        lazertag_calculation(); 
    });

//<-------- End call calculation when clicking player and hour change----->
//Lazer Tag Print
    jQuery('#lazertag_print').on('click', function() {
        var bill_no=jQuery('#lazertag_id').val();
        var datapass =  printajax.internalprint+'/lazertag-print/?bill_no='+bill_no+'&action=lazertag_print';

        // billing_list_single
        var thePopup = window.open( datapass, "Customer Listing","scrollbars=yes,menubar=0,location=0,top=50,left=300,height=500,width=750" );
        thePopup.print(); 
    });
//<---- Start Search bar --->


  jQuery('#lazertag_per_page,#lazertag_member_name,#lazertag_member_number, #lazertag_bill_date,#lazertag_bill_date_to,#lazertag_bill_no,#lazertag_bill_amt').on('change', function() {
     jQuery.ajax({
        method: "POST",
        url: frontendajax.ajaxurl,
        data: {
          action                                         : 'lazertag_listing',
          lazertag_per_page                              : jQuery('#lazertag_per_page').val(),
          lazertag_member_name                           : jQuery('#lazertag_member_name').val(),
          lazertag_member_number                         : jQuery('#lazertag_member_number').val(),
          lazertag_bill_date                             : jQuery('#lazertag_bill_date').val(),
          lazertag_bill_date_to                          : jQuery('#lazertag_bill_date_to').val(),
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
          lazertag_bill_date_to                          : jQuery('#lazertag_bill_date_to').val(),
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


});

function lazertag_calculation() {

    var checked = jQuery('.gametype').val();
    if(checked == 'slot'){
        var player = isNaN(parseFloat(jQuery('.no_of_player_lazer_slot').val())) ? 0 : parseFloat(jQuery('.no_of_player_lazer_slot').val());
    } else {
        var player = parseFloat(1);
    }
  
      var hours = isNaN(parseFloat(jQuery('.lazer_hours').val())) ? 0 :parseFloat(jQuery('.lazer_hours').val());
      var price_per= isNaN(parseFloat(jQuery('.per_hour_price_lazertag').val())) ? 0 : parseFloat(jQuery('.per_hour_price_lazertag').val());
      var total = player * hours * price_per; 
      jQuery('.lazertag_total_value').val(total);
      jQuery('.lazertag_total_value').text(total);


//Discount
    var member_discount=isNaN(parseFloat(jQuery('.lazertag_member_discount').val())) ? 0 :parseFloat(jQuery('.lazertag_member_discount').val());
    var disconut = isNaN(parseFloat(jQuery('.lazertag_discount_percentage').val())) ? 0 :parseFloat(jQuery('.lazertag_discount_percentage').val());

    var member_discount_val =(total*member_discount)/100;
    var discount_val =(total*disconut)/100;

    jQuery('.lazertag_member_discount_val').val(member_discount_val);
    jQuery('.lazertag_member_discount_val_div').text(member_discount_val);
    jQuery('.lazertag_discount_value').val(discount_val);
    jQuery('.lazertag_discount_value_div').text(discount_val);

    var after_discount_total = total - (member_discount_val + discount_val);


    //GST 
      var gst = jQuery('.lazertag_gst').val();
      var gst_value = (after_discount_total*gst)/100;
      jQuery('.lazertag_gst_value').val(gst_value);
      jQuery('.lazertag_gst_value_txt').text(gst_value);

    var final_lazer= Math.ceil(after_discount_total + gst_value);

    jQuery('.final_bill_lazertag_div').text(final_lazer);
    jQuery('.final_bill_lazertag').val(final_lazer);
}



    //<------- End Lazer Tag js-------->


//Football Pricing

//<-- Common functions----->
jQuery(document).ready(function(){
  //<--- Start Delete Billling --->
    jQuery('.c-delete-system').live( "click", function() {
        if(confirm('Are you sure you want to delete this element?')){
            var data=jQuery(this).attr("data-id");
            window.location.replace('admin.php?page=add_gaming_system&id='+data+'&action=delete');
        }
    });
   //<--- End Delete Billling --->
    jQuery('.new_search_billing').on('change', function(e) {
        var capital_str = jQuery(this).val();
        var res = capital_str.split(" ");
        var full_str = '';
        jQuery.each(res, function(e, value){
             if(isUpperCase(value)){
                full_str = full_str + value + ' ';
             } 
             else {
                value = value.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                    return letter.toUpperCase();
                });
                full_str = full_str + value + ' ';
             }
        });
        jQuery(this).val(full_str.trim());
    });
//<-------- search customer using name and mobile------>   
    jQuery( ".search_inv_id" ).autocomplete ({
        source: function( request, response ) {
            jQuery.ajax({
              url       : frontendajax.ajaxurl,
              type      : 'POST',
              dataType  : "json",
              data      : {
                action      : 'gamingBillingMemberSearch',
                search_key  : request.term,
                date        : jQuery('.gaming_date').val(),
              },
                success: function( data ) {
                    response(jQuery.map( data.result, function( item ) {
                        return {
                            inv_id            : item.inv_id,
                            value             : item.gaming_member_name +'( INV'+item.inv_id+')',
                            name              : item.gaming_member_name,
                            phone             : item.gaming_member_phone_number,
                            membership_no     : item.membership_no,  
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            console.log(ui.item.inv_id);
            jQuery('.alrdy_alloct_inv_id').val(ui.item.inv_id);
            jQuery('.alrdy_alloct_mem_name').val(ui.item.name);
            jQuery('.alrdy_alloct_mem_phone').val(ui.item.phone);
        }
    });

    jQuery('.gaming_search').on('click',function(){
        var inv_id = parseInt(jQuery('.alrdy_alloct_inv_id').val());
        window.location.href="admin.php?page=allocate_gaming_system&pages=1&inv_id="+inv_id+"&action=update";
    });
});
//<--- End Common functions ---->
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode < 48 || charCode > 57))
        return false;
    return true;
}
function isNumberKeyWithDot(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode;
if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57))
     return false;

return true;
}

function isUpperCase(str) {
  return str === str.toUpperCase();
}




function Football_billing(){

  var gst             = 0;
  var gst_value       = 0;
  var member_discount = 0;
  var discount        = 0;
  var bill_amount     = 0;
  var sub_total       = 0;
  var final_val       = 0;
  jQuery('.no_of_player').each(function(){
    var hours = parseFloat(jQuery(this).parent().parent().parent().find('.no_of_player').val());
    hours = isNaN(hours) ? 0 : hours;
    var price = parseFloat(jQuery(this).parent().parent().parent().find('.per_hour_price').val());
    price = isNaN(price) ? 0 : price;
    var bill_amount = hours * price;
    jQuery(this).parent().parent().parent().find('.total_value').val(bill_amount);
    jQuery(this).parent().parent().parent().find('.total_value_div').text(bill_amount);
    sub_total = bill_amount + sub_total;
  });




//calculate discount
  
  discount                  =  isNaN(parseFloat(jQuery('.discount_percentage').val())) ? 0 : parseFloat(jQuery('.discount_percentage').val());
  member_discount           =  isNaN(parseFloat(jQuery('.member_discount').val()))? 0 : parseFloat(jQuery('.member_discount').val());      
  var member_discount_value =  (member_discount == 0 )? 0 : (sub_total*member_discount)/100;
  var discount_value        =  (discount == 0)? 0 : (sub_total*discount)/100;
  var subtotal_after_discount =  parseFloat(sub_total)  - (member_discount_value + discount_value);


//get Gst
  gst                       = isNaN(parseFloat(jQuery('.gst').val())) ? 0 :parseFloat(jQuery('.gst').val());
  gst_value                 = (subtotal_after_discount * gst)/100;
  jQuery('.gst_value').text(gst_value);
  jQuery('.gst_value_input').val(gst_value);
  


//display discount  
  jQuery('.member_discount_value').val(member_discount_value);
  jQuery('.member_discount_value_div').text(member_discount_value);
  jQuery('.discount_value').val(discount_value);
  jQuery('.discount_value_div').text(discount_value);

//Final_value
  final_val = Math.ceil(subtotal_after_discount  + gst_value );
  jQuery('.final_bill_div').text(final_val);
  jQuery('.final_bill').val(final_val);
  

}

function GamingCalculation(){
    var sub_total = 0;

    jQuery('.no_of_mem_gaming').each(function(){
      var motionGame = jQuery(this).parent().parent().parent().find('.togBtn_game').attr('checked');
      console.log(motionGame);
      motionGame = (typeof motionGame === "undefined") ? "" : motionGame;
      
        var member = parseFloat(jQuery(this).parent().parent().parent().find('.no_of_mem_gaming').val());
        member = isNaN(member) ? 0 : member;
        var price = parseFloat(jQuery(this).parent().parent().parent().find('.gaming_total_value_cal').val());
        price = isNaN(price) ? 0 : price;
        var motion_hr_price = parseFloat(jQuery(this).parent().parent().parent().find('.gaming_total_value_cal_motion_hr').val());
        motion_hr_price = isNaN(motion_hr_price) ? 0 : motion_hr_price;
        var game = parseFloat(jQuery(this).parent().parent().parent().find('.no_of_games').val());
        game = isNaN(game) ? 1 : game;
        var hours = parseFloat(jQuery(this).parent().parent().parent().find('.hours_gaming').val());
        hours = isNaN(hours) ? 0 : hours;
         if(motionGame == 'checked'){
            var bill_amount = member * price * game;
           
         }
         else{
          var bill_amount = member * motion_hr_price * hours;
         } 

        jQuery(this).parent().parent().parent().find('.gaming_total_value').val(bill_amount.toFixed(2));
        jQuery(this).parent().parent().parent().find('.gaming_total_value_text').text(bill_amount.toFixed(2));
        sub_total = bill_amount + sub_total;
    });
    jQuery('.gaming_sub_tot').val(sub_total.toFixed(2));
    jQuery('.gaming_sub_tot').text(sub_total.toFixed(2));
    discount                    =  isNaN(parseFloat(jQuery('.discount_percentage').val())) ? 0 : parseFloat(jQuery('.discount_percentage').val());
    member_discount             =  isNaN(parseFloat(jQuery('.member_discount').val()))? 0 : parseFloat(jQuery('.member_discount').val());      
    var member_discount_value   =  (member_discount == 0 )? 0 : (sub_total*member_discount)/100;
    var discount_value          =  (discount == 0)? 0 : (sub_total*discount)/100;
    var subtotal_after_discount =  parseFloat(sub_total)  - (member_discount_value + discount_value);

//   console.log(member_discount);
  //get Gst
    gst                       = isNaN(parseFloat(jQuery('.gst').val())) ? 0 :parseFloat(jQuery('.gst').val());
    gst_value                 = (subtotal_after_discount * gst)/100;
    jQuery('.gst_value').text(gst_value.toFixed(2));
    jQuery('.gst_value_input').val(gst_value.toFixed(2));
  


//display discount
    jQuery('.member_discount_value').val(member_discount_value.toFixed(2));
    jQuery('.member_discount_value_div').text(member_discount_value.toFixed(2));
    jQuery('.discount_value').val(discount_value.toFixed(2));
    jQuery('.discount_value_div').text(discount_value.toFixed(2));

//Final_value
    final_val = Math.ceil(subtotal_after_discount  + gst_value );
    jQuery('.final_bill_div').text(final_val.toFixed(2));
    jQuery('.final_bill').val(final_val.toFixed(2));
}


 //<---- Start Email Function ---->
jQuery(document).ready(function(){
    jQuery('#football_email').on('click', function() {
        var bill_id  =  jQuery('#bill_id').val();
        var datapass =  printajax.internalprint+'/football-mail/?bill_id='+bill_id+'&action=football_email';
        console.log(datapass);
      // billing_list_single
    });

});
//<---- End Email Function ---->

function playing_hours(selector){
    jQuery.ajax({
        method:"POST",
        dataType : 'JSON',
        url:frontendajax.ajaxurl,
        data : {
            action        : 'gamingActualPlayedHoursCalculate',
            cat_id        : selector.find('.cat_id').val(),
            hours         : selector.find('.hours_gaming').val(),

        },
        success : function(data){
            selector.find('.gaming_total_value').val(data.total_price);
                if(data.category !='4'){
                    selector.find('.gaming_total_value_cal').val(data.total_price);
                    selector.find('.gaming_total_value_text').text(data.total_price);
                }
        }
    });
}


//Football Pricing 
jQuery(document).on("change",".billing_date",function(){
    jQuery('.all_sessions_morning').css('display','none');
    jQuery('.all_sessions_evening').css('display','none');
    jQuery.ajax({
        method:"POST",
        dataType : 'json',
        url:frontendajax.ajaxurl,
        data : {
            action        : 'football_pricing_ajax',
            date          : jQuery(this).val(),
            hours         : '60.00',

        },
        success : function(data){
            jQuery('.all_sessions_morning').html(data.morning.html);
            jQuery('.all_sessions_evening').html(data.evening.html);
            jQuery('.all_sessions_morning').css('display','block');
            jQuery('.all_sessions_evening').css('display','block');
            console.log(data);

        }
    });
});


function sendSms(phone,sale_id,name,time,date,billing_type,message_type){
  jQuery.ajax({
              method: "POST",
              url: frontendajax.ajaxurl,
              data: {
                  action        : 'smsGateWay',
                  phone_number  : phone,                
                  sale_id       : sale_id,
                  name          : name,
                  message_type  : message_type,
                  date          : date,
                  time          : time,
                  bill_from     : billing_type,

              },
              success: function (data) {
                   alert("Notification Sent to "+ phone);  
                    location.reload(true);
 
              }
          });
}

function makeid() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 50; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}




