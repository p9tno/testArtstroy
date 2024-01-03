<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
$steps = get_field('project_steps');
if( $steps ) { ?>
    <!-- begin steps-->
    <section class="steps section" id="steps">
        <div class="container_center container_center_right">
    
            <h2 class="section__title"><span>Открыто описываем процесс работы по шагам</span></h2>
    
            <div class="steps__list counter-wrap">
                <?php foreach( $steps as $step ) { 
                    if ( $step['project_steps_gallery'] ) { ?>

                        <!-- steps__content_slider -->
                        <div class="steps__item counter-item">
                            <div class="steps__content steps__content_slider">
                                <div class="steps__left">
                                    <div class="steps__top">

                                        <div class="steps__label">
                                            <span class="counter-el"></span>
                                            <span><?php echo $step['project_steps_title']; ?></span>
                                        </div>

                                        <div class="steps__text"><?php echo $step['project_steps_text']; ?></div>

                                    </div>

                                    <div class="steps__control">
                                        <div class="steps__dotted"></div>
                                        <div class="steps__arrows custom_arrows desktop">
                                            <i class="icon_arrow_left"></i>
                                            <i class="icon_arrow_right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="steps__right">
                                    <div class="swiper__label mobile">
                                        <div class="swiper__img">
                                            <img src="../../img/hand.svg" />
                                        </div>
                                        <span>Листайте влево/вправо</span>
                                    </div>


                                    <?php 
                                    $slides = $step['project_steps_gallery'];
                                    if( $slides ) { ?>
                                   
                                        <div class="swiper stepsSlider steps-swiper-js itemForDataFancybox_js">
                                            <div class="swiper-wrapper stepsSlider__wrapper">
                                                <?php foreach( $slides as $slide ) { 
                                                    $image_id = $slide['project_steps_img_id'];
                                                    $size = 'custom_img'; // (thumbnail, medium, full, vertical, horizon)
                                                    $size_sm = 'custom_img_sm'; // (thumbnail, medium, full, vertical, horizon)
                                                
                                                    if( $image_id ) {
                                                        $img_url = wp_get_attachment_image_url($image_id, $size);
                                                        $img_url_sm = wp_get_attachment_image_url($image_id, $size_sm);
                                                    } else {
                                                        $img_url = $no_img_url;
                                                        $img_url_sm = $no_img_url;
                                                    }     
                                                ?>
                                                    <div class="swiper-slide stepsSlider__slide">
                                                        <div class="steps__img img">
                                                            <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                                                <img src="<?php echo $img_url_sm; ?>" loading="lazy" alt="img" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                        <!-- end steps__content_slider -->

                    <?php } else { ?>

                        <!-- steps__content -->
                        <div class="steps__item counter-item">
                            <div class="steps__content">
                                <div class="steps__label">
                                    <span class="counter-el"></span>
                                    <span><?php echo $step['project_steps_title']; ?></span>
                                </div>
                                <div class="steps__text"><?php echo $step['project_steps_text']; ?></div>
                            </div>
                        </div>
                         <!-- end steps__content -->

                    <?php } ?>
              
                <? } ?>
    
            </div>
        </div>
    </section>
    <!-- end steps-->
<?php } ?>