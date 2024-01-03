<?php 
$rows = get_field('ourhouses_list');
if( $rows ) { ?>
  <!-- begin ourhouses-->
  <section class="ourhouses section" id="ourhouses">
      <div class="container_right">
          <div class="ourhouses__wrap">
              <div class="ourhouses__top">
                  <?php if (get_field('ourhouses_sec_title')) { ?>
                      <h2 class="section__title" data-aos="fade-up"><span><?php the_field('ourhouses_sec_title'); ?></b></span></h2>
                  <?php } ?>
  
  
                  <div class="ourhouses__control">
                      <div class="ourhouses__dotted dotted_sm"></div>
                      <div class="ourhouses__arrows custom_arrows"><i class="icon_arrow_left"></i><i
                              class="icon_arrow_right"></i></div>
                  </div>
  
              </div>
              <div class="ourhouses__bottom">
                  <div class="swiper__label mobile">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="img" /></div><span>Листайте влево/вправо</span>
                  </div>
  
                  <div class="swiper ourhouses-swiper-js">
                      <div class="swiper-wrapper">
                          <?php foreach( $rows as $row ) {
                                $image_id = $row['ourhouses_img_id'];
                                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                            
                                if( $image_id ) {
                                    $img_url = wp_get_attachment_image_url($image_id, $size);
                                }
                          ?>
                              <div class="swiper-slide">
                                  <div class="ourhouses__item bg" style="background-image: url('<?php echo $img_url; ?>')">
                                      <div class="ourhouses__inner">
                                          <div class="ourhouses__title"><span><?php echo $row['ourhouses_title']; ?></span></div>
                                          <div class="ourhouses__content">
                                              <div class="ourhouses__text"><?php echo $row['ourhouses_text']; ?></div>
                                          </div>
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
  <!-- end ourhouses-->
<?php } ?>