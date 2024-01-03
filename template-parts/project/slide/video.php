<?php
    $bg_id = $slide['portfolio_bg_id'];
    $size = 'project'; // (thumbnail, medium, full, vertical, horizon)

    if( $bg_id ) {
        $bg_url = wp_get_attachment_image_url($bg_id, $size);
    } else {
        $bg_url = $no_img_url;
    }
?>

<div class="swiper-slide projects__slide">
    <div class="projects__img projects__video bg shadow" style="background-image: url('<?php echo $bg_url; ?>')">
        <?php if ($slide['portfolio_video_id']) { ?>
            <div class="play pulse youtubeModal-js" id="<?php echo $slide['portfolio_video_id']; ?>"><i class="icon_play"></i></div>
        <?php } ?>
    </div>
</div>