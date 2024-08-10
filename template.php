<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<? if ($arResult["isFormNote"] != "Y") { ?>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title"><?=$arResult["FORM_TITLE"]?></div>
            <? if ($arResult["isFormDescription"] == "Y") { ?>
                <div class="contact-form__head-text"><?=$arResult["FORM_DESCRIPTION"]?></div>
            <? } ?>
        </div>
    <?=$arResult["FORM_HEADER"]?>
        <input type="hidden" name="web_form_submit" value="Y">
        <div class="contact-form__form">
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_name">
                        <div class="input__label-text">
                        <?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
                        <?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? '*' : '')?>
                        </div>
                    <input class="input__input" type="<?=$arResult["QUESTIONS"]["NAME"]["STRUCTURE"][0]["FIELD_TYPE"]?>" id="medicine_name" name="<?='form_'.$arResult["QUESTIONS"]["NAME"]["STRUCTURE"][0]["FIELD_TYPE"].'_'.$arResult["QUESTIONS"]["NAME"]["STRUCTURE"][0]["ID"]?>" value="">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_company">
                        <div class="input__label-text">
                        <?=$arResult["QUESTIONS"]['COMPANY']['CAPTION']?>
                        <?=($arResult["QUESTIONS"]['COMPANY']['REQUIRED'] === 'Y' ? '*' : '')?>
                        </div>
                    <input class="input__input" type="<?=$arResult["QUESTIONS"]["COMPANY"]["STRUCTURE"][0]["FIELD_TYPE"]?>" id="medicine_company" name="<?='form_'.$arResult["QUESTIONS"]["COMPANY"]["STRUCTURE"][0]["FIELD_TYPE"].'_'.$arResult["QUESTIONS"]["COMPANY"]["STRUCTURE"][0]["ID"]?>" value="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_email">
                        <div class="input__label-text">
                        <?=$arResult["QUESTIONS"]['EMAIL']['CAPTION']?>
                        <?=($arResult["QUESTIONS"]['EMAIL']['REQUIRED'] === 'Y' ? '*' : '')?>
                        </div>
                    <input class="input__input" type="<?=$arResult["QUESTIONS"]["EMAIL"]["STRUCTURE"][0]["FIELD_TYPE"]?>" id="medicine_email" name="<?='form_'.$arResult["QUESTIONS"]["EMAIL"]["STRUCTURE"][0]["FIELD_TYPE"].'_'.$arResult["QUESTIONS"]["EMAIL"]["STRUCTURE"][0]["ID"]?>" value="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_phone">
                        <div class="input__label-text">
                        <?=$arResult["QUESTIONS"]['PHONE']['CAPTION']?>
                        <?=($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? '*' : '')?>
                        </div>
                    <input class="input__input" type="<?=$arResult["QUESTIONS"]["PHONE"]["STRUCTURE"][0]["FIELD_TYPE"]?>" id="medicine_phone" name="<?='form_'.$arResult["QUESTIONS"]["PHONE"]["STRUCTURE"][0]["FIELD_TYPE"].'_'.$arResult["QUESTIONS"]["PHONE"]["STRUCTURE"][0]["ID"]?>" data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12" x-autocompletetype="phone-full" value="">
                    </label>
                </div>
            </div>
            <div class="contact-form__form-message">
                <div class="input">
                    <label class="input__label" for="medicine_message">
                        <div class="input__label-text">
                            <?=$arResult["QUESTIONS"]['MESSAGE']['CAPTION']?>
                            <?=($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? '*' : '')?>
                        </div>
                    <textarea class="input__input" type="<?=$arResult["QUESTIONS"]["MESSAGE"]["STRUCTURE"][0]["FIELD_TYPE"]?>" id="medicine_message" name="<?='form_'.$arResult["QUESTIONS"]["MESSAGE"]["STRUCTURE"][0]["FIELD_TYPE"].'_'.$arResult["QUESTIONS"]["MESSAGE"]["STRUCTURE"][0]["ID"]?>" value=""></textarea>
                    <div class="input__notification"></div>
                    </label>
                </div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных данных&raquo;.</div>
            <button class="form-button contact-form__bottom-button" data-success="Отправлено" data-error="Ошибка отправки">
                <div class="form-button__title"><?=$arResult["arForm"]["BUTTON"]?></div>
            </button>
            </div>
        </div>
    <?=$arResult["FORM_FOOTER"]?>
</div>

<? } else { ?>
	Данные формы были успешно отправлены!
<? } ?>