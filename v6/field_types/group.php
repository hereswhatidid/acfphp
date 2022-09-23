<?php
[
	'key'               => self::$slug . 'group',
	'label'             => __( 'Group', 'textdomain' ),
	'name'              => 'group',
	'type'              => 'group',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'layout'            => 'block', // 'block', 'table', 'row'
	'sub_fields'        => [
		[
			'key'               => self::$slug . 'grptext',
			'label'             => __( 'Group Sub Text', 'textdomain' ),
			'name'              => 'group_sub_text',
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
		],
	],
],
