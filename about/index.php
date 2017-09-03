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
</section>


<section class="about-info-sec def-sec">
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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/work-proccess-geo.png" alt="">
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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/work-proccess-excavator.png" alt="">
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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/work-proccess-otbor.png" alt="">
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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/work-proccess-saw.png" alt="">
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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/work-proccess-house.png" alt="">
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
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--about" data-src="img/form-stone.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-about.png" alt="">
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