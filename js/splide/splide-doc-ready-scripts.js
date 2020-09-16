/**
 * Flex widget slider doc ready script
 *
 * Sets up the flex sliders used by the flex slider widget in the theme.
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck CP ClassicPress Theme
 */

document.addEventListener( 'DOMContentLoaded', function () {
	var elms = document.getElementsByClassName( 'gallery-post-thumbnails' );
	for ( var i = 0, len = elms.length; i < len; i++ ) {
		var idThumbnails = "gallery-post-thumbnails-id".concat( i );
		var idFeature    = "gallery-post-feature-id".concat( i );
		document.getElementById( "gallery-post-thumbnails-id" ).id = idThumbnails;
		document.getElementById( "gallery-post-feature-id" ).id = idFeature;
		var secondarySlider = new Splide( '#'.concat( idThumbnails ), {
			perPage      : 5,
			rewind       : true,
			gap          : 5,
			pagination   : false,
			isNavigation : true,
			focus        : 'center',
		} ).mount();
		var primarySlider = new Splide( '#'.concat( idFeature ), {
			type       : 'fade',
			pagination : false,
			arrows     : false,
		} );
		primarySlider.sync( secondarySlider ).mount();
	}
});
// home section 12
document.addEventListener( 'DOMContentLoaded', function () {
	var sec12 = document.getElementById( 'home-12-carousel' );
	if ( sec12 ) {
		new Splide( '#home-12-carousel', {
			type: 'loop',
			perPage: 4,
			perMove: 2,
			gap: '5px',
			autoplay: true,
			breakpoints: {
				'900': {
					perPage: 3,
				},
				'700': {
					perPage: 2,
				},
			}
		} ).mount();
	}
	
} );

document.addEventListener( 'DOMContentLoaded', function () {
	var sec13 = document.getElementById( 'home-13-carousel' );
	if ( sec13 ) {
		new Splide( '#home-13-carousel', {
			type: 'loop',
			perPage: 6,
			perMove: 2,
			gap: '20px',
			autoplay: true,
			breakpoints: {
				'900': {
					perPage: 4,
				},
				'700': {
					perPage: 3,
				},
			}
		} ).mount();
	}
} );

document.addEventListener( 'DOMContentLoaded', function () {
	var elms = document.getElementsByClassName( 'canuck-cp-slider-widget' );
	if ( elms ) {
		for ( var i = 0, len = elms.length; i < len; i++ ) {
			new Splide( elms[ i ] ).mount();
		}
	}
});

document.addEventListener( 'DOMContentLoaded', function () {
	var feature3to1 = document.getElementById( 'canuck-cp-feature-3to1-id' );
	if ( feature3to1 ) {
		new Splide( '#canuck-cp-feature-3to1-id' ).mount();
	}
});

document.addEventListener( 'DOMContentLoaded', function () {
	var featureFullsize = document.getElementById( 'canuck-cp-feature-fullsize-id' );
	if ( featureFullsize ) {
		new Splide( '#canuck-cp-feature-fullsize-id' ).mount();
	}
});

document.addEventListener( 'DOMContentLoaded', function () {
	var featureThumb = document.getElementById( 'canuck-cp-feature-thumb-wrapper-id' );
	if ( featureThumb ) {
		var featureSecondarySlider = new Splide( '#canuck-cp-feature-thumbslider-thumb-id', {
			perPage      : 6,
			rewind       : true,
			gap          : 5,
			pagination   : false,
			isNavigation : true,
			focus        : 'center',
		} ).mount();
		var featurePrimarySlider = new Splide( '#canuck-cp-feature-thumbslider-feature-id', {
			type       : 'fade',
			pagination : false,
			arrows     : false,
		} );
		featurePrimarySlider.sync( featureSecondarySlider ).mount();
	}
});

document.addEventListener( 'DOMContentLoaded', function () {
	var featureFullsize = document.getElementById( 'canuck-cp-feature-15to1-id' );
	if ( featureFullsize ) {
		new Splide( '#canuck-cp-feature-15to1-id' ).mount();
	}
});