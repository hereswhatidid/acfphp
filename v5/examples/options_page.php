<?php

if ( function_exists( 'acf_add_local_field_group' ) ) {

	acf_add_local_field_group( [
		'key'        => 'group_slug_kljsdflkj243',
		'title'      => __( 'Solution Options', 'textdomain' ),
		'fields'     => [
			[
				'key'          => 'group_slug_kljsdflkj243' . 'title',
				'label'        => __( 'Solutions Title', 'textdomain' ),
				'name'         => 'title',
				'type'         => 'text',
				'instructions' => '',
			],
		],
		'location'   => [
			[
				[
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'group_slug_kljsdflkj243',
					'order_no' => 0,
					'group_no' => 0,
				],
			],
		],
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	] );
}

if ( function_exists( 'acf_add_options_sub_page' ) ) {

	acf_add_options_sub_page( [
		'menu_title'  => __( 'Post Options', 'textdomain' ),
		'menu_slug'   => 'group_slug_kljsdflkj243',
		'capability'  => 'manage_options',
		'post_id'     => 'post_options',
		'parent_slug' => 'edit.php?post_type=post'
	] );

}