<!-- start quiz-question-->
<div class="quiz-question quiz-question-<?php echo $i; ?> quiz-question__slider <?php if ($i == 1){ echo ' active'; } ?>" data-q="">

    <div class="quiz-question__title"><span><?php echo $question['quiz_questions_title']; ?></span></div>
    <input type="hidden" name="title-<?php echo $i?>" value="<?php echo $question['quiz_questions_title']; ?>">

    <div class="quiz-question__slider_wrap">

        <div class="quiz-question__slider_top">
            <div class="quiz-question__slider_measure"><span>Площадь</span></div>

            <div class="quiz-question__slider_input">

                <input next="<?php // echo $answer['quiz_next']; ?>" value="40" class="square_field" type="number" max="9999" min="0" name="q-<?php echo $i; ?>" />

            </div>

            <div class="quiz-question__slider_measure"><span>м<sup>2</sup></span></div>

        </div>

        <div class="quiz-question__slider_main">
            <div class="quiz-question__slider_slide js-slide"></div>
        </div>

        <div class="quiz-question__slider_bottom">
            <div class="quiz-question__slider_measure"><span>40 м<sup>2</sup></span></div>
            <div class="quiz-question__slider_measure"><span>300 м<sup>2</sup></span></div>
        </div>

    </div>

    <div class="quiz-question__slider-input">
        <label>
            <input next="<?php echo $question['quiz_next_block']; ?>" data-line="<?php echo $question['quiz_number_after']; ?>" type="checkbox" name="" />
            <div class="input-check"><i class="icon_mark"></i></div>
            <p>Не знаю размеров</p>
        </label>
    </div>
</div>
<!-- end quiz-question-->