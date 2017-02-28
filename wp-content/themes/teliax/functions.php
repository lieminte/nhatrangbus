<?php
	define('THEME_URI', get_stylesheet_directory());
	define('CORE', THEME_URI . "/core");
	require_once(CORE . "/init.php");

	if (!isset($content_width)){
		$content_width = 620;
	}

	add_filter('show_admin_bar', '__return_false');

	include get_template_directory() . '/core/helper/add_function_option_page.php';

	include get_template_directory() . '/core/helper/add_function_theme_setup.php';

	include get_template_directory() . '/core/helper/nav_menu.php';

	include get_template_directory() . '/core/helper/load_post.php';
?>