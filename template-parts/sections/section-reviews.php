<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
?>

<!-- begin reviews-->
<section class="reviews section" id="reviews">
    <div class="container_center container_center_sm">
        <div class="reviews__wrap">
            <div class="reviews__top">

                <div class="reviews__caption">
                    <?php if (get_field('reviews_label', 'option')) { ?>
                        <div class="reviews__label"><span><?php the_field('reviews_label', 'option'); ?></span></div>
                    <?php } ?>
                    <?php if (get_field('reviews_title', 'option')) { ?>
                        <h2 class="section__title" data-aos="fade-up"><span><?php the_field('reviews_title', 'option'); ?></span></h2>
                    <?php } ?>
                </div>


                <?php 
                $rows = get_field('reviews_list', 'option');
                if( $rows ) { ?>
                   <div class="reviews__list">
                       <?php foreach( $rows as $row ) { ?>
                           <div class="reviews__item">
                               <div class="reviews__mark check_mark"><i class="icon_mark"></i></div><span><?php echo $row['reviews_item']; ?></span>
                           </div>
                       <? } ?>
                   </div>
                <?php } ?>
            </div>

            <div class="reviews__bottom">
                <?php 
                $docs = get_field('reviews_doc', 'option');
                if( $docs ) { ?>
                    <div class="reviews__col">
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper itemForDataFancybox_js">
                                <?php foreach( $docs as $doc ) { 
                                    $image_id = $doc['reviews_doc_img_id'];
                                    $size = 'certificate'; // (thumbnail, medium, full, vertical, horizon)
                                    $size_sm = 'certificate_sm'; // (thumbnail, medium, full, vertical, horizon)
                                
                                    if( $image_id ) {
                                        $img_url = wp_get_attachment_image_url($image_id, $size);
                                        $img_url_sm = wp_get_attachment_image_url($image_id, $size_sm);
                                    } else {
                                        $img_url = $no_img_url;
                                        $img_url_sm = $no_img_url;
                                    }      
                                ?>
                                    <div class="swiper-slide singleSlider__slide">
                                        <div class="reviews__img img">
                                            <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image">
                                                <img src="<?php echo $img_url_sm; ?>" loading="lazy" />
                                            </a>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>

                            <div class="singleSlider__control">
                                <div class="singleSlider__dotted dotted_sm"></div>
                                <div class="singleSlider__arrows custom_arrows"><i class="icon_arrow_left"></i><i
                                        class="icon_arrow_right"></i></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
              
                <?php 
                $videos = get_field('reviews_video', 'option');
                if( $videos ) { ?>
                    <div class="reviews__col reviews__col_video">
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper">
                                <?php foreach( $videos as $video ) { 
                                    $image_id = $video['reviews_video_img_id'];
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
                                                <div class="reviews__name"><span><?php echo $video['reviews_video_name']; ?></span></div>
                                                <div class="reviews__time"><span><?php echo $video['reviews_video_time']; ?></span></div>
                                            </div>
                                            <div class="play youtubeModal-js" id="<?php echo $video['reviews_video_id']; ?>"><i class="icon_play"></i></div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>

                            <div class="singleSlider__control">
                                <div class="singleSlider__dotted dotted_sm"></div>
                                <div class="singleSlider__arrows custom_arrows"><i class="icon_arrow_left"></i><i
                                        class="icon_arrow_right"></i></div>
                            </div>

                        </div>
                    </div>
                <?php } ?>

                <?php 
                $screens = get_field('reviews_screen', 'option');
                if( $screens ) { ?>
                    <div class="reviews__col">
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper itemForDataFancybox_js">
                                <?php foreach( $screens as $screen ) { 
                                    $image_id = $screen['reviews_screen_img_id'];
                                    $size_sm = 'certificate_sm'; // (thumbnail, medium, full, vertical, horizon)
                                
                                    if( $image_id ) {
                                        $img_url_sm = wp_get_attachment_image_url($image_id, $size_sm);
                                    } else {
                                        $img_url_sm = $no_img_url;
                                    }      
                                ?>
                                    <div class="swiper-slide singleSlider__slide">
                                        <div class="reviews__img img">
                                            <a href="<?php echo $img_url_sm; ?>" data-fancybox="data-fancybox" data-type="image">
                                                <img src="<?php echo $img_url_sm; ?>" loading="lazy" />
                                            </a>
                                        </div>
                                    </div>
                                <? } ?>


                            </div>

                            <div class="singleSlider__control">
                                <div class="singleSlider__dotted dotted_sm"></div>
                                <div class="singleSlider__arrows custom_arrows"><i class="icon_arrow_left"></i><i
                                        class="icon_arrow_right"></i></div>
                            </div>

                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- end reviews-->