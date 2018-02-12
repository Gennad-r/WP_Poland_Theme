<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>

</div>
<div class="container">
	<div class="row">
		<?php 
		function poland_check($mask)
		{
			if (!CFS()->get($mask) == ""){
				echo CFS()->get($mask);
			} else {
				echo 'нет данных';
			}
		}

		 ?>
		<?php if (have_posts()) : 
			while (have_posts()) : the_post(); ?>
			
		<div class="col-sm-2">
			<p><strong>Город:</strong></p>
			<p><?php poland_check('city'); ?></p>
		</div>
		<div class="col-sm-4">
			<p><strong>Детали работы:</strong></p>
			<p><?php poland_check('job_details'); ?></p>
		</div>
		<div class="col-sm-2">
			<p><strong>Оплата:</strong></p>
			<p><?php poland_check('money'); ?></p>
		</div>
		<div class="col-sm-2">
			<p><strong>График работы:</strong></p>
			<p><?php poland_check('hours'); ?></p>
		</div>
		<div class="col-sm-2">
			<p><strong>Дата:</strong></p>
			<p><?php the_date( ); ?></p>
		</div>
		<?php endwhile;
		endif ?>
			
	</div>
	<div class="row top-line">
		<div class="col-md-12">
			<p><strong>Номер вакансии:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#<?php the_id(); ?></p>
		</div>
	</div>
</div>



<?php get_footer(); ?>

			



			



<?php get_footer(); ?>