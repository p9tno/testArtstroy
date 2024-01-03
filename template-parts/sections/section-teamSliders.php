<?php 
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
?>
<!-- begin teamSliders-->
<section class="teamSliders section" id="teamSliders">
    <div class="container_center container_center_right">
        <?php if (get_field('teamSliders_label')) { ?>
            <div class="teamSliders__label"><span><?php the_field('teamSliders_label'); ?></span></div>
        <?php } ?>

        <?php if (get_field('teamSliders_title')) { ?>
            <h2 class="section__title" data-aos="fade-up"><span><?php the_field('teamSliders_title'); ?></span></h2>
        <?php } ?>

        <div class="teamSliders__content">
            <?php 
            $rows = get_field('teamSliders_list');
            if( $rows ) { ?>
                <div class="teamSliders__top">
    
                    <div class="swiper__label mobile">
                        <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" /></div><span>Листайте влево/вправо</span>
                    </div>
    
                    <div class="swiper teamImgSlider teamImgSlider-swiper-js itemForDataFancybox_js">
    
                        <div class="swiper-wrapper">
                            <?php foreach( $rows as $row ) { 
                                $image_id = $row['teamSliders_img_id'];
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
                                <div class="swiper-slide">
                                    <div class="data__img img">
                                        <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                            <img src="<?php echo $img_url_sm; ?>" alt="img" loading="lazy" />
                                        </a>
                                    </div>
                                </div>
                            
                            <? } ?>
    
    
                        </div>
    
                        <div class="teamSliders__control">
                            <div class="teamImgSlider__dotted dotted_sm"></div>
                            <div class="teamImgSlider__arrows custom_arrows desktop">
                                <i class="icon_arrow_left"></i>
                                <i class="icon_arrow_right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php 
            $videos = get_field('teamSliders_videos');
            if( $videos ) { ?>
                <div class="teamSliders__bottom">
    
                    <div class="swiper__label mobile">
                        <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" /></div><span>Листайте влево/вправо</span>
                    </div>
    
                    <div class="swiper singleSlider single-swiper-js">
                        <div class="swiper-wrapper singleSlider__wrapper">
                            <?php foreach( $videos as $video ) { 
                                $image_id = $video['teamSliders_video_img_id'];
                                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                            
                                if( $image_id ) {
                                    $img_url = wp_get_attachment_image_url($image_id, $size);
                                } else {
                                    $img_url = $no_img_url;
                                } 
                            ?>
                                <div class="swiper-slide singleSlider__slide">
                                    <div class="reviews__video bg" style="background-image: url('<?php echo $img_url; ?>')">
                                        <div class="reviews__content">
                                            <div class="reviews__name"><span><?php echo $video['teamSliders_video_name']; ?></span></div>
                                            <div class="reviews__time"><span><?php echo $video['teamSliders_video_time']; ?></span></div>
                                        </div>
                                        <?php if ($video['teamSliders_video_id']) { ?>
                                            <div class="play youtubeModal-js" id="<?php echo $video['teamSliders_video_id']; ?>"><i class="icon_play"></i></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                            <? } ?>
    
    
                        </div>
                        <div class="teamSliders__control">
                            <div class="singleSlider__dotted dotted_sm"></div>
                            <div class="singleSlider__arrows custom_arrows desktop">
                                <i class="icon_arrow_left"></i>
                                <i class="icon_arrow_right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</section>
<!-- end teamSliders-->