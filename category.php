<?php get_header(); ?>


--------------------------------- category.php
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
<main  class="clearfix">
	<div class="post-holder">
		<?php if(have_posts()) : 
		while(have_posts()) : the_post(); ?>
		<section>
			<a href= "<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			<h2><?php the_title(); ?></h2>
			<span><?php echo CFS()->get('intro'); ?></span>
		</section>
		<?php endwhile;
		else: ?>	
			<p>Записей нет</p>
		<?php endif ?>
	</div>
	<?php the_posts_pagination(); ?>
	<div  class="main-footer clearfix">
		<a href= "#">Our Blog</a>
		<a href= "#">See Portfolio</a>
	</div>
</main>
	</div>
</div>



<?php get_footer(); ?>