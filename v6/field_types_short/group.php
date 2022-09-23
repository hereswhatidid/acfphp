<?php
[
	'key'               => self::$slug . 'group',
	'label'             => __( 'Group', 'textdomain' ),
	'name'              => 'group',
	'type'              => 'group',
	'layout'            => 'block',
	'sub_fields'        => [
		[
			'key'               => self::$slug . 'grptext',
			'label'             => __( 'Group Sub Text', 'textdomain' ),
			'name'              => 'group_sub_text',
			'type'              => 'text',
		],
	],
],
