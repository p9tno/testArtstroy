<?php 
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
?>
<!-- begin team-->
<section class="team section" id="team">
    <div class="team__bg bg desktop"></div>

    <div class="container_center container_center_sm">

        <div class="swiper teamPreview teamPreview-swiper-js">

            <div class="swiper-wrapper teamPreview__wrapper">
              <?php 
              $rows = get_field('team_list', 'option');
              if( $rows ) { ?>
                  <?php foreach( $rows as $row ) { 
                    $image_id = $row['team_img_id'];
                    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                
                    if( $image_id ) {
                        $img_url = wp_get_attachment_image_url($image_id, $size);
                    } else {
                        $img_url = $no_img_url;
                    }
                  ?>                      
                    <div class="swiper-slide teamPreview__slide">
                      <div class="team__top">
                          <div class="team__left">

                            <?php if (get_field('team_title', 'option')) { ?>
                              <h2 class="section__title" data-aos="fade-up"><span><?php the_field('team_title', 'option'); ?></span></h2>
                            <?php } ?>
  
                            <?php if (get_field('team_subtitle', 'option')) { ?>
                              <div class="team__subtitle"><span><?php the_field('team_subtitle', 'option'); ?></span></div>
                            <?php } ?>

                            <?php 
                            $list = $row['team_persone_list'];
                            if( $list ) { ?>
                              <div class="team__list counter-wrap">
                                <?php foreach( $list as $item ) { ?>
                                    <div class="team__item counter-item">
                                        <div class="team__nav">
                                            <div class="team__icon check_mark"><i class="icon_mark"></i></div>
                                            <div class="team__number"><span class="counter-el"></span></div>
                                        </div>
                                        <div class="team__content">
                                          <span><?php echo $item['team_persone_item']; ?></span>
                                        </div>
                                    </div>
                                <? } ?>
                              </div>
                            <?php } ?>
    
                          </div>
    
                          <div class="team__right">
                              <div class="team__person bg" style="background-image: url('<?php echo $img_url; ?>')">
                                  <div class="person">
                                      <div class="person__name"><span><?php echo $row['team_person_name']; ?></span></div>
                                      <div class="person__description"><span><?php echo $row['team_person_description']; ?></span></div>
                                  </div>
                              </div>
                          </div>
      
                        </div>
                    </div>
                  <? } ?>
              <?php } ?>


            </div>
        </div>
    </div>

    <div class="team__bottom">
        <div class="swiper teamSlider team-swiper-js">

            <div class="swiper-wrapper teamSlider__wrapper">
              <?php 
              $rows = get_field('team_list', 'option');
              // get_pr($rows);
              if( $rows ) { ?>
                  <?php foreach( $rows as $row ) { 
                    $image_id_sm = $row['teamSlider_img_id'];
                    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                
                    if( $image_id_sm ) {
                      $img_url_sm = wp_get_attachment_image_url($image_id_sm, $size);
                    } else {
                      $img_url_sm = $no_img_url;
                    }  
                  ?>
                    <div class="swiper-slide teamSlider__slide">
                        <div class="teamSlider__item">
                            <div class="teamSlider__img img"><img src="<?php echo $img_url_sm; ?>" /></div>
                            <div class="teamSlider__content">
                                <div class="teamSlider__name"><span><?php echo $row['team_person_name']; ?></span></div>
                                <div class="teamSlider__description"><span><?php echo $row['team_person_description']; ?></span></div>
                            </div>
                        </div>
                    </div>

                  <? } ?>

              <?php } ?>


            </div>

            <div class="teamSlider__control">
                <div class="teamSlider__dotted dotted_sm"></div>
                <div class="teamSlider__arrows custom_arrows">
                  <i class="icon_arrow_left"></i>
                  <i class="icon_arrow_right"></i>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end team-->