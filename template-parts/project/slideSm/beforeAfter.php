<?php
    $beforeAfterSm_id = $slide['portfolio_img_sm_id'];

    $size = 'project_sm'; // (thumbnail, medium, full, vertical, horizon)

    if( $beforeAfterSm_id ) {
        $beforeAfterSm_url = wp_get_attachment_image_url($beforeAfterSm_id, $size);
    } else {
        $beforeAfterSm_url = $no_img_url;
    }
?>
<div class="swiper-slide projects__slide_sm">
    <div class="projects__img_sm bg" style="background-image: url('<?php echo $beforeAfterSm_url; ?>')"></div>
</div>

