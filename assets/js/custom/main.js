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

	if ( $( '.site-header[data-sticky="true"]' ).length ) {
		$( '.site-header[data-sticky="true"]' ).headroom({
			offset: 100
		});

		$( window ).scroll( function() {
			if ( 0 < $( window ).scrollTop() ) {
				$( '.site-header[data-sticky="true"]' ).addClass( 'is-scroll' );
			} else if ( 0 >= $( window ).scrollTop() ) {
				$( '.site-header[data-sticky="true"]' ).removeClass( 'is-scroll' );
			}
		});
	}

	if ( $( 'body[data-scroll-top="true"]' ).length ) {
		$( 'body[data-scroll-top="true"]' )
			.find( '.scroll-to-top' )
			.click( function() {
				$( 'html, body' ).animate({ scrollTop: 0 }, 'slow' );
				return false;
			});

		$( window ).scroll( function() {
			scrollToTop();
		});

		scrollToTop();

		function scrollToTop() {
			if ( 1000 < $( window ).scrollTop() ) {
				$( '.scroll-to-top' ).addClass( 'is-visible' );
			} else if ( 1000 >= $( window ).scrollTop() ) {
				$( '.scroll-to-top' ).removeClass( 'is-visible' );
			}
		}
	}

	$( '.site-header__search' ).on( 'click', function() {
		var searchForm = $( '.top-search-form' ),
			header = $( '.site-header' );

		searchForm.addClass( 'is-open' );
		header.addClass( 'is-search-open' );

		setTimeout( function() {
			searchForm.find( 'input' ).focus();
		}, 200 );
	});

	$( '.top-search-form__close' ).on( 'click', function( e ) {
		e.preventDefault();
		var searchForm = $( '.top-search-form' ),
			header = $( '.site-header' );

		searchForm.removeClass( 'is-open' );
		header.removeClass( 'is-search-open' );
		searchForm.find( 'input' ).blur();
	});

	if ( $( 'body[data-magnific="true"]' ).length ) {
		$(
			'a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]'
		).each( function() {
			if ( 0 == $( this ).parents( '.gallery' ).length ) {
				$( this ).magnificPopup({
					type: 'image',
					mainClass: 'mfp-with-zoom'
				});
			}
		});

		$( '.gallery' ).each( function() {
			$( this ).magnificPopup({
				delegate: 'a',
				type: 'image',
				mainClass: 'mfp-with-zoom',
				removalDelay: 250,
				gallery: {
					enabled: true
				},
				callbacks: {
					beforeOpen: function() {
						this.st.image.markup = this.st.image.markup.replace(
							'mfp-figure',
							'mfp-figure mfp-with-anim'
						);
					}
				}
			});
		});
	}
}(jQuery));
