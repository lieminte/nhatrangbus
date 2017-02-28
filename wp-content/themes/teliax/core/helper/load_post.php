<?php 
    
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
 	$args = array(
 		'post_type'=>'post',
 		'post_status' => 'publish',
 		'posts_per_page' => '4',
 		'paged' => $paged,
 		'category_name' => 'news_room'
 	);

 	$my_post = new WP_Query($args);

 	if ( $my_post->have_posts() ) : 
 		while ( $my_post->have_posts() ) : $my_post->the_post();?>
				<div class="col-sm-6 col-md-3">
					<div class="box-news items">
						<div class="box-img">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="img">
							</a>
						</div>
						<div class="box-text">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<?php echo mb_strimwidth(get_the_content(), 0, 200, '...');?>
							<p class="date">
								<?php the_time('j F'); ?>
							</p>
						</div>
					</div>
				</div>
			<?php	
	 	endwhile; 
 	endif;
    wp_die();
}
?>