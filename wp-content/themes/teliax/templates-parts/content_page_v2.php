<section class="section bg-gray section-content <?php echo implode(" ", (array)get_sub_field('background_color_option')); ?>">
	<div class="bg bg-desktop bg-section <?php echo implode(" ", (array)get_sub_field('background_image_option')); ?>" style="background-image: url(<?php the_sub_field('image_desktop'); ?>)"></div>
	<div class="table-div">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-left">
						<article class="text-content <?php the_sub_field('style_text_content'); ?>">
							<h2><?php the_sub_field('title'); ?></h2>
							<h4><?php the_sub_field('detail_title'); ?></h4>
							<?php the_sub_field('description'); ?>
							<?php if (get_sub_field('rep_mail') != null): ?>
								<p class="font-montserrat color-gray style-p">
									<strong>
										<?php the_sub_field('title_mail'); ?><br>
										<a href="mailto:<?php the_sub_field('rep_mail');?>" title="<?php the_sub_field('rep_mail');?>"><?php the_sub_field('rep_mail'); ?></a> 
									</strong>
								</p>
							<?php endif; ?>

							<?php if (get_sub_field('name_button') != null): ?>	
								<p class="btn-bottom">
									<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('name_button'); ?>" class="btn btn-blue2"><?php the_sub_field('name_button'); ?></a>
									<img src="<?php the_sub_field('sub_image_desktop'); ?>" alt="img" class="img-btn hidden-xs">
									<img src="<?php the_sub_field('sub_image_mobile'); ?>" alt="img" class="img-btn visible-xs">
								</p>
							<?php endif; ?>
							<?php if (get_sub_field('insert_link_detail')[0] == "yes"):
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
		</div>
	</div>
</section>