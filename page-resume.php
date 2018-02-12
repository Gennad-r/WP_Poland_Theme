<?php
    /*if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
	<?php while (have_posts()) : the_post()	?>
		<p><?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?></p>
		<?php the_content(); ?>
	<?php endwhile ?>
</div>

<?php get_footer(); ?>



