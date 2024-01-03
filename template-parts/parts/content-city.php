<?php 
$rows = get_field('city_list', 'option');
if( $rows ) { ?>
    
    <div class="header__city desktop">
        <div class="city">
            <div class="city__label"><span>Ваш город</span></div>
            <ul class="city__menu">
                <li class="city__item city__item_haschildren">

                    <a href="<?php echo esc_url(home_url("/")); ?>">Красноярск<i class="icon_drop_bold"></i></a>

                    <ul class="city__submenu">
                        <?php foreach( $rows as $row ) { 
                            $link = $row['city_link'];
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                            <li class="city__item"><a href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?> ><?php echo $title; ?></a></li>
                        <? } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<?php } ?>