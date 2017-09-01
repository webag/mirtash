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
	Catalog Big Menu
***************************************************/

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
	$('body a[data-anchor]').click(function (event) {
		event.preventDefault();
		elementClick = "#" + $(this).data("anchor");
		destination = $(elementClick).offset().top;
		$('html').velocity( "scroll", { duration: 1000, easing: "easeInOutCubic", offset: destination, mobileHA: true });
		$('body').velocity( "scroll", { duration: 1000, easing: "easeInOutCubic", offset: destination, mobileHA: true });
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


/**************************************************
	Google Maps
***************************************************/
	// gmaps
	if ($('#googlemap').length) { //если карта существует
		$(document).ready(function(){

			google.maps.event.addDomListener(window, 'load', initMap);

			function initMap() {
				var latLng= {};
				latLng.lat = 55.782177;
				latLng.lng = 49.155282;
				var mapOptions = {
					zoom: 16,
					scrollwheel: false,
					mapTypeControl: false,
					zoomControlOptions: {
						position: google.maps.ControlPosition.LEFT_CENTER
					},
					center: new google.maps.LatLng(latLng.lat, latLng.lng)
				};

				var mapElement = document.getElementById('googlemap');

				var map = new google.maps.Map(mapElement, mapOptions);

				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(latLng.lat, latLng.lng),
					map: map,
					title: 'Республика Татарстан, г. Казань, д. Калинино, ул. Центральная, д. 101'
				});
			}
		});
	}
/**************************************************
	End Google Maps
***************************************************/


/**************************************************
	Ajax Mail
***************************************************/

	var form = $(".ajax-form");
	form.on("submit", function(event) {
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		})

		btn = $(this).find('.btn');

		if (send == true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData:false,
				data: new FormData(this),
				beforeSend: function(){
					btn.addClass("loading");
				}
			}).success(function(result) {
				console.log(result);
				btn.removeClass("loading");
				$.fancybox($('#modal-thanks'), {padding: 0});
				setTimeout(function() {$.fancybox.close();},4500);
				form.find("input[type!='hidden']").val('');
				btn.addClass('btn_good');
			});
		}
	});
/**************************************************
	End Ajax Mail
***************************************************/

});