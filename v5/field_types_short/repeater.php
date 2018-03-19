<?php
[
	'key'          => self::$slug . 'FIELDKEY',
	'label'        => __( 'Repeater', 'textdomain' ),
	'name'         => 'repeater',
	'type'         => 'repeater',
	'collapsed'    => self::$slug . 'SUBFIELDKEY',
	'layout'       => 'row',
	'button_label' => 'Add Row',
	'sub_fields'   => [
		[
			'key'   => self::$slug . 'SUBFIELDKEY',
			'label' => __( 'Basic Text Box', 'textdomain' ),
			'name'  => 'basic_text_box',
			'type'  => 'text',
		],
	],
]