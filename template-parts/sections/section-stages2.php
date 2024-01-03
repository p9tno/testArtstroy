<?php 
$rows = get_field('stages_list_2');
if( $rows ) { ?>
    <!-- begin stages2 -->
    <section class="stages section" id="stages2">
        <div class="container_center container_center_right">
            <div class="stages__content">

                <div class="stages__left">
                    <?php if (get_field('stages_sec_title_2')) { ?>
                        <h2 class="section__title"><span><?php the_field('stages_sec_title_2'); ?></span></h2>
                    <?php } ?>

                    <div class="stages__control">
                        <div class="stages__dotted"></div>
                        <div class="stages__arrows custom_arrows desktop"><i class="icon_arrow_left"></i><i
                                class="icon_arrow_right"></i></div>
                    </div>
                </div>

                <div class="stages__right">
                    <div class="swiper__label mobile">
                        <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img"/></div><span>Листайте влево/вправо</span>
                    </div>
                    <div class="swiper stages__slider stages-swiper-js">
                        <div class="swiper-wrapper counter-wrap">
                            <?php $i = 1; foreach( $rows as $row ) { ?>

                                <?php if ($row['stages_action']) { ?>
                                    <div class="swiper-slide counter-item">
                                        <div class="stages__item stages__item_step">
                                            <div class="stages__wrap">
        
                                                <div class="stages__top">
                                                    <div class="stages__title"><span>Шаг <?php echo $i; ?></span></div>
                                                    <div class="stages__naw">
                                                        <div class="stages__number"><span class="counter-el"></span></div>
                                                    </div>
                                                </div>
        
                                                <div class="stages__text"><?php echo $row['stages_text']; ?></div>

                                                <?php if (get_field('phone', 'option')) { ?>
                                                    <div class="stages__phone">
                                                        <span>Звоните:</span>
                                                        <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (get_field('whatsapp', 'option')) { ?>
                                                    <div class="stages__button">
                                                        <a class="btn btn_dark btn_whatsapp" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
                                                            <span>Напишите нам в WhatsApp</span>
                                                            <small>время ответа 10 минут</small>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="swiper-slide counter-item">
                                        <div class="stages__item stages__item_step">
                                            <div class="stages__wrap">
                                                <div class="stages__top">
                                                    <div class="stages__title"><span>Шаг <?php echo $i; ?> </span></div>
                                                    <div class="stages__naw">
                                                        <div class="stages__number"><span class="counter-el"></span></div>
                                                    </div>
                                                </div>
                                                <div class="stages__bottom">
                                                    <div class="stages__text"><?php echo $row['stages_text']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                
                            <?php $i++; }  ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end stages2 -->
<?php } ?>


