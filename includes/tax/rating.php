<?php
/**
 * Custom taxonomy setup: Rating.
 *
 * @package    Books
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.1.0
 */

namespace WebManDesign\Books;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

Taxonomy::add_taxonomy(
	'tag', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Rating', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Rating', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Rating', 'books' ),
			'all_items'     => esc_html__( 'All Rating', 'books' ),
			'view_item'     => esc_html__( 'View Rating', 'books' ),
			'edit_item'     => esc_html__( 'Edit Rating', 'books' ),
			'update_item'   => esc_html__( 'Update Rating', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Rating', 'books' ),
			'new_item_name' => esc_html__( 'New Rating Name', 'books' ),
			'not_found'     => esc_html__( 'No Rating Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Rating', 'books' ),
			'menu_name'     => esc_html__( 'Rating', 'books' ),
		),
	)
);
