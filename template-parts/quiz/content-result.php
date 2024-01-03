<!-- start quiz-result-->
<div class="quiz-result bg">
    <div class="quiz-result__wrap">
        <div class="quiz-line">
            <div class="quiz-line__bg" style="width: 100%;"></div>
            <div class="quiz-line__text"><span class="quiz-line__label bold">Готово </span></div>
        </div>
        <div class="quiz-result__title"><span>Благодарим за ответы!</span></div>
        <div class="quiz-result__text"><span>Оставьте телефон — мы свяжемся с вами,<br> чтобы обсудить детали для
                составления точной<br> сметы и закрепим за вами выбранный подарок. </span></div>
        <div class="quiz-result__messenger">
            <div class="form form_sm">
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
                <div class="form__row form__row_phone_js">
                    <div class="form__label"><span>Введите номер телефона</span></div>
                    <input class="tel" type="tel" name="phone" required="required" placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
                </div>
                <div class="form__row form__row_hide form__row_email_js">
                    <div class="form__label"><span>Введите email</span></div>
                    <input type="email" name="email" placeholder="E-mail" />
                </div>
                <div class="form__row">
                    <button class="btn btn_didisabled_js" type="submit">Получить смету</button>
                </div>
                <div class="form__row form__row_mb0">
                    <div class="form__privacy">
                        <label class="form__check">
                            <input class="check_checked_js" type="checkbox" checked="checked" /><span
                                class="snakeline">Нажимая кнопку вы соглашаетесь с условиями<br> <a href="#"
                                    target="_blank" class="privacy_js">Политики конфиденциальности</a></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="quiz-result__phone bg"></div>
    </div>
</div>
<!-- end quiz-result-->