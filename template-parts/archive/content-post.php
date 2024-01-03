<!-- begin blog-->
<section class="blog section" id="blog">
    <div class="container_center container_center_right">
        <div class="section__caption">

            <h1 class="section__title"><span>Полезные <b>статьи</b></span></h1>
            <div class="section__subtitle"><span>о строительстве, проектировании и ремонте</span></div>

        </div>

        <ul class="cat-list">
            <?php
     
            $args = array(
                'taxonomy'     => 'category', // название таксономии
                'orderby'      => 'name',  // сортируем по названиям
                'order'        => 'ASC',
                'show_count'   => 0,       // не показываем количество записей
                'pad_counts'   => 0,       // не показываем количество записей у родителей
                'hierarchical' => 0,       // древовидное представление
                'title_li'     => ''       // список без заголовка
                );
            
            ?>

            <?php wp_list_categories( $args ); ?>
      
        </ul>

        <div class="blog__grid">
            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/parts/content', 'blog' );
                    endwhile;
                else:
                    echo 'В этой категории нет записей, вероятно.';
                endif;

                wp_reset_postdata();
            ?>

        </div>

        <div class="blog__pagination">
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
        
    </div>
</section>
<!-- end blog-->
<?php get_template_part( 'template-parts/sections/section', 'videoWork' ); ?>
<?php get_template_part( 'template-parts/sections/section', 'report' ); ?>