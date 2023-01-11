<?php
/**
 * Custom post type setup.
 *
 * @package    Books
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Books;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Post_Type {

	/**
	 * Post type key.
	 *
	 * @since   1.0.0
	 * @access  public
	 * @var     string
	 */
	public static $post_type = 'book';

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Variables

			$labels = array(
				'name'                  => esc_html_x( 'Books', 'Post type general name', 'books' ),
				'singular_name'         => esc_html_x( 'Book', 'Post type singular name', 'books' ),
				'menu_name'             => esc_html_x( 'Books', 'Admin Menu text', 'books' ),
				'name_admin_bar'        => esc_html_x( 'Book', 'Add New on Toolbar', 'books' ),
				'add_new'               => esc_html_x( 'Add New', 'Book', 'books' ),
				'add_new_item'          => esc_html__( 'Add New Book', 'books' ),
				'new_item'              => esc_html__( 'New Book', 'books' ),
				'edit_item'             => esc_html__( 'Edit Book', 'books' ),
				'view_item'             => esc_html__( 'View Book', 'books' ),
				'all_items'             => esc_html__( 'All Books', 'books' ),
				'search_items'          => esc_html__( 'Search Books', 'books' ),
				'not_found'             => esc_html__( 'No books found.', 'books' ),
				'not_found_in_trash'    => esc_html__( 'No books found in Trash.', 'books' ),
				'featured_image'        => esc_html_x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'books' ),
				'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type.', 'books' ),
				'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type.', 'books' ),
				'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type.', 'books' ),
				'archives'              => esc_html_x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”.', 'books' ),
				'insert_into_item'      => esc_html_x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post).', 'books' ),
				'uploaded_to_this_item' => esc_html_x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post).', 'books' ),
				'filter_items_list'     => esc_html_x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”.', 'books' ),
				'items_list_navigation' => esc_html_x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”.', 'books' ),
				'items_list'            => esc_html_x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”.', 'books' ),
			);


		// Processing

			register_post_type( self::$post_type, array(
				'public'        => true,
				'supports'      => array( 'title', 'thumbnail', 'excerpt', 'revisions' ),
				'has_archive'   => true,
				'menu_position' => 0,
				'menu_icon'     => 'dashicons-book-alt',
				'labels'        => $labels,
				'show_in_rest'  => true, // Required for FSE.
			) );

	} // /init

}
