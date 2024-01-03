<!-- begin quiz-->
<section class="quiz section" id="quiz">
    <div class="container_center">
        <div class="quiz__caption">
            <?php if (get_field('quiz_title')) { ?>
                <h1 class="section__title" data-aos="fade-up"><span><?php the_field('quiz_title'); ?></span></h1>
            <?php } ?>
            <?php if (get_field('quiz_subtitle')) { ?>
                <div class="quiz__description"><span><?php the_field('quiz_subtitle'); ?></span></div>
            <?php } ?>
        </div>
        
        <form class="quiz-form form" action="<?php echo get_template_directory_uri() . '/quizsend.php'; ?>">
            <input type="hidden" name="subject" value="<?php the_field('quiz_title'); ?>" />
            <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
            <input type="hidden" name="notspam" value="" />

            <!-- start quiz-container-->
            <div class="quiz-container" id="quiz">
                <?php get_template_part( 'template-parts/quiz/content', 'main' ); ?>
                <?php get_template_part( 'template-parts/quiz/content', 'right' ); ?>
            </div>
            <!-- end quiz-container-->
            <?php get_template_part( 'template-parts/quiz/content', 'result' ); ?>

        </form>
    </div>
</section>
<!-- end quiz-->