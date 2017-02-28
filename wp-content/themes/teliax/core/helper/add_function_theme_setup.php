<?php
	if (!function_exists('teliax_theme_setup')){
		function teliax_theme_setup(){

			$languages_folder = THEME_URI . '/languages';
			load_theme_textdomain('teliax', $languages_folder);

			add_theme_support('automatic-feed-links');

			add_theme_support('post-thumbnails');

			add_theme_support('title-tag');

			$default_background = array(
				'default-color' => '#e8e8e8'
			);
			add_theme_support('custom-background', $default_background);


			register_nav_menus( array(
			  'navigation_menu' => __( 'Navigation Menu', 'teliax' ),
			  'primary' => __( 'Primary Menu', 'teliax' ),
			  'secondary'  => __( 'Secondary Menu', 'teliax' ),
			  'contact_us'  => __( 'Contact Us', 'teliax' ),
			  'business_voice'  => __( 'Business Voice', 'teliax' ),
			  'business_voice_footer'  => __( 'Business Voice Footer Menu', 'teliax' ),
			  'about_us'  => __( 'About Us', 'teliax' ),
			  'about'  => __( 'About', 'teliax' ),
			  'term_of_use'  => __( 'Term of Use', 'teliax' ),
			  'link_detail' => __( 'Link Detail', 'teliax' ),
			  'footer_menu' => __( 'Footer Menu', 'teliax' ),
			 ) );

		}
		add_action('init', 'teliax_theme_setup');
	}
?>