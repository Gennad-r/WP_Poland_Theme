<?php 
/*
Template Name: Кто мы
*/


get_header(); ?>
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

	<?php $we_are = get_post(1); ?>
	<div class="col-md-3">
		<img src="<?php echo get_the_post_thumbnail_url(1); ?>" class="img-responsive" alt="we-are">
	</div>
	<div class="col-md-9">
		<?php echo preg_replace('/(^.*?)$/m', '<p>$1</p>', $we_are->post_content); ?>
	</div>
	</div>
</div>



<?php get_footer(); ?>