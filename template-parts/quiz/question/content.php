<!-- start quiz-question-->
<div class="quiz-question quiz-question-<?php echo $i; ?> quiz-question__content <?php if ($i == 1){ echo ' active'; } ?>" data-q="">

    <div class="quiz-question__title quiz-question__file-content"><span><?php echo $question['quiz_questions_title']; ?></span></div>
    <input type="hidden" name="title-<?php echo $i?>" value="<?php echo $question['quiz_questions_title']; ?>">

    <div class="quiz-question__wrap quiz-question__wrap_content">
        <div class="quiz-question__content-block"><?php echo $question['quiz_content']; ?></div>
        <div class="quiz-question__slider-input">
            <label>
                <input next="<?php echo $question['quiz_next_block']; ?>" data-line="<?php echo $question['quiz_number_after']; ?>" type="checkbox" name="q-<?php echo $i; ?>" value="Прочитал (-а)" />
                <div class="input-check"><i class="icon_mark"></i></div>
                <p>Прочитал (-а)</p>
            </label>
        </div>
    </div>
</div>
<!-- end quiz-question-->