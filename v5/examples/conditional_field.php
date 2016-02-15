<?php
array (
	'key' => 'FIELDKEY',
	'label' => 'Basic Text Field',
	'name' => 'basic_text_field',
	'type' => 'text',
	'instructions' => '',
	'required' => 0,
	'conditional_logic' => array( // translates to: ( ( FIELDKEYTOCHECK == 'no' && FIELDKEYTOCHECK2 == 'maybe' ) || ( FIELDKEYTOCHECK3 == 'yes' ) )
		array(
			array(
				'field'    => 'FIELDKEYTOCHECK',
				'operator' => '==',
				'value'    => 'no',
			),
			array(
				'field'    => 'FIELDKEYTOCHECK2',
				'operator' => '==',
				'value'    => 'maybe',
			),
		),
		array(
			array(
				'field'    => 'FIELDKEYTOCHECK3',
				'operator' => '==',
				'value'    => 'yes',
			),
		),
	),
	'wrapper' => array (
		'width' => '',
		'class' => '',
		'id' => '',
	),
	'default_value' => '',
	'placeholder' => '',
	'prepend' => '',
	'append' => '',
	'maxlength' => '',
	'readonly' => 0,
	'disabled' => 0,
)