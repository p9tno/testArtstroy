<!-- begin price-->
<section class="price section" id="price">
    <div class="container_center container_center_right">
        <div class="price__content">

            <?php if (get_field('price_sec_title')) { ?>
                <div class="price__left">
                    <h2 class="section__title"><span><?php the_field('price_sec_title'); ?></span></h2>
                </div>
            <?php } ?>
            
            <?php 
            $items = get_field('price_items');
            if( $items ) { ?>
               <div class="price__right">
                   <div class="price__list">
                        <?php foreach( $items as $item ) { 
                                $image_id = $item['price_img_id'];
                                $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                            
                                if( $image_id ) {
                                    $img_url = wp_get_attachment_image_url($image_id, $size);
                                }
                            ?>
                            <div class="price__item bg" style="background-image: url('<?php echo $img_url; ?>')">
                                <div class="price__title"><span><?php echo $item['price_title']; ?></span></div>

                                <?php 
                                $rows = $item['price_list'];
                                if( $rows ) { ?>
                                    <ul class="list">
                                        <?php foreach( $rows as $row ) { ?>
                                            <li><span><?php echo $row['price_item']; ?></span></li>
                                        <? } ?>
                                    </ul>
                                <?php } ?>
        
        
                                <div class="price__link"><a target="_blank" href="<?php echo $item['price_link']; ?>">Смотреть полный перечень работ по тарифу</a></div>
        
                                <div class="price__number"><span><?php echo $item['price_number']; ?> </span><small>руб/м<sup>2</sup></small></div>
        
                                <div class="price__desc"><span><?php echo $item['price_desc']; ?></span></div>
        
                                <div class="price__button"><a class="btn show_js" href="#application"><span>Обсудить проект</span></a></div>
                                
                            </div>
                        <? } ?>
   
   
                   </div>
               </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end price-->