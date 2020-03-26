/***********************
 Отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		const form = $(this);
		let send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		// empty file inputs fix for mac
		const fileInputs = $('input[type="file"]:not([disabled])', form);
		fileInputs.each(function (_, input) {
			if (input.files.length > 0) return;
			$(input).prop('disabled', true)
		});

		const form_data = new FormData(this);

		fileInputs.prop('disabled', false);

		$("[data-label]").each(function () {
			const input_name = $(this).attr('name');
			const input_label__name = input_name + '_label';
			const input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
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
				success: (function (result) {
					console.log(result);
					$.fancybox.close();
					if (result.indexOf("Mail FAIL") !== -1) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						setTimeout(function () {
							$.fancybox.open({src: '#modal-thanks'});
						}, 600);
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
					ym(44822359, 'reachGoal', 'order_done');
				})
			});
		}
	});
});
/***********************
 Отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
***********************/
$(function () {
	const telInputs = $("input[type='tel']");

	telInputs.on('focus',function () {
		if ($(this).get(0).value.length < 2){
			$(this).get(0).value = "+"
		}
	});

	telInputs.on('blur',function () {
		if ($(this).get(0).value === "+"){
			$(this).get(0).value = ""
		}
	})
});
/***********************
 Input mask END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
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
}

function init_fancy__video() {
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
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});
});
/***********************
 Waypoints END
 ***********************/


/***********************
 Lazy BEGIN
 ***********************/
function lazyLoad(){
	const lazyImgs = $('[data-lazy]');
	lazyImgs.each(function(){
		const lazyImage = $(this);
		const src = lazyImage.attr('data-lazy');
		lazyImage.attr('src',src);
	});
}

function lazyLoadBg(){
	const lazyImgs = $('[data-lazybg]');

	lazyImgs.each(function(){
		const lazyImage = $(this);
		const src = lazyImage.attr('data-lazybg');
		lazyImage.css('background-image','url('+src+')');
	});
}

$(function(){
	lazyLoad();
	lazyLoadBg();
});

$(window).on('load',function () {
	Waypoint.refreshAll();
});
/***********************
 Lazy END
 ***********************/


/**************************************************
 Custom File Input
 ***************************************************/
$(function($){
	$('.style-file').each( function(){
		const thisFileBlock = $(this);
		const input = thisFileBlock.find('input[type="file"]');
		const label = thisFileBlock.find('.style-file__text');
		const label_val = label.html();
		const deleteBtn = thisFileBlock.find('.style-file__delete');

		input.on('change', function(e){
			let fileName = '';

			if( this.files && this.files.length > 1 ) {
				fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
				thisFileBlock.addClass('style-file--selected');
			}
			else if( e.target.value ) {
				fileName = e.target.value.split('\\').pop();
				thisFileBlock.addClass('style-file--selected');
			} else {
				thisFileBlock.removeClass('style-file--selected');
			}

			if(fileName) {
				label.html(fileName);
			}
			else {
				label.html(label_val);
				thisFileBlock.removeClass('style-file--selected');
			}
		});

		// Firefox bug fix
		input
			.on( 'focus', function(){ input.addClass( 'has-focus' ); })
			.on( 'blur', function(){ input.removeClass( 'has-focus' ); });

		deleteBtn.on('click',function (e) {
			e.stopPropagation();
			const thisInput = $(this).siblings('[type="file"]');
			thisInput.val(null);
			label.html(label_val);
			thisFileBlock.removeClass('style-file--selected');
			return false;
		})
	});
});
/**************************************************
 End Custom File Input
 ***************************************************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function () {
	$('.burger').on('click', function () {
		$(this).toggleClass('active');
		$('.mob-panel').toggleClass('active');
		$('body').toggleClass('stopped');
	});

	$(document).on('click touchstart', function (e) {
		const div = $(".burger,.mob-panel");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
			$('.burger').removeClass('active');
			$('.mob-panel').removeClass('active');
			$('body').removeClass('stopped');
		}
	});
});
/***********************
 Mob menu END
 ***********************/


/***********************
 Logos slider BEGIN
 ***********************/
$(function($){
	const logosSlider = $('.s-logos-slider').flickity({
		cellAlign: 'left',
		contain: true,
		imagesLoaded: true,
		prevNextButtons: false,
		pageDots: false,
		wrapAround: true,
		selectedAttraction: 0.018,
		lazyLoad: 7,
		autoPlay: 1000
	});
});
/***********************
 Logos slider END
 ***********************/


/***********************
 Geo BEGIN
 ***********************/
