<?php
    $default_img_url = get_template_directory_uri() . '/assets/img/information_bg.webp' ;
    $bg_id = get_field('information_bg_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $bg_id ) {
        $bg_url = wp_get_attachment_image_url($bg_id, $size);
    } else {
        $bg_url = $default_img_url;
    }

?>
<!-- begin information-->
<section class="information section bg lines" id="information" style="background-image: url('<?php echo $bg_url; ?>')">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center">
        <div class="information__content">
            <?php if (get_field('information_sec_subtitle')) { ?>
                <div class="section__subtitle"><span><?php the_field('information_sec_subtitle'); ?></span></div>
            <?php } ?>

            <?php if (get_field('information_sec_title')) { ?>
                <h2 class="section__title" data-aos="fade-up"><span><?php the_field('information_sec_title'); ?></span></h2>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end information-->