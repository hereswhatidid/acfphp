<?php
[
	'key'               => self::$slug . 'relationship',
	'label'             => __( 'Relationship', 'textdomain' ),
	'name'              => 'relationship',
	'type'              => 'relationship',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'post_type'         => '',
	'taxonomy'          => '',
	'filters'           => [
		0 => 'search',
		1 => 'post_type',
		2 => 'taxonomy',
	],
	'elements'          => [
		0 => 'featured_image',
	],
	'min'               => '',
	'max'               => '',
	'return_format'     => 'object', // 'object', 'id'
],
