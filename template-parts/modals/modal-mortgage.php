<!-- Begin Modal mortgage-->
<div class="modal fade mortgage" id="mortgage">
    <div class="modal-dialog">
        <div class="modal-content bg"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <div class="modal-header">
                <div class="modal-title"><span>Узнайте условия<br> строительства своего<br> дома в ипотеку
                    </span><small>Введите номер — позвоним вам<br> в течение 10 минут в рабочее время</small></div>
            </div>
            <div class="modal-body">
                <div class="modal-form">
                    <form class="form" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">
                        <input type="hidden" name="subject" value="Узнайте условия строительства своего дома в ипотеку (модальное окно)" />
                        <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
                        <input type="hidden" name="notspam" value="" />


                        <div class="form__row">
                            <div class="form__label"><span>Введите номер телефона</span></div>
                            <input class="tel" type="tel" name="phone" required="required"
                                placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
                        </div>
                        <div class="form__row">
                            <button class="btn btn_didisabled_js" type="submit"><span>Позвоните мне</span></button>
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
            </div>
        </div>
    </div>
</div>
<!-- End modal mortgage-->