<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/404_bg.webp' ;
    $image_id = get_field('404_img_id', 'option');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>
<!-- begin head-->
<section class="head head_404 section bg lines" id="head" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_right">
        <div class="head__left">
            <?php if (get_field('404_title', 'option')) { ?>
                <h1 class="head__title mb24"><span><b><?php the_field('404_title', 'option'); ?></b></span></h1>
            <?php } ?>
            <?php if (get_field('404_subtitle', 'option')) { ?>
                <div class="head__subtitle mb42"><span><?php the_field('404_subtitle', 'option'); ?></span></div>
            <?php } ?>

            <div class="head__button mb74"><a class="btn btn_404" href="<?php echo esc_url(home_url("/")); ?>"> <span>Вернуться на главную</span></a></div>

            
            <?php if (get_field('whatsapp', 'option')) { ?>
                <div class="head__text mb14"><span>или напишите нам, чтобы сообщить об ошибке</span></div>
                <div class="head__button">
                    <a class="btn btn_dark btn_whatsapp" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
                        <span>Напишите нам в WhatsApp</span><small>время ответа 10 минут</small>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end head-->