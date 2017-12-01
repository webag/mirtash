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
					<a href="https://yandex.ru/map-widget/v1/-/CBUNfZAmoB" class="main-head__contact-link" data-fancybox>Схема проезда</a>
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
						));?><br><?$APPLICATION->IncludeComponent("bitrix:main.include","simple_phone",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/phone_2.php"
						));?>
					</div>
					<a href="/contacts/" class="main-head__contact-link">Контакты</a>
				</div>
			</div>
			<div class="main-head__info">
				<div class="main-head__logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/logo.svg" alt="">
				</div>
				<div class="main-head__title">
					<h1>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/title.php"
						));?>
						<span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/home/title_sub.php"
							));?>
						</span>
					</h1>
				</div>
				<div class="main-head__items">
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-factory.svg" alt="">
						</div>
						<p>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/home/head_1.php"
							));?>
						</p>
					</div>
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-chain.svg" alt="">
						</div>
						<p>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/home/head_2.php"
							));?>
						</p>
					</div>
					<div class="main-head__item">
						<div class="main-head__item-img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-boxes.svg" alt="">
						</div>
						<p>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/home/head_3.php"
							));?>
						</p>
					</div>
				</div>
				<div class="main-head__video">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/main-head-stone.png" alt="">
					<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&autoplay=1&rel=0&controls=0&showinfo=0" data-fancybox>
						<em></em>
						<span>Смотреть видео</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="offers-sec def-sec-top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 279.7 246" class="stone stone__4" stroke="#017b62" stroke-width="2px" fill="none" width="280" height="246">
		<polyline class="s4_1" points="90.8,245 148.8,235.3 165.9,205.3 212,225.6 233.7,192.8 271.1,160.5 253.1,27.9 183.1,12.3 126.1,1 99.1,9.6 77.8,48.8 19.1,59.2 1,159.2 60.9,239.5 19.1,59.2 96.1,144 60.9,239.5 90.8,245 96.1,144 148.8,235.3 165.9,205.3 136.7,140.8 233.7,192.8 271.1,160.5 243.2,113.5 197.1,101.3 148.4,76 136.7,140.8 96.1,144 77.8,48.8 99.1,9.6 148.4,76 126.1,1 183.1,12.3 197.1,101.3 253.1,27.9 243.2,113.5"/>
		<polyline class="s4_2 hid" points="75.9,239.8 131.3,230.4 147.7,201.8 191.7,221.1 247.7,194.6 278.7,128.5 251.9,17.2 164.1,17.6 131.6,32.6 105.9,40.7 63.6,81 17.1,110.1 7.1,167.4 46.4,208.7 17.1,110.1 84.9,181.5 46.4,208.7 75.9,239.8 84.9,181.5 131.3,230.4 147.7,201.8 150.4,149.8 247.7,194.6 278.7,128.5 221.5,114.1 188,79.7 130.9,78.4 150.4,149.8 84.9,181.5 63.6,81 105.9,40.7 130.9,78.4 131.6,32.6 164.1,17.6 188,79.7 251.9,17.2 221.5,114.1"/>
		<polyline class="s4_3 hid" points="74.6,238 128.6,228.9 153.6,218 185.7,207.2 272.2,177 272.3,129.5 237.3,40.9 180.6,52.3 130.9,60.9 105.8,68.9 62.5,83.2 17.2,111.5 7.5,167.4 45.8,207.7 17.2,111.5 83.3,181.2 45.8,207.7 74.6,238 83.3,181.2 128.6,228.9 153.6,218 192.2,157.2 272.2,177 272.3,129.5 230.5,143.5 204.9,87.9 149.2,100.6 192.2,157.2 83.3,181.2 62.5,83.2 105.8,68.9 149.2,100.6 130.9,60.9 180.6,52.3 204.9,87.9 237.3,40.9 230.5,143.5"/>
	</svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.5 139.8" class="stone stone__5" stroke="#017b62" stroke-width="2px" fill="none" width="133" height="140">
		<polyline class="s5_1" points="38.7,46.9 70.2,40.9 131.5,105 62.2,103 1,104.2 38.7,46.9 22.5,24.7 76.4,1 131.5,105 69.2,132.7 1,104.2 22.5,24.7 76.4,1 70.2,40.9 62.2,103 69.2,132.7"/>
		<polyline class="s5_2 hid" points="84.2,60.2 115.7,53.4 131.5,104.7 67.3,110.8 28.6,109 84.2,60.2 59,37.3 130.2,8.3 131.5,104.7 68.2,138.8 28.6,109 59,37.3 130.2,8.3 115.7,53.4 67.3,110.8 68.2,138.8"/>
		<polyline class="s5_3 hid" points="66.6,83 92.1,62.6 130.8,95.4 70.3,113.1 29.3,112.6 66.6,83 53.8,48.3 91.6,23.4 130.8,95.4 70.6,138.8 29.3,112.6 53.8,48.3 91.6,23.4 92.1,62.6 70.3,113.1 70.6,138.8"/>
	</svg>
	<div class="wrapper">
		<div class="offers">
			<div class="offers__title">
				<h2 class="h1">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/pop_tile.php"
					));?>
				</h2>
				<p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/pop_subtitle.php"
					));?>
				</p>
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


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"home_palitra", 
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
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalogs",
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
			1 => "PALITRA_IMG",
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
		"COMPONENT_TEMPLATE" => "home_palitra",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "1",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000"
	),
	false
);?>


