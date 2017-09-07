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
			// lazyLoad: 1,
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
			$palitraSliderNav.eq(index).find('span').removeClass('active')
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
			var thisSlideBg = $(this).find('.is-selected').css('background-image');
			$palitraSec.css('background-image', thisSlideBg);
			changePalitraNav(palitraSliderFlkty.selectedIndex);
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
	$('.fancybox').fancybox({
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
	});
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