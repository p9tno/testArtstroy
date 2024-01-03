<!-- begin levelDesign-->
<section class="levelDesign section" id="levelDesign">
    <div class="container_center">
        <h2 class="section__title"><span><b>Релизовали более 40</b> дизайнерских проектов</span></h2>
        <div class="section__label"><span>Мы открыты: даем контакты дизайнеров-партнеров. Получите самый честный отзыв.</span></div>

        <div class="levelDesign__filter">

            <div class="filter" id="filter">
                <div class="filter__nav">
                    <div class="filter__wrap">
                        <div class="filter__label"><span>Общий уровень дизайна</span></div>

                        <?php $categories = get_categories( [
                                'orderby' => 'name',
                                'order' => 'DESC',
                                'taxonomy'     => 'level',
                            ] ); 
                        ?>

                        <ul class="filter__list form">

                            <?php foreach($categories as $category) : ?>
                             
                                <li class="filter__checkbox">
                                    <input type="checkbox" value="<?php echo $category->slug; ?>" id="<?php echo $category->term_id; ?>" />
                                    <label class="stars <?php echo $category->slug; ?>" for="<?php echo $category->term_id; ?>">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </label>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                    <div class="filter__reset filter_reset_js"><a href="#">Сбросить фильтр</a></div>

                </div>
            </div>

            <div class="preloaderFilter__inner">
                <div class="preloaderFilter__wrap preloaderFilter-js">
                    <div class="preloaderFilter"></div>
                </div>

                <div class="filter__result">
        
                    <?php
                        // $project_id = get_field('projects_relations');
                        // get_pr($project_id);
                        $args = array(
                            'post_type' => 'designer',
                            'posts_per_page' => -1,
                            // 'post__in' => $project_id,
                            // 'orderby'   => 'post__in',
                        );
                        $designer = new WP_Query($args);
                    ?>
                    
                    <?php if ($designer->have_posts()) : while ($designer->have_posts()) : $designer->the_post(); ?>
                        <?php get_template_part( 'template-parts/parts/content', 'levelDesign' ); ?>
                    <?php endwhile; ?>
                    
                    <?php else : ?>
                        no post
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
    
    
                </div>
    
                <!-- <div class="filter__more">
                    <a class="load_more show_more_d_js" href="#" data-load="Загрузкка" data-more="Смотреть еще" data-v-toggle="">Смотреть еще</a>
                </div> -->
            </div>
              




        </div>
    </div>
</section>
<!-- end levelDesign-->