(function($) {
	if ($('.slider-posts').length) {
		$('.slider-posts').slick({
			arrows: false,
			centerMode: true,
			centerPadding: '0',
			mobileFirst: true,
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 1000,
			variableWidth: true
		}).click(function(e) {
			if (e.pageX < $(window).width() * (1 / 5) ) {
				$(this).slick('slickPrev');
			} else if(e.pageX > $(window).width() * (4 / 5) ) {
				$(this).slick('slickNext');
			}
		});
	}
}(jQuery) );
