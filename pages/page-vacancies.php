<?php 

/*
Template Name: Вакансии
*/


get_header(); ?>

<!-- --------------------------------- page-vacancies.php -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">

		<?php $args = array(
			'orderby'            => 'count',
			'order'              => 'DESC',
			'style'              => 'span',
			'show_count'         => 1,
			'echo'               => 0,
			'current_category'   => 1,
			'taxonomy'           => 'vacancies',
			'hide_title_if_empty' => false,
			'separator'          => ',  ',
		); ?>

		<p><?php  echo rtrim(wp_list_categories( $args ), ",  \n"); ?></p>
		</div>
		<div class="col-md-6">
			<?php get_search_form(); ?>
		</div>
	</div>

<div class="table-header">
	<div class="row">
		<div class="col-xs-1">№</div>
		<div class="col-xs-5">Название</div>
		<div class="col-xs-3">Город</div>
		<div class="col-xs-3 vac-date">Дата</div>
	</div>
</div>
		<?php global $post;
		$pol_current_page = get_query_var( 'paged' );
		$args = array( 
			'posts_per_page' => 10, 
			'post_type' => 'vacancy', 
			'orderby' => 'post_date_gmt',
			'paged' => $pol_current_page
			);
		$myposts = new WP_Query( $args ); ?>
			
		<?php if ($myposts->have_posts()) : 
			while ($myposts->have_posts()) : $myposts->the_post(); 
				$city = CFS()->get('city');
				$job_details = CFS()->get('job_details');
				$money = CFS()->get('money');
				$hours = CFS()->get('hours');
				$id = get_the_id(); 
				$all_tags = get_the_terms($id, 'vacancies')[0];
				?>



				<div class="accordion">
					<div class="row">
						<div class="col-xs-1"><a href="?p=<?php the_id(); ?>">#<?php the_id(); ?></a></div>
						<div class="col-xs-5"><?php the_title(); ?></div>
						<div class="col-xs-3"><?php echo $city ?></div>
						<div class="col-xs-3 vac-date"><?php echo get_the_date(); ?></div>
					</div>
				</div>
				<div class="panel">
					<div class="row">
						<?php if ($job_details == !'') : ?>
						<div class="col-xs-3">Детали работы:</div>
						<div class="col-xs-9"><?php echo $job_details ?></div>
						<?php endif ?>
					</div>
					<div class="row">
						<?php if ($money == !'') : ?>
						<div class="col-xs-3">Оплата труда:</div>
						<div class="col-xs-9"><?php echo $money ?></div>
						<?php endif ?>
					</div>
					<div class="row">
						<?php if ($hours == !'') : ?>
						<div class="col-xs-3">График работы:</div>
						<div class="col-xs-9"><?php echo $hours ?></div>
						<?php endif ?>
					</div>
					<div class="row">
						<div class="col-xs-3">Категория:</div>
						<div class="col-xs-9"><a href="<?php echo get_term_link($all_tags->term_id, 'vacancies') ?>"><?php echo $all_tags->name; ?></a></div>
					</div>
				</div>


			<?php endwhile ?>
		<?php endif ?>
		<div class="row">
			<div class="col-md-12 pagination-zone">
				<?php 
				wp_reset_postdata();
				echo paginate_links(array(
					'total' => $myposts->max_num_pages, 
					'prev_text'    => '<',
					'next_text'    => '>',
				));
				?>
			</div>
		</div>
			<?php  
			 ?> 
			
</div> <!-- container -->
<?php get_footer(); ?>

			



			


