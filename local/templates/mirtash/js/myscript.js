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
	}
/**************************************************
  End Nice Select
***************************************************/


/**************************************************
	Catalog Big Menu
***************************************************

	if($('.catalog-category__link-list').length) {
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
	Flickity
***************************************************/
	if($('.about-gallery__slider').length) {
		$('.about-gallery__slider').flickity({
			pageDots: false,
			imagesLoaded: true,
			lazyLoad: 1,
			initialIndex: 1
		});

		// jQuery
		$('.about-gallery__slider').on('select.flickity', function() {
			$('.is-selected').removeClass('next-selected prev-selected');
			$('.is-selected').next().addClass('next-selected');
			$('.is-selected').prev().addClass('prev-selected');
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
		var windowHeight = document.documentElement.clientHeight;

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