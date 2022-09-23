<?php
[
	'key'               => self::$slug . 'postobject',
	'label'             => __( 'Post Object', 'textdomain' ),
	'name'              => 'post_object',
	'type'              => 'post_object',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'post_type'         => [
		0 => 'page',
		1 => 'post',
	],
	'taxonomy'          => '',
	'allow_null'        => 0,
	'multiple'          => 0,
	'return_format'     => 'object', // 'object', 'id'
	'ui'                => 1,
],
