<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?
echo Ag\Avito::generateXml();
?>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>