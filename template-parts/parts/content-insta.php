<?php if (get_field('instagram', 'option')) { ?>
    <div class="messenger__item">
        <a class="messenger__link" href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="icon_insta"></i></a>
    </div>
<?php } ?>