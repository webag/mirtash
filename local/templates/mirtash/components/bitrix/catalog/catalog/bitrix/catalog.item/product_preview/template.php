<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>


<a href="<?= $arResult['DETAIL_PAGE_URL'] ?>" class="catalog-inner__item">
	<? if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])) : ?><?
		$img = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"], array("width" => 250, "height" => 190), BX_RESIZE_IMAGE_EXACT, true);
		?>
		<span class="catalog-inner__item-img">
			<img src="<?= $img['src'] ?>" alt="<?= $arResult['NAME'] ?>">
		</span>
	<? endif; ?>
	<span class="catalog-inner__item-title"><?= $arResult['NAME'] ?></span>
	<? if (!empty($arItem['PROPERTIES']['PRICE']['VALUE'])) : ?>
		<span class="catalog-inner__item-price">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/icons/price.svg" alt="">
			<?= $arItem['PROPERTIES']['PRICE']['VALUE']; ?> &#8381;
		 </span>
	<? endif; ?>
</a>


<? //echo '<pre>'; print_r($arResult); echo '</pre>'; ?>