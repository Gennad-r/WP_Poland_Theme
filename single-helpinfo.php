<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package poland
 */

get_header(); ?>
		<div class="container">
				<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="row">
					<div class="col-md-3"><?php the_post_thumbnail( 'full', array('class' => 'img-responsive')); ?></div>
					<div class="col-md-9">
						<h1><?php the_title( ); ?></h1>
						<?php the_content( ); ?>
					</div>
			</div>
					<?php endwhile; ?>
		</div>


<?php
get_footer();
