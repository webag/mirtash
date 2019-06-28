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


<section class="cart-sec def-sec-top">
	<div class="wrapper">
		<div class="cart">

			<div class="cart__head">
				<p>
					<span class="h3">Каталог Mirtash</span>
					<span class="h1"><?=$arResult['SECTION']['PATH'][0]["NAME"]?></span>
				</p>
			</div>

			<?
			$item_class = "";
			switch ($arResult['PROPERTIES']['LABLE']['VALUE_XML_ID']){
				case '1':
					$item_class = "cart__item--pink";
					break;
				case '2':
					$item_class = "cart__item--blue";
					break;
				case '3':
					$item_class = "cart__item--yellow";
					break;
			}
			?>
			<? global $USER; if ($USER->IsAdmin()): ?>
				<pre style="font-size: 12px;"><?//print_r($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE'])?></pre>
			<? endif; ?>

			<div class="cart__item row row--middle <?=$item_class?>">

				<div class="grid-7 grid-tab-8 grid-phone-12">
					<div class="cart__info-wrap">
						<div class="cart__info">
							<div class="cart__breadcrumbs">
								<a href="/catalog/">Каталог</a>
								<a href="<?=$arResult['SECTION']['PATH'][0]['SECTION_PAGE_URL']?>"><?=$arResult['SECTION']['PATH'][0]["NAME"]?></a>
							</div>
							<div class="cart__info-title">
								<h1 class="h2"><?=$arResult["NAME"]?></h1>
								<? if (!empty($arResult['PROPERTIES']['LABLE']['VALUE'])) : ?>
									<span><?=$arResult['PROPERTIES']['LABLE']['VALUE']?></span>
								<? endif; ?>
							</div>

							<div class="cart-slider">
								<? if ($arResult["PROPERTIES"]["VIDEO"]["VALUE"]) : ?>
									<? foreach ($arResult["PROPERTIES"]["VIDEO"]["VALUE"] as $arVideo) : ?>
										<? $video = $arVideo['SUB_VALUES']?>
										<?
										$resize_img = CFile::ResizeImageGet($video['VIDEO_COVER']['VALUE'], array("width" => 624, "height" => 468), BX_RESIZE_IMAGE_EXACT, true, array());
										?>
										<div class="cart-slider__item">
											<a href="<?=$video['VIDEO_LINK']['VALUE']?>" class="cart-slider__item-video fancy-cart-slider" data-fancybox="cart-slider">
												<img src="<?=$resize_img['src']?>" alt="<?=$arResult["NAME"]?>" class="cart-slider__item-img">
											</a>
											<div class="cart-slider__zoom">
												<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/resize.svg" alt="zoom" width="20" height="20">
											</div>
										</div>
									<? endforeach; ?>
								<? endif; ?>
								<? foreach ($arResult["PROPERTIES"]["PHOTOS"]["VALUE"] as $key => $photo_id) : ?>
									<?
									$photo_big = CFile::ResizeImageGet($photo_id, array("width" => 1900, "height" => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true);
									$resize_img = CFile::ResizeImageGet($photo_id, array("width" => 624, "height" => 468), BX_RESIZE_IMAGE_EXACT, true, array());
									?>
									<div class="cart-slider__item">
										<a href="<?=$photo_big['src']?>" class="cart-slider__item-imgwrap fancy-cart-slider" data-fancybox="cart-slider">
											<img src="<?=$resize_img['src']?>" alt="<?=$arResult["NAME"]?>" class="cart-slider__item-img">
										</a>
										<div class="cart-slider__zoom">
											<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/resize.svg" alt="zoom" width="20" height="20">
										</div>
									</div>
								<? endforeach; ?>
							</div>
							<div class="cart-slider-thumbs">
								<? if ($arResult["PROPERTIES"]["VIDEO"]["VALUE"]) : ?>
									<? foreach ($arResult["PROPERTIES"]["VIDEO"]["VALUE"] as $arVideo) : ?>
										<? $video = $arVideo['SUB_VALUES']?>
										<?
										$resize_img = CFile::ResizeImageGet($video['VIDEO_COVER']['VALUE'], array("width" => 113, "height" => 85), BX_RESIZE_IMAGE_EXACT, true, array());
										?>
										<div class="cart-slider-thumbs__slide cart-slider-thumbs__slide--video">
											<img src="<?=$resize_img['src']?>" alt="<?=$arResult["NAME"]?>">
										</div>
									<? endforeach; ?>
								<? endif; ?>
								<? foreach ($arResult["PROPERTIES"]["PHOTOS"]["VALUE"] as $key => $photo_id) : ?>
									<?
									$resize_img = CFile::ResizeImageGet($photo_id, array("width" => 113, "height" => 85), BX_RESIZE_IMAGE_EXACT, true, array());
									?>
									<div class="cart-slider-thumbs__slide">
										<img src="<?=$resize_img['src']?>" alt="<?=$arResult["NAME"]?>">
									</div>
								<? endforeach; ?>
							</div>

							<div class="cart__short-info--mob">
								<? if ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE']) : ?>
									<div class="variants">
										<div class="variants__param-name"><?=$arResult['PROPERTIES']['PARAM_NAME']['VALUE']?></div>
										<div class="variants__selector">
											<? foreach ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE'] as $key=>$arOffer) : ?>
												<? $offer = $arOffer['SUB_VALUES']?>
												<div class="variants__selector-btn <? echo $key==0 ? 'active':''?>" data-variant="<?=$key?>" data-slider-photo="<?=$offer['PARAM_PHOTO']['VALUE']?>">
													<?=$offer['PARAM_VALUE']['VALUE']?>
												</div>
											<? endforeach; ?>
										</div>
										<div class="h4">Цена</div>
										<div class="variants__items">
											<? foreach ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE'] as $key=>$arOffer) : ?>
												<? $offer = $arOffer['SUB_VALUES']?>
												<div class="variant <? echo $key==0 ? 'active':''?>" data-variant="<?=$key?>">
													<? if ($offer['PRICE_ROZN']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Розница</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_ROZN']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
													<? if ($offer['PRICE_OPT_SMALL']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Мелкий опт</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_OPT_SMALL']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
													<? if ($offer['PRICE_OPT']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Опт</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_OPT']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
												</div>
											<? endforeach; ?>
										</div>
										<? if ($arResult['PROPERTIES']['PRICE_NOTE']['VALUE']) : ?>
											<div class="variants__note"><?=$arResult['PROPERTIES']['PRICE_NOTE']['~VALUE']['TEXT']?></div>
										<? endif; ?>
									</div>
								<? else: ?>
									<? if (!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"])) : ?>
										<div class="cart__short-price">
											<span>Стоимость:</span>
											<span><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> <small style="font-size: 80%">&#8381;</small>
												<? if (!empty($arResult["PROPERTIES"]["EDIN"]["VALUE"])) : ?>
													/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?>
												<? endif; ?>
											</span>
										</div>
									<? endif; ?>
								<? endif; ?>

								<div class="cart__short-descr">
									<p>Окончательную стоимость вы можете уточнить у наших менеджеров</p>
									<? if (!empty($arResult["PROPERTIES"]["EDIN"]["VALUE"])) : ?>
										<span>Единица измерения: <?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></span>
									<? endif; ?>
									<? if (!empty($arResult["PROPERTIES"]["MINPART"]["VALUE"])) : ?>
										<span>Минимальная партия: <?=$arResult["PROPERTIES"]["MINPART"]["~VALUE"]?></span>
									<? endif; ?>
								</div>
							</div>

							<div class="user-content">
								<? if (!empty($arResult["DETAIL_TEXT"])) : ?>
									<h5>Описание</h5>
									<?=$arResult["DETAIL_TEXT"]?>
									<br><br>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["PARAMS_TABLE"]["~VALUE"])) : ?>
									<h5>Характеристики</h5>
									<table>
										<? foreach ($arResult["PROPERTIES"]["PARAMS_TABLE"]["~VALUE"] as $key => $param_name) : ?>
											<tr>
												<td><?=$param_name?></td>
												<td><?=$arResult["PROPERTIES"]["PARAMS_TABLE"]["~DESCRIPTION"][$key]?></td>
											</tr>
										<? endforeach; ?>
									</table>
								<? endif; ?>
							</div>
						</div>

					</div>
				</div>

				<div class="cart__sidebar-wrap grid-3 grid-tab-4 grid-phone-12">
					<div class="cart__sidebar">

						<div class="cart__short">

							<div class="cart__short-info">
								<? if ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE']) : ?>
									<div class="variants">
										<div class="variants__param-name"><?=$arResult['PROPERTIES']['PARAM_NAME']['VALUE']?></div>
										<div class="variants__selector">
											<? foreach ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE'] as $key=>$arOffer) : ?>
												<? $offer = $arOffer['SUB_VALUES']?>
												<div class="variants__selector-btn <? echo $key==0 ? 'active':''?>" data-variant="<?=$key?>" data-slider-photo="<?=$offer['PARAM_PHOTO']['VALUE']?>">
													<?=$offer['PARAM_VALUE']['VALUE']?>
												</div>
											<? endforeach; ?>
										</div>
										<div class="h4 ">Цена</div>
										<div class="variants__items">
											<? foreach ($arResult['PROPERTIES']['PRICE_VARIANT']['VALUE'] as $key=>$arOffer) : ?>
												<? $offer = $arOffer['SUB_VALUES']?>
												<div class="variant <? echo $key==0 ? 'active':''?>" data-variant="<?=$key?>">
													<? if ($offer['PRICE_ROZN']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Розница</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_ROZN']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
													<? if ($offer['PRICE_OPT_SMALL']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Мелкий опт</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_OPT_SMALL']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
													<? if ($offer['PRICE_OPT']['VALUE']) : ?>
														<div class="variant__row">
															<small class="variant__row-name">Опт</small>
															<figure></figure>
															<div class="variant__row-prices">
																<div class="variant__row-price">
																	<?=$offer['PRICE_OPT']['VALUE']?>
																	<small>&#8381;/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></small>
																</div>
															</div>
														</div>
													<? endif; ?>
												</div>
											<? endforeach; ?>
										</div>
										<? if ($arResult['PROPERTIES']['PRICE_NOTE']['VALUE']) : ?>
											<div class="variants__note"><?=$arResult['PROPERTIES']['PRICE_NOTE']['~VALUE']['TEXT']?></div>
										<? endif; ?>
									</div>
								<? else: ?>
									<? if (!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"])) : ?>
										<div class="cart__short-price">
											<span>Стоимость:</span>
											<span><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> <small style="font-size: 80%">&#8381;</small>
												<? if (!empty($arResult["PROPERTIES"]["EDIN"]["VALUE"])) : ?>
													/<?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?>
												<? endif; ?>
											</span>
										</div>
									<? endif; ?>
								<? endif; ?>

								<div class="cart__short-descr">
									<p>Окончательную стоимость вы можете уточнить у наших менеджеров</p>
									<? if (!empty($arResult["PROPERTIES"]["EDIN"]["VALUE"])) : ?>
										<span>Единица измерения: <?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?></span>
									<? endif; ?>
									<? if (!empty($arResult["PROPERTIES"]["MINPART"]["VALUE"])) : ?>
										<span>Минимальная партия: <?=$arResult["PROPERTIES"]["MINPART"]["~VALUE"]?></span>
									<? endif; ?>
								</div>
							</div>
						</div>

						<div class="cart-phone">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","simple_phone",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/phone_2.php"
							));?>
							<br>
							<?$APPLICATION->IncludeComponent("bitrix:main.include","simple_phone",Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/includes/phone_1.php"
							));?>
						</div>

						<div class="cart__form-wrap">
							<div class="cart__form">
								<form class="ajax-form">
									<h5>Заполните форму и&nbsp;менеджер вам перезвонит</h5>
									<input type="hidden" value="Заявка из карточки товара" name="form_subject">
									<input type="hidden" value="<?=$arResult['NAME']?>" name="user_product" data-label="Продукт">
									<input type="hidden" value="order_cart" name="target_id">
									<input type="text" class="input-text input-text--bordered" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
									<input type="tel" class="input-text input-text--bordered" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
									<input type="email" class="input-text input-text--bordered" name="user_email" placeholder="E-mail" data-label="E-mail">
									<? if (!empty($arResult["PROPERTIES"]["TYPE"]["~VALUE"])) : ?>
										<p>Выберите необходимые параметры</p>
										<select class="custom-select" name="user_type" data-label="Тип">
											<option selected="selected" disabled>Тип</option>
											<? foreach ($arResult["PROPERTIES"]["TYPE"]["~VALUE"] as $key => $param_name) : ?>
												<option value="<?=$param_name?>"><?=$param_name?></option>
											<? endforeach; ?>
										</select>
									<? endif; ?>
									<? if (!empty($arResult["PROPERTIES"]["VIEW"]["~VALUE"])) : ?>
										<select class="custom-select" name="user_view" data-label="Вид">
											<option selected="selected" disabled>Вид</option>
											<? foreach ($arResult["PROPERTIES"]["VIEW"]["~VALUE"] as $key => $param_name) : ?>
												<option value="<?=$param_name?>"><?=$param_name?></option>
											<? endforeach; ?>
										</select>
									<? endif; ?>
									<? if (!empty($arResult["PROPERTIES"]["SIZE"]["~VALUE"])) : ?>
										<select class="custom-select" name="user_size" data-label="Размер">
											<option selected="selected" disabled>Размер</option>
											<? foreach ($arResult["PROPERTIES"]["SIZE"]["~VALUE"] as $key => $param_name) : ?>
												<option value="<?=$param_name?>"><?=$param_name?></option>
											<? endforeach; ?>
										</select>
									<? endif; ?>
									<p>Сколько <?=$arResult["PROPERTIES"]["EDIN"]["~VALUE"]?> продукции вам необходимо?</p>
									<input type="text" class="input-text input-text--bordered" name="user_num" data-label="Количество" placeholder="Количество">
									<div class="center-btn">
										<button class="btn btn--submit btn--full">заказать</button>
									</div>
								</form>
							</div>
							<span class="form__personal">Нажимая кнопку, вы даете <a href="/policy.docx" target="_blank" download="Политика конфиденциальности">согласие</a> на&nbsp;обработку персональных данных.</span>
						</div>

						<a class="cart-instagram" href="https://www.instagram.com/mirtash_kzn/" target="_blank">
							<img src="/local/templates/mirtash/img/ig-logo.png" alt="instalogo" class="cart-instagram__thumb">
							<img src="/local/templates/mirtash/img/instagram.png" alt="1" class="cart-instagram__logo">
						</a>

						<div class="cart-share">
							<h4>Рассказать друзьям:</h4>
							<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
							<script src="https://yastatic.net/share2/share.js"></script>
							<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,viber,whatsapp,skype,telegram"></div>
						</div>

						<a href="#" class="partner-block fancy-modal" data-src="#modal-partner">
							<div class="partner-block__title h3">Стать партнером</div>
							<div class="partner-block__subtitle">для дизайнеров и&nbsp;строителей</div>
						</a>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<?
$db_groups = CIBlockElement::GetElementGroups($arResult["ID"], true);
while($ar_group = $db_groups->Fetch()):
	$sections[] = $ar_group["ID"];
endwhile;
?>


<? if ($arResult['PROPERTIES']['BUY_WITH']['VALUE']) : ?>
	<section class="s-cart-related">
		<div class="wrapper">
			<div class="catalog-inner">
				<div class="catalog-inner__part">
					<h2 class="catalog-inner__part-title"><?=$arResult['PROPERTIES']['BUY_WITH_TITLE']['VALUE']?></h2>
					<?
					global $arrFilterBuy;
					$arrFilterBuy = Array(
						"ID" => $arResult['PROPERTIES']['BUY_WITH']['VALUE'],
					);
					?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"products_items",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"COMPOSITE_FRAME_MODE" => "A",
							"COMPOSITE_FRAME_TYPE" => "AUTO",
							"DETAIL_URL" => "/catalog/all/#ELEMENT_CODE#/",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("", ""),
							"FILTER_NAME" => "arrFilterBuy",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => $arResult["IBLOCK_ID"],
							"IBLOCK_TYPE" => "catalogs",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "4",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Новости",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("PRICE"),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "SORT",
							"SORT_BY2" => "ID",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "DESC",
							"STRICT_SECTION_CHECK" => "N"
						)
					);?>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>


<? if ($arResult['PROPERTIES']['INTEREST']['VALUE']) : ?>
	<section class="s-cart-related">
		<div class="wrapper">
			<div class="catalog-inner">
				<div class="catalog-inner__part">
					<h2 class="catalog-inner__part-title"><?=$arResult['PROPERTIES']['INTEREST_TITLE']['VALUE']?></h2>
					<?
					global $arrFilterInterest;
					$arrFilterInterest = Array(
						"ID" => $arResult['PROPERTIES']['INTEREST']['VALUE'],
					);
					?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"products_items",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"COMPOSITE_FRAME_MODE" => "A",
							"COMPOSITE_FRAME_TYPE" => "AUTO",
							"DETAIL_URL" => "/catalog/all/#ELEMENT_CODE#/",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("", ""),
							"FILTER_NAME" => "arrFilterInterest",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => $arResult["IBLOCK_ID"],
							"IBLOCK_TYPE" => "catalogs",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "4",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Новости",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("PRICE"),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "SORT",
							"SORT_BY2" => "ID",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "DESC",
							"STRICT_SECTION_CHECK" => "N"
						)
					);?>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>


