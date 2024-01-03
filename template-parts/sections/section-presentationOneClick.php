<!-- begin presentation2 -->
<section class="presentation presentation_left section presentation_design2 bg lines">
    <div class="lines__wrap">
        <div class="lines__list"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="container_center container_center_right">
        <h2 class="section__title" data-aos="fade-up"><span>Скачайте в 1 клик<br> пример альбома<br> чертежей,
                смету,<br> график работ<br> и поставок</span></h2>
        <div class="presentation__text"><span>и узнайте, что получите на руки по<br> итогу разработки
                дизайн-проекта</span></div>

        <?php
        $data_download = '';
        if (get_field('data_download_presentationOneClick', 'option')) { 
            $data_download = ' data-download="'.get_field('data_download_presentationOneClick', 'option').'"' ;
        } 
        ?>

        <div class="presentation__form">

            <div class="presentation__caption">
                <div class="presentation__title"><span>Скачайте в 1 клик</span></div>
                <div class="presentation__subtitle"><span>просто введите ваш номер телефона</span></div>
            </div>

            <div class="form__wrap">
                <form class="form form_grid" action="<?php echo get_template_directory_uri() . '/send.php'; ?>" <?php echo $data_download;   unset($data_download); ?> >

                    <input type="hidden" name="subject" value="Скачайте в 1 клик пример альбома" />
                    <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
                    <input type="hidden" name="notspam" value="" />


                    <div class="form__row form__row_31">
                        <div class="form__label"><span>Куда прислать?</span></div>
                        <select class="select" name="messenger" data-placeholder="Whatsapp">
                            <option value=""></option>
                            <option value="whatsapp" selected="selected">Whatsapp</option>
                            <option value="Viber">Viber</option>
                            <option value="Telegram">Telegram</option>
                            <option value="mail">Email</option>
                        </select>
                    </div>
                    <div class="form__row form__row_31 form__row_hide form__row_email_js">
                        <div class="form__label"><span>Введите email</span></div>
                        <input type="email" name="email" placeholder="E-mail" />
                    </div>
                    <div class="form__row form__row_31 form__row_phone_js">
                        <div class="form__label"><span>Введите номер телефона</span></div>
                        <input class="tel" type="tel" name="phone" required="required"
                            placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
                    </div>
                    <div class="form__row form__row_38">
                        <div class="form__label form__label_opacity desktop"><span>Нажмите</span></div>
                        <button class="btn btn_didisabled_js" type="submit"><span>Скачать пример проекта</span></button>
                    </div>
                    <div class="form__row form__row_full form__row_mb0">
                        <div class="form__privacy">
                            <label class="form__check">
                                <input class="check_checked_js" type="checkbox" checked="checked" /><span
                                    class="snakeline">Нажимая кнопку вы соглашаетесь с условиями<br> <a href="#privacy"
                                        class="show_js">Политики конфиденциальности</a></span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
<!-- end presentation2 -->