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
	<div class="stone-wrap">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 279.7 246" class="stone stone__4" stroke="#017b62" stroke-width="2px" fill="none" width="280" height="246">
			<polyline class="s4_1" points="90.8,245 148.8,235.3 165.9,205.3 212,225.6 233.7,192.8 271.1,160.5 253.1,27.9 183.1,12.3 126.1,1 99.1,9.6 77.8,48.8 19.1,59.2 1,159.2 60.9,239.5 19.1,59.2 96.1,144 60.9,239.5 90.8,245 96.1,144 148.8,235.3 165.9,205.3 136.7,140.8 233.7,192.8 271.1,160.5 243.2,113.5 197.1,101.3 148.4,76 136.7,140.8 96.1,144 77.8,48.8 99.1,9.6 148.4,76 126.1,1 183.1,12.3 197.1,101.3 253.1,27.9 243.2,113.5"/>
			<polyline class="s4_2 hid" points="75.9,239.8 131.3,230.4 147.7,201.8 191.7,221.1 247.7,194.6 278.7,128.5 251.9,17.2 164.1,17.6 131.6,32.6 105.9,40.7 63.6,81 17.1,110.1 7.1,167.4 46.4,208.7 17.1,110.1 84.9,181.5 46.4,208.7 75.9,239.8 84.9,181.5 131.3,230.4 147.7,201.8 150.4,149.8 247.7,194.6 278.7,128.5 221.5,114.1 188,79.7 130.9,78.4 150.4,149.8 84.9,181.5 63.6,81 105.9,40.7 130.9,78.4 131.6,32.6 164.1,17.6 188,79.7 251.9,17.2 221.5,114.1"/>
			<polyline class="s4_3 hid" points="74.6,238 128.6,228.9 153.6,218 185.7,207.2 272.2,177 272.3,129.5 237.3,40.9 180.6,52.3 130.9,60.9 105.8,68.9 62.5,83.2 17.2,111.5 7.5,167.4 45.8,207.7 17.2,111.5 83.3,181.2 45.8,207.7 74.6,238 83.3,181.2 128.6,228.9 153.6,218 192.2,157.2 272.2,177 272.3,129.5 230.5,143.5 204.9,87.9 149.2,100.6 192.2,157.2 83.3,181.2 62.5,83.2 105.8,68.9 149.2,100.6 130.9,60.9 180.6,52.3 204.9,87.9 237.3,40.9 230.5,143.5"/>
		</svg>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.5 139.8" class="stone stone__5" stroke="#017b62" stroke-width="2px" fill="none" width="133" height="140">
		<polyline class="s5_1" points="38.7,46.9 70.2,40.9 131.5,105 62.2,103 1,104.2 38.7,46.9 22.5,24.7 76.4,1 131.5,105 69.2,132.7 1,104.2 22.5,24.7 76.4,1 70.2,40.9 62.2,103 69.2,132.7"/>
		<polyline class="s5_2 hid" points="84.2,60.2 115.7,53.4 131.5,104.7 67.3,110.8 28.6,109 84.2,60.2 59,37.3 130.2,8.3 131.5,104.7 68.2,138.8 28.6,109 59,37.3 130.2,8.3 115.7,53.4 67.3,110.8 68.2,138.8"/>
		<polyline class="s5_3 hid" points="66.6,83 92.1,62.6 130.8,95.4 70.3,113.1 29.3,112.6 66.6,83 53.8,48.3 91.6,23.4 130.8,95.4 70.6,138.8 29.3,112.6 53.8,48.3 91.6,23.4 92.1,62.6 70.3,113.1 70.6,138.8"/>
	</svg>
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