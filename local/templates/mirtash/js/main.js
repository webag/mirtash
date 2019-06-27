/***********************
 отправка формы в php BEGIN
 ***********************/
$(function($){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		var targetId = form.find('[name=target_id]').val();

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
					ym(48542102, 'reachGoal', targetId);
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
 ***********************/


$(document).ready(function() {

	var windowWidth, windowHeight;
	function windowSize() {
		windowWidth = $(window).width();
		windowHeight = $(window).height();
	}

	$(window).on('load', function(){
		windowSize();
	}); // при загрузке
	$(window).on("resize",function(){ // при изменении размеров
		windowSize();
	});


/**************************************************
	Open Menu
***************************************************/
	if($('.menu-left__opener').length) {
		$('.menu-left__opener-wrap').on('click', function(event) {
			event.preventDefault();
			$(this).toggleClass('open');
			$('.menu-left').toggleClass('open');
		});
	}
/**************************************************
	End Open Menu
***************************************************/


/**************************************************
  Table Wrap Fix
***************************************************/
	if($('.user-content table').length) {
		$('.user-content table').each(function(index, el) {
			$(el).wrap('<div class="table-wrapper"></div>')
		});
	}
/**************************************************
  End Table Wrap Fix
***************************************************/


/**************************************************
  Nice Select
***************************************************/
	if($('.custom-select').length) {
		$('.custom-select').niceSelect();
		$('.nice-select.custom-select').on('click', function(event) {
			$(this).closest('.nice-select.custom-select').addClass('choosed');
		});
		$('.nice-select.custom-select .option').on('click', function(event) {
			$(this).closest('.nice-select.custom-select').addClass('choosed');
		});
	}
/**************************************************
  End Nice Select
***************************************************/

/**************************************************
  About head Title
***************************************************/
	setTimeout(function() {
		$('.fade-load').addClass('loaded');
	}, 1500);
/**************************************************
  End About head Title
***************************************************/


/**************************************************
	Catalog Big Menu
***************************************************/

	if($('.catalog-category__link-list').length && $(window).width() > 740) {
		var catNavLink = $('.catalog-category__link-list');
		var catNavLinkTop = catNavLink.offset().top;
		var catNavLinkHeight = catNavLink.outerHeight();
		$(window).scroll(function() {
			if($(this).scrollTop() >= catNavLinkTop) {
				catNavLink.addClass('sticked');
				catNavLink.css('height', catNavLinkHeight - 30);
			}
			else{
				catNavLink.removeClass('sticked');
				catNavLink.css('height', 'inherit');
			}
		});
	}

/**************************************************
	End Catalog Big Menu
***************************************************/


/***********************
Stones BEGIN
***********************/
if($(window).width() > 1024) {
	var stone_1 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_1
		.to($('.s1_1'), 4, {morphSVG: $('.s1_2'), ease: Power0.easeNone})
		.to($('.s1_1'), 4, {morphSVG: $('.s1_3'), ease: Power0.easeNone})
		.to($('.s1_1'), 4, {morphSVG: $('.s1_1'), ease: Power0.easeNone});

	var stone_2 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_2
		.to($('.s2_1'), 5, {morphSVG: $('.s2_2'), ease: Power0.easeNone})
		.to($('.s2_1'), 5, {morphSVG: $('.s2_3'), ease: Power0.easeNone})
		.to($('.s2_1'), 5, {morphSVG: $('.s2_1'), ease: Power0.easeNone});

	var stone_3 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_3
		.to($('.s3_1'), 6, {morphSVG: $('.s3_2'), ease: Power0.easeNone})
		.to($('.s3_1'), 6, {morphSVG: $('.s3_3'), ease: Power0.easeNone})
		.to($('.s3_1'), 6, {morphSVG: $('.s3_1'), ease: Power0.easeNone});

	var stone_4 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_4
		.to($('.s4_1'), 7, {morphSVG: $('.s4_2'), ease: Power0.easeNone})
		.to($('.s4_1'), 7, {morphSVG: $('.s4_3'), ease: Power0.easeNone})
		.to($('.s4_1'), 7, {morphSVG: $('.s4_1'), ease: Power0.easeNone});

	var stone_5 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_5
		.to($('.s5_1'), 8, {morphSVG: $('.s5_2'), ease: Power0.easeNone})
		.to($('.s5_1'), 8, {morphSVG: $('.s5_3'), ease: Power0.easeNone})
		.to($('.s5_1'), 8, {morphSVG: $('.s5_1'), ease: Power0.easeNone});

	var stone_6 = new TimelineLite({ onComplete: function () { this.restart() }});
	stone_6
		.to($('.s6_1'), 5, {morphSVG: $('.s6_2'), ease: Power0.easeNone})
		.to($('.s6_1'), 5, {morphSVG: $('.s6_3'), ease: Power0.easeNone})
		.to($('.s6_1'), 5, {morphSVG: $('.s6_1'), ease: Power0.easeNone});
}
/***********************
Stones END
***********************/


/**************************************************
  Work Icons SVG
***************************************************/
	if($(window).width() > 1024) {
		$thisWorkGeoIcon = $('.work-proccess__item-img').eq(0).find('img');
		$thisWorkExcIcon = $('.work-proccess__item-img').eq(1).find('img');
		$thisWorkOtbIcon = $('.work-proccess__item-img').eq(2).find('img');
		$thisWorkSawIcon = $('.work-proccess__item-img').eq(3).find('img');
		$thisWorkHomeIcon = $('.work-proccess__item-img').eq(4).find('img');
		var key = 0;

		function setWorkActive($thisIcon, key) {
			$thisIcon.removeClass('active');
			$thisIcon.eq(key).addClass('active');
		};

		setInterval(function(){
			key++;
			if (key == $thisWorkGeoIcon.length) {
				key = 0;
			}
			setWorkActive($thisWorkGeoIcon, key);
			setWorkActive($thisWorkExcIcon, key);
			setWorkActive($thisWorkOtbIcon, key);
			setWorkActive($thisWorkSawIcon, key);
			setWorkActive($thisWorkHomeIcon, key);
		}, 1000);
	}
/**************************************************
  End Work Icons SVG
***************************************************/


/**************************************************
	Masked input tel
***************************************************/
	$("input[type='tel']").mask("+7 (999) 999-99-99", {autoclear: false});
/**************************************************
	End Masked input tel
***************************************************/


/**************************************************
	Flickity
***************************************************/
	if($('.about-gallery__slider').length) {
		$('.about-gallery__slider').flickity({
			pageDots: false,
			imagesLoaded: true,
			lazyLoad: 1,
			initialIndex: 1,
			adaptiveHeight: true,
			arrowShape: {
			  x0: 15,
			  x1: 40, y1: 25,
			  x2: 50, y2: 25,
			  x3: 25
			}
		});

		// jQuery
		$('.about-gallery__slider').on('select.flickity', function() {
			$('.is-selected').removeClass('next-selected prev-selected');
			$('.is-selected').next().addClass('next-selected');
			$('.is-selected').prev().addClass('prev-selected');
		})
	}

	if($('.stone-slider__items').length) {
		var $stoneSliderNav = $('.stone-slider__nav');
		var $stoneSliderItems = $('.stone-slider__items');

		function changeStoneNav(index) {
			$stoneSliderNav.find('a').removeClass('active')
			$stoneSliderNav.find('a').eq(index).addClass('active');
		}
		function changeStoneSlider(index) {
			changeStoneNav(index);
			$stoneSlider.flickity('selectCell', index );
		}

		$stoneSliderNav.find('a').on('click', function(event) {
			event.preventDefault();
			//console.log();
			changeStoneSlider($(this).index());
		});

		var $stoneSlider = $('.stone-slider__items').flickity({
			pageDots: false,
			imagesLoaded: true,
			lazyLoad: 1,
			initialIndex: 1,
			adaptiveHeight: true,
			arrowShape: {
			  x0: 15,
			  x1: 40, y1: 25,
			  x2: 50, y2: 25,
			  x3: 25
			}
		});
		var stoneSliderFlkty = $stoneSlider.data('flickity');

		// jQuery
		$('.stone-slider__items').on('select.flickity', function() {
			$('.stone-slider__item').removeClass('prev-selected');
			$('.stone-slider__item').removeClass('next-selected ');
			$('.is-selected').next().addClass('next-selected');
			$('.is-selected').prev().addClass('prev-selected');
			changeStoneNav(stoneSliderFlkty.selectedIndex);
		})
	}

	if($('.palitra__slider').length) {
		var $palitraSliderNav = $('.palitra__slide-counter');
		function changePalitraNav(index) {
			$palitraSliderNav.eq(index).find('span').removeClass('active');
			$palitraSliderNav.eq(index).find('span').eq(index).addClass('active');
		}

		var $palitraSlider = $('.palitra__slider').flickity({
			pageDots: false,
			imagesLoaded: true,
			lazyLoad: 1,
			initialIndex: 1,
			adaptiveHeight: true,
			arrowShape: {
			  x0: 15,
			  x1: 40, y1: 25,
			  x2: 50, y2: 25,
			  x3: 25
			}
		});
		var palitraSliderFlkty = $palitraSlider.data('flickity');
		var $palitraSec = $('.palitra-sec-bg');
		$('.palitra__slider').on('select.flickity', function() {
			/*var thisSlideBg = $(this).find('.is-selected').css('background-image');
			$palitraSec.css('background-image', thisSlideBg);
			changePalitraNav(palitraSliderFlkty.selectedIndex);*/
			$palitraSec.removeClass('active').eq(palitraSliderFlkty.selectedIndex).addClass('active');
		})
	}

	if($('.big-slider__nav').length) {
		$('.big-slider__nav').flickity({
			asNavFor: '#big-slider-ship',
			contain: true,
			prevNextButtons: false,
			pageDots: false
		});
		$('.big-slider__select-prev').on( 'click', function() {
			$('#big-slider-ship').flickity('previous');
		});
		$('.big-slider__select-next').on( 'click', function() {
			$('#big-slider-ship').flickity('next');
		});
	}
/**************************************************
	End Flickity
***************************************************/


/**************************************************
	FancyBox
***************************************************/
	/*$('.fancybox').fancybox({
		padding : 0,
		openEffect  : 'elastic'
	});
	$(".fancybox-video").fancybox({
		padding: 0,
		maxWidth: 800,
		maxHeight: 600,
		openEffect: 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',

		helpers : {
			media : {}
		}
	});*/
/**************************************************
	End FancyBox
***************************************************/



/**************************************************
	Прокрутка к секциям
***************************************************/
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop:destination}, 1000);
		return false;
	});
