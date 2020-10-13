<?php
/**
 * Canuck CP Theme Page.
 * This file sets up the Canuck CP Theme Page.
 * The page is used for theme introduction, links, and documentation'
 *
 * @package   Canuck CP ClassicPress Theme
 * @copyright Copyright (C) 2017-2019, kevinhaig
 * @license   GPLv2 or later http://www.gnu.org/licenses/quick-guide-gplv2.html
 * @author    kevinhaig <kevinsspace.ca/contact/>
 * Canuck CP is distributed under the terms of the GNU GPL.
 */

add_action( 'admin_menu', 'canuckcp_theme_page_init' );
/**
 * Canuck CP add theme page
 */
function canuckcp_theme_page_init() {
	$themepage = add_theme_page( __( 'Canuck CP Theme', 'canuck-cp' ), __( 'Canuck', 'canuck-cp' ), 'edit_theme_options', 'canuckcp_theme_page', 'canuckcp_theme_page_callback' );
}

/**
 * Tabs for theme page.
 *
 * @param string $current is current page.
 */
function canuckcp_theme_page_tabs( $current = 'canuckcp_intro_page' ) {
	$tabs               = array(
		'canuckcp_intro_page'        => esc_html__( 'Introduction', 'canuck-cp' ),
		'canuckcp_quick_setup_page'  => esc_html__( 'Quick Setup', 'canuck-cp' ),
		'canuckcp_detail_setup_page' => esc_html__( 'Detail Setup', 'canuck-cp' ),
		'canuckcp_home_setup_page'   => esc_html__( 'Home Page Setup', 'canuck-cp' ),
	);
	$canuckcp_admin_nonce = wp_create_nonce( 'canuck-admin-nonce' );
	echo '<h2 class="nav-tab-wrapper">';
	foreach ( $tabs as $tab => $name ) {
		$class = ( $tab === $current ) ? ' nav-tab-active' : '';
		echo "<a class='nav-tab$class' href='?page=canuckcp_theme_page&tab=$tab&_wp_nonce=$canuckcp_admin_nonce'>$name</a>"; // phpcs:ignore
	}
	echo '</h2>';
}

/**
 * Canuck CP Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuckcp_theme_page_callback() {
	global $pagenow;
	?>
	<div class="canuck-cp-wrap">
		<h1><?php esc_html_e( 'Canuck CP ClassicPress Theme', 'canuck-cp' ); ?></h1>
		<?php
		if ( isset( $_GET['tab'] ) && isset( $_GET['_wp_nonce'] ) && false !== wp_verify_nonce( $_GET['_wp_nonce'], 'canuck-admin-nonce' ) ) {// phpcs:ignore 
			canuckcp_theme_page_tabs( esc_html( wp_unslash( $_GET['tab'] ) ) ); // phpcs:ignore
		} else {
			canuckcp_theme_page_tabs( 'canuckcp_intro_page' );
		}
		?>
		<div id="canuck-cp-page">
			<?php
			if ( isset( $_GET['page'] ) ) {
				$page_string = sanitize_text_field( wp_unslash( $_GET['page'] ) ); // phpcs:ignore non sanitized
			}
			if ( 'themes.php' === $pagenow && 'canuckcp_theme_page' === $page_string ) { // phpcs:ignore input var ok.
				if ( isset( $_GET['tab'] ) && isset( $_GET['_wp_nonce'] ) && false !== wp_verify_nonce( $_GET['_wp_nonce'], 'canuck-admin-nonce' ) ) {
					$tab = esc_html( wp_unslash( $_GET['tab'] ) ); // phpcs:ignore input var ok, sanitization ok.
				} else {
					$tab = 'canuckcp_intro_page';
				}
				switch ( $tab ) {
					case 'canuckcp_intro_page':
						canuckcp_intro_setup_callback();
						break;
					case 'canuckcp_quick_setup_page':
						canuckcp_quick_setup_callback();
						break;
					case 'canuckcp_detail_setup_page':
						canuckcp_detailed_setup_callback();
						break;
					case 'canuckcp_home_setup_page':
						canuckcp_homepage_setup_callback();
						break;
				}
			}
			?>
		</div>
	</div>
	<?php
}

/**
 * Intro html.
 */
