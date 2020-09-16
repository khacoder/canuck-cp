<?php
/**
 * Footer Template Part File.
 *
 * Template part file that contains the site footer and closing HTML body elements.
 * This file is called by all primary template pages
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$canuckcp_showfooter              = get_theme_mod( 'canuckcp_show_footer', true );
$canuckcp_showcopyright           = get_theme_mod( 'canuckcp_show_copyright_strip', true );
$canuckcp_footercols              = intval( get_theme_mod( 'canuckcp_footer_cols', 3 ) );
$canuckcp_show_footer_top_strip   = get_theme_mod( 'canuckcp_show_footer_top_strip', false );
$canuckcp_footer_background_image = get_theme_mod( 'canuckcp_footer_background_image', '' );
$canuckcp_use_lazyload            = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $canuckcp_footer_background_image ) {
	if ( true === $canuckcp_use_lazyload ) {
		$footerstring = ' id="canuck-cp-footer" class="lazyload" data-src="' . esc_url( $canuckcp_footer_background_image ) . '"';
	} else {
		$footerstring = ' id="canuck-cp-footer" style="background-image: url( ' . esc_url( $canuckcp_footer_background_image ) . ' );"';
	}
} else {
	$footerstring = ' id="canuck-cp-footer"';
}
if ( true === $canuckcp_showfooter || true === $canuckcp_showcopyright || true === $canuckcp_show_footer_top_strip ) {
	?>
	<footer <?php echo $footerstring; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<div class="footer-overlay">
			<div id="footer-wrap">
				<?php
				if ( false !== $canuckcp_show_footer_top_strip ) {
					get_template_part( '/template-parts/footer-parts/footer', 'top-strip' );
				}
				if ( true === $canuckcp_showfooter ) {
					?>
					<div class="footer-col-wrap">	
						<div class="footercol-<?php echo esc_attr( $canuckcp_footercols ); ?>-1">
							<?php
							if ( ! dynamic_sidebar( 'canuckcp_footer_a_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck-cp' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck-cp' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<div class="footercol-<?php echo esc_attr( $canuckcp_footercols ); ?>-2">
							<?php
							if ( ! dynamic_sidebar( 'canuckcp_footer_b_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck-cp' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck-cp' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<div class="footercol-<?php echo esc_attr( $canuckcp_footercols ); ?>-3">
							<?php
							if ( ! dynamic_sidebar( 'canuckcp_footer_c_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck-cp' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck-cp' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<?php
						if ( 4 === $canuckcp_footercols ) {
							?>
							<div class="footercol-4-4">
								<?php
								if ( ! dynamic_sidebar( 'canuckcp_footer_d_sidebar' ) ) {
									esc_html_e( 'This column is a widget area.', 'canuck-cp' );
									?>
									<br/><span class="alert">
										<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck-cp' ); ?>
									</span>
									<?php
								}
								?>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}
				if ( true === $canuckcp_showcopyright ) {
					?>
					<div class="clearfix"></div>
					<div id="copyright">
						<div id="copyright-wrap">
							<span class="copyright_c1"><?php echo wp_kses_post( get_theme_mod( 'canuckcp_left_copyright_text', '' ) ); ?></span>
							<span class="copyright_c2"><?php echo wp_kses_post( get_theme_mod( 'canuckcp_middle_copyright_text', '' ) ); ?></span>
							<span class="copyright_c3"><?php echo wp_kses_post( get_theme_mod( 'canuckcp_right_copyright_text', '' ) ); ?></span>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</footer>
	<?php
}
wp_footer();
?>
</body>
</html>

