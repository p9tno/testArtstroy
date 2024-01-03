<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;

    // echo get_post_type() . '<br>';
 
    $terms = get_the_terms( $post->ID, 'portfolio-cat' );
    // get_pr($terms);

    if( $terms ){
        $term = array_shift( $terms );
        // echo $term->slug;
        $house = false;
        if ($term->slug == 'stroitelstvo-domov') {
            $house = true;
        }
    }

    // echo 'house: ' . $house;
?>



<!-- begin project-->
<section class="project section" id="project">
    <div class="container_center container_center_right">
        <div class="section__caption">
            <h1 class="section__title"><span><?php the_title(); ?></span></h1>
        </div>
    </div>
    <div class="projects__wrap">
        <div class="projects__top">

            <div class="swiper projects__slider project-swiper-js itemForDataFancybox_js">

                <div class="swiper-wrapper">

                    <?php 
                    $slides = get_field('portfolio_list');
                    if( $slides ) { ?>
                        <?php foreach( $slides as $slide ) { 
                            
                            if ($slide['portfolio_radio'] == 'image') { include 'slidesSingle/image.php'; }

                            elseif ($slide['portfolio_radio'] == 'beforeAfter') { include 'slidesSingle/beforeAfter.php'; } 

                            elseif ($slide['portfolio_radio'] == 'video') { include 'slidesSingle/video.php'; } 
                        } ?>
                    <?php } ?>

                </div>
            </div>

            <div class="projects__control">
                <div class="project__dotted dotted_sm"></div>
                <div class="project__arrows custom_arrows custom_arrows_white">
                    <i class="icon_arrow_left"></i>
                    <i class="icon_arrow_right"></i>
                </div>
            </div>

        </div>

        <div class="swiper projects__slider_sm project-swiper-sm-js">

            <div class="swiper-wrapper">

                <?php 
                if( $slides ) { ?>
                    <?php foreach( $slides as $slide ) { 

                        if ($slide['portfolio_radio'] == 'image') { include 'slidesSingleSm/image.php'; }

                        elseif ($slide['portfolio_radio'] == 'beforeAfter') { include 'slidesSingleSm/beforeAfter.php'; } 

                        elseif ($slide['portfolio_radio'] == 'video') { include 'slidesSingleSm/video.php'; } 
                        
                    ?>
                        
                    <? } ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container_center container_center_right">
        <div class="project__description">
            <div class="description">

                <?php if (!$house) { ?>

                    <?php if (get_field('project_client')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Заказчик:</span></div>
                            <div class="description__data"><span><?php the_field('project_client'); ?></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_square')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Площадь:</span></div>
                            <div class="description__data"><span><?php the_field('project_square'); ?> м<sup>2</sup></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_time')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Срок ремонта:</span></div>
                            <div class="description__data"><span><?php the_field('project_time'); ?></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_location_label') && get_field('project_location') ) { ?>
                        <div class="description__item">
                            <div class="description__label"><span><?php the_field('project_location_label'); ?></span></div>
                            <div class="description__data"><span><?php the_field('project_location'); ?></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_style')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Стиль:</span></div>
                            <div class="description__data"><span><?php the_field('project_style'); ?></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_cost_materials')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Стомость материалов:</span></div>
                            <div class="description__data"><span><?php the_field('project_cost_materials'); ?></span></div>
                        </div>
                    <?php } ?>
    
                    <?php if (get_field('project_cost_work')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Стомость работ:</span></div>
                            <div class="description__data"><span><?php the_field('project_cost_work'); ?></span></div>
                        </div>
                    <?php } ?>

                <?php } else { ?>
                    <!-- house content -->
                    <?php if (get_field('project_house_project')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Проект:</span></div>
                            <div class="description__data"><span><?php the_field('project_house_project'); ?></span></div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('house_square')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Площадь:</span></div>
                            <!-- <div class="description__data"><span><?php // the_field('house_square'); ?> м<sup>2</sup></span></div> -->
                            <div class="description__data"><span><?php echo number_format(get_field('house_square'), 0, '.', ' '); ?> м<sup>2</sup></span></div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('project_house_material')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Материал:</span></div>
                            <div class="description__data"><span><?php the_field('project_house_material'); ?></span></div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('project_house_floors')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Кол-во этажей:</span></div>
                            <div class="description__data"><span><?php the_field('project_house_floors'); ?></span></div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('project_house_rooms')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Кол-во комнат:</span></div>
                            <div class="description__data"><span><?php the_field('project_house_rooms'); ?></span></div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('project_house_bathrooms')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Кол-во санузлов:</span></div>
                            <div class="description__data"><span><?php the_field('project_house_bathrooms'); ?></span></div>
                        </div>
                    <?php } ?>
                    <?php if (get_field('project_house_price')) { ?>
                        <div class="description__item">
                            <div class="description__label"><span>Стомость:</span></div>
                            <!-- <div class="description__data"><span><?php // the_field('project_house_price'); ?></span></div> -->
                            <div class="description__data"><span><?php echo number_format(get_field('project_house_price'), 0, '.', ' '); ?></span></div>
                        </div>
                    <?php } ?>

                <? } ?>


            </div>
        </div>

        <?php if (!$house) { ?>

            <div class="project__content">
                <?php if (get_field('project_task')) { ?>
                    <div class="project__left">
                        <div class="project__label"><span>Задача</span></div>
                        <div class="project__text"><?php the_field('project_task'); ?></div>
                    </div>
                <?php } ?>
    
                <?php if (get_field('project_do')) { ?>
                    <div class="project__right">
                        <div class="project__label"><span>Что сделали</span></div>
                        <div class="project__text"><?php the_field('project_do'); ?></div>
                    </div>
                <?php } ?>
            </div>
    
            <div class="project__action">
                <?php if (get_field('project_project')) { ?>
                    <div class="project__button"><a class="btn" href="<?php the_field('project_project'); ?>"> <span>Дизайн-проект</span></a></div>
                <?php } ?>
    
                <?php if (get_field('project_review')) { ?>
                    <div class="project__link"><a href="<?php the_field('project_review'); ?>">Отзыв клиента</a></div>
                <?php } ?>
            </div>

        <?php } else { ?>
            <?php if (get_field('project_text')) { ?>
                <div class="project__content project__content_single">
                    <div class="project__label"><span>О проекте</span></div>
                    <div class="project__text"><?php the_field('project_text'); ?></div>
                </div>
            <?php } ?>

            <?php  get_template_part( 'template-parts/project/content', 'data' );   ?>

        <? } ?>


    </div>
</section>
<!-- end project-->

<?php
    if (!$house) {
        get_template_part( 'template-parts/project/content', 'steps' );  
    } 
?>


<?php get_template_part( 'template-parts/sections/section', 'consultation' );  ?>

<?php if ($house) { ?>
    <!-- begin otherProjects-->
    <section class="otherProjects section" id="otherProjects">
        <div class="container_center container_center_right">
            <div class="section__caption">
                <h2 class="section__title"><span><b>Посмотрите</b> другие проекты</span></h2>
            </div>
        </div>
        <div class="otherProjects__list">

            <?php
                // $post_object = get_post();
                // get_pr($post_object);
                $post_id = get_the_ID();
                $post_term_object = get_the_terms($post_id, 'portfolio-cat');
                $post_term_id = $post_term_object[0]->term_id;

                $args = array(
                    'post_type' => 'portfolio',
                    'post__not_in' => array($post_id),
                    'orderby' => 'rand',
                    'order'    => 'ASC',
                    'posts_per_page' => 3,
                    // вывода постов из нескольких произвольных таксономий:
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio-cat',
                            'field'    => 'id',
                            'terms'    => $post_term_id,
                        )
                    )
            );
            $otherPost = new WP_Query($args);
            ?>
        
            <?php if ($otherPost->have_posts()) : while ($otherPost->have_posts()) : $otherPost->the_post(); ?>
                <?php get_template_part( 'template-parts/project/content', 'house' ); ?>
            <?php endwhile; ?>
            
            <?php else : ?>
                no post
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </section>
    <!-- end otherProjects-->
<?php }