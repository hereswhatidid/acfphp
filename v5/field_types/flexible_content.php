<?php
[
	'key'               => 'FIELDKEY',
	'label'             => __( 'Flexible Content', 'textdomain' ),
	'name'              => 'flexible_content',
	'type'              => 'flexible_content',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'layouts'           => [
		'LAYOUTKEY' => [
			'key'        => 'LAYOUTKEY',
			'name'       => 'sample_layout',
			'label'      => __( 'Sample layout', 'textdomain' ),
			'display'    => 'block', // 'table', 'block', 'row'
			'sub_fields' => [
				[
					'key'               => 'FIELDKEY',
					'label'             => __( 'Flexible Text', 'textdomain' ),
					'name'              => 'flexible_text',
					'type'              => 'text',
				],
			],
			'min'        => '',
			'max'        => '',
		],
	],
	'button_label'      => __( 'Add Row', 'textdomain' ),
	'min'               => '',
	'max'               => '',
],
