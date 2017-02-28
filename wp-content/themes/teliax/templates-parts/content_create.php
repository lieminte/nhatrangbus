<section id="content">
    <section class="section l-login">
		<div class="container">
			<div class="mod-login text-content mg-top bg-fff">
				<div class="row">
					<div class="col-sm-5">
						<h3 class="title-login"><?php the_sub_field('title'); ?></h3>
						<form action="" class="form">
							<?php echo do_shortcode( '[contact-form-7 id="624" title="Create" html_class="form"]' ); ?>
						</form>
					</div>
					<div class="col-sm-7">
						<div class="login-right">
							<span class="text-midle">
								or
							</span>
							<h2><?php the_sub_field('title_right'); ?></h2>
							<p><?php the_sub_field('text_right'); ?><a href="<?php the_sub_field('link_login'); ?>" title="Login!">Login!</a></p>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</section>