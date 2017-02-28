 <section id="content">
       <section class="section l-news-detail">
	<div class="container">
		<div class="mod-news-detail mg-top bg-fff">
			<div class="text-right">
				<div class="dropdown drop-share">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Share
					</button>
					<i class="fa fa-chevron-down bs-caret" aria-hidden="true"></i>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li class="disabled"><a href="#!">Share</a></li>
						<li><a href="#!">FaceBook</a></li>
						<li><a href="#!">Google</a></li>
					</ul>
				</div>
			</div>
			<div class="row row-30">
				<div class="col-sm-8 col-left">
					<div class="text-content text-detail pd-l30">
						<h3><?php the_sub_field('title_left'); ?></h3>
						<?php the_sub_field('description_left'); ?>
					</div>
				</div>
				<div class="col-sm-4 col-right">
					<div class="side-bar">
						<div class="hight-light">
							<h3><?php the_sub_field('title_box'); ?></h3>
							<p>
								<em>
									<?php the_sub_field('description_box'); ?>
								</em>
							</p>
						</div>
					</div>
				</div>
			</div>
			<p>
				<img src="<?php the_sub_field('image'); ?>" alt="img">
			</p>
			<div class="text-content text-detail pd-l30">
				<h3><?php the_sub_field('title_content'); ?></h3>
				<div class="row">
					<div class="col-sm-8 col-left">
						<?php the_sub_field('description_content'); ?>
					</div>
					<div class="col-sm-4 col-left">
						<div class="side-bar margin2">
							<p>
								<img src="<?php the_sub_field('image_content'); ?>" alt="img">
							</p>

						</div>
					</div>
				</div>

				<div class="blockquote text-center">
					<blockquote>
						<p class="lead">
							<?php the_sub_field('text_quote'); ?>
						</p>
						<span class="block m-cart-name"><?php the_sub_field('author'); ?></span>
					</blockquote>
				</div>
				<div class="row">
					<div class="col-sm-8 col-left">
						<?php the_sub_field('content_end'); ?>
						<br>
						<hr class="hidden-xs">
					</div>
					<div class="col-sm-4 col-left">
						<div class="side-bar margin2">
							<p><img src="<?php the_sub_field('image_content_end'); ?>" alt="img"></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="five-space"></div>
		</div>
	</div>
</section>