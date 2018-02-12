<?php
/*
Template Name: Главная
*/
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package poland
 */
get_header(); ?>

<div class="vacancy-block">
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-01 owl-carousel owl-theme">
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (1).jpg" alt="slide-01">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (2).jpg" alt="slide-02">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (3).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (4).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (5).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (6).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (7).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->
	<div class="container-fluid blue-head-holder" id="vacancy-block">
		<div class="container">
			<a href="/vacancies/" class="head-link">
				<h2>Вакансии</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="container vacancy-container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<a href="/vacancies/">
					<div class="vac-name">Все</div>
					<div class="vacancy-pic-box all-vac">
					</div>
				<div class="vacancy-counter">
				</a>
					<?php 
					$my_posts = new WP_Query( array('post_type' => 'vacancy'));
					echo $my_posts->post_count;
					wp_reset_postdata();
					?>
					</div>
			</div>
<!-- End of all vacancy counter -->

<?php // get vacancies terms

$args = array(
	'taxonomy'      => array( 'vacancies' ), // название таксономии с WP 4.5
	'orderby'       => 'count', 
	'order'         => 'DESC',
	'hide_empty'    => false, 
	'object_ids'    => null, // 
	'include'       => array(),
	'exclude'       => array(), 
	'exclude_tree'  => array(), 
	'number'        => '5', 
	'fields'        => 'all', 
	'count'         => false,
	'slug'          => '', 
	'parent'        => '',
	'hierarchical'  => true, 
	'child_of'      => 0, 
	'get'           => '', // ставим all чтобы получить все термины
	'name__like'    => '',
	'pad_counts'    => false, 
	'offset'        => '', 
	'search'        => '', 
	'cache_domain'  => 'core',
	'name'          => '', // str/arr поле name для получения термина по нему. C 4.2.
	'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
	'update_term_meta_cache' => true, // подгружать метаданные в кэш
	'meta_query'    => '',
); 

$vac_myterms = get_terms( $args );

foreach( $vac_myterms as $term ) : ?>
	<div class="col-md-2 col-xs-6">
		<a href="<?php echo(get_home_url() . '/' . $term->taxonomy . '/' . $term->slug) ?>">
			<div class="vac-name"><?php echo $term->name ?></div>
			<div class="vacancy-pic-box <?php echo $term->slug ?>"></div>
			<div class="vacancy-counter"><?php echo $term->count ?></div>
		</a>
	</div> <!-- end vacancy section -->
<?php endforeach ?>
		</div> <!-- vacancy row -->
		<div class="row vacancy-buttons">
			<div class="col-md-4">
				<a href="/vacancies/" class="btn btn-primary">Найти вакансию</a>
			</div>
			<div class="col-md-4">
				<a href="/vacancies/" class="btn btn-primary">Новые вакансии</a>
			</div>
			<div class="col-md-4">
				<a href="/resume/" class="btn btn-primary">Заполнить анкету</a>
			</div>
		</div><!-- /.row vacancy-buttons -->
	</div>
</div><!-- /.vacancy-block -->
<div class="servises-block">
	<div class="container-fluid blue-head-holder" id="servises-block">
		<div class="container">
			<a href="/services/" class="head-link">
				<h2>Услуги</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-02 owl-carousel owl-theme">
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (3).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (1).jpg" alt="slide-01">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (2).jpg" alt="slide-02">
							<div class="slide-text"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->

	<div class="container servises-propositons">
		<?php
			global $post;
			$args = array( 'posts_per_page' => 4, 'post_type' => 'servises' );
			$myposts = get_posts( $args ); ?>
		<div class="row">
			<?php foreach( $myposts as $post ){ setup_postdata($post); ?>
			<div class="col-md-3">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			</div>
			<?php } wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- /.servises-block -->
