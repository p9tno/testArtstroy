<div class="muchMore__form">
    <div class="muchMore__caption"><small>Уже есть дизайн-проект?</small><span>Пришлите дизайн-проект и <b>получите
                смету на ремонт</b></span></div>
    <div class="form__wrap">

        <form class="form form_grid" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

            <input type="hidden" name="subject" value="Табы" />
            <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
            <input type="hidden" name="notspam" value="" />

            <div class="form__row form__row_31">
                <div class="form__label"><span>Прикрепите файл с проектом</span></div>
                <label class="form__file_label" data-text="Файл не выбран">
                    <input type="file" name="file" />
                    <p class="form__file">Загрузить файл</p>
                </label>
            </div>
            <div class="form__row form__row_31">
                <div class="form__label"><span>Введите номер телефона</span></div>
                <input class="tel" type="tel" name="phone" required="required" placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
            </div>
            <div class="form__row form__row_38">
                <div class="form__label desktop"><span>Смета будет готова в течение 3-х рабочих
                        дней</span></div>
                <button class="btn btn_didisabled_js" type="submit"><span>Отправить
                        дизайн-проект</span><span>и получить смету</span></button>
            </div>
            <div class="form__row form__row_full form__row_mb0">
                <div class="form__privacy">
                    <label class="form__check">
                        <input class="check_checked_js" type="checkbox" checked="checked" /><span
                            class="snakeline">Нажимая кнопку вы
                            соглашаетесь с условиями <a href="#privacy" class="show_js">Политики
                                конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>