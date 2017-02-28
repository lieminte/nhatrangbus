 <section class="section section-content <?php echo implode(" ", (array)get_sub_field('background_color_option')); ?>">
	<div class="bg bg-desktop bg-section <?php echo implode(" ", (array)get_sub_field('background_image_option')); ?>" style="background-image: url(<?php the_sub_field('image_desktop'); ?>)"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-left">
				<article class="text-content <?php the_sub_field('style_text_content'); ?>">
					<h2><?php the_sub_field('title'); ?></h2>
					<h4><?php the_sub_field('detail_title'); ?></h4>
					<?php the_sub_field('description'); ?>
					<?php if (get_sub_field('name_button') != null): ?>
					<p>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('name_button'); ?>" class="btn btn-blue2"><?php the_sub_field('name_button'); ?></a>
					</p>
					<?php elseif (get_sub_field('insert_link_detail')[0] == "yes"):
								wp_nav_menu( array( 'theme_location' => 'link_detail', 'container'=>'ul', 'menu_class'=>'ls-none ul-inline-block text-uppercase style-ul') );
						endif;		
					 ?>
				</article>
			</div> 
			<div class="col-sm-7 visible-xs col-right no-padding">
				<img src="<?php the_sub_field('image_mobile'); ?>" alt="img">
			</div>
		</div>
	</div>
</section>
