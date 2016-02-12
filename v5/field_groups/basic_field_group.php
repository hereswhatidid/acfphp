<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_56bce76a56f87',
		'title' => 'Sample Field Group',
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