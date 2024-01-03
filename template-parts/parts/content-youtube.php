<?php if (get_field('youtube', 'option')) { ?>
    <div class="messenger__item">
        <a class="messenger__link" href="<?php the_field('youtube', 'option'); ?>" target="_blank"><i class="icon_youtube"></i></a>
    </div>
<?php } ?>