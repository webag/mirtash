<?php
namespace Ag;

use \Bitrix\Main\Loader;
Loader::includeModule('iblock');

class Avito
{
	/**
	 * @return boolean
	 */
	public static function generateXml()
	{
		$products = array();

		$query = \CIBlockElement::GetList(array(), array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'), false, array(), array('ID', 'NAME', 'PROPERTY_PRICE', 'PROPERTY_PHOTOS', 'PROPERTY_VIDEO', 'IBLOCK_SECTION_ID', 'DETAIL_TEXT'));
		while ($elem = $query->GetNextElement()) {
			$products[] = $elem->GetFields();
		}

		$export = new \Bitrix\Main\XmlWriter(array(
			'file' => '/upload/adverts.xml', // относительный путь к создаваемому файлу, файл отсутствует и установлен параметр 'create_file', то он будет автоматически создан
			'create_file' => true, //создавать ли файл, или продолжить запись в уже созданный. В данном случае каждый раз будет создаваться и перезаписываться новый файл
			'charset' => 'UTF-8', //кодировка файла
			'lowercase' => false //приводить ли все теги к нижнему регистру
		));
		$export->openFile();
		$export->writeBeginTag('Ads formatVersion="3" target="Avito.ru"');
		foreach ($products as $product) {
			$export->writeBeginTag('Ad');
			$export->writeFullTag('Id', $product['ID']);

			//Название товара
			$title = $product['NAME'];
			$res = \CIBlockSection::GetByID($product['IBLOCK_SECTION_ID']);
			if ($category = $res->GetNext()) {
				$catName = $category['NAME'];
				$title = $catName . ' - ' . $product['NAME'];
			}
			$export->writeFullTag('Title', $title);
			//Название товара

			$export->writeFullTag('Category', "Ремонт и строительство");
			$export->writeFullTag('GoodsType', "Стройматериалы");
			$export->writeFullTag('GoodsSubType', "Другое");
			$export->writeFullTag('Condition', "Новое");
			$export->writeFullTag('Address', "Россия, Республика Татарстан, Казань");
			$export->writeFullTag('AdType', "Товар от производителя");
			$export->writeFullTag('Price', $product['PROPERTY_PRICE_VALUE']);

			//Description
			if ($product['DETAIL_TEXT']) {
				$descr = '![CDATA[' . $product['DETAIL_TEXT'] . ']]';
			} else {
				$descr = '![CDATA[Описание временно отсутствует.]]';
			}
			$export->writeBeginTag('Description');
			$export->writeBeginTag($descr);
			$export->writeEndTag('Description');
			//Description

			//Photos
			if ($product['PROPERTY_PHOTOS_VALUE']) {
				$export->writeBeginTag('Images');
				foreach ($product['PROPERTY_PHOTOS_VALUE'] as $key => $imgId) {
					if ($key < 9) {
						$imgSrc = 'https://' . $_SERVER['HTTP_HOST'] . \CFile::GetPath($imgId);
						$export->writeFullTag('Image url="' . $imgSrc . '"', '');
					}
				}
				$export->writeEndTag('Images');
			}
			//Photos

			//Video
			if ($product['PROPERTY_VIDEO_VALUE']) {
				$videoSrc = $product['PROPERTY_VIDEO_VALUE'][0]['SUB_VALUES']['VIDEO_LINK']['VALUE'];
				$export->writeFullTag('VideoURL', $videoSrc);
			}
			//Video

			$export->writeEndTag('Ad');
		}
		$export->writeEndTag('Ads');
		$export->closeFile();

		if ($products){
			return true;
		} else {
			return false;
		}
	}
}