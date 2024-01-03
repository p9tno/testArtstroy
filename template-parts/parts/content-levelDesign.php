<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
    $image_id = get_field('levelDesign_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }
?>
<!-- start filter__item-->
<div class="filter__item">
    <div class="levelDesign__item">

        <div class="levelDesign__img img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>

        <div class="levelDesign__name"><span><?php the_title(); ?></span></div>

        <?php if (get_field('levelDesign_desc')) { ?>
            <div class="levelDesign__desc"><span><?php the_field('levelDesign_desc'); ?></span></div>
        <?php } ?>

        <div class="levelDesign__profile">

            <div class="profile">
                <div class="profile__label"><span>Профиль дизайнера</span></div>

                <?php if (get_field('profile_progress')) { ?>
                    <div class="profile__progress">
                        <small>Достижения:</small>
                        <span><?php the_field('profile_progress'); ?></span>
                    </div>
                <?php } ?>

                <?php // if (get_field('profile_total')) { ?>
                    <div class="profile__total">
                        <div class="profile__title">
                            <span>Level</span>
                            <small>Совокупный уровень</small>
                        </div>
                        <?php $terms = get_object_term_cache( $post->ID, 'level' ); ?>
                        <div class="stars stars_white <?php echo $terms[0]->slug; // the_field('profile_total'); ?>">
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                            <i class="icon_star"></i>
                        </div>
                    </div>
                <?php // } ?>

             
                <div class="profile__list">
                    <?php if (get_field('profile_level')) { ?>
                        <div class="profile__item"><span>Уровень дизайна</span>
                            <div class="profile__stars">
                                <div class="stars stars_white <?php the_field('profile_level'); ?>">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('profile_drawing')) { ?>
                        <div class="profile__item"><span>Рабочие чертежи</span>
                            <div class="profile__stars">
                                <div class="stars stars_white <?php the_field('profile_drawing'); ?>">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <?php if (get_field('profile_3d')) { ?>
                        <div class="profile__item"><span>3D-визуализация</span>
                            <div class="profile__stars">
                                <div class="stars stars_white <?php the_field('profile_3d'); ?>">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php if (get_field('profile_link')) { ?>
                    <div class="profile__link">
                        <a href="<?php the_field('profile_link'); ?>" target="_blank">Перейти на страницу в соц.сети</a>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>
<!-- end filter__item-->
