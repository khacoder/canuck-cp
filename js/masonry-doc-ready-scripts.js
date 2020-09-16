/**
 * Canuck masonry-doc-ready-scripts
 * http://kevinsspace.ca
 * Canuck CP ClassicPress Theme
 * Copyright (C) 2020 or later Kevin Archibald Licensed GPLv3
 */
jQuery(document).ready(function($){
	// init Masonry
	var $grid = $('.masonry-gallery').masonry({
	  itemSelector: '.masonry-grid-item',
	  percentPosition: true,
	  columnWidth: '.masonry-grid-sizer'
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});
});
