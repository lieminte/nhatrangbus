<section class="section section-content bg l-pricing <?php echo implode(" ", (array)get_sub_field('background_color')); ?>">
	<div class="container ">
		<div class="mod-pricing text-content">
			<div class="row row-50">
				<div class="col-sm-6 col-left">
					<div class="box-pricing">
						<img src="<?php the_sub_field('icon'); ?>" alt="img" class="icon-pricing">
						<h3 class="title-pricing"><?php the_sub_field('title'); ?></h3>
						<div class="box-price">
							<span class="price"><?php the_sub_field('price'); ?></span>
							<span class="number-pricing"><?php the_sub_field('number_pricing'); ?></span>
							<span class="mo"><?php the_sub_field('mo'); ?></span>
						</div>
						<?php the_sub_field('description'); ?>
						<?php the_sub_field('list_1'); ?>
						<ul class="style-ul-v3">
							<?php the_sub_field('list_2'); ?>
						</ul>
						<p>
							<a href="<?php the_sub_field('link'); ?>" class="btn btn-blue btn-bottom" title="<?php the_sub_field('name_button'); ?>"><?php the_sub_field('name_button'); ?></a>
						</p>

					</div>
				</div>
				<div class="col-sm-6 col-right">
					<div class="box-pricing">
						<img src="<?php the_sub_field('icon_right'); ?>" alt="img" class="icon-pricing">
						<h3 class="title-pricing"><?php the_sub_field('title_right'); ?></h3>
						<div class="box-price">
							<span class="price"><?php the_sub_field('price_right'); ?></span>
							<span class="number-pricing"><?php the_sub_field('number_pricing_right'); ?></span>
							<span class="mo"><?php the_sub_field('mo_right'); ?></span>
						</div>
						<?php the_sub_field('description_right'); ?>
						<ul class="style-ul-v3">
							<?php the_sub_field('list_2_right'); ?>
						</ul>
						<p>
							<a href="<?php the_sub_field('link_right'); ?>" class="btn btn-blue btn-bottom" title="<?php the_sub_field('name_button_right'); ?>"><?php the_sub_field('name_button_right'); ?></a>
						</p>

					</div>
				</div>
			</div>
		</div>

	</div>
</section>