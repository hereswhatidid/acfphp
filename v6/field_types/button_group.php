<?php
[
	'key'               => self::$slug . 'buttongroup',
	'label'             => __( 'Button Group', 'textdomain' ),
	'name'              => 'button_group',
	'type'              => 'button_group',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'choices'           => [
		'Option One'   => 'Option One',
		'Option Two'   => 'Option Two',
		'Option Three' => 'Option Three',
	],
	'allow_null'        => 0,
	'default_value'     => '',
	'layout'            => 'vertical', // 'vertical', 'horizontal'
	'return_format'     => 'value', // 'value', 'label', 'array'
],
