<?php
[
	'key'               => self::$slug . 'flexiblecontent',
	'label'             => __( 'Flexible Content', 'textdomain' ),
	'name'              => 'flexible_content',
	'type'              => 'flexible_content',
	'layouts'           => [
		self::$slug . 'samplelayout' => [
			'key'        => self::$slug . 'samplelayout',
			'name'       => 'sample_layout',
			'label'      => __( 'Sample layout', 'textdomain' ),
			'display'    => 'block',
			'sub_fields' => [
				[
					'key'               => self::$slug . 'flextext',
					'label'             => __( 'Flexible Text', 'textdomain' ),
					'name'              => 'flexible_text',
					'type'              => 'text',
				],
			],
		],
	],
	'button_label'      => __( 'Add Row', 'textdomain' ),
],
