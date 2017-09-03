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
<section class="about-gallery-sec def-sec">
	<div class="about-gallery">
		<h3 class="title-block h1">Галерея</h3>
		<div class="about-gallery__slider">

			<?foreach($arResult["ITEMS"] as $arItem):?>

				<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
					<?
					$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 990, "height" => 595), BX_RESIZE_IMAGE_EXACT, true);
					?>
					<div class="about-gallery__slide">
						<img src="<?=$img['src']?>" alt="О компании">
					</div>
				<? endif; ?>

			<?endforeach;?>

		</div>
	</div>
</section>
<? endif; ?>