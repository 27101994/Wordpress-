<?php 
if ( ! function_exists( 'blockify_shop_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function blockify_shop_support() {
		load_theme_textdomain( 'blockify-shop', get_template_directory() . '/languages' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		
		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );
		add_editor_style( 'style.css' );
	}

endif;
add_action( 'after_setup_theme', 'blockify_shop_support' );

if ( ! function_exists( 'blockify_shop_enqueue_scripts_and_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function blockify_shop_enqueue_scripts_and_styles() {
		$min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme()->get('version');
		$template_dir = get_template_directory_uri();
		$template_assets_dir = $template_dir . '/assets';

		// Styles
		$styles = array(
			'blockify-shop-style'         => array(get_stylesheet_uri(), array(), $version),
			'blockify-shop-fontawesome'   => array($template_assets_dir . '/css/font-awesome/css/all.css', array(), "5.15.3"),	
		);

		// Enqueue Styles
		foreach ($styles as $handle => $data) {
			list($src, $deps, $ver) = $data;
			wp_enqueue_style($handle, $src, $deps, $ver);
		}
	}

endif;

add_action('wp_enqueue_scripts', 'blockify_shop_enqueue_scripts_and_styles');

// admin style
function blockify_shop_admin_styles() {
	wp_enqueue_style(
		'blockify-shop-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'admin_enqueue_scripts', 'blockify_shop_admin_styles' );

require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );

// admin Info
require get_template_directory() . '/class/admin-info.php';




  