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
<section class="stone-slider-sec def-sec">
	<div class="stone-slider">

		<div class="wrapper">
			<div class="stone-slider__title">
				<h2 class="h1">Применение природного камня</h2>
			</div>
			<div class="stone-slider__nav">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<a href="#"><?=$arItem['NAME']?></a>
				<?endforeach;?>
			</div>
		</div>

		<div class="stone-slider__items">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 1000, "height" => 490), BX_RESIZE_IMAGE_EXACT, true);
				?>

				<div class="stone-slider__item" style="background-image: url('<?=$img['src']?>');">
					<img src="<?=$img['src']?>" alt="<?=$arItem['NAME']?>">
					<div class="stone-slider__item-info">
						<div class="user-content">
							<h3><?=$arItem['NAME']?></h3>
							<p><?=$arItem['PREVIEW_TEXT']?></p>
						</div>
					</div>
				</div>

			<?endforeach;?>
		</div>

		<div class="wrapper">
			<div class="stone-slider__more">
				<p>В каталоге вы найдете камни для решения всех задач</p>
				<a href="/catalog/" class="btn">Перейти в каталог</a>
			</div>
		</div>

	</div>
</section>
<? endif; ?>