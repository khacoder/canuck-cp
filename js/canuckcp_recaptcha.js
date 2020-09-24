/**
 * Canuck CP ClassicPress reCaptcha V3 doc ready script
 *
 * @link    http://kevinsspace.ca
 * @license Copyright (C) 2017-2019  kevinhaig Licensed GPLv2 or later
 * @package Canuck CP ClassicPress Theme
 */
var reCaptchaContactWidgetID;
var reCaptchaContactContentID;
var CanuckCPCaptchaCallback = function() {
	if ( jQuery( '#contact-widget-captcha' ).length > 0 ) {
		var contact_widget_sitekey = jQuery( '#contact-widget-captcha' ).data( "sitekey" );
		reCaptchaContactWidgetID = grecaptcha.render( 'contact-widget-captcha', { 'sitekey' : contact_widget_sitekey } );
		grecaptcha.reset(reCaptchaContactWidgetID);
	}
	if ( jQuery( '#contact-content-captcha' ).length > 0 ) {
		var contact_content_sitekey = jQuery( '#contact-content-captcha' ).data( "sitekey" );
		reCaptchaContactContentID = grecaptcha.render( 'contact-content-captcha', { 'sitekey' : contact_content_sitekey } );
	}
};