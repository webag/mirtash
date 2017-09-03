/***********************
 отправка формы в php BEGIN
 ***********************/
$(document).ready(function(){

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
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
 ***********************/

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