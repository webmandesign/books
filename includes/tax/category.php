<?php
/**
 * Custom taxonomy setup: Categories.
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
	'category', array(
		'public'            => true,
		'hierarchical'      => true,
		'show_admin_column' => true,
		'labels'            => array(
			'name'              => esc_html_x( 'Categories', 'Taxonomy general name', 'books' ),
			'singular_name'     => esc_html_x( 'Category', 'Taxonomy singular name', 'books' ),
			'search_items'      => esc_html__( 'Search Categories', 'books' ),
			'all_items'         => esc_html__( 'All Categories', 'books' ),
			'view_item'         => esc_html__( 'View Category', 'books' ),
			'edit_item'         => esc_html__( 'Edit Category', 'books' ),
			'update_item'       => esc_html__( 'Update Category', 'books' ),
			'add_new_item'      => esc_html__( 'Add New Category', 'books' ),
			'new_item_name'     => esc_html__( 'New Category Name', 'books' ),
			'not_found'         => esc_html__( 'No Categories Found', 'books' ),
			'back_to_items'     => esc_html__( 'Back to Categories', 'books' ),
			'menu_name'         => esc_html__( 'Category', 'books' ),
			'parent_item'       => esc_html__( 'Parent Category', 'books' ),
			'parent_item_colon' => esc_html__( 'Parent Category:', 'books' ),
		),
	)
);
