    </main>


    <?php
    $footer_leadmagnet_class = '';
    if (is_page_template(['template-leadmagnet.php'])) {
        $footer_leadmagnet_class = 'footer_leadmagnet';
    }
    ?>


    <footer class="footer <?php echo $footer_leadmagnet_class; ?>">
        <div class="container_center container_center_sm">

            <?php if (!is_page_template(['template-leadmagnet.php'])) { ?>
                <div class="footer__row">
                    <div class="footer__col">
    
                        <div class="footer__logo">
                            <?php
                                $logo_id = get_field('footer_img', 'option');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if( $logo_id ) {
                                    $logo_url = wp_get_attachment_image_url($logo_id, $size); ?>
                                    <a class="logo" href="<?php echo esc_url(home_url("/")); ?>"><img src="<?php echo $logo_url ?>" /></a>
                            <?php } ?>
    
                            <?php if (get_field('footer_info', 'option')) { ?>
                                <div class="logo__info"><span><?php the_field('footer_info', 'option'); ?></span></div>
                            <?php } ?>
                        </div>
    
                        <div class="footer__messenger">
                            <div class="messenger messenger_large">
                                <div class="messenger__list">
                                    <?php get_template_part( 'template-parts/parts/content', 'youtube' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'wk' ); ?>
                                    <?php get_template_part( 'template-parts/parts/content', 'insta' ); ?>
                                </div>
                            </div>
                        </div>
                        <?php if (get_field('footer_calc_boolean', 'option')) { ?>
                            <div class="footer__link"><a class="show_js" href="#calculate">Калькулятор стоимости</a></div>
                        <?php } ?>
    
                    </div>
    
                    <div class="footer__col mobile">
                        <div class="footer__col_wrap">
                            <div class="footer__inner">
                                <div class="footer__label"> <span>Навигация</span></div>
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-footer',
                                    )); 
                                ?>
                            </div>
                            <div class="footer__inner">
                                <div class="footer__label"> <span>Услуги</span></div>
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-footer-service',
                                    )); 
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer__col desktop">
                        <div class="footer__label"><span>Навигация по сайту</span></div>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-footer',
                            )); 
                        ?>
                    </div>
                    <div class="footer__col desktop">
                        <div class="footer__label"><span>Услуги</span></div>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-footer-service',
                            )); 
                        ?>
                    </div>
    
                    <div class="footer__col">
                        <div class="footer__label"><span>Преимущества</span></div>
                        <?php 
                        $rows = get_field('footer_advantage', 'option');
                        if( $rows ) { ?>
                           <ul class="footer__list">
                               <?php foreach( $rows as $row ) { ?>
                                   <li><span><?php echo  $row['footer_advantage_text']; ?></span></li>
                               <? } ?>
                           </ul>
                        <?php } ?>
                    </div>
    
                    <div class="footer__col">
                        <div class="footer__label footer__label_opasity desktop"><span>Преимущества</span></div>
                        <?php 
                        $rows = get_field('footer_advantage_2', 'option');
                        if( $rows ) { ?>
                           <ul class="footer__list">
                               <?php foreach( $rows as $row ) { ?>
                                   <li><span><?php echo  $row['footer_advantage_text']; ?></span></li>
                               <? } ?>
                           </ul>
                        <?php } ?>
                    </div>
    
                    <div class="footer__col">
                        <div class="footer__label"><span>Контакты</span></div>
    
                        <div class="footer__action">
                            <?php get_template_part( 'template-parts/parts/content', 'phone' ); ?>
    
                            <?php if (get_field('footer_callback_boolean', 'option')) { ?>
                                <div class="footer__link"><a class="show_js" href="#application">Заказать обратный звонок</a></div>
                            <?php } ?>
                        </div>
    
                        <div class="messenger messenger_medium">
                            <div class="messenger__label"><span>Спрашивайте, отвечаем онлайн</span></div>
                            <div class="messenger__list">
                                <?php get_template_part( 'template-parts/parts/content', 'whatsapp' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'telegram' ); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'viber' ); ?>
                            </div>
                        </div>
    
                        <?php if (get_field('mail', 'option')) { ?>
                            <div class="footer__mail"><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></div>
                        <?php } ?>
    
    
    
                        <?php if (get_field('footer_all_contacts', 'option')) { ?>
                            <?php 
                                $link = get_field('footer_all_contacts', 'option');
                                $title = $link['title'];
                                $url = $link['url'];
                                $target = $link['target'];
                            ?>
                            <div class="footer__link"><a href="<?php echo $url; ?>"  <?php if ($target) { echo 'target="_blank"'; } ?> ><?php echo $title; ?></a></div>
                        <?php } ?>
    
    
                    </div>
                </div>
            <?php } ?>


            <div class="footer__row">
                <div class="footer__col snakeline"><span>ООО Арстрой<br> <a class="show_js" href="#privacy">Политика конфиденциальности</a></span>
                </div>
                <div class="footer__col">
                    <span>Материалы с сайта защищены законом РФ об авторских и смежных правах. Копирование запрещено. Сайт не является договором офферты</span>
                </div>
                <div class="footer__col">
                    <span>Сделано с любовью в <a class="bold_border" href="https://paradigma.website/" target="_blank">Paradigma.website</a></span>
                </div>
            </div>
        </div>
    </footer>

    <?php get_template_part( 'template-parts/modals/modal', 'modalVideo' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'info' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'privacy' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'application' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'vacancymodal' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'mortgage' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'discounts' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'calculate' ); ?>
    <?php // get_template_part( 'template-parts/modals/modal', 'download' ); ?>
    <?php get_template_part( 'template-parts/modals/modal', 'download2' ); ?>
   
</div>
<!-- end wrapper-->