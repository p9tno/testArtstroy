<!-- start quiz-main-->
<div class="quiz-main">
    <div class="quiz-wrap">

        <div class="quiz-line">
            <div class="quiz-line__bg" style="width: 5%;"></div>
            <div class="quiz-line__text">
                <span class="quiz-line__label">Расчет</span>
                <span class="quiz-line__label bold">пройден на</span>
                <span class="quiz-line-step_current bold">5</span>
                <span class="quiz-line__label bold">%</span>
            </div>
        </div>

        <!-- START question-->

        <?php  
            $questions = get_field('quiz_questions');

            // get_pr($questions);
            if ( $questions ) {
                $i = 1;
                foreach( $questions as $question ) {

                    if ($question['quiz_type'] == 'images') { include 'question/images.php'; } 
                        
                    elseif ($question['quiz_type'] == 'text') {include 'question/text.php'; } 

                    elseif ($question['quiz_type'] == 'content') { include 'question/content.php'; } 
                    
                    elseif ($question['quiz_type'] == 'slider') { include 'question/slider.php'; } 
                    
                    elseif ($question['quiz_type'] == 'file') { include 'question/file.php'; }

                    $i++;
                }
                
                $total = $i;
            }
        ?>
        <!-- количество вопросов -->
        <input type="hidden" name="total" value="<?php echo $total; ?>" />
        <!-- END question-->
        
    </div>

    <div class="quiz-footer">
        <div class="quiz-arrow__wrap">
            <button class="quiz-arrow quiz-arrow__prev">
                <p>Назад</p>
            </button>

            <?php
                if ($questions) {
                    $i = 1;
                    foreach( $questions as $question ) { ?>
                       <button data-line="<?php echo $question['quiz_number_after']; ?>" next="<?php echo $question['quiz_next_block']; ?>" class="quiz-button-<?php echo $i; ?> quiz-arrow quiz-arrow__next <?php if ($i == 1){ echo ' active'; } ?>" disabled="">
                           <p>Далее</p>
                       </button>
                       
                   <?php $i++; }
                }
            ?>

        </div>
        <div class="quiz-footer__hint"><span><b>Выберите вариант ответа</b><br> и нажмите кнопку “Далее”</span></div>
    </div>
</div>
<!-- end quiz-main-->