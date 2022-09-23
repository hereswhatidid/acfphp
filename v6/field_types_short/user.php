<?php
[
	'key'               => self::$slug . 'user',
	'label'             => __( 'User', 'textdomain' ),
	'name'              => 'user',
	'type'              => 'user',
	'role'              => [
		0 => 'editor',
		1 => 'subscriber',
	],
	'return_format'     => 'id', // 'array', 'object', 'id'
],
