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
$this->setFrameMode(true);
?>


<section class="catalog-head-sec">
	<div class="wrapper">
		<div class="catalog-head">
			<p class="h3">Каталог Mirtash</p>
			<div class="catalog-head__links">
				<a href="/catalog/ready/" class="catalog-head__link active"><span>пиленные камни</span></a>
				<a href="/catalog/unready/" class="catalog-head__link"><span>Необработанные камни</span></a>
			</div>
		</div>
	</div>
</section>


<section class="catalog-category-sec">

	<div class="wrapper">
		<div class="catalog-category">
			<div class="row row--middle">
				<div class="grid-8 grid-tabvert-10 grid-phone-12">
					<div class="catalog-category__title">
						<h1><?=$arResult["NAME"]?></h1>
						<p><?=$arResult["DESCRIPTION"]?></p>
					</div>
				</div>
			</div>
			<div class="catalog-category__link-list">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<a href="#cat-item-<?=$arItem['ID']?>" class="catalog-category__link scrollto"><span><?=$arItem["NAME"]?></span></a>
				<?endforeach;?>
			</div>
		</div>
	</div>

	<div class="catalog-category__list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$bg_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 1920, "height" => 900), BX_RESIZE_IMAGE_EXACT, true);
			?>
		<div class="catalog-category__item-wrap" id="cat-item-<?=$arItem['ID']?>" style="background-image: url(<?=$bg_img['src']?>);">
			<div class="catalog-category__item wrapper">
				<div class="catalog-category__item-title fade-top">
					<h3><?=$arItem["NAME"]?></h3>
					<div class="catalog-category__item-title-cats">
						<? foreach ($arItem['PROPERTIES']['TYPE']['VALUE'] as $type) : ?>
							<span><?=$type?></span>
						<? endforeach; ?>
					</div>
				</div>
				<div class="catalog-category__item-descr fade-top">
					<?=$arItem["PREVIEW_TEXT"]?>
				</div>
				<div class="center-btn fade-top">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn btn--mini">Подробнее</a>
				</div>
			</div>
			<a href="#" class="catalog-category__item-next fade-top scrollto"></a>
		</div>
		<?endforeach;?>
	</div>

</section>


<section class="form-callback-sec form-callback-sec--catalog-big">
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию </p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--catalog-big" data-src="img/form-stone.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-catalog-big.png" alt="">
			</div>
			<div class="grid-5 grid-tabvert-6 grid-phone-12 form-callback__right">
				<div class="form-wrap">
					<div class="form">
						<h3>Оставьте ваши контактные данные</h3>
						<p>Специалист свяжется с вами в ближайшее время</p>
						<form class="ajax-form">
							<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
							<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
							<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							<input type="hidden" value="Новая заявка" name="form_subject">
							<div class="btnwrap-center">
								<button class="btn btn--submit"><span>Отправить</span></button>
							</div>
							<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете согласие на обработку персональных данных.</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>