( function( $ ) {
	new Canvi({
		content: '.js-canvi-content',
		navbar: '.js-canvi-navbar--right',
		openButton: '.js-canvi-open-button--right',
		position: 'right',
		pushContent: false,
		isDebug: false,
		speed: '0.2s',
		width: '70vw',
		responsiveWidths: [
			{
				breakpoint: '600px',
				width: '340px'
			}
		]
	});
	
	if( $('.site-header[data-sticky="true"]').length ) {
		$('.site-header[data-sticky="true"]').headroom({
			offset: 100
		});

		$(window).scroll(function() {
			if($(window).scrollTop() > 0) {
				$('.site-header[data-sticky="true"]').addClass('is-scroll');
			} else if($(window).scrollTop() <= 0) {
				$('.site-header[data-sticky="true"]').removeClass('is-scroll');
			}
		});
	}

	$('.site-header__search').on('click', function() {
		var searchForm = $('.top-search-form'),
			header = $('.site-header');

		searchForm.addClass('is-open');
		header.addClass('is-search-open');

		setTimeout(function() {
			searchForm.find('input').focus();
		}, 200);
	});

	$('.top-search-form__close').on('click', function(e) {
		e.preventDefault();
		var searchForm = $('.top-search-form'),
			header = $('.site-header');

		searchForm.removeClass('is-open');
		header.removeClass('is-search-open');
		searchForm.find('input').blur();
	});
}( jQuery ) );
