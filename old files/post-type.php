<?php
function custom_register_post_type() {

    // START quiz
    register_post_type('quiz', array(
		'labels'             => array(
			'name'               => 'Квиз', 
			'singular_name'      => 'Квиз', 
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый Квиз',
			'edit_item'          => 'Редактировать Квиз',
			'new_item'           => 'Новый Квиз',
			'view_item'          => 'Посмотреть Квиз',
			'menu_name'          => 'Квиз-опросы'
		  ),
		'public'     => false,
		'supports'   => array('title'),
        'menu_icon'  => 'dashicons-welcome-widgets-menus',
        'show_ui' => true, 
		'rewrite'    => [
			'with_front' => false
		]
	));
    // START quiz

    // ------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------

    // START designer
    $labels = array(
    'name'              => ( 'Уровень' ),
    'singular_name'     => ( 'Уровень' ),
    'search_items'      => ( 'Поиск по уровню' ),
    'all_items'         => ( 'Все уровни' ),
    'edit_item'         => ( 'Редактировать уровень' ),
    'update_item'       => ( 'Обновить уровень' ),
    'add_new_item'      => ( 'Добавить новый уровень' ),
    'new_item_name'     => ( 'Название нового уровеня' ),
    'menu_name'         => ( 'Уровни' ),
    );

    $args = array(
        //вложеность термов(например вложность для стран и городов) иерархический
        'hierarchical'	=> true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // 'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        'rewrite'           => true,
        // 'show_in_rest'      => true,
        
    );

    if (!taxonomy_exists( 'level' )) {
        register_taxonomy('level', array('designer'), $args);
    }
    unset($args);
    unset($labels);
    // очищаем $args
    
    register_post_type('designer', array(
		'labels'             => array(
			'name'               => 'Дизайнер', 
			'singular_name'      => 'Дизайнер', 
			'add_new'            => 'Добавить нового',
			'add_new_item'       => 'Добавить нового дизайнера',
			'edit_item'          => 'Редактировать дизайнера',
			'new_item'           => 'Новый дизайнер',
			'view_item'          => 'Посмотреть дизайнера',
			'menu_name'          => 'Дизайнеры'
		  ),
		'public'     => true,
		'supports'   => array('title'),
        'menu_icon'  => 'dashicons-id-alt',
        'show_ui' => true, 
        'menu_position' => 6,
		'rewrite'    => [
			'with_front' => false
		]
	));
    // START designer

    // ------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------

	// START project
    $labels = array(
    'name'              => ( 'Категория' ),
    'singular_name'     => ( 'Категория' ),
    'search_items'      => ( 'Поиск по категориям' ),
    'all_items'         => ( 'Все категории' ),
    'edit_item'         => ( 'Редактировать категорию' ),
    'update_item'       => ( 'Обновить категорию' ),
    'add_new_item'      => ( 'Добавить новую категорию' ),
    'new_item_name'     => ( 'Название новой категории' ),
    'menu_name'         => ( 'Категории' ),
    );

    $args = array(
        //вложеность термов(например вложность для стран и городов) иерархический
        'hierarchical'	=> true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // 'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        'rewrite'           => true,
        // 'show_in_rest'      => true,
        
    );

    if (!taxonomy_exists( 'portfolio-cat' )) {
        register_taxonomy('portfolio-cat', array('portfolio'), $args);
    }
    unset($args);
	unset($labels);
    // очищаем $args

    $labels = array(
    'name'              => ( 'Категория дома' ),
    'singular_name'     => ( 'Категория дома' ),
    'search_items'      => ( 'Поиск по категориям' ),
    'all_items'         => ( 'Все категории' ),
    'edit_item'         => ( 'Редактировать категорию' ),
    'update_item'       => ( 'Обновить' ),
    'add_new_item'      => ( 'Добавить' ),
    'new_item_name'     => ( 'Название новой категории' ),
    'menu_name'         => ( 'Категории дома' ),
    );

    $args = array(
        //вложеность термов(например вложность для стран и городов) иерархический
        'hierarchical'	=> true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // 'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        'rewrite'           => true,
        // 'show_in_rest'      => true,
        
    );

    if (!taxonomy_exists( 'houses-cat' )) {
        register_taxonomy('houses-cat', array('portfolio'), $args);
    }
    unset($args);
    unset($labels);
    // очищаем $args

    $labels = array(
    'name'              => ( 'Этажность' ),
    'singular_name'     => ( 'Этажность' ),
    'search_items'      => ( 'Поиск' ),
    'all_items'         => ( 'Все этажи' ),
    'edit_item'         => ( 'Редактировать этаж' ),
    'update_item'       => ( 'Обновить этаж' ),
    'add_new_item'      => ( 'Добавить новый этаж' ),
    'new_item_name'     => ( 'Название нового этажа' ),
    'menu_name'         => ( 'Этажи' ),
    );

    $args = array(
        //вложеность термов(например вложность для стран и городов) иерархический
        'hierarchical'	=> true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // 'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        'rewrite'           => true,
        // 'show_in_rest'      => true,
        
    );

    if (!taxonomy_exists( 'houses-floor' )) {
        register_taxonomy('houses-floor', array('portfolio'), $args);
    }
    unset($args);
    unset($labels);
    // очищаем $args


    $labels = array(
			'name'               => 'Портфолио', 
			'singular_name'      => 'Проект', 
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый проект',
			'edit_item'          => 'Редактировать проект',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Посмотреть проект',
			'menu_name'          => 'Портфолио',  
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', ), //'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
        'menu_icon'			 => 'dashicons-admin-network',
        'exclude_from_search' => false,
    );

    register_post_type( 'portfolio', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);

    // END project

   
}
 



add_action( 'init', 'custom_register_post_type' );

//обновления ЧПУ после инициализации post type
function my_template_rewrite_rules(){
    my_template_rewrite_rukes();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'my_template_rewrite_rules');

