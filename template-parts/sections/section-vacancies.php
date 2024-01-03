<!-- begin vacancies-->
<section class="vacancies section" id="vacancies">
    <div class="container_center">

        <?php if (get_field('vacancies_subtitle')) { ?>
            <div class="section__subtitle"><span><?php the_field('vacancies_subtitle'); ?></span></div>
        <?php } ?>

        <div class="vacancies__tabs">
            <div class="tabs__wrapper">

                <div class="tabs">
                    <?php 
                    $tabs = get_field('vacancies_list');

                    if( $tabs ) { ?>
                        <div class="tab"><span>Все</span></div>
                        <?php foreach( $tabs as $tab ) { ?>
                            <div class="tab"><span><?php echo $tab['vacancies_item_tab']; ?></span></div>
                        <? } ?>
                    <?php } ?>
                </div>
                <?php //get_pr($tabs); ?>

                <div class="tabs__content">
                    <!-- START ALL TABS -->
                    <div class="tab__item">
                        <div class="vacancies__content">
                            <div class="vacancies__list itemVanavcies_js">
                                <?php if( $tabs ) { ?>
                                    <?php foreach( $tabs as $content ) { ?>

                                        <?php 
                                        $vacancies = $content['vacancies_list_single'];
                                        if( $vacancies ) { ?>
                                            <?php foreach( $vacancies as $vacancie ) { ?>

                                                <?php include 'vacancieItem.php'; ?>
                                               
                                            <? } ?>
                                        <?php } ?>
        
                                    <?php } ?>
                                <? } ?>

                                <div class="vacancies__more">
                                    <a class="load_more" href="#" data-load="Загрузкка" data-more="Смотреть еще вакансии" data-v-toggle="">Смотреть еще вакансии</a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- END ALL TABS -->

                    <?php if( $tabs ) { ?>
                        <?php foreach( $tabs as $content ) { ?>

                            <div class="tab__item">
                                <div class="vacancies__content">
                                    <div class="vacancies__list itemVanavcies_js">

                                        <?php 
                                        $vacancies = $content['vacancies_list_single'];
                                        if( $vacancies ) { ?>
                                            <?php foreach( $vacancies as $vacancie ) { ?>

                                                <?php include 'vacancieItem.php'; ?>
                                               
                                            <? } ?>
                                        <?php } ?>
        
                                        <div class="vacancies__more"><a class="load_more" href="#" data-load="Загрузкка"
                                                data-more="Смотреть еще вакансии" data-v-toggle="">Смотреть еще вакансии</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                        <? } ?>
                    <?php } ?>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end vacancies-->