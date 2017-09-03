<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Mirtash - студия натурального камня");
?>


<section class="main-head-sec">
	<div class="wrapper">
		<div class="main-head">
			<div class="main-head__contact">
				<div class="main-head__contact-item">
					<p class="main-head__contact-adress">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/address-work.php"
						));?>
					</p>
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


<section class="offers-sec def-sec-top">
	<div class="wrapper">
		<div class="offers">
			<div class="offers__title">
				<h2 class="h1">Популярные предложения</h2>
				<p>Даже самые востребованные позиции всегда есть в наличии</p>
			</div>

			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"home_offers",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_ELEMENT_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"BROWSER_TITLE" => "-",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"ELEMENT_CODE" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "site_info",
					"IBLOCK_URL" => "",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Страница",
					"PROPERTY_CODE" => array(
						0 => "TRIGGERS",
						1 => "LINK",
						2 => "LABEL_TEXT",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_CANONICAL_URL" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"STRICT_SECTION_CHECK" => "N",
					"USE_PERMISSIONS" => "N",
					"USE_SHARE" => "N",
					"COMPONENT_TEMPLATE" => "related",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER2" => "DESC",
					"FILTER_NAME" => "",
					"CACHE_FILTER" => "N",
					"PREVIEW_TRUNCATE_LEN" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000"
				),
				false
			);?>

		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"home_usage",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "site_info",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "related",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000"
	),
	false
);?>


<section class="main-about-sec def-sec-top">
	<div class="wrapper">
		<div class="main-about">
			<div class="main-about__title">
				<h2 class="h1">О КОМПАНИИ</h2>
				<p>Компания MIRTASH занимается добычей, обработкой и продажей натурального камня.</p>
			</div>
			<div class="main-about__items row row--middle">
				<div class="main-about__item grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hand.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<span>Предлагаем качественный камень</span>
						<p>Мы предлагаем камень разного цвета и плотности, добытый из проверенных нами месторождений. Он безопасен и экологичен: в нем нет токсичных примесей или радиационного фона. </p>
					</div>
				</div>
				<div class="main-about__item grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-man-factory.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<span>Сами производим изделия</span>
						<p>Полученный материал мы обрабатываем на шведском и итальянском оборудовании в брусчатку, плитку и другие изделия. Поэтому гарантируем качество каждого изделия.</p>
					</div>
				</div>
				<div class="main-about__item grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hands-coub.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<span>Предлагаем отличный сервис</span>
						<p>Запас продукции всегда хранится на складе, чтобы вы могли сразу же забрать нужную партию. Если вы найдете в партии битый камень, мы заменим его.</p>
					</div>
				</div>
			</div>
			<div class="center-btn">
				<a href="/about/" class="btn">Подбронее о компании</a>
			</div>
		</div>
	</div>
</section>


<section class="main-review-sec def-sec-bottom">
	<div class="main-review__triangle-wrap">
		<div class="main-review__triangle">
			<img class="triangle-1 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-1.png" alt="" data-src="img/main-review-triangle-1.png">
			<img class="triangle-2 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-2.png" alt="" data-src="img/main-review-triangle-2.png">
			<img class="triangle-3 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-3.png" alt="" data-src="img/main-review-triangle-3.png">
			<img class="triangle-4 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-4.png" alt="" data-src="img/main-review-triangle-4.png">
			<img class="triangle-5 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-5.png" alt="" data-src="img/main-review-triangle-5.png">
			<img class="triangle-6 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-6.png" alt="" data-src="img/main-review-triangle-6.png">
		</div>
	</div>
	<div class="wrapper">
		<div class="main-review">
			<div class="main-review__stone fade-top">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/main-about-stone.png" alt="">
			</div>

			<div class="main-review__title">
				<h2 class="h1">Отзывы</h2>
				<p>За время работы компания обрела постоянных клиентов и зарекомендовала себя только как ответственный партнер</p>
			</div>
			<div class="main-review__items row">
				<div class="main-review__item grid-3 grid-tab-4 grid-phone-6 grid-phonemini-12">
					<div class="main-review__item-text">
						<p>«Благодарю компанию MIRTASH за внимание к клиенту. Менеджеры помогли мне разобраться в видах камня и выбрать брусчатку для загородного дома»</p>
					</div>
					<div class="main-review__item-about">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/main-review-item-1.png" alt="">
						<span>Михаил Самогин</span>
					</div>
				</div>
				<div class="main-review__item grid-3 grid-tab-4 grid-phone-6 grid-phonemini-12">
					<div class="main-review__item-text">
						<p>«Камень отличный. Я использую его в проектах по ландшафтному дизайну у своих клиентов. Мои заказы всегда есть на складе, не приходится ждать партии»</p>
					</div>
					<div class="main-review__item-about">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/main-review-item-2.png" alt="">
						<span>Евгения Дердышева</span>
					</div>
				</div>
				<div class="main-review__item grid-3 grid-tab-4 grid-phone-6 grid-phonemini-12">
					<div class="main-review__item-text">
						<p>«Мне всегда отгружают партию день в день. Ни одного битого камня, пустот нет. По квадратуре всегда хватает, без обмана. Качество всегда хорошее»</p>
					</div>
					<div class="main-review__item-about">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/main-review-item-3.png" alt="">
						<span>Марат Камалеев</span>
					</div>
				</div>
			</div>
		</div>
	</div><!-- wrapper -->
</section><!-- main-review-sec -->

<section class="form-callback-sec form-callback-sec--main">
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--main" data-src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" alt="">
			</div>
			<div class="grid-5 grid-tabvert-6 grid-phone-12 form-callback__right">
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
		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>