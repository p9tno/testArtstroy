<!-- begin advantage2 -->
<section class="advantage section orange" id="advantage2">
    <div class="container_center container_center_sm">
        <div class="advantage__wrap">
            <div class="advantage__caption">
                <div class="advantage__bg bg"></div>
                <?php if (get_field('advantage2_title')) { ?>
                    <h2 class="section__title"><span><?php the_field('advantage2_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('advantage2_subtitle')) { ?>
                    <div class="section__subtitle">
                        <?php the_field('advantage2_subtitle'); ?>
                    </div>
                <?php } ?>
            </div>

            <?php 
            $rows = get_field('advantage_list2');
            if( $rows ) { ?>
              <div class="advantage__list counter-wrap">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="advantage__item counter-item" data-aos="fade-left">
                            <div class="advantage__inner">
                                <div class="advantage__nav">
                                    <div class="advantage__icon check_mark"><i class="icon_mark"></i></div>
                                    <div class="advantage__number"><span class="counter-el"></span></div>
                                </div>
                                <div class="advantage__content">
                                    <div class="advantage__title"><span><?php echo  $row['advantage_text_title']; ?></span></div>
        
                                    <div class="advantage__description">
                                        <span><?php echo  $row['advantage_text']; ?></span>
                                        <?php if ($row['advantage_link']) { ?>
                                            <?php 
                                                $link = $row['advantage_link'];
                                                $title = $link['title'];
                                                $url = $link['url'];
                                                $target = $link['target'];
                                            ?>
                                            <a class="desktop advantage__link" href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?> ><?php echo $title; ?></a>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
              </div>
              
            <?php } ?>

            <div class="advantage__load mobile">
                <a class="load_more show_advantage_js" href="#" data-load="Загрузка">Посмотреть все</a>
            </div>
        </div>
    </div>
</section>
<!-- end advantage2-->