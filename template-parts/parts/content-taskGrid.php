<?php 
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
$rows = get_field('task_list');
if( $rows ) { ?>
   
<?php } ?>
<div class="task__grid counter-wrap">

    <?php foreach( $rows as $row ) { 
            $image_id = $row['task_img_id'];
            $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
        
            if( $image_id ) {
                $img_url = wp_get_attachment_image_url($image_id, $size);
            } else {
                $img_url = $no_img_url;
            }

            $link = $row['task_link'];
            if ($link) {
                $url = $link['url'];
                $target = $link['target'];
            }
        ?>
        <div class="task__item counter-item">
            <div class="task__img img"><img src="<?php echo $img_url; ?>" /></div>
            <div class="task__content">
                <div class="task__top">
                    <?php if ($row['task_label']) { ?>
                        <div class="task__label"><span><?php echo $row['task_label']; ?></span></div>
                    <?php } ?>
                    <div class="task__number"><span class="counter-el"></span></div>
                </div>
                <div class="task__bottom">
                    <div class="task__title">
                        <?php if ($link) { ?>
                                <a href="<?php echo $url; ?>"  <?php if ($target) { echo 'target="_blank"'; } ?>><?php echo $row['task_title']; ?></a>
                            <?php } else { ?>
                                <span><?php echo $row['task_title']; ?></span>
                        <?php } ?>
                    </div>
                    <div class="task__wrap">
                        <div class="task__inner">
                            <?php if ($row['task_subtitle']) { ?>
                                <div class="task__subtitle">
                                    <span><?php echo $row['task_subtitle']; ?></span>
                                </div>
                            <?php } ?>

                            <div class="task__btn">
                                <a class="task__go show_js" href="#application"><i class="icon_arrow_deg"></i></a>
                                <a class="btn btn_sm show_js" href="#application"><span>Заявка на консультацию</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? } ?>


    <div class="task__item task__item_info counter-item">
        <div class="task__content">
            <div class="task__top">
                <div class="task__head"><span>Не знаете, что именно вам нужно?</span></div>
                <div class="task__number"><span class="counter-el"></span></div>
            </div>
            <div class="task__bottom">
                <div class="task__title"><span>Давайте обсудим<br> задачу и расскажем,<br> как мы можем вам<br>
                        помочь</span></div>
                <div class="task__messenger">
                    <div class="messenger">
                        <div class="messenger__label"><span>Спрашивайте, отвечаем онлайн</span></div>
                        <div class="messenger__list">
                            <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                            <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                            <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                        </div>
                    </div>
                </div>

                <?php if (get_field('mail', 'option')) { ?>
                    <div class="task__mail task__link"><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></div>
                <?php } ?>

                <?php if (get_field('phone', 'option')) { ?>
                    <div class="task__phone task__link">
                        <small>или позвоните</small>
                        <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>