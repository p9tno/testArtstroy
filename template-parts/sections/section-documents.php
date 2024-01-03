<!-- begin documents certificate-->
<section class="certificate section" id="documents">
    <div class="container_center container_center_sm">
        <div class="certificate__content">
            <div class="certificate__left">
                <div class="certificate__caption">
                    <?php if (get_field('documents_title')) { ?>
                        <h2 class="section__title" data-aos="fade-up"><span><?php the_field('documents_title'); ?></span></h2>
                    <?php } ?>
                    <?php if (get_field('documents_description')) { ?>
                        <div class="certificate__description"><?php the_field('documents_description'); ?></div>
                    <?php } ?>
                </div>
                <div class="certificate__control">
                    <div class="certificate__dotted"></div>
                    <div class="certificate__arrows custom_arrows desktop"><i class="icon_arrow_left"></i><i
                            class="icon_arrow_right"></i></div>
                </div>
            </div>

            <?php
            $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
            $rows = get_field('documents_list');
            if( $rows ) { ?>
                <div class="certificate__right">
                    <div class="swiper__label mobile">
                        <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="hand"/></div><span>Листайте влево/вправо</span>
                    </div>

                    <div class="swiper certificate__slider certificate-swiper-js">
                        <div class="swiper-wrapper">
                            <?php foreach( $rows as $row ) { 
                                $image_id = $row['documents_img_id'];
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
                                <div class="swiper-slide certificate__item">
                                    <div class="certificate__doc bg" style="background-image: url('<?php echo $img_url_sm; ?>')">
                                        <a href="<?php echo $img_url; ?>" data-fancybox="data-fancybox" data-type="image"></a>
                                    </div>
                                </div>
                            <? } ?>


                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end documents certificate-->