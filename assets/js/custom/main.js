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
