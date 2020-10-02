<?php
/**
 * Skin CSS for Canuck CP ClassicPress Theme
 *
 * This file loads the skin css for the theme
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/**
 * Set up skin css for inclusion using add_inline_style().
 */
function canuckcp_skin_css() {
	/**
	 * ---------- Basic Styles
	 * general font color : charcoal #474747 rgba(71,71,71,1 )
	 * general link color :#7f7f7f;
	 * border colors: #7f7f7f;
	 * general font hover : $primary_accent
	 * a:hover $secondary_accent
	 * background accents : light gray #e3e3e3 rgba( 227,227,227,1)
	 * background fonts : med gray #d3d3d3 rgba( 211,211,211,1)
	 * image overlays: $primary_accent
	 * -------------- footer
	 * background: #161616;
	 * titles: #ffffff;
	 * links: #7f7f7f;
	 * links hover: eaeaea;
	 */
	// First get the color scheme to allow defaults button hovers.
	$color_scheme       = get_theme_mod( 'canuckcp_color_scheme', 'gray_pink' );
	$use_custom_accents = get_theme_mod( 'canuckcp_use_custom_accent_colors', false );
	if ( false === $use_custom_accents ) {
		if ( 'gray-green' === $color_scheme ) {
			$primary_accent   = '#19c143';
			$secondary_accent = '#16aee5';
		} elseif ( 'gray-red' === $color_scheme ) {
			$primary_accent   = '#f20202';
			$secondary_accent = '#19c143';
		} elseif ( 'gray-blue' === $color_scheme ) {
			$primary_accent   = '#16aee5';
			$secondary_accent = '#8825ea';
		} else {
			$primary_accent   = '#ed1651';
			$secondary_accent = '#16aee5';
		}
	} else {
		// Note to reviewers, sanitization of the option colors done once, to reduce function calls.
		$primary_accent   = sanitize_hex_color( get_theme_mod( 'canuckcp_custom_primary_accent_color', '#ed1651' ) );
		$secondary_accent = sanitize_hex_color( get_theme_mod( 'canuckcp_custom_secondary_accent_color', '#16aee5' ) );
		if ( '' === $primary_accent ) {
			$primary_accent = '#ed1651';
		}
		if ( '' === $secondary_accent ) {
			$primary_accent = '#16aee5';
		}
	}
	$skin_css = '';
	/* ******************************************************************************** General */
	$skin_css .= 'body { color: #474747; }' . PHP_EOL;
	$skin_css .= 'blockquote p:before { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= 'pre { font-family: monospace; border-radius: 10px; font-size: 1em; margin: 1em 0 0 0; padding: 1em; overflow-x: auto; border: solid 5px #474747; color: #474747; background: #e3e3e3; }' . PHP_EOL;
	$skin_css .= 'code { background: #e3e3e3; }' . PHP_EOL;
	$skin_css .= 'a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= 'a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= 'th { border: 1px solid #474747; background-color: #e3e3e3; }' . PHP_EOL;
	$skin_css .= 'tfoot { background-color: #e3e3e3; }' . PHP_EOL;
	$skin_css .= 'td { border: 1px solid #474747; }' . PHP_EOL;
	$skin_css .= 'body .scrolltotop { color: rgba(255,255,255,.3); background-color: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.3); }' . PHP_EOL;
	$skin_css .= 'body.sticky .scrolltotop:hover svg path { fill: ' . $primary_accent . '; }' . PHP_EOL;
	/* ******************************************************************************** Header */
	$skin_css .= '.header-wide-image .header-topstrip-wide { background-color: rgba(0,0,0,.5); }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-topstrip-wide,.header-wide-slider .header-topstrip-wide { background-color: rgba(0,0,0,.2); }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-topstrip-left,.header-wide-slider .header-topstrip-left { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-topstrip-left svg path,.header-wide-slider .header-topstrip-left svg path { fill: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-topstrip-left a,.header-wide-slider .header-topstrip-left a { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-image .header-topstrip-left { color: #eaeaea; }' . PHP_EOL;
	$skin_css .= '.header-wide-image .header-topstrip-left a { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.header-topstrip-left a:hover,.header-topstrip-left a:focus,.footer-topstrip-left a:hover,.footer-topstrip-left a:focus { outline: none; background-color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.header-topstrip-left a:hover svg path,.header-topstrip-left a:focus svg path,.footer-topstrip-left a:hover svg path,.footer-topstrip-left a:focus svg path { fill: #ffffff; transition: .75s ease; }' . PHP_EOL;
	$skin_css .= '.canuck-cp-show-search-trigger:hover svg path,.canuck-cp-show-search-trigger a:focus svg path { fill: #ffffff; }' . PHP_EOL;
	$skin_css .= '.canuck-cp-search .searchform .search-field { background-color: ' . $primary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.canuck-cp-show-search-trigger a:focus,.canuck-cp-show-search-trigger:hover { outline: none; border: none; background-color: ' . $primary_accent . '; transition: .75s ease; }' . PHP_EOL;
	$skin_css .= '.canuck-cp-search-icon-form:hover svg path { fill: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-logo-menu-strip nav a,.header-wide-slider .header-logo-menu-strip nav a { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-image .header-logo-menu-strip nav a { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature .header-logo-menu-strip nav a:hover,.header-wide-slider .header-logo-menu-strip nav a:hover,.header-wide-image .header-logo-menu-strip nav a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= 'body.sticky .header-wide-no-feature,body.sticky .header-wide-slider { background-color: #ffffff; border-bottom: 1px solid #e8e8e8; }' . PHP_EOL;
	$skin_css .= 'body.sticky .header-wide-image { background-color: #ffffff; border-bottom: 1px solid #e8e8e8; }' . PHP_EOL;
	$skin_css .= 'body.sticky .header-logo-menu-strip nav { color: #474747; }' . PHP_EOL;
	$skin_css .= 'body.sticky .header-logo-menu-strip nav a { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-image-overlay { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature a svg path,.header-wide-slider a svg path { fill: #7f7f7f; }' . PHP_EOL;
	/* ******************************************************************************** Navigation */
	$skin_css .= 'button.menu-1-toggle:hover,button.menu-1-toggle:focus { background-color: ' . $primary_accent . '; transition: .5s ease-in; }' . PHP_EOL;
	$skin_css .= 'button.menu-1-toggle:hover svg path,button.menu-1-toggle:focus svg path { fill: #ffffff; }' . PHP_EOL;
	$skin_css .= 'button.sidebar-a-toggle, button.sidebar-b-toggle { color: rgba(255,255,255,.6); background-color: rgba(0,0,0,0.3); border: 1px solid #ffffff; }' . PHP_EOL;
	$skin_css .= 'button.sidebar-a-toggle:hover svg path, button.sidebar-b-toggle:hover svg path { fill: ' . $primary_accent . '; transition: .5s ease-in; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature button, .header-wide-slider button { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-image button { color: #ffffff; }' . PHP_EOL;
	$skin_css .= 'body.sticky .header-wide-image button { color: #474747; }' . PHP_EOL;
	$skin_css .= '.header-wide-no-feature button:hover,.header-wide-slider button:hover,.header-wide-image button:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul { border-bottom: none; }' . PHP_EOL;
	$skin_css .= 'body.sticky #main-menu-right ul li a:focus,body.sticky #main-menu-right ul li button:focus { outline: none; color: #ffffff; background-color:' . $secondary_accent . '; border-radius: 3px; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li a:focus,#main-menu-right ul li a:hover,#main-menu-right ul li button:focus,#main-menu-right ul li button:hover { outline: none; color: #ffffff; background-color: ' . $secondary_accent . '; border-radius: 3px; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li.current-menu-item > a,#main-menu-right ul li.current-menu-ancestor > a { color: #ffffff; background-color: ' . $primary_accent . '; border-radius: 3px; }' . PHP_EOL;
	$skin_css .= 'body.sticky #main-menu-right ul li.current-menu-item > a,body.sticky #main-menu-right ul li.current-menu-ancestor > a { color: #ffffff; background-color: ' . $primary_accent . '; border-radius: 3px; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li:hover > ul,#main-menu-right ul li.focus > ul { color: #474747; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li > a { color: #474747; }' . PHP_EOL;
	$skin_css .= 'body.sticky #main-menu-right ul ul li.current-menu-ancestor > a,body.sticky #main-menu-right ul ul li.current-menu-item > a,#main-menu-right ul ul li.current-menu-ancestor > a,#main-menu-right ul ul li.current-menu-item > a { outline: none; background-color: ' . $primary_accent . '; color: #ffffff; border-radius: 0; }' . PHP_EOL;
	$skin_css .= 'body.sticky #main-menu-right ul ul li:hover > a,body.sticky #main-menu-right ul ul li.focus > a,#main-menu-right ul ul li:hover > a,#main-menu-right ul ul li.focus > a { outline: none; background-color: ' . $secondary_accent . '; color: #ffffff; border-radius: 0; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li.menu-item-has-children > a:before { color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li.menu-item-has-children:hover > a:before { color: #ffffff; }' . PHP_EOL;
	$skin_css .= 'body.sticky #main-menu-right ul ul li.current-menu-ancestor > a:before,body.sticky #main-menu-right ul ul li.current-menu-item > a:before,#main-menu-right ul ul li.current-menu-ancestor > a:before,#main-menu-right ul ul li.current-menu-item > a:before  { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li:hover > ul { color: #474747; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li:hover > a,#main-menu-right ul ul ul li:focus > a { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li:hover > a,#main-menu-right ul ul ul ul li:focus > a { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	/* ******************************************************************************** Page Titles */
	$skin_css .= '.breadcrumbs-center a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.breadcrumbs-center a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	/* *********************************************************************************** Sidebars */
	$skin_css .= '.widget select { background-color: #ffffff; border: 1px solid #474747; color: #474747; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right .widget h3.widget-title,#three-column-sidebar-right .widget h3.widget-title { border-bottom: 5px solid ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-left .widget h3.widget-title,#three-column-sidebar-left .widget h3.widget-title { border-bottom: 5px solid ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right .widget a,#three-column-sidebar-right .widget a,#two-column-sidebar-left .widget a,#three-column-sidebar-left .widget a { color: ' . $primary_accent . ';}' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right .widget a:hover,#three-column-sidebar-right .widget a:hover,#two-column-sidebar-left .widget a:hover,#three-column-sidebar-left .widget a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right .tag-cloud-link,#three-column-sidebar-right .tag-cloud-link,#two-column-sidebar-left .tag-cloud-link,#three-column-sidebar-left .tag-cloud-link { color: ' . $primary_accent . '; border: 1px solid ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right .tag-cloud-link:hover,#three-column-sidebar-right .tag-cloud-link:hover,#two-column-sidebar-left .tag-cloud-link:hover,#three-column-sidebar-left .tag-cloud-link:hover { color: ' . $secondary_accent . '; border: 1px solid ' . $secondary_accent . '; }' . PHP_EOL;
	/* ******************************************************************************** Misc Page Styles */
	$skin_css .= '.author-bio-header         { border-bottom: 1px solid ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; }' . PHP_EOL;
	$skin_css .= '.author-bio-header a       { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.author-bio-header a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	/* ******************************************************************************** Portfolio Page Styles */
	$skin_css .= '.portfolio-error { color: red; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.portfolio-container .image-overlay { background-color: ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .8 ) . '; color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-container .image-overlay .overlay-wrap { color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-container:hover .image-overlay .overlay-wrap { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.portfolio-container .image-overlay .links a { color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-container:hover .image-overlay .links a { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.portfolio-container .image-overlay .links a:hover { color: rgba(255,255,255,.7); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap .portfolio-classic-overlay { background-color: ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .8 ) . '; color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap .portfolio-classic-overlay .portfolio-classic-overlay-wrap { color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap:hover .portfolio-classic-overlay .portfolio-classic-overlay-wrap { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap .portfolio-classic-overlay .links a { color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap:hover .portfolio-classic-overlay .links a { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.portfolio-classic-item-wrap .portfolio-classic-overlay .links a:hover { color: rgba(255,255,255,.7); }' . PHP_EOL;
	$skin_css .= '.masonry-gallery.portfolio .masonry-grid-item:hover .masonry-image-overlay .masonry-links a { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.masonry-gallery.portfolio .masonry-grid-item .masonry-image-overlay .masonry-links a:hover { color: rgba(255,255,255,.7); }' . PHP_EOL;
	/* ******************************************************************************** Feature Styles */
	$skin_css .= '.feature-wrap-full { background-color: #ffffff; }' . PHP_EOL;
	/* ******************************************************************************** Post Styles */
	$skin_css .= '.read-more-wrap a.read-more { border: 1px solid ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; color: #474747; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.read-more-wrap a.read-more:before { border: 1px solid ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; background-color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.read-more-wrap a.read-more:hover { color: #ffffff; }' . PHP_EOL;
	$skin_css .= 'img.border { border: 8px solid #ffffff!important; box-shadow: 0px 0px 5px 0 rgba(71,71,71,0.25)!important; }' . PHP_EOL;
	$skin_css .= '.wp-caption.border { border: 8px solid #ffffff!important; box-shadow: 0px 0px 5px 0 rgba(71,71,71,0.25)!important; }' . PHP_EOL;
	$skin_css .= '.post-header-grid .post-title a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.post-header-grid .post-title a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .post-overlay-stamp { color: #ffffff; background: linear-gradient( rgba(0,0,0,0), rgba(0,0,0,0.6) ); }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .stamp-title { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .stamp-title a { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .stamp-title a:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .post-overlay-stamp .pmeta-post-comments,.two-stamp-post .post-overlay-stamp .pmeta-timestamp { color: rgba( 255,255,255,.75); }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .post-overlay-stamp .pmeta-post-comments a,.two-stamp-post .post-overlay-stamp .pmeta-timestamp a { color: rgba( 255,255,255,.75); }' . PHP_EOL;
	$skin_css .= '.two-stamp-post .post-overlay-stamp .pmeta-post-comments a:hover,.two-stamp-post .post-overlay-stamp .pmeta-timestamp a:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .post-overlay-stamp { color: #ffffff; background: linear-gradient( rgba(0,0,0,0), rgba(0,0,0,0.6) ); }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .stamp-title { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .stamp-title a { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .stamp-title a:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .post-overlay-stamp .pmeta-post-comments,.three-stamp-post .post-overlay-stamp .pmeta-timestamp { color: rgba( 255,255,255,.75); }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .post-overlay-stamp .pmeta-post-comments a,.three-stamp-post .post-overlay-stamp .pmeta-timestamp a { color: rgba( 255,255,255,.75); }' . PHP_EOL;
	$skin_css .= '.three-stamp-post .post-overlay-stamp .pmeta-post-comments a:hover,.three-stamp-post .post-overlay-stamp .pmeta-timestamp a:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.post-header-tf .post-title a,.post-header-sf .post-title a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.post-header-tf .post-title a:hover,.post-header-sf .post-title a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= '.post-meta-sf { border-top: 1px solid rgba(0,0,0,0.1); border-bottom: 1px solid rgba(0,0,0,0.1); }' . PHP_EOL;
	$skin_css .= '.pmeta-sticky { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.pmeta-timestamp a,.pmeta-author a,.pmeta-post-comments a, .pmeta-categories a,.pmeta-taglist a,.pmeta-edit a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.pmeta-timestamp a:hover,.pmeta-author a:hover,.pmeta-post-comments a:hover, .pmeta-categories a:hover,.pmeta-taglist a:hover,.pmeta-edit a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= '.pmeta-timestamp i,.pmeta-author i,.pmeta-post-comments i, .pmeta-categories i,.pmeta-taglist i, .pmeta-sticky i,.pmeta-edit i { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.audio-post-feature { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.audio-post-feature-overlay { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.gallery img { border: 1px solid #e3e3e3!important; background-color: #ffffff!important; }' . PHP_EOL;
	$skin_css .= '.post-format-image-overlay { background: rgba(0,0,0,.7); color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.quote-post-feature { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.quote-post-feature-overlay { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.quote-post-feature .quote-post-feature-author,.quote-post-feature .quote-post-feature-author a { color: rgba(255,255,255,.5); }' . PHP_EOL;
	$skin_css .= '.format-quote .entry-content blockquote { border-left: 5px solid #7f7f7f; background: #eaeaea; }' . PHP_EOL;
	$skin_css .= '.post-format-image-overlay-content a { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.post-format-image-overlay-content a:hover { color: rgba(255,255,255,.7); }' . PHP_EOL;
	/* ***************************************************************************** Contact Form Styles */
	$skin_css .= '.canuck-cp-widget-contact-submit,.canuck-cp-contact-submit { color: ' . $primary_accent . '; border: 1px solid ' . $primary_accent . '; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.canuck-cp-widget-contact-submit:hover,.canuck-cp-contact-submit:hover  { color: #ffffff; background-color: ' . $primary_accent . '; }' . PHP_EOL;
	/* ********************************************************************************** Comment Styles */
	$skin_css .= '.post-title-comments { color: #474747; }' . PHP_EOL;
	$skin_css .= '.pingback,.trackback { border-top: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.comment.depth-1 { border-top: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.comment.depth-2,.comment.depth-3,.comment.depth-4,.comment.depth-5,.comment.depth-6,.comment.depth-7,.comment.depth-8,.comment.depth-9,.comment.depth-10 { border-top: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.comment-author .avatar { border: 1px solid #e2e2e2; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.comment-reply-link { border: 1px solid ' . $primary_accent . '; color: #474747; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.comment-reply-link:before { border: 1px solid ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; background-color: ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; }' . PHP_EOL;
	$skin_css .= '.comment-reply-link:hover { color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.comment-list .bypostauthor .comment-author cite:before { background-color: #808080; color: #ffffff; }' . PHP_EOL;
	$skin_css .= 'p.no-comments { border-top: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.comment-form-author input,.comment-form-email input,.comment-form-url input { background-color: ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .5 ) . '; }' . PHP_EOL;
	$skin_css .= '#respond textarea { background-color: #ffffff; border: 1px solid #474747; }' . PHP_EOL;
	$skin_css .= '.comment-form .form-submit input#submit.submit { border: 1px solid ' . $primary_accent . '; color: #474747; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.comment-form .form-submit input#submit.submit:hover { color: #ffffff; background-color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '#respond .error { color: red; }' . PHP_EOL;
	/* ******************************************************************************** Misc Styles */
	$skin_css .= '.error  { color: red; background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.widget_recent_entries li,.canuckcp_recent_posts li { border-bottom: 1px solid #eaeaea; }' . PHP_EOL;
	$skin_css .= '.widget_recent_entries li a,.canuckcp_recent_posts li a { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.widget_recent_entries li a:hover,.canuckcp_recent_posts li a:hover { color: ' . $secondary_accent . '; }' . PHP_EOL;
	$skin_css .= '.canuckcp_recent_posts li span { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= '#wp-calendar thead th { background-color: #eaeaea; }' . PHP_EOL;
	$skin_css .= '#calendar_wrap td#today { background-color: #eaeaea; }' . PHP_EOL;
	$skin_css .= '.tagcloud a { background-color: #ffffff; border: 1px solid #eaeaea; }' . PHP_EOL;
	$skin_css .= '.tagcloud a:hover,.sitemap-categories-wrap a:hover,.sitemap-tags-wrap a:hover { background-color: #ffffff; }' . PHP_EOL;
	$skin_css .= '.nav-links .page-numbers { background-color: #808080; color: #ffffff; border: 1px solid #808080; }' . PHP_EOL;
	$skin_css .= '.nav-links .page-numbers.dots,.nav-links .page-numbers.dots:hover { background-color: #ffffff; color: #808080; }' . PHP_EOL;
	$skin_css .= '.nav-links .page-numbers:hover { background-color: #ffffff; color: ' . $primary_accent . '; border: 1px solid ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.nav-links .page-numbers.current { background-color: #ffffff; color: ' . $primary_accent . '; border: 1px solid ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.searchform .search-field { background-color: #ffffff; color: #474747; border: 1px solid #474747; }' . PHP_EOL;
	$skin_css .= '.fa-search { color: #e3e3e3; }' . PHP_EOL;
	$skin_css .= '.fa-search:hover { color: ' . $primary_accent . '; }' . PHP_EOL;
	$skin_css .= '.postpagenav .left { color: #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.postpagenav .right { color: #7f7f7f; }' . PHP_EOL;
	/* ******************************************************************************** Masonry Styles */
	$skin_css .= '.masonry-grid-item .masonry-image-overlay { background-color: ' . canuckcp_hex_to_rgba( $primary_accent, $opacity = .8 ) . '; color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.masonry-grid-item .masonry-image-overlay a { color: rgba(255,255,255,0); }' . PHP_EOL;
	$skin_css .= '.masonry-grid-item:hover .masonry-image-overlay .masonry-text a { color: rgba(255,255,255,1); }' . PHP_EOL;
	$skin_css .= '.masonry-grid-item .masonry-image-overlay .masonry-text a:hover { color: rgba(255,255,255,0.7); }' . PHP_EOL;
	$skin_css .= '.masonry-grid-item:hover .masonry-image-overlay .masonry-overlay-wrap { color: rgba(255,255,255,1); }' . PHP_EOL;
	// Media Styles 900px.
	$skin_css .= '@media only screen and (max-width:900px){' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-left { background-color: #ffffff; box-shadow: 0 0 5px #000000; }' . PHP_EOL;
	$skin_css .= '#two-column-sidebar-right { background-color: #ffffff; box-shadow: 0 0 5px #000000; }' . PHP_EOL;
	$skin_css .= '#three-column-sidebar-left { background-color: #ffffff; box-shadow: 0 0 5px #000000; }' . PHP_EOL;
	$skin_css .= '#three-column-sidebar-right { background-color: #ffffff; box-shadow: 0 0 5px #000000; }' . PHP_EOL;
	$skin_css .= 'body.sticky header.header-wide-no-feature div.header-logo-menu-strip,body.sticky header.header-wide-image div.header-logo-menu-strip { background-color: #e3e3e3; color: #474747; }' . PHP_EOL;

	$skin_css .= '#main-menu-right ul { border-bottom: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li { color: #474747; background-color: #ffffff; border-top: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li a { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li a:hover,#main-menu-right ul li a:focus { background-color: ' . $secondary_accent . '; color: #ffffff; border-radius: 0px; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li.current-menu-item > a, #main-menu-right ul li.current-menu-ancestor > a { background-color: ' . $primary_accent . '; color: #ffffff; border-radius: 0px; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li button { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul li button:hover,#main-menu-right ul li button:focus { background-color: ' . $secondary_accent . '; color: #ffffff; border-radius: 0px; }' . PHP_EOL;

	$skin_css .= '#main-menu-right ul ul { border-bottom: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li { color: #474747; background-color: #ffffff; border-top: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li a { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li a:hover,#main-menu-right ul ul li a:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li.current-menu-item > a,#main-menu-right ul ul li.current-menu-ancestor > a { background-color: ' . $primary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li button { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul li button:hover,#main-menu-right ul ul li button:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;

	$skin_css .= '#main-menu-right ul ul ul { border-bottom: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li { color: #474747; background-color: #ffffff; border-top: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li a { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li.current-menu-item > a,#main-menu-right ul ul ul li.current-menu-ancestor > a { background-color: ' . $primary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li a:hover,#main-menu-right ul ul ul li a:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li.current-menu-item > a:hover,#main-menu-right ul ul ul li.current-menu-item > a:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li button { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul li button:hover,#main-menu-right ul ul ul li button:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;

	$skin_css .= '#main-menu-right ul ul ul ul { border-bottom: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li { color: #474747; background-color: #ffffff; border-top: 1px solid rgba(71,71,71,.1); }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li a { background-color: #ffffff; color: #474747; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li a:hover,#main-menu-right ul ul ul ul li a:focus { background-color: ' . $secondary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li.current-menu-item > a { background-color: ' . $primary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '#main-menu-right ul ul ul ul li.current-menu-item > a:hover,#main-menu-right ul ul ul ul li.current-menu-item > a:focus { background-color: ' . $primary_accent . '; color: #ffffff; }' . PHP_EOL;
	$skin_css .= '}' . PHP_EOL;
	// Media styles 700px.
	$skin_css .= '@media only screen and (max-width:700px){' . PHP_EOL;
	$skin_css .= '.portfolio-two-column.left-col,.portfolio-two-column.right-col { border-bottom: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.portfolio-three-column.left-col,.portfolio-three-column.center-col,.portfolio-three-column.right-col   { border-bottom: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '.comment.depth-2,.comment.depth-3,.comment.depth-4,.comment.depth-5,.comment.depth-6,.comment.depth-7,.comment.depth-8,.comment.depth-9,.comment.depth-10  { border-top: 1px solid #7f7f7f; }' . PHP_EOL;
	$skin_css .= '}' . PHP_EOL;
	return $skin_css;
}
