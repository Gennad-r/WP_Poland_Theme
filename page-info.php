<?php get_header(); ?>

<div class="container helpfull-single-page">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
	<?php 

	$args = array(
		'post_type' => 'helpinfo'
	);
	$all_info_posts = new WP_Query($args); 
	if ($all_info_posts->have_posts()) : ?>
	<div class="row">
	<?php while ($all_info_posts->have_posts()) : $all_info_posts->the_post(); ?>
		<div class="col-md-3 col-sm-4 col-xs-6 margin-bottom">
			<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?></a>
			<h2><?php the_title(); ?></h2>
		</div>


	<?php endwhile ?>
	</div>
	<?php endif; wp_reset_postdata(); ?>
	
</div>



<?php get_footer(); ?>