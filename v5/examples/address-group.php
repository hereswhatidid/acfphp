<?php
$slug = 'hwid_';

[
	'key'               => $slug . 'footeraddress',
	'label'             => __( 'Address', 'textdomain' ),
	'name'              => 'address',
	'type'              => 'group',
	'layout'            => 'block',
	'sub_fields'        => [
		[
			'key'   => $slug . 'addtitle',
			'label' => __( 'Title', 'textdomain' ),
			'name'  => 'title',
			'type'  => 'text',
			'placeholder' => 'Company, Inc.',
		],
		[
			'key'   => $slug . 'addadd1',
			'label' => __( 'Address', 'textdomain' ),
			'name'  => 'address',
			'type'  => 'text',
			'placeholder' => '555 Main St.',
		],
		[
			'key'   => $slug . 'addcity',
			'label' => __( 'City', 'textdomain' ),
			'name'  => 'city',
			'type'  => 'text',
			'placeholder' => 'Minneapolis',
			'wrapper'           => [
				'width' => '50',
			],
		],
		[
			'key'   => $slug . 'addstate',
			'label' => __( 'State', 'textdomain' ),
			'name'  => 'state',
			'type'  => 'text',
			'placeholder' => 'MN',
			'wrapper'           => [
				'width' => '20',
			],
		],
		[
			'key'   => $slug . 'addzip',
			'label' => __( 'Zip', 'textdomain' ),
			'name'  => 'zip',
			'type'  => 'text',
			'placeholder' => '55112',
			'wrapper'           => [
				'width' => '30',
			],
		],
		[
			'key'   => $slug . 'addphone',
			'label' => __( 'Phone Number', 'textdomain' ),
			'name'  => 'phone',
			'type'  => 'text',
			'placeholder' => '555-555-5555',
		],
	],
],

