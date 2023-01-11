<?php
/**
 * Custom taxonomy setup: Formats.
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
	'format', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Formats', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Format', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Formats', 'books' ),
			'all_items'     => esc_html__( 'All Formats', 'books' ),
			'view_item'     => esc_html__( 'View Format', 'books' ),
			'edit_item'     => esc_html__( 'Edit Format', 'books' ),
			'update_item'   => esc_html__( 'Update Format', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Format', 'books' ),
			'new_item_name' => esc_html__( 'New Format Name', 'books' ),
			'not_found'     => esc_html__( 'No Formats Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Formats', 'books' ),
			'menu_name'     => esc_html__( 'Format', 'books' ),
		),
	)
);
