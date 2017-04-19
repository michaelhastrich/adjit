<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Rancho|Lato:400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	
  </head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper clear">

			<!-- header -->
			<header class="header clear" role="banner">
					<div class="header-row clear">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Adjust in Time - Managementproductiviteit" class="logo-img">
							</a>
						</div>
						<div class="header-rhs clear">
							<div class="search">
								<?php get_template_part('searchform'); ?>
							</div>
							<!-- /logo -->
							<!-- nav -->
							<nav class="sec-nav">
								<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
							</nav>
							<!-- /nav -->
							<span class="phone icon-phone">010 307 28 97</span>
						</div>
					</div>

					<!-- nav -->
					<nav class="main-nav">
						<a href="#" class="icon-menu">menu</a>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>
					<!-- /nav -->
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p class="breadcrumbs">','</p>');
					} ?>
			</header>
			<!-- /header -->
