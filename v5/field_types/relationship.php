<?php
[
	'key'               => 'FIELDKEY',
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
	'post_type'         => '', // [ 0 => 'page', 1 => 'post' ]
	'taxonomy'          => '', // [ 0 => 'category', 1 => 'tag' ]
	'filters'           => [
		0 => 'search',
		1 => 'post_type',
		2 => 'taxonomy',
	],
	'elements'          => '',
	'min'               => '',
	'max'               => '',
	'return_format'     => 'object', // 'object', 'id'
],
