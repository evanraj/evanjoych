<div class="widget-content module table-simple table-head-bg">
    <?php include( get_template_directory().'/inc/admin/credits/list-template/list-credits.php' ); ?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
    	jQuery("#member_id").live('change', function(){
            var baseUri = '<?php echo menu_page_url( 'list_credits', 0 ) ?>';
            var member_id = jQuery('#member_id').val();
            console.log(member_id);
            var redirectTo = baseUri  + "&member_id=" + member_id;
            redirectTo += '&action=credit';
            location.replace(redirectTo);
        });
        jQuery("#credit_search").live('click', function(){
            var baseUri = '<?php echo menu_page_url( 'list_credits', 0 ) ?>';
            var member_id = jQuery('#member_id').val();
            console.log(member_id);
            var redirectTo = baseUri  + "&member_id=" + member_id;
            redirectTo += '&action=credit';
            location.replace(redirectTo);
        });
    });
</script>

