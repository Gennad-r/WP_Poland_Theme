<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
	<div class="row">
	<?php while (have_posts()) : the_post()	?>
		<div class="col-md-12">
			<p><?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?></p>
			<?php the_content(); ?>
		</div>
	<?php endwhile ?>
	</div>
</div>
<?php get_footer(); ?>