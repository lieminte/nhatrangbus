 <section class="section section-content <?php echo implode(" ", (array)get_sub_field('background_color_option')); ?>">
	<div class="table-div">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-left">
						<article class="text-content">
							<h2><?php the_sub_field('title'); ?></h2>
							<h4><?php the_sub_field('detail_title'); ?></h4>
							<?php the_sub_field('description'); ?>
							<?php if (get_sub_field('name_button') != null): ?>
								<p>
									<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('name_button'); ?>" class="btn btn-blue2"><?php the_sub_field('name_button'); ?></a>
								</p>
							<?php endif; ?>	
						</article>
					</div>
					<div class="col-sm-6 col-right text-right">
						<img src="<?php the_sub_field('image'); ?>" alt="img">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>