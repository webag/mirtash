<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?$APPLICATION->ShowTitle()?></title>

	<!--fav-->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#005c4a">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#00372d">
	<!--fav-->

	<!-- og -->
	<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
	<meta property="og:description" content='<?=$APPLICATION->ShowProperty("description");?>'/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content='<?=$APPLICATION->ShowProperty("ogimage",SITE_TEMPLATE_PATH."/img/og.jpg");?>' />
	<!-- og -->

	<?
	use Bitrix\Main\Page\Asset;

	Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/assets.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/myscript.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/insta.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/add.js");
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
	?>

	<? $APPLICATION->ShowHead();?>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter48542102 = new Ya.Metrika2({
						id:48542102,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/tag.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/48542102" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<meta name="yandex-verification" content="4ef91cc0a5f61dcf" />

</head>
<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>


<div class="menu-left">

	<a href="#" class="menu-left__opener-wrap">
		<span class="menu-left__opener">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>

	<div class="menu-left__main">
		<a href="/" class="menu-left__logo">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo-menu.png" alt="">
		</a>
		<div class="menu-left__nav">
			<a href="/about/" class="menu-left__menu-link">О компании</a>
			<a href="/delivery/" class="menu-left__menu-link">Доставка</a>
			<a href="/install/" class="menu-left__menu-link">Монтаж</a>
			<a href="/contacts/" class="menu-left__menu-link">Контакты</a>
			<a href="/catalog/" class="btn">Каталог</a>
			<!--<a href="/catalog/ready/" class="menu-left__menu-link">Обработаные камни</a>
			<a href="/catalog/unready/" class="menu-left__menu-link">Необработанные камни</a>-->
		</div>
		<div class="menu-left__contact">
			<p>
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/address-work.php"
			));?>
			</p>
			<?/*$APPLICATION->IncludeComponent("bitrix:main.include","menu_phone",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/phone_1.php"
			));*/?>
			<?$APPLICATION->IncludeComponent("bitrix:main.include","menu_phone",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/phone_2.php"
			));?>
			<div class="menu-left__contact-soc">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/socials.php"
				));?>
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:main.include","menu_email",Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/includes/email.php"
			));?>
		</div>
	</div>

</div>