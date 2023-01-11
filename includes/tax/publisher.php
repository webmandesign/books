<?php
/**
 * Custom taxonomy setup: Publishers.
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
	'publisher', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Publishers', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Publisher', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Publishers', 'books' ),
			'all_items'     => esc_html__( 'All Publishers', 'books' ),
			'view_item'     => esc_html__( 'View Publisher', 'books' ),
			'edit_item'     => esc_html__( 'Edit Publisher', 'books' ),
			'update_item'   => esc_html__( 'Update Publisher', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Publisher', 'books' ),
			'new_item_name' => esc_html__( 'New Publisher Name', 'books' ),
			'not_found'     => esc_html__( 'No Publishers Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Publishers', 'books' ),
			'menu_name'     => esc_html__( 'Publisher', 'books' ),
		),
	)
);
