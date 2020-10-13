<?php
/**
 * Canuck Header template part - setup_2_primary_nav
 *
 * This template part is called by header-primary_nav.php and by header-secondary_nav.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

$contact_hours = esc_html( get_theme_mod( 'canuckcp_contact_hours', '' ) );
$contact_phone = esc_html( get_theme_mod( 'canuckcp_contact_phone', '' ) );
$contact_page  = esc_url( get_theme_mod( 'canuckcp_contact_page', '' ) );
?>
<div class="header-topstrip-wide">
	<div class="header-topstrip-wrap">
		<?php
		if ( '' !== $contact_hours || '' !== $contact_phone || '' !== $contact_page ) {
			?>
			<div class="header-topstrip-left">
				<?php
				if ( '' !== $contact_hours ) {
					?>
					<span class="contact-hours"><i><?php echo canuckcp_svg( 'calendar-alt', '12', '#ffffff' );// phpcs:ignore ?></i><?php echo esc_html( $contact_hours ); ?></span>
					<?php
				}
				if ( '' !== $contact_phone ) {
					?>
					<span class="contact-phone"><i><?php echo canuckcp_svg( 'phone', '12', '#ffffff' );// phpcs:ignore ?></i><?php echo esc_html( $contact_phone ); ?></span>
					<?php
				}
				if ( '' !== $contact_page ) {
					?>
					<a class="contact-page" href="<?php echo esc_url( $contact_page ); ?>" title="<?php esc_attr_e( 'contact page', 'canuck-cp' ); ?>"><i><?php echo canuckcp_svg( 'envelope', '12', '#eaeaea' );// phpcs:ignore ?></i></a>
					<?php
				}
				?>
			</div>
			<?php
		}
		?>
		<div class="header-topstrip-right">
			<div class="header-top-strip-social">
				<?php
				echo canuckcp_social_links();// phpcs:ignore
				?>
			</div>
			<span class="canuck-cp-show-search-trigger"><a href="#"><i class="canuck-cp-search-icon"><?php echo canuckcp_svg( 'search', '16', '#eaeaea' );// phpcs:ignore ?></i></a></span>
			<div class="canuck-cp-search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>
<?php
