<div class="figures">
    <div class="figures__list">

        <?php $group1 = get_field('figures_item_1', 'option');
        if( $group1 ): ?>
           <div class="figures__item">
               <div class="figures__top">
                   <span class="count_numbers_js"><?php echo $group1['figures_number']; ?></span>
               </div>
               <div class="figures__bottom">
                   <span><?php echo $group1['figures_text']; ?></span>
               </div>
           </div>
        <?php endif; ?>

        <?php $group2 = get_field('figures_item_2', 'option');
        if( $group2 ): ?>
           <div class="figures__item">
               <div class="figures__top">
                   <span><small><?php echo $group2['figures_text_before']; ?></small></span>
                   <span class="count_numbers_js"><?php echo $group2['figures_number']; ?></span>
               </div>
               <div class="figures__bottom">
                   <span><?php echo $group2['figures_text']; ?></span>
               </div>
           </div>
        <?php endif; ?>

        <?php $group3 = get_field('figures_item_3', 'option');
        if( $group3 ): ?>
           <div class="figures__item">
               <div class="figures__top">
                   <span class="count_numbers_big_js"><?php echo $group3['figures_number']; ?></span>
                   <span><small>м</small></span>
                   <span><sup>2</sup></span>
               </div>
               <div class="figures__bottom">
                   <span><?php echo $group3['figures_text']; ?></span>
               </div>
           </div>
        <?php endif; ?>



        <?php if (get_field('figures_item_4', 'option')) { ?>
            <div class="figures__item">
                <span></span>
                <div class="figures__link snakeline">
                    <a href="<?php the_field('figures_item_4', 'option'); ?>" target="_blank">Реквизиты</a>
                </div>
            </div>
        <?php } ?>

    </div>
</div>