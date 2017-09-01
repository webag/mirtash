<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>


<section class="contact-sec def-sec">
	<div class="wrapper">
		<div class="contact">
			<div class="row row--middle">
				<div class="grid-8 grid-tab-10 grid-phone-12">
					<div class="contact__title">
						<h1>MIRTASH<p>Студия природного камня</p></h1>
					</div>
					<div class="contact__info">
						<div class="contact__info-col">
							<div class="contact__info-block">
								<h3>Контакты</h3>
								<div class="contact__info-callback">
									<span>Звоните</span>
									<?$APPLICATION->IncludeComponent("bitrix:main.include","simple_phone",Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/phone_1.php"
									));?>
									<br>
									<?$APPLICATION->IncludeComponent("bitrix:main.include","simple_phone",Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/phone_2.php"
									));?>
								</div>
								<a href="#call-back" class="btn" data-fancybox>Обратная связь</a>
								<div class="contact__info-callback">
									<span>Пишите ваши вопросы и предложения</span>
									<?$APPLICATION->IncludeComponent("bitrix:main.include","simple_email",Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/email.php"
									));?>
								</div>
								<div class="contact__info-callback">
									<span>Мы в социальных сетях</span>
									<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/includes/socials.php"
									));?>
								</div>
							</div>
						</div>
						<div class="contact__info-col">
							<div class="contact__info-block">
								<h3>Главный офис</h3>
								<div class="user-content">
									<p>422700, Республика Татарстан, Казан, д. <br>Калинино, ул. Центральная, д. 101 <br>Время работы: 8:00 — 20:00</p>
								</div>
								<a href="https://yandex.ru/map-widget/v1/-/CBUNfZAmoB" class="contact__info-link" data-fancybox>Схема проезда</a>

								<div class="contact__info-requiz">
									<h3>Реквизиты</h3>
									<div class="user-content">
										<p>ИП Гайнуллина Лейсан </p>
										<b>Юридический адрес:</b>
										<p>422700, Республика Татарстан, Казан, д. Калинино, ул. Центральная, д. 101</p>
										<p>ОКПО 0123456789 <br>ОГРНИП 0123456789098765 <br>ИНН 123456789876</p>
									</div>
								</div>
								<a href="#" class="contact__info-link">Карта партнера</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>