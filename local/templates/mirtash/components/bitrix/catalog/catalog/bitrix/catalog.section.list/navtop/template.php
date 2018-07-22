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

<? foreach ($arResult['SECTIONS'] as &$arSection):?>
	<?
	$active_class = '';
	$page = $APPLICATION->GetCurPage();
	if ($page === $arSection['SECTION_PAGE_URL']) :
		$active_class = 'active';
	endif;
	?>
	<a href="<?=$arSection['SECTION_PAGE_URL']?>" class="catalog-head__link <?=$active_class?>"><span><?=$arSection['NAME']?></span></a>
<? endforeach;?>