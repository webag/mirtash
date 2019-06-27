<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
$item_class = "";
switch ($arResult['PROPERTIES']['LABLE']['VALUE_XML_ID']){
	case '1':
		$item_class = "catalog-inner__item--pink";
		break;
	case '2':
		$item_class = "catalog-inner__item--blue";
		break;
	case '3':
		$item_class = "catalog-inner__item--yellow";
		break;
}
?>

<a href="<?= $arResult['DETAIL_PAGE_URL'] ?>" class="catalog-inner__item <?=$item_class?>">

	<div class="catalog-inner__item-img">
		<? if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])) : ?>
			<?
			$img = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"], array("width" => 250, "height" => 190), BX_RESIZE_IMAGE_EXACT, true);
			?>
			<img src="<?= $img['src'] ?>" alt="<?= $arResult['NAME'] ?>">
		<? endif; ?>
		<? if (!empty($arResult['PROPERTIES']['LABLE']['VALUE'])) : ?>
			<div class="catalog-inner__item-tag"><?=$arResult['PROPERTIES']['LABLE']['VALUE']?></div>
		<? endif; ?>
	</div>

	<div class="catalog-inner__item-title"><?= $arResult['NAME'] ?></div>

	<? if (!empty($arResult['PROPERTIES']['PRICE']['VALUE'])) : ?>
		<div class="catalog-inner__item-price">
			<img src="<?=SITE_TEMPLATE_PATH ?>/img/svg/icons/price.svg" alt="">
			<?= $arResult['PROPERTIES']['PRICE']['VALUE']; ?> &#8381;
			<? if (!empty($arResult["PROPERTIES"]["EDIN"]["VALUE"])) : ?>
				/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?>
			<? endif; ?>
		</div>
	<? endif; ?>
</a>


<? //echo '<pre>'; print_r($arResult); echo '</pre>'; ?>