<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group( [
		'key' => 'group_5f8d8bd12396e',
		'title' => 'Conditional Group',
		'fields' => [
			[
				'key' => 'field_5f8d8bd7a1264',
				'label' => 'Select',
				'name' => 'select',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => [
					'width' => '',
					'class' => '',
					'id' => '',
				],
				'choices' => [
					'Option One' => 'Option One',
					'Option Two' => 'Option Two',
					'Option Three' => 'Option Three',
				],
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			],
			[
				'key' => 'field_5f8d8c18a1268',
				'label' => 'Secondary Option',
				'name' => 'secondary_option',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => [
					'width' => '',
					'class' => '',
					'id' => '',
				],
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			],
			[
				'key' => 'field_5f8d8be4a1265',
				'label' => 'Text Option One',
				'name' => 'text_option_one',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => [
					[
						[
							'field' => 'field_5f8d8bd7a1264',
							'operator' => '==',
							'value' => 'Option One',
						],
					],
				],
				'wrapper' => [
					'width' => '',
					'class' => '',
					'id' => '',
				],
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			],
			[
				'key' => 'field_5f8d8bf9a1266',
				'label' => 'Text Option Two',
				'name' => 'text_option_two',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => [
					[
						[
							'field' => 'field_5f8d8bd7a1264',
							'operator' => '==',
							'value' => 'Option Two',
						],
					],
					[
						[
							'field' => 'field_5f8d8bd7a1264',
							'operator' => '==',
							'value' => 'Option Three',
						],
					],
				],
				'wrapper' => [
					'width' => '',
					'class' => '',
					'id' => '',
				],
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			],
			[
				'key' => 'field_5f8d8c2aa1269',
				'label' => 'Text Option Multiple',
				'name' => 'text_option_multiple',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => [
					[
						[
							'field' => 'field_5f8d8bd7a1264',
							'operator' => '==',
							'value' => 'Option Two',
						],
						[
							'field' => 'field_5f8d8c18a1268',
							'operator' => '==',
							'value' => '1',
						],
					],
				],
				'wrapper' => [
					'width' => '',
					'class' => '',
					'id' => '',
				],
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			],
		],
		'location' => [
			[
				[
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				],
			],
			[
				[
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'rmgtemplates/blockbuilder.php',
				],
			],
			[
				[
					'param' => 'post_status',
					'operator' => '==',
					'value' => 'publish',
				],
			],
			[
				[
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'standard',
				],
			],
			[
				[
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:uncategorized',
				],
			],
			[
				[
					'param' => 'post_taxonomy',
					'operator' => '==',
					'value' => 'category:uncategorized',
				],
			],
			[
				[
					'param' => 'post',
					'operator' => '==',
					'value' => '1',
				],
			],
			[
				[
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'rmgtemplates/blockbuilder.php',
				],
			],
			[
				[
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				],
			],
			[
				[
					'param' => 'page_parent',
					'operator' => '==',
					'value' => '7',
				],
			],
			[
				[
					'param' => 'page',
					'operator' => '==',
					'value' => '7',
				],
			],
			[
				[
					'param' => 'current_user',
					'operator' => '==',
					'value' => 'logged_in',
				],
			],
			[
				[
					'param' => 'current_user_role',
					'operator' => '==',
					'value' => 'administrator',
				],
			],
			[
				[
					'param' => 'user_form',
					'operator' => '==',
					'value' => 'add',
				],
			],
			[
				[
					'param' => 'user_role',
					'operator' => '==',
					'value' => 'administrator',
				],
			],
			[
				[
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'category',
				],
			],
			[
				[
					'param' => 'attachment',
					'operator' => '==',
					'value' => 'image/jpeg',
				],
			],
			[
				[
					'param' => 'comment',
					'operator' => '==',
					'value' => 'post',
				],
			],
			[
				[
					'param' => 'widget',
					'operator' => '==',
					'value' => 'media_audio',
				],
			],
			[
				[
					'param' => 'nav_menu',
					'operator' => '==',
					'value' => 'all',
				],
			],
			[
				[
					'param' => 'nav_menu_item',
					'operator' => '==',
					'value' => 'all',
				],
			],
			[
				[
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/rmgcontentimage',
				],
			],
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => '',
				],
			],
		],
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	] );

endif;