<section class="main-about-sec def-sec-top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.7 278.4" class="stone stone__3" stroke="#017b62" stroke-width="2px" fill="none" width="156" height="278">
		<polyline class="s3_1" points=" 13.2,186.7 2.2,24.4 98.8,1 51.4,28.1 2.2,24.4 31.4,66.5 51.4,28.1 58.4,53.7 31.4,66.5 40.4,187.4 13.2,186.7 4.1,230.3 40.4,187.4 54.2,223.3 4.1,230.3 18.8,258.5 78.1,277.4 120.8,271.9 150.6,206.4 108.4,222.3 101.4,251.5 78.1,277.4 54.2,223.3 78.4,178.4 87.6,107.7 58.4,53.7 79.2,43.4 87.6,107.7 120.7,78.3 98.8,1 79.2,43.4 120.7,78.3 154.7,41.3 98.8,1 141.2,4.8 154.7,41.3 150.6,206.4 120.7,78.3 108.4,222.3 78.4,178.4 78.1,277.4 	"/>
		<polyline class="s3_2 hid" points=" 5.8,191.9 12.1,41.6 75.3,1.9 50.4,38.9 12.1,41.6 44,61.6 50.4,38.9 65.1,58.6 44,61.6 46,204.9 5.8,191.9 1,231.3 46,204.9 51.4,228.2 1,231.3 36.8,269.3 78.8,276.4 120.4,263.9 145.3,236.9 111.8,222.3 105.1,252.3 78.8,276.4 51.4,228.2 85.4,198.9 87.8,69.9 65.1,58.6 86.1,34.3 87.8,69.9 119.4,67.3 75.3,1.9 86.1,34.3 119.4,67.3 131.8,33.9 75.3,1.9 112.8,3.8 131.8,33.9 145.3,236.9 119.4,67.3 111.8,222.3 85.4,198.9 78.8,276.4 	"/>
		<polyline class="s3_3 hid" points=" 24.7,200.5 26.2,58.9 73.7,8.5 51.3,50 26.2,58.9 45.5,68.8 51.3,50 65.3,66.7 45.5,68.8 41.9,209.5 24.7,200.5 24.7,229.3 41.9,209.5 49.2,234.8 24.7,229.3 69.8,274.6 78.4,277.4 88.2,274.7 132.2,223.9 107.5,228 101.4,248.3 78.4,277.4 49.2,234.8 82.1,233.3 83.8,65.5 65.3,66.7 80.3,37.8 83.8,65.5 111,59.8 73.7,8.5 80.3,37.8 111,59.8 130,53.3 73.7,8.5 73.7,8.5 130,53.3 132.2,223.9 111,59.8 107.5,228 82.1,233.3 78.4,277.4 	"/>
	</svg>
	<div class="wrapper">
		<div class="main-about">
			<div class="main-about__title fade-top">
				<h2 class="h1">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/about_title.php"
					));?>
				</h2>
				<p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/about_subtitle.php"
					));?>
				</p>
			</div>
			<div class="main-about__items row row--middle">
				<div class="main-about__item fade-top grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hand.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/about_1.php"
						));?>
					</div>
				</div>
				<div class="main-about__item fade-top grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-man-factory.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/about_2.php"
						));?>
					</div>
				</div>
				<div class="main-about__item fade-top grid-4 grid-phone-6 grid-phonemini-12">
					<div class="main-about__item-img">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/icon-hands-coub.svg" alt="">
					</div>
					<div class="main-about__item-text">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/home/about_3.php"
						));?>
					</div>
				</div>
			</div>
			<div class="center-btn">
				<a href="/about/" class="btn fade-top">Подбронее о компании</a>
			</div>
		</div>
	</div>
