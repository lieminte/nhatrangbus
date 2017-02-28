<footer id="footer" class="">
	<!-- begin footer bar -->
	<div class="footer-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<ul>
						<li>
							<a href="<?php echo home_url(); ?>/contact" title="CONTACT US">CONTACT US</a>
							<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'contact_us' ) ); ?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3">
					<ul>
						<li>
							<a href="<?php echo home_url(); ?>/category/news_room" title="BUSINESS VOICE ">BUSINESS VOICE </a>
							<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'business_voice_footer' ) ); ?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3">
					<ul>
						<li>
							<a href="<?php echo home_url(); ?>/about" title="ABOUT US ">ABOUT US </a>
							<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'about_us' ) ); ?>
							</ul>
						</li>
					</ul>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<h4>Follow Us</h4>
					<?php include get_template_directory() . "/templates-parts/social.php"; ?>
					<p class="teliax"><?php the_field('about', 'option'); ?></p>					
				</div> 
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<div class="logo-footer">
						<a href="<?php echo home_url(); ?>/home" title="<?php echo get_bloginfo(); ?>">
							<img src="<?php the_field('logo_scroll', 'option') ?>" alt="<?php echo get_bloginfo(); ?>">
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<h5>Address</h5>
					<address>
						<?php the_field('address', 'option'); ?>
					</address>
				</div>
				<div class="col-xs-6 col-sm-3">
					<h5>Help</h5>
					<?php the_field('help', 'option'); ?>
				</div>
				<div class="col-sm-3 hidden-xs">
					<p>
						<a href="<?php the_field('link_top', 'option') ?>" title="<?php the_field('button_top', 'option') ?>" class="btn btn-block btn-blue"><?php the_field('button_top', 'option') ?></a>
						<br>
						<a href="<?php the_field('link_bot', 'option') ?>" title="<?php the_field('button_bot', 'option') ?>" class="btn btn-block btn-border"><?php the_field('button_bot', 'option') ?></a>
					</p>
				</div>
			</div>
			<div class="six-space visible-xs"></div>
			<div class="row visible-xs">
				<div class="col-xs-6 col-sm-3">
					<a href="<?php the_field('link_top', 'option') ?>" title="<?php the_field('button_top', 'option') ?>" class="btn btn-blue"><?php the_field('button_top', 'option') ?></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php the_field('link_bot', 'option') ?>" title="<?php the_field('button_bot', 'option') ?>" class="btn btn-border"><?php the_field('button_bot', 'option') ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="four-space visible-xs"></div>
	<!-- the end footer bar -->

	<!-- begin footer-coprright -->
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<?php the_field('copyright', 'option') ?>
				</div>
				<div class="col-sm-7 text-right">
					<?php wp_nav_menu( array( 'theme_location' => 'term_of_use','container'=>'ul') ); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- the end footer-coprright -->
</footer>
<!-- the end footer -->
      </section>

    </div>

  </div>
  <div id="loadding" class="bg-gray">
    <div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/vendor.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>


<script type="text/javascript">
$(function() {

    // Call Gridder
    $('.gridder').gridderExpander({
        scroll: true,
        scrollOffset: 90,
        scrollTo: "member-v2",                  // panel or listitem
        animationSpeed: 400,
        animationEasing: "easeInOutExpo",
        showNav: true,                      // Show Navigation
        nextText: "Next",                   // Next button text
        prevText: "Previous",               // Previous button text
        closeText: '<i class="fa fa-times" aria-hidden="true"></i>',                 // Close button text
        onStart: function(){
            //Gridder Inititialized
        },
        onContent: function(){
            //Gridder Content Loaded
        },
        onClosed: function(){
            //Gridder Closed
        }
    });

});
</script>

</body>
</html>
