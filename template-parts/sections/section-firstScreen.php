<!-- begin firstscreen-->
<section class="firstscreen section bg lines" id="firstscreen">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center">
        <div class="firstscreen__content">
            <?php if (get_field('firstScreen_title_m')) { ?>
                <h1 class="section__title mobile">
                    <span><?php the_field('firstScreen_title_m'); ?></span>
                </h1>
            <?php } ?>

            <?php if (get_field('firstScreen_title')) { ?>
                <h1 class="section__title desktop">
                    <span>Тестовый сайт<?php // the_field('firstScreen_title'); ?></span>
                </h1>
            <?php } ?>

            <?php if (get_field('firstScreen_subtitle')) { ?>
                <div class="section__subtitle">
                    <span><?php the_field('firstScreen_subtitle'); ?></span>
                </div>
            <?php } ?>
        


            <div class="firstscreen__bottom">
                <?php if (get_field('firstScreen_desc')) { ?>
                    <div class="firstscreen__desc">
                        <span><?php the_field('firstScreen_desc'); ?></span>
                    </div>
                <?php } ?>

                <div class="firstscreen__button">

                    <a class="btn show_js" href="#application">
                        <span>Рассчитать стоимость и</span>
                        <span>получить предложение</span>
                    </a>

                    <?php if (get_field('whatsapp', 'option')) { ?>
                        <a class="btn btn_dark btn_whatsapp"
                            href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?> " target="_blank"><span>Напишите нам в WhatsApp</span><small>время ответа 10 минут</small>
                        </a>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- end firstscreen-->