</section>


<section class="main-review-sec def-sec-bottom">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 123.5 140" class="stone stone__6" stroke="#017b62" stroke-width="2px" fill="none" width="124" height="140">
		<polyline class="s6_1" points="111.7,133.6 75.3,83.1 81.8,17.3 36,120.9 75.3,83.1 61.5,109.4 111.7,133.6 62.1,127.1 61.5,109.4 36,120.9 62.1,127.1 65.8,139 111.7,133.6 122.5,82.1 75.3,83.1 81.8,17.3 117.4,56.1 122.5,82.1 81.8,17.3 23.4,38.6 12.5,91.3 81.8,17.3 36,120.9 12.5,91.3 12.8,127 36,120.9 37.1,134.3 12.8,127 37.1,134.3 65.8,139"/>
		<polyline class="s6_2 hid" points="108.3,101.5 66.8,57.4 34.9,1 29.8,72.3 66.8,57.4 61.7,78 108.3,101.5 54.5,98.1 61.7,78 29.8,72.3 54.5,98.1 66.6,138.6 108.3,101.5 105.8,62.1 66.8,57.4 34.9,1 86.2,29.3 105.8,62.1 34.9,1 16.2,34.7 1,85.4 34.9,1 29.8,72.3 1,85.4 10.2,118.6 29.8,72.3 33.1,126.6 10.2,118.6 33.1,126.6 66.6,138.6"/>
		<polyline class="s6_3 hid" points="113.2,129.6 94.9,73 44.2,43.5 34.7,112.2 94.9,73 87.8,95.7 113.2,129.6 64.3,118 87.8,95.7 34.7,112.2 64.3,118 68.2,138.3 113.2,129.6 112.3,51.3 94.9,73 44.2,43.5 92.1,58.7 112.3,51.3 44.2,43.5 20.3,54.8 18.4,83.2 44.2,43.5 34.7,112.2 18.4,83.2 20.7,111.1 34.7,112.2 27.9,132.3 20.7,111.1 27.9,132.3 68.2,138.3"/>
	</svg>
	<div class="main-review__triangle-wrap">
		<div class="main-review__triangle">
			<img class="triangle-1 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-1.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-1.png">
			<img class="triangle-2 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-2.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-2.png">
			<img class="triangle-3 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-3.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-3.png">
			<img class="triangle-4 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-4.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-4.png">
			<img class="triangle-5 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-5.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-5.png">
			<img class="triangle-6 fade-top" src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-6.png" alt="" data-src="<?=SITE_TEMPLATE_PATH?>/img/main-review-triangle-6.png">
		</div>
	</div>
	<div class="wrapper">
		<div class="main-review">
			<div class="main-review__stone fade-top">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/main-about-stone.png" alt="">
			</div>

			<div class="main-review__title">
				<h2 class="h1">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/reviews_title.php"
					));?>
				</h2>
				<p>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/home/reviews_subtitle.php"
					));?>
				</p>
			</div>

			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"home_reviews",
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
					"IBLOCK_ID" => "6",
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
					"COMPONENT_TEMPLATE" => "home_reviews",
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


<section class="s-insta">
	<div class="wrapper">
		<h2 class="h1"><img src="<?=SITE_TEMPLATE_PATH?>/img/instagram.png" alt="1"></h2>
		<a class="insta-header" href="https://www.instagram.com/mirtash_kzn/" target="_blank">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/instalogo.jpg" alt="instalogo">
			<div class="insta-header__content">
				<span>mirtash_kzn</span>
			</div>
		</a>
		<div class="row" id="instafeed"></div>
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
				<img class="form-callback__stone form-callback__stone--main" data-src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" alt="">
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