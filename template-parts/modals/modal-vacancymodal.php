<!-- Begin Modal vacancymodal-->
<div class="modal fade vacancymodal" id="vacancymodal">
    <div class="modal-dialog">
        <div class="modal-content bg"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <div class="modal-header">
                <div class="modal-title"><span>Оставьте свой<br> отклик на вакансию</span></div>
            </div>
            <div class="modal-body">
                <div class="modal-form">
                    <form class="form" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

                        <input type="hidden" name="subject" value="Отклик на вакансию (модальное окно)" />
                        <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
                        <input type="hidden" name="notspam" value="" />


                        <div class="form__row">
                            <div class="form__label"><span>Прикрепите резюме, если есть</span></div>
                            <label class="form__file_label" data-text="Файл не выбран">
                                <input type="file" name="file" />
                                <p class="form__file">Загрузить файл</p>
                            </label>
                        </div>
                        <div class="form__row">
                            <div class="form__label"><span>Введите номер телефона</span></div>
                            <input class="tel" type="tel" name="phone" required="required"
                                placeholder="+7 ( _ _ _ ) - _ _ _ - _ _ - _ _" />
                        </div>
                        <div class="form__row">
                            <button class="btn btn_didisabled_js" type="submit"><span>Оставьте отклик</span></button>
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
<!-- End modal vacancymodal-->