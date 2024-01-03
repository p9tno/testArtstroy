<?php if (get_field('telegram', 'option')) { ?>
    <div class="messenger__item">
        <a class="messenger__link"
            href="https://wapp.click/<?php the_field('telegram', 'option'); ?>" target="_blank"><i
                class="icon_telegram"></i>
        </a>
    </div>
<?php } ?>