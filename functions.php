<?php
/**
 * poland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package poland
 */



add_action( 'init', 'poland_register_vacancy');
add_action( 'init', 'poland_register_sliders');
add_action( 'init', 'poland_register_helpinfo');
add_action( 'init', 'poland_register_servises');
add_shortcode( 'button', 'build_button' );
add_action( 'wp_head', 'wp_site_icon', 99 );

//wp_site_icon();

//add_filter( 'wpcf7_load_js', '__return_false' );
//add_filter( 'wpcf7_load_css', '__return_false' );

//remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
//remove_action( 'wp_head', 'wp_oembed_add_host_js' );

if ( ! function_exists( 'poland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function poland_setup() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );




		// Settings for sliders with hard crop 1140x300px
		add_image_size( 'slider', 1140, 300, true );



		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'poland' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'poland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function poland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'poland_content_width', 640 );
}
add_action( 'after_setup_theme', 'poland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function poland_widgets_init() {
	register_sidebar( array(
		'name'          => 'Рубрики вакансий',
		'id'            => 'vacancy_terms',
		'description'   => 'Add widgets here.', 'poland',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );



}
add_action( 'widgets_init', 'poland_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function poland_scripts() {
	wp_enqueue_style( 'poland-style', get_stylesheet_uri(), array(), 1.1, 'all' );

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/main.min.css', array(), 1.1, 'all');


	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'poland_scripts' );

function poland_register_helpinfo(){
	register_post_type('helpinfo', array(
		'labels'             => array(
			'name'               => 'Полезная информация', // Основное название типа записи
			'singular_name'      => 'Статья', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую статью',
			'edit_item'          => 'Редактировать статью',
			'new_item'           => 'Новая книга',
			'view_item'          => 'Посмотреть статью',
			'search_items'       => 'Найти статью',
			'not_found'          => 'Статей не найдено',
			'not_found_in_trash' => 'В корзине статей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Полезная информация'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 99,
		'menu_icon'          => 'dashicons-sticky',
		'supports'           => array('title', 'author', 'editor', 'thumbnail')
	));
}


function poland_register_vacancy(){
	register_post_type('vacancy', array(
		'labels'             => array(
			'name'               => 'Вакансии', // Основное название типа записи
			'singular_name'      => 'Вакансия', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую вакансию',
			'edit_item'          => 'Редактировать вакансию',
			'new_item'           => 'Новая вакансия',
			'view_item'          => 'Посмотреть вакансию',
			'search_items'       => 'Найти вакансию',
			'not_found'          => 'Вакансий не найдено',
			'not_found_in_trash' => 'В корзине вакансий не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Каталог вакансий'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 2,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array('title'),
	));

	register_taxonomy( 'vacancies', array('vacancy'), array(
		'labels' => array(
			'name' => 'Профессии',
			'singular_name' => 'Рубрика',
			'search_items' => 'Найти',
			'all_items' => 'Все профессии',
			'view_item' => 'Посмотреть профессию',
			'edit_item' => 'Редактировать профессию',
			'update_item' => 'Обновить профессию',
			'add_new_item' => 'Добавить новую профессию',
			'new_item_name' => 'Добавить новую',
			'menu_name' => 'Профессии',
		),

		'description' => 'Перечень вакансий',
		'public' => 'true',
		'hierarchical' => true,
	));
}


function poland_register_sliders(){
	register_post_type('home_sliders', array(
		'labels'             => array(
			'name'               => 'Слайдер', // Основное название типа записи
			'singular_name'      => 'Слайд', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый слайд',
			'edit_item'          => 'Редактировать слайд',
			'new_item'           => 'Новый слайд',
			'view_item'          => 'Посмотреть слайд',
			'search_items'       => 'Найти слайд',
			'not_found'          => 'Слайдов не найдено',
			'not_found_in_trash' => 'В корзине слайдов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Каталог слайдов'

		  ),
		'description' => 'Здесь помещаются слайды самих слайдеров. Чтобы определить к какому из трех слайдеров должен принадлежать слайд нужно выбрать тип справа. Картинка слайда выбирается в правой нижней части "Изображение записи". Слайдеру можно задать ссылку, для этого при вставке картинки в поле "Описание" нужно вставить текст ссылки.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 101,
		'menu_icon'          => 'dashicons-images-alt2',
		'supports'           => array('title', 'editor', 'thumbnail'),
		'show_in_rest'       => true
	));

	register_taxonomy( 'slider_type', array('home_sliders'), array(
		'labels' => array(
			'name' => 'Типы',
			'singular_name' => 'тип',
			'search_items' => 'Найти',
			'all_items' => 'Все типы',
			'view_item' => 'Посмотреть тип',
			'edit_item' => 'Редактировать название',
			'update_item' => 'Обновить тип',
			'add_new_item' => 'Добавить новый тип',
			'new_item_name' => 'Добавить новый',
			'menu_name' => 'Типы',
		),

		'description' => 'Категории слайдов',
		'public' => 'true',
		'hierarchical' => true,
	));
}






function poland_register_servises(){
	register_post_type('servises', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          => 'Услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Каталог услуг'

		  ),
		'public'             => true,
		'hierarchical'       => false,
		'menu_position'      => 3,
		'menu_icon'          => 'dashicons-layout',
		'supports'           => array('title', 'editor', 'thumbnail'),
		'has_atchive'        => true

	));



	register_post_type('steps', array(
		'labels'             => array(
			'name'               => 'Трудоустройство под ключ', // Основное название типа записи
			'singular_name'      => 'Шаг', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый шаг',
			'edit_item'          => 'Редактировать шаг',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть шаг',
			'search_items'       => 'Найти шаг',
			'not_found'          => 'Шагов не найдено',
			'not_found_in_trash' => 'В корзине шагов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Трудоустройство под ключ'

		  ),
		'public'             => true,
		'hierarchical'       => false,
		'menu_position'      => 102,
		'menu_icon'          => 'dashicons-editor-ul',
		'supports'           => array('title', 'editor'),
		'has_atchive'        => true

	));

}

add_shortcode( 'button', 'build_button' );

function build_button($atts)
{
	$atts = shortcode_atts( array(
		'href' => '',
		'text' => 'Заказать',
		'class'=> 'btn btn-primary'
	), $atts );

	return '<a href="' . $atts['href'] . '" class="' . $atts['class'] . '">' . $atts['text'] . '</a>';
}

function search_filter($query) {
  if ( ! is_admin() && $query->is_main_query() ) {
	if ($query->is_search) {
	  $query->set('post_type', 'vacancy');
	}
  }
}

add_action( 'pre_get_posts', 'search_filter' );

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<input type="text" value="' . get_search_query() . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Найти" />
	</form>';

	return $form;
}