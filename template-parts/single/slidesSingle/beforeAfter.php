<?php
    $before_id = $slide['portfolio_before_img_id'];
    $after_id = $slide['portfolio_after_img_id'];

    $size = 'project'; // (thumbnail, medium, full, vertical, horizon)

    if( $before_id ) {
        $before_url = wp_get_attachment_image_url($before_id, $size);
    } else {
        $before_url = $no_img_url;
    }

    if( $after_id ) {
        $after_url = wp_get_attachment_image_url($after_id, $size);
    } else {
        $after_url = $no_img_url;
    }
?>
<div class="swiper-slide projects__slide">
    <div class="projects__beforeAfter img shadow twentytwenty-container">
        <img src="<?php echo $before_url; ?>" loading="lazy" />
        <img src="<?php echo $after_url; ?>" loading="lazy" />
    </div>
</div>