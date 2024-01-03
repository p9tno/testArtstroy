<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
$rows = get_field('project_data_list');

if( $rows ) { ?>
  <div class="project__data">
      <div class="data">
        <?php foreach( $rows as $row ) { ?>
            <!-- begin .data__item-->
            <div class="data__item">
                <div class="data__title"><span><?php echo $row['data_title']; ?></span></div>
    
                <div class="swiper__label mobile">
                    <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" /></div><span>Листайте влево/вправо</span>
                </div>

                <?php 
                $slides = $row['data_slides'];
                if( $slides ) { ?>
                    <div class="swiper dataSlider data-swiper-js itemForDataFancybox_js">
                        <div class="swiper-wrapper dataSlider__wrapper">
                            <?php foreach( $slides as $slide ) { 
                                $image_id = $slide['data_img_id'];
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
                                <div class="swiper-slide dataSlider__slide">
                                    <div class="data__img img">
                                        <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                            <img src="<?php echo $img_url_sm; ?>" loading="lazy" alt="img" />
                                        </a>
                                    </div>
                                </div>
                            <? } ?>
        
        
                        </div>
        
                        <div class="data__control">
                            <div class="data__dotted dotted_sm"></div>
                            <div class="data__arrows custom_arrows desktop">
                                <i class="icon_arrow_left"></i>
                                <i class="icon_arrow_right"></i>
                            </div>
                        </div>
        
                    </div>
                <?php } ?>
    

            </div>
            <!-- end .data__item-->
        <? } ?>
      </div>
  </div>
<?php } ?>