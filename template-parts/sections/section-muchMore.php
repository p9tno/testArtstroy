<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/muchMore_bg_3.webp';
?>
<!-- begin muchMore-->
<section class="muchMore section" id="muchMore">
    <div class="container_center container_center_right">
        <?php if (get_field('muchMore_sec_title')) { ?>
            <h2 class="section__title" data-aos="fade-up"><span><?php the_field('muchMore_sec_title'); ?></span></h2>
        <?php } ?>
    </div>

    <div class="container_right">
        <div class="muchMore__tabs">

            <div class="tabs__wrapper">

                <div class="tabs">

                    <?php $tab_1 = get_field('muchMore_tab_1');
                    if( $tab_1 ): ?>
                        <?php if ($tab_1['muchMore_tab_name']) { ?>
                            <div class="tab"><span><?php echo $tab_1['muchMore_tab_name']; ?></span></div>
                        <?php } ?>
                    <?php endif; ?>

                    <?php $tab_2 = get_field('muchMore_tab_2');
                    if( $tab_2 ): ?>
                        <?php if ($tab_2['muchMore_tab_name']) { ?>
                            <div class="tab"><span><?php echo $tab_2['muchMore_tab_name']; ?></span></div>
                        <?php } ?>
                    <?php endif; ?>

                    <?php $tab_3 = get_field('muchMore_tab_3');
                    if( $tab_3 ): ?>
                        <?php if ($tab_3['muchMore_tab_name']) { ?>
                            <div class="tab"><span><?php echo $tab_3['muchMore_tab_name']; ?></span></div>
                        <?php } ?>
                    <?php endif; ?>

                    <?php $tab_4 = get_field('muchMore_tab_4');
                    if( $tab_4 ): ?>
                        <?php if ($tab_4['muchMore_tab_name']) { ?>
                            <div class="tab"><span><?php echo $tab_4['muchMore_tab_name']; ?></span></div>
                        <?php } ?>
                    <?php endif; ?>
                </div>

                <div class="tabs__content">
                    <?php $tab_1 = get_field('muchMore_tab_1');
                        if ( $tab_1 ) : 
                            if ($tab_1['muchMore_tab_name']) { include 'tabs/tab_1.php'; } 
                        endif; 
                    ?>

                    <?php $tab_2 = get_field('muchMore_tab_2');
                        if( $tab_2 ):
                            if ($tab_2['muchMore_tab_name']) { include 'tabs/tab_2.php'; }
                        endif; 
                    ?>
                    
                    <?php $tab_3 = get_field('muchMore_tab_3');
                        if( $tab_3 ):
                            if ($tab_3['muchMore_tab_name']) { include 'tabs/tab_3.php'; } 
                        endif; 
                    ?>

                    <?php $tab_4 = get_field('muchMore_tab_4');
                        if( $tab_4 ):
                            if ($tab_4['muchMore_tab_name']) { include 'tabs/tab_4.php'; }
                        endif; 
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end muchMore-->