<?php 
$class_nomt = '';
if (is_page_template(['template-homepage.php'])) {
    $class_nomt = '';
} else {
    $class_nomt = 'founder_nomt';
}
?>

<!-- begin founder-->
<section class="founder section bg <?php echo $class_nomt; ?>" id="founder">
    <?php if ( is_page_template(['template-remont.php']) ) { ?>
        <div class="container_center container_center_sm">
            <h2 class="section__title" data-aos="fade-up"><span><b>АРТСТРОЙ</b> — честный и надежный партнер</span></h2>
        </div>
    <?php } ?>

    <?php 
    $rows = get_field('runningLine_list', 'option');
    if( $rows ) { ?>
        <div class="runningLine">
            <div class="runningLine__content">
                <div class="runningLine__list">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="runningLine__item"><span><?php echo  $row['runningLine_item']; ?></span></div>
                    <? } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="container_center container_center_sm">
        <div class="founder__content">
            <div class="founder__left">

                <div class="founder__caption">
                    <?php if (get_field('founder_title', 'option')) { ?>
                        <div class="founder__title" data-aos="fade-up"><span><?php the_field('founder_title', 'option'); ?></span></div>
                    <?php } ?>

                    <?php if (get_field('founder_description', 'option')) { ?>
                        <div class="founder__description"><span><?php the_field('founder_description', 'option'); ?></span></div>
                    <?php } ?>
                </div>

                <?php if (get_field('founder_text', 'option')) { ?>
                    <div class="founder__text"><span><?php the_field('founder_text', 'option'); ?></span></div>
                <?php } ?>

                <?php if (get_field('founder_text_bold', 'option')) { ?>
                    <div class="founder__text founder__text_bold"><span><?php the_field('founder_text_bold', 'option'); ?></span></div>
                <?php } ?>

                <div class="founder__button">
                    <a class="btn show_js" href="#application"><span>Обсудить задачу лично</span><span>с Александром сейчас</span></a>
                    <?php if (get_field('founder_button', 'option')) { ?>
                        <?php 
                            $link = get_field('founder_button', 'option');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_dark" href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?>><span><?php echo $title; ?></span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="founder__right">
                <div class="founder__person">
                    <div class="person">
                        <?php if (get_field('founder_person_name', 'option')) { ?>
                            <div class="person__name" data-aos="fade-left" data-aos-delay="300"><span><?php the_field('founder_person_name', 'option'); ?></span></div>
                        <?php } ?>

                        <?php if (get_field('founder_person_description', 'option')) { ?>
                            <div class="person__description" data-aos="fade-left" data-aos-delay="600"><span><?php the_field('founder_person_description', 'option'); ?></span></div>
                        <?php } ?>

                    </div>
                </div>

                <?php if (get_field('founder_video_id', 'option')) { ?>
                    <div class="founder__play">
                        <div class="play__info">

                            <?php if (get_field('founder_play_label', 'option')) { ?>
                                <div class="play__label"><span><?php the_field('founder_play_label', 'option'); ?></span>
                            <?php } ?>

                            <?php if (get_field('founder_play_time', 'option')) { ?>
                                <div class="play__time"><span><?php the_field('founder_play_time', 'option'); ?></span></div>
                            <?php } ?>

                            </div>
                        </div>
                        <div class="play pulse youtubeModal-js" id="<?php the_field('founder_video_id', 'option'); ?>"><i class="icon_play"></i></div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- end founder-->