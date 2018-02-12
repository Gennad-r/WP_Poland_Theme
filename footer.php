<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poland
 */

?>

</div><!-- #content -->

<footer>
	<div class="container-fluid">
		<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-4 col-xs-12">
					<div class="logo">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="logo"><div><?php bloginfo('name'); ?></div></a>
					</div>
					<p>Краткая информация о компании</p>
				</div>
				<div class="col-lg-2 col-md-4 col-xs-4">
					<div class="bottom-nav">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
						
					</div>
				</div>
				<div class="col-lg-3  col-md-4 col-xs-8">
					<div class="footer-address footer-holder">
						<p>город Харьков,<br>ул. Богдана Хмельницкого, 18</p>
					</div>
				</div>
				<div class="col-lg-2  col-md-4 col-xs-8">
					<div class="footer-working-time footer-holder">
						<p>Пн-Пт: 10:00 — 19:00</p>
						<p>Сб: 11:00 – 14:00</p>
					</div>
					<div class="footer-phones footer-holder">
						<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
						<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
						<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
					</div>
					<div class="footer-email footer-holder">
						<p><a href="mailto:rabota.info.eu@gmail.com">rabota.info.eu@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Все права защищены</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>
<?php wp_footer(); ?>
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=9bde282aa582f4aeada15d863df9e8c0" charset="UTF-8" async nomaps></script>
</body>
</html>
