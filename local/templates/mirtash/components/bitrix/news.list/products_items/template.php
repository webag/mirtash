<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
	<div class="catalog-inner__items">

		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<?
			$APPLICATION->IncludeComponent(
				'bitrix:catalog.item',
				'product_preview',
				array(
					'RESULT' => $arItem
				),
				$component,
				array('HIDE_ICONS' => 'Y')
			);
			?>
		<? endforeach; ?>

	</div>
<? endif; ?>