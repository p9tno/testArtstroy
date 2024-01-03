<?php
    $default_img_url = get_template_directory_uri() . '/assets/img/personalManager_bg.jpg' ;
    $bg_id = get_field('personalManager_bg_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $bg_id ) {
        $bg_url = wp_get_attachment_image_url($bg_id, $size);
    } else {
        $bg_url = $default_img_url;
    }

?>
<!-- begin personalManager-->
<section class="personalManager section" id="personalManager">
    <div class="container_center">

        <div class="personalManager__content bg" style="background-image: url('<?php echo $bg_url; ?>')">

            <div class="personalManager__left">
                <?php if (get_field('personalManager_sec_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('personalManager_sec_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('personalManager_sec_subtitle')) { ?>
                    <div class="section__subtitle"><span><?php the_field('personalManager_sec_subtitle'); ?></span></div>
                <?php } ?>
            </div>

            <div class="personalManager__right">
                <?php if (get_field('personalManager_sec_title_right')) { ?>
                    <div class="section__title"><span><?php the_field('personalManager_sec_title_right'); ?></span></div>
                <?php } ?>

                <?php if (get_field('personalManager_sec_subtitle_right')) { ?>
                    <div class="section__subtitle"><span><?php the_field('personalManager_sec_subtitle_right'); ?></span></div>
                <?php } ?>

                <?php 
                $rows = get_field('personalManager_list');
                if( $rows ) { ?>
                    <div class="section__list">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="section__item">
                                <div class="section__mark check_mark">
                                    <i class="icon_mark"></i></div>
                                    <span><?php echo $row['personalManager_item']; ?></span>
                            </div>
                        <? } ?>
                    </div>
                <?php } ?>

            </div>

            <?php $image_id = get_field('personalManager_img_id');
                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                if( $image_id ) {
                    $img_url = wp_get_attachment_image_url($image_id, $size); ?>
               <div class="personalManager__persone bg" style="background-image: url('<?php echo $img_url; ?>')"></div>
            <?php }  ?>

            <div class="personalManager__mask bg desktop"></div>
        </div>
    </div>
</section>
<!-- end personalManager-->