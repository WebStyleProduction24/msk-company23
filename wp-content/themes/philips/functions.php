<?php

/*=========================================

Изменено командой Web Style Production 24 (https://wsp24.ru/);

===========================================*/

function remove_plugins() {

        //  Сначала удаляем различные ненужные вставки:
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

        // Затем опишем какие плагины и на каких страницах мы (не) хотим использовать.

        // Что убрать с главной страницы?
    if (is_home()) {
        remove_plugin_fancybox();
        remove_plugin_syntaxhighlightercompress();

    }

        // Что убрать из категорий?
    if (is_category()) {
        remove_plugin_syntaxhighlightercompress();
        remove_plugin_contactform7();
        remove_plugin_twittertools();

            // Некоторые специфические категории и настройки
        if (!is_category(array('web','polygrafiya'))) {
            remove_plugin_fancybox();
            remove_plugin_wpportfolio();
            remove_plugin_filegallery();
        } else {
            wp_deregister_script('stw-pagepix');
        }
    }

        // Что убрать с постов?
    if (is_single()) {
        remove_plugin_fancybox();
        remove_plugin_wpportfolio();
        remove_plugin_contactform7();
        remove_plugin_twittertools();

            // Некоторые специфические настройки для постов
        if (!is_single(array(266, 356))) {
            remove_plugin_syntaxhighlightercompress();
        }
    }

        // Что убрать со страниц?
    if (is_page()) {
        remove_plugin_fancybox();
        remove_plugin_syntaxhighlightercompress();
        remove_plugin_wpportfolio();
        remove_plugin_filegallery();
        remove_plugin_twittertools();
        if (!is_page('about')) {
            remove_plugin_contactform7();
        }
    }

}

    // Remove Fancybox Plugin
function remove_plugin_fancybox() {
    remove_action('wp_head', 'mfbfw_init');
    remove_action('wp_enqueue_scripts', 'mfbfw_styles');
    wp_deregister_script('fancybox');
    wp_deregister_script('jqueryeasing');
    wp_deregister_script('jquerymousewheel');
}

    // Remove SyntaxHighlighter Compress
function remove_plugin_syntaxhighlightercompress() {
    remove_action('wp_head', 'wp_shc_head');
    remove_action('wp_footer', 'wp_shc_footer');
}

    // Remove WP Portfolio
function remove_plugin_wpportfolio() {
    remove_action('wp_head', 'WPPortfolio_styles_frontend_renderCSS');
    wp_deregister_script('stw-pagepix');
}

    // Remove File Gallery
function remove_plugin_filegallery() {
    wp_dequeue_style('file_gallery_nikitak');
    wp_dequeue_style('file_gallery_default');
    wp_dequeue_style('file_gallery_columns');
}

    // Remove Twitter Tools
function remove_plugin_twittertools() {
    remove_action('wp_head', 'aktt_head');
}

    // Remove Contact Form 7
function remove_plugin_contactform7() {
    remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_scripts' );
    wp_dequeue_style('contact-form-7');
    wp_dequeue_style('contact-form-7-rtl');
}

    // Следующая строчка означает, что наша функция будет вызвана
    // непосредственно перед тем как начнет генерироваться страница.
add_action('template_redirect', 'remove_plugins');









/* Регистрируем Аксессуары и таксономию для них
-----------------------------------------------*/
add_action('init', 'testi');
function testi()
{
  $labels = array(
    'name' => 'Отзывы',
    'singular_name' => 'Отзыв',
    'add_new' => 'Добавить отзыв',
    'add_new_item' => 'Добавить новый отзыв',
    'edit_item' => 'Редактировать отзыв',
    'new_item' => 'Новый отзыв',
    'view_item' => 'Посмотреть отзыв',
    'search_items' => 'Найти проект',
    'not_found' =>  'Отзывов не найдено',
    'not_found_in_trash' => 'В корзине отзывов не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Отзывы'
);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail', 'comments', 'custom-fields', 'excerpt'),
    'taxonomies' => array('testis') 
);
  register_post_type('testi',$args);  
}












