<section class="footer-sec">
	<div class="row row--center footer">
		<div class="grid-3 grid-tabvert-12">
			<a href="/" class="footer__logo">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/logo-footer.svg" alt="Mirtash logotype">
			</a>
		</div>
		<div class="grid-6 grid-tabvert-8 grid-phone-12">
			<div class="footer__contact">
				<?/*$APPLICATION->IncludeComponent("bitrix:main.include","footer_phone",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/phone_1.php"
				));*/?>
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
				<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
				<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
				<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
				<input type="hidden" value="Новая заявка" name="form_subject">
				<div class="btnwrap-center">
					<button class="btn btn--submit"><span>Отправить</span></button>
				</div>
				<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете согласие на обработку персональных данных.</span>
			</form>
		</div>
	</div>
</div>



<div id="modal-thanks" class="modal-wrap">
	<div class="form">
		<h3>Спасибо за заявку!</h3>
	</div>
</div>


<div style="display: none">
	<script>
		(function(w, d, u, i, o, s, p) {
			if (d.getElementById(i)) { return; } w['MangoObject'] = o;
			w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
			s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
			p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
		}(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
		mgo({calltracking: {id: 15935, elements: [{"numberText":"78432661036"}]}});
	</script>​
</div>
<!-- Begin LeadBack code {literal} -->
<script>
	var _emv = _emv || [];
	_emv['campaign'] = '7ac52e3f2729d1c4d45d45e1';

	(function() {
		var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
		em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
	})();
</script>
<!-- End LeadBack code {/literal} -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'QBmZKZpH8i';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
s.src = '//code.jivosite.com/script/widget/'+widget_id
; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>