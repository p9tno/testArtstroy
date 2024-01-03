<?php if (get_field('clip_boolean', 'option')) { ?>
    <?php
        $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
        $image_id = get_field('clip_img_id', 'option');
        // get_pr($image);
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image_id ) {
            $img_url = wp_get_attachment_image_url($image_id, $size);
        } else {
            $img_url = $no_img_url;
        }
    ?>
    <!-- begin clip -->
    <div class="clip">
        <div class="clip__bg bg" style="background-image: url('<?php echo $img_url ?>')">
            <div class="clip__toggle clip-toggle-js"><i class="icon_plus_deg"></i></div>
            <?php if (get_field('clip_video_id', 'option')) { ?>
                <div class="clip__play">
                    <div class="play pulse youtubeModal-js" id="<?php the_field('clip_video_id', 'option'); ?>"><i class="icon_play"></i></div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- end clip -->

<?php } ?>
