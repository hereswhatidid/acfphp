<?php
[
	'key'               => self::$slug . 'repeater',
	'label'             => __( 'Repeater', 'textdomain' ),
	'name'              => 'repeater',
	'type'              => 'repeater',
	'collapsed'         => self::$slug . 'reptext',
	'layout'            => 'table', // 'table', 'block', 'row'
	'button_label'      => __( 'Add Row', 'textdomain' ),
	'sub_fields'        => [
		[
			'key'               => self::$slug . 'reptext',
			'label'             => __( 'Repeater Text', 'textdomain' ),
			'name'              => 'repeater_text',
			'type'              => 'text',
			'parent_repeater'   => self::$slug . 'repeater',
		],
	],
	'rows_per_page'     => 20,
],