function initGeo() {
	const locations = locations_from_admin;
	const geo_items = $('.geo-item');
	let markers = [];
	const normalIcon = {
		url: '/img/pin.svg',
		scaledSize: new google.maps.Size(22, 30)
	};
	const activeIcon = {
		url: '/img/pin-selected.svg',
		scaledSize: new google.maps.Size(22, 30)
	};
	const mapOptions = {
		center: new google.maps.LatLng(locations[0][1], locations[0][2]),
		zoom: 4,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		scrollwheel: false,
		styles: [{"featureType": "administrative", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "administrative", "elementType": "labels.text", "stylers": [{"lightness": "49"}, {"weight": "1"}, {"gamma": "1"}]}, {"featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{"gamma": "1"}, {"lightness": "67"}, {"saturation": "0"}, {"visibility": "on"}]}, {"featureType": "administrative.province", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": "50"}, {"visibility": "simplified"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {
			"featureType": "road.arterial",
			"elementType": "all",
			"stylers": [{"lightness": "30"}]
		}, {"featureType": "road.local", "elementType": "all", "stylers": [{"lightness": "40"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}, {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"lightness": "-7"}, {"gamma": "1.26"}, {"saturation": "-53"}, {"color": "#e0e0e0"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"lightness": -25}, {"saturation": -100}]}]
	};
	const geomap = new google.maps.Map(document.getElementById("geomap"), mapOptions);

	for (let i = 0; i < locations.length; i++) {
		const marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: geomap,
			icon: normalIcon,
			optimized: false,
			title: locations[i][0],
			zIndex: 1,
			activeState: false
		});
		markers.push(marker);
	}

	for (let i = 0; i < markers.length; i++) {
		google.maps.event.addListener(markers[i], 'click', function () {
			for (let j = 0; j < markers.length; j++) {
				markers[j].setIcon(normalIcon);
				markers[j].setZIndex(1);
				markers[j].activeState = false;
			}
			this.setIcon(activeIcon);
			this.setZIndex(2);
			this.activeState = true;
			geo_items.removeClass('active').eq(i).addClass('active');
			const thisImg = geo_items.eq(i).find('.geo-item__img');
			const thisImgSrc = thisImg.attr('data-img');
			thisImg.attr('src', thisImgSrc);
			geomap.panTo(this.getPosition());
			myPanBy();
		});
		google.maps.event.addListener(markers[i], 'mouseover', function() {
			this.setIcon(activeIcon);
		});
		google.maps.event.addListener(markers[i], 'mouseout', function() {
			if (!this.activeState){
				this.setIcon(normalIcon);
			}
		});
	}

	$(window).on('resize', function () {
		const currCenter = geomap.getCenter();
		google.maps.event.trigger(geomap, 'resize');
		geomap.setCenter(currCenter);
	});

	markers[0].setIcon(activeIcon);
	markers[0].activeState = true;
	geo_items.eq(0).addClass('active');
	myPanBy();

	function myPanBy() {
		if (window.matchMedia("(max-width: 768px)").matches) {
			geomap.panBy(0,0);
		} else {
			geomap.panBy(150,0);
		}
	}
}

$(function($){
	function addScript( src ) {
		let s = document.createElement('script');
		s.setAttribute('src', src);
		document.body.appendChild(s);
	}

	const geoSection = $('.s-geo');
	if (geoSection.length){
		geoSection.waypoint(function () {
			addScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48&callback=initGeo');
			this.destroy();
		}, {
			offset: '100%'
		});
	}
});
/***********************
 Geo END
 ***********************/


/***********************
Kotel calc BEGIN
***********************/
$(function($){
	const kotelPricesTable = {
		0.5: 2890000,
		1: 3905000,
		1.5: 4690000,
		2: 5680000,
		2.5: 6453000,
		3: 7690000,
		3.5: 7920000,
		4: 8392000,
		4.5: 8887000,
		5: 9491000
	};

	const gasDieselPriceTableAdd = {
		0.5: 450000,
		1: 480000,
		1.5: 540000,
		2: 620000,
		2.5: 560000,
		3: 570000,
		3.5: 550000,
		4: 550000,
		4.5: 655000,
		5: 670000
	};

	const ramaPriceTableAdd = {
		0.5: 100000,
		1: 150000,
		1.5: 170000,
		2: 200000,
		2.5: 220000,
		3: 250000,
		3.5: 249000,
		4: 280000,
		4.5: 300000,
		5: 350000
	};

	const gvsPricesTable = {
		0.5: 250000,
		1: 260000,
		1.5: 290000,
		2: 310000,
		2.5: 330000,
		3: 370000,
		3.5: 390000,
		4: 430000,
		4.5: 500000,
		5: 550000
	};

	const strengthInput = $(".calc-strength");
	const pricePlace = $('.calc-result__sum');

	strengthInput.ionRangeSlider({
		values: [0.5,1,1.5,2,2.5,3,3.5,4,4.5,5],
		grid: true,
		hide_min_max: true,
		hide_from_to: true,
		postfix: 'мВт',
		onStart: function () {
			kotelCalc();
		},
		onFinish: function () {
			kotelCalc();
		},
	});

	$("[name='type'],[name='gvs'],[name='variant']").on('change', function () {
		kotelCalc()
	});

	function kotelCalc() {
		const type = $("[name='type']:checked").val();
		const hasGvs = $("[name='gvs']:checked").val();
		const variant = $("[name='variant']:checked").val();
		const strength = strengthInput.val();

		let resultSum = kotelPricesTable[strength];
		if (type === 'gas-diesel'){
			resultSum += gasDieselPriceTableAdd[strength];
		}
		if (hasGvs === "yes"){
			resultSum += gvsPricesTable[strength];
		}
		if (variant === "rama"){
			resultSum -= ramaPriceTableAdd[strength];
		}

		const oldPrice = parseInt(pricePlace.text().replace(/\s/g, ''));
		number_to(pricePlace, oldPrice, resultSum, 700);
		// console.log(type,hasGvs,strength,kotelPrice,gvsPrice);
	}

	function prettifyNumber(number) {
		return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
	}

	function number_to(element, from, to, duration) {
		let start = new Date().getTime();
		setTimeout(function () {
			let now = (new Date().getTime()) - start;
			let progress = now / duration;
			let result = Math.floor((to - from) * progress + from);
			let text_to_show = progress < 1 ? result : to;
			text_to_show = prettifyNumber(text_to_show);
			element.text(text_to_show);
			if (progress < 1) setTimeout(arguments.callee, 10);
		}, 10);
	}
});
/***********************
Kotel calc END
***********************/


/***********************
 Filter mob open BEGIN
 ***********************/
$(function($){
	$('.filter-show-btn').on('click',function (e) {
		e.preventDefault();
		$('.filters').slideToggle();
	})
});
/***********************
 Filter mob open END
 ***********************/