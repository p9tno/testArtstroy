<!-- start quiz-question-->
<div class="quiz-question quiz-question-<?php echo $i; ?> quiz-question__text <?php if ($i == 1){ echo ' active'; } ?>" data-q="">

    <div class="quiz-question__title"><span><?php echo $question['quiz_questions_title']; ?></span></div>

    <input type="hidden" name="title-<?php echo $i?>" value="<?php echo $question['quiz_questions_title']; ?>">


    <div class="quiz-question__wrap quiz-question__wrap_text">

        <?php
            $answers = $question['quiz_answers'];
            // $count = count($answers);
            // echo 'count : ' . $count . '<br>';
            // get_pr($answers);
            $type = $question['quiz_shoice_type'];
            $type_quiz = $question['quiz_type'];
 
            if( $answers ) { ?>
                <?php 
                    foreach( $answers as $answer ) { 
                        $next = '';
                        if ($answer['quiz_next']) {
                            $next = 'next="'.$answer['quiz_next'].'"';
                        } 
                        // else {
                        //     $next = 'next="'.$question['quiz_next_block'].'"';
                        // }
                    ?>
 
                    <!-- start quiz-question__text-block-->
                    <div class="quiz-question__text-block">

                        <label class="quiz-question__text-label">
                            <input <?php echo $next; ?> data-line="<?php echo $answer['quiz_number_after']; ?>" type="<?php echo $type; ?>" name="q-<?php echo $i; if($type == 'checkbox') { echo '[]' ;} ?>" value="<?php echo $answer['quiz_answer']; ?>" />
                            <div class="quiz-question__check quiz-question__text-check"><i class="icon_mark"></i></div>
                            <p><?php echo $answer['quiz_answer']; ?></p>
                        </label>

                        <?php if ($answer['quiz_answer_video_id'] && $answer['quiz_answer_text']) { ?>
                            
                        <?php } else { ?>
                            <?php if ($answer['quiz_answer_video_id']) { ?>
                                <div class="quiz-question-video">
                                    <div class="play youtubeModal-js" id="<?php echo $answer['quiz_answer_video_id']; ?>"><i class="icon_play"></i></div>
                                </div>
                            <?php } ?>

                            <?php if ($answer['quiz_answer_text']) { ?>  
                                <div class="quiz-question-hint"><i class="icon_info"></i>
                                    <p><?php echo $answer['quiz_answer_text']; ?></p>
                                </div>
                            <?php } ?>
                        <?php } ?>

                    </div>
                    <!-- end quiz-question__text-block-->

                    
                <?php } ?>
        <?php } ?>

    </div>
</div>
<!-- end quiz-question-->
