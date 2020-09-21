<?php
/**
 * Header Template Part File.
 *
 * Template part file that contains the HTML document head and
 * opening HTML body elements, as well as the site header.
 * This file is called by certain primary template pages.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$canuckcp_blog_feature          = get_theme_mod( 'canuckcp_blog_feature', 'background_image' );
$canuckcp_blog_feature_category = get_theme_mod( 'canuckcp_blog_feature_category', '' );
$canuckcp_blog_title            = get_theme_mod( 'canuckcp_home_title', '' );
$canuckcp_blog_desc             = get_theme_mod( 'canuckcp_home_description', '' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset=<?php bloginfo( 'charset' ); ?> >
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' ); // phpcs:ignore
	}
	?>
	<a class="skip-link screen-reader-text" href="#content-wrap"><?php esc_html_e( 'Skip to content', 'canuck-cp' ); ?></a>
	<?php
	if ( 'background_image' === $canuckcp_blog_feature ) {
		?>
		<header id="main-header" class="header-wide-image blog">
		<?php
	} elseif ( 'button_nav' === $canuckcp_blog_feature || 'widgetized' === $canuckcp_blog_feature ) {
		?>
		<header id="main-header" class="header-wide-slider blog">
		<?php
	} else {
		?>
		<header id="main-header" class="header-wide-no-feature blog">
		<?php
	}
			get_template_part( '/template-parts/header-parts/header', 'top-strip' );
	?>
			<div class="header-logo-menu-wide">
				<div class="header-logo-menu-strip">
					<div class="header-image-left" >
						<?php
						if ( 'background_image' === $canuckcp_blog_feature ) {
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
							<?php
						} else {
							canuckcp_show_logo();
						}
						?>
					</div>
					<?php
					if ( has_nav_menu( 'canuckcp_primary' ) ) {
						?>
						<span class="menu-1-toggle-access screen-reader-text"></span>
						<button class="menu-1-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Top Menu Toggle', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'align-justify', '20', '#7f7f7f' );// phpcs:ignore ?></button>
						<?php
					}
					?>
					<nav class="nav-container" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'canuck-cp' ); ?>">
						<h2 class="screen-reader-text"><?php esc_html_e( 'Main Menu', 'canuck-cp' ); ?></h2>
						<?php canuckcp_header_menu(); ?>
					</nav>
				</div>
			</div>
		</header>
		<button class="sidebar-a-toggle toggle-off" aria-expanded="false" aria-label="<?php esc_attr_e( 'Sidebar A Toggle', 'canuck-cp' ); ?>"><i class="font-icon caret-right"><?php echo canuckcp_svg( 'caret-right', '12', '#7f7f7f' );// phpcs:ignore ?></i></button>
		<button class="sidebar-b-toggle toggle-off" aria-expanded="false" aria-label="<?php esc_attr_e( 'Sidebar B Toggle', 'canuck-cp' ); ?>"><i class="font-icon caret-left"><?php echo canuckcp_svg( 'caret-left', '12', '#7f7f7f' );// phpcs:ignore ?></i></button>
		<a href="#main-header" class="scrolltotop"><i class="font-icon chevron-up"><?php echo canuckcp_svg( 'chevron-up', '12', '#ffffff' );// phpcs:ignore ?></i></a>
		<?php
		if ( 'background_image' === $canuckcp_blog_feature ) {
			$image_url = get_header_image();// phpcs:ignore 
			if ( false == $image_url ) {// phpcs:ignore 
				$image_url = get_parent_theme_file_uri( '/images/headerdefault.jpg' );// phpcs:ignore 
			}
			?>
			<div class="header-image-wrap">
				<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'header-image', 'canuck-cp' ); ?>">
				<span class="header-image-overlay">
					<span class="header-image-overlay-wrap">
					<?php
					if ( '' !== $canuckcp_blog_title ) {
						?>
						<h1><?php echo wp_kses_post( $canuckcp_blog_title ); ?></h1>
						<?php
					} else {
						?>
						<h1><?php echo get_bloginfo( 'name' );// phpcs:ignore ?></h1>
						<?php
					}
					if ( '' !== $canuckcp_blog_desc ) {
						?>
						<span><?php echo wp_kses_post( $canuckcp_blog_desc ); ?></span>
						<?php
					} else {
						?>
						<span><?php echo get_bloginfo( 'description' );// phpcs:ignore ?></span>
						<?php
					}
					?>
					</span>
				</span>
			</div>
			<?php
		} else {
			echo '<div class="sticky-spacer">&nbsp;</div>';
		}
		?>
