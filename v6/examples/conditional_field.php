<?php
[
	'key'               => self::$slug . 'text',
	'label'             => __( 'Text Field', 'textdomain' ),
	'name'              => 'text_field',
	'type'              => 'text',
	'conditional_logic' => [
		[
			[
				'field'    => self::$slug . 'select',
				'operator' => '==', // '==', '!=', '==empty', '!=empty', '>', '<', '==contains'
				'value'    => 'optionone',
			],
		],
	],
],


