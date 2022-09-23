<?php
[
	'key'               => 'FIELDKEY',
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
	'clone'             => [ // key value of the fields to be cloned
		0 => 'FIELDKEY',
	],
	'display'           => 'seamless', // 'group', 'seamless'
	'layout'            => 'block', // 'table', 'block', 'row'
	'prefix_label'      => 0, // Labels will be displayed as %field_label%
	'prefix_name'       => 0, // Values will be saved as %field_name%
],
