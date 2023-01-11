<?php
/**
 * Custom taxonomies setup.
 *
 * @package    Books
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Books;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Taxonomy {

	/**
	 * Taxonomies setup array.
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     array
	 */
	private static $taxonomies = array();

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			require_once BOOKS_PATH . 'includes/tax/_index.php';

			self::register();

	} // /init

	/**
	 * Register block styles.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register() {

		// Variables

			$post_type = Post_Type::$post_type;


		// Processing

			foreach ( self::get_taxonomies() as $taxonomy => $args ) {
				if ( ! empty( $args ) ) {
					register_taxonomy(
						sanitize_title( $post_type . '_' . $taxonomy ),
						$post_type,
						$args
					);
				}
			}

	} // /register

	/**
	 * Gets array of taxonomies to register.
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function get_taxonomies(): array {

		// Output

			/**
			 * Filters taxonomies setup array.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $taxonomies
			 */
			return (array) apply_filters( 'books/taxonomy/get_taxonomies', self::$taxonomies );

	} // /get_taxonomies

	/**
	 * Adds a singular taxonomy setup args to array.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $taxonomy  Taxonomy key.
	 * @param  array  $props     Array of taxonomy setup args.
	 *
	 * @return  void
	 */
	public static function add_taxonomy( string $taxonomy, array $args ) {

		// Requirements check

			if (
				empty( $taxonomy )
				|| empty( $args )
			) {
				return;
			}


		// Processing

			self::$taxonomies[ $taxonomy ] = (array) $args;

	} // /add_taxonomy

}
