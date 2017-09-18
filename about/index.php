<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>


<section class="about-header-sec">
	<div class="wrapper">
		<div class="row row--middle about-header">
			<div class="grid-9 grid-phone-12">
				<div class="about-header__title">
					<h1>О КОМПАНИИ</h1>
					<div class="about-header__title-fact">
						<p><span>></span><b><?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/about/tonn_num.php"
								));?></b> тонн</p>
					</div>
					<span class="about-header__title-descr">Камней добыто за время работы компании</span>
				</div>
			</div>
		</div>
	</div>

	<a href="#about_second" class="about-down-link scrollto">
		<svg viewBox="0 0 100 100">
			<path d="M 15,50 L 40,75 L 50,75 L 25,50  L 50,25 L 40,25 Z"></path>
		</svg>
	</a>
</section>


<section class="about-info-sec def-sec" id="about_second">
	<div class="wrapper">
		<div class="about-info">
			<div class="row">
				<div class="grid-6 grid-phone-12">
					<div class="about-info__text-col fade-top">
						<div class="about-info__text user-content">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/about/main_text.php"
							));?>
						</div>
						<div class="about-info__text-fact fade-top">
							<span><b>></b><?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/includes/about/part_num.php"
								));?></span>
							<p>партнеров по всей России</p>
						</div>
						<div class="about-info__map fade-top">
							<span class="dot dot--1"></span>
							<span class="dot dot--2"></span>
							<span class="dot dot--3"></span>
							<span class="dot dot--4"></span>
							<span class="dot dot--5"></span>
							<span class="dot dot--6"></span>
							<span class="dot dot--7"></span>
							<span class="dot dot--8"></span>
							<span class="dot dot--9"></span>
							<span class="dot dot--10"></span>
							<span class="dot dot--11"></span>
							<span class="dot dot--12"></span>
							<span class="dot dot--13"></span>
							<span class="dot dot--14"></span>
							<span class="dot dot--15"></span>
							<span class="dot dot--16"></span>
							<span class="dot dot--17"></span>
							<span class="dot dot--18"></span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/about-map.svg" alt="">
						</div>
					</div>
				</div>
				<div class="grid-6 grid-phone-12">
					<div class="about-info__facts">
						<div class="about-info__fact fade-top">
							<p>Работаем</p>
							<span>c 2014 года</span>
						</div>
						<div class="about-info__fact fade-top">
							<p>Добываем более</p>
							<span>150 000 тонн камня в год</span>
						</div>
						<div class="about-info__fact fade-top">
							<p>Реализуем плитняк на</p>
							<span>50 000 м<sup>2</sup> в год</span>
						</div>
						<div class="about-info__fact fade-top">
							<p>В команде более</p>
							<span>20 специалистов</span>
						</div>
						<div class="about-info__fact fade-top">
							<p>Минимальная партия —</p>
							<span>1 штука</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"about_slider",
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
		"IBLOCK_ID" => "3",
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
			1 => "",
			2 => "",
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



<section class="work-proccess-sec def-sec">
	<div class="wrapper">
		<h3 class="title-block h1">Процесс работы</h3>
		<div class="row row--middle work-proccess">
			<div class="grid-4 grid-phone-12 work-proccess__item-wrap">
				<div class="work-proccess__item fade-top">
					<div class="work-proccess__item-count"><span>1</span></div>
					<p class="work-proccess__item-title">Геологоразведочные работы</p>
					<div class="work-proccess__item-img">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-geo-1.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-geo-2.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-geo-3.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-geo-4.svg" alt="">
						<img class="work-icon active" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-geo-5.svg" alt="">
					</div>
					<div class="work-proccess__item-text user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/step_1.php"
						));?>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-phone-12 work-proccess__item-wrap">
				<div class="work-proccess__item fade-top">
					<div class="work-proccess__item-count"><span>2</span></div>
					<p class="work-proccess__item-title">Работы по вскрытию</p>
					<div class="work-proccess__item-img">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-exc-1.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-exc-2.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-exc-3.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-exc-4.svg" alt="">
						<img class="work-icon active" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-exc-5.svg" alt="">
					</div>
					<div class="work-proccess__item-text user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/step_2.php"
						));?>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-phone-12 work-proccess__item-wrap">
				<div class="work-proccess__item fade-top">
					<div class="work-proccess__item-count"><span>3</span></div>
					<p class="work-proccess__item-title">Ручной отбор камней</p>
					<div class="work-proccess__item-img">
						<img class="work-icon work-icon--otb" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-otb-1.svg" alt="">
						<img class="work-icon work-icon--otb" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-otb-2.svg" alt="">
						<img class="work-icon work-icon--otb" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-otb-3.svg" alt="">
						<img class="work-icon work-icon--otb" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-otb-4.svg" alt="">
						<img class="work-icon work-icon--otb active" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-otb-5.svg" alt="">
					</div>
					<div class="work-proccess__item-text user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/step_3.php"
						));?>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-phone-12 work-proccess__item-wrap">
				<div class="work-proccess__item fade-top">
					<div class="work-proccess__item-count"><span>4</span></div>
					<p class="work-proccess__item-title">Обработка камней</p>
					<div class="work-proccess__item-img">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-saw-1.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-saw-2.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-saw-3.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-saw-4.svg" alt="">
						<img class="work-icon active" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-saw-5.svg" alt="">
					</div>
					<div class="work-proccess__item-text user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/step_4.php"
						));?>
					</div>
				</div>
			</div>
			<div class="grid-4 grid-phone-12 work-proccess__item-wrap">
				<div class="work-proccess__item fade-top">
					<div class="work-proccess__item-count"><span>5</span></div>
					<p class="work-proccess__item-title">Готовая продукция</p>
					<div class="work-proccess__item-img">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-home-1.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-home-2.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-home-3.svg" alt="">
						<img class="work-icon" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-home-4.svg" alt="">
						<img class="work-icon active" src="<?=SITE_TEMPLATE_PATH?>/img/svg/work-home-5.svg" alt="">
					</div>
					<div class="work-proccess__item-text user-content">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/about/step_5.php"
						));?>
					</div>
				</div>
			</div>
		</div>
		<div class="center-btn">
			<p>
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/about/order_call.php"
				));?>
			</p>
			<a href="/catalog/" class="btn">Перейти в каталог</a>
		</div>
	</div>
