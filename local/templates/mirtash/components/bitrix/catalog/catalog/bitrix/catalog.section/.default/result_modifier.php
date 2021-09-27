<?php

use Bprog\Salamat\Settings;
use Bprog\Tools\Image;

if ( !defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true ) die();
/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 * @var array $arParams
 * @var array $arResult
 */
?>


<?
$dbResSect = CIBlockSection::GetList(
	Array("SORT"=>"ASC"),
	Array("ACTIVE" => 'Y',"IBLOCK_ID"=>$arParams['IBLOCK_ID'],"DEPTH_LEVEL" => 2,"SECTION_ID" => $arResult['ID'])
);

//Получаем разделы и собираем в массив
while($sectRes = $dbResSect->GetNext())
{
	$arSections[] = $sectRes;
}

//Собираем  массив из Разделов и элементов
foreach($arSections as $arSection){

	foreach($arResult["ITEMS"] as $key=>$arItem){
		if($arItem['~IBLOCK_SECTION_ID'] == $arSection['ID']){
			$arSection['ELEMENTS'][] =  $arItem;
		}
	}

	$arElementGroups[] = $arSection;

}

$arResult["ITEMS"] = $arElementGroups;?>