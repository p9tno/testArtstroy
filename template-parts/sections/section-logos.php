<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
$rows = get_field('logos_list', 'option');
if( $rows ) { ?>
  <!-- begin logos-->
  <section class="logos section" id="logos">
      <div class="container_center container_center_sm">
  
          <?php if (get_field('logos_title', 'option')) { ?>
              <div class="section__subtitle" data-aos="fade-up"><span><?php the_field('logos_title', 'option'); ?></span></div>
          <?php } ?>
          <div class="logos__content">
  
              <div class="swiper logos__slider logos-swiper-js">
  
                  <div class="swiper-wrapper">
                        <?php foreach( $rows as $row ) { 
                           $image_id = $row['logos_img_id'];
                           $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                       
                           if( $image_id ) {
                               $img_url = wp_get_attachment_image_url($image_id, $size);
                           } else {
                               $img_url = $no_img_url;
                           }     
                           ?>
                           <div class="swiper-slide">
       
                                 <div class="logos__item">
                                     <?php if ($row['logos_pop']) { ?> 
                                         <div class="logos__pop">
                                             <div class="pop">
                                                 <div class="pop__content">
                                                     <span><?php echo $row['logos_pop']; ?></span>
                                                 </div>
                                             </div>
                                         </div>
                                     <?php } ?>
 
                                     <div class="logos__img img"><img src="<?php echo $img_url; ?>" alt="logos" /></div>
                                 </div>
                           </div>

                      <? } ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end logos-->
  
<?php } ?>