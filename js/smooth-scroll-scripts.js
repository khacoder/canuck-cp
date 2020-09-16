/* jQuery smooth scroll doc-ready-scripts 3Jul2017
 * http://kevinsspace.ca
 * Canuck CP ClassicPress Theme
 * Copyright (C) 2020 or later Kevin Archibald Licensed GPLv2 or greater 
 * @source: https://css-tricks.com/smooth-scrolling-accessibility/
 */
jQuery( document ).ready( function( $ ) {
	$( window ).scroll( function () {
		if ( $( this ).scrollTop() > 100 ) {
			$( '.scrolltotop' ).fadeIn();
		} else {
			$( '.scrolltotop' ).fadeOut();
		}
	} );

	$( '.scrolltotop' ).click( function () {
		$( "html, body" ).animate( {
			scrollTop: 0
		}, 600 );
		$( "html,body" ).focus();
		return false;
	} );
} );

