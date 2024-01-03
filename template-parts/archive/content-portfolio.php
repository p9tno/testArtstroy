<!-- begin projects-->
<section class="projects section" id="projects">
    <div class="container_center container_center_sm">
        <div class="section__caption">
            <h1 class="section__title"><span><b>Портфолио</b> заверешенных проектов</span></h1>
            <div class="section__subtitle"><span>Вкладываемся душой и делом. За каждым — своя история. Изучите проекты
                    подробнее.</span></div>
        </div>
        <ul class="cat-list">
            <?php
        
            $args = array(
                'taxonomy'     => 'portfolio-cat', // название таксономии
                'orderby'      => 'name',  // сортируем по названиям
                'order'        => 'ASC',
                'show_count'   => 0,       // не показываем количество записей
                'pad_counts'   => 0,       // не показываем количество записей у родителей
                'hierarchical' => 0,       // древовидное представление
                'title_li'     => ''       // список без заголовка
                );
            
            ?>

            <li class="cat-item all_cat-js"><a href="<?php echo get_post_type_archive_link('portfolio'); ?>">Все</a></li>
            <?php wp_list_categories( $args ); ?>
        </ul>
    </div>

    <div class="projects__wrap">



        <?php 
            if (is_tax()) {
                // PORTFOLIO-CAT
            
                $cat = get_queried_object();
                $cat_slug = $cat->slug;
                $cat_taxonomy = $cat->taxonomy;
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $args = array(
                    'post_type' => 'portfolio',
                    'paged' => $paged,
   
                    'tax_query' => array(
                        array(
                            'taxonomy' => $cat_taxonomy,
                            'field'    => 'slug',
                            'terms'    => $cat_slug
                        )
                    )
                );
                $portfolio_cat = new WP_Query($args);

                if ($portfolio_cat->have_posts()) : while ($portfolio_cat->have_posts()) : $portfolio_cat->the_post();
                    get_template_part( 'template-parts/project/content', 'item' );
                endwhile;
                else :
                    echo 'В этой категории нет записей, вероятно.';
                endif;

            } else {
                // PORTFOLIO
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/project/content', 'item' );
                    endwhile;
                else:
                    echo 'В этой категории нет записей, вероятно.';
                endif;
    
                wp_reset_postdata();
            }
        ?>


    </div>

    <div class="container_center container_center_sm">
        <div class="pagination">
            <?php
                echo paginate_links(
                    array(
                        'type'      => 'list',
                        'prev_next' => false,
                    )
                );
            ?>
        </div>
    </div>



</section>
<!-- end projects-->

<?php get_template_part( 'template-parts/sections/section', 'report' ); ?>