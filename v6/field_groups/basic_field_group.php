<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( [
		'key'                   => 'group_5f8d898250352',
		'title'                 => 'Full List',
		'fields'                => [
			[
				'key'               => self::$slug . 'text',
				'label'             => __( 'Text Field', 'textdomain' ),
				'name'              => 'text_field',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => [
					'width' => '',
					'class' => '',
					'id'    => '',
				],
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			],
		],
		'location'              => [
			[
				[
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				],
			],
		],
		'menu_order'            => 0,
		'position'              => 'normal', // 'after_title', 'normal', 'side'
		'style'                 => 'default', // 'default', 'seamless'
		'label_placement'       => 'top', // 'top', 'left'
		'instruction_placement' => 'label', // 'label', 'field'
		'hide_on_screen'        => '', // 'permalink', 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'format', 'page_attributes', 'featured_image', 'categories', 'tags', 'send-trackbacks'
		'active'                => FALSE,
		'description'           => '',
		'show_in_rest'          => FALSE,
	] );

endif;
