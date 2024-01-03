<?php
$bg_class = 'header_bg';
$header_leadmagnet_class = '';

if ( 
    is_page_template(['template-homepage.php']) ||
    is_page_template(['template-about.php']) ||
    is_page_template(['template-designers.php']) ||
    is_page_template(['template-thanks.php']) ||
    is_page_template(['template-leadmagnet.php']) ||
    is_page_template(['template-apartments.php']) ||
    is_page_template(['template-remont.php']) ||
    is_page_template(['template-design.php']) ||
    is_page_template(['template-construction.php']) ||
    is_page_template(['template-homepage.php']) ||
    is_404()
    
) {
    $bg_class = '';
}

if (is_page_template(['template-leadmagnet.php'])) {
    $header_leadmagnet_class = 'header_leadmagnet';
}

?>
<div class="wrapper" id="wrapper">
    <header class="header <?php echo $bg_class; ?> <?php echo $header_leadmagnet_class; ?>">

        <div class="header__content">
            <!-- start .header__top-->
            <div class="header__top">
                <div class="header__logo">
                    <?php
                        $logo_id = get_field('logo_img', 'option');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)

                        if( $logo_id ) {
                            $logo_url = wp_get_attachment_image_url($logo_id, $size); ?>

                            <a class="logo" href="<?php echo esc_url(home_url("/")); ?>"><img src="<?php echo $logo_url ?>" /></a>
            
                    <?php } ?>

                    <?php if (get_field('logo_info', 'option')) { ?>
                        <div class="logo__info desktop">
                            <span><?php the_field('logo_info', 'option'); ?></span>
                        </div>
                    <?php } ?>

                </div>

                <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                    <?php get_template_part( 'template-parts/parts/content', 'city' ); ?>
                <?php } ?>

                <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                    <?php if (get_field('header_calc_boolean', 'option')) { ?>
                        <div class="header__calc desktop">
                            <div class="calc"><a class="calc__link show_js" href="#calculate">калькулятор стоимости</a></div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                    <div class="header__messenger desktop">
                        <div class="messenger">
                            <div class="messenger__label">
                                <span>Спрашивайте, отвечаем онлайн</span>
                            </div>
                            <div class="messenger__list">
                                <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                            </div>
                        </div>
                    </div>
  
                <?php } ?>

                
                
                <div class="header__action">
                    <?php if (is_page_template(['template-leadmagnet.php'])) { ?>
                        <div class="header__messenger desktop">
                            <div class="messenger">
                                <div class="messenger__label">
                                    <span>Спрашивайте, отвечаем онлайн</span>
                                </div>
                                <div class="messenger__list">
                                    <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                    <?php get_template_part( 'template-parts/parts/content', 'phone' ); ?>

                    <?php if (get_field('header_callback_boolean', 'option')) { ?>
                        <div class="callback"><a class="callback__link show_js" href="#application">Обратный звонок</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- end .header__top-->

            <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                <!-- start .header__bottom-->
                <div class="header__bottom">
                    <div class="header__overflow">
                        <div class="header__nav">
    
                            <nav class="navbar" id="navbar">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-header',
                                    'container'=>'navbar',
                                    )); 
                                ?>
                               
                            </nav>
    
                        </div>
    
                        <div class="header__messenger mobile">
                            <div class="messenger">
                                <div class="messenger__label">
                                    <span>Спрашивайте, отвечаем онлайн</span>
                                </div>
                                <div class="messenger__list">
                                    <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                                </div>
                            </div>
                        </div>
    
                        <?php if (get_field('header_calc_boolean', 'option')) { ?>
                            <div class="header__calc mobile">
                                <div class="calc"><a class="calc__link show_js" href="#calculate">калькулятор стоимости</a>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <!-- end .header__bottom-->
            <?php } ?>

            <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                <div class="header__toggle">
                    <div class="toggle"></div>
                </div>
            <?php } ?>

        </div>
    </header>

    <?php
        $class_quiz = '';
        if (is_page_template(['template-quiz.php'])) {
            $class_quiz = 'main_content_quiz';
        }
    ?>

    <main class="main_content <?php echo $class_quiz; ?>">