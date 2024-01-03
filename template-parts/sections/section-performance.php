<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
    $image_id = get_field('performance_bg_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

?>
<!-- begin performance-->
<section class="performance section" id="performance">
    <div class="container_center container_center_right">
        <div class="performance__wrap">
            <div class="performance__left">

                <?php if (get_field('performance_sec_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('performance_sec_title'); ?></span></h2>
                <?php } ?>

                <div class="performance__content">
                    <?php if (get_field('performance_title')) { ?>
                        <span><?php the_field('performance_title'); ?></span>
                    <?php } ?>

                    <?php 
                    $rows = get_field('performance_list');
                    if( $rows ) { ?>
                        <ul class="list">
                            <?php foreach( $rows as $row ) { ?>
                                <li><span><?php echo $row['performance_content']; ?></span></li>
                            <? } ?>
                        </ul>
                    <?php } ?>
                </div>

            </div>

            <div class="performance__right">
                <div class="performance__video bg" style="background-image: url('<?php echo $img_url; ?>')">
                    <div class="performance__inner">
                        <div class="performance__info">
                            <?php if (get_field('performance_video_title')) { ?>
                                <span><?php the_field('performance_video_title'); ?></span>
                            <?php } ?>
                            <?php if (get_field('performance_video_time')) { ?>
                                <small><?php the_field('performance_video_time'); ?></small>
                            <?php } ?>
                        </div>
                        <?php if (get_field('performance_video_id')) { ?>
                            <div class="play youtubeModal-js" id="<?php the_field('performance_video_id'); ?>"><i class="icon_play"></i></div>
                        <?php } ?>
                    </div>
                    <?php if (get_field('performance_video_label')) { ?>
                        <div class="performance__label"><span><?php the_field('performance_video_label'); ?></span></div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end performance-->