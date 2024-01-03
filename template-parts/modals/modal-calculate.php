<!-- Begin Modal calculate-->
<div class="modal fade calculate" id="calculate">
    <div class="modal-dialog">
        <div class="modal-content bg"><a class="modal-close" href="#" data-dismiss="modal"></a>

            <div class="modal-header">
                <div class="modal-title"><span>Что вам нужно рассчитать?</span></div>
            </div>

            <div class="modal-body">
                <?php 
                $rows = get_field('calculate_list', 'option');
                if( $rows ) { ?>
                    <div class="modal-list">
                        <?php foreach( $rows as $row ) { ?>

                            <a class="modal-item" href="<?php echo $row['calculate_link'] . '#quiz'; ?>"><i class="icon_mark"></i><span><?php echo $row['calculate_title']; ?>"</span></a>
                        <? } ?>
                     
                    </div>
                <?php } ?>
                
            </div>

        </div>
    </div>
</div>
<!-- End modal calculate-->