<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;

    $show_more = '';
    // if (is_page_template(['template-homepage.php'])) {
    //     $show_more = 'projects_more_js';
    // }
    if (!is_archive()) {
        $show_more = 'projects_more_js';
    }
    
?>
<div class="projects__item <?php echo $show_more; ?>">
    
    <div class="projects__top itemForDataFancybox_js">
        <div class="swiper projects__slider projects-swiper-js">
            <div class="swiper-wrapper">


                <?php 
                $slides = get_field('portfolio_list');
                if( $slides ) { ?>
                    <?php foreach( $slides as $slide ) { 
                        
                        if ($slide['portfolio_radio'] == 'image') { include 'slide/image.php'; }

                        elseif ($slide['portfolio_radio'] == 'beforeAfter') { include 'slide/beforeAfter.php'; } 

                        elseif ($slide['portfolio_radio'] == 'video') { include 'slide/video.php'; } 
                    } ?>
                <?php } ?>

            </div>

        </div>

        <div class="projects__control">
            <div class="projects__dotted dotted_sm"></div>
            <div class="projects__arrows custom_arrows custom_arrows_white">
                <i class="icon_arrow_left"></i><i class="icon_arrow_right"></i>
            </div>
        </div>

    </div>

    <div class="projects__bottom">

        <div class="swiper projects__slider_sm projects-swiper-sm-js">
            <div class="swiper-wrapper">

                <?php 
                if( $slides ) { ?>
                    <?php foreach( $slides as $slide ) { 

                        if ($slide['portfolio_radio'] == 'image') { include 'slideSm/image.php'; }

                        elseif ($slide['portfolio_radio'] == 'beforeAfter') { include 'slideSm/beforeAfter.php'; } 

                        elseif ($slide['portfolio_radio'] == 'video') { include 'slideSm/video.php'; } 
                        
                    ?>
                        
                    <? } ?>
                <?php } ?>

            </div>
        </div>

        <div class="projects__content">
            <div class="projects__content_left">
                <div class="projects__title"><span><?php the_title(); ?></span></div>
                <?php if (get_field('project_client')) { ?>
                    <div class="projects__client"><span>Заказчик: <?php the_field('project_client'); ?></span></div>
                <?php } ?>

                <?php if (get_field('project_desc')) { ?>
                    <div class="projects__description"><span><?php the_field('project_desc'); ?></span></div>
                <?php } ?>
            </div>
            <div class="projects__content_right">
                <ul class="projects__list">
                    <?php if (get_field('project_square')) { ?>
                        <li><span>Площадь:</span><b><?php the_field('project_square'); ?> м<sup>2</sup></b></li>
                    <?php } ?>

                    <?php if (get_field('project_time')) { ?>
                        <li><span>Срок ремонта:</span><b><?php the_field('project_time'); ?></b></li>
                    <?php } ?>

                    <?php if (get_field('project_location_label') && get_field('project_location') ) { ?>
                        <li><span><?php the_field('project_location_label'); ?></span><b><?php the_field('project_location'); ?></b></li>
                    <?php } ?>
                </ul>
                <div class="projects__link"><a href="<?php the_permalink(); ?>">Изучить проект подробнее</a></div>
            </div>
        </div>

    </div>

</div>