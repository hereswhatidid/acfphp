<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_56bce76a56f87',
		'title' => __( 'Sample Field Group', 'textdomain' ),
		'fields' => array (
//			Field declarations go here
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),

			),
			array(
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '140', // post ID of the page
				),
			),
			array(
				array (
					'param' => 'page_parent',
					'operator' => '==',
					'value' => '140', // post ID of the page
				),
			),
			array(
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'templates/landing-page.php', // location of the template file relative to the theme
				),
			),
			array(
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page', // 'front_page', 'posts_page', 'top_level' - (no parent), 'parent' - (has children), 'child' - (has parent)
				),
			),
			array(
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options', // options page slug with 'acf-' prepended to it
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal', // 'acf_after_title', 'normal' or 'side'
		'style' => 'default', // 'default', 'seamless'
		'label_placement' => 'top', // top, left
		'instruction_placement' => 'label', // 'label' - below labels, 'field' - below fields
		'hide_on_screen' => '',
		'active' => 1, // 0 - disabled, 1 - enabled
		'description' => '', // text description appears directly below group title
	));

endif;