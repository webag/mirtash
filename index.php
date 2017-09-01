<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Mirtash - студия натурального камня");
?>


<section class="main-head-sec">
	<div class="wrapper">
		<div class="main-head">
			<div class="main-head__contact">
				<div class="main-head__contact-item">
					<p class="main-head__contact-adress">д. Калинино, ул. Центральная, д. 101<br>Режим работы: 8:00 – 20:00</p>
					<a href="#" class="main-head__contact-link">Схема проезда</a>
				</div>
				<div class="main-head__contact-item">
					<div class="main-head__contact-soc">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/socials.php"
						));?>
					</div>
					<div class="main-head__contact-tel">
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
					<a href="/contacts/" class="main-head__contact-link">Контакты</a>
				</div>
			</div>
			<div class="main-head__info">
				<div class="main-head__logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo-main.png" alt="">
				</div>
				<div class="main-head__title">
					<h1>Натуральный природный камень от российского производителя<span>для отделки и благоустройства территории</span></h1>
				</div>
				<div class="main-head__items">
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-factory.svg" alt="">
						</div>
						<p>Собственное производство в&nbsp;Казани</p>
					</div>
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-chain.svg" alt="">
						</div>
						<p>Обработанный материал и&nbsp;изделия на&nbsp;заказ</p>
					</div>
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-boxes.svg" alt="">
						</div>
						<p>Запас продукции всегда в&nbsp;наличии</p>
					</div>
				</div>
				<div class="main-head__video">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/main-head-stone.png" alt="">
					<a href="#">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/icon-video-play.png" alt="">
						<span>Смотреть видео</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="offers-sec">
	<div class="wrapper">
		<div class="offers">
			<div class="offers__title">
				<h2></h2>
				<p></p>
			</div>
			<div class="offers__items">
				<div class="offers__item row">
					<div class="offers__item-img grid-4">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/offers-item-1.jpg" alt="">
					</div>
					<div class="offers__item-info grid-7">
						<p class="offers__item-info-title">
						<h4>Известняковый щебень</h4>
						<span>Продукция</span>
						</p>
						<div class="user-content">
							<p>Мы производим доломитовый (известняковый) щебень и реализуем его с доставкой по всей России.</p>
							<ul>
								<li>
									<h5>Востребованные фракции.</h5>
									<span>Мы предлагаем щебень трех фракций: 5-20, 20-40, 40-70. </span>
								</li>
								<li>
									<h5>Высокая марка прочности.</h5>
									<span>Вы получите щебень маркой прочности М600–М800.</span>
								</li>
								<li>
									<h5>Подтвержденное качество.</h5>
									<span>Мы получили лицензии и результаты лабораторной экспертизы по нашему щебню.</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="center-btn">
					<a href="#" class="btn">Перейти в каталог</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="form-callback-sec form-callback-sec--main">
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--main" data-src="img/form-stone-main.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" alt="">
			</div>
			<div class="grid-5 grid-tabvert-6 grid-phone-12 form-callback__right">
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
		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>