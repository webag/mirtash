<?
// register custom classes
\Bitrix\Main\Loader::registerAutoLoadClasses(
	null,
	array(
		"Ag\Avito" => "/local/classes/Ag/Avito.php"
	)
);

// уберем вкладку "Реклама"
\Bitrix\Main\EventManager::getInstance()->unRegisterEventHandler(
	'main',
	'OnAdminIBlockElementEdit',
	'seo',
	'\\Bitrix\\Seo\\AdvTabEngine',
	'eventHandler'
);

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", array("Ag\Avito", "generateXml"));