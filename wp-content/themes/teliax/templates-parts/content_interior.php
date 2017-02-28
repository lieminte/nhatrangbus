<section class="section section-content bg">
	<div class="bg bg-desktop bg-section" style="background-image: url(<?php the_sub_field('image_desktop'); ?>)"></div>
	<div class="table-div">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-left">
						<article class="text-content">
							<p>
								<img src="<?php the_sub_field('icon'); ?>" alt="">
							</p>
							<br>
							<?php the_sub_field('description'); ?>
							<br>
							<p class="text-uppercase font-montserrat small">
								<strong><?php the_sub_field('first_name'); ?></strong> | <?php the_sub_field('job_title'); ?>  <em><?php the_sub_field('company_name'); ?></em>
							</p>
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