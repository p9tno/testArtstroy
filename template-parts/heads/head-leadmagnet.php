<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/firstscreen_bg.webp' ;
    $image_id = get_field('leadmagnet_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>

<!-- begin head-->
<section class="head head_leadmagnet section bg" id="head" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="container_center container_center_right">
        <div class="head__left">

            <?php if (get_field('leadmagnet_title')) { ?>
                <h1 class="head__title"><span><?php the_field('leadmagnet_title'); ?></span></h1>
            <?php } ?>

            <?php if (get_field('leadmagnet_subtitle')) { ?>
                <div class="head__subtitle"><span><?php the_field('leadmagnet_subtitle'); ?></span></div>
            <?php } ?>

            <?php if (get_field('leadmagnet_desc')) { ?>
                <div class="head__title"><span><?php the_field('leadmagnet_desc'); ?></span></div>
            <?php } ?>

            <?php get_template_part( 'template-parts/forms/form', 'leadmagnet' ); ?>

        </div>
    </div>
</section>
<!-- end head-->