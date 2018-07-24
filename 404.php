<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
$sapi_type = php_sapi_name();
if ($sapi_type=="cgi")
	header("Status: 404");
else
	header("HTTP/1.1 404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 - HTTP not found");
?>



<section class="cart-sec def-sec">
	<div class="wrapper">

		<div class="cart__head">
			<span class="h3">Mirtash</span>
			<h1 class="h1">Страница не найдена</h1>
		</div>

		<div class="page-text">
			<div class="user-content">
				<a href="/" class="btn">Вернуться на главную</a>
			</div>
		</div>

	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>