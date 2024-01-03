<!-- begin honest-->
<section class="honest section bg lines" id="honest">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_sm">
        <div class="honest__content">
            <div class="honest__caption">
                <?php if (get_field('honest_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('honest_title'); ?></span></h2>
                <?php } ?>
                <?php if (get_field('honest_subtitle')) { ?>
                    <div class="honest__title"><span><?php the_field('honest_subtitle'); ?></span></div>
                <?php } ?>
                <?php if (get_field('honest_note')) { ?>
                    <div class="honest__note"><span><?php the_field('honest_note'); ?></span></div>
                <?php } ?>
            </div>

            <?php 
            $rows = get_field('honest_list');
            if( $rows ) { ?>
                <div class="honest__list">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="honest__item">
                            <div class="honest__icon"><i class="icon_plus_deg"></i></div><span><?php echo  $row['honest_item']; ?></span>
                        </div>
                    <? } ?>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- end honest-->