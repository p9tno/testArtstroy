<?php 
$rows = get_field('gifts_list', 'option');
if( $rows ) { 
$no_img_url = get_template_directory_uri() . '/assets/img/gifts_1.jpg' ;    
?>
    <!-- begin gifts-->
    <section class="gifts section" id="gifts">
        <div class="container_center container_center_right">
            <div class="gifts__content">
                <div class="gifts__left">
                    <div class="gifts__caption">
                        <?php if (get_field('gifts_sec_title', 'option')) { ?>
                            <h2 class="section__title"><span><?php the_field('gifts_sec_title', 'option'); ?></span></h2>
                        <?php } ?>
    
                        <?php if (get_field('gifts_sec_subtitle', 'option')) { ?>
                            <div class="gifts__label"><span><?php the_field('gifts_sec_subtitle', 'option'); ?></span></div>
                        <?php } ?>
                    </div>
                    <div class="gifts__control">
                        <div class="gifts__dotted"></div>
                        <div class="gifts__arrows custom_arrows desktop">
                            <i class="icon_arrow_left"></i>
                            <i class="icon_arrow_right"></i>
                        </div>
                    </div>
                </div>
                <div class="gifts__right">
    
                    <div class="swiper__label mobile">
                        <div class="swiper__img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img" />
                        </div>
                        <span>Листайте влево/вправо</span>
                    </div>
    
                    <div class="swiper gifts__slider gifts-swiper-js">
                        <div class="swiper-wrapper">
                            <?php foreach( $rows as $row ) { 
                                $image_id = $row['gifts_bg_id'];
                                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                            
                                if( $image_id ) {
                                    $img_url = wp_get_attachment_image_url($image_id, $size);
                                } else {
                                    $img_url = $no_img_url;
                                }
                            ?>
                                <div class="swiper-slide">
                                    <div class="gifts__item bg" style="background-image: url('<?php echo $img_url; ?>')">
                                        <div class="gifts__top">
                                            <div class="gifts__title"><span><?php echo $row['gifts_title']; ?></span></div>
                                            <div class="gifts__desc"><span><?php echo $row['gifts_desc']; ?></span></div>
                                        </div>
                                        <div class="gifts__main">
                                            <div class="gifts__price"><span><?php echo $row['gifts_price']; ?></span></div>
                                            <div class="gifts__oldprice"><span>Стоимость <b><?php echo $row['gifts_oldprice']; ?></b></span></div>
                                        </div>
                                        <div class="gifts__bottom">
                                            <a class="btn show_js" href="#application">
                                                <span>Получить подарок</span>
                                            </a>
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
    <!-- end gifts-->
<?php } ?>