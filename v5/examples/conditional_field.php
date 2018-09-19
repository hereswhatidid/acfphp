<?php
[
	[
		'key'     => 'SELECTFIELD',
		'label'   => 'Select Field',
		'name'    => 'edit_field',
		'type'    => 'select',
		'choices' => [
			'First Name' => 'First Name',
			'Last Name'  => 'Last Name',
		],
	],
	[
		'key'               => 'FIRSTNAME',
		'label'             => 'First Name',
		'name'              => 'first_name',
		'type'              => 'text',
		'instructions'      => 'This field will be displayed if the value of the Select Field is First Name.',
		'conditional_logic' => [
			[
				[
					'field'    => 'SELECTFIELD',
					'operator' => '==', // '==', '!=', '==empty', '!=empty', '>', '<', '==contains'
					'value'    => 'First Name',
				],
			],
			[
				[
					'field'    => 'SELECTFIELD',
					'operator' => '==empty',
					'value'    => 'First Name',
				],
			],
		],
	],
	[
		'key'               => 'LASTNAME',
		'label'             => 'Last Name',
		'name'              => 'last_name',
		'type'              => 'text',
		'instructions'      => 'This field will be displayed if the value of the Select Field is Last Name.',
		'conditional_logic' => [
			[
				[
					'field'    => 'SELECTFIELD',
					'operator' => '==',
					'value'    => 'Last Name',
				],
			],
			[
				[
					'field'    => 'SELECTFIELD',
					'operator' => '==empty',
				],
			],
		],
	],
	[
		'key'   => 'NUMERICFIELD',
		'label' => 'Numeric Field',
		'name'  => 'numeric_field',
		'type'  => 'number',
	],
	[
		'key'               => 'field_5b4cd710fefe3',
		'label'             => 'Conditional Field One',
		'name'              => 'conditional_field_one',
		'type'              => 'text',
		'instructions'      => 'This field will be displayed if the value of the Numeric Field is greater than 10.',
		'conditional_logic' => [
			[
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '>',
					'value'    => '10',
				],
			],
		],
	],
	[
		'key'               => 'field_5b4cd754fefe4',
		'label'             => 'Conditional Field Two',
		'name'              => 'conditional_field_two',
		'type'              => 'text',
		'instructions'      => 'This field will be displayed if the value of the Numeric Field is less than 10 or has no value.',
		'conditional_logic' => [
			[
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '<',
					'value'    => '10',
				],
			],
			[
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '==empty',
					'value'    => '10',
				],
			],
		],
	],
	[
		'key'               => 'field_5b4cd854346f9',
		'label'             => 'Conditional Field Three',
		'name'              => 'conditional_field_three',
		'type'              => 'text',
		'instructions'      => 'This field will be displayed if the value of the Numeric Field has any value other than 9 and the value contains the number 9.',
		'conditional_logic' => [
			[
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '!=empty',
				],
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '==contains',
					'value'    => '9',
				],
				[
					'field'    => 'NUMERICFIELD',
					'operator' => '!=',
					'value'    => '9',
				],
			],
		],
	],
];