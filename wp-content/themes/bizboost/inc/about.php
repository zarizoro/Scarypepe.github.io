<?php
/**
 * Theme About Page
 *
 * @package BizBoost
 * @since 1.0
 */

function bizboost_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_bizboost-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible bizboost-admin-notice">
        <div class="bizboost-admin-notice-wrapper">
            <h2><?php esc_html_e( 'BizBoost Pro', 'bizboost' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 45+ Pre-Designed Block Patterns, 26 FSE Templates, and 22 Template Parts  that are highly customizable and fully responsive.', 'bizboost' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/bizboost-pro/'); ?>"><?php esc_html_e( 'Get BizBoost Pro', 'bizboost' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=bizboost-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'bizboost' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'bizboost_admin_plugin_notice' );

function bizboost_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'bizboost-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'bizboost_theme_page_admin_style' );

/**
 * Add theme page
 */
function bizboost_menu() {
	add_theme_page( esc_html__( 'BizBoost', 'bizboost' ), esc_html__( 'BizBoost', 'bizboost' ), 'edit_theme_options', 'bizboost-theme', 'bizboost_theme_page_display' );
}
add_action( 'admin_menu', 'bizboost_menu' );

/**
 * Display About page
 */
function bizboost_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'bizboost' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with BizBoost!', 'bizboost' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! BizBoost has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'bizboost' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/bizboost/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'bizboost' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with BizBoost Pro Theme', 'bizboost' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to BizBoost Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'bizboost' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/bizboost-pro/"><?php esc_html_e( 'Buy BizBoost Pro', 'bizboost' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'bizboost' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'bizboost' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/bizboost-free/"><?php esc_html_e( 'View Demo', 'bizboost' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/fse-faq' ); ?>"><?php esc_html_e( 'FSE FAQs', 'bizboost' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'bizboost' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'bizboost' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'bizboost' ); ?></h3>
						<p><?php esc_html_e( 'Loved BizBoost? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'bizboost' ); ?></p>
						<a href="https://wordpress.org/support/theme/bizboost/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'bizboost' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
