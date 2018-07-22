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
$this->setFrameMode(true);?>

<div class="catalog__items row">
	<? foreach ($arResult['SECTIONS'] as &$arSection):?>
		<?
		$resize_img = CFile::ResizeImageGet($arSection['PICTURE']['ID'], array("width" => 480, "height" => 320), BX_RESIZE_IMAGE_EXACT, true, array());
		?>
		<div class="grid-4">
			<a class="catalog__item" href="<?=$arSection['SECTION_PAGE_URL']?>">
				<img src="<?=$resize_img['src']?>" alt="<?=$arSection['NAME']?>">
				<div class="catalog__item-info">
					<span><?=$arSection['NAME']?></span>
				</div>
			</a>
		</div>
	<? endforeach;?>
</div>