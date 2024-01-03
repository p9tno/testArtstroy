<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
?>
<!-- begin news-->
<section class="news section" id="news">
    <div class="container_center container_center_sm">
        <h2 class="section__title" data-aos="fade-up"><span><b>Делимся полезной информацией</b> в блоге и снимаем обзоры проектов на
                YouTube </span></h2>
        <div class="news__content">
            <div class="news__left">
                <div class="swiper__label mobile">
                    <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="hand"/></div><span>Листайте влево/вправо</span>
                </div>

                <?php 
                $rows = get_field('videoWork_list', 'option');
                if( $rows ) { ?>
                    <div class="youtubeBox">
                        <div class="swiper singleSlider single-swiper-js">
                            <div class="swiper-wrapper singleSlider__wrapper">
                                <?php foreach( $rows as $row ) { 
                                    $image_id = $row['videoWork_img_id'];
                                    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                                
                                    if( $image_id ) {
                                        $img_url = wp_get_attachment_image_url($image_id, $size);
                                    } else {
                                        $img_url = $no_img_url;
                                    }      
                                ?>
                                    <div class="swiper-slide singleSlider__slide">
        
                                        <div class="reviews__video bg" style="background-image: url('<?php echo $img_url; ?>')">
                                            <div class="reviews__content">
                                                <div class="reviews__name"><span><?php echo $row['videoWork_name']; ?></span></div>
                                                <div class="reviews__time"><span><?php echo $row['videoWork_time']; ?></span></div>
                                            </div>
                                            <?php if ($row['videoWork_id']) { ?>
                                                <div class="play youtubeModal-js" id="<?php echo $row['videoWork_id']; ?>"><i class="icon_play"></i></div>
                                            <?php }?>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
    
                            <div class="news__control">
                                <?php if (get_field('videoWork_link', 'option')) { ?>
                                    <div class="news__link"><a href="<?php the_field('videoWork_link', 'option'); ?>" target="_blank">Перейти на YouTube</a></div>
                                <?php } ?>
                                <div class="singleSlider__dotted dotted_sm mobile"></div>
                                <div class="singleSlider__arrows custom_arrows desktop"><i class="icon_arrow_left"></i><i
                                        class="icon_arrow_right"></i></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <?php if (get_field('homeBlog_relations')) { ?>
                <div class="news__right">
                    <div class="swiper__label mobile">
                        <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/hand.svg' ?>" alt="hand"/></div><span>Листайте влево/вправо</span>
                    </div>
                    <div class="swiper blog__slider blog-swiper-js">
                        <div class="swiper-wrapper blog__wrapper">
                            <?php
                                $post_id = get_field('homeBlog_relations');
                                // get_pr($post_id);
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1,
                                    'post__in' => $post_id,
                                    'orderby'   => 'post__in',
                                );
                                $blogHome = new WP_Query($args);
                            ?>
                            
                            <?php if ($blogHome->have_posts()) : while ($blogHome->have_posts()) : $blogHome->the_post(); ?>
                                <?php get_template_part( 'template-parts/parts/content', 'blog' );?>
                            <?php endwhile; ?>
                            
                            <?php else : ?>
                                no post
                            <?php endif; ?>
                            
                            <?php wp_reset_postdata(); ?>

                        </div>

                        <div class="news__control">
                            <?php if (get_field('homeBlog_btn_link')) { ?>
                                <?php 
                                    $link = get_field('homeBlog_btn_link');
                                    $title = $link['title'];
                                    $url = $link['url'];
                                    $target = $link['target'];
                                ?>
                                <div class="news__link"><a href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?>><?php echo $title; ?></a></div>
                            <?php } ?>

                            <div class="blog__dotted dotted_sm mobile"></div>
                            <div class="blog__arrows custom_arrows desktop">
                                <i class="icon_arrow_left"></i>
                                <i class="icon_arrow_right"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
            <?php } ?>
        </div>
    </div>
</section>
<!-- end news-->