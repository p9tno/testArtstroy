<?php
$data_download = '';
if (get_field('data_download_sidebar', 'option')) { 
    $data_download = ' data-download="'.get_field('data_download_sidebar', 'option').'"' ;
} 
?>

<!-- begin sidebar__item-->
<div class="sidebar__item bg sidebar__item_download">
    <div class="sidebar__title"><span><b>Скачайте презентацию</b> с портфолио и ценами всего в 1
            клик</span></div>
    <div class="sidebar__form">
        <form class="form form_sm" action="<?php echo get_template_directory_uri() . '/send.php'; ?>" <?php echo $data_download;   unset($data_download); ?> >

            <input type="hidden" name="subject" value="Скачайте презентацию с портфолио и ценами всего в 1 клик (sidebar)" />
            <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
            <input type="hidden" name="notspam" value="" />

            <div class="form__row">
                <div class="form__label"><span>Куда прислать?</span></div>
                <select class="select" name="messenger" data-placeholder="Whatsapp">
                    <option value=""></option>
                    <option value="whatsapp" selected="selected">Whatsapp</option>
                    <option value="Viber">Viber</option>
                    <option value="Telegram">Telegram</option>
                    <option value="mail">Email</option>
                </select>
            </div>
            <div class="form__row form__row_hide form__row_email_js">
                <div class="form__label"><span>Введите email</span></div>
                <input type="email" name="email" placeholder="E-mail" />
            </div>
            <div class="form__row form__row_phone_js">
                <div class="form__label"><span>Введите номер телефона</span></div>
                <input class="tel" type="tel" name="phone" required="required" placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
            </div>
            <div class="form__row">
                <button class="btn btn_didisabled_js" type="submit"><span>Скачать
                        презентацию</span></button>
            </div>
            <div class="form__row form__row_full form__row_mb0">
                <div class="form__privacy">
                    <label class="form__check">
                        <input class="check_checked_js" type="checkbox" checked="checked" /><span
                            class="snakeline">Нажимая кнопку вы соглашаетесь с условиями<br> <a href="#privacy"
                                class="show_js">Политики
                                конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end sidebar__item-->