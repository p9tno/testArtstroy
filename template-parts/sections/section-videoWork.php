<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
$rows = get_field('videoWork_list', 'option');
if( $rows ) { ?>
 <!-- begin videoWork-->
 <section class="videoWork section" id="videoWork">
     <div class="container_center container_center_right">
         <div class="videoWork__content">
             <div class="videoWork__left">
                 <h2 class="section__title" data-aos="fade-up"><span>Рассказываем о работе <b>в видео</b></span></h2>
                 <div class="videoWork__control">
                     <div class="videoWork__dotted"></div>
                     <div class="videoWork__arrows custom_arrows desktop"><i class="icon_arrow_left"></i><i
                             class="icon_arrow_right"></i></div>
                 </div>
             </div>
             <div class="videoWork__right">
                 <div class="swiper__label mobile">
                     <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="hand"/></div><span>Листайте влево/вправо</span>
                 </div>
                 <div class="swiper videoWorkSlider videoWork-swiper-js">
                     <div class="swiper-wrapper videoWorkSlider__wrapper">
                         <?php foreach( $rows as $row ) { 
                                $image_id = $row['videoWork_img_id'];
                                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                            
                                if( $image_id ) {
                                    $img_url = wp_get_attachment_image_url($image_id, $size);
                                } else {
                                    $img_url = $no_img_url;
                                }  
                            ?>
                             <div class="swiper-slide videoWorkSlider__slide">
                                 <div class="reviews__video bg" style="background-image: url('<?php echo $img_url; ?>')">
                                     <div class="reviews__content">
                                         <div class="reviews__name"><span><?php echo $row['videoWork_name']; ?></span></div>
                                         <div class="reviews__time"><span><?php echo $row['videoWork_time']; ?></span></div>
                                     </div>
                                     <?php if ($row['videoWork_id']) { ?>
                                        <div class="play youtubeModal-js" id="<?php echo $row['videoWork_id']; ?>"><i class="icon_play"></i></div>
                                     <?php } ?>
                                 </div>
                             </div>
                         <? } ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end videoWork-->
<?php } ?>