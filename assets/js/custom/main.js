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
}( jQuery ) );
