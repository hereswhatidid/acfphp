<?php
[
	'key'               => self::$slug . 'clone',
	'label'             => __( 'Clone', 'textdomain' ),
	'name'              => 'clone',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'clone'             => [
		0 => self::$slug . 'fieldtoclone',
	],
	'display'           => 'seamless', // 'seamless', 'group'
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
],
