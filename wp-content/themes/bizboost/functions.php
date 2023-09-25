<?php
/**
 * BizBoost functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BizBoost
 * @since 1.0
 */

if ( ! function_exists( 'bizboost_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function bizboost_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'bizboost_support' );

if ( ! function_exists( 'bizboost_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function bizboost_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'bizboost-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);

		wp_enqueue_script(
            'bizboost-script',
            get_theme_file_uri( 'assets/js/custom.js' ),
            array(),
            filemtime( get_theme_file_path( 'assets/js/custom.js' ) ),
            true
        );
	}

endif;

add_action( 'wp_enqueue_scripts', 'bizboost_styles' );

if ( ! function_exists( 'bizboost_block_editor_styles' ) ) :

    /**
     * Enqueue rtl editor styles
     */

     function bizboost_block_editor_styles() {
        if( is_rtl() ){
            wp_enqueue_style(
                'bizboost-rtl',
                get_theme_file_uri( 'rtl.css' ),
                array(),
                filemtime( get_theme_file_path( 'rtl.css' ) )
            );
        }
    }

endif;

add_action( 'enqueue_block_editor_assets', 'bizboost_block_editor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';