<? if ($arResult['PROPERTIES']['SHOW_RELATED']['VALUE'] == "YES") : ?>
	<?
	global $arrFilter;
	$arrFilter = Array(
		"!ID" => $arResult["ID"],
		"SECTION_ID" => $sections[0]
	);
	?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"related",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"DETAIL_URL" => "/catalog/all/#ELEMENT_CODE#/",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "arrFilter",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => $arResult["IBLOCK_ID"],
			"IBLOCK_TYPE" => "catalogs",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "4",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => $arResult["SECTION"]["PATH"][0]["ID"],
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("PRICE"),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "ID",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "DESC",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>
<? endif; ?>


<section class="s-cart-bottom">
	<div class="wrapper">
		<div class="cart-back-link h4">
			Вернуться в <a href="/catalog/">каталог</a>
		</div>
	</div>
</section>


<section class="form-callback-sec form-callback-sec--cart">
	<div class="wrapper">
		<div class="row form-callback">
			<div class="grid-7 grid-tabvert-6 grid-phone-12 form-callback__left">
				<div class="form-callback__title">
					<p class="h1">Получите бесплатную консультацию</p>
					<p>по подбору камня от профессионального <br>дизайнера прямо сейчас</p>
				</div>
				<img class="form-callback__stone form-callback__stone--cart" data-src="img/form-stone-main.png" data-src-phone="" src="<?=SITE_TEMPLATE_PATH?>/img/form-stone-main.png" alt="">
			</div>
			<div class="grid-5 grid-tabvert-6 grid-phone-12 form-callback__right">
				<div class="form-wrap">
					<div class="form">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.5 139.8" class="stone stone__5" stroke="#017b62" stroke-width="2px" fill="none" width="133" height="140">
							<polyline class="s5_1" points="38.7,46.9 70.2,40.9 131.5,105 62.2,103 1,104.2 38.7,46.9 22.5,24.7 76.4,1 131.5,105 69.2,132.7 1,104.2 22.5,24.7 76.4,1 70.2,40.9 62.2,103 69.2,132.7"/>
							<polyline class="s5_2 hid" points="84.2,60.2 115.7,53.4 131.5,104.7 67.3,110.8 28.6,109 84.2,60.2 59,37.3 130.2,8.3 131.5,104.7 68.2,138.8 28.6,109 59,37.3 130.2,8.3 115.7,53.4 67.3,110.8 68.2,138.8"/>
							<polyline class="s5_3 hid" points="66.6,83 92.1,62.6 130.8,95.4 70.3,113.1 29.3,112.6 66.6,83 53.8,48.3 91.6,23.4 130.8,95.4 70.6,138.8 29.3,112.6 53.8,48.3 91.6,23.4 92.1,62.6 70.3,113.1 70.6,138.8"/>
						</svg>
						<h3>Оставьте ваши контактные данные</h3>
						<p>Специалист свяжется с вами в ближайшее время</p>
						<form class="ajax-form">
							<input type="hidden" value="consult" name="target_id">
							<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
							<input type="tel" class="input-text" name="user_phone" placeholder="Номер телефона*" data-label="Телефон" data-req="true">
							<input type="email" class="input-text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							<input type="hidden" value="Получить консультацию" name="form_subject">
							<div class="btnwrap-center">
								<button class="btn btn--submit"><span>Отправить</span></button>
							</div>
							<span class="form__personal">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете <a href="/policy.docx" target="_blank" download="Политика конфиденциальности">согласие</a> на обработку персональных данных.</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>