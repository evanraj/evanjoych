jQuery(document).ready(function () {


    jQuery('#role_name').focus();

    jQuery(document).live('keydown', function(e){
        if(jQuery(document.activeElement).closest("#wpbody-content").length == 0) {
            var keyCode = e.keyCode || e.which; 
            if (keyCode == 9) { 
                e.preventDefault(); 
                jQuery('#role_name').focus()
            }
        }
    });

    jQuery('.role_cancel').live('keydown',function(e){
           var keyCode = e.keyCode || e.which; 
          if(event.shiftKey && event.keyCode == 9) {  
             e.preventDefault(); 
            jQuery('.role_reset').focus();
          }
          else if (event.keyCode == 9) { 
            e.preventDefault(); 
            jQuery('#role_name').focus();
          } 
          else {
            jQuery('.role_cancel').focus();
          }
    });



    // jQuery( ".role_submit" ).validate({
    //     rules: {
    //         role_name: {
    //             required: true,
    //         },
    //         role_slug : {
    //             required: true,

    //         },        
    //     },
    //     messages: {
    //         role_name: {
    //             required: 'Please Enter User name!',
    //         },
    //         role_slug : {
    //             required: 'Please Enter Password!',
    //         },
    //     }
    // });

    /*Add Roll Submit*/
    jQuery("#create_role").bind('submit', function (e) {
        jQuery('#lightbox').css('display','block');
        jQuery.ajax({
            type: "POST",
            dataType : "json",
            url: frontendajax.ajaxurl,
            data: {
                action : jQuery('#create_role .role_action').val(),
                data : jQuery('#create_role :input').serialize()
            },
            success: function (data) {
                clearPopup();
                jQuery('#lightbox').css('display','none');

                if(data.redirect != 0) { 
                    // setTimeout(function() {
                    //     managePopupContent(data);
                    // }, 1000);
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

function slugify(text){
  return text.toString().toLowerCase()
    .replace(/\s+/g, '_')           // Replace spaces with -
    .replace(/[^\u0100-\uFFFF\w\-]/g,'_') // Remove all non-word chars ( fix for UTF-8 chars )
    .replace(/\-\-+/g, '_')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '')            // Trim - from end of text
    .replace(/-+/g, '_');            // Trim - from end of text
}

function popItUp (title, content) {
    jQuery('#my-button-new').click();

    jQuery('.popup_header').html(title);
    jQuery('.popup_container').html(content);

}
function clearPopup() {
    jQuery('.popup_header').html('');
    jQuery('.popup_container').html('');
}