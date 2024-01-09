<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Enqueue scripts and styles.
 */
function artstroy_scripts() {
	wp_enqueue_style( 'artstroy-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('artstroy-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('artstroy-fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('artstroy-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('artstroy-twentytwenty', get_template_directory_uri() . '/assets/css/twentytwenty.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('artstroy-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('artstroy-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all');



	wp_deregister_script( 'jquery' ); //разрегистирируем скрипт jquery
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'artstroy-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-filter-portfolio', get_template_directory_uri() . '/assets/js/filter-portfolio.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'artstroy-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-jquery-ui-touch-punch', get_template_directory_uri() . '/assets/js/jquery-ui-touch-punch.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-event-move', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery'), _S_VERSION, true );
	
	wp_enqueue_script( 'artstroy-marquee', get_template_directory_uri() . '/assets/js/jquery.marquee.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-masked-input', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-twentytwenty', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-modal', get_template_directory_uri() . '/assets/js/modal.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-quiz', get_template_directory_uri() . '/assets/js/quiz.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-select2', get_template_directory_uri() . '/assets/js/select2.min.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'artstroy-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'artstroy-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'artstroy-form', get_template_directory_uri() . '/assets/js/form.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'artstroy-loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'artstroy-filter-designers', get_template_directory_uri() . '/assets/js/filter-designers.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'artstroy-function', get_template_directory_uri() . '/assets/js/function.js', array(), _S_VERSION, true );
	
}
add_action( 'wp_enqueue_scripts', 'artstroy_scripts' );


function admin_styles_scripts() {
	wp_enqueue_style("artstroy-admin-css", get_template_directory_uri() . '/assets/css/wp-admin.css');
}

add_action('admin_enqueue_scripts', 'admin_styles_scripts');


function artstroy_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	add_image_size( 'certificate', 800, 1150, true);
	add_image_size( 'certificate_sm', 380, 550, true);

	add_image_size( 'custom_img_sm', 500, 350, true);
	add_image_size( 'custom_img', 1200, 960, true);

	add_image_size( 'project_sm', 250, 104, true);
	add_image_size( 'project', 1820, 760, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'header' ),
			'menu-footer' => esc_html__( 'footer' ),
			'menu-footer-service' => esc_html__( 'footer-service' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'artstroy_setup' );

function artstroy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'artstroy_content_width', 640 );
}
add_action( 'after_setup_theme', 'artstroy_content_width', 0 );


//Разрешаем загрузку WebP
function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );  
function delete_intermediate_image_sizes( $sizes ){
    // размеры которые нужно удалить
    return array_diff( $sizes, [
        // 'thumbnail',
        'medium',
        'medium_large',
        'large',
        '1536x1536',
        '2048x2048',
    ] );
}

add_filter( 'excerpt_length', function(){
	return 12;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});


//скрываем пункты меню в админ панели
add_action('admin_menu', 'remove_menus');
function remove_menus() {
    //remove_menu_page('index.php');                # Консоль 
    // remove_menu_page('edit.php');                 # Записи 
    // remove_menu_page('edit-comments.php');        # Комментарии 
    //remove_menu_page('edit.php?post_type=page');  # Страницы 
    //remove_menu_page('upload.php');               # Медиафайлы 
    //remove_menu_page('themes.php');               # Внешний вид 
    //remove_menu_page('plugins.php');              # Плагины 
    // remove_menu_page('users.php');                # Пользователи 
    // remove_menu_page('tools.php');                # Инструменты 
    //remove_menu_page('options-general.php');      # Параметры 
    // remove_menu_page('edit.php?post_type=smart-custom-fields'); # ACF smart-custom-fields
}



// require get_template_directory() . '/inc/ajax-load-posts.php';
require get_template_directory() . '/inc/breadcrumb.php';
// Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
require get_template_directory() . '/inc/disable-verification.php';
require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/post-type.php';
require get_template_directory() . '/inc/acf-options.php';


require get_template_directory() . '/inc/filter-designers.php'; 
require get_template_directory() . '/inc/filter-portfolio.php'; 






