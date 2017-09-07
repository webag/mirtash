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
<div class="offers__items">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="offers__item row">

			<div class="offers__item-img grid-4 grid-tab-5 grid-tabvert-5 grid-phonemini-12">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem['NAME']?>">
			</div>

			<div class="offers__item-info grid-7 grid-tab-6 grid-tabvert-7 grid-phonemini-12">
				<div class="offers__item-info-title">
					<h4><?=$arItem['NAME']?></h4>
					<? if (!empty($arItem['PROPERTIES']['LABEL_TEXT']['VALUE'])) : ?>
						<span><?=$arItem['PROPERTIES']['LABEL_TEXT']['VALUE']?></span>
					<? endif; ?>
				</div>
				<div class="user-content">
					<?=$arItem['PREVIEW_TEXT']?>
					<? if (!empty($arItem["PROPERTIES"]["TRIGGERS"]["~VALUE"])) : ?>
						<ul>
						<? foreach ($arItem["PROPERTIES"]["TRIGGERS"]["~VALUE"] as $key => $param_name) : ?>
							<li>
								<h5><?=$param_name?></h5>
								<span><?=$arItem["PROPERTIES"]["TRIGGERS"]["~DESCRIPTION"][$key]?></span>
							</li>
						<? endforeach; ?>
						</ul>
					<? endif; ?>
				</div>
				<? if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])) : ?>
					<a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" class="offers__item-info-more">Подбробнее</a>
				<? endif; ?>
			</div>

		</div>
	<?endforeach;?>

	<div class="center-btn">
		<a href="/catalog/" class="btn">Перейти в каталог</a>
	</div>
</div>
<? endif; ?>