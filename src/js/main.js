$(function() {

	$('.hero__grid .hero__item').hover(function() {
		let index = $(this).index();
		let parent = $(this).parent();
		if(index != 0 && !parent.is('in-action')) {
			$('.hero__item').removeClass('hero__item_active');
			$(this).prev().addClass('hero__item_hide');
			$(this).addClass('hero__item_active');
			$(this).parent().addClass('in-action');
			setTimeout(() => {
				$(this).parent().removeClass('in-action');
			}, 700);
		}
	}, function() {
		$('.hero__item').removeClass('hero__item_active');
		$('.hero__item').removeClass('hero__item_hide');
		$('.hero__item').eq(0).addClass('hero__item_active');
		$(this).parent().removeClass('in-action');
	});

	function setHeader() {
		let scroll = $(window).scrollTop();
		if (scroll >= 450) {
			$('.header').addClass('header__fixed');
		} else {
			$('.header').removeClass('header__fixed');
		}
	}
	setHeader();

	$(window).scroll(function(e) {
		setHeader();
	});

	$('[data-accordion-trigger]').click(function(e) {
		e.preventDefault();
		$(this)
			.toggleClass('is-active')
			.next('[data-accordion-target]')
			.slideToggle(700);
		if($(this).is('.contacts__form-tab')) {
			$(this).next().find('.form_type').val($(this).text());
		}
	});

	$('[data-tab-content]').hide();
	$('[data-tab-content]:nth-child(1)').show();
	$(document).on('click','[data-tab]:not(.is-active)',function(e) {
		e.preventDefault();
		let index = $(this).index();
		let parent = $(this).parents('[data-tabs]');
		let contents = parent.next('[data-tab-contents]');
		let currentContent = contents.find('[data-tab-content]:eq('+ index +')');
		currentContent.find('.form_type').val($(this).text());
		parent.find('[data-tab]').removeClass('is-active');
		contents.find('[data-tab-content]').removeClass('is-active').fadeOut(300);
		setTimeout(() => {
			currentContent.fadeIn(300).addClass('is-active');
		}, 300)
		$(this).addClass('is-active');
	});

	$('.marquee').marquee({
		duration: 25000,
		gap: 0,
		duplicated: true
	});

	const tournamentSwiper = new Swiper('.tournament__swiper', {
		autoHeight: false,
		spaceBetween: 64,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	const clubsSwiper = new Swiper('.clubs__swiper', {
		autoHeight: false,
		spaceBetween: 90,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	const clubSwiper = new Swiper('.club__hero-swiper', {
		autoHeight: false,
		spaceBetween: 90,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	clubSwiper.on('slideChange', function(e) {
		let index = e.activeIndex;
		$('.club__hero-thumb')
			.removeClass('is-active')
			.eq(index)
			.addClass('is-active');
	});

	const heroSwiper = new Swiper('.hero__swiper', {
		autoHeight: false,
		spaceBetween: 15,
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	$('.club__hero-thumb').click(function(e) {
		e.preventDefault();
		let index = $(this).index();
		clubSwiper.slideTo(index);
	});

	$('.club__hero-swiper-full').magnificPopup({
		type: 'image',
		fixedContentPos: false,
		gallery: {
			enabled:true
		}
	});

	$('.header__btn').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('is-active');
		$('.header').toggleClass('is-active');
		$('.header__nav').toggleClass('is-active');
		$('body').toggleClass('is-fixed')
	});

	if($(window).width() < 1200) {
		$('.menu-item-has-children > a').click(function(e) {
			e.preventDefault();
			$(this).parent().toggleClass('is-active');
			$(this).next().stop().slideToggle(300);
		});
	} else {
		$('.menu-item-has-children').hover(function(e) {
			$(this).find('ul').stop().slideDown(300);
		}, function() {
			$(this).find('ul').stop().slideUp(300);
		});
	}

	$(document).on('click', '.clubs__show-more', function(e) {
		e.preventDefault();
		let ajaxurl = window.location.origin + '/wp-admin/admin-ajax.php';
		let paged = $(this).data('paged');
		let ths = $(this);
		$.ajax({
			url: ajaxurl,
			type: "post",
			data: {
				action: 'get_clubs',
				paged: paged,
			},
			beforeSend: function() {
				
			},
			success: function (html) {
				console.log(html.slice(0, -1));
				ths.remove();
				$('.clubs__list').append(html.slice(0,-1));
			},
			error: function() {
				console.log('Ошибка');
			},
			complete: function() {
				const clubsSwiper = new Swiper('.clubs__swiper', {
					autoHeight: false,
					spaceBetween: 54,
					effect: 'fade',
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},
				});
			}
		});
	})

	$('.popup-wrapper').hide();
	$('.popup-link').click(function(e) {
		e.preventDefault();
		var btn = $(this);
		var data = $(this).data('popup');
		var subject = $(this).data('subject');
		$('.popup-wrapper').addClass('hide');
		setTimeout(function() {
			$('.popup-wrapper').removeClass('active hide').hide();
			$('.popup-wrapper').each(function() {
				var id = $(this).attr('id');
				var ths = $(this);
				if (data == id) {
					ths.show().addClass('active');
					$('body').addClass('is-fixed');
				}
			});
		}, 300)
	});
	$(document).on('click', '.popup-close, .overlay, .popup-btn-close', function(e) {
		e.preventDefault();
		$('.popup-wrapper').addClass('hide');
		setTimeout(function() {
			$('.popup-wrapper').removeClass('active hide').hide();
			$('body').removeClass('is-fixed');
		}, 300)
	});

	if($('.popup__btns *').is('p')) {
		$('.popup__quiz-btn').unwrap();
	}

	let steps = $('.popup__step').length - 1;
	$('.popup__step:not(:first-child)').hide();
	$('.popup__quiz-btn_next').click(function(e) {
		e.preventDefault();
		let parent = $(this).parents('.popup__step');
		parent.hide().next().fadeIn(300);
	});
	$('.popup__quiz-btn_prev:not([disabled])').click(function(e) {
		e.preventDefault();
		let parent = $(this).parents('.popup__step');
		parent.hide().prev().fadeIn(300);
	});
	
	let handle = $( "#custom-handle" );
	$('#slider').slider({
		value:16,
		min: 3,
		max: 36,
		step: 1,
		range: 'min',
		create: function() {
			handle.text( $( this ).slider( "value" ) );
		},
		slide: function( event, ui ) {
			$('#amount').val(ui.value);
			handle.text( ui.value );
		}
	});
	$('#amount').val($('#slider').slider('value'));

});
