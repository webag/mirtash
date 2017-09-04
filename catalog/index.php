<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

<section class="catalog-sec def-sec">
	<div class="wrapper">
		<div class="catalog">
			<div class="catalog__title">
				<h1>Каталог Mirtash</h1>
				<p>Выберите интересующую вас категорию</p>
			</div>
			<div class="catalog__items">
				<a class="catalog__item" href="/catalog/ready/">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-road-1.jpg" alt="">
					<div class="catalog__item-info">
						<span>Пиленные камни</span>
					</div>
				</a>
				<a class="catalog__item" href="/catalog/unready/">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-road-2.jpg" alt="">
					<div class="catalog__item-info">
						<span>Необработанные камни</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>