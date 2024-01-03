<!-- begin partOfTeam-->
<section class="partOfTeam section" id="partOfTeam">
    <div class="partOfTeam__bg bg">
        <div class="container_center container_center_right">
            <div class="partOfTeam__content">
                <div class="section__caption">
                    <?php if (get_field('partOfTeam_title')) { ?>
                        <h1 class="section__title"><span><?php the_field('partOfTeam_title'); ?></span></h1>
                    <?php } ?>

                    <?php if (get_field('partOfTeam_subtitle')) { ?>
                        <div class="section__subtitle"><span><?php the_field('partOfTeam_subtitle'); ?></span></div>
                    <?php } ?>
                </div>

                <?php 
                $rows = get_field('partOfTeam_list');
                if( $rows ) { ?>
                    <div class="team__list counter-wrap">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="team__item counter-item">
                                <div class="team__nav">
                                    <div class="team__icon check_mark"><i class="icon_mark"></i></div>
                                    <div class="team__number"><span class="counter-el"></span></div>
                                </div>
                                <div class="team__content"><span><?php echo $row['partOfTeam_item']; ?></span></div>
                            </div>
                        <? } ?>
                    </div>
                <?php } ?>


                <?php if (get_field('partOfTeam_label')) { ?>
                    <div class="partOfTeam__label"><span><?php the_field('partOfTeam_label'); ?></span></div>
                <?php } ?>

                <?php 
                $figures = get_field('partOfTeam_figures');
                if( $figures ) { ?>
                    <div class="partOfTeam__figures">
                        <div class="figures">
                            <div class="figures__list">
                                <?php foreach( $figures as $figure ) { ?>
                                    <div class="figures__item">
                                        <div class="figures__top">

                                            <?php if ($figure['figures_text_before']) { ?>
                                                <span><small><?php echo $figure['figures_text_before']; ?></small></span>
                                            <?php } ?>

                                            <?php 
            
                                                $class_number = 'count_numbers_js';
                                                if ($figure['figures_number'] > 44500) {
                                                    $class_number = 'count_numbers_big_js';
                                                } 
                                            ?>
                                            <span class="<?php echo $class_number; ?>"><?php echo $figure['figures_number']; ?></span><?php echo $figure['figures_text_after']; ?>
                                            
                                        </div>
                                        <div class="figures__bottom"><span><?php echo $figure['figures_text']; ?></span></div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</section>
<!-- end partOfTeam-->