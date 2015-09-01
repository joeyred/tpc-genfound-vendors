<?php

if ( function_exists( "register_field_group" ) ) {
	/**
	 * Vendor Link and Button Section
	 */
	register_field_group( array (
			'id' 		=> 'acf_vendor-links',
			'title' 	=> 'Vendor Links',
			'fields' 	=> array (
				array (
					'key' 			=> 'field_55e52906dc53b',
					'label' 		=> 'Affiliate Link',
					'name' 			=> 'affiliate_link',
					'type' 			=> 'text',
					'instructions' 	=> 'The affiliate link if available, or the website URL if not.',
					'default_value' => '',
					'placeholder' 	=> '',
					'prepend' 		=> '',
					'append' 		=> '',
					'formatting' 	=> 'none',
					'maxlength' 	=> '',
				),
				array (
					'key' => 'field_55e529a7dc53c',
					'label' => 'Button1 Label',
					'name' => 'button1_label',
					'type' => 'text',
					'instructions' => 'Label for the first Call to Action button.',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55e529f6dc53d',
					'label' => 'Button2 Label',
					'name' => 'button2_label',
					'type' => 'text',
					'instructions' => 'Label for the second Call to Action button at the end of the page.',
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
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 1,
		) );
	/**
	 * Heading Section
	 */
	register_field_group( array (
			'id'     => 'acf_vendor-heading',
			'title'  => 'Vendor Heading',
			'fields' => array (
				array (
					'key' => 'field_55e52456892a7',
					'label' => 'Heading Logo',
					'name' => 'heading_logo',
					'type' => 'image',
					'instructions' => 'A logo or banner for the top of the page.',
					'save_format' => 'object',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array (
					'key' => 'field_55e524e5892a8',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => 'The main page heading.',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55e52539892a9',
					'label' => 'Sub Heading',
					'name' => 'sub_heading',
					'type' => 'wysiwyg',
					'instructions' => 'Sub headers or a short description. ',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'no',
				),
				array (
					'key' => 'field_55e52593892aa',
					'label' => 'Header Media',
					'name' => 'header_media',
					'type' => 'wysiwyg',
					'instructions' => 'Either an image, a video, or lightbox/modal video.',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'yes',
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
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 2,
		) );
	/**
	 * Logo Upload
	 */
	register_field_group( array (
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
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		) );

	/**
	 * Info Boxes Section
	 */
	register_field_group( array (
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
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 3,
		) );

	/**
	 * Meet the Staff Section
	 */
	register_field_group( array (
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
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 4,
		) );
}
