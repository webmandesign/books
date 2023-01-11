<?php
/**
 * Custom taxonomy setup: Tags.
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
	'tag', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Tags', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Tag', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Tags', 'books' ),
			'all_items'     => esc_html__( 'All Tags', 'books' ),
			'view_item'     => esc_html__( 'View Tag', 'books' ),
			'edit_item'     => esc_html__( 'Edit Tag', 'books' ),
			'update_item'   => esc_html__( 'Update Tag', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Tag', 'books' ),
			'new_item_name' => esc_html__( 'New Tag Name', 'books' ),
			'not_found'     => esc_html__( 'No Tags Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Tags', 'books' ),
			'menu_name'     => esc_html__( 'Tag', 'books' ),
		),
	)
);
