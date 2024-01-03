<!-- begin docount-->
<section class="docount section" id="docount">
    <div class="container_right">
        <div class="docount__wrap bg">
            <div class="docount__content">
                <?php if (get_field('docount_sec_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('docount_sec_title'); ?></span></h2>
                <?php } ?>
                <?php if (get_field('docount_sec_subtitle')) { ?>
                    <div class="section__subtitle"><span><?php the_field('docount_sec_subtitle'); ?></span></div>
                <?php } ?>


                <?php 
                $rows = get_field('docount_list');
                if( $rows ) { ?>
                    <div class="section__list">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="section__item">
                                <div class="section__mark check_mark">
                                    <i class="icon_mark"></i>
                                </div>
                                <span> <?php echo $row['docount_item']; ?></span>
                            </div>
                        <? } ?>
                    </div>
                <?php } ?>

                <?php if (get_field('docount_button')) { ?>
                    <div class="docount__button">
                        <a class="btn" href="<?php the_field('docount_button'); ?>" target="_blank">
                            <span>Посмотрите пример реальной сметы и</span>
                            <span>убедитесь в детальности проработки</span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php if (get_field('docount_boolean')) { ?>
        <div class="container_right">
            <?php get_template_part( 'template-parts/forms/form', 'docount' ); ?>
        </div>
    <?php } ?>


</section>
<!-- end docount-->