<!-- start quiz-question-->
<div class="quiz-question quiz-question-<?php echo $i; ?> quiz-question__photo <?php if ($i == 1){ echo ' active'; } ?>" data-q="">

    <div class="quiz-question__title"> <span><?php echo $question['quiz_questions_title']; ?></span></div>
    <input type="hidden" name="title-<?php echo $i?>" value="<?php echo $question['quiz_questions_title']; ?>">

    <div class="quiz-question__wrap quiz-question__wrap_grid">
        <?php  
            $answers = $question['quiz_answers'];
            $type = $question['quiz_shoice_type'];
            $type_quiz = $question['quiz_type'];
            if ( $answers ) { ?>

                <?php foreach( $answers as $answer ) { 
                        $next = '';
                        if ($answer['quiz_next']) {
                            $next = 'next="'.$answer['quiz_next'].'"';
                        }
                    ?>

                    <?php 
                        $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp';
                        $image_id = $answer['quiz_answer_img_id'];
                        $size = 'full'; // (thumbnail, medium, large, full or custom_quiz size)

                        if( $image_id ) {
                            $img_url = wp_get_attachment_image_url($image_id, $size);
                        } else {
                            $img_url = $no_img_url;
                        }
                    ?>
                    
                        <!-- start quiz-question__photo-block-->
                        <div class="quiz-question__photo-block">
                            <label class="quiz-question__photo-label">
                                <input <?php echo $next; ?> data-line="<?php echo $answer['quiz_number_after']; ?>"  type="<?php echo $type; ?>" name="q-<?php echo $i; if($type == 'checkbox') { echo '[]' ;} ?>" value="<?php echo $answer['quiz_answer']; ?>" /><img class="quiz-question__photo-img" loading="lazy" src="<?php echo $img_url; ?>" alt="img" />
                                <div class="quiz-question__check quiz-question__photo-check"><i class="icon_mark"></i></div>
                                <div class="quiz-question__photo-text"><span><?php echo $answer['quiz_answer']; ?></span></div>
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
                        <!-- end quiz-question__photo-block-->
              
                <?php } ?>

        <?php } ?>

    </div>
</div>
<!-- end quiz-question-->