<?php
$class_dark = '';
if (get_field('facts_select_1') == 'dark') {
    $class_dark = 'facts_dark';
}
?>
<!-- begin facts-->
<section class="facts <?php echo $class_dark; ?> section">
    <div class="container_center">
        <div class="facts__content facts__content_center">

            <div class="facts__caption">
                <?php if (get_field('facts_sec_subtitle_top_1')) { ?>
                    <div class="section__subtitle"><span><?php the_field('facts_sec_subtitle_top_1'); ?></span></div>
                <?php } ?>
                <?php if (get_field('facts_sec_title_1')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('facts_sec_title_1'); ?></span></h2>
                <?php } ?>
                <?php if (get_field('facts_sec_subtitle_bottom_1')) { ?>
                    <div class="section__subtitle"><span><?php the_field('facts_sec_subtitle_bottom_1'); ?></span></div>
                <?php } ?>
            </div>

            <?php 
            $rows = get_field('facts_list_1');
            if( $rows ) { ?>
                <div class="facts__list">
                    <div class="provider__list provider__list_col2 counter-wrap">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="provider__item counter-item">
                                <div class="provider__nav">
                                    <div class="provider__icon check_mark"><i class="icon_mark"></i></div>
                                    <div class="provider__number"><span class="counter-el"></span></div>
                                </div>
                                <div class="provider__label"><span><?php echo $row['facts_item']; ?></span></div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- end facts-->