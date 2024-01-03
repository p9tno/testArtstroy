<div class="head__right">
    <div class="head__form">

        <div class="head__label"><span><b>Давайте обсудим ваше ТЗ</b></span></div>
        <div class="head__text"><span>Пришлите проект или тех.задание,<br> а мы сформируем коммерческое<br>
                предложение для вас</span></div>

        <form class="form form_sm" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

            <input type="hidden" name="subject" value="Давайте обсудим ваше ТЗ" />
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
                <input class="tel" name="phone" type="tel" required="required"
                    placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
            </div>
            <div class="form__row">
                <button class="btn btn_didisabled_js" type="submit"><span>Обсудить ТЗ и
                        получить</span><span>коммерческое предложение</span></button>
            </div>
            <div class="form__row form__row_mb0">
                <div class="form__privacy">
                    <label class="form__check">
                        <input class="check_checked_js" type="checkbox" checked="checked" /><span
                            class="snakeline">Нажимая кнопку вы соглашаетесь с условиями<br> <a
                                href="#privacy" class="show_js">Политики конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>