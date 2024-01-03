<?php
    $image_id_sm = $slide['portfolio_img_id'];
    $size = 'project_sm'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id_sm ) {
        $img_url_sm = wp_get_attachment_image_url($image_id_sm, $size);
    } else {
        $img_url_sm = $no_img_url;
    }
?>
<div class="swiper-slide projects__slide_sm">
    <div class="projects__img_sm bg" style="background-image: url('<?php echo $img_url_sm; ?>')"></div>
</div>