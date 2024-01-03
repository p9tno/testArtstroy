<?php 
$slides = get_field('largeSlider_slides');
if( $slides ) {

    $no_img_url = get_template_directory_uri() . '/assets/img/largeSlider_bg.webp' ;
    $image_id = get_field('test_img');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
    
    
    ?>
    <!-- begin largeSlider-->
    <section class="largeSlider section bg" id="largeSlider" style="background-image: url('<?php echo $img_url; ?>')">
    
        <div class="container_center container_center_right">
            <div class="largeSlider__content">
                <div class="swiper largeSlider-swiper-js">
                    <div class="swiper-wrapper">

                        <?php foreach( $slides as $slide ) { ?>
                            
                            <div class="swiper-slide">
        
                                <div class="largeSlider__item">
                                    <div class="section__title"><span><?php echo $slide['largeSlider_title']; ?></span></div>
                                    <?php 
                                    $rows = $slide['largeSlider_list'];
                                    if( $rows ) { ?>
                                        <div class="section__list section__list_row">
                                            <?php foreach( $rows as $row ) { ?>
                                                <div class="section__item">
                                                    <div class="section__mark check_mark"><i class="icon_mark"></i></div>
                                                    <span><?php echo $row['largeSlider_item']; ?></span>
                                                </div>
                                            <? } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <? } ?>
    
    
                    </div>
                </div>
    
                <div class="largeSlider__control">
                    <div class="largeSlider__dotted dotted_sm"></div>
                    <div class="largeSlider__arrows custom_arrows">
                        <i class="icon_arrow_left"></i>
                        <i class="icon_arrow_right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end largeSlider-->
 
<?php } ?>