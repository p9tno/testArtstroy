<?php
$image_id = $tab_3['muchMore_img_id'];
$size = 'full'; // (thumbnail, medium, full, vertical, horizon)

if( $image_id ) {
    $img_url = wp_get_attachment_image_url($image_id, $size);
} else {
    $img_url = $no_img_url;
}
?>
<!--start tab__item-->
<div class="tab__item">
    <div class="muchMore__content muchMore__content_finish bg" style="background-image: url('<?php echo $img_url; ?>')">
        <?php if ($tab_3['muchMore_title']) { ?>
            <div class="muchMore__title"><span><?php echo $tab_3['muchMore_title']; ?></span></div>
        <?php } ?>

        <?php 
        $rows = $tab_3['muchMore_list'];
        if( $rows ) { ?>
            <div class="provider__list counter-wrap">
                <?php foreach( $rows as $row ) { ?>
                    <?php if ($row['muchMore_list_mark']) { ?>
                        <div class="provider__item counter-item">
                            <div class="provider__nav">
                                <div class="provider__icon check_mark"><i class="icon_mark"></i></div>
                                <div class="provider__number"><span class="counter-el"></span></div>
                            </div>
                            <div class="provider__label"><span><?php echo $row['muchMore_item']; ?></span></div>
                        </div>
                    <?php } else { ?>
                        <div class="provider__item">
                            <div class="provider__label provider__label_nom"><span><?php echo $row['muchMore_item']; ?></span></div>
                        </div>
                    <?php } ?>
                <? } ?>
            </div>
        <?php } ?>

    </div>
</div>
<!--end tab__item-->