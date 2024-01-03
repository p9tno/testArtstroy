<!-- start quiz-right-->
<div class="quiz-right desktop">
    <div class="quiz-right__bg bg" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/quiz/quiz_bg.png' ?>')"></div>
    <?php if (get_field('quiz_employee_bg_id')) { ?>
      <?php
        $image_id = get_field('quiz_employee_bg_id');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        $img_url = wp_get_attachment_image_url($image_id, $size);
      ?>
      <div class="quiz-right__persone bg" style="background-image: url('<?php echo $img_url; ?>')"></div>
    <?php } ?>

    <?php if (get_field('quiz_text')) { ?>
        <div class="quiz-right__content"><?php the_field('quiz_text'); ?></div>
    <?php } ?>
</div>
<!-- end quiz-right-->


