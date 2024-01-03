<?php if (get_field('viber', 'option')) { ?>
    <div class="messenger__item">
        <a class="messenger__link"
            href="viber://chat?number=%2B<?php the_field('viber', 'option'); ?>" target="_blank"><i
                class="icon_viber"></i>
        </a>
    </div>
<?php } ?>