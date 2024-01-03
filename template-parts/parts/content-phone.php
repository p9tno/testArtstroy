<?php if (get_field('phone', 'option')) { ?>
    <div class="phone">
        <?php if (get_field('phone_time', 'option')) { ?>
            <div class="phone__label"><span><?php the_field('phone_time', 'option'); ?></span></div>
        <?php } ?>
        <div class="phone__link"><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></div>
    </div>
<?php } ?>