/* Регистрируем Аксессуары и таксономию для них
-----------------------------------------------*/
add_action('init', 'house_pro');
function house_pro()
{
  $labels = array(
    'name' => 'Дома продажа',
    'singular_name' => 'Дом',
    'add_new' => 'Добавить дом',
    'add_new_item' => 'Добавить новый дом',
    'edit_item' => 'Редактировать дом',
    'new_item' => 'Новый дом',
    'view_item' => 'Посмотреть дом',
    'search_items' => 'Найти дом',
    'not_found' =>  'Домов не найдено',
    'not_found_in_trash' => 'В корзине домов не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Дома продажа'
);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail', 'comments', 'custom-fields', 'excerpt'),
    'taxonomies' => array('houses_pro') 
);
  register_post_type('house_pro',$args);  
}
// Создаем новую таксономию для аксессуаров
add_action( 'init', 'create_house_pro_taxonomies', 0 );
function create_house_pro_taxonomies(){
  $labels = array(
    'name' => _x( 'Категории домов', 'taxonomy general name' ),
    'singular_name' => _x( 'Категория дома', 'taxonomy singular name' ),
    'search_items' =>  __( 'Найти категорию дома' ),
    'all_items' => __( 'Все категории домов' ),
    'parent_item' => __( 'Родительская категория дома' ),
    'parent_item_colon' => __( 'Родительская категория' ),
    'edit_item' => __( 'Родительская категория' ),
    'update_item' => __( 'Обновить категорию' ),
    'add_new_item' => __( 'Добавить новую категорию' ),
    'new_item_name' => __( 'Название новой категории домов' ),
    'menu_name' => __( 'Категории домов' ),
);

  register_taxonomy('houses_pro', array('house_pro'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'houses_pro' ),
));

}












/* Регистрируем Аксессуары и таксономию для них
-----------------------------------------------*/
add_action('init', 'uchastok_pro');
function uchastok_pro()
{
  $labels = array(
    'name' => 'Участки продажа',
    'singular_name' => 'Участок',
    'add_new' => 'Добавить участок',
    'add_new_item' => 'Добавить новый участок',
    'edit_item' => 'Редактировать участок',
    'new_item' => 'Новый участок',
    'view_item' => 'Посмотреть участок',
    'search_items' => 'Найти участок',
    'not_found' =>  'участков не найдено',
    'not_found_in_trash' => 'В корзине участков не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Участки продажа'
);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail', 'comments', 'custom-fields', 'excerpt'),
    'taxonomies' => array('uchastki_pro') 
);
  register_post_type('uchastok_pro',$args);  
}
// Создаем новую таксономию для аксессуаров
add_action( 'init', 'create_uchastok_pro_taxonomies', 0 );
function create_uchastok_pro_taxonomies(){
  $labels = array(
    'name' => _x( 'Категории участков', 'taxonomy general name' ),
    'singular_name' => _x( 'Категория участков', 'taxonomy singular name' ),
    'search_items' =>  __( 'Найти категорию участков' ),
    'all_items' => __( 'Все категории участков' ),
    'parent_item' => __( 'Родительская категория участка' ),
    'parent_item_colon' => __( 'Родительская категория' ),
    'edit_item' => __( 'Родительская категория' ),
    'update_item' => __( 'Обновить категорию' ),
    'add_new_item' => __( 'Добавить новую категорию' ),
    'new_item_name' => __( 'Название новой категории участков' ),
    'menu_name' => __( 'Категории участков' ),
);

  register_taxonomy('uchastki_pro', array('uchastok_pro'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'uchastki_pro' ),
));

}

















/* Регистрируем Аксессуары и таксономию для них
-----------------------------------------------*/
add_action('init', 'item');
function item()
{
  $labels = array(
    'name' => 'Галерея проектов',
    'singular_name' => 'Проект',
    'add_new' => 'Добавить проект',
    'add_new_item' => 'Добавить новый проект',
    'edit_item' => 'Редактировать проект',
    'new_item' => 'Новый проект',
    'view_item' => 'Посмотреть проект',
    'search_items' => 'Найти проект',
    'not_found' =>  'Проектов не найдено',
    'not_found_in_trash' => 'В корзине проектов не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Галерея проектов'
);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail', 'comments', 'custom-fields', 'excerpt'),
    'taxonomies' => array('gallery') 
);
  register_post_type('item',$args);  
}

// Создаем новую таксономию для аксессуаров
add_action( 'init', 'create_item_taxonomies', 0 );

