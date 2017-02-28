<section class="section section-content bg-gray">
	<div class="bg bg-desktop bg-section bg-style2 bg-full2" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
	<div class="table-div">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-left">
						<article class="text-content">
							<h2><?php the_sub_field('title'); ?></h2>
							<h4><?php the_sub_field('sub_title'); ?></h4>
							<?php
							if (have_rows('content')):
								while(have_rows('content')):the_row();?>
								<div class="row">
									<div class="col-sm-6">
										<div class="thumnail">
											<img src="<?php the_sub_field('icon'); ?>" alt="icon" class="block">
											<h3><?php the_sub_field('title'); ?></h3>
											<?php the_sub_field('description'); ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="thumnail">
											<img src="<?php the_sub_field('icon_right'); ?>" alt="icon" class="block">
											<h3><?php the_sub_field('title_right'); ?></h3>
											<?php the_sub_field('description_right'); ?>
										</div>
									</div>
								</div>	
								<?php
								endwhile;
							endif;?>								
						</article>
					</div>
					<div class="col-sm-6 visible-xs col-right no-padding">
						
						<img src="<?php the_sub_field('image'); ?>" alt="img">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>