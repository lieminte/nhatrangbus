<?php get_header(); ?>

<?php 
	$obj = get_queried_object();
	$key = $obj->taxonomy.'_'.$obj->term_id;
	if( have_rows('flexible_content', $key) ):
        while ( have_rows('flexible_content', $key) ) : the_row();
            include get_template_directory() . '/templates-parts/'.get_row_layout().'.php';
        endwhile;
    endif;
?>		

<?php get_footer(); ?>