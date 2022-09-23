<?php
[
	'key'               => 'FIELDKEY',
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
	'collapsed'         => 'SUBFIELDKEY', // key of field to show when row is minimized
	'min'               => 0,
	'max'               => 0,
	'layout'            => 'table', // 'table', 'block', 'row'
	'button_label'      => __( 'Add Row', 'textdomain' ),
	'sub_fields'        => [
		[
			'key'               => 'SUBFIELDKEY',
			'label'             => __( 'Repeater Text', 'textdomain' ),
			'name'              => 'repeater_text',
			'type'              => 'text',
		],
	],
],
