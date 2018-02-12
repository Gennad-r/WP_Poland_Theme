<?php 




get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); 
			the_archive_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<?php $args = array(
				'orderby'            => 'count',
				'order'              => 'DESC',
				'style'              => 'list',
				'show_count'         => 1,
				'echo'               => 0,
				'title_li'           => '',
				'taxonomy'           => 'vacancies',
				'hide_title_if_empty' => false,
				'separator'          => ',  ',
			); ?>

			<p><?php  echo( rtrim(str_replace(array('li', ')', "\n"), array('span', '),', ''), wp_list_categories( $args )), ",</span>") . "</span>") ; ?></p>
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



		<?php if(have_posts()) :  ?>
			<?php while(have_posts()) : the_post(); 
				$city = CFS()->get('city');
				$job_details = CFS()->get('job_details');
				$money = CFS()->get('money');
				$hours = CFS()->get('hours');
				$id = get_the_id(); ?>

				
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
				</div>


			<?php endwhile ?>
		<?php endif ?>








			
</div> <!-- container -->
<?php get_footer(); ?>

			



			


