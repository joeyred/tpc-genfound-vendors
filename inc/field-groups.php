<?php

function tpc_vendors_register_field_groups() {

	if(function_exists("register_field_group"))
	{
		// Logo Upload
		register_field_group(array (
			'id' => 'acf_logo-upload',
			'title' => 'Logo Upload',
			'fields' => array (
				array (
					'key' => 'field_55d2508c3dace',
					'label' => 'Logo Upload',
					'name' => 'logo_upload',
					'type' => 'image',
					'save_format' => 'object',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'vendor',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'side',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));

		// Call to Action Button
		register_field_group(array (
			'id' => 'acf_call-to-action-button',
			'title' => 'Call to Action Button',
			'fields' => array (
				array (
					'key' => 'field_55d251e158555',
					'label' => 'Button Text',
					'name' => 'button_text',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d2520158556',
					'label' => 'Button Link',
					'name' => 'button_link',
					'type' => 'text',
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
						'value' => 'vendor',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 1,
		));

		// Header Row
		register_field_group(array (
			'id' => 'acf_header-row',
			'title' => 'Header Row',
			'fields' => array (
				array (
					'key' => 'field_55d24491eba76',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d244a2eba77',
					'label' => 'Subheading',
					'name' => 'subheading',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'no',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'vendor',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 2,
		));

		// Info Boxes
		register_field_group(array (
			'id' => 'acf_info-box-row',
			'title' => 'Info Box Row',
			'fields' => array (
				array (
					'key' => 'field_55d240cb42a78',
					'label' => 'Info Box 1',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d2407842a77',
					'label' => 'Icon',
					'name' => 'infobox1_icon',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d2410042a79',
					'label' => 'Title',
					'name' => 'infobox1_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d2425142a7a',
					'label' => 'Content',
					'name' => 'infobox1_content',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
				array (
					'key' => 'field_55d2427c42a7b',
					'label' => 'Info Box 2',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d2428942a7c',
					'label' => 'Icon',
					'name' => 'infobox2_icon',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d242ad42a7d',
					'label' => 'Title',
					'name' => 'infobox2_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d242c642a7e',
					'label' => 'Content',
					'name' => 'infobox2_content',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
				array (
					'key' => 'field_55d242f842a7f',
					'label' => 'Info Box 3',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d2433042a81',
					'label' => 'Icon',
					'name' => 'infobox3_icon',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d243a542a86',
					'label' => 'Title',
					'name' => 'infobox3_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d2437142a84',
					'label' => 'Content',
					'name' => 'infobox3_content',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
				array (
					'key' => 'field_55d2435c42a82',
					'label' => 'Info Box 4',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d2432e42a80',
					'label' => 'Icon',
					'name' => 'infobox4_icon',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d243a442a85',
					'label' => 'Title',
					'name' => 'infobox4_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d2437042a83',
					'label' => 'Content',
					'name' => 'infobox4_content',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'vendor',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 3,
		));

		// Meet the Staff
		register_field_group(array (
			'id' => 'acf_staff-row',
			'title' => 'Staff Row',
			'fields' => array (
				array (
					'key' => 'field_55d247903e37f',
					'label' => 'Staff 1',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d2455f3e37b',
					'label' => 'Avatar',
					'name' => 'staff_avatar1',
					'type' => 'image',
					'save_format' => 'object',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_55d247313e37c',
					'label' => 'Name',
					'name' => 'staff_name1',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d247573e37d',
					'label' => 'Title',
					'name' => 'staff_title1',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d247713e37e',
					'label' => 'Description',
					'name' => 'staff_description1',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
				array (
					'key' => 'field_55d247b93e380',
					'label' => 'Staff 2',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_55d24f573e383',
					'label' => 'Avatar',
					'name' => 'staff_avatar2',
					'type' => 'image',
					'save_format' => 'object',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_55d24f873e384',
					'label' => 'Name',
					'name' => 'staff_name2',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d24f9d3e385',
					'label' => 'Title',
					'name' => 'staff_title2',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d24faa3e386',
					'label' => 'Description',
					'name' => 'staff_description2',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'no',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'vendor',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 5,
		));
	}
}

add_action( 'init', 'tpc_vendors_register_field_groups' );
?>