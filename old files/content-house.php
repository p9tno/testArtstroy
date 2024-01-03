<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
    
?>

<div class="otherProjects__item">

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
        <div class="otherProjects__title">
            <span><?php the_title(); ?></span>
            <?php if (get_field('project_house_project')) { ?>
                <small><?php the_field('project_house_project'); ?> проект</small>
            <?php } ?>
        </div>
        <ul class="list">
            <?php if (get_field('house_square')) { ?>
                <li><small>Площадь:</small><span><?php the_field('house_square'); ?> м<sup>2</sup></span></li>
            <?php } ?>

            <?php if (get_field('project_house_floors')) { ?>
                <li><small>Кол-во этажей:</small><span><?php the_field('project_house_floors'); ?></span></li>
            <?php } ?>
        </ul>
        <div class="otherProjects__link"><a href="<?php the_permalink(); ?>">Изучить подробнее</a></div>
    </div>

</div>