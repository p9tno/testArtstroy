<?php
    $image_id = $slide['portfolio_img_id'];
    $size = 'project'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>
<div class="swiper-slide projects__slide">
    <div class="projects__img img">
        <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
            <img src="<?php echo $img_url; ?>" loading="lazy" />
        </a>
    </div>
</div>