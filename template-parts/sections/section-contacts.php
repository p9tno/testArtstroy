<?php 
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
?>
<!-- begin contacts-->
<section class="contacts section" id="contacts">
    <div class="container_center container_center_right">

        <?php if (get_field('contacts_title')) { ?>
            <div class="section__caption">
                <h1 class="section__title"><span><?php the_field('contacts_title'); ?></span></h1>
            </div>
        <?php } ?>

        <div class="contacts__row">
            <div class="contacts__col">
                <?php 
                $maps = get_field('contacts_list_location');
                if ( $maps ) { 
                $id = 0;
                ?>
                    <?php foreach( $maps as $map ) { ?>
                        <div class="contacts__item">
                            
                            <div class="contacts__location">
                                <?php if ($map['contact_location_text']) { ?>
                                    <div class="contacts__flex">
                                        <div class="contacts__icon"><i class="icon_location"></i></div>
                                        <div class="contacts__text"><span><?php echo $map['contact_location_text']; ?></span>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if ($map['contact_iframe_link']) { ?>
                                    <div class="contacts__link"><a class="show_js" href="#map-<?php echo $id; ?>">Смотреть на карте</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    <? $id++; } ?>
                <?php } ?>

                <?php if (get_field('phone', 'option')) { ?>
                    <div class="contacts__item">
                        <div class="phone">
                            <div class="phone__link"><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></div>
                            <?php if (get_field('phone_time', 'option')) { ?>
                                <div class="phone__label"><span><?php the_field('phone_time', 'option'); ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if (get_field('mail', 'option')) { ?>
                    <div class="contacts__item mb50">
                        <div class="contacts__mail"><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></div>
                    </div>
                <?php } ?>

                <div class="contacts__item mb50">
                    <div class="contacts__label"><span>Мы в соцсетях</span></div>

                    <div class="messenger messenger_large">
                        <div class="messenger__list">
                            <?php get_template_part( 'template-parts/parts/content', 'youtube' ); ?>
                            <?php get_template_part( 'template-parts/parts/content', 'wk' ); ?>
                            <?php get_template_part( 'template-parts/parts/content', 'insta' ); ?>
                        </div>
                    </div>
                </div>

                <div class="contacts__item mb50">
                    <div class="contacts__label"><span>Пишите онлайн</span></div>

                    <div class="contacts__messenger">
                        <div class="messenger messenger_large">
                            <div class="messenger__list">
                                <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (get_field('contacts_link')) { ?>
                    <div class="contacts__item">
                        <div class="contacts__link"><a href="<?php the_field('contacts_link'); ?>" target="_blank">Реквизиты</a></div>
                    </div>
                <?php } ?>

            </div>

            <div class="contacts__col">
                <?php $offices = get_field('contacts_list_office');
                if( $offices ) { ?>
                    <div class="contacts__item">
                        <div class="contacts__label"><span>До встречи в офисе</span></div>
                        <div class="swiper__label mobile">
                            <div class="swiper__img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img" />
                            </div>
                            <span>Листайте влево/вправо</span>
                        </div>
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper itemForDataFancybox_js">
                                <?php foreach( $offices as $office ) {
                                    $image_id = $office['contacts_img_id'];
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
                                    <div class="swiper-slide singleSlider__slide">
                                        <div class="contacts__img img">
                                            <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                                <img src="<?php echo $img_url_sm; ?>" loading="lazy" alt="img" />
                                            </a>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
    
                            <div class="contacts__control">
                                <div class="singleSlider__dotted"></div>
                                <div class="singleSlider__arrows custom_arrows desktop">
                                    <i class="icon_arrow_left"></i>
                                    <i class="icon_arrow_right"></i>
                                </div>
                            </div>
    
                        </div>
                    </div>
                <?php } ?>

                <?php $gates = get_field('contacts_list_gate');
                if( $gates ) { ?>
                    <div class="contacts__item">
                        <div class="contacts__label"><span>До встречи у вас на замере</span></div>
                        <div class="swiper__label mobile">
                            <div class="swiper__img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img" />
                            </div>
                            <span>Листайте влево/вправо</span>
                        </div>
    
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper itemForDataFancybox_js">
                                <?php foreach( $gates as $gate ) {
                                    $image_id = $gate['contacts_img_id'];
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
                                    
                                    <div class="swiper-slide singleSlider__slide">
                                        <div class="contacts__img img">
                                            <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                                <img src="<?php echo $img_url_sm; ?>" loading="lazy" alt="img" />
                                            </a>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
    
                            <div class="contacts__control">
                                <div class="singleSlider__dotted"></div>
                                <div class="singleSlider__arrows custom_arrows desktop">
                                    <i class="icon_arrow_left"></i>
                                    <i class="icon_arrow_right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="contacts__col">
                <?php get_template_part( 'template-parts/forms/form', 'contacts' ); ?>
            </div>
        </div>
    </div>
</section>
<!-- end contacts-->




<?php if( $maps ) { 
$modalID = 0;    
?>
    <?php foreach( $maps as $map ) { ?>
        <!-- Begin Modal map-->
        <div class="modal fade map" id="map-<?php echo $modalID; ?>">
            <div class="modal-dialog">
                <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
                    <div class="modal-body">
                        <div class="map__content">
                            <iframe src="<?php echo $map['contact_iframe_link']; ?>" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal map-->
    <? $modalID++; } ?>
<?php } ?>
