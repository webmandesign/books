<?php
/**
 * Plugin Name:  Books
 * Plugin URI:   https://github.com/webmandesign/books
 * Description:  Registers new "Books" custom post type and related taxonomies.
 * Version:      1.0.0
 * Author:       WebMan Design, Oliver Juhas
 * Author URI:   https://www.webmandesign.eu/
 * License:      GNU General Public License v3
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:  books
 * Domain Path:  /languages
 *
 * GitHub Plugin URI:  https://github.com/webmandesign/books
 *
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link  https://github.com/webmandesign/books
 * @link  https://www.webmandesign.eu
 *
 * @package  Books
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Constants.
define( 'BOOKS_FILE', __FILE__ );
define( 'BOOKS_PATH', plugin_dir_path( BOOKS_FILE ) ); // Trailing slashed.

// Load the functionality.
require_once BOOKS_PATH . 'includes/Autoload.php';
WebManDesign\Books\Loader::init();
