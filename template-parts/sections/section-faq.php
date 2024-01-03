<!-- begin faq-->
<section class="faq section" id="faq">
    <div class="container_center">
        <div class="faq__caption">
            <?php if (get_field('faq_title')) { ?>
                <h2 class="section__title" data-aos="fade-up"><span><?php the_field('faq_title'); ?></span></h2>
            <?php } ?>

            <?php if (get_field('whatsapp', 'option')) { ?>
                <div class="faq__button">
                    <a class="btn btn_dark btn_whatsapp" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
                        <span>Напишите нам WhatsApp</span>
                        <small>время ответа 10 минут</small>
                    </a>
                </div>
            <?php } ?>

        </div>

        <div class="faq__content">
            <?php 
            $rows = get_field('faq_list_left');
            if( $rows ) { ?>
                <div class="faq__col">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="collapse" data-collapse-wrapper="">
                            <div class="collapse__title" data-collapse="">
                                <div class="faq__title">
                                    <p><?php echo $row['faq_question']; ?></p>
                                </div>
                            </div>
                            <div class="collapse__body" data-collapse-body="">
                                <div class="faq__answer">
                                    <?php echo $row['faq_answer']; ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            <?php } ?>

            <?php 
            $rows = get_field('faq_list_right');
            if( $rows ) { ?>
                <div class="faq__col">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="collapse" data-collapse-wrapper="">
                            <div class="collapse__title" data-collapse="">
                                <div class="faq__title">
                                    <p><?php echo $row['faq_question']; ?></p>
                                </div>
                            </div>
                            <div class="collapse__body" data-collapse-body="">
                                <div class="faq__answer">
                                    <?php echo $row['faq_answer']; ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end faq-->