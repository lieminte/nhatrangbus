<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="fragment" content="!">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">

<meta name="format-detection" content="telephone=no">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,600italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/vendor.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/print.css" media="print">

<!-- add meta viewport -->
<script>
	if(window.innerWidth < 767){
		var viewPortTag=document.createElement('meta');
		viewPortTag.id="viewport";
		viewPortTag.name = "viewport";
		viewPortTag.content = "width=580px";
		document.getElementsByTagName('head')[0].appendChild(viewPortTag);
	}
	else{
		var viewPortTag=document.createElement('meta');
		viewPortTag.id="viewport";
		viewPortTag.name = "viewport";
		viewPortTag.content = "width=1024px";
		document.getElementsByTagName('head')[0].appendChild(viewPortTag);
	};
</script>
<?php wp_head(); ?>
</head>
<body>
  <div class="wrapper home-page">
    <header id="header">
    <div class="header-top hidden-xs">
        <div class="container text-right">
            <div class="desktop-header-top">
                <p class="phone-header"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('telephone', 'option') ?></p>
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container'=>'ul', 'menu_class'=> 'nav-top ls-none' ) ); ?>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-3 col-left ps-rv">
                     <div class="logo">
 	<a href="<?php echo home_url(); ?>/home" title="<?php echo get_bloginfo(); ?>">
 		<img src="<?php the_field('logo', 'option') ?>" alt="<?php echo get_bloginfo(); ?>" class="active">
 		<img src="<?php the_field('logo_scroll', 'option') ?>" class="sroll hidden" alt="<?php echo get_bloginfo(); ?>">
 	</a>
 </div>
                </div>
                <div class="col-xs-4 visible-xs ps-rv">
                    <div class="navbar-header text-right">
                        <button type="button" class="menu-control">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-9 col-right text-right l-menu">
                    <div class="visible-xs mobile-header-top"></div>
                    <div class="menu-home text-right">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container'=>'ul',
                            'menu_class' => 'nav-menu',
                            'menu_id' => 'primary-menu',
                            'walker' => new Teliax_Nav_Walker,
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>