<?php
/**
 * Loader.
 *
 * @package    Books
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Books;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Loader {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::after_setup_theme' );

				add_action( 'plugins_loaded', __CLASS__ . '::load_plugin_textdomain' );

	} // /init

	/**
	 * After setup theme.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function after_setup_theme() {

		// Processing

			Post_Type::init();
			Taxonomy::init();

	} // /after_setup_theme

	/**
	 * Localize the plugin.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function load_plugin_textdomain() {

		// Processing

			load_plugin_textdomain( 'books', false, dirname( plugin_basename( BOOKS_FILE ) ) . '/languages' );

	} // /load_plugin_textdomain

}
