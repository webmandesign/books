<?php
/**
 * Custom taxonomy setup: Authors.
 *
 * @package    Books
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Books;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

Taxonomy::add_taxonomy(
	'author', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Authors', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Author', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Authors', 'books' ),
			'all_items'     => esc_html__( 'All Authors', 'books' ),
			'view_item'     => esc_html__( 'View Author', 'books' ),
			'edit_item'     => esc_html__( 'Edit Author', 'books' ),
			'update_item'   => esc_html__( 'Update Author', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Author', 'books' ),
			'new_item_name' => esc_html__( 'New Author Name', 'books' ),
			'not_found'     => esc_html__( 'No Authors Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Authors', 'books' ),
			'menu_name'     => esc_html__( 'Author', 'books' ),
		),
	)
);
