<?php 
$rows = get_field('stages_list');
if( $rows ) { ?>
    <!-- begin stages-->
    <section class="stages section" id="stages">
        <div class="container_center container_center_right">
            <div class="stages__content">
                <div class="stages__left">

                    <div class="stages__caption">
                        <?php if (get_field('stages_sec_title')) { ?>
                            <h2 class="section__title" data-aos="fade-up"><span><?php the_field('stages_sec_title'); ?></span></h2>
                        <?php } ?>

                        <?php if (get_field('stages_sec_description')) { ?>
                            <div class="stages__text"><?php the_field('stages_sec_description'); ?></div>
                        <?php } ?>
                    </div>

                    <div class="stages__control">
                        <div class="stages__dotted"></div>
                        <div class="stages__arrows custom_arrows desktop"><i class="icon_arrow_left"></i><i
                                class="icon_arrow_right"></i></div>
                    </div>
                </div>

                <div class="stages__right">
                    <div class="swiper__label mobile">
                        <div class="swiper__img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img" />
                        </div>
                        <span>Листайте влево/вправо</span>
                    </div>

                    <div class="swiper stages__slider stages-swiper-js">
                        <div class="swiper-wrapper counter-wrap">
                            <?php foreach( $rows as $row ) { ?>
                                <div class="swiper-slide counter-item">
                                    <div class="stages__item">
                                        <div class="stages__wrap">
                                            <div class="stages__top">
                                                <div class="stages__title"><span><?php echo $row['stages_title']; ?></span></div>
                                                <div class="stages__text"><p><?php echo $row['stages_description']; ?></p></div>
                                            </div>
                                            <div class="stages__bottom">
                                                <div class="stages__naw">
                                                    <div class="stages__number"><span class="counter-el"></span></div>
                                                </div>
                                                <div class="stages__icon"><i class="icon_arrow_deg"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end stages-->
<?php } ?>