/**************************************************
	End Прокрутка к секциям
***************************************************/


/**************************************************
	Show Visible Elements
***************************************************/
	/**
		 * Проверяет элемент на попадание в видимую часть экрана.
		 * Для попадания достаточно, чтобы верхняя или нижняя границы элемента были видны.
		 */
	function isVisible(elem) {
		var coords = elem.getBoundingClientRect();
		var windowHeight = document.documentElement.clientHeight - 60;

		// верхняя граница elem в пределах видимости ИЛИ нижняя граница видима
		var topVisible = coords.top > 0 && coords.top < windowHeight;
		var bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

		return topVisible || bottomVisible;
	}

	function showVisible() {
		var elements = document.querySelectorAll('.fade-top');

		for (var i = 0; i < elements.length; i++) {
			var element = elements[i];
			if (isVisible(element)) {
				if (!($(element).hasClass('fade-top--active'))) {
					var thisClass = element.getAttribute('class');
					element.setAttribute( 'class', thisClass + ' fade-top--active');
				}

			}
		}
	}

	window.onscroll = showVisible;
	showVisible();
/**************************************************
	End Show Visible
***************************************************/
});


/***********************
 Якоря в каталоге большом BEGIN
 ***********************/
$(document).ready(function() {
	$('.catalog-category__item-next').each(function () {
		var this_sec = $(this).parents('.catalog-category__item-wrap');
		var next_sec = this_sec.next('.catalog-category__item-wrap');
		var next_sec_name = next_sec.find('.catalog-category__item-title h3').text();
		var next_sec_id = next_sec.attr('id');
		console.log(next_sec_id);

		if (next_sec.length){
			$(this).text(next_sec_name).attr('href','#'+next_sec_id);
		} else {
			$(this).remove();
		}
	})
});
/***********************
 Якоря в каталоге большом END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
$.fancybox.defaults.buttons = ['close'];
$.fancybox.defaults.lang = 'ru';
$.fancybox.defaults.i18n =
	{
		'ru': {
			CLOSE: 'Закрыть',
			NEXT: 'Дальше',
			PREV: 'Назад',
			ERROR: 'Не удается загрузить. <br/> Попробуйте позднее.',
			PLAY_START: 'Начать слайдшоу',
			PLAY_STOP: 'Остановить слайдшоу',
			FULL_SCREEN: 'На весь экран',
			THUMBS: 'Превью'
		}
	};

function init_fancy() {
	$('.fancy').fancybox({
		buttons: ['close']
	});
	$('.fancy-modal').fancybox({
		selector: '',
		touch: false
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		defaultType: "iframe"
	});
	$('.fancy-iframe').fancybox({
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		}
	});
}

$(function () {
	init_fancy();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Cart slider BEGIN
 ***********************/
$(function($){
	var cartSlider = $('.cart-slider');

	cartSlider.flickity({
		contain: true,
		pageDots: false,
		imagesLoaded: true,
		arrowShape: {
			x0: 15,
			x1: 40, y1: 25,
			x2: 50, y2: 25,
			x3: 25
		}
	});

	var cartSliderThumbs = $('.cart-slider-thumbs');

	cartSliderThumbs.flickity({
		contain: true,
		pageDots: false,
		prevNextButtons: false,
		imagesLoaded: true,
		asNavFor: '.cart-slider'
	});

	$().fancybox({
		selector: '.fancy-cart-slider'
	});
});
/***********************
 Cart slider END
 ***********************/