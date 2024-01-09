<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Шапка',
        'menu_title'	=> 'Шапка',
        'menu_slug' 	=> 'theme-header',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));	
    acf_add_options_page(array(
        'page_title' 	=> 'Подвал',
        'menu_title'	=> 'Подвал',
        'menu_slug' 	=> 'theme-footer',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));	
	acf_add_options_page(array(
		'page_title' 	=> 'Контакты',
		'menu_title'	=> 'Контакты',
		'menu_slug' 	=> 'theme-contact',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки контента',
		'menu_title'	=> 'Контент сайта',
		'menu_slug' 	=> 'theme-global-content',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}

function my_template_acf_mataboxes(){
    // BEGIN GLOBAL CONTACTS
    acf_add_local_field_group(array(
        'key' => 'acf_global_contacts',
        'title' => 'Контактные данные',
        'fields' => array(
            array (
                'key' => 'tab_phone',
                'label' => 'Телефон', 
                'type' => 'tab',
            ),
            array(
                'key' => 'phone',
                'label' => 'Номер телефона',
                'name' => 'phone',
                'type' => 'text',
            ),
            array(
                'key' => 'phone_time',
                'label' => 'Время работы',
                'name' => 'phone_time',
                'type' => 'text',
            ),
            // -------------------------------
            array (
                'key' => 'tab_messenger',
                'label' => 'Мессенджеры', 
                'type' => 'tab',
            ),
            array(
                'key' => 'whatsapp',
                'label' => 'WhatsApp',
                'name' => 'whatsapp',
                'type' => 'text',
            ),
            array(
                'key' => 'telegram',
                'label' => 'telegram',
                'name' => 'telegram',
                'type' => 'text',
            ),
            array(
                'key' => 'viber',
                'label' => 'viber',
                'name' => 'viber',
                'type' => 'text',
            ),
            array(
                'key' => 'youtube',
                'label' => 'YouTube',
                'name' => 'youtube',
                'type' => 'text',
            ),
            array(
                'key' => 'instagram',
                'label' => 'Instagram',
                'name' => 'instagram',
                'type' => 'text',
            ),
            array(
                'key' => 'vk',
                'label' => 'vk',
                'name' => 'vk',
                'type' => 'text',
            ),
            // -------------------------------
            array (
                'key' => 'tab_email',
                'label' => 'Email', 
                'type' => 'tab',
            ),
            array(
                'key' => 'mail',
                'label' => 'Email',
                'name' => 'mail',
                'type' => 'text',
            ),
            array(
                'key' => 'mail_to',
                'label' => 'Email для получения заявок с сайта',
                'name' => 'mail_to',
                'type' => 'text',
                // 'instructions' => 'Почта получателя в одинарных <b>кавычках</b>, через запятую можно указать несколько адресов.',
                // 'placeholder' => 'daria11140@gmail.com',
            ),
            array(
                'key' => 'mail_to_quiz',
                'label' => 'Email для получения квизов с сайта',
                'name' => 'mail_to_quiz',
                'type' => 'text',
                // 'instructions' => 'Почта получателя в одинарных <b>кавычках</b>, через запятую можно указать несколько адресов.',
                // 'placeholder' => 'daria11140@gmail.com',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-contact',
                )
            )
        ),
    ));
    // END GLOBAL CONTACTS
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN GLOBAL HEADER
    acf_add_local_field_group(array(
        'key' => 'acf_global_header',
        'title' => 'Настройки шапки',
        'fields' => array(
            array (
                'key' => 'tab_header_general',
                'label' => 'Общие настройки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'logo_img',
                'label' => 'Логотип',
                'name' => 'logo_img',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'full',
            ),
            array(
                'key' => 'logo_info',
                'label' => 'Описание логотипа',
                'name' => 'logo_info',
                'type' => 'text',
            ),
            // -------------------------------
            array (
                'key' => 'tab_header_scripts',
                'label' => 'Скрипты', 
                'type' => 'tab',
            ),
            array(
                'key' => 'header_scripts',
                'label' => 'Скрипты перед закрывающим тегом <b>/HEAD</b>',
                'name' => 'header_scripts',
                'type' => 'textarea',
                'rows'  => 20,
            ),
            // -------------------------------
            array (
                'key' => 'tab_header_city',
                'label' => 'Города', 
                'type' => 'tab',
            ),
            array(
                'key' => 'city_list',
                'label' => 'Список',
                'name' => 'city_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'city_link',
                        'label' => 'Ссылка на',
                        'name' => 'city_link',
                        'type' => 'link',
	                    'return_format' => 'array',  // 'array' || 'url'
                    ),
                ),
            ),
            // -------------------------------
            array (
                'key' => 'tab_header_calc',
                'label' => 'калькулятор стоимости', 
                'type' => 'tab',
            ),
            array(
                'key' => 'header_calc_boolean',
                'label' => 'Отображать блок?',
                'name' => 'header_calc_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            // -------------------------------
            array (
                'key' => 'tab_header_callback',
                'label' => 'обратный звонок', 
                'type' => 'tab',
            ),
            array(
                'key' => 'header_callback_boolean',
                'label' => 'Отображать блок?',
                'name' => 'header_callback_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-header',
                )
            )
        ),
    ));
    // END GLOBAL HEADER
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN GLOBAL FOOTER
    acf_add_local_field_group(array(
        'key' => 'acf_global_footer',
        'title' => 'Настройки подвала',
        'fields' => array(
            // -------------------------------
            array (
                'key' => 'tab_footer_general',
                'label' => 'Общие настройки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'footer_img',
                'label' => 'Логотип',
                'name' => 'footer_img',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'full',
            ),
            array(
                'key' => 'footer_info',
                'label' => 'Описание логотипа',
                'name' => 'footer_info',
                'type' => 'text',
            ),
            // -------------------------------
            array (
                'key' => 'tab_footer_link',
                'label' => 'Дополнительные ссылки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'footer_callback_boolean',
                'label' => 'Отображать: Заказать обратный звонок?',
                'name' => 'footer_callback_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'footer_calc_boolean',
                'label' => 'Отображать: Калькулятор стоимости?',
                'name' => 'footer_calc_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'footer_all_contacts',
                'label' => 'Все контакты',
                'name' => 'footer_all_contacts',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
        

            // -------------------------------
            array (
                'key' => 'tab_footer_advantage',
                'label' => 'Преимущества', 
                'type' => 'tab',
            ),
            array(
                'key' => 'footer_advantage',
                'label' => 'Список преимуществ колонка 1',
                'name' => 'footer_advantage',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'footer_advantage_text',
                        'label' => 'Элемент списка',
                        'name' => 'footer_advantage_text',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'footer_advantage_2',
                'label' => 'Список преимуществ колонка 2',
                'name' => 'footer_advantage_2',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'footer_advantage_text',
                        'label' => 'Элемент списка',
                        'name' => 'footer_advantage_text',
                        'type' => 'text',
                    ),
                ),
            ),
            array (
                'key' => 'tab_footer_scripts',
                'label' => 'Скрипты', 
                'type' => 'tab',
            ),
            array(
                'key' => 'footer_scripts',
                'label' => 'Скрипты перед закрывающим тегом <b>/BODY</b>',
                'name' => 'footer_scripts',
                'type' => 'textarea',
                'rows'  => 20,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-footer',
                )
            )
        ),
    ));
    // END GLOBAL FOOTER
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN GLOBAL CONTENT
    acf_add_local_field_group(array(
        'key' => 'acf_global_content',
        'title' => 'Настройки контента',
        'fields' => array(
            // -------------------------------
            array (
                'key' => 'tab_content_clip',
                'label' => 'Клип', 
                'type' => 'tab',
            ),
            array(
                'key' => 'clip_boolean',
                'label' => 'Отображать блок?',
                'name' => 'clip_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'clip_video_id',
                'label' => 'ID видео',
                'name' => 'clip_video_id',
                'type' => 'text',
                'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= 1FBNIVQXhPc',
                'placeholder' => '1FBNIVQXhPc',
            ),
            array(
                'key' => 'clip_img_id',
                'label' => 'Изображение',
                'name' => 'clip_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 230/350px.',
            ),
            // -------------------------------
            array (
                'key' => 'tab_content_preloader',
                'label' => 'Preloader', 
                'type' => 'tab',
            ),
            array(
                'key' => 'preloader_boolean',
                'label' => 'Отображать блок?',
                'name' => 'preloader_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            // -------------------------------
            array (
                'key' => 'tab_content_lowerpanel',
                'label' => 'Нижняя панель', 
                'type' => 'tab',
            ),
            array(
                'key' => 'lowerpanel_boolean',
                'label' => 'Отображать блок?',
                'name' => 'lowerpanel_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'lowerpanel_select',
                'label' => 'Выберите элементы для отображения',
                'name' => 'lowerpanel_select',
                'type' => 'checkbox',
                'layout' => 'horizontal',  // 'vertical'
                'toggle' => 0,
                'return_format' => 'value',  // 'array' || 'label'
                'choices' => [
                    'pdf' => 'Скачать презентацию',
                    'phone' => 'Оставить заявку',
                    'percentage' => 'Акции',
                   
                ],
                'default_value' => ['pdf'],
                'allow_custom' => 0,
                'save_custom' => 0,
            ),
            // -------------------------------
            array (
                'key' => 'tab_content_founder',
                'label' => 'Блок основатель', 
                'type' => 'tab',
            ),
            array(
                'key' => 'runningLine_list',
                'label' => 'Бегущая строка',
                'name' => 'runningLine_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'runningLine_item',
                        'label' => 'Слово',
                        'name' => 'runningLine_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'founder_title',
                'label' => 'Заголовок',
                'name' => 'founder_title',
                'type' => 'text',
            ),
            array(
                'key' => 'founder_description',
                'label' => 'Описание',
                'name' => 'founder_description',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'founder_text',
                'label' => 'текст',
                'name' => 'founder_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'founder_text_bold',
                'label' => 'жирный текст',
                'name' => 'founder_text_bold',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'founder_person_name',
                'label' => 'ФИО',
                'name' => 'founder_person_name',
                'type' => 'text',
            ),
            array(
                'key' => 'founder_person_description',
                'label' => 'Описания рядом с ФИО',
                'name' => 'founder_person_description',
                'type' => 'text',
            ),
            array(
                'key' => 'founder_play_label',
                'label' => 'Описание видео',
                'name' => 'founder_play_label',
                'type' => 'text',
            ),
            array(
                'key' => 'founder_play_time',
                'label' => 'Длительность видео',
                'name' => 'founder_play_time',
                'type' => 'text',
            ),
            array(
                'key' => 'founder_video_id',
                'label' => 'ID видео',
                'name' => 'founder_video_id',
                'type' => 'text',
                'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= 1FBNIVQXhPc',
                'placeholder' => '1FBNIVQXhPc',
            ),
            array(
                'key' => 'founder_button',
                'label' => 'Кнопка',
                'name' => 'founder_button',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
                'instructions' => 'Отображаеиться только на главной странице.',
            ),
            // -------------------------------
            array (
                'key' => 'tab_content_figures',
                'label' => 'Цифры', 
                'type' => 'tab',
            ),
            array(
                'key' => 'figures_item_1',
                'label' => 'Элемент 1',
                'name' => 'figures_item_1',
                'type' => 'group',
                'layout' => 'row',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'figures_number',
                        'label' => 'число',
                        'name' => 'figures_number',
                        'type' => 'number',
                    ),
                    array(
                        'key' => 'figures_text',
                        'label' => 'текст под числом',
                        'name' => 'figures_text',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                    ),
        
                ),
            ),
            array(
                'key' => 'figures_item_2',
                'label' => 'Элемент 2',
                'name' => 'figures_item_2',
                'type' => 'group',
                'layout' => 'row',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'figures_text_before',
                        'label' => 'текст до числа',
                        'name' => 'figures_text_before',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'figures_number',
                        'label' => 'число',
                        'name' => 'figures_number',
                        'type' => 'number',
                    ),
                    array(
                        'key' => 'figures_text',
                        'label' => 'текст под числом',
                        'name' => 'figures_text',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                    ),
                ),
            ),
            array(
                'key' => 'figures_item_3',
                'label' => 'Элемент 3',
                'name' => 'figures_item_3',
                'type' => 'group',
                'layout' => 'row',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'figures_number',
                        'label' => 'число',
                        'name' => 'figures_number',
                        'type' => 'number',
                    ),
                    array(
                        'key' => 'figures_text',
                        'label' => 'текст под числом',
                        'name' => 'figures_text',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                    ),
            
                ),
            ),
            array(
                'key' => 'figures_item_4',
                'label' => 'Элемент 4',
                'name' => 'figures_item_4',
                'type' => 'text',
                'instructions' => 'Ссылка для скачивания, вставьте ссылку из медиафайлов',
            ),
            // -------------------------------
            array (
                'key' => 'tab_content_certificate',
                'label' => 'Блок сертификатов', 
                'type' => 'tab',
            ),
            array(
                'key' => 'certificate_title',
                'label' => 'Заголовок',
                'name' => 'certificate_title',
                'type' => 'text',
            ),
            array(
                'key' => 'certificate_description',
                'label' => 'Описание',
                'name' => 'certificate_description',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'certificate_list',
                'label' => 'Сертификаты',
                'name' => 'certificate_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'certificate_img_id',
                        'label' => 'Сертификат',
                        'name' => 'certificate_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 800/1150px.',
                    ),
                ),
            ),
            // ------------------------------- advantage
            // array (
            //     'key' => 'tab_content_advantage',
            //     'label' => 'Блок преимуществ', 
            //     'type' => 'tab',
            // ),
            // array(
            //     'key' => 'advantage_title',
            //     'label' => 'Заголовок',
            //     'name' => 'advantage_title',
            //     'type' => 'text',
            //     'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',
            // ),
            // array(
            //     'key' => 'advantage_subtitle',
            //     'label' => 'Под заголовок',
            //     'name' => 'advantage_subtitle',
            //     'type' => 'textarea',
            //     'rows' => 2,
            //     'instructions' => 'Используйте тег p для абзаца',
            // ),
            // array(
            //     'key' => 'advantage_list',
            //     'label' => 'Список',
            //     'name' => 'advantage_list',
            //     'type' => 'repeater',
            //     'layout' => 'row',  // 'block' || 'row'
            //     'button_label' => 'Добавить',
            //     'sub_fields' => array(
            //         array(
            //             'key' => 'advantage_text_title',
            //             'label' => 'заголовок',
            //             'name' => 'advantage_text_title',
            //             'type' => 'text',
            //             'wrapper' => array (
            //                 'width' => '20',
            //             ),
            //         ),
            //         array(
            //             'key' => 'advantage_text',
            //             'label' => 'текст',
            //             'name' => 'advantage_text',
            //             'type' => 'textarea',
            //             'rows' => 2,
            //             'wrapper' => array (
            //                 'width' => '60',
            //             ),
            //         ),
            //         array(
            //             'key' => 'advantage_link',
            //             'label' => 'ссылка',
            //             'name' => 'advantage_link',
            //             'type' => 'link',
            //             'return_format' => 'array',  // 'array' || 'url'
            //             'wrapper' => array (
            //                 'width' => '20',
            //             ),
            //         ),
            //     ),
            // ),
            // ------------------------------- location
            array (
                'key' => 'tab_content_location',
                'label' => 'Блок карты', 
                'type' => 'tab',
            ),
            // array(
            //     'key' => 'location_label',
            //     'label' => 'этикетка',
            //     'name' => 'location_label',
            //     'type' => 'text',
            // ),
            // array(
            //     'key' => 'location_title',
            //     'label' => 'заголовок',
            //     'name' => 'location_title',
            //     'type' => 'text',
            // ),
            // array(
            //     'key' => 'location_title_bottom',
            //     'label' => 'заголовок внизу блока',
            //     'name' => 'location_title_bottom',
            //     'type' => 'text',
            // ),
            // array(
            //     'key' => 'location_subtitle',
            //     'label' => 'описание',
            //     'name' => 'location_subtitle',
            //     'type' => 'text',
            // ),

            array(
                'key' => 'location_list',
                'label' => 'Список',
                'name' => 'location_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'location_sity',
                        'label' => 'Город',
                        'name' => 'location_sity',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                    array(
                        'key' => 'location_x',
                        'label' => 'Ось X',
                        'name' => 'location_x',
                        'type' => 'number',
                        'min' => 1,
                        'max' => 95,
                        'step' => 1,
                        'wrapper' => array (
                            'width' => '20',
                        ),
                        'instructions' => 'Диапозон чисел от 1 - 95',
                    ),
                    array(
                        'key' => 'location_y',
                        'label' => 'Ось Y',
                        'name' => 'location_y',
                        'type' => 'number',
                        'min' => 1,
                        'max' => 95,
                        'step' => 1,
                        'wrapper' => array (
                            'width' => '20',
                        ),
                        'instructions' => 'Диапозон чисел от 1 - 95',
                    ),
                ),
            ),
            // ------------------------------- reviews
            array (
                'key' => 'tab_content_reviews',
                'label' => 'Блок отзывов', 
                'type' => 'tab',
            ),
            array(
                'key' => 'reviews_label',
                'label' => 'этикетка',
                'name' => 'reviews_label',
                'type' => 'text',
            ),
            array(
                'key' => 'reviews_title',
                'label' => 'заголовок',
                'name' => 'reviews_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',
            ),
            array(
                'key' => 'reviews_list',
                'label' => 'Список',
                'name' => 'reviews_list',
                'type' => 'repeater',
                'max' => '2',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'reviews_item',
                        'label' => 'Элемент списка',
                        'name' => 'reviews_item',
                        'type' => 'text',
                        'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',

                    ),
                ),
            ),
            array(
                'key' => 'reviews_doc',
                'label' => 'Документы',
                'name' => 'reviews_doc',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'reviews_doc_img_id',
                        'label' => 'Документ',
                        'name' => 'reviews_doc_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 800/1150px',
                    ),
                ),
            ),
            array(
                'key' => 'reviews_video',
                'label' => 'Видео',
                'name' => 'reviews_video',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'reviews_video_img_id',
                        'label' => 'Фон видео',
                        'name' => 'reviews_video_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения 760/550px',
                    ),
                    array(
                        'key' => 'reviews_video_name',
                        'label' => 'Заголовок',
                        'name' => 'reviews_video_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'reviews_video_time',
                        'label' => 'Длительность',
                        'name' => 'reviews_video_time',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'reviews_video_id',
                        'label' => 'ID видео',
                        'name' => 'reviews_video_id',
                        'type' => 'text',
                        'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= QEPbamO8i9s',
                        'placeholder' => 'httuerixph8',
                    ),
                ),
            ),
            array(
                'key' => 'reviews_screen',
                'label' => 'Скриншоты',
                'name' => 'reviews_screen',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'reviews_screen_img_id',
                        'label' => 'Скриншот',
                        'name' => 'reviews_screen_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 380/550px',
                    ),
                ),
            ),
            // ------------------------------- logos
            array (
                'key' => 'tab_content_logos',
                'label' => 'Блок логотипов(ком.об.)', 
                'type' => 'tab',
            ),
            array(
                'key' => 'logos_title',
                'label' => 'заголовок',
                'name' => 'logos_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',
            ),
            array(
                'key' => 'logos_list',
                'label' => 'Список',
                'name' => 'logos_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'logos_pop',
                        'label' => 'pop',
                        'name' => 'logos_pop',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'logos_img_id',
                        'label' => 'Изображение',
                        'name' => 'logos_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                    ),
                ),
            ),
            // ------------------------------- videoWork
            array (
                'key' => 'tab_content_videoWork',
                'label' => 'Блог на ютуб ', 
                'type' => 'tab',
            ),
            array(
                'key' => 'videoWork_link',
                'label' => 'Cсылка на канал ютуба',
                'name' => 'videoWork_link',
                'type' => 'text',
            ),
            array(
                'key' => 'videoWork_list',
                'label' => 'Список',
                'name' => 'videoWork_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'videoWork_name',
                        'label' => 'Название',
                        'name' => 'videoWork_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'videoWork_time',
                        'label' => 'Длительность',
                        'name' => 'videoWork_time',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'videoWork_img_id',
                        'label' => 'Изображение',
                        'name' => 'videoWork_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 700/400px',
                    ),
                    array(
                        'key' => 'videoWork_id',
                        'label' => 'ID видео',
                        'name' => 'videoWork_id',
                        'type' => 'text',
                        'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= 1FBNIVQXhPc',
                        'placeholder' => '1FBNIVQXhPc',
                    ),
                ),
            ),
            // ------------------------------- team
            array (
                'key' => 'tab_content_team',
                'label' => 'Команда', 
                'type' => 'tab',
            ),
            array(
                'key' => 'team_title',
                'label' => 'Заголовок',
                'name' => 'team_title',
                'type' => 'text',
            ),
            array(
                'key' => 'team_subtitle',
                'label' => 'Описание',
                'name' => 'team_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'team_list',
                'label' => 'Сотрудники',
                'name' => 'team_list',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'team_person_name',
                        'label' => 'ФИО',
                        'name' => 'team_person_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_person_description',
                        'label' => 'Описание',
                        'name' => 'team_person_description',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_img_id',
                        'label' => 'Изображение',
                        'name' => 'team_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения 750/650px',
                    ),
                    array(
                        'key' => 'teamSlider_img_id',
                        'label' => 'Превью изображение',
                        'name' => 'teamSlider_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не 170/170px',
                    ),
                    array(
                        'key' => 'team_persone_list',
                        'label' => 'Список',
                        'name' => 'team_persone_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'team_persone_item',
                                'label' => 'Элемент списка',
                                'name' => 'team_persone_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            // ------------------------------- 404
            array (
                'key' => 'tab_content_404',
                'label' => 'Страница 404', 
                'type' => 'tab',
            ),
            array(
                'key' => '404_title',
                'label' => 'Заголовок',
                'name' => '404_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => '404_subtitle',
                'label' => 'Подзаголовок',
                'name' => '404_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => '404_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => '404_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            // ------------------------------- gifts
            array (
                'key' => 'tab_content_gifts',
                'label' => 'Подарки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'gifts_sec_title',
                'label' => 'Заголовок',
                'name' => 'gifts_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'gifts_sec_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'gifts_sec_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'gifts_list',
                'label' => 'Список',
                'name' => 'gifts_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'gifts_title',
                        'label' => 'Заголовок',
                        'name' => 'gifts_title',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '50',
                        ),
                    ),
                    array(
                        'key' => 'gifts_desc',
                        'label' => 'Описание',
                        'name' => 'gifts_desc',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '50',
                        ),
                    ),
                    array(
                        'key' => 'gifts_bg_id',
                        'label' => 'Фон',
                        'name' => 'gifts_bg_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 600/400px.',
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                    array(
                        'key' => 'gifts_price',
                        'label' => 'Цена',
                        'name' => 'gifts_price',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                    array(
                        'key' => 'gifts_oldprice',
                        'label' => 'Старая цена',
                        'name' => 'gifts_oldprice',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                ),
            ),
            // ------------------------------- privacy
            array (
                'key' => 'tab_content_privacy',
                'label' => 'Политика конфиденциальности', 
                'type' => 'tab',
            ),
            array(
                'key' => 'privacy_content',
                'label' => 'Контент',
                'name' => 'privacy_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',  // 'visual' || 'text'
                'toolbar' => 'full',  // 'basic'
                'media_upload' => 0,
                'delay' => 0,
            ),
            // ------------------------------- download
            array (
                'key' => 'tab_content_download',
                'label' => 'Документы (скачать)', 
                'type' => 'tab',
            ),
            array(
                'key' => 'data_download_report',
                'label' => 'Скачайте пример реальной сметы на ремонт с полными графиками работ',
                'name' => 'data_download_report',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_sidebar',
                'label' => 'Скачайте презентацию с портфолио и ценами всего в 1 клик (sidebar)',
                'name' => 'data_download_sidebar',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_modal',
                'label' => 'Не можем отпустить вас с пустыми руками!(модальное окно)',
                'name' => 'data_download_modal',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_modal2',
                'label' => 'Скачайте презентацию АРТСТРОЙ (модальное окно)',
                'name' => 'data_download_modal2',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_leadmagnet',
                'label' => 'Лидмагнит',
                'name' => 'data_download_leadmagnet',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_presentation',
                'label' => 'Презентация (страница - Главная)',
                'name' => 'data_download_presentation',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_presentation_service',
                'label' => 'Презентация (страница - Услуги)',
                'name' => 'data_download_presentation_service',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_presentation_design',
                'label' => 'Презентация (страница - Дизайн Проектирование)',
                'name' => 'data_download_presentation_design',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_presentationOneClick',
                'label' => 'Презентация (Скачайте в 1 клик пример альбома чертежей, смету, график работ и поставок)',
                'name' => 'data_download_presentationOneClick',
                'type' => 'text',
            ),
            array(
                'key' => 'data_download_presentation_construction',
                'label' => 'Презентация (страница - Малоэтажное строительство)',
                'name' => 'data_download_presentation_construction',
                'type' => 'text',
            ),
            // array(
            //     'key' => 'data_download_one_click',
            //     'label' => 'Скачайте в 1 клик пример альбома (Презентация)',
            //     'name' => 'data_download_one_click',
            //     'type' => 'text',
            // ),
            // array(
            //     'key' => 'data_download_',
            //     'label' => '',
            //     'name' => 'data_download_',
            //     'type' => 'text',
            // ),

            // ------------------------------- calculate
            array (
                'key' => 'tab_content_calculate',
                'label' => 'Что нужно расчитать? (модальное окно)', 
                'type' => 'tab',
            ),
            array(
                'key' => 'calculate_list',
                'label' => 'Список',
                'name' => 'calculate_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'calculate_title',
                        'label' => 'Заголовок',
                        'name' => 'calculate_title',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                        'required' => 1,
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'calculate_link',
                        'label' => 'Ссылка',
                        'name' => 'calculate_link',
                        'type' => 'text',
                        'required' => 1,
                        'wrapper' => array (
                            'width' => '60',
                        ),
                        'instructions' => 'Укажите страницу на которой находиться квиз в виде "/page/", пример: "/uslugi/remont-kvartir-domov/"',
                    ),
                ),
            ),
      
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-global-content',
                )
            )
        ),
    ));
    // END GLOBAL CONTENT
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN firstScreen
    acf_add_local_field_group(array(
        'key' => 'acf_firstScreen_settings',
        'title' => 'Настройки первой секции',
        'fields' => array(
            array(
                'key' => 'firstScreen_title',
                'label' => 'Заголовок',
                'name' => 'firstScreen_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег i для стилизации вертикального символа "<i>|</i>, тег br для переноса строки."',
            ),
            array(
                'key' => 'firstScreen_title_m',
                'label' => 'Заголовок для мобильной версии',
                'name' => 'firstScreen_title_m',
                'type' => 'text',
            ),
            array(
                'key' => 'firstScreen_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'firstScreen_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'firstScreen_desc',
                'label' => 'Описание',
                'name' => 'firstScreen_desc',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            )
        )
    ));
    // END firstScreen
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN firstScreen about company approach
    acf_add_local_field_group(array(
        'key' => 'acf_firstScreen_about_settings',
        'title' => 'Настройки первой секции',
        'fields' => array(
            array(
                'key' => 'approach_title',
                'label' => 'Заголовок',
                'name' => 'approach_title',
                'type' => 'text',
            ),
            array(
                'key' => 'approach_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'approach_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'approach_video_id',
                'label' => 'ID видео',
                'name' => 'approach_video_id',
                'type' => 'text',
                'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= QEPbamO8i9s',
                'placeholder' => 'httuerixph8',
            ),
            array(
                'key' => 'approach_video_label',
                'label' => 'Описание видео',
                'name' => 'approach_video_label',
                'type' => 'text',
            ),
            array(
                'key' => 'approach_video_time',
                'label' => 'Длительность видео',
                'name' => 'approach_video_time',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about.php',
                )
            )
        )
    ));
    // END firstScreen About company
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN QUIZ homepage + template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_quiz_settings',
        'title' => 'Настройки квизов секции',
        'fields' => array(
            array(
                'key' => 'quiz_relations',
                'label' => 'Выбирите квиз',
                'name' => 'quiz_relations',
                'type' => 'post_object',
                'allow_null' => 1,
                'multiple' => 0,
                'return_format' => 'id',  // 'id' || 'object'
                'post_type' => 'quiz',  // or array of post types e.g. ['post', 'page']
                'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-quiz.php',
                ),
            ),
        )
    ));
    // END QUIZ 
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN projects homepage + template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_projects_settings',
        'title' => 'Настройки портфолио(проекты)',
        'fields' => array(
            array(
                'key' => 'projects_sec_title',
                'label' => 'Заголовок',
                'name' => 'projects_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'projects_sec_desc',
                'label' => 'Описание',
                'name' => 'projects_sec_desc',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'projects_runningLine',
                'label' => 'Бегущая строка',
                'name' => 'projects_runningLine',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'projects_runningLine_item',
                        'label' => 'Элемент',
                        'name' => 'projects_runningLine_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'projects_relations',
                'label' => 'Выбирите проекы',
                'name' => 'projects_relations',
                'type' => 'post_object',
                'allow_null' => 1,
                'multiple' => 1,
                'return_format' => 'id',  // 'id' || 'object'
                'post_type' => 'portfolio',  // or array of post types e.g. ['post', 'page']
                'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
            ),
            array(
                'key' => 'projects_buton',
                'label' => 'Ссылка кнопки',
                'name' => 'projects_buton',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),

        ),
        // 'menu_order' => 1,
    ));
    // END projects 
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN SEO content homepage services apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_seo_settings',
        'title' => 'Настройки SEO блока презентации',
        'fields' => array(
            array(
                'key' => 'seo_boolean',
                'label' => 'Отображать SEO секцию на странице',
                'name' => 'seo_boolean',
                'type' => 'true_false',
                // 'message' => __('Text after toggler', 'txtdomain'),
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'content_seo_title',
                'label' => 'Заголовок',
                'name' => 'content_seo_title',
                'type' => 'text',
            ),
            array(
                'key' => 'content_seo_prewiew',
                'label' => 'Первый абзац',
                'name' => 'content_seo_prewiew',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'seo_content',
                'label' => 'Скрытый контент',
                'name' => 'seo_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',  // 'visual' || 'text'
                'toolbar' => 'full',  // 'basic' \\ 'full'
                'media_upload' => 0,
                'delay' => 0,
                'instructions' => 'Используйте заголовки (h1 - h6), абзацы (p), списки (ul)',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-services.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 150,
    ));
    // END SEO content
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN honest template: homepage apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_honest_settings',
        'title' => 'Настройки секции будем честными',
        'fields' => array(
            array(
                'key' => 'honest_title',
                'label' => 'Заголовок',
                'name' => 'honest_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'honest_subtitle',
                'label' => 'Под заголовок',
                'name' => 'honest_subtitle',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'honest_note',
                'label' => 'примечание',
                'name' => 'honest_note',
                'type' => 'text',
            ),
            array(
                'key' => 'honest_list',
                'label' => 'Список',
                'name' => 'honest_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'honest_item',
                        'label' => 'Элемент списка',
                        'name' => 'honest_item',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 50,
    ));
    // END honest
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN consultation
    acf_add_local_field_group(array(
        'key' => 'acf_consultation_settings',
        'title' => 'Настройки секции консультации',
        'fields' => array(
            array(
                'key' => 'consultation_boolean',
                'label' => 'Отображать блок?',
                'name' => 'consultation_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'consultation_title',
                'label' => 'Заголовок',
                'name' => 'consultation_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'consultation_list',
                'label' => 'Список',
                'name' => 'consultation_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'consultation_item',
                        'label' => 'Элемент списка',
                        'name' => 'consultation_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'consultation_manager_img_id',
                'label' => 'Изображение менеджера',
                'name' => 'consultation_manager_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 610/800px.',
            ),
            array(
                'key' => 'consultation_manager_name',
                'label' => 'ФИО',
                'name' => 'consultation_manager_name',
                'type' => 'text',
            ),
            array(
                'key' => 'consultation_manager_post',
                'label' => 'Информация о менеджере',
                'name' => 'consultation_manager_post',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                )
            ),
        ),
        'menu_order' => 50,
    ));
    // END consultation
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN consultationSoc
    acf_add_local_field_group(array(
        'key' => 'acf_consultationSoc_settings',
        'title' => 'Настройки секции консультации (блок с соц. сетями)',
        'fields' => array(
            array(
                'key' => 'consultationSoc_boolean',
                'label' => 'Отображать блок?',
                'name' => 'consultationSoc_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'consultationSoc_title',
                'label' => 'Заголовок',
                'name' => 'consultationSoc_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'consultationSoc_list',
                'label' => 'Список',
                'name' => 'consultationSoc_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'consultation_item',
                        'label' => 'Элемент списка',
                        'name' => 'consultation_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'consultationSoc_manager_img_id',
                'label' => 'Изображение менеджера',
                'name' => 'consultationSoc_manager_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 610/800px.',
            ),
            array(
                'key' => 'consultationSoc_manager_name',
                'label' => 'ФИО',
                'name' => 'consultationSoc_manager_name',
                'type' => 'text',
            ),
            array(
                'key' => 'consultationSoc_manager_post',
                'label' => 'Информация о менеджере',
                'name' => 'consultationSoc_manager_post',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                )
            ),
        ),
        'menu_order' => 51,
    ));
    // END consultationSoc
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN homeBlog template-homepage.php
    acf_add_local_field_group(array(
        'key' => 'acf_homeBlog_settings',
        'title' => 'Настройки cтатей блога',
        'fields' => array(
            array(
                'key' => 'homeBlog_relations',
                'label' => 'Выбирите статьи',
                'name' => 'homeBlog_relations',
                'type' => 'post_object',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',  // 'id' || 'object'
                'post_type' => 'post',  // or array of post types e.g. ['post', 'page']
                'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
            ),
            array(
                'key' => 'homeBlog_btn_link',
                'label' => 'Ссылка',
                'name' => 'homeBlog_btn_link',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
        ),
        'menu_order' => 45,
    ));
    // END homeBlog
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN faq template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_faq_settings',
        'title' => 'Настройки секции "Вопрос - Ответ"',
        'fields' => array(
            // -------------------------------
            array (
                'key' => 'tab_faq_general',
                'label' => 'Общие настройки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'faq_title',
                'label' => 'Заголовок',
                'name' => 'faq_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента.',
                'placeholder' => 'Это <b>жирный текст</b>, не жирный текст.',
            ),
            // -------------------------------
            array (
                'key' => 'tab_faq_left',
                'label' => 'Колонка слева', 
                'type' => 'tab',
            ),
            array(
                'key' => 'faq_list_left',
                'label' => 'Вопрос - Ответ',
                'name' => 'faq_list_left',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'faq_question',
                        'label' => 'Вопрос',
                        'name' => 'faq_question',
                        'type' => 'textarea',
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'faq_answer',
                        'label' => 'Ответ',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                        'instructions' => 'Используйте тег p для абзацев.',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                ),
            ),
            // -------------------------------
            array (
                'key' => 'tab_faq_right',
                'label' => 'Колонка справа', 
                'type' => 'tab',
            ),
            array(
                'key' => 'faq_list_right',
                'label' => 'Вопрос - Ответ',
                'name' => 'faq_list_right',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'faq_question',
                        'label' => 'Вопрос',
                        'name' => 'faq_question',
                        'type' => 'textarea',
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'faq_answer',
                        'label' => 'Ответ',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                        'instructions' => 'Используйте тег p для абзацев.',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 100,
    ));
    // END faq
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN post singleBlog
    acf_add_local_field_group(array(
        'key' => 'acf_singleBlog_settings',
        'title' => 'Основные настройки',
        'fields' => array(
            array(
                'key' => 'singleBlog_img',
                'label' => 'Изображение обложки',
                'name' => 'singleBlog_img',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 500/350px.',
            ),
            array(
                'key' => 'singleBlog_time',
                'label' => 'Время прочтения',
                'name' => 'singleBlog_time',
                'type' => 'text',
                'placeholder' => 'Читать примерно 3 минуты',
            ),
            array(
                'key' => 'singleBlog_hashtags',
                'label' => 'Хештеги',
                'name' => 'singleBlog_hashtags',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'singleBlog_hashtag',
                        'label' => 'Хештег',
                        'name' => 'singleBlog_hashtag',
                        'type' => 'text',
                    ),
   
                ),
            ),
   
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                )
            )
        )
    ));
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // END BEGIN post_type post
    acf_add_local_field_group(array(
        'key' => 'group_639b03a337c16',
        'title' => 'Контент статьи',
        'fields' => array(
            array(
                'key' => 'field_639b059387011',
                'label' => 'Контент',
                'name' => 'singleBlog_content',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_639b061587012',
                        'label' => 'Выбор блока',
                        'name' => 'vybor_bloka',
                        'type' => 'radio',
                        'instructions' => 'Рекомендукмые изображения: изображение - 1080/500px, изображение-текст - 500/350px ',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'text' => 'текст',
                            'text-img' => 'текст - изображение',
                            'img-text' => 'изображение - текст',
                            'img' => 'изображене',
                            'quote' => 'цитата',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 0,
                        'default_value' => 'text',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                        'save_other_choice' => 0,
                    ),
                    array(
                        'key' => 'field_639b07aeefac2',
                        'label' => 'Контент',
                        'name' => 'blok_s_kontentom',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'text',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'text-img',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'img-text',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'media_upload' => 0,
                        'toolbar' => 'full',
                        'delay' => 0,
                    ),
                    array(
                        'key' => 'field_639b07ddefac3',
                        'label' => 'Изображение',
                        'name' => 'blok_s_izobrazhenie',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'img',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'text-img',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'img-text',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_639b0802efac4',
                        'label' => 'Подпись',
                        'name' => 'podpis_k_izobrazheniyu',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'img',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_639b0888192c5',
                        'label' => 'Цитата',
                        'name' => 'blok_s_czitatoj',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_639b061587012',
                                    'operator' => '==',
                                    'value' => 'quote',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    // END singleBlog post_type post
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN post QUIZ quiz
    acf_add_local_field_group(array(
        'key' => 'acf_quiz',
        'title' => 'Настройки квизов',
        'fields' => array(
            // -------------------------------
            array (
                'key' => 'tab_quiz_general',
                'label' => 'Общие настройки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'quiz_title',
                'label' => 'Заголовок',
                'name' => 'quiz_title',
                'type' => 'text',
            ),
            array(
                'key' => 'quiz_subtitle',
                'label' => 'Описание',
                'name' => 'quiz_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'quiz_employee_bg_id',
                'label' => 'Изображение',
                'name' => 'quiz_employee_bg_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 560/925px.',
            ),
            array(
                'key' => 'quiz_text',
                'label' => 'Описание под изображением',
                'name' => 'quiz_text',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            // -------------------------------

        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'quiz',
                )
            )
        ),
    ));
    // END post QUIZ
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN logos template-about.php apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_logos_settings',
        'title' => 'Настройки логотипов на странице',
        'fields' => array(
            array(
                'key' => 'logos_page_title',
                'label' => 'Заголовок',
                'name' => 'firstScreen_title',
                'type' => 'text',
            ),

            array(
                'key' => 'logos_page_label',
                'label' => 'Описание',
                'name' => 'logos_page_label',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'logos_page_list',
                'label' => 'Список',
                'name' => 'logos_page_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'logos_pop',
                        'label' => 'pop',
                        'name' => 'logos_pop',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'logos_img_id',
                        'label' => 'Изображение',
                        'name' => 'logos_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about.php',
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 30,
    ));
    // END logos
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN partOfTeam template-vacancy.php 
    acf_add_local_field_group(array(
        'key' => 'acf_partOfTeam_settings',
        'title' => 'Настройки первой секции, страница вакансии',
        'fields' => array(
            array(
                'key' => 'partOfTeam_title',
                'label' => 'Заголовок',
                'name' => 'partOfTeam_title',
                'type' => 'text',
            ),

            array(
                'key' => 'partOfTeam_subtitle',
                'label' => 'Описание',
                'name' => 'partOfTeam_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'partOfTeam_list',
                'label' => 'Список',
                'name' => 'partOfTeam_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'partOfTeam_item',
                        'label' => 'Элемент списка',
                        'name' => 'partOfTeam_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'partOfTeam_label',
                'label' => 'Описание над цифрами',
                'name' => 'partOfTeam_label',
                'type' => 'text',
            ),
            array(
                'key' => 'partOfTeam_figures',
                'label' => 'Цифры',
                'name' => 'partOfTeam_figures',
                'type' => 'repeater',
                // 'min' => '5',
                'max' => '4',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'figures_text_before',
                        'label' => 'текст до числа',
                        'name' => 'figures_text_before',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'figures_number',
                        'label' => 'число',
                        'name' => 'figures_number',
                        'type' => 'number',
                    ),
                    array(
                        'key' => 'figures_text_after',
                        'label' => 'текст после числа',
                        'name' => 'figures_text_after',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'figures_text',
                        'label' => 'текст под числом',
                        'name' => 'figures_text',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                    ),
                ),
            ),
            
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-vacancy.php',
                )
            )
        ),
        'menu_order' => 1,
    ));
    // END partOfTeam
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN teamSliders template-vacancy.php 
    acf_add_local_field_group(array(
        'key' => 'acf_teamSliders_settings',
        'title' => 'Настройки галереи',
        'fields' => array(
            array(
                'key' => 'teamSliders_label',
                'label' => 'Этикетка',
                'name' => 'teamSliders_label',
                'type' => 'text',
            ),
            array(
                'key' => 'teamSliders_title',
                'label' => 'Заголовок',
                'name' => 'teamSliders_title',
                'type' => 'text',
            ),
            array(
                'key' => 'teamSliders_list',
                'label' => 'Галерея',
                'name' => 'teamSliders_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'teamSliders_img_id',
                        'label' => 'Изображение',
                        'name' => 'teamSliders_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1200/960px.',
                    ),
                ),
            ),
            array(
                'key' => 'teamSliders_videos',
                'label' => 'Видео',
                'name' => 'teamSliders_videos',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'teamSliders_video_img_id',
                        'label' => 'Фон',
                        'name' => 'teamSliders_video_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1650/800px.',
                    ),
                    array(
                        'key' => 'teamSliders_video_name',
                        'label' => 'Название',
                        'name' => 'teamSliders_video_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'teamSliders_video_time',
                        'label' => 'Длительность',
                        'name' => 'teamSliders_video_time',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'teamSliders_video_id',
                        'label' => 'ID видео',
                        'name' => 'teamSliders_video_id',
                        'type' => 'text',
                        'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= QEPbamO8i9s',
                        'placeholder' => 'httuerixph8',
                    ),
                ),
            ),
        
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-vacancy.php',
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-designers.php',
                )
            ),
        ),
        'menu_order' => 5,
    ));
    // END teamSliders
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN vacancies template-vacancy.php 
    acf_add_local_field_group(array(
        'key' => 'acf_vacancies_settings',
        'title' => 'Настройки вакансий',
        'fields' => array(
            array(
                'key' => 'vacancies_subtitle',
                'label' => 'Заголовок блока',
                'name' => 'vacancies_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'vacancies_list',
                'label' => 'Список',
                'name' => 'vacancies_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'vacancies_item_tab',
                        'label' => 'ЗАГОЛОВОК ТАБА(вакансия)',
                        'name' => 'vacancies_item_tab',
                        'type' => 'text',
                        'required' => 1,
                        'instructions' => '<b style="color:red">Секция таба с контентом</b>',
                    ),
                    array(
                        'key' => 'vacancies_list_single',
                        'label' => 'Вакансия',
                        'name' => 'vacancies_list_single',
                        'type' => 'repeater',
                        'layout' => 'block',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'vacancies_title',
                                'label' => 'Заголовок (в теле вакансии)',
                                'name' => 'vacancies_title',
                                'required' => 1,
                                'type' => 'text',
                                'wrapper' => array (
                                    'width' => '100',
                                ),
                            ),
                            array(
                                'key' => 'vacancies_text',
                                'label' => 'Чем нужно будет заниматься:',
                                'name' => 'vacancies_text',
                                'type' => 'textarea',
                                'rows' => 6,
                                'wrapper' => array (
                                    'width' => '50',
                                ),
                                'instructions' => 'Используйте тег p для нового абзаца.',
                                'placeholder' => '<p>абзац</p>',
                            ),
                            array(
                                'key' => 'vacancies_terms',
                                'label' => 'От нас (условия):',
                                'name' => 'vacancies_terms',
                                'type' => 'repeater',
                                'layout' => 'table',  // 'block' || 'row'
                                'button_label' => 'Добавить',
                                'wrapper' => array (
                                    'width' => '50',
                                ),
                                'sub_fields' => array(
                                    array(
                                        'key' => 'vacancies_term',
                                        'label' => 'условие:',
                                        'name' => 'vacancies_term',
                                        'type' => 'text',
                                    ),
                                ),
                            ),
                            array(
                                'key' => 'vacancies_city',
                                'label' => 'Город:',
                                'name' => 'vacancies_city',
                                'type' => 'text',
                                'wrapper' => array (
                                    'width' => '33',
                                ),
                            ),
                            array(
                                'key' => 'vacancies_salary',
                                'label' => 'Зар. плата:',
                                'name' => 'vacancies_salary',
                                'type' => 'text',
                                'wrapper' => array (
                                    'width' => '33',
                                ),
                            ),
                            array(
                                'key' => 'vacancies_type',
                                'label' => 'Тип:',
                                'name' => 'vacancies_type',
                                'type' => 'text',
                                'wrapper' => array (
                                    'width' => '33',
                                ),
                            ),
        
                        ),
                    ),
 
                ),
            ),
        
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-vacancy.php',
                )
            )
        ),
        'menu_order' => 10,
    ));
    // END vacancies
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN provider template-purveyor.php 
    acf_add_local_field_group(array(
        'key' => 'acf_provider_settings',
        'title' => 'Настройки поставщиков',
        'fields' => array(
            array(
                'key' => 'provider_title',
                'label' => 'Заголовок',
                'name' => 'provider_title',
                'type' => 'text',
            ),
            array(
                'key' => 'provider_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'provider_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'provider_list',
                'label' => 'Список',
                'name' => 'provider_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'provider_item',
                        'label' => 'Элемент списка',
                        'name' => 'provider_item',
                        'type' => 'text',
                    ),
                ),
            ),
        
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-purveyor.php',
                )
            )
        ),
        'menu_order' => 10,
    ));
    // END provider
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN contacts template-contacts.php 
    acf_add_local_field_group(array(
        'key' => 'acf_contacts_settings',
        'title' => 'Настройки контактов',
        'fields' => array(
            array(
                'key' => 'contacts_title',
                'label' => 'Заголовок',
                'name' => 'contacts_title',
                'type' => 'text',
            ),
            
            array(
                'key' => 'contacts_list_location',
                'label' => 'Список адресов',
                'name' => 'contacts_list_location',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'contact_location_text',
                        'label' => 'Адресс',
                        'name' => 'contact_location_text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'contact_iframe_link',
                        'label' => 'Iframe карты',
                        'name' => 'contact_iframe_link',
                        'type' => 'text',
                        'instructions' => 'Вставьте скопированую ссылку Iframe, перейдите на <a href="https://yandex.ru/map-constructor/" target="_blank">конструктор карт</a>, создайте карту.',
                        'placeholder' => 'Пример: "https://yandex.ru/map-widget/v1/?um=constructor%3A517f80209eff5be70d54d90135057484989abca4bf803d75b37acf02aee4b0d4&amp;amp;source=constructor"',
                    ),
                ),
            ),
            array(
                'key' => 'contacts_link',
                'label' => 'Ссылка на реквизиты',
                'name' => 'contacts_link',
                'type' => 'text',
            ),
            array(
                'key' => 'contacts_list_office',
                'label' => 'Галерея до встречи в офисе',
                'name' => 'contacts_list_office',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'contacts_img_id',
                        'label' => 'Изображение',
                        'name' => 'contacts_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1200/960px.',
                    ),
                ),
            ),
            array(
                'key' => 'contacts_list_gate',
                'label' => 'Галерея до встречи у вас на замере',
                'name' => 'contacts_list_gate',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'contacts_img_id',
                        'label' => 'Изображение',
                        'name' => 'contacts_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1200/960px.',
                    ),
                ),
            ),

        
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-contacts.php',
                )
            )
        ),
        'menu_order' => 1,
    ));
    // END contacts
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-apartments.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_apartments_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'apartments_subtitle_top',
                'label' => 'Подзаголовок top',
                'name' => 'apartments_subtitle_top',
                'type' => 'text',
            ),
            array(
                'key' => 'apartments_title',
                'label' => 'Заголовок',
                'name' => 'apartments_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'apartments_subtitle_bottom',
                'label' => 'Подзаголовок bottom',
                'name' => 'apartments_subtitle_bottom',
                'type' => 'text',
            ),
   
            array(
                'key' => 'apartments_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'apartments_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'apartments_list',
                'label' => 'Список',
                'name' => 'apartments_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'apartments_item',
                        'label' => 'Элемент списка',
                        'name' => 'apartments_item',
                        'type' => 'text',
                    ),
                ),
            ),   
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-remont.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_remont_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'remont_subtitle_top',
                'label' => 'Подзаголовок top',
                'name' => 'remont_subtitle_top',
                'type' => 'text',
            ),
            array(
                'key' => 'remont_title',
                'label' => 'Заголовок',
                'name' => 'remont_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'remont_subtitle_bottom',
                'label' => 'Подзаголовок bottom',
                'name' => 'remont_subtitle_bottom',
                'type' => 'text',
            ),
   
            array(
                'key' => 'remont_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'remont_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            // array(
            //     'key' => 'apartments_list',
            //     'label' => 'Список',
            //     'name' => 'apartments_list',
            //     'type' => 'repeater',
            //     'layout' => 'block',  // 'block' || 'row'
            //     'button_label' => 'Добавить',
            //     'sub_fields' => array(
            //         array(
            //             'key' => 'apartments_item',
            //             'label' => 'Элемент списка',
            //             'name' => 'apartments_item',
            //             'type' => 'text',
            //         ),
            //     ),
            // ),   
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-design.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_design_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'design_subtitle_top',
                'label' => 'Подзаголовок top',
                'name' => 'design_subtitle_top',
                'type' => 'text',
            ),
            array(
                'key' => 'design_title',
                'label' => 'Заголовок',
                'name' => 'design_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'design_subtitle_bottom',
                'label' => 'Подзаголовок bottom',
                'name' => 'design_subtitle_bottom',
                'type' => 'text',
            ),
   
            array(
                'key' => 'design_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'design_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'design_list',
                'label' => 'Список',
                'name' => 'design_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'design_item',
                        'label' => 'Элемент списка',
                        'name' => 'design_item',
                        'type' => 'text',
                    ),
                ),
            ),   
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-construction.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_construction_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'construction_title',
                'label' => 'Заголовок',
                'name' => 'construction_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'construction_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'construction_subtitle',
                'type' => 'text',
            ),
   
            array(
                'key' => 'construction_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'construction_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'construction_list',
                'label' => 'Список',
                'name' => 'construction_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'construction_item',
                        'label' => 'Элемент списка',
                        'name' => 'construction_item',
                        'type' => 'text',
                    ),
                ),
            ),   
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-thanks.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_thanks_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'thanks_title',
                'label' => 'Заголовок',
                'name' => 'thanks_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'thanks_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'thanks_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'thanks_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'thanks_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'thanks_persone',
                'label' => 'Изображение сотрудника',
                'name' => 'thanks_persone',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 570/1020px.',
            ),
  
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-thanks.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN designers template-designers.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_designers_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'designers_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'designers_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'designers_title',
                'label' => 'Заголовок',
                'name' => 'designers_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'designers_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'designers_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'designers_list',
                'label' => 'Список',
                'name' => 'designers_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'designers_item',
                        'label' => 'Элемент списка',
                        'name' => 'designers_item',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-designers.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN head template-leadmagnet.php
    acf_add_local_field_group(array(
        'key' => 'acf_head_leadmagnet_settings',
        'title' => 'Настройки шапки',
        'fields' => array(
            array(
                'key' => 'leadmagnet_title',
                'label' => 'Заголовок',
                'name' => 'leadmagnet_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br. Тег i для выделения другим цветом',
            ),
            array(
                'key' => 'leadmagnet_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'leadmagnet_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'leadmagnet_desc',
                'label' => 'Описание',
                'name' => 'leadmagnet_desc',
                'type' => 'text',
            ),
            array(
                'key' => 'leadmagnet_img_id',
                'label' => 'Фоновое изображение блока',
                'name' => 'leadmagnet_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ), 
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-leadmagnet.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END head
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN portfolio POST TYPE -portfolio
    acf_add_local_field_group(array(
        'key' => 'group_63b80d9408b2e',
        'title' => 'Предварительный просмотр',
        'fields' => array(
            array(
                'key' => 'field_63b8103c42c52',
                'label' => 'Галерея',
                'name' => 'portfolio_list',
                'type' => 'repeater',
                'instructions' => '',
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_63b8108f42c53',
                        'label' => 'Выберите тип',
                        'name' => 'portfolio_radio',
                        'type' => 'radio',
                        'choices' => array(
                            'image' => 'Изображения',
                            'beforeAfter' => 'Изображение до и после',
                            'video' => 'Видео',
                        ),
                        'default_value' => 'image',
                        'layout' => 'horizontal',
                        'return_format' => 'value',
                    ),
                    array(
                        'key' => 'field_63b812ef2179f',
                        'label' => 'Изображение',
                        'name' => 'portfolio_img_id',
                        'type' => 'image',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/760px.',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'image',
                                ),
                            ),
                        ),
                
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                    ),
                    array(
                        'key' => 'field_63b81347217a0',
                        'label' => 'Изображение до',
                        'name' => 'portfolio_before_img_id',
                        'type' => 'image',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/760px.',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'beforeAfter',
                                ),
                            ),
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                    ),
                    array(
                        'key' => 'field_63b8136f217a1',
                        'label' => 'Изображение после',
                        'name' => 'portfolio_after_img_id',
                        'type' => 'image',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/760px.',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'beforeAfter',
                                ),
                            ),
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                    ),
                    array(
                        'key' => 'field_63b8138f217a2',
                        'label' => 'Фон',
                        'name' => 'portfolio_bg_id',
                        'type' => 'image',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/760px.',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'video',
                                ),
                            ),
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',

                    ),
                    array(
                        'key' => 'field_63b813b2217a3',
                        'label' => 'id видео',
                        'name' => 'portfolio_video_id',
                        'type' => 'text',
                        'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= 1FBNIVQXhPc',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'video',
                                ),
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_63b814e4b9f1e',
                        'label' => 'Миниатюрное изображение фото до и после',
                        'name' => 'portfolio_img_sm_id',
                        'type' => 'image',
                        'instructions' => 'Рекомендуемое разрешение изображения 250/104px.',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63b8108f42c53',
                                    'operator' => '==',
                                    'value' => 'beforeAfter',
                                ),
                            ),
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ),
            ),
        ),
        'menu_order' => 0,
    ));
    // END portfolio POST TYPE
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN project POST TYPE -portfolio
    acf_add_local_field_group(array(
        'key' => 'acf_project_settings',
        'title' => 'Настройки проекта',
        'fields' => array(
            array(
                'key' => 'project_desc',
                'label' => 'Краткое описание',
                'name' => 'project_desc',
                'type' => 'text',
                'required' => 1,
                'wrapper' => array (
                    'width' => '100',
                ),
            ),
            array(
                'key' => 'project_client',
                'label' => 'Заказчик:',
                'name' => 'project_client',
                'type' => 'text',
                'required' => 1,
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_time',
                'label' => 'Срок реализации:',
                'name' => 'project_time',
                'type' => 'text',
                'required' => 1,
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_location_label',
                'label' => 'Локация(этикетка)',
                'name' => 'project_location_label',
                'type' => 'text',
                'required' => 1,
                'placeholder' => 'ЖК Тихие зори',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_location',
                'label' => 'Локация:',
                'name' => 'project_location',
                'type' => 'text',
                'required' => 1,
                'placeholder' => 'Красноярск',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_all_settings',
                'name' => 'project_all_settings',
                'type' => 'message',
                'message' => '<h1 style="color:#03a9f4;">Далее настройки проектов</h1>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'project_style',
                'label' => 'Стиль:',
                'name' => 'project_style',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'project_cost_materials',
                'label' => 'Стомость материалов:',
                'name' => 'project_cost_materials',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'project_cost_work',
                'label' => 'Стомость работ за м2',
                'name' => 'project_cost_work',
                'type' => 'number',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'project_square',
                'label' => 'Площадь ремонта:',
                'name' => 'project_square',
                'type' => 'number',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'project_task',
                'label' => 'Задачи проекта:',
                'name' => 'project_task',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_do',
                'label' => 'Что сделали:',
                'name' => 'project_do',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_project',
                'label' => 'Ссылка дизайн проект:',
                'name' => 'project_project',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_review',
                'label' => 'Ссылка отзыв клиента:',
                'name' => 'project_review',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'project_steps',
                'label' => 'Процесс работы по шагам',
                'name' => 'project_steps',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'project_steps_title',
                        'label' => 'Заголовок',
                        'name' => 'project_steps_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'project_steps_text',
                        'label' => 'Описание',
                        'name' => 'project_steps_text',
                        'type' => 'textarea',
                        'rows' => 4,
                        'instructions' => 'Используйте тег p для нового абзаца.',
                        'placeholder' => '<p>абзац</p>',
                    ),
                    array(
                        'key' => 'project_steps_gallery',
                        'label' => 'Изображения',
                        'name' => 'project_steps_gallery',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'project_steps_img_id',
                                'label' => 'Изображение',
                                'name' => 'project_steps_img_id',
                                'type' => 'image',
                                'return_format' => 'id',  // 'array' || 'url'
                                'preview_size' => 'thumbnail',
                                'instructions' => 'Рекомендуемое разрешение изображения 1200/960px.',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'project_house_settings',
                'name' => 'project_house_settings',
                'type' => 'message',
                'message' => '<h1 style="color:#36a566;">Далее настройки домов</h1>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'project_house_price',
                'label' => '(данные для фильтра) Стоимость дома:',
                'name' => 'project_house_price',
                'type' => 'number',
                'wrapper' => array (
                    'width' => '50',
                    'class' => 'field__success',
                ),
                // 'min' => 0,
                // 'max' => 100,
                // 'step' => 1000,
                // 'default_value' => 'Default value',
                
            ),
            array(
                'key' => 'house_square',
                'label' => '(данные для фильтра) Площадь дома:',
                'name' => 'house_square',
                'type' => 'number',
                'wrapper' => array (
                    'width' => '50',
                    'class' => 'field__success',
                ),
            ),
            // array(
            //     'key' => 'project_house_project',
            //     'label' => 'Проект:',
            //     'name' => 'project_house_project',
            //     'type' => 'select',
            //     'allow_null' => 1,
            //     'multiple' => 0,
            //     'ui' => 1,
            //     // 'required' => 1,
            //     'return_format' => 'label',  // 'array' || 'label'
            //     'choices' => [
            //         'serial' => 'Серийный',   
            //         'individual' => 'Индивидуальный',
            //     ],
            //     'default_value' => '',
            //     'wrapper' => array (
            //         'width' => '20',
            //     ),
            // ),
            array(
                'key' => 'project_house_material',
                'label' => 'Материал:',
                'name' => 'project_house_material',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),
            // array(
            //     'key' => 'project_house_floors',
            //     'label' => 'Кол-во этажей:',
            //     'name' => 'project_house_floors',
            //     'type' => 'text',
            //     'wrapper' => array (
            //         'width' => '20',
            //     ),
            // ),
            array(
                'key' => 'project_house_rooms',
                'label' => 'Кол-во комнат:',
                'name' => 'project_house_rooms',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),
            array(
                'key' => 'project_house_bathrooms',
                'label' => 'Кол-во санузлов:',
                'name' => 'project_house_bathrooms',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),
            array(
                'key' => 'project_text',
                'label' => 'О проекте:',
                'name' => 'project_text',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'project_data_list',
                'label' => 'Данные по проетку дома(проекты, планировка ...)',
                'name' => 'project_data_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'data_title',
                        'label' => 'Заголовок',
                        'name' => 'data_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'data_slides',
                        'label' => 'Изображения',
                        'name' => 'data_slides',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'data_img_id',
                                'label' => 'Изображение',
                                'name' => 'data_img_id',
                                'type' => 'image',
                                'return_format' => 'id',  // 'array' || 'url'
                                'preview_size' => 'thumbnail',
                                'instructions' => 'Рекомендуемое разрешение изображения 1200/960px.',
                            ),
                        ),
                    ),
                    
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                )
            ),
        ),
        'menu_order' => 5,
    ));
    // END project
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN designer POST TYPE levelDesign
    acf_add_local_field_group(array(
        'key' => 'acf_levelDesign_settings',
        'title' => 'Настройки дизайнера',
        'fields' => array(
            array(
                'key' => 'levelDesign_desc',
                'label' => 'Краткое описание',
                'name' => 'levelDesign_desc',
                'type' => 'text',
                'required' => 1,
            ),
            array(
                'key' => 'levelDesign_img_id',
                'label' => 'Изображение',
                'name' => 'levelDesign_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 535/654px.',
            ),
            array(
                'key' => 'profile_progress',
                'label' => 'Достижения:',
                'name' => 'profile_progress',
                'type' => 'text',
                'required' => 1,
            ),
            // array(
            //     'key' => 'profile_total',
            //     'label' => '<b style="color:red" >Совокупный уровень:</b>',
            //     'name' => 'profile_total',
            //     'type' => 'select',
            //     'allow_null' => 1,
            //     'multiple' => 0,
            //     'ui' => 1,
            //     'required' => 1,
            //     'return_format' => 'value',  // 'array' || 'label'
            //     'choices' => [
            //         'stars_1' => '1',   
            //         'stars_2' => '2',   
            //         'stars_3' => '3',   
            //         'stars_4' => '4',   
            //         'stars_5' => '5',   
            //     ],
            //     'default_value' => 'stars_1',
            //     'instructions' => 'Выбирите',
            //     'wrapper' => array (
            //         'width' => '25',
            //     ),
            // ),
            array(
                'key' => 'profile_level',
                'label' => 'Уровень дизайна:',
                'name' => 'profile_level',
                'type' => 'select',
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 1,
                'required' => 1,
                'return_format' => 'value',  // 'array' || 'label'
                'choices' => [
                    'stars_1' => '1',   
                    'stars_2' => '2',   
                    'stars_3' => '3',   
                    'stars_4' => '4',   
                    'stars_5' => '5',   
                ],
                'default_value' => 'stars_1',
                'instructions' => 'Выбирите',
                'wrapper' => array (
                    'width' => '33',
                ),
            ),
            array(
                'key' => 'profile_drawing',
                'label' => 'Рабочие чертежи:',
                'name' => 'profile_drawing',
                'type' => 'select',
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 1,
                'required' => 1,
                'return_format' => 'value',  // 'array' || 'label'
                'choices' => [
                    'stars_1' => '1',   
                    'stars_2' => '2',   
                    'stars_3' => '3',   
                    'stars_4' => '4',   
                    'stars_5' => '5',   
                ],
                'default_value' => 'stars_1',
                'instructions' => 'Выбирите',
                'wrapper' => array (
                    'width' => '33',
                ),
            ),
            array(
                'key' => 'profile_3d',
                'label' => '3D-визуализация:',
                'name' => 'profile_3d',
                'type' => 'select',
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 1,
                'required' => 1,
                'return_format' => 'value',  // 'array' || 'label'
                'choices' => [
                    'stars_1' => '1',   
                    'stars_2' => '2',   
                    'stars_3' => '3',   
                    'stars_4' => '4',   
                    'stars_5' => '5',   
                ],
                'default_value' => 'stars_1',
                'instructions' => 'Выбирите',
                'wrapper' => array (
                    'width' => '33',
                ),
            ),
            array(
                'key' => 'profile_link',
                'label' => 'Ссылка на соц.сети',
                'name' => 'profile_link',
                'type' => 'text',
                'required' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'designer',
                )
            ),
        ),
        'menu_order' => 5,
    ));
    // END designer
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN task template: apartments remont design construction homepage services
    acf_add_local_field_group(array(
        'key' => 'acf_task_settings',
        'title' => 'Настройки секции с услугами',
        'fields' => array(
            array(
                'key' => 'task_radio',
                'label' => 'Настройка отображения заголовка и описания:',
                'name' => 'task_radio',
                'type' => 'radio',
                'layout' => 'horizontal', // horizontal   ||   vertical
                'choices' => array(
                    'horizon' => 'Заголовок слева, описание справа',
                    'vertical' => 'Заголовок сверху, описание снизу',
                ),
                'default_value' => 'horizon',
                'return_format' => 'value',  // 'array' || 'label'
            ),
            array(
                'key' => 'task_sec_title',
                'label' => 'Заголовок',
                'name' => 'task_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'task_sec_desc',
                'label' => 'Описание',
                'name' => 'task_sec_desc',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки."',
            ),
            array(
                'key' => 'task_list',
                'label' => 'Список',
                'name' => 'task_list',
                'type' => 'repeater',
                'max' => '4',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'task_img_id',
                        'label' => 'Изображение',
                        'name' => 'task_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения: маленькое - 480/480px, среднее - 950/480px, большое - 1430/480px.',
                    ),
                    array(
                        'key' => 'task_label',
                        'label' => 'Этикетка',
                        'name' => 'task_label',
                        'type' => 'text',
                        'default_value' => 'услуги',
                    ),
                    array(
                        'key' => 'task_subtitle',
                        'label' => 'Описание',
                        'name' => 'task_subtitle',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',
                    ),
                    array(
                        'key' => 'task_link',
                        'label' => 'Ссылка на услугу',
                        'name' => 'task_link',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                    ),
                    array(
                        'key' => 'task_title',
                        'label' => 'Текст cсылки на услугу',
                        'name' => 'task_title',
                        'type' => 'text',
                        'instructions' => 'Для переноса текста на новую стоку используйте тег br.',                        
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-services.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 2,
    ));
    // END task
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN muchMore template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_muchMore_settings',
        'title' => 'Настройки секции с табами',
        'fields' => array(
            array(
                'key' => 'muchMore_sec_title',
                'label' => 'Заголовок сеции',
                'name' => 'muchMore_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'muchMore_tab_1',
                'label' => 'Таб 1',
                'name' => 'muchMore_tab_1',
                'type' => 'group',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'muchMore_tab_name',
                        'label' => 'Название таба',
                        'name' => 'muchMore_tab_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_title',
                        'label' => 'Заголовок',
                        'name' => 'muchMore_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_img_id',
                        'label' => 'Фон',
                        'name' => 'muchMore_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/800px.',
                    ),
                    array(
                        'key' => 'muchMore_list',
                        'label' => 'Список',
                        'name' => 'muchMore_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'muchMore_item',
                                'label' => 'Элемент списка',
                                'name' => 'muchMore_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'muchMore_btn',
                        'label' => 'Кнопка',
                        'name' => 'muchMore_btn',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                    ),
                    array(
                        'key' => 'muchMore_link',
                        'label' => 'Ссылка',
                        'name' => 'muchMore_link',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                    ),
                    array(
                        'key' => 'muchMore_person_name',
                        'label' => 'ФИО',
                        'name' => 'muchMore_person_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_person_info',
                        'label' => 'Информация о человеке',
                        'name' => 'muchMore_person_info',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_person_img_id',
                        'label' => 'Изображение сотрудника',
                        'name' => 'muchMore_person_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 590/800px.',
                    ),
                    array(
                        'key' => 'muchMore_form',
                        'label' => 'Отображать форму?',
                        'name' => 'muchMore_form',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => 'Да',
                        'ui_off_text' => 'Нет',
                    ),
                ),
            ),
            array(
                'key' => 'muchMore_tab_2',
                'label' => 'Таб 2',
                'name' => 'muchMore_tab_2',
                'type' => 'group',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'muchMore_tab_name',
                        'label' => 'Название таба',
                        'name' => 'muchMore_tab_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_title',
                        'label' => 'Заголовок',
                        'name' => 'muchMore_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_text',
                        'label' => 'Контент',
                        'name' => 'muchMore_text',
                        'type' => 'textarea',
                        'rows' => 4,
                        'instructions' => 'Используйте тег p для нового абзаца.',
                        'placeholder' => '<p>абзац</p>',
                    ),
                    array(
                        'key' => 'muchMore_img_id',
                        'label' => 'Фон',
                        'name' => 'muchMore_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/800px.',
                    ),
                    array(
                        'key' => 'muchMore_logos_list',
                        'label' => 'Логотипы',
                        'name' => 'muchMore_logos_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'muchMore_logos_id',
                                'label' => 'Логотип',
                                'name' => 'muchMore_logos_id',
                                'type' => 'image',
                                'return_format' => 'id',  // 'id' || 'url' || 'array'
                                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                            ),
                            array(
                                'key' => 'muchMore_logos_item',
                                'label' => 'Подсказка',
                                'name' => 'muchMore_logos_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'muchMore_tab_3',
                'label' => 'Таб 3',
                'name' => 'muchMore_tab_3',
                'type' => 'group',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'muchMore_tab_name',
                        'label' => 'Название таба',
                        'name' => 'muchMore_tab_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_title',
                        'label' => 'Заголовок',
                        'name' => 'muchMore_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_img_id',
                        'label' => 'Фон',
                        'name' => 'muchMore_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/800px.',
                    ),
                    array(
                        'key' => 'muchMore_list',
                        'label' => 'Список',
                        'name' => 'muchMore_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'muchMore_list_mark',
                                'label' => 'Маркер?',
                                'name' => 'muchMore_list_mark',
                                'type' => 'true_false',
                                'default_value' => 1,
                                'ui' => 1,
                                'ui_on_text' => 'Да',
                                'ui_off_text' => 'Нет',
                                'wrapper' => array (
                                    'width' => '20',
                                ),
                            ),
                            array(
                                'key' => 'muchMore_item',
                                'label' => 'Элемент списка',
                                'name' => 'muchMore_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                 
                ),
            ),
            array(
                'key' => 'muchMore_tab_4',
                'label' => 'Таб 4',
                'name' => 'muchMore_tab_4',
                'type' => 'group',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'sub_fields' => array(
                    array(
                        'key' => 'muchMore_tab_name',
                        'label' => 'Название таба',
                        'name' => 'muchMore_tab_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_title',
                        'label' => 'Заголовок',
                        'name' => 'muchMore_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'muchMore_img_id',
                        'label' => 'Фон',
                        'name' => 'muchMore_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 1820/800px.',
                    ),            
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 5,
    ));
    // END muchMore
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN details template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_details_settings',
        'title' => 'Настройки блока - Внимание к деталям  ',
        'fields' => array(
            array(
                'key' => 'details_sec_title',
                'label' => 'Заголовок сеции',
                'name' => 'details_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'details_link',
                'label' => 'Ссылка на pdf файл',
                'name' => 'details_link',
                'type' => 'text',
            ),
            array(
                'key' => 'details_grid',
                'label' => 'Изображения',
                'name' => 'details_grid',
                'type' => 'repeater',
                'max' => '3',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'details_preview_id',
                        'label' => 'Изображение',
                        'name' => 'details_preview_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 590/900px.',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'details_plus',
                        'label' => 'Подсказки',
                        'name' => 'details_plus',
                        'type' => 'repeater',
                        'max' => '5',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'instructions' => 'Максиму 5 подсказок!',
                        'sub_fields' => array(
                            array(
                                'key' => 'details_pop_content',
                                'label' => 'Подсказка',
                                'name' => 'details_pop_content',
                                'type' => 'text',
                                'wrapper' => array (
                                    'width' => '60',
                                ),
                            ),
                            array(
                                'key' => 'details_pop_location_x',
                                'label' => 'Ось X',
                                'name' => 'details_pop_location_x',
                                'type' => 'number',
                                'min' => 2,
                                'max' => 90,
                                'step' => 1,
                                'wrapper' => array (
                                    'width' => '20',
                                ),
                                'instructions' => 'Диапозон чисел от 2 - 90',
                            ),
                            array(
                                'key' => 'details_pop_location_y',
                                'label' => 'Ось Y',
                                'name' => 'details_pop_location_y',
                                'type' => 'number',
                                'min' => 2,
                                'max' => 90,
                                'step' => 1,
                                'wrapper' => array (
                                    'width' => '20',
                                ),
                                'instructions' => 'Диапозон чисел от 2 - 90',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'details_list',
                'label' => 'Описание',
                'name' => 'details_list',
                'type' => 'repeater',
                'max' => '2',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'details_label',
                        'label' => 'Заголовок',
                        'name' => 'details_label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'details_text',
                        'label' => 'Текст',
                        'name' => 'details_text',
                        'type' => 'textarea',
                        'rows' => 2,
                        'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                    ),
                ),
            ),

    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 10,
    ));
    // END details
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN facts_1 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_facts_settings_1',
        'title' => '<b style="color:#36a566;">Настройки Фактов 1</b>',
        'fields' => array(
            array(
                'key' => 'facts_sec_subtitle_top_1',
                'label' => 'Подзаголовок над заголовком',
                'name' => 'facts_sec_subtitle_top_1',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_sec_title_1',
                'label' => 'Заголовок сеции',
                'name' => 'facts_sec_title_1',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'facts_sec_subtitle_bottom_1',
                'label' => 'Подзаголовок под заголовком',
                'name' => 'facts_sec_subtitle_bottom_1',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_select_1',
                'label' => 'Светлая/Темная тема',
                'name' => 'facts_select_1',
                'type' => 'radio',
                'choices' => array(
                    'light' => 'Светлая',
                    'dark' => 'Темная',
                ),
                'default_value' => 'light',
                'layout' => 'horizontal', // horizontal   ||   vertical
                'return_format' => 'value',
            ),
            array(
                'key' => 'facts_list_1',
                'label' => 'Список',
                'name' => 'facts_list_1',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'facts_item',
                        'label' => 'Элемент списка',
                        'name' => 'facts_item',
                        'type' => 'text',
                        'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 70,
    ));
    // END facts_1
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN facts_2 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_facts_settings_2',
        'title' => '<b style="color:#36a566;">Настройки Фактов 2</b>',
        'fields' => array(
            array(
                'key' => 'facts_sec_subtitle_top_2',
                'label' => 'Подзаголовок над заголовком',
                'name' => 'facts_sec_subtitle_top_2',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_sec_title_2',
                'label' => 'Заголовок сеции',
                'name' => 'facts_sec_title_2',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'facts_sec_subtitle_bottom_2',
                'label' => 'Подзаголовок под заголовком',
                'name' => 'facts_sec_subtitle_bottom_2',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_select_2',
                'label' => 'Светлая/Темная тема',
                'name' => 'facts_select_2',
                'type' => 'radio',
                'choices' => array(
                    'light' => 'Светлая',
                    'dark' => 'Темная',
                ),
                'default_value' => 'light',
                'layout' => 'horizontal', // horizontal   ||   vertical
                'return_format' => 'value',
            ),
            array(
                'key' => 'facts_list_2',
                'label' => 'Список',
                'name' => 'facts_list_2',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'facts_item',
                        'label' => 'Элемент списка',
                        'name' => 'facts_item',
                        'type' => 'text',
                        'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 71,
    ));
    // END facts_2
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN facts_3 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_facts_settings_3',
        'title' => '<b style="color:#36a566;">Настройки Фактов 3</b>',
        'fields' => array(
            array(
                'key' => 'facts_sec_subtitle_top_3',
                'label' => 'Подзаголовок над заголовком',
                'name' => 'facts_sec_subtitle_top_3',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_sec_title_3',
                'label' => 'Заголовок сеции',
                'name' => 'facts_sec_title_3',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'facts_sec_subtitle_bottom_3',
                'label' => 'Подзаголовок под заголовком',
                'name' => 'facts_sec_subtitle_bottom_3',
                'type' => 'text',
            ),
            array(
                'key' => 'facts_select_3',
                'label' => 'Светлая/Темная тема',
                'name' => 'facts_select_3',
                'type' => 'radio',
                'choices' => array(
                    'light' => 'Светлая',
                    'dark' => 'Темная',
                ),
                'default_value' => 'light',
                'layout' => 'horizontal', // horizontal   ||   vertical
                'return_format' => 'value',
            ),
            array(
                'key' => 'facts_list_3',
                'label' => 'Список',
                'name' => 'facts_list_3',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'facts_item',
                        'label' => 'Элемент списка',
                        'name' => 'facts_item',
                        'type' => 'text',
                        'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 73,
    ));
    // END facts_3
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN docount template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_docount_settings',
        'title' => 'Настройки сметы',
        'fields' => array(
            array(
                'key' => 'docount_sec_title',
                'label' => 'Заголовок сеции',
                'name' => 'docount_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'docount_sec_subtitle',
                'label' => 'Описание',
                'name' => 'docount_sec_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'docount_list',
                'label' => 'Список',
                'name' => 'docount_list',
                'type' => 'repeater',
                'max' => '2',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'docount_item',
                        'label' => 'Элемент списка',
                        'name' => 'docount_item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'docount_button',
                'label' => 'Ссылка кнопки',
                'name' => 'docount_button',
                'type' => 'text',
            ),
            array(
                'key' => 'docount_boolean',
                'label' => 'Отображать блок с формой?',
                'name' => 'docount_boolean',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 20,
    ));
    // END docount
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN personalManager template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_personalManager_settings',
        'title' => 'Настройки персонального менеджера',
        'fields' => array(
            array(
                'key' => 'personalManager_sec_title',
                'label' => 'Заголовок сеции слева',
                'name' => 'personalManager_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_sec_title_right',
                'label' => 'Заголовок сеции справа',
                'name' => 'personalManager_sec_title_right',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_sec_subtitle',
                'label' => 'Описание слева',
                'name' => 'personalManager_sec_subtitle',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_sec_subtitle_right',
                'label' => 'Описание справа',
                'name' => 'personalManager_sec_subtitle_right',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_bg_id',
                'label' => 'Фон',
                'name' => 'personalManager_bg_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1720/800px.',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_img_id',
                'label' => 'Изображене сотрудника',
                'name' => 'personalManager_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 590/800px.',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'personalManager_list',
                'label' => 'Список',
                'name' => 'personalManager_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'personalManager_item',
                        'label' => 'Элемент списка',
                        'name' => 'personalManager_item',
                        'type' => 'text',
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 25,
    ));
    // END personalManager
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN information template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_information_settings',
        'title' => 'Настройки дополнительной информации',
        'fields' => array(
            array(
                'key' => 'information_sec_subtitle',
                'label' => 'Описание',
                'name' => 'information_sec_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'information_sec_title',
                'label' => 'Заголовок',
                'name' => 'information_sec_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
            ),
            array(
                'key' => 'information_bg_id',
                'label' => 'Фон',
                'name' => 'information_bg_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 30,
    ));
    // END information
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN page row template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_row_page_settings',
        'title' => 'Настройки cписка в строку',
        'fields' => array(
            array(
                'key' => 'page_row_list',
                'label' => 'Список',
                'name' => 'page_row_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'instructions' => 'Используйте тег b для выделения жирного контента. Для переноса строки используйте тег br.',
                'sub_fields' => array(
                    array(
                        'key' => 'page_row_item',
                        'label' => 'Элемент списка',
                        'name' => 'page_row_item',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 35,
    ));
    // END page row
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN documents template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_documents_settings',
        'title' => '<b style="color:#36a566;">Настройки документов 1</b>',
        'fields' => array(
            array(
                'key' => 'documents_title',
                'label' => 'Заголовок',
                'name' => 'documents_title',
                'type' => 'text',
            ),
            array(
                'key' => 'documents_description',
                'label' => 'Описание',
                'name' => 'documents_description',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'documents_list',
                'label' => 'Документы',
                'name' => 'documents_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'documents_img_id',
                        'label' => 'Документ',
                        'name' => 'documents_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 800/1150px.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 100,
    ));
    // END documents
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN documents 2 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_documents_2_settings',
        'title' => '<b style="color:#36a566;">Настройки документов 2</b>',
        'fields' => array(
            array(
                'key' => 'documents_title_2',
                'label' => 'Заголовок',
                'name' => 'documents_title_2',
                'type' => 'text',
            ),
            array(
                'key' => 'documents_description_2',
                'label' => 'Описание',
                'name' => 'documents_description_2',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'documents_list_2',
                'label' => 'Документы',
                'name' => 'documents_list_2',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'documents_img_id',
                        'label' => 'Документ',
                        'name' => 'documents_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 800/1150px.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 101,
    ));
    // END documents 2
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN stages template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_stages_settings',
        'title' => 'Настройки этапов работы',
        'fields' => array(
            array(
                'key' => 'stages_sec_title',
                'label' => 'Заголовок',
                'name' => 'stages_sec_title',
                'type' => 'text',
            ),
            array(
                'key' => 'stages_sec_description',
                'label' => 'Описание',
                'name' => 'stages_sec_description',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для нового абзаца.',
                'placeholder' => '<p>абзац</p>',
            ),
            array(
                'key' => 'stages_list',
                'label' => 'Список',
                'name' => 'stages_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'stages_title',
                        'label' => 'Заголовок',
                        'name' => 'stages_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'stages_description',
                        'label' => 'Описание',
                        'name' => 'stages_description',
                        'type' => 'text',
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 50,
    ));
    // END stages
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN stages 2 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_stages_settings_2',
        'title' => 'Настройки шагов',
        'fields' => array(
            array(
                'key' => 'stages_sec_title_2',
                'label' => 'Заголовок',
                'name' => 'stages_sec_title_2',
                'type' => 'text',
            ),
            array(
                'key' => 'stages_list_2',
                'label' => 'Список',
                'name' => 'stages_list_2',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'stages_text',
                        'label' => 'Описание',
                        'name' => 'stages_text',
                        'type' => 'textarea',
                        'rows' => 2,
                        'instructions' => 'Используйте тег p для нового абзаца.',
                        'placeholder' => '<p>абзац</p>',
                        'wrapper' => array (
                            'width' => '80',
                        ),
                    ),
                    array(
                        'key' => 'stages_action',
                        'label' => 'Отображать контакты?',
                        'name' => 'stages_action',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => 'Да',
                        'ui_off_text' => 'Нет',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 51,
    ));
    // END stages 2
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN teamPage template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_teamPage_settings',
        'title' => 'Уникальные настройки команды',
        'fields' => array(
            array(
                'key' => 'teamPage_message',
                'label' => 'ПРИМЕЧАНИЕ!!!',
                'name' => 'teamPage_message',
                'type' => 'message',
                'message' => '<h1 style="color:red">Внимание, на странице должен быть только один блок с командой!</h1>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'teamPage_title',
                'label' => 'Заголовок',
                'name' => 'teamPage_title',
                'type' => 'text',
            ),
            array(
                'key' => 'teamPage_subtitle',
                'label' => 'Описание',
                'name' => 'teamPage_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'teamPage_list',
                'label' => 'Сотрудники',
                'name' => 'teamPage_list',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'team_person_name',
                        'label' => 'ФИО',
                        'name' => 'team_person_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_person_description',
                        'label' => 'Описание',
                        'name' => 'team_person_description',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'team_img_id',
                        'label' => 'Изображение',
                        'name' => 'team_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения 750/650px',
                    ),
                    array(
                        'key' => 'teamSlider_img_id',
                        'label' => 'Превью изображение',
                        'name' => 'teamSlider_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не 170/170px',
                    ),
                    array(
                        'key' => 'team_persone_list',
                        'label' => 'Список',
                        'name' => 'team_persone_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'team_persone_item',
                                'label' => 'Элемент списка',
                                'name' => 'team_persone_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 55,
    ));
    // END teamPage
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN price template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_price_settings',
        'title' => 'Настройки стоимости',
        'fields' => array(
            array(
                'key' => 'price_sec_title',
                'label' => 'Заголовок',
                'name' => 'price_sec_title',
                'type' => 'text',
            ),
            array(
                'key' => 'price_items',
                'label' => 'Список',
                'name' => 'price_items',
                'type' => 'repeater',
                'max' => '2',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'price_img_id',
                        'label' => 'Фон',
                        'name' => 'price_img_id',
                        'type' => 'image',
                        'required' => 1,
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 500/высота контента.',
                    ),
                    array(
                        'key' => 'price_title',
                        'label' => 'Заголовок',
                        'name' => 'price_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'price_list',
                        'label' => 'Список',
                        'name' => 'price_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'price_item',
                                'label' => 'Элемент списка',
                                'name' => 'price_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'price_link',
                        'label' => 'Ссылка',
                        'name' => 'price_link',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'price_number',
                        'label' => 'Стоимость',
                        'name' => 'price_number',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'price_desc',
                        'label' => 'Описание',
                        'name' => 'price_desc',
                        'type' => 'text',
                    ),
                    // array(
                    //     'key' => 'price_button',
                    //     'label' => 'Ссылка кнопки',
                    //     'name' => 'price_button',
                    //     'type' => 'text',
                    // ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 60,
    ));
    // END price
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN performance template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_performance_settings',
        'title' => 'Настройки эффективность (контент слева, видео справа)',
        'fields' => array(
            array(
                'key' => 'performance_sec_title',
                'label' => 'Заголовок секции',
                'name' => 'performance_sec_title',
                'type' => 'text',
            ),
            array(
                'key' => 'performance_title',
                'label' => 'Заголовок',
                'name' => 'performance_title',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '40',
                ),
            ),
            array(
                'key' => 'performance_list',
                'label' => 'Список',
                'name' => 'performance_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'performance_content',
                        'label' => 'Элемент списка',
                        'name' => 'performance_content',
                        'type' => 'text',
                    ),
                ),
                'wrapper' => array (
                    'width' => '60',
                ),
            ),
            array(
                'key' => 'performance_video_id',
                'label' => 'ID видео',
                'name' => 'performance_video_id',
                'type' => 'text',
                'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= QEPbamO8i9s',
                'placeholder' => 'httuerixph8',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'performance_bg_id',
                'label' => 'Фон блока с видео',
                'name' => 'performance_bg_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 810/600px.',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'performance_video_title',
                'label' => 'Заголовок видео',
                'name' => 'performance_video_title',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'performance_video_time',
                'label' => 'Длительность видео',
                'name' => 'performance_video_time',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'performance_video_label',
                'label' => 'Этикетка видео',
                'name' => 'performance_video_label',
                'type' => 'text',
                'instructions' => 'Используйте тег i для выделения контента, тег br для переноса текста',
            ),

    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 65,
    ));
    // END performance
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN ourhouses (fourthSlider) template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_ourhouses_settings',
        'title' => 'Настройки слайдера на 4 элемента',
        'fields' => array(
            array(
                'key' => 'ourhouses_sec_title',
                'label' => 'Заголовок секции',
                'name' => 'ourhouses_sec_title',
                'type' => 'text',
            ),
            array(
                'key' => 'ourhouses_list',
                'label' => 'Список',
                'name' => 'ourhouses_list',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'ourhouses_img_id',
                        'label' => 'Фон',
                        'name' => 'ourhouses_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'required' => 1,
                        'preview_size' => 'thumbnail',
                        'instructions' => 'Рекомендуемое разрешение изображения 440/650px.',
                    ),
                    array(
                        'key' => 'ourhouses_title',
                        'label' => 'Заголовок',
                        'name' => 'ourhouses_title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'ourhouses_text',
                        'label' => 'Описание',
                        'name' => 'ourhouses_text',
                        'type' => 'textarea',
                        'rows' => 4,
                        'instructions' => 'Используйте тег p для нового абзаца.',
                        'placeholder' => '<p>абзац</p>',
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 110,
    ));
    // END ourhouses (fourthSlider)
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN largeSlider template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_largeSlider_settings',
        'title' => 'Настройки большого слайдера с списком',
        'fields' => array(
            array(
                'key' => 'largeSlider_img_id',
                'label' => 'Фон',
                'name' => 'largeSlider_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'array' || 'url'
                'preview_size' => 'thumbnail',
                'instructions' => 'Рекомендуемое разрешение изображения 1920/1080px.',
            ),
            array(
                'key' => 'largeSlider_slides',
                'label' => 'Слайды',
                'name' => 'largeSlider_slides',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'largeSlider_title',
                        'label' => 'Заголовок',
                        'name' => 'largeSlider_title',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'largeSlider_list',
                        'label' => 'Список',
                        'name' => 'largeSlider_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row'
                        'button_label' => 'Добавить',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                        'sub_fields' => array(
                            array(
                                'key' => 'largeSlider_item',
                                'label' => 'Элемент списка',
                                'name' => 'largeSlider_item',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 115,
    ));
    // END largeSlider
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN mortgage template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_mortgage_settings',
        'title' => 'Настройки ипотеки',
        'fields' => array(
            array(
                'key' => 'mortgage_sec_title',
                'label' => 'Заголовок секции',
                'name' => 'mortgage_sec_title',
                'type' => 'text',
            ),
            array(
                'key' => 'mortgage_list',
                'label' => 'Изображения',
                'name' => 'mortgage_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'mortgage_img_id',
                        'label' => 'Изображение',
                        'name' => 'mortgage_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'array' || 'url'
                        'preview_size' => 'full',
                    ),
                ),
            ),
    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 120,
    ));
    // END mortgage
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN advantage template: homepage about apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_advantagePage_settings',
        'title' => 'Настройки преимуществ',
        'fields' => array(
            array(
                'key' => 'advantage_title',
                'label' => 'Заголовок',
                'name' => 'advantage_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',
            ),
            array(
                'key' => 'advantage_subtitle',
                'label' => 'Под заголовок',
                'name' => 'advantage_subtitle',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для абзаца',
            ),
            array(
                'key' => 'advantage_list',
                'label' => 'Список',
                'name' => 'advantage_list',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'advantage_text_title',
                        'label' => 'заголовок',
                        'name' => 'advantage_text_title',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                    array(
                        'key' => 'advantage_text',
                        'label' => 'текст',
                        'name' => 'advantage_text',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                    array(
                        'key' => 'advantage_link',
                        'label' => 'ссылка',
                        'name' => 'advantage_link',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                ),
            ),

    
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 125,
    ));
    // END advantage
    // ---------------------------------------------------------
    // ---------------------------------------------------------
    // BEGIN advantage2 template: apartments remont design construction
    acf_add_local_field_group(array(
        'key' => 'acf_advantagePage2_settings',
        'title' => 'Настройки преимуществ 2',
        'fields' => array(
            array(
                'key' => 'advantage2_title',
                'label' => 'Заголовок',
                'name' => 'advantage2_title',
                'type' => 'text',
                'instructions' => 'Используйте тег b для выделения жирного контента, тег br для переноса строки.',
            ),
            array(
                'key' => 'advantage2_subtitle',
                'label' => 'Под заголовок',
                'name' => 'advantage2_subtitle',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег p для абзаца',
            ),
            array(
                'key' => 'advantage_list2',
                'label' => 'Список',
                'name' => 'advantage_list2',
                'type' => 'repeater',
                'layout' => 'row',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'advantage_text_title',
                        'label' => 'заголовок',
                        'name' => 'advantage_text_title',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                    array(
                        'key' => 'advantage_text',
                        'label' => 'текст',
                        'name' => 'advantage_text',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                    array(
                        'key' => 'advantage_link',
                        'label' => 'ссылка',
                        'name' => 'advantage_link',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                ),
            ),

    
        ),
        'location' => array(
            // array(
            //     array(
            //         'param' => 'page_template',
            //         'operator' => '==',
            //         'value' => 'template-homepage.php',
            //     ),
            // ),
            // array(
            //     array(
            //         'param' => 'page_template',
            //         'operator' => '==',
            //         'value' => 'template-about.php',
            //     ),
            // ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-apartments.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-remont.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-design.php',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-construction.php',
                ),
            ),
        ),
        'menu_order' => 130,
    ));
    // END advantage2
    // ---------------------------------------------------------
    // ---------------------------------------------------------
  
}
add_action('acf/init', 'my_template_acf_mataboxes');
