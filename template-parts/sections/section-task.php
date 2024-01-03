<?php 
// get_pr(get_field('task_radio'));
?>
<!-- begin task-->
<section class="task section" id="task">
    <div class="container_center container_center_sm">
        <?php if (get_field('task_radio') == 'horizon') { ?>
            <div class="task__caption">
                <?php if (get_field('task_sec_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up">
                        <span><?php the_field('task_sec_title'); ?></span>
                    </h2>
                <?php } ?>
                <?php if (get_field('task_sec_desc')) { ?>
                    <div class="task__desc">
                        <span><?php the_field('task_sec_desc'); ?></span>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="section__caption">
                <?php if (get_field('task_sec_title')) { ?>
                    <h1 class="section__title"><span><?php the_field('task_sec_title'); ?></span></h1>
                <?php } ?>
                <?php if (get_field('task_sec_desc')) { ?>
                    <div class="section__subtitle"><span><?php the_field('task_sec_desc'); ?></span></div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <?php get_template_part( 'template-parts/parts/content', 'taskGrid' ); ?>

</section>
<!-- end task-->