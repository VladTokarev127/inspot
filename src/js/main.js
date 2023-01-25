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
	});

	$('[data-tab-content]').hide();
	$('[data-tab-content]:nth-child(1)').show();
	$(document).on('click','[data-tab]:not(.is-active)',function(e) {
		e.preventDefault();
		let index = $(this).index();
		let parent = $(this).parents('[data-tabs]');
		let contents = parent.next('[data-tab-contents]');
		let currentContent = contents.find('[data-tab-content]:eq('+ index +')');
		parent.find('[data-tab]').removeClass('is-active');
		contents.find('[data-tab-content]').removeClass('is-active').fadeOut(300);
		setTimeout(() => {
			currentContent.fadeIn(300).addClass('is-active');
		}, 300)
		$(this).addClass('is-active');
	})

	const swiper = new Swiper('.swiper', {
		autoHeight: false,
		spaceBetween: 54,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

});
