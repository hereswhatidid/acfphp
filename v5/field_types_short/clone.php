<?php
[
	'key'     => self::$slug . 'FIELDKEY',
	'label'   => __( 'Clone Field', 'textdomain' ),
	'name'    => 'clone',
	'type'    => 'clone',
	'clone'   => [
		0 => 'CLONEDFIELD_A', // key value of the fields to be cloned
		1 => 'CLONEDFIELD_B',
	],
	'display' => 'seamless',
	'layout'  => 'block',
],