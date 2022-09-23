<?php
[
	'key'          => self::$slug . 'FIELDKEY',
	'label'        => __( 'Flexible Content', 'textdomain' ),
	'name'         => 'flexible_content',
	'type'         => 'flexible_content',
	'button_label' => __( 'Add Row', 'textdomain' ),
	'layouts'      => [
		[
			'key'        => self::$slug . 'GROUPKEY',
			'name'       => 'content_group',
			'label'      => __( 'Content Group', 'textdomain' ),
			'display'    => 'block',
			'sub_fields' => [
				[
					'key'   => self::$slug . 'GROUPFIELDKEY',
					'label' => __( 'Sample Text Field', 'textdomain' ),
					'name'  => 'sample_text_field',
					'type'  => 'text',
				],
			],
			'min'        => '',
			'max'        => '',
		],
	],
],
