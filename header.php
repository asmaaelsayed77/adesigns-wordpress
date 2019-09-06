<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.easy_slides.css">
		<!-- custom css -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>


		<!-- navigation-->		
		<nav class="navbar navbar-light bg-light navbar-expand-sm sticky-top">
			<div class="container-fluid">	
				
				<a class="navbar-brand" style="color: #3c1767;" href="<?php echo home_url(); ?>"> <i class="fas fa-feather-alt fa-2x"></i>A Designs</a>
	
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					  <span class="navbar-toggler-icon"></span>
				</button>

						<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'collapsibleNavbar',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
						?>
	
			</div><!--container-->
		</nav><!-- nav -->