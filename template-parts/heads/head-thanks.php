<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/firstscreen_bg.webp' ;
    $image_id = get_field('thanks_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>
<!-- begin head-->
<section class="head head_thanks section bg lines" id="head" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_right">
        <div class="head__left">
            <?php if (get_field('thanks_title')) { ?>
                <h1 class="head__title mb30"><span><?php the_field('thanks_title'); ?></span></h1>
            <?php } ?>

            <?php if (get_field('thanks_subtitle')) { ?>
                <div class="head__subtitle mb80"><span><?php the_field('thanks_subtitle'); ?></span></div>
            <?php } ?>


            <div class="head__label mb28">
                <span>А пока ожидаете — посмотрите видеообзоры свежих проектов на YouTube или
                    социальную сеть с фотографиями.</span>
            </div>

            <div class="head__action">
                <?php if (get_field('youtube', 'option')) { ?>
                    <a class="btn btn_youtube" href="<?php the_field('youtube', 'option'); ?>" target="_blank"><span>Перейти на Youtube </span></a>
                <?php } ?>
                <?php if (get_field('instagram', 'option')) { ?>
                    <a class="btn btn_insta" href="<?php the_field('instagram', 'option'); ?>" target="_blank"><span>Перейти в соц.сеть</span></a>
                <?php } ?>
            </div>

        </div>

        <?php
        $image_id_persone = get_field('thanks_persone');
        $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

        if( $image_id_persone ) {
            $img_url_persone = wp_get_attachment_image_url($image_id_persone, $size); ?>

            <div class="head__persone bg" style="background-image: url('<?php echo $img_url_persone; ?>')"></div>

        <?php } ?>
    


    </div>
</section>
<!-- end head-->