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
<div class="main-review__items row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="main-review__item grid-3 grid-tab-4 grid-phone-6 grid-phonemini-12">
			<div class="main-review__item-text">
				<p>«<?=$arItem['PREVIEW_TEXT']?>»</p>
			</div>
			<div class="main-review__item-about">
				<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem['~NAME']?>">
				<? endif; ?>
				<span><?=$arItem['~NAME']?></span>
			</div>
		</div>
	<?endforeach;?>
</div>
<? endif; ?>