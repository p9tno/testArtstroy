<?php
    $bg_id_sm = $slide['portfolio_bg_id'];
    $size = 'project_sm'; // (thumbnail, medium, full, vertical, horizon)

    if( $bg_id ) {
        $bg_url_sm = wp_get_attachment_image_url($bg_id_sm, $size);
    } else {
        $bg_url_sm = $no_img_url;
    }
?>
<div class="swiper-slide projects__slide_sm">
    <div class="projects__img_sm projects__video_sm bg"
        style="background-image: url('<?php echo $bg_url_sm; ?>')">
        <div class="play"><i class="icon_play"></i></div>
    </div>
</div>