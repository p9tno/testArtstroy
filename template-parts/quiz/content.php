<?php if (get_field('quiz_relations')) { ?>
    
    <?php
        $post_id = get_field('quiz_relations');    
        $args = array(
            'post_type' => 'quiz',
            'posts_per_page' => 1,
            'post__in' => array($post_id),
        );
        $quiz = new WP_Query($args);
    ?>
    
    <?php if ($quiz->have_posts()) : while ($quiz->have_posts()) : $quiz->the_post(); ?>
        <?php get_template_part( 'template-parts/quiz/content', 'quiz' );?>
    <?php endwhile; ?>
    
    <?php else : ?>
        no post
    <?php endif; ?>
    
    <?php wp_reset_postdata(); ?>
    

<?php } ?>