<?php
[
	'key'               => self::$slug . 'taxonomy',
	'label'             => __( 'Taxonomy', 'textdomain' ),
	'name'              => 'taxonomy',
	'type'              => 'taxonomy',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => [
		'width' => '',
		'class' => '',
		'id'    => '',
	],
	'taxonomy'          => 'category',
	'field_type'        => 'checkbox', // 'checkbox', 'multi_select', 'radio', 'select'
	'add_term'          => 1,
	'save_terms'        => 0,
	'load_terms'        => 0,
	'return_format'     => 'id', // 'object', 'id'
	'multiple'          => 0,
	'allow_null'        => 0,
],
