<?php 
/*
Template Name: Услуги
*/


get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-9">
			<h1>Наши услуги</h1>
		</div>
	</div>
	<div class="row">
		<?php 
			global $post;
			$args = array( 'post_type' => 'servises' );
			$myposts = get_posts( $args );
		 ?>
		 <?php foreach( $myposts as $post ){ setup_postdata($post); ?>
		<div class="col-md-3">
			<p><?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?></p>
		</div>
		<div class="col-md-9">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<?php } wp_reset_postdata(); ?>

	</div>
</div>



<?php get_footer(); ?>