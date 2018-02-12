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


	<?php $slides = new WP_Query(array('post_type' => 'home_sliders', 'posts_per_page' => -1));        //SLIDER LOOP
	// Put link to banner into 'Описание', 'Description'
	if ($slides->have_posts()) : //if block start place ------------------------------------- ?>
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-01 owl-carousel owl-theme">
						<?php while ($slides->have_posts()) : $slides->the_post();
							if(has_term(33, 'slider_type')) : //check the type 
							$link_a = array('open' => '', 'close' => '');
							if( get_post(get_post_thumbnail_id())->post_content) { $link_a = array(
								'open' => '<a href="' . get_post(get_post_thumbnail_id())->post_content . '">',
								'close' => '</a>' );} ?> 
										<?php echo $link_a['open']; ?><div class="slide">
											<?php the_post_thumbnail('slider'); ?>
											<div class="slide-text"><?php echo get_post()->post_content; ?></div>
										</div><?php echo $link_a['close']; ?>
							<?php endif                                                     //end check the type ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->
	<?php endif                  //if block end place ------------------------- SLIDER FINISH ?> 




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
					<?php 
					$my_posts = new WP_Query( array('post_type' => 'vacancy'));
					echo $my_posts->found_posts;
					//print_r($my_posts);
					wp_reset_postdata();
					?>
					</div>
				</a>
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





	<?php $slides = new WP_Query(array('post_type' => 'home_sliders', 'posts_per_page' => -1));        //SLIDER LOOP
	// Put link to banner into 'Описание', 'Description'
	if ($slides->have_posts()) : //if block start place ------------------------------------- ?>
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-02 owl-carousel owl-theme">
						<?php while ($slides->have_posts()) : $slides->the_post();
							if(has_term(34, 'slider_type')) : //check the type 
							$link_a = array('open' => '', 'close' => '');
							if( get_post(get_post_thumbnail_id())->post_content) { $link_a = array(
								'open' => '<a href="' . get_post(get_post_thumbnail_id())->post_content . '">',
								'close' => '</a>' );} ?> 
										<?php echo $link_a['open']; ?><div class="slide">
											<?php the_post_thumbnail('slider'); ?>
											<div class="slide-text"><?php echo get_post()->post_content; ?></div>
										</div><?php echo $link_a['close']; ?>
							<?php endif                                                     //end check the type ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->
	<?php endif                  //if block end place ------------------------- SLIDER FINISH ?> 





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




	<?php $slides = new WP_Query(array('post_type' => 'home_sliders', 'posts_per_page' => -1));        //SLIDER LOOP
	// Put link to banner into 'Описание', 'Description'
	if ($slides->have_posts()) : //if block start place ------------------------------------- ?>
	<div class="slider hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="slider-03 owl-carousel owl-theme">
						<?php while ($slides->have_posts()) : $slides->the_post();
							if(has_term(35, 'slider_type')) : //check the type 
							$link_a = array('open' => '', 'close' => '');
							if( get_post(get_post_thumbnail_id())->post_content) { $link_a = array(
								'open' => '<a href="' . get_post(get_post_thumbnail_id())->post_content . '">',
								'close' => '</a>' );} ?> 
										<?php echo $link_a['open']; ?><div class="slide">
											<?php the_post_thumbnail('slider'); ?>
											<div class="slide-text"><?php echo get_post()->post_content; ?></div>
										</div><?php echo $link_a['close']; ?>
							<?php endif                                                     //end check the type ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.slider -->
	<?php endif                  //if block end place ------------------------- SLIDER FINISH ?> 




	<div class="container">
		<div class="row">
			<?php 
			$atts = array(
				'post_type' => 'steps',
				'order'     => 'ASC',
				'orderby'   => 'title'
			);
			$steps = new WP_Query($atts); 
			if ($steps->have_posts()) : ?>
			<div class="col-md-12 main-accordion">
				<?php while($steps->have_posts()) : $steps->the_post(); ?>
			
				<div class="accordion-item">
					<div class="accordion-head">
						<?php echo get_post()->post_title; ?>
					</div>
					<?php the_content(); ?>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>
			<?php endif ?>
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