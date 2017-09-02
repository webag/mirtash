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


<? if (!empty($arResult["ITEMS"])) : ?>
<section class="catalog-inner-sec">
	<div class="wrapper">
		<div class="catalog-inner">
			<div class="catalog-inner__part">
				<h2 class="catalog-inner__part-title">Похожая продукция</h2>
				<div class="catalog-inner__items">

					<?foreach($arResult["ITEMS"] as $arItem):?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="catalog-inner__item">
							<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
								<?
								$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 250, "height" => 190), BX_RESIZE_IMAGE_EXACT, true);
								?>
							<span class="catalog-inner__item-img">
								<img src="<?=$img['src']?>" alt="<?=$arItem['NAME']?>">
							</span>
							<? endif; ?>
							<span class="catalog-inner__item-title"><?=$arItem['NAME']?></span>
						</a>
					<?endforeach;?>

				</div>
			</div>
		</div>
	</div>
</section>
<? endif; ?>