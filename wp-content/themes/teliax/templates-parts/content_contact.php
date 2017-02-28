<section id="content">
   <section class="section bg l-contact">
		<div class="container mod-contact text-content">
			<h2><?php the_sub_field('title_form'); ?></h2>
			<div class="five-space"></div>
			<div class="row row-50">
				<div class="col-sm-5 col-left">
					<article class=" form-contact">
						<?php 
							$form = ltrim((rtrim(get_sub_field('form_contact'), "]")),"[");
							echo do_shortcode( '['.$form.' html_class="form"]' 		); ?>
					</article>
				</div>
				<div class="col-sm-7 col-right">
					<div class="five-space visible-xs"></div>
					<div class="contact-info">
						<h3><?php the_sub_field('title'); ?></h3>
						<?php the_sub_field('description'); ?>
						<br>
						<?php
						if (have_rows('content')):
            				while(have_rows('content')):the_row();?>						
								<div class="row row-30">
									<div class="col-sm-6 left">
										<h4><?php the_sub_field('title_left'); ?></h4>
										<?php the_sub_field('content_left'); ?>
									</div>
									<div class="col-sm-6 right">
										<h4><?php the_sub_field('title_right'); ?></h4>
										<?php
										if (get_sub_field('content_right') == null):
											include get_template_directory() . '/templates-parts/social.php';
										else:?>
											<?php the_sub_field('content_right'); 
										endif;	?>						
									</div>
								</div>
							<?php
							endwhile;
						endif;?>						
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
