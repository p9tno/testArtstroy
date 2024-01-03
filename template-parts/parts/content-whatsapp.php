<?php if (get_field('whatsapp', 'option')) { ?>
    <div class="messenger__item">
        <a class="messenger__link" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>"
            target="_blank"><i class="icon_whatsapp"></i>
        </a>
    </div>
<?php } ?>