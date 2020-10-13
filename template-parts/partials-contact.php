<?php
/**
 * Template Part, contact sets up the contact content for the contact custom template.
 *
 * @package   PPID WordPress Theme
 * @copyright Copyright (C) 2019 or later  Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <https://kevinsspace.ca/contact/>
 */

if ( ! post_password_required() ) {
	if ( have_posts() ) : while ( have_posts() ) : the_post();// phpcs:ignore
			if ( '' !== trim( the_content() ) ) {
				?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="portfolio-post entry-content">
						<?php the_content( 'Read more' ); ?>
					</div>
				</div>
				<?php
			}
	endwhile;
	endif;
	?>
	<div class="contact-form-wrap">
		<?php
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
		$canuckcp_contact_name    = '';
		$canuckcp_contact_email   = '';
		$canuckcp_contact_message = '';
			// Process input form.
		if ( isset( $_POST['canuckcp_contact_submit'], $_POST['canuckcp_contact_nonce_name'] )
			&& wp_verify_nonce( sanitize_key( $_POST['canuckcp_contact_nonce_name'] ), 'canuckcp_contact_nonce_action' ) ) {
			// Check for valid submission.
			$canuckcp_bot_submission = false;
			if ( true === $use_honeypot ) {
				if ( ! empty( $_POST['canuckcp_contact_custom3'] ) ) {
					$canuckcp_bot_submission = true;
				}
			}
			// Proceed if a human submission.
			if ( false === $canuckcp_bot_submission ) {
				$canuckcp_popup_error = '';
				// Validate Name.
				if ( ! empty( $_POST['canuckcp_contact_name'] ) ) {
					$canuckcp_contact_name = sanitize_text_field( wp_unslash( $_POST['canuckcp_contact_name'] ) );
				} else {
					$canuckcp_contact_name = '';
				}
				if ( '' === $canuckcp_contact_name ) {
					$canuckcp_popup_error .= esc_html__( '\n - Name required', 'canuck-cp' );
				}
				// Validate email.
				if ( ! empty( $_POST['canuckcp_contact_email'] ) ) {
					$canuckcp_contact_email = sanitize_email( wp_unslash( $_POST['canuckcp_contact_email'] ) );
				} else {
					$canuckcp_contact_email = '';
				}
				if ( ! is_email( $canuckcp_contact_email ) ) {
					$canuckcp_popup_error .= esc_html__( '\n - Valid email required ', 'canuck-cp' );
				}
				// Captcha Check.
				if ( true === $use_recaptcha ) {
					 if ( ! empty( $_POST['g-recaptcha-response'] ) ) {// phpcs:ignore
						$captcha_response = sanitize_text_field( wp_unslash( $_POST['g-recaptcha-response'] ) );// phpcs:ignore
					} else {
						$captcha_response = false;
					}
					if ( false === $captcha_response ) {
						$canuckcp_popup_error .= esc_html__( '\n - Please show you are a human and check the captcha box', 'canuck-cp' );
					} else {
						$request         = wp_safe_remote_get( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secretkey . '&response=' . $captcha_response );
						$verify_response = wp_remote_retrieve_body( $request );
						$response_data   = json_decode( $verify_response );
						if ( false === $response_data->success ) {
							$canuckcp_popup_error .= esc_html__( '\n - Captcha failed - please try again', 'canuck-cp' );
						}
					}
				}
				// Validate Message.
				// Check for error before processing to avoid html encoding until all is good.
				// Premature encoding causes wp_kses to remove smiley images on second pass.
				if ( '' !== $canuckcp_popup_error ) {
					// Sanitize first.
					if ( ! empty( $_POST['canuckcp_contact_message'] ) ) { // Input var okay.
						$canuckcp_sanitize_message = wp_kses_post( wp_unslash( $_POST['canuckcp_contact_message'] ) );// phpcs:ignore
						// Add WordPress Smiley support.
						$canuckcp_fix_emoticons = convert_smilies( $canuckcp_sanitize_message );
						// If emoji present convert to html entities.
						$canuckcp_contact_message = wp_encode_emoji( $canuckcp_fix_emoticons );
					} else {
						$canuckcp_contact_message = '';
					}
				} else {
					$canuckcp_contact_message = wp_kses_post( wp_unslash( $_POST['canuckcp_contact_message'] ) );// phpcs:ignore
				}
				if ( '' === $canuckcp_contact_message ) {
					$canuckcp_popup_error .= esc_html__( '\n - Message required', 'canuck-cp' );
				}
				// Validation complete.
				if ( '' === $canuckcp_popup_error ) {
					// Send notification email.
					canuckcp_email_notification( $canuckcp_contact_name, $canuckcp_contact_email, $canuckcp_contact_message );
					// Submitted popup message.
					$message = esc_html__( 'Mesage Submitted - Thank You!', 'canuck-cp' );
					?>
					<script type="text/javascript">alert( "<?php echo $message;// phpcs:ignore ?>" )</script>
					<?php
					// Reset Variables.
					$canuckcp_contact_name    = '';
					$canuckcp_contact_email   = '';
					$canuckcp_contact_message = '';
				} else {
					$canuckcp_error_message = esc_html__( 'There were errors so the message was not sent: \n', 'canuck-cp' ) . $canuckcp_popup_error;
					?>
					<script>alert("<?php echo $canuckcp_error_message;// phpcs:ignore ?>")</script>
					<?php
				}
			}
		}
		?>
		<div class="canuck-cp-contact-form">
			<form method="POST">
				<?php
				wp_nonce_field( 'canuckcp_contact_nonce_action', 'canuckcp_contact_nonce_name' );
				?>
				<label class="canuck-cp-contact-input-label">Name:</label>
				<input class="canuck-cp-contact-input" type="text" name="canuckcp_contact_name" value="<?php echo esc_attr( $canuckcp_contact_name ); ?>" />
				<label class="canuck-cp-contact-input-label">Email:</label>
				<input class="canuck-cp-contact-input" type="text" name="canuckcp_contact_email" value="<?php echo esc_attr( $canuckcp_contact_email ); ?>" />
				<label class="canuck-cp-contact-input-label">Message:</label>
				<textarea class="canuck-cp-contact-input-textarea" name="canuckcp_contact_message" rows="5" ><?php echo wp_kses_post( $canuckcp_contact_message ); ?></textarea>
				<?php
				// Captcha.
				if ( true === $use_recaptcha ) {
					?>
					<div class="canuck-cp-contact-content-captcha">
						<div id="contact-content-captcha"
								class="g-recaptcha"
								data-captchaid="reCaptchaContactContentID"
								data-sitekey="<?php echo esc_attr( $recaptcha_sitekey ); ?>">
						</div>
					</div>
					<?php
				}
				?>
				<input class="canuck-cp-contact-submit" type="submit" name="canuckcp_contact_submit" value="<?php esc_attr_e( 'Send Message', 'canuck-cp' ); ?>" />
				<?php
				if ( true === $use_honeypot ) {
					?>
					<span class="canuck-cp-span-custom3"><?php echo esc_html__( 'This input should not be filled out', 'canuck-cp' ); ?>
						<input class="custom-3" type="text" maxlength="100" name="canuckcp_contact_custom3" value="" tabindex="-1" autocomplete="off" />
					</span>
					<?php
				}
				?>
			</form>
		</div>
	</div>
	<?php
}