<div class="work-help-block">
	<div class="container-fluid blue-head-holder" >
		<div class="container">
			<a href="/resume/" class="head-link">
				<h2>Трудоустройство под ключ</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-03 owl-carousel owl-theme">
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (2).jpg" alt="slide-02">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (1).jpg" alt="slide-01">
							<div class="slide-text"></div>
						</div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider_0 (3).jpg" alt="slide-03">
							<div class="slide-text"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-accordion">
				<div class="accordion-item">
					<div class="accordion-head">
						1. Подбор вакансии
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						2. Собеседование с работодателем
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						3. Подготовка документов
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						4. Приглашение, документы на визу
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						5. Визовый сбор
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						6. Получение визы
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						7. Согласование даты перезда
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
				<div class="accordion-item">
					<div class="accordion-head">
						8. Переезд, начало работы
					</div>
					<p>Если у вас уже есть польская рабочая виза или биометрический паспорт и вас интересует только вакансия, которая опубликована на нашем сайте, что делать? Первое, что вам отвечу, так это то, что для вас актуальны все вакансии, если вы по возрасту проходите и у вас есть рабочая виза. Не все работодатели хотят брать на работу по биометрическому паспорту, точнее малая часть! Вакансии все платные, так как мы являемся лицензированным агентством по трудоустройству за границей. Наши менеджеры занимаются всеми организационными вопросами, решают конфликтные ситуации с работодателем и подбирают только самые актуальные вакансии с максимальными соответствиями условий: соответствует зарплата, условия по проживанию и отношение</p>
				</div>
			</div> <!-- accordion -->
			<div class="col-md-12 text-right top-margin">
				<a href="/resume/" class="btn">Начать трудоустройство</a>
			</div>
		</div>
	</div>
</div><!-- /.work-help-block -->
<div class="we-are">
	<div class="container-fluid blue-head-holder" id="we-are">
		<div class="container">
			<a href="/we-are/" class="head-link">
				<h2>Кто мы?</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="container">
<?php

/**
 * Get excerpt from string
 * 
 * @param String $str String to get an excerpt from
 * @param Integer $startPos Position int string to start excerpt from
 * @param Integer $maxLength Maximum length the excerpt may be
 * @return String excerpt
 */
function getExcerpt($str, $startPos=0, $maxLength=100) {
	if(strlen($str) > $maxLength) {
		$excerpt   = substr($str, $startPos, $maxLength-3);
		$lastSpace = strrpos($excerpt, ' ');
		$excerpt   = substr($excerpt, 0, $lastSpace);
		$excerpt  .= '...';
	} else {
		$excerpt = $str;
	}
	
	return $excerpt;
}

?>
<?php $we_are = get_post(1); ?>
		<div class="row">
			<div class="col-md-6"><img src="<?php echo get_the_post_thumbnail_url(1); ?>" class="img-responsive" alt="we-are"></div>
			<div class="col-md-6">
				<?php echo getExcerpt($we_are->post_content, 0, 900) ?>
				<p class="more text-right"><a href="/we-are/">Читать больше</a></p>
			</div>
		</div>
	</div>
</div><!-- /.we-are -->
<div class="helpfull-info">
	<div class="container-fluid blue-head-holder" id="helpfull-info">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 4, 'post_type' => 'helpinfo' );
			$myposts = get_posts( $args ); ?>
		<div class="container">
			<a href="/info/" class="head-link">
				<h2>Полезная информация</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="container">
			<?php foreach( $myposts as $post ){ setup_postdata($post); ?>
			<div class="col-md-3">
				<a href="<?php the_permalink(); ?>" class="info-tiles">
					<?php the_post_thumbnail('full', array('class' => 'img-responsive' )) ?>
					<h4><?php the_title(); ?></h4>
				</a>
			</div>
			<?php } wp_reset_postdata(); ?>
	</div>
</div><!-- /.helpfull-info -->
<div class="contacts-section">
	<div class="container-fluid blue-head-holder" id="contacts-section">
		<div class="container">
			<a href="/contacts/" class="head-link">
				<h2>Контакты</h2>
			</a>
		</div>
	</div> <!-- blue-head-holder -->
	<div class="container-fluid" id="map-holder">
		
	</div>


</div><!-- /.contacts-section -->
<script>
	function initMap(){var e=[{stylers:[{hue:"#052839"},{saturation:-20}]},{elementType:"labels.text.fill",stylers:[{color:"#052839"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"road",elementType:"geometry.stroke",stylers:[{color:"#052839"}]},{featureType:"water",stylers:[{color:"#052839"},{lightness:40},{saturation:-60}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#052839"}]},{featureType:"poi",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#bfc9cc"},{visibility:"on"}]},{featureType:"poi.business",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.school",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.medical",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.government",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"landscape.natural",elementType:"geometry",stylers:[{hue:"#052839"}]},{elementType:"geometry.stroke",stylers:[{color:"#052839"},{lightness:70}]}],t={lat:49.9871,lng:36.2544},l=new google.maps.Map(document.getElementById("map-holder"),{zoom:18,center:t,styles:e});new google.maps.Marker({position:t,map:l,title:"Мы тут!",icon:"logo-gear-along.png"})}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP_DKy3mnOcdMcgsEOi9cYaXeYX25YRtQ&callback=initMap">
</script>
<?php get_footer(); ?>