<!-- start quiz-question-->
<div class="quiz-question quiz-question-<?php echo $i; ?> quiz-question__file <?php if ($i == 1){ echo ' active'; } ?>" data-q="">

    <div class="quiz-question__title quiz-question__file-title">
        <span><?php echo $question['quiz_questions_title']; ?></span>
        <div class="quiz-question__content-block"><?php echo $question['quiz_content']; ?></div>
    </div>
    <input type="hidden" name="title-<?php echo $i?>" value="<?php echo $question['quiz_questions_title']; ?>">
    

    <div class="quiz-question__wrap quiz-question__wrap_file">
        

        <div class="quiz-question__file-block">
            <label class="send-form__file" data-text="Файл не выбран">
                <input type="file" name="file-<?php echo $i; ?>" />
                <p>Загрузить файл</p>
            </label>
        </div>

        <!-- <div class="quiz-question__file-block">
            <label class="send-form__file" data-text="Файл не выбран">
                <input type="file" name="file-<?php // echo $i+1; ?>" />
                <p>Загрузить файл</p>
            </label>
        </div> -->

        <div class="quiz-question__file-block">
            <div class="send-form__link">
                <input type="url" placeholder="Или добавьте ссылку на документ" name="q-<?php echo $i; ?>" />
            </div>
        </div>

    </div>

    <div class="quiz-question__slider-input">
        <label>
            <input next="<?php echo $question['quiz_next_block']; ?>" data-line="<?php echo $question['quiz_number_after']; ?>" type="checkbox" name="" />
            <div class="input-check"><i class="icon_mark"></i></div>
            <p>Пропустить вопрос</p>
        </label>
    </div>

</div>
<!-- end quiz-question-->
