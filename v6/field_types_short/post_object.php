<?php
[
	'key'               => self::$slug . 'postobject',
	'label'             => __( 'Post Object', 'textdomain' ),
	'name'              => 'post_object',
	'type'              => 'post_object',
	'post_type'         => [
		0 => 'page',
		1 => 'post',
	],
	'taxonomy'          => '',
	'return_format'     => 'id', // 'object', 'id'
],
