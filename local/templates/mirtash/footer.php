<section class="footer-sec">
	<div class="row row--center footer">
		<div class="grid-3 grid-tabvert-12">
			<a href="/" class="footer__logo">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/logo-footer.svg" alt="Mirtash logotype">
			</a>
		</div>
		<div class="grid-6 grid-tabvert-8 grid-phone-12">
			<div class="footer__contact">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","footer_phone",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/phone_2.php"
				));?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","footer_phone",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/phone_1.php"
				));?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","footer_email",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/email.php"
				));?>
			</div>
		</div>
		<div class="grid-3 grid-tabvert-4 grid-phone-12">
			<div class="footer__copy">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/copyright.php"
				));?>
			</div>
		</div>
	</div>
</section>


<div class="modal-wrap form-wrap" id="call-back">
	<div class="form">
		<h3>Оставьте ваши контактные данные</h3>
		<p>Специалист свяжется с вами в ближайшее время</p>
		<form class="ajax-form">
			<input type="hidden" value="Обратная связь" name="form_subject">
			<input type="hidden" value="callback" name="target_id">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
			<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
			<div class="btnwrap-center">
				<button class="btn btn--submit"><span>Отправить</span></button>
			</div>
			<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете согласие на обработку персональных данных.</span>
		</form>
	</div>
</div>

<div class="modal-wrap form-wrap" id="modal-partner">
	<div class="form">
		<h3>Стать партнером</h3>
		<p>Специалист свяжется с вами в ближайшее время</p>
		<form class="ajax-form">
			<input type="hidden" value="Хочу стать партнером" name="form_subject">
			<input type="hidden" value="partner" name="target_id">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
			<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
			<div class="btnwrap-center">
				<button class="btn btn--submit"><span>Отправить</span></button>
			</div>
			<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете согласие на обработку персональных данных.</span>
		</form>
	</div>
</div>


<div id="modal-thanks" class="modal-wrap">
	<div class="form">
		<h3>Спасибо за заявку!</h3>
	</div>
</div>


<script>
var _emv = _emv || [];
_emv['campaign'] = '64ff30d936f1e12f838cade4';

(function() {
    var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
    em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
})();
</script>
<!-- End LeadBack code -->

</body>
</html>