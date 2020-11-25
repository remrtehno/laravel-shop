$(function () {
	$(".all_categories_btn").click(function () {
		$(".product-categories-wrap").toggle();
	});
	$(".typeahead")
		.autocomplete({
			minLength: 2,
			select: function (event, ui) {
				if(locale) {
					window.location = window.location.origin + '/' + locale + "/detail/" + ui.item.slug;
					return;
				}
				window.location = "/detail/" + ui.item.slug;
				console.log(event);
			},

			source: function (request, response) {
				$.ajax({
					url: "/api/products",
					dataType: "json",
					data: {
						q: request,
					},
					success: function (data) {
						response(data.success);
					},
				});
			},
		})
		.autocomplete("instance")._renderItem = function (ul, item) {
		var img = "no-image.jpg";
		if (item.img) img = item.img;

		var title = '';
		if(locale) {
			title = item['title_'+locale];

		} else {
			title = item.title;
		}



		return $("<li>")
			.attr("data-value", item.id)
			.append(
				"<img class='search-img' src='/uploads/products/small/" + img + "'>"
			)

			.append(title)
				
			.appendTo(ul);
	};

	function getMap(postition, mapContainer, name) {
		ymaps.ready(function () {
			var latlist = [
				41.3194678,
				41.3192356,
				41.3195783,
				41.3193455,
				41.3190455,
				41.31934,
				41.3191234,
				41.319876,
				41.3190816,
				41.319233,
			];
			var gavList = [
				69.31922325,
				69.3191223,
				69.3191233,
				69.3195653,
				69.3192345,
				69.3195433,
				69.31913456,
				69.3193232,
				69.31942232,
				69.31932222,
			];
			var i = 0;
			var myMap = new ymaps.Map(
				mapContainer,
				{
					center: postition.split(","),
					zoom: 16,
				},
				{
					searchControlProvider: "yandex#search",
				}
			);

			// Создаём макет содержимого.
			var MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
				'<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
			);
			var lat = 0,
				gavnitud = 0;
			var myPlacemark = new ymaps.Placemark(
				myMap.getCenter(),
				{
					hintContent: name,
					balloonContent: name,
				},
				{
					// Опции.
					// Необходимо указать данный тип макета.
					iconLayout: "default#image",
					// Своё изображение иконки метки.
					iconImageHref: "/public/uploads/company-marker.png",
					// Размеры метки.
					iconImageSize: [70, 82],
					iconImageOffset: [-24, -24],
					// Смещение левого верхнего угла иконки относительно
					// её "ножки" (точки привязки).
					/*iconImageOffset: [-5, -38]*/
				}
			);
		});
	}

	$(".map").each(function () {
		var coordinate = $(this).data("map");
		var title = $(this).data("title");
		if (coordinate) {
			getMap(coordinate, $(this).get(0), title);
		}
	});

	$(".addToCart").click(function (e) {
		e.preventDefault();
		$.ajax({
			url: "/api/products",
			dataType: "json",
			data: {
				q: request,
			},
			success: function (data) {
				response(data.success);
			},
		});
	});


	function deliveryOptions() {

	}

	$('.delivery').change(function () {
		if($(this).is(":checked")) {

            var preTotal = $('[data-total]').data('total');// && $('[data-total]').data('total');//.replace(/,/g, '');

			var total = $(this).data('amount') || 0;

            total = parseFloat(preTotal)  + parseFloat(total)*parseFloat(preTotal);
            total = Math.ceil(total);

			$('.total').val(total).html(total);

		}
    })
});
