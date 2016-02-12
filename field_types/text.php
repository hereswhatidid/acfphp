<?php
array (
	'key' => 'field_56bde973ea673',
	'label' => 'Basic Text Field',
	'name' => 'basic_text_field',
	'type' => 'text',
	'instructions' => '',
	'required' => 0,
	'conditional_logic' => 0,
	'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	'default_value' => '',
	'placeholder' => '',
	'prepend' => '',
	'append' => '',
	'maxlength' => '',
	'readonly' => 0,
	'disabled' => 0,
);


if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_56bce76a56f87',
		'title' => 'Sample Field Group',
		'fields' => array (

,
,
,
,
,
,
,
,
,
,
,
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
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 0,
		'description' => '',
	));

endif;