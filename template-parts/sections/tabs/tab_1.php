<?php
$image_id = $tab_1['muchMore_img_id'];
$size = 'full'; // (thumbnail, medium, full, vertical, horizon)

if( $image_id ) {
    $img_url = wp_get_attachment_image_url($image_id, $size);
} else {
    $img_url = $no_img_url;
} 
?>

<!--start tab__item-->
<div class="tab__item">
    <div class="muchMore__content muchMore__content_engineering bg" style="background-image: url('<?php echo $img_url; ?>')">
        <div class="muchMore__left">
            <div class="muchMore__title"><span><?php echo $tab_1['muchMore_title']; ?></span></div>

            <?php 
            $rows = $tab_1['muchMore_list'];
            if( $rows ) { ?>
                <ul>
                    <?php foreach( $rows as $row ) { ?>
                        <li><span><?php echo $row['muchMore_item']; ?></span></li>
                    <? } ?>
                </ul>
            <?php } ?>


            <div class="muchMore__action">
                <?php if ($tab_1['muchMore_btn']) { ?>
                    <?php 
                        $link = $tab_1['muchMore_btn'];
                        $title = $link['title'];
                        $url = $link['url'];
                        $target = $link['target'];
                    ?>
                    <a class="btn" href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?>><span><?php echo $title; ?></span></a>
                <?php } ?>

                <?php if ($tab_1['muchMore_link']) { ?>
                    <?php 
                        $link = $tab_1['muchMore_link'];
                        $title = $link['title'];
                        $url = $link['url'];
                        $target = $link['target'];
                    ?>
                    <div class="muchMore__link">
                        <a href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?>> <?php echo $title; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="muchMore__right desktop">
            <?php if ($tab_1['muchMore_person_img_id']) { 
                $image_id = $tab_1['muchMore_person_img_id'];
                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                $img_url = wp_get_attachment_image_url($image_id, $size);
            ?>
            
                <div class="muchMore__persone bg" style="background-image: url('<?php echo $img_url; ?>')">
                    <div class="person">
                        <?php if ($tab_1['muchMore_person_name']) { ?>
                            <div class="person__name"><span><?php echo $tab_1['muchMore_person_name']; ?></span></div>
                        <?php } ?>
                        <?php if ($tab_1['muchMore_person_info']) { ?>
                            <div class="person__description"><span><?php echo $tab_1['muchMore_person_info']; ?></span></div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <?php if ($tab_1['muchMore_form']) { ?>
        <?php get_template_part( 'template-parts/forms/form', 'muchMore'); ?>
    <?php } ?>


</div>
<!--end tab__item-->