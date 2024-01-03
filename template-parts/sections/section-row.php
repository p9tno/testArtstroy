<?php 
$rows = get_field('page_row_list');
if( $rows ) { ?>
    <!-- begin row -->
    <section class="section">
        <div class="container_center container_center_right">
            <div class="section__list section__list_row">
                <?php foreach( $rows as $row ) { ?>
                    <div class="section__item">
                        <div class="section__mark check_mark"><i class="icon_mark"></i></div><span> <?php echo $row['page_row_item']; ?></span>
                    </div>  
                <? } ?>
            </div>
        </div>
    </section>
    <!-- end row -->
<?php } ?>