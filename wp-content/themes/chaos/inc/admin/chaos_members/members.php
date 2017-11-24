
<?php
    /*Updated for filter 11/10/16*/
    if(isset($_POST['action']) && $_POST['action'] == 'chaos_members_list') {
        $ppage          = $_POST['per_page'];
        $membership_no  = $_POST['membership_no'];
        $name           = $_POST['name'];
        $phone          = $_POST['phone'];
    } else {
        $ppage          = isset( $_GET['ppage'] ) ? abs( (int) $_GET['ppage'] ) : 10;
        $membership_no  = isset( $_GET['membership_no'] ) ? abs( (int) $_GET['membership_no'] ) : '';
        $name           = isset( $_GET['name'] ) ? abs( (int) $_GET['name'] ) : '';
        $phone          = isset( $_GET['phone'] ) ? abs( (int) $_GET['phone'] ) : '';
    }
?>
<h1>List Members</h1>
<div class="search_bar members_filter">
    <label>Page :</label>
        <select name="per_page" id="per_page">
            <option value="5" <?php echo ($ppage == 5) ? 'selected' : ''; ?>>5</option>
            <option value="10" <?php echo ($ppage == 10) ? 'selected' : ''; ?>>10</option>
            <option value="15" <?php echo ($ppage == 15) ? 'selected' : ''; ?>>15</option>
            <option value="20" <?php echo ($ppage == 20) ? 'selected' : ''; ?>>20</option>
            <option value="50" <?php echo ($ppage == 50) ? 'selected' : ''; ?>>50</option>
            <option value="100" <?php echo ($ppage == 100) ? 'selected' : ''; ?>>100</option>
        </select>
    <input type="text" name="membership_no" id="membership_no" autocomplete="off" placeholder="Membership No" value=""> 
    <input type="text" name="name" id="name" autocomplete="off" placeholder="Name" value=""> 
    <input type="text" name="phone" id="phone" autocomplete="off" placeholder="Phone No" value=""> 
</div>

<div class="widget-content module table-simple list_members table-head-bg">
    <?php include( get_template_directory().'/inc/admin/chaos_members/list-template/list-chaos-members.php' ); ?>
</div>


    
<script type="text/javascript">
    jQuery(document).ready(function(){
    var baseUri = '<?php echo menu_page_url( 'add_chaos_member', 0 ) ?>';
    jQuery(".btn-edit").live('click', function(){
        var reqid = jQuery(this).data('reqid');
        var redirectTo = baseUri  + "&member_id=" + reqid;
        redirectTo += '&action=edit';
        location.replace(redirectTo);
    });
    
    jQuery(".btn-delete").live('click', function(){
        var baseUri = '<?php echo menu_page_url( 'list_chaos_member', 0 ) ?>';
        var reqid = jQuery(this).data('reqid');        
        var redirectTo = baseUri  + "&member_id=" + reqid;
        redirectTo += '&action=delete';
        location.replace(redirectTo);
        // jQuery('#dialog-confirm').html(' ');
        // jQuery('#dialog-confirm').html('Delete Reason: <input type="text" id="delete_reason">');
        // jQuery("#dialog-confirm").dialog("open").on("dialogclose", function(event, ui) {
        //     if (jQuery(this).data("state") == "confirmed") {
                
        //     }
        // });
    });
    
    jQuery(".btn-credit").live('click', function(){
        var baseUri = '<?php echo menu_page_url( 'list_credits', 0 ) ?>';
        var reqid = jQuery(this).data('reqid');
        console.log(reqid);
        var redirectTo = baseUri3  + "&member_id=" + reqid;
        redirectTo += '&action=credit';
        location.replace(redirectTo);
    });
});
</script>

<script type="text/javascript">
    jQuery('.members_filter #per_page, .members_filter #membership_no, .members_filter #name, .members_filter #phone').on('change', function(){
    var per_page        = jQuery('#per_page').val();
    var membership_no   = jQuery('#membership_no').val();
    var name            = jQuery('#name').val();
    var phone            = jQuery('#phone').val();
    jQuery.ajax({
      type: "POST",
      url: frontendajax.ajaxurl,
      data: {
          per_page      : per_page,             
          membership_no : membership_no,             
          name          : name,             
          phone         : phone,             
          action        : 'chaos_members_list'
      },
      success: function (data) {
        console.log(membership_no);
        jQuery('.list_members').html(data)
      }
    });
});

</script>



