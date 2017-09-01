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
					"PATH" => "/includes/phone_1.php"
				));?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","footer_phone",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/phone_2.php"
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


<div class="modal-wrap" id="call-back">
	<div class="form-wrap">
		<div class="form">
			<h3>Оставьте ваши контактные данные</h3>
			<p>Специалист свяжется с вами в ближайшее время</p>
			<form class="ajax-form">
				<input type="text" class="input-text" placeholder="Ваше имя" data-req="true">
				<input type="text" class="input-text" placeholder="Номер телефона" data-req="true">
				<input type="text" class="input-text" placeholder="E-mail" data-req="true">
				<div class="btnwrap-center">
					<button class="btn btn--submit"><span>Отправить</span></button>
				</div>
				<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете согласие на обработку персональных данных.</span>
			</form>
		</div>
	</div>
</div>

</body>
</html>