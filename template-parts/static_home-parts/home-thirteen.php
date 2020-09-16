<?php
/**
 * Canuck Home Page template part - carousel slider
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $post;
$section13_title              = stripslashes( get_theme_mod( 'canuckcp_section13_title', '' ) );
$section13_text               = stripslashes( get_theme_mod( 'canuckcp_section13_text', '' ) );
$section13_portfolio_category = get_theme_mod( 'canuckcp_section13_portfolio_category', '' );
$section13_portfolio_columns  = get_theme_mod( 'canuckcp_section13_portfolio_columns', '3' );
$sec13_bg_image               = get_theme_mod( 'canuckcp_section13_background_image', '' );
$sec13_use_parallax           = get_theme_mod( 'canuckcp_section13_use_parallax', false );
$category_id                  = get_cat_ID( $section13_portfolio_category );
$args                         = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts                 = get_posts( $args );
$use_lazyload                 = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec13_bg_image ) {
	if ( true === $sec13_use_parallax ) {
		$string13 = ' class="home-13-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec13_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string13 = ' class="home-13-wide lazyload" data-src="' . esc_url( $sec13_bg_image ) . '"';
	} else {
		$string13 = ' class="home-13-wide" style="background-image: url( ' . esc_url( $sec13_bg_image ) . ' );"';
	}
} else {
	$string13 = ' class="home-13-wide"';
}
?>
<div <?php echo $string13;// phpcs:ignore ?>>
	<div class="home-13-wide-overlay">
		<div class="home-13-wrap">
			<?php
			// Title.
			if ( '' !== $section13_title ) {
				?>
				<div class="home-13-title">
					<h2><?php echo wp_kses_post( $section13_title ); ?></h2>
				</div>
				<?php
			}
			// Description.
			if ( '' !== $section13_text ) {
				?>
				<div class="home-13-text">
					<p><?php echo wp_kses_post( $section13_text ); ?></p>
				</div>
				<?php
			}
			// Carousel.
			if ( '' !== $section13_portfolio_category && false !== $custom_posts ) {
				?>
				<div id="home-13-carousel" class="splide home-13">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
							$canuckcp_feature_pic_count = 0;
							foreach ( $custom_posts as $post ) { // phpcs:ignore
								setup_postdata( $post );
								$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
								$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) );
								if ( has_post_thumbnail() ) {
									$canuckcp_feature_pic_count ++;
									$image_url = get_the_post_thumbnail_url( $post->ID, 'canuckcp_small15' );
									?>
									<li class="splide__slide">
										<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'small carousel image', 'canuck-cp' ); ?>" />
										<?php
										if ( $link_to_post || false !== $custom_feature_link ) {
											?>
											<span class="image-overlay">
												<span class="overlay-wrap">
													<span class="links">
														<?php
														if ( false !== $custom_feature_link ) {
															echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="link font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
														} elseif ( true === $link_to_post ) {
															echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="link font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
														}
														?>
													</span>
												</span>
											</span>
											<?php
										}
										?>
									</li>
									<?php
								}
							}
							?>
						</ul>
					</div>
				</div>
				<?php
			} else {
				?>
				<div class="error">
					<?php
					esc_html_e( 'You have not set up your Feature posts so I can not find any images - see user documentation.', 'canuck-cp' );
					?>
				</div>
				<?php
			}
			if ( ! isset( $canuckcp_feature_pic_count ) || 0 === $canuckcp_feature_pic_count ) {
				?>
				<div class="error">
					<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck-cp' ); ?></h3>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php
wp_reset_postdata();

