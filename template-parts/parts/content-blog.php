<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
    $image_id = get_field('singleBlog_img');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

    $class_for_slider = '';
    if (is_page_template(['template-homepage.php'])) {
        $class_for_slider = '';
    }

?>


<?php if ( is_page_template(['template-homepage.php']) ) { ?>
    <div class="blog__slide swiper-slide">
        <div class="blog__item">
            <div class="blog__img_wrap">
                <div class="blog__img img"><img src="<?php echo $img_url; ?>" loading="lazy" alt="img" /></div>
            </div>
            <div class="blog__date"><span><?php the_date('j F Y'); ?></span></div>
            <div class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="blog__link"><a href="<?php the_permalink(); ?>">Читать подробнее</a></div>
        </div>
    </div>
<? } else { ?>
    <div class="blog__item">
        <div class="blog__img_wrap">
            <div class="blog__img img"><img src="<?php echo $img_url; ?>" loading="lazy" alt="img" /></div>
        </div>
        <div class="blog__date"><span><?php the_date('j F Y'); ?></span></div>
        <div class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="blog__description"><span><?php the_excerpt(); ?></span>
        </div>
        <div class="blog__link"><a href="<?php the_permalink(); ?>">Читать подробнее</a></div>
    </div>
<?php } ?>

