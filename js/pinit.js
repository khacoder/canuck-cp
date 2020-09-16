/* jQuery Pinterest Pin It doc-ready-script 3Jul2017
 * http://kevinsspace.ca
 * Canuck CP ClassicPress Theme
 * Copyright (C) 2020 or later Kevin Archibald Licensed GPLv2 or greater 
 * @source: https://css-tricks.com/smooth-scrolling-accessibility/
 */
jQuery( document ).ready( function( $ ) {
	(function(d){
		var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
		p.type = 'text/javascript';
		p.setAttribute( 'data-pin-hover', true );
		p.setAttribute( 'data-pin-round', true )
		p.async = true;
		p.src = '//assets.pinterest.com/js/pinit.js'; // phpcs:ignore
		f.parentNode.insertBefore(p, f);
	}(document));
} );

