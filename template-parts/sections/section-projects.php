<?php if (get_field('projects_relations')) { ?>
    <!-- begin projects-->
    <section class="projects section" id="projects">

    <div class="container_center">
        <?php if (get_field('projects_sec_title')) { ?>
            <h2 class="section__title" data-aos="fade-up"><span><?php the_field('projects_sec_title'); ?></span></h2>
        <?php } ?>
        <?php if (get_field('projects_sec_desc')) { ?>
            <div class="section__subtitle"><span><?php the_field('projects_sec_desc'); ?></span></div>
        <?php } ?>
    </div>

    <?php 
    $rows = get_field('projects_runningLine');
    if( $rows ) { ?>
        <div class="projects__runningLine">
            <div class="runningLine runningLine_sm">
                <div class="runningLine__content">
                    <div class="runningLine__list">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="runningLine__item"><span><?php echo $row['projects_runningLine_item']; ?></span></div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <div class="portfolio__grid portfolio__grid_right">

        <?php
            $project_id = get_field('projects_relations');
            // get_pr($project_id);
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
                'post__in' => $project_id,
                'orderby'   => 'post__in',
            );
            $project = new WP_Query($args);
        ?>
        
        <?php if ($project->have_posts()) : while ($project->have_posts()) : $project->the_post(); ?>
            <?php 
                //get_template_part( 'template-parts/project/content', 'item' );
                get_template_part( 'template-parts/project/content', 'house' ); 
            ?>
        <?php endwhile; ?>
        
        <?php else : ?>
            no post
        <?php endif; ?>
        
        <?php wp_reset_postdata(); ?>

    </div>

    <div class="container_center container_center_sm">
        <div class="projects__action">
            <div class="projects__load">
                <a class="load_more show_more_js" href="#" data-load="Загрузкка" data-more="Смотреть еще">Смотреть еще работы</a>
            </div>
            <?php if (get_field('projects_buton')) { ?>
                <div class="projects__buton">
                    <a class="btn" href="<?php the_field('projects_buton'); ?>"><span>Перейти в полное портфолио >100 проектов</span></a>
                </div>
            <?php } ?>
        </div>
    </div>

    </section>
    <!-- end projects-->
    
<?php } ?>
