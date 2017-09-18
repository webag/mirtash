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
<section class="palitra-sec def-sec">
	<div class="palitra-sec-bg"></div>
	<div class="wrapper">
		<div class="palitra">
			<div class="palitra__title">
				<h2 class="h1">Палитра нашей&nbsp;продукции</h2>
			</div>

<div class="palitra__slider">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 1000, "height" => 500), BX_RESIZE_IMAGE_EXACT, true);
		$img_min = CFile::ResizeImageGet($arItem["PROPERTIES"]["PALITRA_IMG"]["VALUE"], array("width" => 255, "height" => 255), BX_RESIZE_IMAGE_EXACT, true);
		?>

	<div class="palitra__slide" style="background-image: url('<?=$img['src']?>')">
		<img src="<?=$img['src']?>" class="palitra__slide-img-main" alt="">
		<img src="<?=$img_min['src']?>" alt="" class="palitra__slide-img-second">
		<div class="palitra__slide-info">
			<div class="user-content">
				<h3><?=$arItem['NAME']?></h3>
				<?=$arItem['PREVIEW_TEXT']?>
			</div>
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="palitra__slide-info-more">Подробнее</a>
			<div class="palitra__slide-counter">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>

	<?endforeach;?>

			</div>
		</div>
	</div><!-- wrapper -->
</section><!-- palitra-sec -->
<? endif; ?>