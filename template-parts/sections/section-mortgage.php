<?php 
$rows = get_field('mortgage_list');
if( $rows ) { ?>
    <!-- begin mortgage-->
    <section class="mortgage section">
        <div class="container_center container_center_right">
            <div class="mortgage__content">
                <?php if (get_field('mortgage_sec_title')) { ?>
                    <h2 class="section__title"><span><?php the_field('mortgage_sec_title'); ?></span></h2>
                <?php } ?>

                <div class="mortgage__list">
                    <?php foreach( $rows as $row ) { 
                            $image_id = $row['mortgage_img_id'];
                            $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                        
                            if( $image_id ) {
                                $img_url = wp_get_attachment_image_url($image_id, $size);
                            }
                        
                        ?>
                        <div class="mortgage__item">
                            <div class="mortgage__img"><img src="<?php echo $img_url; ?>" alt="img" /></div>
                        </div>
                    <? } ?>

                </div>

                <div class="mortgage__button">
                    <a class="btn show_js" href="#mortgage">
                        <span>Узнать подробнее о</span>
                        <span>строительстве в ипотеку</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end mortgage-->
<?php } ?>