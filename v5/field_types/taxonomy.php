<?php
[
	'key'               => 'FIELDKEY',
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
	'add_term'          => 1, // Allow new terms to be created whilst editing
	'save_terms'        => 0, // Connect selected terms to the post
	'load_terms'        => 0, // Load value from posts terms
	'return_format'     => 'id', // 'object', 'id'
	'multiple'          => 0,
	'allow_null'        => 0,
],
