<?php if (get_field('seo_boolean')) { ?>
    <!-- begin content-->
    <section class="content content_page section" id="content">
        <div class="container_center">
            <?php if (get_field('content_seo_title')) { ?>
                <h2 class="content__title"><span><?php the_field('content_seo_title'); ?></span></h2>
            <?php } ?>
      
            <?php if (get_field('content_seo_prewiew')) { ?>
                <div class="content__preview">
                    <p><?php the_field('content_seo_prewiew'); ?></p>
                </div>
            <?php } ?>
            <div class="content__collapse">
                <div class="collapse__body" data-collapse-body="">
                    <?php if (get_field('seo_content')) { ?>
                        <div class="content__content"><?php the_field('seo_content'); ?></div>
                    <?php } ?>
                </div>
                <div class="collapse__title" data-collapse=""><span>Раскрыть полностью</span></div>
            </div>
        </div>
    </section>
    <!-- end content-->
<?php } ?>