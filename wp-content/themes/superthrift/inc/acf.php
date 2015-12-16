<?php

if(function_exists("register_field_group")) {

  // dropbox custom fields
	register_field_group(array (
		'id' => 'acf_dropbox_cpt',
		'title' => 'Dropbox',
		'fields' => array (
      array (
				'key' => 'field_5611dropboxname',
				'label' => 'Location name',
				'name' => 'dropbox_name',
				'type' => 'text',
        'required' => 0,
			),
			array (
				'key' => 'field_5611dropboxaddress',
				'label' => 'Address',
				'name' => 'dropbox_address',
				'type' => 'text',
        'required' => 0,
			),
			array (
				'key' => 'field_5611dropboxaddress2',
				'label' => 'Additional address details',
				'name' => 'dropbox_address2',
				'type' => 'text',
        'required' => 0,
			),
			array (
				'key' => 'field_5611dropboxcity',
				'label' => 'City',
				'name' => 'dropbox_city',
				'type' => 'text',
        'required' => 0,
			),
			array (
				'key' => 'field_5611dropboxstate',
				'label' => 'State',
				'name' => 'dropbox_state',
        'required' => 0,
        'type' => 'select',
				'choices' => get_states_list(),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5611dropboxzipcode',
				'label' => 'Zip code',
				'name' => 'dropbox_zipcode',
				'type' => 'text',
        'required' => 0,
			),
			array (
				'key' => 'field_5611dropboxmarker',
				'label' => 'Marker location',
				'name' => 'dropbox_marker',
				'type' => 'google_map',
				'center_lat' => 0,
				'center_lng' => 0,
				'zoom' => 2,
        'required' => 1,
				'height' => '500',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'dropbox',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
  
  // Dropbox custom fields
	register_field_group(array (
		'id' => 'acf_store_cpt',
		'title' => 'Store',
		'fields' => array (
			array (
				'key' => 'field_5489storename',
				'label' => 'Location name',
				'name' => 'store_name',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storeaddress',
				'label' => 'Address',
				'name' => 'store_address',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storecity',
				'label' => 'City',
				'name' => 'store_city',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storestate',
				'label' => 'State',
				'name' => 'store_state',
        'required' => 1,
        'type' => 'select',
				'choices' => get_states_list(),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5489storezipcode',
				'label' => 'Zip code',
				'name' => 'store_zipcode',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storephone',
				'label' => 'Phone Number',
				'name' => 'store_phone',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storeemail',
				'label' => 'Email',
				'name' => 'store_email',
				'type' => 'email',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storemarker',
				'label' => 'Marker location',
				'name' => 'store_marker',
				'type' => 'google_map',
				'center_lat' => 0,
				'center_lng' => 0,
				'zoom' => 2,
				'height' => '500',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storesunday',
				'label' => 'Sunday opening hours',
				'name' => 'store_sunday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storemonday',
				'label' => 'Monday',
				'name' => 'store_monday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storetuesday',
				'label' => 'Tuesday',
				'name' => 'store_tuesday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storewednesday',
				'label' => 'Wednesday',
				'name' => 'store_wednesday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storethursday',
				'label' => 'Thursday',
				'name' => 'store_thursday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storefriday',
				'label' => 'Friday',
				'name' => 'store_friday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489storesaturday',
				'label' => 'Saturday',
				'name' => 'store_saturday',
				'type' => 'text',
        'required' => 1,
			),
			array (
				'key' => 'field_5489donatelink',
				'label' => 'Donate Link',
				'name' => 'donate_link',
				'type' => 'text',
		'required' => 0,
			),
      /*array (
				'key' => 'field_5489storenote',
				'label' => 'Note',
				'name' => 'store_info',
				'type' => 'text',
        'required' => 0,
			),*/
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'store',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
  
  // Testimonials Custom Fields
	register_field_group(array (
		'id' => 'acf_testimonials',
		'title' => 'Testimonials',
		'fields' => array (
			array (
				'key' => 'field_55964d079d61c',
				'label' => 'Name',
				'name' => 'testimonial_name',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55964d079d61e',
				'label' => 'Info',
				'name' => 'testimonial_sub',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
  
  
}
