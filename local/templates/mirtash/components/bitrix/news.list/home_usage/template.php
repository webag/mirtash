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
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 140" class="stone stone__6" stroke="#017b62" stroke-width="2" fill="rgba(0,0,0,0)" width="124" height="140">
		<polyline class="s6_1 hid" points="111.7,133.6 75.3,83.1 81.8,17.3 36,120.9 75.3,83.1 61.5,109.4 111.7,133.6 62.1,127.1 61.5,109.4 36,120.9 62.1,127.1 65.8,139 111.7,133.6 122.5,82.1 75.3,83.1 81.8,17.3 117.4,56.1 122.5,82.1 81.8,17.3 23.4,38.6 12.5,91.3 81.8,17.3 36,120.9 12.5,91.3 12.8,127 36,120.9 37.1,134.3 12.8,127 37.1,134.3 65.8,139"/>
		<polyline class="s6_2 hid" points="108.3,101.5 66.8,57.4 34.9,1 29.8,72.3 66.8,57.4 61.7,78 108.3,101.5 54.5,98.1 61.7,78 29.8,72.3 54.5,98.1 66.6,138.6 108.3,101.5 105.8,62.1 66.8,57.4 34.9,1 86.2,29.3 105.8,62.1 34.9,1 16.2,34.7 1,85.4 34.9,1 29.8,72.3 1,85.4 10.2,118.6 29.8,72.3 33.1,126.6 10.2,118.6 33.1,126.6 66.6,138.6"/>
		<polyline class="s6_3 " points="113.2,129.6 94.9,73 44.2,43.5 34.7,112.2 94.9,73 87.8,95.7 113.2,129.6 64.3,118 87.8,95.7 34.7,112.2 64.3,118 68.2,138.3 113.2,129.6 112.3,51.3 94.9,73 44.2,43.5 92.1,58.7 112.3,51.3 44.2,43.5 20.3,54.8 18.4,83.2 44.2,43.5 34.7,112.2 18.4,83.2 20.7,111.1 34.7,112.2 27.9,132.3 20.7,111.1 27.9,132.3 68.2,138.3"/>
	</svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.2 312.1" class="stone stone__2" stroke="#017b62" stroke-width="2px" fill="none" width="227" height="312">
		<polyline class="s2_1 hid" points="51,68.2 50.9,126.5 55.9,160.6 54.3,288.3 90.6,307.4 106.2,311.1 207.8,271 202.6,227.7 201.5,182.3 191.9,131.3 189.3,69.6 191.8,49.8 130.8,25.1 75.1,62.5 191.8,49.8 97.8,97.1 75.1,62.5 51,68.2 97.8,97.1 50.9,126.5 55.9,160.6 90.8,190.7 90.6,307.4 106.2,311.1 112.2,265.6 159.5,236.1 149.6,159.6 90.8,190.7 97.8,97.1 189.3,69.6 191.9,131.3 149.6,159.6 201.5,182.3 202.6,227.7 159.5,236.1 207.8,271 112.2,265.6 "/>
		<polyline class="s2_2" points="54,67.8 41.7,150.3 63.8,158.8 48.6,281.7 95.3,308.4 107.6,305.8 226.2,259.1 201.7,189.4 215,128.1 190.5,120.9 208.2,83.3 197.9,13 135,20 76.6,53 197.9,13 115,84.8 76.6,53 54,67.8 115,84.8 41.7,150.3 63.8,158.8 98.3,184.4 95.3,308.4 107.6,305.8 110.6,270.3 159.7,235.2 163,182.4 98.3,184.4 115,84.8 208.2,83.3 190.5,120.9 163,182.4 215,128.1 201.7,189.4 159.7,235.2 226.2,259.1 110.6,270.3 "/>
		<polyline class="s2_3 hid" points="1,98.8 46.7,150.3 40.8,188.8 53.6,281.7 89.3,303.4 107.6,310.8 215.2,284.1 201.7,196.4 215,137.1 206.5,104.9 197.2,83.3 186.9,13 124,1 6.6,63 186.9,13 96,72.8 6.6,63 1,98.8 96,72.8 46.7,150.3 40.8,188.8 97.3,170.4 89.3,303.4 107.6,310.8 132.6,281.3 144.7,226.2 151,171.4 97.3,170.4 96,72.8 197.2,83.3 206.5,104.9 151,171.4 215,137.1 201.7,196.4 144.7,226.2 215.2,284.1 132.6,281.3 "/>
	</svg>
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