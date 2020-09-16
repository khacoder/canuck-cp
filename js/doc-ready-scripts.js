/**
 * Canuck CP ClassicPress Theme doc ready script
 *
 * Used for search trigger.
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck CP ClassicPress Theme
 */
jQuery(document).ready(function($){ 
	$( 'span.canuck-cp-show-search-trigger' ).click( function() {
		if ( $( '.canuck-cp-search' ).hasClass( 'search-on' ) ) {
			$( '.canuck-cp-search' ).removeClass( 'search-on' );
			return false;
		} else {
			$( '.canuck-cp-search' ).addClass( 'search-on' );
			return false;
		}
	});
});

/**
 * Canuck CP ClassicPress Theme Navigation script
 *
 * This script is used as a helper for the responsive menu system.
 * http://kevinsspace.ca
 * Canuck CP ClassicPress Theme
 * Copyright (C) 2020 or later Kevin Archibald Licensed GPLv2 or later 
 */

(function( $ ) {
	
	var container, button, dropdown, icon, screenreadertext, parentLink, menu, submenu, links, i, len;
	container = document.getElementById( 'main-header' );
	if ( ! container ) {
		return;
	}
	
	button = container.getElementsByTagName( 'button' )[0];
	
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'nav' )[0];
	
	function canuckcpMainNavInit( container ) {
		var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false });
		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );
		// sequence dropdown toggle class.
		$('.dropdown-toggle').each( function(i){
			$(this).addClass('toggle-' + (i+1));
		});
		// add toggle classes to sub menu ul.
		$('.menu-item-has-children ul').each( function(i){
			$(this).addClass('toggle-ul-' + (i+1));
		});
		// initiate main button screen reader text.
		$('.menu-1-toggle-access').html( '<span class="screen-reader-text">' + accessibleNavigationScreenReaderText.expandMain + '</span>' );
	}

	canuckcpMainNavInit( $( '.nav-container' ) );

	$('.menu-1-toggle').click(function() {
		if ( $('.main-nav').hasClass('toggle-on' ) ) {
			$('.main-nav').removeClass('toggle-on');
			$('.menu-1-toggle').removeClass('toggle-on');
			$('.menu-1-toggle').attr('aria-expanded', 'false');
			$('.menu-1-toggle-access').html( '<span class="screen-reader-text">' + accessibleNavigationScreenReaderText.expandMain + '</span>' );
		} else {
			$('.main-nav').addClass('toggle-on');
			$('.menu-1-toggle').removeClass('toggle-off');
			$('.menu-1-toggle').addClass('toggle-on');
			$('.menu-1-toggle').attr('aria-expanded', 'true');
			$('.menu-1-toggle-access').html( '<span class="screen-reader-text">' + accessibleNavigationScreenReaderText.collapseMain + '</span>' );
		}
	});
	// add toggle-ul-on click functions.
	$( '.dropdown-toggle' ).each( function(i){
		$( '.toggle-' + (i+1) ).click(function() {
			if ( $( '.toggle-' + (i+1) ).hasClass('toggle-button-on') ) {
				$('.toggle-' + (i+1) ).attr('aria-expanded', 'false');
			} else {
				$('.toggle-' + (i+1) ).attr('aria-expanded', 'true');
			}
			$('.toggle-' + (i+1) ).toggleClass('toggle-button-on');
			$('ul.toggle-ul-' + (i+1) ).toggleClass( 'toggle-ul-on');
		});
	});
	
	// add toggle-on class to existing sidebar buttons so if they exist they will display.
	if ( $('.toggle-sb-a').length ) {
		$('.sidebar-a-toggle').addClass('toggle-on');
		$('.sidebar-a-toggle').removeClass('toggle-off');
	} else {
		$('.sidebar-a-toggle').removeClass('toggle-on');
		$('.sidebar-a-toggle').addClass('toggle-off');
	}
	// left toggle action.
	$( '.sidebar-a-toggle').click(function() {
		if ( $( '.toggle-sb-a').hasClass('toggle-on') ) {
			$('.toggle-sb-a').removeClass('toggle-on');
			$('.toggle-sb-a').addClass('toggle-off');
			$('.toggle-sb-a').attr('aria-expanded', 'false')
			$('.sidebar-a-toggle').attr('aria-expanded', 'false')
		} else {
			$('.toggle-sb-a').addClass('toggle-on');
			$('.toggle-sb-a').removeClass('toggle-off');
			$('.toggle-sb-a').attr('aria-expanded', 'true')
			$('.sidebar-a-toggle').attr('aria-expanded', 'true')
		}
	});
	
	// add toggle-on class to existing sidebar buttons so if they exist they will display.
	if ( $('.toggle-sb-b').length ) {
		$('.sidebar-b-toggle').addClass('toggle-on');
		$('.sidebar-b-toggle').removeClass('toggle-off');
	} else {
		$('.sidebar-b-toggle').removeClass('toggle-on');
		$('.sidebar-b-toggle').addClass('toggle-off');
	}
	// left toggle action.
	$( '.sidebar-b-toggle').click(function() {
		if ( $( '.toggle-sb-b').hasClass('toggle-on') ) {
			$('.toggle-sb-b').removeClass('toggle-on');
			$('.toggle-sb-b').addClass('toggle-off');
			$('.toggle-sb-b').attr('aria-expanded', 'false')
			$('.sidebar-b-toggle').attr('aria-expanded', 'false')
		} else {
			$('.toggle-sb-b').addClass('toggle-on');
			$('.toggle-sb-b').removeClass('toggle-off');
			$('.toggle-sb-b').attr('aria-expanded', 'true')
			$('.sidebar-b-toggle').attr('aria-expanded', 'true')
		}
	});

	// Get all the link elements within the primary menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-container' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}
			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
})( jQuery );

/**
 * Sticky menu script.
 * Used to add body class when stick scroll achieved.
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck CP ClassicPress Theme
 */
jQuery( document ).ready( function( $ ) {
	window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function( f ){ return setTimeout( f, 1000 / 60 ); };

	$( function( jQuery ) {
		var scrollPos = $( window ).scrollTop(), resizetimer,  stickyclass = "sticky";
		if ( scrollPos > 10 ) {
			jQuery( document.body).addClass( stickyclass );
		}
		function canuckcpMakesticky() {
			var scrollTop = jQuery( document ).scrollTop(), $body = jQuery( document.body );
			if ( scrollTop >= 75 ){
				if ( !$body.hasClass( stickyclass ) ) {
					$body.addClass( stickyclass );
				}
			} else {
				if ( $body.hasClass( stickyclass ) ) {
					$body.removeClass( stickyclass );
				}
			}
		}
		jQuery( window ).on( "load", function() {
			jQuery( window ).on( "scroll", function() {
				requestAnimationFrame( canuckcpMakesticky );
			});
			jQuery( window ).on( "resize", function() {
				clearTimeout( resizetimer );
				resizetimer = setTimeout( function() {
				canuckcpMakesticky();
				}, 50 );
			} );
		} );
	} );
} );
