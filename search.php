<?php 

/*
Template Name: Вакансии
*/


get_header(); ?>

<!-- --------------------------------- page-vacancies.php -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Поиск вакансий</h1>
			<p>Результаты поиска по запросу: <em><?php the_search_query() ?></em>.</p>
		</div>
	</div>

	
			<div class="row">
				<div class="col-md-12">
					<p>
		<?php if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">| <?php the_title(); ?> <?php the_date(); ?> |</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php endwhile ?>
					</p>
				</div>
			</div>
		<?php else : ?>
			<div class="row">
				<div class="col-md-6 col-md-push-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/search_404.png ?>" class="img-responsive" alt="not found">
				</div>
				<div class="col-md-12">
					<p>Ничего не найдено, попробуйте изменить запрос.</p>
				</div>
			</div>
		<?php endif; ?>

<?php 


 ?>
</div>

			



			



<?php get_footer(); ?>