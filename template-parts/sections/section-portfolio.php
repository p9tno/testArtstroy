<?php 
// $obj = get_queried_object();
// get_pr($obj);
?>
<!-- begin portfolio-->
<section class="portfolio section" id="portfolio">
    <div class="container_right">
        <h2 class="section__title"><span><b>Выберите готовый проект</b> своего будущего дома</span></h2>
        <div class="portfolio__content">
            <div class="portfolio__aside">

                <form class="portfolio__filters">

                    <div class="portfolio__cat">
                        <div class="portfolio__label"><span>Категория дома</span></div>

                        <ul class="portfolio__list list">
                            <?php
                            $categories = get_terms(
                                'houses-cat',
                                array(
                                    'orderby'    => 'name',
                                    'hierarchical' => true,
                                    'hide_empty' => 1,
                                    'parent' => 0
                                ) 
                            );
                            foreach($categories as $cat) { ?>   
                                <!-- start cat -->
                                <li class="filter-houses-cat-js">
                                    <div class="filter__checkbox">
                                        <input type="checkbox" id="term_<?php echo $cat->term_id; ?>" name="houses-cat" value="<?php echo $cat->term_id; ?>" />
                                        <label for="term_<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></label>
                                    </div>

                                    <?php $sub_categories = get_terms(
                                        'houses-cat',
                                        array(
                                            'orderby'    => 'name',
                                            'hierarchical' => true,
                                            'hide_empty' => 1,
                                            'parent' => $cat->term_id,
                                        )
                                    );

                                    if($sub_categories) { ?>
                                        <ul class="portfolio__sublist list">
                                            <?php foreach($sub_categories as $sub_cat) { ?>
                                                <!-- start sub_cat -->
                                                <li>
                                                    <div class="filter__checkbox">
                                                        <input id="term_<?php echo $sub_cat->term_id; ?>" type="checkbox" name="category" value="<?php echo $sub_cat->term_id; ?>">
                                                        <label for="term_<?php echo $sub_cat->term_id; ?>"><?php echo $sub_cat->name; ?></label>
                                                    </div>
                                                </li>
                                                <!-- end sub_cat -->
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                                <!-- end cat -->
                            <?php } ?>

                        </ul>
                    </div>

                    <div class="portfolio__cat">
                        <?php
                        $meta_house_price = get_meta_values( 'project_house_price', 'portfolio' );
                        // get_pr($meta_house_price);
                        $min_price = min($meta_house_price);
                        $max_price = max($meta_house_price);
            
                        ?>
                        <div class="portfolio__label"><span>Стоимость</span></div>
                        <div class="portfolio__slider_wrap">
                            <div class="portfolio__slider js-slide-price" data-min="<?php echo $min_price; ?>" data-max="<?php echo $max_price; ?>"></div>
                            <input type="hidden" value="<?php echo $min_price; ?>" id="priceMin" class="min_price">
                            <input type="hidden" value="<?php echo $max_price; ?>" id="priceMax" class="max_price">
                        </div>
                        <div class="portfolio__slider_bottom">
                            <div class="portfolio__slider_min"><span id="slide-price-min"><?php echo number_format($min_price, 0, '.', ' '); ?></span></div>
                            <div class="portfolio__slider_max"><span id="slide-price-max"><?php echo number_format($max_price, 0, '.', ' '); ?></span></div>
                        </div>
                    </div>

                    <div class="portfolio__cat">
                        <div class="portfolio__label"><span>Этажность</span></div>
                        <ul class="portfolio__list list">
                            <?php
                            $floors = get_terms(
                                'houses-floor',
                                array(
                                    'orderby'    => 'name',
                                    'hierarchical' => true,
                                    'hide_empty' => 1,
                                    'parent' => 0
                                )
                            );
                            foreach($floors as $cat) { ?>
                                <li class="filter-houses-floor-js">
                                    <div class="filter__checkbox">
                                        <input type="checkbox" id="term_<?php echo $cat->term_id; ?>" name="houses-floor" value="<?php echo $cat->term_id; ?>" />
                                        <label for="term_<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></label>
                                    </div>
                                </li>
                            <?php } ?>
                 
                        </ul>
                    </div>

                    <div class="portfolio__cat">
                        <?php
                        $meta_house_square = get_meta_values( 'house_square', 'portfolio' );
                        // get_pr($meta_house_square);
                        $min_square = min($meta_house_square);
                        $max_square = max($meta_house_square);
            
                        ?>
                        <div class="portfolio__label"><span>Площадь</span></div>
                        <div class="portfolio__slider_wrap">
                            <div class="portfolio__slider js-slide-square" data-min="<?php echo $min_square; ?>" data-max="<?php echo $max_square; ?>"></div>
                            <input type="hidden" value="<?php echo $min_square; ?>" id="squareMin" class="min_square">
                            <input type="hidden" value="<?php echo $max_square; ?>" id="squareMax" class="max_square">
                        </div>
                        <div class="portfolio__slider_bottom">
                            <div class="portfolio__slider_min"><span id="slide-square-min"><?php echo number_format($min_square, 0, '.', ' '); ?></span></div>
                            <div class="portfolio__slider_max"><span id="slide-square-max"><?php echo number_format($max_square, 0, '.', ' '); ?></span></div>
                        </div>
                    </div>

                    <div class="portfolio__cat">
                        <div class="portfolio__label"><span>Спальни</span></div>
                        <ul class="portfolio__list list">
                            <?php
                            $bedrooms = get_terms(
                                'houses-bedroom',
                                array(
                                    'orderby'    => 'name',
                                    'hierarchical' => true,
                                    'hide_empty' => 1,
                                    'parent' => 0
                                )
                            );
                            foreach($bedrooms as $bedroom) { ?>
                                <li class="filter-houses-bedroom-js">
                                    <div class="filter__checkbox">
                                        <input type="checkbox" id="term_<?php echo $bedroom->term_id; ?>" name="houses-bedroom" value="<?php echo $bedroom->term_id; ?>" />
                                        <label for="term_<?php echo $bedroom->term_id; ?>"><?php echo $bedroom->name; ?></label>
                                    </div>
                                </li>
                            <?php } ?>
                 
                        </ul>
                    </div>

                    <div class="portfolio__reset" id="portfolio-reset"><a href="#">Сбросить фильтр</a></div>

                </form>

            </div>

            <div class="preloaderFilter__inner">
                <div class="preloaderFilter__wrap preloaderFilter-js">
                    <div class="preloaderFilter"></div>
                </div>
                <div class="portfolio__grid">
                    <?php
                        // $post_object = get_post();
                        // gey_pr($post_object);
                        // get_pr($post_object);
                        // $post_id = get_the_ID();
                        // $post_term_object = get_the_terms($post_id, 'portfolio-cat');
                        // $post_term_id = $post_term_object[0]->term_id;
                        // $paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;
    
                        $args = array(
                            'post_type' => 'portfolio',
                            // 'post__not_in' => array($post_id),
                            'orderby' => 'rand',
                            'order'    => 'ASC',
                            // 'paged' => $paged,
                            'posts_per_page' => 6,
                            'post_status' => 'publish',
                            // вывода постов из нескольких произвольных таксономий:
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'portfolio-cat',
                                    'field'    => 'slug',
                                    'terms'    => 'stroitelstvo-domov',
                                )
                            )
                        );
                    $otherPost = new WP_Query($args);
                    echo $otherPost->publish;
                    ?>
                
                    <?php if ($otherPost->have_posts()) : while ($otherPost->have_posts()) : $otherPost->the_post(); ?>
                        <?php get_template_part( 'template-parts/project/content', 'house' ); ?>
                    <?php endwhile; ?>
                    
                    <?php else : ?>
                        no post
                    <?php endif; ?>
    
                    <?php wp_reset_postdata(); ?>

                    <nav class="pagination pagination_filter">
                        <?php
                            $big = 999999999; // need an unlikely integer
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, $paged ),
                                'prev_text' => '<i class="icon_arrow_left"></i>',
                                'next_text' => '<i class="icon_arrow_right"></i>',
                                'total' => $otherPost->max_num_pages,
                                'end_size' => 1,
                                'mid_size' => 1
                            ) );
                        ?>
                    </nav>

                </div>

                <!-- <div class="filter__more">
                    <a class="load_more show_more_house_js" href="#" data-load="Загрузкка" data-more="Открыть все проекты" data-v-toggle="">Открыть все проекты</a>
                </div> -->

            </div>



        </div>
    </div>
</section>
<!-- end portfolio-->



<?php

function get_meta_values( $meta_key, $post_type = 'post' ) {

    $posts = get_posts(
        array(
            'post_type'      => $post_type,
            'meta_key'       => $meta_key,
            'posts_per_page' => - 1,
        )
    );

    $meta_values = array();
    foreach ( $posts as $post ) {
        $meta_values[] = get_post_meta( $post->ID, $meta_key, true );
    }
    $meta_values = array_diff($meta_values, array(''));

    return array_unique( $meta_values );
}




