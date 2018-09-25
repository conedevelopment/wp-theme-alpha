( function( $ ) {
	if ( $( '.slider-posts' ).length ) {
		$( '.slider-posts' ).slick({
			arrows: false,
			centerMode: true,
			centerPadding: '0',
			mobileFirst: true,
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1000,
			responsive: [ {
				breakpoint: 783,
				settings: {
					centerPadding: '0',
					dots: false,
					variableWidth: true
				}
			}, {
				breakpoint: 1200,
				settings: {
					dots: false,
					variableWidth: true
				}
			} ]
		}).click( function( e ) {
			if ( e.pageX < $( window ).width() * ( 1 / 5 ) ) {
				$( this ).slick( 'slickPrev' );
			} else if ( e.pageX > $( window ).width() * ( 4 / 5 ) ) {
				$( this ).slick( 'slickNext' );
			}
		});
	}

}( jQuery ) );
