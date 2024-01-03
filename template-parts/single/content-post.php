<!-- begin singleBlog-->
<section class="singleBlog section" id="singleBlog">
    <div class="container_center container_center_right">
        <div class="singleBlog__wrap">
            <!-- begin content-->
            <div class="singleBlog__content">
                <?php 
                $rows = get_field('singleBlog_hashtags');
                if( $rows ) { ?>
                <div class="singleBlog__hashtag">
                    <div class="hashtag">
                        <?php foreach( $rows as $row ) { ?>
                        <div class="hashtag__item"><span><?php echo $row['singleBlog_hashtag']; ?></span></div>
                        <? } ?>
                    </div>
                </div>
                <?php } ?>

                <h1 class="section__title"><span><b><?php the_title(); ?></b></span></h1>

                <?php if (get_field('singleBlog_time')) { ?>
                <div class="singleBlog__time"><span><?php the_field('singleBlog_time'); ?></span></div>
                <?php } ?>


                <?php 
                $blog_rows = get_field('field_639b059387011');
                $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;

                if( $blog_rows ) { ?>
                <?php foreach( $blog_rows as $blog_row ) {

                        $image_id = $blog_row['blok_s_izobrazhenie'];
                        $size = 'full'; // (thumbnail, medium, full, vertical, horizon)
                    
                        if( $image_id ) {
                            $img_url = wp_get_attachment_image_url($image_id, $size);
                        } else {
                            $img_url = $no_img_url;
                        }

                        if ($blog_row['vybor_bloka'] == 'text') { ?>
                <!-- begin row-->
                <div class="singleBlog__row">
                    <div class="singleBlog__text"><?php echo $blog_row['blok_s_kontentom']; ?></div>
                </div>
                <!-- end row-->
                <?php } elseif ($blog_row['vybor_bloka'] == 'text-img') { ?>
                <!-- begin row-->
                <div class="singleBlog__row singleBlog__row_flex reverse">
                    <div class="singleBlog__text"><?php echo $blog_row['blok_s_kontentom']; ?></div>
                    <div class="singleBlog__img img"><img src="<?php echo $img_url; ?>" alt="img" loading="lazy" />
                    </div>
                </div>
                <!-- end row-->

                <?php } elseif ($blog_row['vybor_bloka'] == 'img-text') { ?>

                <!-- begin row-->
                <div class="singleBlog__row singleBlog__row_flex">
                    <div class="singleBlog__text"><?php echo $blog_row['blok_s_kontentom']; ?></div>
                    <div class="singleBlog__img img"><img src="<?php echo $img_url; ?>" alt="img" loading="lazy" />
                    </div>
                </div>
                <!-- end row-->


                <?php } elseif ($blog_row['vybor_bloka'] == 'img') { ?>
                <!-- begin row-->
                <div class="singleBlog__row">
                    <div class="singleBlog__img img"><img src="<?php echo $img_url; ?>" alt="img" loading="lazy" />
                    </div>
                    <div class="singleBlog__caption"><span><?php echo $blog_row['podpis_k_izobrazheniyu']; ?></span>
                    </div>
                </div>
                <!-- end row-->
                <?php } else { ?>

                <!-- begin row-->
                <div class="singleBlog__row">
                    <div class="singleBlog__quote"><span><?php echo $blog_row['blok_s_czitatoj']; ?></span>
                    </div>
                </div>
                <!-- end row-->

                <?php } ?>

                <? } ?>
                <?php } ?>

            </div>
            <!-- end content-->
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>
<!-- end singleBlog-->

<!-- begin blogMore-->
<section class="blogMore section" id="blogMore">
    <div class="container_center container_center_right">
        <h2 class="section__title" data-aos="fade-up">
            <span>Вам может быть также интересно</span>
        </h2>
        <div class="blog__grid">
            <?php
                // $post_object = get_post();
                // get_pr($post_object);
                $post_id = get_the_ID();
                $post_term_object = get_the_terms($post_id, 'category');
                $post_term_id = $post_term_object[0]->term_id;

                $args = array(
                    'post_type' => 'post',
                    'post__not_in' => array($post_id),
                    'orderby' => 'rand',
                    'order'    => 'ASC',
                    'posts_per_page' => 3,
                    // вывода постов из нескольких произвольных таксономий:
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'id',
                            'terms'    => $post_term_id,
                        )
                    )
            );
            $otherPost = new WP_Query($args);
            ?>
        
            <?php if ($otherPost->have_posts()) : while ($otherPost->have_posts()) : $otherPost->the_post(); ?>
                <?php get_template_part( 'template-parts/parts/content', 'blog' ); ?>
            <?php endwhile; ?>
            
            <?php else : ?>
                no post
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        

        </div>
    </div>
</section>
<!-- end blogMore-->

<?php get_template_part( 'template-parts/sections/section', 'videoWork' ); ?>