function create_item_taxonomies(){
  $labels = array(
    'name' => _x( 'Категории проектов', 'taxonomy general name' ),
    'singular_name' => _x( 'Категория проекта', 'taxonomy singular name' ),
    'search_items' =>  __( 'Найти категорию проектов' ),
    'all_items' => __( 'Все категории проектов' ),
    'parent_item' => __( 'Родительская категория проекта' ),
    'parent_item_colon' => __( 'Родительская категория' ),
    'edit_item' => __( 'Родительская категория' ),
    'update_item' => __( 'Обновить категорию' ),
    'add_new_item' => __( 'Добавить новую категорию' ),
    'new_item_name' => __( 'Название новой категории проектов' ),
    'menu_name' => __( 'Категории проектов' ),
);

  register_taxonomy('gallery', array('item'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery' ),
));

}








/* Регистрируем Аксессуары и таксономию для них
-----------------------------------------------*/
add_action('init', 'house');
function house()
{
  $labels = array(
    'name' => 'Проекты строительство',
    'singular_name' => 'Проект',
    'add_new' => 'Добавить проект',
    'add_new_item' => 'Добавить новый проект',
    'edit_item' => 'Редактировать проект',
    'new_item' => 'Новый проект',
    'view_item' => 'Посмотреть проект',
    'search_items' => 'Найти проект',
    'not_found' =>  'Проектов не найдено',
    'not_found_in_trash' => 'В корзине проектов не найдено',
    'parent_item_colon' => '',
    'menu_name' => 'Проекты строительство'
);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail', 'comments', 'custom-fields', 'excerpt'),
    'taxonomies' => array('houses') 
);
  register_post_type('house',$args);  
}


















if ( ! isset( $content_width ) ) $content_width = 900;

if ( ! function_exists( 'philips_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function philips_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on philips, use a find and replace
	 * to change 'philips' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'philips', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Управление заголовком из Wordpress.
    add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'philips' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	/*
	 * Enable support for Post Thumbnails.
	 * See https://codex.wordpress.org/Function_Reference/add_theme_support
	 */
	
	add_theme_support( 'post-thumbnails' );	
    add_image_size('philips-blog-thumbnails', 960, 450, true);
	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link','gallery',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'philips_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // philips_setup
add_action( 'after_setup_theme', 'philips_setup' );

function philips_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'philips_content_width', 640 );
}
add_action( 'after_setup_theme', 'philips_content_width', 0 );

function philips_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'philips' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'philips_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function philips_scripts() {
	wp_enqueue_style( 'philips-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'philips-fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'philips-style', get_stylesheet_uri() );
	wp_enqueue_style( 'philips-responsive', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_script( 'philips-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '20120206', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'philips_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


require get_template_directory() . '/inc/philips_navwalker.php';



if( ! function_exists('philips_load_fonts')):
    function philips_load_fonts(){


    }
    add_action('wp_enqueue_scripts', 'philips_load_fonts');
endif;



/*=========================================

Кастомные изменения от команды Web Style Production 24 (https://wsp24.ru/);

===========================================*/

// Изменяем сепаратор во вкладках сайта
add_filter( 'document_title_separator', function(){ return ' | '; } );

// Поддержка логтипа в теме
add_theme_support( 'custom-logo' );

// Включаем админ бар WordPress
add_filter('show_admin_bar', '__return_true');


//Отображение логотипа или описания сайта на второстепенных страницах сайта
function wsp24_logo() {
    $gtml = '';

    $bloginfo = '<a href="/" rel="home">';
    $bloginfo .= '<div class="logo col-md-1"><h1 class="site-title">';
    $bloginfo .= get_bloginfo( 'name' );
    $bloginfo .= '</h1></div></a>';

    $html = has_custom_logo()  ? get_custom_logo() : $bloginfo;
    $html = sprintf('<div class="col-md-1 logo">%1$s</div>', $html );

    echo $html;
}

// Отображения адреса
function wsp24_adress() {
    echo "<a href='https://yandex.ru/maps/-/CBU-rLSjpD' target='_blank'>г.&nbsp;Сочи, ул.&nbsp;Пластунская, д.&nbsp;50/2, оф.&nbsp;64-66</a>";
}

// Отображение телефона
function wsp24_phone_1() {
    echo "<a href='+79284571297'>+7&nbsp;(928)&nbsp;457-12-97</a>";
}
function wsp24_phone_2() {
    echo "<a href='+79889660527'>+7&nbsp;(988)&nbsp;966-05-27</a>";   
}

// Отображение E-mail

function wsp24_email() {
    echo "<a href='mailto:info@msk-company23.ru'>info@msk-company23.ru</a>";   
}