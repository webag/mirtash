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


<section class="catalog-category-sec">

	<div class="wrapper">
		<div class="catalog-category">
			<div class="row row--middle">
				<div class="grid-8 grid-tabvert-10 grid-phone-12">
					<div class="catalog-category__title">
						<h1><?=$arResult["NAME"]?></h1>
						<p><?=$arResult["DESCRIPTION"]?></p>
					</div>
				</div>
			</div>
			<div class="catalog-category__link-list">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<a href="#cat-item-<?=$arItem['ID']?>" class="catalog-category__link scrollto"><span><?=$arItem["NAME"]?></span></a>
				<?endforeach;?>
			</div>
		</div>
	</div>

	<div class="catalog-category__list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$bg_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 1920, "height" => 900), BX_RESIZE_IMAGE_EXACT, true);
			?>
		<div class="catalog-category__item-wrap" id="cat-item-<?=$arItem['ID']?>" style="background-image: url(<?=$bg_img['src']?>);">
			<div class="catalog-category__item wrapper">
				<div class="catalog-category__item-title fade-top">
					<h3><?=$arItem["NAME"]?></h3>
					<div class="catalog-category__item-title-cats">
						<? foreach ($arItem['PROPERTIES']['TYPE']['VALUE'] as $type) : ?>
							<span><?=$type?></span>
						<? endforeach; ?>
					</div>
				</div>
				<div class="catalog-category__item-descr fade-top">
					<?=$arItem["PREVIEW_TEXT"]?>
				</div>
				<div class="center-btn fade-top">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn btn--middle">Подробнее</a>
				</div>
			</div>
			<a href="#" class="catalog-category__item-next fade-top scrollto"></a>
		</div>
		<?endforeach;?>
	</div>

</section>


