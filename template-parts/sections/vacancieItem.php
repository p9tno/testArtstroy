<div class="vacancies__item" data-v-item="">
    <div class="vacancies__title"><span><b><?php echo $vacancie['vacancies_title']; ?></b></span></div>
    <div class="vacancies__row">

        <div class="vacancies__col">
            <div class="vacancies__label"><span>Чем нужно будет заниматься:</span></div>
            <div class="vacancies__text"><?php echo $vacancie['vacancies_text']; ?></div>
        </div>

        <div class="vacancies__col">

            <?php 
            $terms = $vacancie['vacancies_terms'];
            if( $terms ) { ?>
                <div class="vacancies__label"><span>От нас (условия):</span></div>
                <ul class="vacancies__terms">
                    <?php foreach( $terms as $term ) { ?>
                        <li><span><?php echo $term['vacancies_term']; ?></span></li>
                    <? } ?>
                </ul>
            <?php } ?>

            <ul class="vacancies__info">
                <?php  if ($vacancie['vacancies_city']) { ?>
                    <li><span>Город:</span><span><?php echo $vacancie['vacancies_city']; ?></span></li>
                <?php } ?>
                <?php  if ($vacancie['vacancies_salary']) { ?>
                    <li><span>Зар. плата:</span><span><?php echo $vacancie['vacancies_salary']; ?></span></li>
                <?php } ?>
                <?php  if ($vacancie['vacancies_type']) { ?>
                    <li><span>Тип:</span><span><?php echo $vacancie['vacancies_type']; ?></span></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="vacancies__action">
        <a class="btn show_js" href="#vacancymodal"><span>оставить отклик</span></a>
    </div>

</div>