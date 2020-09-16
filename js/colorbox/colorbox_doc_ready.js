/**
 * Canuck CP ClassicPress Theme colorbox doc ready script
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck CP ClassicPress Theme
 */

jQuery(document).ready(function($){ 
	$('a[href$="jpg"]').colorbox({rel:"gallery", maxWidth:"75%",maxHeight:"75%"});
	$('a[href$="png"]').colorbox({rel:"gallery", maxWidth:"75%",maxHeight:"75%"});
	$(".gallery-icon a").colorbox({rel:"gallery", transition:"none", maxWidth:"75%",maxHeight:"75%"}); 
});
