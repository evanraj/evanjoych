    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php //echo get_template_directory_uri() ?>/inc/js/bootstrap.min.js"></script> -->
    <script>
        $(window).on("load resize scroll", function (e) {
            var window_height = jQuery(window).height();
            var event_height = jQuery('.event').height();
            var header_height = jQuery('.logo-section').height();
            var slider_height = (window_height) - (header_height + event_height) + 'px';
            jQuery('.slide .item img').css('height', slider_height);
            var body_height = jQuery('body')[0].scrollHeight;
            jQuery('.bg').css('height', body_height + 'px')
        });


        $("#menu-close").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });


        $('#carousel-example-generic').bind('slide.bs.carousel', function (e) {
            jQuery('.quarter-circle-bottom-right').find('.active').removeClass('active');
            jQuery('.circle-menu').removeClass('active');
            
            var active_class = '.menu-data-' + $(e.relatedTarget).attr('data-menu');
            $(active_class).addClass('active');
            console.log(active_class);
        });
        
    </script>
    <!-- <script src="js/script.js"></script> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php //echo get_template_directory_uri() ?>/inc/js/bootstrap.min.js"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/inc/js/jquery.bxslider.js"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/inc/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow27.js"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/inc/js/viewportchecker.js"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/inc/js/script.js"></script> -->
    <?php wp_footer(); ?>
    </body>
</html>
    

 
