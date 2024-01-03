<!-- begin provider-->
<section class="provider section" id="provider">
    <div class="container_center container_center_right">
        <div class="provider__content">
            <div class="section__caption">
                <?php if (get_field('provider_title')) { ?>
                    <h1 class="section__title"><span><?php the_field('provider_title'); ?></span></h1>
                <?php } ?>
                <?php if (get_field('provider_subtitle')) { ?>
                    <div class="section__subtitle"><span><?php the_field('provider_subtitle'); ?></span></div>
                <?php } ?>
            </div>

            <?php 
            $rows = get_field('provider_list');
            if( $rows ) { ?>
                <div class="provider__list counter-wrap">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="provider__item counter-item">
                            <div class="provider__nav">
                                <div class="provider__icon check_mark"><i class="icon_mark"></i></div>
                                <div class="provider__number"><span class="counter-el"></span></div>
                            </div>
                            <div class="provider__label"><span><?php echo $row['provider_item']; ?></span></div>
                        </div>
                    <? } ?>
                </div>
            <?php } ?>

            <div class="provider__title"><span>Отправьте ваше коммерческое предложение или актуальный прай-лист</span></div>
            <div class="provider__subtitle"><span>Мы свяжемся с вами, чтобы обсудить условия сотрудничества</span></div>

        </div>
    </div>

    <?php get_template_part( 'template-parts/forms/form', 'provider' ); ?>

</section>
<!-- end provider-->