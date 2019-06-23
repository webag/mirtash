<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */
?>

<section class="catalog-inner-sec">
	<div class="wrapper">
		<div class="catalog-inner">

			<?foreach($arResult["ITEMS"] as $arSection):?>
				<div class="catalog-inner__part">
					<h2 class="catalog-inner__part-title h1"><?=$arSection['NAME']?></h2>
					<div class="catalog-inner__items">
						<? foreach($arSection["ELEMENTS"] as $arElement): ?>
							<?
							$APPLICATION->IncludeComponent(
								'bitrix:catalog.item',
								'product_preview',
								array(
									'RESULT' => $arElement
								),
								$component,
								array('HIDE_ICONS' => 'Y')
							);
							?>
						<?endforeach?>
					</div>
				</div>
			<?endforeach;?>

		</div>
	</div>
</section>

<pre><? //print_r($arResult['ITEMS']['0'])?></pre>
