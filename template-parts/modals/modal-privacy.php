<!-- Begin Modal privacy-->
<div class="modal fade privacy" id="privacy">
    <div class="modal-dialog">
        <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <div class="modal-body">
                <div class="privacy__content">
                    <div class="content__content">
                        <?php if (get_field('privacy_content', 'option')) { ?>
                            <?php the_field('privacy_content', 'option'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End modal privacy-->