function canuckcp_intro_setup_callback() {
	echo '<h2>' . esc_html__( 'Introduction', 'canuck-cp' ) . '</h2>';
	echo '<p>' . esc_html__( 'Welcome, I hope you enjoy using the theme.', 'canuck-cp' ) . '</p>';
	echo '<p>' . esc_html__( 'There is no upsell for this theme. ', 'canuck-cp' ) .
				esc_html__( 'What you are getting is a full featured theme.', 'canuck-cp' ) . '<br/>' .
				esc_html__( 'Try the theme out, if you decide to use it, do the right thing and provide a donation to the Author.', 'canuck-cp' ) . '<br/>' .
				esc_html__( 'Give the Author incentive to support, and upgrade the theme.', 'canuck-cp' ) . '</p>';
	?>
	<div class="katb_paypal"><?php esc_html_e( 'Show your appreciation!', 'canuck-cp' ); ?>
		<br/><br/>
		<a href="https://canuckdemo.kevinsspace.ca/donate/" target="_blank"> <?php // phpcs:ignore ?>
			<img alt="<?php esc_attr_e( 'Donate Button with Credit Cards', 'canuck-cp' ); ?>" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_donate_cc_147x47.png" /> <?php // phpcs:ignore ?>
		</a>
	</div>
	<p>
		<?php
		echo esc_html__( 'Author Site : ', 'canuck-cp' ) . '<a href="//kevinsspace.ca" target="_blank" >kevinsspace.ca</a>&nbsp;&nbsp;&nbsp;'; // phpcs:ignore
		echo esc_html__( 'Demo Site : ', 'canuck-cp' ) . '<a href="//cauckdemo.kevinsspace.ca/" target="_blank" >Canuck CP Demo</a>'; // phpcs:ignore
		?>
	</p>
	<?php
	echo '<h2>' . esc_html__( 'Special Considerations', 'canuck-cp' ) . '</h2>';
	echo '<h3>' . esc_html__( 'Images', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck CP makes extensive use of custom sized images to make the theme look great, and reduce load times. ', 'canuck-cp' ) .
				esc_html__( 'When using a new theme it is always a good idea to re-generate your thumbnails. ', 'canuck-cp' ) .
				esc_html__( 'I use a plugin called "Force Regerate Thumbnails" available in the WordPress.org plugin repository. ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Download "Force Regenerate Thumbnails" or an equivalent plugin and activate it.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'The Canuck CP theme must be active before you regenerate your thumbnails.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'If you decide to go to a different theme or return to the previous theme, then regenerate your thumbnails with that theme loaded.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that if your site has a lot of images, it will take a while to regerate your thumbnails.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Backup your Content from the Options to a Page', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck CP has an extensive set of options and a great landing page (home page) builder. ', 'canuck-cp' ) .
				esc_html__( 'Many of these options create content, that would normally be lost on theme switch. ', 'canuck-cp' ) .
				esc_html__( 'By backing up your content from these options to a page, content is maintained, available to you even if you are setting up a different theme. ', 'canuck-cp' ) .
				esc_html__( 'To backup your options: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck CP General->Backup Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Backup Canuck CP Option Content" box, then "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'There will be a page created under "Pages" called "Canuck CP Content Created Backup".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'This page is password protected, with the Password : Canuck.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Do not publish the page, leave it in draft mode.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'You can delete the page any time, just like a regular page.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'If you leave the box checked the content of the page will be updated every time you "Save & Publish" your options.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Uncheck the box and "Save & Publish" if you just want to update manually.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Import your Parent theme options to a child theme.', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'When you set up a child theme, all custom theme mods (options) are reset. ', 'canuck-cp' ) .
				esc_html__( 'This can be a real pain re-entering options if you are setting up child theme to solve a theme problem after the theme is setup. ', 'canuck-cp' ) .
				esc_html__( 'Canuck CP will let you import all custom options  to the child theme at the click of a button. ', 'canuck-cp' ) .
				esc_html__( 'To import your Parent Theme options: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck CP General->Backup Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Import Parent Theme Options" box, then "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'All custom options for Canuck CP will be imported to your child theme.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Do this only once, at the start of setting up your childtheme.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Any options you set up in the child theme may be overwritten by parent theme options if you do it later.', 'canuck-cp' ) . '</li>';
	echo '<li style="color:red;">' . esc_html__( 'After the initial import, uncheck the box and "Save & Publish" to ensure the options are not imported again.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Theme Static Home Page Performance.', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'If you are using many sections and images on your home page, performance will suffer. ', 'canuck-cp' ) .
				esc_html__( 'If you are concerned about page load speed you can set an option to lazyload images. ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck CP General->jQuery Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Use jquery.lazy.js plugin" box, then "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '</ol>';
}
/**
 * Canuck CP Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuckcp_quick_setup_callback() {
	echo '<h2>' . esc_html__( 'Canuck CP Quick Setup', 'canuck-cp' ) . '</h2>';
	echo '<h3>' . esc_html__( 'Options and the Customize Panel', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Options are set in the Customizer accessed through the "Appearance->Customize" tab. ', 'canuck-cp' ) .
				esc_html__( 'Normally the changes you set will show up in the preview screen after the automatic refresh. ', 'canuck-cp' ) .
				esc_html__( 'If not try and clicking the "Save & Publish" button then reload the page. ', 'canuck-cp' ) .
				esc_html__( 'If that does not work try resetting your browser cache, as the previous setting may be in a cached page.', 'canuck-cp' ) . '</p>';

	echo '<h2>' . esc_html__( 'Minimal Set Up', 'canuck-cp' ) . '</h2>';
	echo '<p>' . esc_html__( 'Canuck CP has extensive options, however it should look great and work great with minimal set up. ', 'canuck-cp' ) .
				esc_html__( 'Start by loading up the Customize panel. Go to "Appearance->Customize".', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Blog Page', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Header Image - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'If you previously installed a header image, you may see that image stretched accross your screen on initial load. ', 'canuck-cp' ) .
						esc_html__( 'If a new install or if you did not have a header image installed, a default header image is shown. ', 'canuck-cp' ) .
						esc_html__( 'To remove the image: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Canuck CP Blog->General Blog Options"', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Blog Feature Options"->"No Feature" from the dropdown list.', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'To change the image: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Header Media" tab in Customize', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Add new image" and pick or upload your image.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be around 1100pixels wide and 367 pixels high, with the aspect ratio of 3:1.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Logo', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Main Logo - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'The main logo should designed for a white background: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Site Identity" tab in Customize', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Select Logo" or "Change Logo" and pick or upload your logo image.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be a maximum 230px wide x maximum 100px high.', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p><strong>' . esc_html__( 'Second Logo - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'If you are using a header image as a background, a logo designed for a dark backround is recommended.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP Headers->Image background options" tab in Customize', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Add the logo under the "Logo to overlay image backgrounds" section.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be a maximum 230px wide x maximum 100px high.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Widgets', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Default Widgets - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Set up the widgets you would like on the core pages. ', 'canuck-cp' ) .
						esc_html__( 'Core pages are the Search, Categories, Tags, and Date Archive pages.', 'canuck-cp' ) .
						esc_html__( 'Other pages will initially use the default widget area initially, until you change theme.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Default A" widget setup area.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Defalult B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<p><strong>' . esc_html__( 'Blog Widgets - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Canuck CP allows you to use different widgets for your Blog Page:', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Blog A" widget setup area.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Blog B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<p><strong>' . esc_html__( 'Error 404 Widgets - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Canuck CP allows you to use different widgets for your Error Page Page.', 'canuck-cp' ) .
					esc_html__( 'This allows you to provide the user options such as a search widget, or recent posts widget.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Error 404 A" widget setup area.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Error 404 B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Menus', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Main Menu - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Cunuck has one menu for navigation on your site. ', 'canuck-cp' ) .
						esc_html__( 'You use up to 4 levels with the menu, which should be more than you need.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Menus" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select a menu you previously created or create a new one.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Under "Display location" at the bottom of the menu panel, check "Primary Menu" and then "Save Menu".', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Social Links', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Social links display in a menu strip in the upper right of your page. ', 'canuck-cp' ) .
						esc_html__( 'These links are no longer set up in the menu system, they are part of the Canuck CP Options System.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP Social Links" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'You can now add up to 8 social links.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Simply select the social link you want from the dropdown menu.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Add the link in the space below your selection, include the protocol (ie https://)', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Pinterest', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Pinterest PinIt Button - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Canuck CP has a special option to enable theme specific Pinterest Pinit buttons. ', 'canuck-cp' ) .
						esc_html__( 'The reason for this is that many of the features of this theme use image overlays which will not display the PinIt button from other plugins. ', 'canuck-cp' ) .
						esc_html__( 'You will still be able to use the Pinterest plugins if you want, like JetPack Share plugin.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the  "Canuck CP General->Miscelaneous Options" panel.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Include Pinterest PinIt" checkbox', 'canuck-cp' ) . '</li>';
	echo '</ol>';
}

/**
 * Canuck CP Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuckcp_detailed_setup_callback() {
	echo '<h2>' . esc_html__( 'Detailed Setup', 'canuck-cp' ) . '</h2>';
	echo '<p>' . esc_html__( 'Most options have adequate descriptions so I will focus on items that need special attention. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Slider Setup: Home Page, Blog Page, or Feature Pages', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Setting up sliders are relatively simple once you get the hang of it. ', 'canuck-cp' ) .
				esc_html__( 'Sliders get their images from Featured Posts of a specified Category.  ', 'canuck-cp' ) .
				esc_html__( 'To set up a feature post:', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Posts->Categories" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Create a new category to be used only by the slider posts and name it something like "Feature 1".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Posts->Add New" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Enter the title and content.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Categories metabox select the category you created in Step 2.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Featured Image metabox select "Set featured image.".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Upload the image, or select one from your Media library.".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Change the image title if you want".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Put in the Caption for the image (treat it like a title) with 2 or three words.".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Put in the Description for the image with 1-2 lines.".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Add the image alt, usually the same as the title.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Set Featured Image".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Canuck CP Post Options metabox, you can select to show the title in a caption on the image.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Canuck CP Post Options metabox, you can set up a link for the image.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Publish/Update the post.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Repeat steps 3-15 for additional images.', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Feature areas on the Static Home page (Canuck CP Home Page) and Blog page (Canuck CP Blog) can be a background image, a slider, a video (video widget), or nothing. ', 'canuck-cp' ) .
				esc_html__( 'Sliders can either be the full size images you upload or images with a 3:1 aspect ratio.  ', 'canuck-cp' ) .
				esc_html__( 'The Feature Page slider uses images with a 1.5:1 aspect ratio. ', 'canuck-cp' ) .
				esc_html__( 'I would recommend you keep all your images for these sliders at 1100px wide with the appropriate aspect height.  ', 'canuck-cp' ) .
				esc_html__( 'To set up a Home Page slider:".', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP Home Page->Home Feature Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Set slider from the "Home Page Feature" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Home Slider Feature Category" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<p>' . esc_html__( 'To set up a Blog Page slider:".', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP Blog->General Blog Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Set slider from the "Blog Feature Options" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Feature Slider Category" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'To set up a Feature Page slider:".', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title and content.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Feature" from the Template dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Save a Draft of the page and the Feature options will be added to the "Canuck CP Page Options Metabox".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up Canuck CP Page Options: Page Layout Options, Exclude Page Title, Sidebar A, and Sidebar B (if using both sidebars).', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Feature Slider Category" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Feature Type" from the dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Some users will not want these posts to show up in the blog or any blog lists:".', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP General->Exclude Categories".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the box for the category you want to exclude.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p><strong>' . esc_html__( 'Slider Settings - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Slider setup can be found in "Canuck CP General->Slider Options"', 'canuck-cp' ) . '</p>';

	echo '<p>' . esc_html__( 'As of Canuck CP Version 1.1.8 you can now also use a video for the Home Page or Blog Page Feature areas. ', 'canuck-cp' ) .
				esc_html__( 'To set up a Home Page video:".', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck CP Home Page->Home Feature Options".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select Widget(allows video) from the "Home Page Feature" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish" and then exit Customizer.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to the "Appearance->Widgets" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the Video widget over to the "Home Page Feature" widget area.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Follow the instructions provided by the widget to set up your video.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'The procedure is essentially the same for the Blog Feature area so I will not repeat it.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Canuck CP General', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Miscellaneous Options - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'This is where you can include Pinterest sharing discussed in the Quick Start tab.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Backup Options - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Discussed in the Introduction tab.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Exclude Categories - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'This is where you can exclude categories that would be used in the featured posts for sliders, portfolios, etc.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Flex Slider Options - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Set slider options such as type, pause and transition times.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'jQuery Options - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Disable jQuery scripts for debugging or to use a different script.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP Layouts', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Breadcrumbs - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Select "General Layout Options" and you can set up Breadcrumbs there. ', 'canuck-cp' ) .
						esc_html__( 'You must have the plugin "Breadcrumb Trail" by Justin Tadlock installed to use breadcrumbs.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Use Featured Images - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Normally featured images are not shown on WordPress Core templates. ', 'canuck-cp' ) .
						esc_html__( 'If you check this box they will be included on archive, category, search, and tag pages. ', 'canuck-cp' ) .
						esc_html__( 'The side presentation will be shown on fullwidth, left and right sidebar layouts, while the top feature presentation will be used for the three column layout.', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Layouts - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'You can select layouts for all the WordPress Core pages. ', 'canuck-cp' ) .
						esc_html__( 'Also note that the Author Page has an option to include an Author Bio. ', 'canuck-cp' ) .
						esc_html__( 'The Single page has page title and sidebar options.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP Headers', 'canuck-cp' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Image Background Options - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'You can set up a header menu overlay used when a background image is used in the header. ', 'canuck-cp' ) .
						esc_html__( 'This helps the menu show better when you are useing lighter images.', 'canuck-cp' ) .
						esc_html__( 'You can also add a second logo for image overlays, discussed in the "Quick Install".', 'canuck-cp' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Contact Information - ', 'canuck-cp' ) . '</strong>' . esc_html__( 'Enter contact information here that will be shown in the header strip. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP Footer', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'The option descriptions in "Canuck CP Footer" are enough detail so I will not elaborate further.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP Styles', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can select a skin (more to come in future releases) and fonts for headers, body text, and Page Titles.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP Blog', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'I will not go into additional detail as some options have been previously discussed and the rest have adequate descriptions. ', 'canuck-cp' ) .
				esc_html__( 'I will note that you can choose excerpts and excerpt size, and exclude meta items such as post date, author, categories and tags. ', 'canuck-cp' ) .
				esc_html__( 'You can also choose to exclude the No Comments link in the blog and single page post meta.', 'canuck-cp' ) .
				esc_html__( 'There is a option in the General Blog Option panel to include captions on Galleries.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck CP WooCommerce Options', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'This option appears only if the WooCommerce plugin is installed and activated. ', 'canuck-cp' ) .
				esc_html__( 'Special WooCommerce sidebars are set up, and you can select the layout you want for the Shop and Product pages.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Post Formats', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck CP supports Audio, Quote, Gallery, Image, and Video Post Formats ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Audio Post Format: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Add your audio using the Add Media button in your post editor panel. ', 'canuck-cp' ) .
						esc_html__( 'Then select the Audio Format for your post. ', 'canuck-cp' ) .
						esc_html__( 'If you want to change the background for the audio, simply insert a featured image.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Quote Post Format: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you like to start your posts off with a quote, the Quote Post Format is for you. ', 'canuck-cp' ) .
						esc_html__( 'The quote post format requires a bit of a special set up, but really it is not very difficult. ', 'canuck-cp' ) .
						esc_html__( 'Add the quote data between &lt;q&gt;quote|author|link&lt;/q&gt; tags then select the Quote Format for your post.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Gallery Post Format: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'The Gallery Post Format allows you to present a group of photos in a carousel navigated feature area. ', 'canuck-cp' ) .
						esc_html__( 'Simply select Add Media when setting up your post. ', 'canuck-cp' ) .
						esc_html__( 'Insert the gallery and then add your content. ', 'canuck-cp' ) .
						esc_html__( 'Finally select Gallery in the radio button in the Format panel.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Image Post Format: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'The Image Post Format allows you to blog about a special image. ', 'canuck-cp' ) .
						esc_html__( 'Set up a feature image post and click the Image radio in the Format panel. ', 'canuck-cp' ) .
						esc_html__( 'Add your image caption and description when you upload and set the feature image as they will be shown in the hover mode, along with photograph meta details.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Video Post Format: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'This post format allows you to set up a video in the feature area of your post. ', 'canuck-cp' ) .
						esc_html__( 'Simply select Add Media and add your YouTube url. ', 'canuck-cp' ) .
						esc_html__( 'Add your content and select Video in the radio button in the Format panel.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Portfolio Page', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can set up as many Portfolio Pages as you want. ', 'canuck-cp' ) .
				esc_html__( 'A portfolio page is essentially a collection of images with a title, description and links.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Make sure you have set up you featured posts with title and content, and image caption and descriptions under a specific category.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title and content.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Portfolio" from the Template dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Save a Draft of the page and the Portfolio options will be added to the "Canuck CP Page Options Metabox".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up Canuck CP Page Options: Page Layout Options, Exclude Page Title, Sidebar A, and Sidebar B (if using both sidebars).', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Portfolio Category" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Portfolio Type" from the dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select to include Post Title, Post Content, Image Caption, and Image description as you need for the Portfolio type." from the dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Recommendations for Portfolio types are shown below: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'fullwidth: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Fullwidth image and either post title and content or image caption and description, layouts recommended: left sidebar, right sidebar or both sidebars.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 1 column: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Image on the left, post title and content on the right, image caption and description optionally on the bottom, layouts recommended: all.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 2 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Two columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 3 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Three columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 4 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Four columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 2 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Two columns with image and overlay of caption and description, layouts recommended: all.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 3 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Three columns with image and overlay of caption and description, layouts recommended: left sidebar, right sidebar, fullwidth.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 4 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Four columns with image and either post title and content or image caption and description, layouts recommended: fullwidth.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 5 columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Five columns with image and either post title and content or image caption and description, layouts recommended: fullwidth.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Masonry Gallery Page', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can set up as many Masonry Gallery Pages as you want. ', 'canuck-cp' ) .
				esc_html__( 'A Masonry Gallery Page is essentially a collection of images with a Image Number and a PinIt link(if set up).', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Use the "Add Media" button to set up your gallery using the same method as you would for setting up a gallery in a post.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your content.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Masonry Gallery" from the Template dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Colors', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'A little customization of theme colors is allowed here. ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to Appearance->Customize->Colors tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Header Text Color: Set the color of the text that overlays your image used for the Static Home page or the Blog Page.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Background Color - Set the background color for the header, title area, and main content areas of all pages except the static home page.', 'canuck-cp' ) .
				esc_html__( 'Please remember that you can not change text or hover colors, so use a light background..', 'canuck-cp' ) . '</li>';
	echo '</ol>';
}

/**
 * Canuck CP Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuckcp_homepage_setup_callback() {
	echo '<h2>Home Page Setup</h2>';
	echo '<p>' . esc_html__( 'Canuck CP offers an extensive Home Page Builder so you can build a great looking Landing Page for your website. ', 'canuck-cp' ) .
				esc_html__( 'There are a total of 15 sections that you can choose from to build your Home Page. ', 'canuck-cp' ) .
				esc_html__( 'Set up instructions are discussed below, it really is not that hard, just work through it for a great Landing Page. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Initial Setup', 'canuck-cp' ) . '</h3>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title, note that the title is only used for a permalink.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Home Page" from the Template dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up another page and call it "Blog", publish the page.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to "appearance->Customize".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Static Front Page".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Front Page Displays->A static page".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the page you just created from the "Front Page" dropdown.', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Blog" page you created previously for "The Posts Page".', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Home Feature Options', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'This section is essentially the same as the Blog Feature section so I will not provide details. ', 'canuck-cp' ) .
				esc_html__( 'You can select a slider, image, widget(allows videos) or no feature. ', 'canuck-cp' ) .
				esc_html__( 'The slider is populates as discussed at the start of the Detailed Setup tab. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section Layout Options', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are 15 sections you can use and 15 areas stacked on top of each other. ', 'canuck-cp' ) .
				esc_html__( 'You can select any Section to appear in any stacked area on your page. ', 'canuck-cp' ) .
				esc_html__( 'Note that you do not need to use each section but make sure any section you use is used only once, stack them in the order you prefer ', 'canuck-cp' ) .
				esc_html__( 'I would not recommend using all sections as it will impact page load speed. Pick and choose what is best for your landing page.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Common Options for all Sections ', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are common options for all sections. ', 'canuck-cp' ) .
				esc_html__( 'You can select a color background and opacity for all sections or you can use an image background.', 'canuck-cp' ) .
				esc_html__( 'Because you can change the background you can also change text color to better show on the background you want to use.', 'canuck-cp' ) .
				esc_html__( 'Look for the following options in each section: ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Image: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Upload and insert an image if you want to use an image as a background', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Overlay Opacity: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Drag this slidebar to select a overlay opacity to darken the image.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Use Parallax: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you use an image you can use a parallax effect which causes the image to scroll slower then the section, very cool. I would only recommend this feature on one or two sections.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Color: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you do not use an image, select a color for the background.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Color Opacity: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Select the opacity of the background, a great option if you have set a background image under the main "Background Image" tab.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Link Buttons ', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are links in the form of buttons in many of the sections. ', 'canuck-cp' ) .
				esc_html__( 'Styling these buttions are set up as options to help you accent them over custom backgrounds.', 'canuck-cp' ) .
				esc_html__( 'You can select the background color and text color and for the background hover color and text hover color.', 'canuck-cp' ) .
				esc_html__( 'You can also select a font icon to be inserted just in front of the label text.', 'canuck-cp' ) .
				esc_html__( 'Note that the hover background color and the hover text color will also be used for the hover links over images. This way you have control of the hover state for images or buttons.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 1, 3, 5, and 7', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'All of these sections are the same, so I will cover them all as Section 1. ', 'canuck-cp' ) .
				esc_html__( 'These sections are essentially a blank HTML canvas, allowing input in a one column presentation. ', 'canuck-cp' ) . '</p>';

	echo '<h4>' . esc_html__( 'Useage: Normal', 'canuck-cp' ) . '</h4>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->normal".', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Content: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Insert your content note, that HTML is allowed.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Link: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Check this box to use a link', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you want to add a font icon in front of the button text, you can add one from the dropdown list.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Button Label: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'You can add HTML to the button label, allowingv the use of Fontawesome icons, see the Format suggested.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Button URI: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the link you want to use.', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<h4>' . esc_html__( 'Useage: Shortcode', 'canuck-cp' ) . '</h4>';
	echo '<p>' . esc_html__( 'If you have a plugin that uses shortcodes you can use that shortcode instead of normal content. ', 'canuck-cp' ) .
				esc_html__( 'This may come in handy for things like testimonials.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->shortcode".', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Shortcode: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Insert your shortcode in this text box.', 'canuck-cp' ) . '</li>';
	echo '</ol>';
	echo '<h4>' . esc_html__( 'Useage: Widget', 'canuck-cp' ) . '</h4>';
	echo '<p>' . esc_html__( 'You can also use a widget in this area. ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->widgetized".', 'canuck-cp' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to "Appearance->Widgets" and drag the widget over to the appropriate Section widget container, "Home Page Section 1" in this case.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 2', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'This section contains 3 service boxes.', 'canuck-cp' ) .
				esc_html__( 'Each service box can contain an image, title, html or text content and a link. ', 'canuck-cp' ) .
				esc_html__( 'You can either attach the link to the image or a button. ', 'canuck-cp' ) .
				esc_html__( 'Note that it is best to set up all three service boxes the same. ', 'canuck-cp' ) .
				esc_html__( 'I will cover the setup for Section-2-Box 1 or service box 1. ', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Font Icon: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Check to use a font Awesome icon instead of an image.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Font Icon Code: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Select the font icon you want from the dropdown list.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Icon Color: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Select the color you want for the font icon.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Image: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you want to use an image upload it here. ', 'canuck-cp' ) .
						esc_html__( 'Image size recommended is ~300px wide. ', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Content: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the box content, HTML is allowed if you want to use it.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Check this box if you want to add a link.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link URL: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the link URL here.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'If you want to add a font icon in front of the button text, you can add one from the dropdown list.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link Label: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'You can add HTML to the button label, allowing the use of Fontawesome icons, see the Format suggested.', 'canuck-cp' ) .
						esc_html__( 'Leave this blank if you want to link to the image or Font Awesome Icon.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 4 and 6', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Sections 4 and 6 contains 2 service boxes.', 'canuck-cp' ) .
				esc_html__( 'Each of these Service boxes follow the same setup procedures as the service boxes in Section 2. ', 'canuck-cp' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 8', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 8 contains 4 service boxes.', 'canuck-cp' ) .
				esc_html__( 'Each of these Service boxes follow the same setup procedures as the service boxes in Section 2. ', 'canuck-cp' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 9', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 9 contains a title, description and portfolio.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 9-Title: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the title, html is allowed but you do not have to use it.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Content: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the text of html content here.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Image Hover Background Color: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Pick a hover color for the background image overlay.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Image Hover Text Color: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Pick a hover color for the text on the image overlay.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Portfolio Category: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'This section uses featured posts for populating the portfolio just like we used featured posts to populate the slider, see the detailed Setup section. ', 'canuck-cp' ) .
						esc_html__( 'Make sure your featured posts are set up under a specific category. ', 'canuck-cp' ) .
						esc_html__( 'When you set up the featured images in the Featured posts make sure the image caption and description are filled out. They are used on the image hover. ', 'canuck-cp' ) .
						esc_html__( 'Also when setting up the post, set either a link to the post or a custom link. ', 'canuck-cp' ) .
						esc_html__( 'With all this done select the category you used from the dropdown list.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Portfolio Columns: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Select 3 or 4 columns from the dropdown.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 10 and 11', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 10 and 11 contain a media section on one side and a content area on the other side.', 'canuck-cp' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 10 Media Area Useage: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'You can select an image, or a shortcode, or a widget, just like the useage options discussed in Section 1.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Image: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Upload an image or select from the Media Library.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Shortcode: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the shortcode here if using the shortcode useage option. ', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Title: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the title, html is allowed but you do not have to use it.', 'canuck-cp' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Content: ', 'canuck-cp' ) . '</strong>' .
						esc_html__( 'Enter the text of html content here.', 'canuck-cp' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 12 and 13', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 12 and 13 are portfolio carousels, one is medium sized, the other is small sized. ', 'canuck-cp' ) .
				esc_html__( 'The medium one is designed as an optional portfolio display, and the small one designed as more of a customer hero carousel. ', 'canuck-cp' ) .
				esc_html__( 'Both of these sections follow the same setup as Section 9, however, only a link is used in the overlay on Section 13.', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 14', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 14 contains 3 service boxes.', 'canuck-cp' ) .
				esc_html__( 'This section is identical to Section 2, so use the same procedures as those used for the service boxes in Section 2. ', 'canuck-cp' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck-cp' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 15', 'canuck-cp' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 15 contains 4 service boxes.', 'canuck-cp' ) .
				esc_html__( 'This section is identical to Section 8, and you can refer to the same procedures as those used for the service boxes in Section 2. ', 'canuck-cp' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck-cp' ) . '</p>';
}
