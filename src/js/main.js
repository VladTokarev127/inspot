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

	$('.vacancy__top').click(function(e) {
		e.preventDefault();
		$(this)
			.toggleClass('is-active')
			.next()
			.slideToggle(700);
	});

	const swiper = new Swiper('.swiper', {
		autoHeight: false,
		pagination: {
			el: ".swiper-pagination",
		},
	});

});
