<div class="head__action mb20">

    <?php if ( is_page_template(['template-design.php']) || is_page_template(['template-construction.php'])  ) { ?>
        <a class="btn show_js" href="#application">
            <span>Рассчитать стоимость</span>
        </a>
    <?php } else { ?>
        <a class="btn show_js" href="#application">
            <span>Рассчитать стоимость</span><span>вашего ремонта</span>
        </a>
    <?php } ?>


    <?php if (get_field('whatsapp', 'option')) { ?>
        <a class="btn btn_dark btn_whatsapp" href="https://wa.me/+<?php the_field('whatsapp', 'option'); ?>" target="_blank">
            <span>Напишите нам в WhatsApp</span><small>время ответа 10 минут</small>
        </a>
    <?php } ?>

</div>

<div class="head__text">
    <span>Пройдите короткий тест, чтобы мы сориентировали по стоимости и сформировали предложение для вас.</span>
</div>