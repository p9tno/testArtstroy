<?php if (get_field('consultationSoc_boolean')) { ?>
    <!-- begin consultationSoc -->
    <section class="consultation consultation_soc section" id="consultationSoc">
        <div class="container_center">
            <div class="consultation__content bg">
                <div class="consultation__left">
                    <?php if (get_field('consultationSoc_title')) { ?>
                        <h2 class="section__title" data-aos="fade-up"><span><?php the_field('consultationSoc_title'); ?></span></h2>
                    <?php } ?>
    
                    <?php 
                    $rows = get_field('consultationSoc_list');
                    if( $rows ) { ?>
                        <div class="consultation__list">
                            <?php foreach( $rows as $row ) { ?>
                                <div class="consultation__item">
                                    <div class="consultation__mark check_mark"><i class="icon_mark"></i></div><span><?php echo $row['consultation_item']; ?></span>
                                </div>
                            <? } ?>
                        </div>
                    <?php } ?>
    
    
                </div>
                <div class="consultation__right">
                    
                    <?php get_template_part( 'template-parts/forms/form', 'consultation' ); ?>
    
                    <div class="consultation__button">
                        <?php if (get_field('phone', 'option')) { ?>
                            <div class="consultation__phone">
                                <!-- <span>Ждем звонка: <?php // the_field('phone', 'option'); ?></span> -->
                                <span>Ждем звонка: <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></span>
                            </div>
                        <?php } ?>

                        <div class="messenger messenger_large">
                            <div class="messenger__list">
                                <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                            </div>
                        </div>
    
                    </div>
                </div>
    
                <?php if (get_field('consultationSoc_manager_img_id')) { 
                    $image_id = get_field('consultationSoc_manager_img_id');
                    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                    $img_url = wp_get_attachment_image_url($image_id, $size);
                ?>
                    <div class="consultation__manager bg" style="background-image: url('<?php echo $img_url; ?>')"></div>
                <?php } ?>
    
                <div class="manager">
                    <?php if (get_field('consultationSoc_manager_name')) { ?>
                        <div class="manager__name"><span><?php the_field('consultationSoc_manager_name'); ?></span></div>
                    <?php } ?>
                    <?php if (get_field('consultationSoc_manager_post')) { ?>
                        <div class="manager__post"><span><?php the_field('consultationSoc_manager_post'); ?></span></div>
                    <?php } ?>
                </div>
    
            </div>
        </div>
    </section>
    <!-- end consultationSoc-->
<?php } ?>