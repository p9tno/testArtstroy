<?php if (get_field('lowerpanel_boolean', 'option')) { ?>
    <!-- begin lowerpanel -->
    <div class="lowerpanel" id="lowerpanel">
        <div class="lowerpanel__wrap">
            <div class="lowerpanel__toggle"><span></span></div>
            <div class="lowerpanel__container">

                <?php $items = get_field('lowerpanel_select', 'option'); ?>

                <?php if ( $items && in_array('pdf', $items) ) { ?>
                    <a class="lowerpanel__link show_js" href="#download2">
                        <div class="lowerpanel__btn"><i class="icon_pdf"></i></div>
                        <div class="lowerpanel__hint"><span>Скачать презентацию</span></div>
                    </a>
                <?php } ?>

                <?php if ( $items && in_array('phone', $items) ) { ?>
                    <a class="lowerpanel__link show_js" href="#application">
                        <div class="lowerpanel__btn"><i class="icon_phone"></i></div>
                        <div class="lowerpanel__hint"><span>Оставить заявку</span></div>
                    </a>
                <?php } ?>

                <?php if ( $items && in_array('percentage', $items) ) { ?>
                    <a class="lowerpanel__link show_js" href="#discounts">
                        <div class="lowerpanel__btn"><i class="icon_percentage"></i></div>
                        <div class="lowerpanel__hint"><span>Акции</span></div>
                    </a>
                <?php } ?>

                <?php if (get_field('whatsapp', 'option')) { ?>
                    <a class="lowerpanel__link" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
                        <div class="lowerpanel__btn"><i class="icon_whatsapp"></i></div>
                        <div class="lowerpanel__hint"><span>Написать в WhatsApp</span></div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end lowerpanel -->
<?php } ?>
