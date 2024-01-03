<!-- begin location-->
<section class="location section bg lines" id="location">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_sm">
        <div class="location__wrap">

            <div class="location__header">

                <?php if ( is_page_template(['template-homepage.php']) || is_page_template(['template-apartments.php']) ) { ?>
                    <div class="location__label"><span>Все слишком хорошо звучит? </span></div>
                    <h2 class="section__title" data-aos="fade-up"><span>Убедитесь <b>лично</b></span></h2>
                    <?php } else { ?> 
                        <h2 class="section__title" data-aos="fade-up"><span>География<br>работ</span></h2>
                <?php } ?>

            </div>
    
            <div class="location__body">
                <div class="location__map location__map_border bg">
                    <?php 
                    $rows = get_field('location_list', 'option');
                    if( $rows ) { ?>
                        <?php foreach( $rows as $row ) { ?>
                            <div class="location__item" style="top:<?php echo $row['location_y']; ?>%;left:<?php echo $row['location_x']; ?>%" data-aos="fade-down">
                                <div class="location__mark">
                                    <div class="location__logo img"><img src="<?php echo get_template_directory_uri() . '/assets/img/logoL.svg' ?>" /></div>
                                    <div class="location__sity"><span><?php echo $row['location_sity']; ?></span></div>
                                </div>
                            </div>
                        <? } ?>
                    <?php } ?>
                </div>
            </div>
    
            <div class="location__footer">
    
                <div class="location__left">
                    <?php if ( is_page_template(['template-homepage.php']) || is_page_template(['template-apartments.php']) ) { ?>
                        <div class="location__title"><span>С радостью<br> покажем наш<br> подход в деле.</span></div>
                        <div class="location__subtitle"><span>Мы следим за чистотой и<br> порядком на объектах даже<br> на черновом этапе работ.</span></div>
                        <?php } else { ?> 
                            <div class="location__title"><span>С частными и гос.<br>компаниями работаем<br>по всей России</span></div>
                    <?php } ?>
                </div>
    
                <div class="location__rihgt">
                    <?php if ( is_page_template(['template-homepage.php']) || is_page_template(['template-apartments.php']) ) { ?>
                        <div class="location__description"><span>Запишитесь и приезжайте на объект, где сейчас работают наши бригады.</span></div>
                    <?php } ?>

                    <?php if ( !is_page_template(['template-about.php'])) { ?>

                        <?php get_template_part( 'template-parts/forms/form', 'location' ); ?>
           
                    <?php } ?>
    
    
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end location-->