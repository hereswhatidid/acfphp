<?php
[
	'key'               => self::$slug . 'FIELDKEY',
	'label'             => __( 'Group', 'textdomain' ),
	'name'              => 'group',
	'type'              => 'group',
	'layout'            => 'block',
	'sub_fields'        => [
		[
			'key'               => 'SUBFIELDA',
			'label'             => __( 'Basic Text Field', 'textdomain' ),
			'name'              => 'text',
			'type'              => 'text',
		],
		[
			'key'               => 'SUBFIELDB',
			'label'             => __( 'Basic Text Area', 'textdomain' ),
			'name'              => 'textarea',
			'type'              => 'textarea',
		],
	],
],