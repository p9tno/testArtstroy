<!-- begin details-->
<section class="details section" id="details">
    <div class="container_center container_center_right">
        <?php if (get_field('details_sec_title')) { ?>
            <h2 class="section__title" data-aos="fade-up"><span><?php the_field('details_sec_title'); ?></span></h2>
        <?php } ?>

        <?php if (get_field('details_link')) { ?>
            <div class="details__link"><a href="<?php the_field('details_link'); ?>" target="_blank">Посмотреть стандарты АРТСТРОЙ</a></div>
        <?php } ?>
    </div>

    <?php 
    $preview = get_field('details_grid');
    if( $preview ) { ?>
        <div class="container_right">
            <div class="details__grid">
                <?php foreach( $preview as $item ) { 
                        $image_id = $item['details_preview_id'];
                        $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                        if( $image_id ) {
                            $img_url = wp_get_attachment_image_url($image_id, $size);
                        }
                    ?>
                    <div class="details__preview bg" style="background-image: url('<?php echo $img_url; ?>')">
                        <?php 
                        $pops = $item['details_plus'];
                        if( $pops ) { ?>
                            <?php foreach( $pops as $pop ) { ?>
                                <div class="details__plus" style="top: <?php echo $pop['details_pop_location_y']; ?>%; left: <?php echo $pop['details_pop_location_x']; ?>%;">
                                    <div class="details__icon"><i class="icon_plus"></i></div>
                                    <div class="details__pop">
                                        <div class="pop">
                                            <div class="pop__content"><span><?php echo $pop['details_pop_content']; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        <?php } ?>
                    </div>
                <? } ?>
            </div>
        </div>
    <?php } ?>


    <?php 
    $rows = get_field('details_list');
    if( $rows ) { ?>
        <div class="details__content">
            <div class="details__list">
                <?php foreach( $rows as $row ) { ?>
                    <div class="details__item">
                        <div class="details__head">
                            <div class="details__mark check_mark"><i class="icon_mark"></i></div>
                            <div class="details__label"><span> <?php echo $row['details_label']; ?></span>
                            </div>
                        </div>
                        <div class="details__text"><span> <?php echo $row['details_text']; ?></span></div>
                    </div>
                <? } ?>
            </div>
        </div>
    <?php } ?>

</section>
<!-- end details-->