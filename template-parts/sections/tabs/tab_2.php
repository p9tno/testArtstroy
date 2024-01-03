<?php
$image_id = $tab_2['muchMore_img_id'];
$size = 'full'; // (thumbnail, medium, full, vertical, horizon)

if( $image_id ) {
    $img_url = wp_get_attachment_image_url($image_id, $size);
} else {
    $img_url = $no_img_url;
}
?>
<!--start tab__item-->
<div class="tab__item">
    <div class="muchMore__content muchMore__content_supply bg"
        style="background-image: url('<?php echo $img_url; ?>')">
        <div class="muchMore__left">
            <?php if ($tab_2['muchMore_title']) { ?>
                <div class="muchMore__title"><span><?php echo $tab_2['muchMore_title']; ?></span></div>
            <?php } ?>

            <?php if ($tab_2['muchMore_text']) { ?>
                <div class="muchMore__text"><?php echo $tab_2['muchMore_text']; ?></div>
            <?php } ?>
        </div>

        <?php 
        $logos = $tab_2['muchMore_logos_list'];
        if( $logos ) { ?>
            <div class="muchMore__right">
                <div class="logos__grid">
                    <?php foreach( $logos as $logo ) { 
                        $image_id = $logo['muchMore_logos_id'];
                        $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                        $logo_img_url = wp_get_attachment_image_url($image_id, $size);
                        ?>
                        <div class="logos__item">
                            <?php if ($logo['muchMore_logos_item']) { ?>
                                <div class="logos__pop">
                                    <div class="pop">
                                        <div class="pop__content"><span><?php echo $logo['muchMore_logos_item']; ?></span></div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="logos__img img"><img src="<?php echo $logo_img_url; ?>" alt="img" /></div>
                        </div>
                    
                    <? } ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!--end tab__item-->