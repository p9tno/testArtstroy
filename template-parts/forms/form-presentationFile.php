<div class="presentation__form">

    <div class="presentation__caption">
        <div class="presentation__title"><span>Заполните<br>форму</span></div>
        <div class="presentation__subtitle"><span>свяжемся с вами<br> в ближайшее время</span></div>
    </div>

    <div class="form__wrap">
        <form class="form form_grid-col4" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

            <input type="hidden" name="subject" value="Получите коммерческое предложение" />
            <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
            <input type="hidden" name="notspam" value="" />

            <div class="form__row form__row_23">
                <div class="form__label"><span>Выберите файл</span></div>
                <label class="form__file_label" data-text="Файл не выбран">
                    <input type="file" name="file" />
                    <p class="form__file">Прикрепить документ</p>
                </label>
            </div>
            <div class="form__row form__row_23">
                <div class="form__label"><span>Куда прислать?</span></div>
                <select class="select" name="messenger" data-placeholder="Whatsapp">
                    <option value=""></option>
                    <option value="whatsapp" selected="selected">Whatsapp</option>
                    <option value="Viber">Viber</option>
                    <option value="Telegram">Telegram</option>
                    <option value="mail">Email</option>
                </select>
            </div>
            <div class="form__row form__row_23 form__row_hide form__row_email_js">
                <div class="form__label"><span>Введите email</span></div>
                <input type="email" name="email" placeholder="E-mail" />
            </div>
            <div class="form__row form__row_23 form__row_phone_js">
                <div class="form__label"><span>Введите номер телефона</span></div>
                <input class="tel" name="phone" type="tel" required="required" placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
            </div>
            <div class="form__row form__row_31">
                <div class="form__label form__label_opacity desktop"><span>Нажмите</span></div>
                <button class="btn btn_didisabled_js" type="submit">
                    <span>Получить коммерческое предложение</span>
                </button>
            </div>
            <div class="form__row form__row_full form__row_mb0">
                <div class="form__privacy">
                    <label class="form__check">
                        <input class="check_checked_js" type="checkbox" checked="checked" /><span
                            class="snakeline">Нажимая кнопку вы соглашаетесь с условиями <a href="#privacy"
                                class="show_js">Политики конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </form>
    </div>




</div>