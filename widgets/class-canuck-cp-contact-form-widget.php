<?php
/**
 * Canuck CP Contact Widget
 *
 * This file is a widget and was modified from the Testimonial Basics Input Widget.
 * It is a contact form in a widget.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 *
 * @wordpress plugin
 * Plugin Name: Canuck CP Contact Widget
 * Plugin URI: http://kevinsspace.ca
 * Description: A widget for the Canuck CP Theme that allows the user to set up a contact form.
 * Version: 1.0.0
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Register Widget
 *
 * The widget is registered using the widgets_init action hook that fires
 * after all default widgets have been registered.
 */
function canuckcp_contact_form_register_widget() {
	register_widget( 'Canuck_CP_Contact_Form_Widget' );
}
add_action( 'widgets_init', 'canuckcp_contact_form_register_widget' );

/**
 * Widget Class
 *
 * Define Testimonial Basics Input Widget.
 */
class Canuck_CP_Contact_Form_Widget extends WP_Widget {
	/**
	 * Construct
	 *
	 * The first function is required to process the widget
	 * It sets up an array to store widget options
	 * 'classname' - added to <li class="classnamne"> of the widget html
	 * 'description' - displays under Appearance => Widgets ...your widget
	 * WP_Widget(widget list item ID,Widget Name to be shown on grag bar, options array)
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuck-cp-contact-widget-class',
			'description' => esc_html__( 'Allow a user to set up a contact form.', 'testimonial-basics' ),
		);
		parent::__construct( 'canuckcp_contact_form_widget', 'Canuck CP Contact Form Widget', $widget_ops );
	}

	/**
	 * Form
	 *
	 * The second function creates the widget setting form.
	 * Each widget has a table in the Options database for it's options
	 * The array of options is $instance. The first thing we do is check to see
	 * if the title instance exists, if so use it otherwise load the default.
	 * The second part displays the title in the widget.
	 *
	 * @param array $instance contains widget form initialization data.
	 */
	public function form( $instance ) {
		$canuckcp_contact_defaults = array(
			'canuckcp_contact_widget_title' => 'Contact Me',
		);
		$instance                  = wp_parse_args( (array) $instance, $canuckcp_contact_defaults );
		$title                     = $instance['canuckcp_contact_widget_title'];
		?>
		<p>
			<?php echo 'Title :'; ?>
			<input class="widefat"
					id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_contact_widget_title' ) ); ?>"
					name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_contact_widget_title' ) ); ?>"
					type="text"
					value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}
	/**
	 * Update
	 *
	 * The third function saves the widget settings.
	 *
	 * @param array $new_instance is array of new instance data.
	 * @param array $old_instance is array of old instance data.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                                  = $old_instance;
		$instance['canuckcp_contact_widget_title'] = sanitize_text_field( $new_instance['canuckcp_contact_widget_title'] );
		return $instance;
	}
	/**
	 * Display Widget
	 *
	 * The input form for the testimonial widget is loaded. The visitor inputs a testimonial
	 * and clicks the submit button and the testimonial is submitted to the database
	 * and the admin user is notified by email that they have a testimonial to review
	 * and approve. If admin user can specify if a captcha is used to help in validation.
	 *
	 * @param array $args array of global theme values.
	 * @param array $instance array of widget form values.
	 */
	public function widget( $args, $instance ) {
		$use_honeypot        = get_theme_mod( 'canuckcp_use_honeypot' ) ? true : false;
		$use_recaptcha       = get_theme_mod( 'canuckcp_use_recaptcha' ) ? true : false;
		$recaptcha_sitekey   = get_theme_mod( 'canuckcp_recaptcha_sitekey', '' );
		$recaptcha_secretkey = get_theme_mod( 'canuckcp_recaptcha_secretkey', '' );
		if ( true !== $use_honeypot ) {
			$use_honeypot = false;
		}
		if ( false !== $use_recaptcha ) {
			$use_recaptcha = true;
		}
		// Initialize Variables.
		$canuckcp_widget_contact_name    = '';
		$canuckcp_widget_contact_email   = '';
		$canuckcp_widget_contact_message = '';
		// Let's get started.
		echo wp_kses_post( $args['before_widget'] );
		$title = apply_filters( 'widget_title', empty( $instance['canuckcp_contact_widget_title'] ) ? '' : $instance['canuckcp_contact_widget_title'], $instance, $this->id_base );
		if ( ! empty( $title ) ) {
			echo wp_kses_post( $args['before_title'] ) . wp_kses_post( $title ) . wp_kses_post( $args['after_title'] );
		}
		// Process input form.
		if ( isset( $_POST['canuckcp_widget_contact_submit'], $_POST['canuckcp_widget_contact_nonce_name'] )
			&& wp_verify_nonce( sanitize_key( $_POST['canuckcp_widget_contact_nonce_name'] ), 'canuckcp_widget_contact_nonce_action' ) ) {
			// Check for valid submission.
			$canuckcp_bot_submission = false;
			if ( true === $use_honeypot ) {
				if ( ! empty( $_POST['canuckcp_widget_contact_custom3'] ) ) {
					$canuckcp_bot_submission = true;
				}
			}
			// Proceed if a human submission.
			if ( false === $canuckcp_bot_submission ) {
				$canuckcp_widget_popup_error = '';
				// Validate Name.
				if ( ! empty( $_POST['canuckcp_widget_contact_name'] ) ) {
					$canuckcp_widget_contact_name = sanitize_text_field( wp_unslash( $_POST['canuckcp_widget_contact_name'] ) );
				} else {
					$canuckcp_widget_contact_name = '';
				}
				if ( '' === $canuckcp_widget_contact_name ) {
					$canuckcp_widget_popup_error .= '\n - Name required';
				}
				// Validate email.
				if ( ! empty( $_POST['canuckcp_widget_contact_email'] ) ) {
					$canuckcp_widget_contact_email = sanitize_email( wp_unslash( $_POST['canuckcp_widget_contact_email'] ) );
				} else {
					$canuckcp_widget_contact_email = '';
				}
				if ( ! is_email( $canuckcp_widget_contact_email ) ) {
					$canuckcp_widget_popup_error .= '\n - Valid email required ';
				}
				// Captcha Check.
				if ( true === $use_recaptcha ) {
					if ( ! empty( $_POST['g-recaptcha-response'] ) ) { // Input var okay.
						$captcha_response = sanitize_text_field( wp_unslash( $_POST['g-recaptcha-response'] ) ); // Input var okay.
					} else {
						$captcha_response = false;
					}
					if ( false === $captcha_response ) {
						$canuckcp_widget_popup_error .= '\n - Please show you are a human and check the captcha box';
					} else {
						$request         = wp_safe_remote_get( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secretkey . '&response=' . $captcha_response );
						$verify_response = wp_remote_retrieve_body( $request );
						$response_data   = json_decode( $verify_response );
						if ( false === $response_data->success ) {
							$canuckcp_widget_popup_error .= '\n - Captcha failed - please try again';
						}
					}
				}
				// Validate Message.
				// Check for error before processing to avoid html encoding until all is good.
				// Premature encoding causes wp_kses to remove smiley images on second pass.
				if ( '' !== $canuckcp_widget_popup_error ) {
					// Sanitize first.
					if ( ! empty( $_POST['canuckcp_widget_contact_message'] ) ) { // Input var okay.
						$canuckcp_sanitize_message = wp_kses_post( wp_unslash( $_POST['canuckcp_widget_contact_message'] ) ); // Input var okay.
						// Add WordPress Smiley support.
						$canuckcp_fix_emoticons = convert_smilies( $canuckcp_sanitize_message );
						// If emoji present convert to html entities.
						$canuckcp_widget_contact_message = wp_encode_emoji( $canuckcp_fix_emoticons );
					} else {
						$canuckcp_widget_contact_message = '';
					}
				} else {
					$canuckcp_widget_contact_message = wp_kses_post( wp_unslash( $_POST['canuckcp_widget_contact_message'] ) ); // Input var okay.
				}
				if ( '' === $canuckcp_widget_contact_message ) {
					$canuckcp_widget_popup_error .= '\n - Message required';
				}
				// Validation complete.
				if ( '' === $canuckcp_widget_popup_error ) {
					// Send notification email.
					canuckcp_email_notification( $canuckcp_widget_contact_name, $canuckcp_widget_contact_email, $canuckcp_widget_contact_message );
					// Optional supmitted popup message.
					?>
					<script type="text/javascript">alert( "Mesage Submitted - Thank You!" );</script>
					<?php
					// Reset Variables.
					$canuckcp_widget_contact_name    = '';
					$canuckcp_widget_contact_email   = '';
					$canuckcp_widget_contact_message = '';
				} else {
					$widget_error_message = 'There were errors so the message was not sent: \n' . $canuckcp_widget_popup_error;
					?>
					<script>alert("<?php echo $widget_error_message; // phpcs:ignore ?>")</script>
					<?php
				}
			}
		}
		?>
		<div class="canuck-cp-widget-contact-form">
			<span class="widget-contact-description">Request an appointment or send a message.</span>
			<form method="POST">
				<?php
				wp_nonce_field( 'canuckcp_widget_contact_nonce_action', 'canuckcp_widget_contact_nonce_name' );
				?>
				<label class="canuck-cp-widget-contact-input-label">Name:</label>
				<input class="canuck-cp-widget-contact-input" type="text" name="canuckcp_widget_contact_name" value="<?php echo esc_attr( $canuckcp_widget_contact_name ); ?>" />
				<label class="canuck-cp-widget-contact-input-label">Email:</label>
				<input class="canuck-cp-widget-contact-input" type="text" name="canuckcp_widget_contact_email" value="<?php echo esc_attr( $canuckcp_widget_contact_email ); ?>" />
				<label class="canuck-cp-widget-contact-input-label">Message:</label>
				<textarea class="canuck-cp-widget-contact-input-textarea" name="canuckcp_widget_contact_message" rows="5" ><?php echo wp_kses_post( $canuckcp_widget_contact_message ); ?></textarea>
				<?php
				// Captcha.
				if ( true === $use_recaptcha ) {
					?>
					<div class="canuck-cp-widget-contact-captcha">
						<div id="contact-widget-captcha"
								class="g-recaptcha"
								data-captchaid="reCaptchaContactWidgetID"
								data-sitekey="<?php echo esc_attr( $recaptcha_sitekey ); ?>">
						</div>
					</div>
					<?php
				}
				?>
				<input class="canuck-cp-widget-contact-submit" type="submit" name="canuckcp_widget_contact_submit" value="Send Message" />
				<?php
				if ( true === $use_honeypot ) {
					?>
					<span class="canuck-cp-span-custom3"><?php echo esc_html( 'This input should not be filled out' ); ?>
						<input class="custom-3" type="text" maxlength="100" name="canuckcp_widget_contact_custom3" value="" tabindex="-1" autocomplete="off" />
					</span>
					<?php
				}
				?>
			</form>
		</div>
			<?php
			echo wp_kses_post( $args['after_widget'] );
	}
}
