<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;

    $title = '';
    $length = 80;
    if (iconv_strlen(get_the_title(), 'UTF-8') > $length) {
        $title = mb_substr(get_the_title(),0,$length - 3,'UTF-8') . ' ...';
    } else {
        $title = get_the_title();
    }

    $houses_floor = false;
    $terms = wp_get_post_terms( get_the_id(), 'houses-floor' );
    if ( count( $terms ) > 0 ) {
        foreach( $terms as $term ) {
            $houses_floor = $term->name;
        }
    }

    $houses_bedroom = false;
    $terms = wp_get_post_terms( get_the_id(), 'houses-bedroom' );
    if ( count( $terms ) > 0 ) {
        foreach( $terms as $term ) {
            $houses_bedroom = $term->name;
        }
    }

   

    $show_more = '';
    if (is_page_template(['template-homepage.php'])) {
        $show_more = 'projects_more_js';
    }
    // if (!is_archive()) {
    //     $show_more = 'projects_more_js';
    // }
    

?>

<div class="otherProjects__item <?php echo $show_more; ?>">

    <div class="swiper otherProjects__slider otherProjects-swiper-js">
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

        <div class="otherProjects__control">
            <div class="otherProjects__dotted dotted_sm"></div>
            <div class="otherProjects__arrows custom_arrows custom_arrows_white">
                <i class="icon_arrow_left"></i>
                <i class="icon_arrow_right"></i>
            </div>
        </div>
    </div>

    <div class="otherProjects__content">

        <div class="otherProjects__top">
            <div class="otherProjects__title">
                <span><?php echo $title; ?></span>
            </div>
            <div class="otherProjects__action">
                <a class="btn btn_dark show_js" href="#application">Заявка</a>
                <a class="btn" href="<?php the_permalink(); ?>">Подробнее</a>
            </div>
        </div>

        <div class="otherProjects__bottom">

            <?php if( has_term('stroitelstvo-domov', 'portfolio-cat') ) { ?>
                <!-- house -->
                <ul class="list">
                    <?php if (get_field('house_square')) { ?>
                        <li><small>Площадь:</small><span><?php echo number_format(get_field('house_square'), 0, '.', ' '); ?> м<sup>2</sup></span></li>
                    <?php } ?>
        
                    <?php if ($houses_floor) { ?>
                        <li><small>Кол-во этажей:</small><span><?php echo $houses_floor; ?></span></li>
                    <?php } ?>
    
                    <?php if ($houses_bedroom) { ?>
                        <li><small>Кол-во спален:</small><span><?php echo $houses_bedroom; ?></span></li>
                    <?php } ?>
    
                    <?php if (get_field('project_house_price')) { ?>
                        <li><small>Стоимость:</small><span><?php echo number_format(get_field('project_house_price'), 0, '.', ' '); ?></span></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <ul class="list">
                    <?php if (get_field('project_square')) { ?>
                        <li><small>Площадь:</small><span><?php echo number_format(get_field('project_square'), 0, '.', ' '); ?> м<sup>2</sup></span></li>
                    <?php } ?>

                    <?php if (get_field('project_time')) { ?>
                        <li><small>Срок реализации:</small><span><?php the_field('project_time'); ?></span></li>
                    <?php } ?>
        
                    <?php if (get_field('project_cost_work')) { ?>
                        <li><small>Цена за м<sup>2</sup></small><span><?php echo number_format(get_field('project_cost_work'), 0, '.', ' '); ?></span></li>
                    <?php } ?>
                </ul>
                    
            <?php } ?>

        </div>


        
    </div>

</div>