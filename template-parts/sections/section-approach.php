<!-- begin approach-->
<section class="approach section bg lines" id="approach">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_sm">
        <?php if (get_field('approach_title')) { ?>
            <h1 class="section__title"><span><?php the_field('approach_title'); ?></span></h1>
        <?php } ?>

        <?php if (get_field('approach_subtitle')) { ?>
            <div class="section__subtitle"><span><?php the_field('approach_subtitle'); ?></span></div>
        <?php } ?>

        <?php if (get_field('approach_video_id')) { ?>
            <div class="approach__video">
                <div class="play pulse youtubeModal-js" id="<?php the_field('approach_video_id'); ?>"><i class="icon_play"></i></div>
                <div class="play__info">
                    <?php if (get_field('approach_video_label')) { ?>
                        <div class="play__label"><span><?php the_field('approach_video_label'); ?></span></div>
                    <?php } ?>
                    <?php if (get_field('approach_video_time')) { ?>
                        <div class="play__time"><span><?php the_field('approach_video_time'); ?></span></div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </div>
</section>
<!-- end approach-->