<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<section class="catalog-head-sec">
	<div class="wrapper">
		<div class="catalog-head">
			<p class="h3">Каталог Mirtash</p>
			<div class="catalog-head__links">

				<? if(CSite::InDir('/catalog/ready/index.php')): ?>
					<a href="/catalog/ready/" class="catalog-head__link active"><span>Обработанные камни</span></a>
				<? else:?>
					<a href="/catalog/ready/" class="catalog-head__link"><span>Обработанные камни</span></a>
				<? endif;?>

				<? if(CSite::InDir('/catalog/unready/index.php')): ?>
					<a href="/catalog/unready/" class="catalog-head__link active"><span>Необработанные камни</span></a>
				<? else:?>
					<a href="/catalog/unready/" class="catalog-head__link"><span>Необработанные камни</span></a>
				<? endif;?>
			</div>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.sections.top",
	".default",
	array(
		"ACTION_VARIABLE" => "action",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "50",
		"ELEMENT_SORT_FIELD" => "SORT",
		"ELEMENT_SORT_FIELD2" => "ACTIVE_FROM",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"IBLOCK_TYPE" => "catalogs",
		"LINE_ELEMENT_COUNT" => "3",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "LABLE",
			1 => "PRICE",
		),
		"SECTION_COUNT" => "20",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_SORT_FIELD" => "sort",
		"SECTION_SORT_ORDER" => "asc",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PRICE_COUNT" => "1",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => ""
	),
	false
);?>


<section class="form-callback-sec form-callback-sec--catalog">
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--catalog" data-src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-catalog.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-catalog.png" alt="">
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
							<input type="hidden" value="consult" name="target_id">
							<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
							<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
							<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							<input type="hidden" value="Получить консультацию" name="form_subject">
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