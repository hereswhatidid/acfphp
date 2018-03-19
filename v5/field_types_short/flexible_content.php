<?php
[
	'key'          => self::$slug . 'FIELDKEY',
	'label'        => 'Flexible Content',
	'name'         => 'flexible_content',
	'type'         => 'flexible_content',
	'button_label' => 'Add Row',
	'layouts'      => [
		[
			'key'        => self::$slug . 'GROUPKEY',
			'name'       => 'content_group',
			'label'      => 'Content Group',
			'display'    => 'block',
			'sub_fields' => [
				[
					'key'   => self::$slug . 'GROUPFIELDKEY',
					'label' => 'Sample Text Field',
					'name'  => 'sample_text_field',
					'type'  => 'text',
				],
			],
			'min'        => '',
			'max'        => '',
		],
	],
]