</section>


<section class="form-callback-sec form-callback-sec--about">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.2 312.1" class="stone stone__2" stroke="#017b62" stroke-width="2px" fill="none" width="227" height="312">
		<polyline class="s2_1" points="51,68.2 50.9,126.5 55.9,160.6 54.3,288.3 90.6,307.4 106.2,311.1 207.8,271 202.6,227.7 201.5,182.3 191.9,131.3 189.3,69.6 191.8,49.8 130.8,25.1 75.1,62.5 191.8,49.8 97.8,97.1 75.1,62.5 51,68.2 97.8,97.1 50.9,126.5 55.9,160.6 90.8,190.7 90.6,307.4 106.2,311.1 112.2,265.6 159.5,236.1 149.6,159.6 90.8,190.7 97.8,97.1 189.3,69.6 191.9,131.3 149.6,159.6 201.5,182.3 202.6,227.7 159.5,236.1 207.8,271 112.2,265.6 "/>
		<polyline class="s2_2 hid" points="54,67.8 41.7,150.3 63.8,158.8 48.6,281.7 95.3,308.4 107.6,305.8 226.2,259.1 201.7,189.4 215,128.1 190.5,120.9 208.2,83.3 197.9,13 135,20 76.6,53 197.9,13 115,84.8 76.6,53 54,67.8 115,84.8 41.7,150.3 63.8,158.8 98.3,184.4 95.3,308.4 107.6,305.8 110.6,270.3 159.7,235.2 163,182.4 98.3,184.4 115,84.8 208.2,83.3 190.5,120.9 163,182.4 215,128.1 201.7,189.4 159.7,235.2 226.2,259.1 110.6,270.3 "/>
		<polyline class="s2_3 hid" points="1,98.8 46.7,150.3 40.8,188.8 53.6,281.7 89.3,303.4 107.6,310.8 215.2,284.1 201.7,196.4 215,137.1 206.5,104.9 197.2,83.3 186.9,13 124,1 6.6,63 186.9,13 96,72.8 6.6,63 1,98.8 96,72.8 46.7,150.3 40.8,188.8 97.3,170.4 89.3,303.4 107.6,310.8 132.6,281.3 144.7,226.2 151,171.4 97.3,170.4 96,72.8 197.2,83.3 206.5,104.9 151,171.4 215,137.1 201.7,196.4 144.7,226.2 215.2,284.1 132.6,281.3 "/>
	</svg>
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--about" data-src="<?=SITE_TEMPLATE_PATH?>/img/form-stone.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-about.png" alt="">
			</div>
			<div class="grid-5 grid-tabvert-6 grid-phone-12 form-callback__right">
				<div class="form-wrap">
					<div class="form">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.5 139.8" class="stone stone__5" stroke="#017b62" stroke-width="2px" fill="none" width="133" height="140">
							<polyline class="s5_1" points="38.7,46.9 70.2,40.9 131.5,105 62.2,103 1,104.2 38.7,46.9 22.5,24.7 76.4,1 131.5,105 69.2,132.7 1,104.2 22.5,24.7 76.4,1 70.2,40.9 62.2,103 69.2,132.7"/>
							<polyline class="s5_2 hid" points="84.2,60.2 115.7,53.4 131.5,104.7 67.3,110.8 28.6,109 84.2,60.2 59,37.3 130.2,8.3 131.5,104.7 68.2,138.8 28.6,109 59,37.3 130.2,8.3 115.7,53.4 67.3,110.8 68.2,138.8"/>
							<polyline class="s5_3 hid" points="66.6,83 92.1,62.6 130.8,95.4 70.3,113.1 29.3,112.6 66.6,83 53.8,48.3 91.6,23.4 130.8,95.4 70.6,138.8 29.3,112.6 53.8,48.3 91.6,23.4 92.1,62.6 70.3,113.1 70.6,138.8"/>
						</svg>
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