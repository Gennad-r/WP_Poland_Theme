<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-img.jpg">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#052839">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#052839">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#052839">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

<?php include 'inc/bootstrap.php'; ?>

<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
	<div id="up-to-top" data="#top"><div></div></div>
	<!-- <div id="call-me"><div></div></div> -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="logo">
					<?php if (!is_front_page()) : ?>
					<a href="<?php echo home_url(); ?>">
					 <img src="<?php echo get_template_directory_uri(); ?>/img/logo-gear-along.svg" alt="logo"><div><?php bloginfo('name'); ?></div>
					</a>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-gear-along.svg" alt="logo"><div><?php bloginfo('name'); ?></div>
				<?php endif ?>
				</div>
				<div class="hamburger hamburger--elastic">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="social">
					<a href="#"><i class="ic ic-fb"></i></a>
					<a href="#"><i class="ic ic-inst"></i></a>
					<a href="viber://add?number=%2B380681762165"><i class="ic ic-viber"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<nav>
					<div class="navigation-menu">

						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>


					</div>
					<div class="right-navigation">
						<ul>
							<li><a href="#">RU</a> | <a href="#">UA</a> | <a href="#">EN</a></li>
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header> <!-- header -->
<div id="content" class="site-content">