<?php
get_header();

if ( have_posts() ) {

    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', get_post_format() );
    endwhile;

    if(function_exists("chaos_pagination")) {
        chaos_pagination();
    }   
} else {
    get_template_part( 'template-parts/content', 'none' );
}
get_footer();
?>