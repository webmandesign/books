<?php
/**
 * Custom taxonomy setup: Languages.
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
	'language', array(
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'labels'            => array(
			'name'          => esc_html_x( 'Languages', 'Taxonomy general name', 'books' ),
			'singular_name' => esc_html_x( 'Language', 'Taxonomy singular name', 'books' ),
			'search_items'  => esc_html__( 'Search Languages', 'books' ),
			'all_items'     => esc_html__( 'All Languages', 'books' ),
			'view_item'     => esc_html__( 'View Language', 'books' ),
			'edit_item'     => esc_html__( 'Edit Language', 'books' ),
			'update_item'   => esc_html__( 'Update Language', 'books' ),
			'add_new_item'  => esc_html__( 'Add New Language', 'books' ),
			'new_item_name' => esc_html__( 'New Language Name', 'books' ),
			'not_found'     => esc_html__( 'No Languages Found', 'books' ),
			'back_to_items' => esc_html__( 'Back to Languages', 'books' ),
			'menu_name'     => esc_html__( 'Language', 'books' ),
		),
	)
);
