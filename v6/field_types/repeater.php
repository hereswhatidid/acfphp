<?php
[
	'key'               => self::$slug . 'repeater',
	'label'             => __( 'Repeater', 'textdomain' ),
	'name'              => 'repeater',
	'type'              => 'repeater',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'collapsed'         => self::$slug . 'reptext',
	'min'               => 0,
	'max'               => 0,
	'layout'            => 'table', // 'table', 'block', 'row'
	'button_label'      => __( 'Add Row', 'textdomain' ),
	'sub_fields'        => [
		[
			'key'               => self::$slug . 'reptext',
			'label'             => __( 'Repeater Text', 'textdomain' ),
			'name'              => 'repeater_text',
			'type'              => 'text',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => '',
			],
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'parent_repeater'   => self::$slug . 'repeater',
		],
	],
	'rows_per_page'     => 20,
],