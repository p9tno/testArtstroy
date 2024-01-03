<div class="location__form">
    <form class="form form_grid" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

        <input type="hidden" name="subject" value="Карта" />
        <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
        <input type="hidden" name="notspam" value="" />

        <div class="form__row form__row_43">
            <div class="form__label"><span>Введите номер телефона</span></div>
            <input class="tel" name="phone" type="tel" required="required"
                placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
        </div>
        <div class="form__row form__row_57">
            <div class="form__label form__label_opacity desktop"><span>Нажмите</span></div>
            <button class="btn btn_didisabled_js" type="submit"><span>Записаться на
                </span><span>посещение объектов</span></button>
        </div>
        <div class="form__row form__row_full form__row_mb0">
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