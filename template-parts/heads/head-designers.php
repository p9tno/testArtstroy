<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/firstscreen_bg.webp' ;
    $image_id = get_field('designers_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>
<!-- begin head-->
<section class="head head_designers section bg lines" id="head" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_right">
        <div class="head__content">
            <div class="head__left">
                <?php if (get_field('designers_subtitle')) { ?>
                    <div class="head__subtitle mb66"><span><?php the_field('designers_subtitle'); ?></span></div>
                <?php } ?>
                <?php if (get_field('designers_title')) { ?>
                    <h1 class="head__title"><span><?php the_field('designers_title'); ?></span></h1>
                <?php } ?>
            </div>

            <?php 
            $rows = get_field('designers_list');
            if( $rows ) { ?>
                <div class="head__right">
    
                    <div class="head__list">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="head__item">
                                <div class="head__mark check_mark"><i class="icon_mark"></i></div>
                                <span><?php echo $row['designers_item']; ?></span>
                            </div>
                        <? } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end head-->