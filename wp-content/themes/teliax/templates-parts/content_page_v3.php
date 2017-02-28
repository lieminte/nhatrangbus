<section class="section section-content <?php echo implode(" ", (array)get_sub_field('background_color_option')); ?>">
	<div class="table-div">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-left">
						<article class="text-content <?php the_sub_field('style_text_content'); ?>">
							<h2><?php the_sub_field('title'); ?></h2>
							<h4><?php the_sub_field('detail_title'); ?></h4>
							<?php the_sub_field('description'); ?>
							
							<?php if (get_sub_field('name_button') != null): ?>
								<p>
									<a href="<?php the_sub_field('link_button'); ?>" title="<?php the_sub_field('name_button'); ?>" class="btn btn-blue2"><?php the_sub_field('name_button'); ?></a>
								</p>
							<?php endif; ?>
						</article>
					</div>
					<div class="col-sm-6 col-right">
						<div class="mod-video ps-rv margin2">
							<div>
								<iframe id="video" type="text/html" width="100%" height="322" src="<?php the_sub_field('link_youtube'); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="control-video overlay-video ps-as bg" style="background-image: url(<?php the_sub_field('image_video'); ?>)">
								<i class="fa fa-play ps-as" aria-hidden="true"></i>
							</div>
							<img src="<?php the_sub_field('image_top_video'); ?>" alt="img" class="<?php the_sub_field('position_image'); ?>">
						</div>
					</div>
				</div>
				<?php 
				if (have_rows('content')):?>
					<div class="two-space hidden-xs"></div>
					<hr class="border-gray">
					<div class="row row-30 text-content">
					<?php					
					while(have_rows('content')):the_row();?>				
				
					<div class="col-sm-4">
						<div class="thumnail">
							<h3 class="text-center"><?php the_sub_field('title'); ?></h3>
							<?php the_sub_field('description'); ?>
						</div>
					</div>
					<?php
					endwhile;?>

				</div>
				<?php
				endif;?>
			</div>
		</div>
	</div>
</section>