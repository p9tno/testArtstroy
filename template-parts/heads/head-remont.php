<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/firstscreen_bg.webp' ;
    $image_id = get_field('apartments_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>


<!-- begin head-->
<section class="head head_remont section bg lines" id="head" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_right">
        <div class="head__content">
            <div class="head__left">
                <?php if (get_field('remont_subtitle_top')) { ?>
                    <div class="head__subtitle mb20"><span><?php the_field('remont_subtitle_top'); ?></span></div>
                <?php } ?>

                <?php if (get_field('remont_title')) { ?>
                    <h1 class="head__title mb24"><span><?php the_field('remont_title'); ?></span></h1>
                <?php } ?>

                <?php if (get_field('remont_subtitle_bottom')) { ?>
                    <div class="head__subtitle mb66"><span><?php the_field('remont_subtitle_bottom'); ?></span></div>
                <?php } ?>

                <?php if (get_field('whatsapp', 'option')) { ?>
                    <div class="head__button">
                        <a class="btn btn_dark btn_whatsapp" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
                            <span>Напишите нам в WhatsApp</span><small>время ответа 10 минут</small>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <?php get_template_part( 'template-parts/forms/form', 'headRemont' ); ?>

        </div>
    </div>
</section>
<!-- end head-->