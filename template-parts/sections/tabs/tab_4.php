<?php
$image_id = $tab_4['muchMore_img_id'];
$size = 'full'; // (thumbnail, medium, full, vertical, horizon)

if( $image_id ) {
    $img_url = wp_get_attachment_image_url($image_id, $size);
} else {
    $img_url = $no_img_url;
}
?>
<!--start tab__item-->
<div class="tab__item">
    <div class="muchMore__content muchMore__content_clean bg" style="background-image: url('<?php echo $img_url; ?>')">
        <?php if ($tab_4['muchMore_title']) { ?>
            <div class="muchMore__title muchMore__title_sm"><span><?php echo $tab_4['muchMore_title']; ?></span></div>
        <?php } ?>
    </div>
</div>
<!--end tab__item-->