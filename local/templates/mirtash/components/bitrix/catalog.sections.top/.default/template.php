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


<section class="catalog-inner-sec">
	<div class="wrapper">
		<div class="catalog-inner">

	<?foreach($arResult["SECTIONS"] as $key => $arSection):?>

		<div class="catalog-inner__part">
			<h2 class="catalog-inner__part-title h1"><?=$arSection['NAME']?></h2>
			<div class="catalog-inner__items">

				<? foreach($arSection["ITEMS"] as $arElement): ?>
					<?
					$item_class = "";
					switch ($arElement['PROPERTIES']['LABLE']['VALUE_XML_ID']){
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
					<a href="<?=$arElement["DETAIL_PAGE_URL"];?>" class="catalog-inner__item <?=$item_class?>">
						<span class="catalog-inner__item-img">
						<? if (!empty($arElement["PREVIEW_PICTURE"]["SRC"])) : ?>
							<?
							$img = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"], array("width" => 250, "height" => 190), BX_RESIZE_IMAGE_EXACT, true);
							?>
							<img src="<?=$img['src']?>" alt="<?=$arElement['NAME']?>">
						<? endif; ?>
							<? if (!empty($arElement['PROPERTIES']['LABLE']['VALUE'])) : ?>
								<span class="catalog-inner__item-tag"><?=$arElement['PROPERTIES']['LABLE']['VALUE']?></span>
							<? endif; ?>
						</span>
						<span class="catalog-inner__item-title"><?=$arElement["NAME"];?></span>
						<? if (!empty($arElement['PROPERTIES']['PRICE']['VALUE'])) : ?>
							<span class="catalog-inner__item-price"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/icons/price.svg" alt=""><?=$arElement['PROPERTIES']['PRICE']['VALUE'];?> &#8381;</span>
						<? endif; ?>
					</a>
				<?endforeach?>

			</div>
		</div>

	<?endforeach?>

		</div>
	</div>
</section>
