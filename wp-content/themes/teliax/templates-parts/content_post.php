<section class="section bg l-news">
	<div class="container">
		<div class="mod-news text-content">
			<h2 class="title line-bt lagre text-center style-line2 blue2">The News Room </h2>
			<div class="row post-category">

 	<?php
 	$args = array(
 		'post_type'=>'post',
 		'post_status' => 'publish',
 		'posts_per_page' => '4',
 		'paged' => 1,
 		'category_name' => 'news_room'
 	);

 	$my_post = new WP_Query($args);
 	$number_page = $my_post->max_num_pages;
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
 	endif;?>

			</div>
		</div>	
	</div>
</section>
<?php if ($number_page > 1): ?>
<div class="l-load-more">
	<div class="container">
		<div class="text-center">
			<a href="#more" class="load-more" title="Load more news">LOAD MORE NEWS <i class="fa fa-angle-down block" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<?php endif; ?>

<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	var page = 2;
	var number_page = "<?php echo $number_page ?>";
	if (page <= number_page){
		jQuery(function($) {
		    $('body').on('click', '.load-more', function() {
		        var data = {
		            'action': 'load_posts_by_ajax',
		            'page': page,
		            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
		        };
		        $.post(ajaxurl, data, function(response) {
		            $('.post-category').append(response);
		            if (page == number_page){
		            	$('.l-load-more').hide();
		            }
		            page++;
		        });
		    });
		});
	}
</script>