<?php

// -----------------------------------------
// semplice
// admin/atts/customize/blog.php
// -----------------------------------------

$blog = array(
	'tabs' => array(
		'basic' => array(
			'blog-options' => array(
				'title' => 'General',
				'break'	=> '3,2,2',
				'blog_bg_color' => array(
					'title'			=> 'BG Color',
					'data-css-attribute' => 'background-color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '#content-holder',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_divider_color' => array(
					'title'			=> 'Divider',
					'data-css-attribute' => 'background-color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-divider',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_navbar' => array(
					'title'				=> 'Select Navigation',
					'size'				=> 'span2',
					'data-input-type'   => 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'default'			=> 'default',
					'select-box-values' => array(
						'default'		=> 'Navigation 1',
						'default_new'		=> 'Navigation 2',
					),
				),
				'blog_width' => array(
					'title'				=> 'Width',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'default'			=> '8',
					'select-box-values' => array(
						'6'				=> '6 Columns',
						'7'				=> '7 Columns',
						'8'				=> '8 Columns',
						'9'				=> '9 Columns',
						'10'			=> '10 Columns',
						'11'			=> '11 Columns',
						'12'			=> '12 Columns',
					),
				),
				'blog_alignment' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Alignment',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'blog',
					'default' 	 				=> 'center',
					'switch-values' => array(
						'center'  	=> 'Center',
						'left'	 	=> 'Left',
					),
				),
				'blog_footer' => array(
					'title'				=> 'Select Footer',
					'size'				=> 'span2',
					'data-input-type'   => 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'default'			=> 'default',
					'select-box-values' => array(
						'default'		=> 'Navigation 1',
						'default_new'	=> 'Navigation 2',
					),
				),
				'display_content' => array(
					'title'			=> 'Display Content',
					'size'			=> 'span2',
					'data-input-type' => 'select-box',
					'switch-type' 	=> 'twoway',
					'class'			=> 'admin-listen-handler',
					'default'		=> 'navbar',
					'data-handler'	=> 'blog',
					'select-box-values' => array(
						'navbar'   => 'After Navigation',
						'top'  => 'Straight on Top',
					),
				),
			),
			'head-meta-options' => array(
				'title' => 'Post Title Meta',
				'break'	=> '2,3',
				'style-class' => 'ep-collapsed',
				'blog_head_meta_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'data-target'		=> '.post-heading p a, .post-heading p span',
					'select-box-values' => $atts->fonts,
				),
				'blog_head_meta_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'blog',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.post-heading p a, .post-heading p span',
					'data-has-unit'		=> true,
					'default'			=> 18,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'blog',
				),
				'blog_head_meta_alignment' => array(
					'title'				=> 'Alignment',
					'data-css-attribute'=> 'text-align',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'data-target'		=> '.post-heading p',
					'default'			=> 'left',
					'select-box-values' => array(
						'left'	=> 'Left',
						'center'=> 'Center',
						'right' => 'Right',
					),
				),
				'blog_head_meta_color' => array(
					'title'			=> 'Link',
					'data-css-attribute' => 'color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-heading p a, .post-heading p span',
					'default'		=> '#a0a0a0',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_head_meta_mouseover_color' => array(
					'title'			=> 'Hover',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
			),
			'title-options' => array(
				'title' => 'Post Title',
				'help'	=> 'To change the title font size, font family etc. please go to \'Customize -> Typography\'',
				'break'	=> '3',
				'style-class' => 'ep-collapsed',
				'blog_title_alignment' => array(
					'title'				=> 'Alignment',
					'data-css-attribute'=> 'text-align',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'data-target'		=> '.post-heading h2',
					'default'			=> 'left',
					'select-box-values' => array(
						'left'	=> 'Left',
						'center'=> 'Center',
						'right' => 'Right',
					),
				),
				'blog_title_color' => array(
					'title'			=> 'Link',
					'data-css-attribute' => 'color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-heading h2 a',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_title_mouseover_color' => array(
					'title'			=> 'Hover',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
			),
			'content-options' => array(
				'title' => 'Post Content',
				'break'	=> '3',
				'help'	=> 'To change the content font size, font family etc. please go to \'Customize -> Typography\' and change the \'Paragraph\' options.',
				'style-class' => 'ep-collapsed',
				'blog_text_color' => array(
					'title'			=> 'Color',
					'data-css-attribute' => 'color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-content',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_link_color' => array(
					'title'			=> 'Link',
					'data-css-attribute' => 'color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-content a',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'help'			=> 'If not defined will use the link color from \'Customize -> Advanced\'.',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_mouseover_color' => array(
					'title'			=> 'Hover',
					'data-css-attribute' => 'color',
					'size'			=> 'span1',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
			),
			'meta-options' => array(
				'title' => 'Post Meta',
				'break'	=> '2,2,2',
				'style-class' => 'ep-collapsed',
				'blog_meta_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'data-target'		=> '.post-meta p',
					'select-box-values' => $atts->fonts,
				),
				'blog_meta_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'blog',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.post-meta *',
					'data-has-unit'		=> true,
					'default'			=> 18,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'blog',
				),
				'blog_meta_alignment' => array(
					'title'				=> 'Alignment',
					'data-css-attribute'=> 'text-align',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'data-target'		=> '.post-meta *',
					'default'			=> 'left',
					'select-box-values' => array(
						'left'	=> 'Left',
						'center'=> 'Center',
						'right' => 'Right',
					),
				),
				'blog_meta_color' => array(
					'title'			=> 'Color',
					'data-css-attribute' => 'color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-meta',
					'default'		=> '#a0a0a0',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_meta_link_color' => array(
					'title'			=> 'Link',
					'data-css-attribute' => 'color',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'data-target'	=> '.post-meta a',
					'default'		=> '#a0a0a0',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
				'blog_meta_mouseover_color' => array(
					'title'			=> 'Hover',
					'size'			=> 'span2',
					'data-input-type'	=> 'color',
					'default'		=> '#000000',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-has-unit'	=> false,
					'data-picker'   => 'blog',
				),
			),
		),
		'advanced' => array(
			'featured-options' => array(
				'title' => 'Featured Image',
				'break'	=> '2',
				'blog_featured_width' => array(
					'title'				=> 'Width',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'default'			=> '12',
					'select-box-values' => array(
						'6'				=> '6 Columns',
						'7'				=> '7 Columns',
						'8'				=> '8 Columns',
						'9'				=> '9 Columns',
						'10'			=> '10 Columns',
						'11'			=> '11 Columns',
						'12'			=> '12 Columns',
						'fullscreen'	=> 'Fullscreen',
					),
				),
				'blog_featured_preview' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Preview Visibility',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'blog',
					'default' 	 				=> 'visible',
					'switch-values' => array(
						'visible'	=> 'Visible',
						'hidden'  	=> 'Hidden',
					),
				),
			),
			'sr-options' => array(
				'title' => 'Scroll Reveal',
				'help'  => 'You can customize the \'Scroll Reveal\' options in \'Customize -> Transitions\'',
				'break'	=> '1',
				'blog_scroll_reveal' => array(
					'data-input-type' 	=> 'switch',
					'switch-type'		=> 'twoway',
					'title'		 		=> 'Status',
					'size'				=> 'span4',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'blog',
					'default'			=> 'enabled',
					'switch-values' => array(
						'enabled'	=> 'Enabled',
						'disabled'  => 'Disabled',
					),
				),
			),
			'visibility-options' => array(
				'title' => 'Visibility Options',
				'break'	=> '2',
				'style-class' => 'ep-collapsed',
				'blog_visibility_category' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Meta Published',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'blog',
					'default' 	 				=> 'visible',
					'data-target'				=> '.category-meta',
					'switch-values' => array(
						'visible'	=> 'Visible',
						'hidden'  	=> 'Hidden',
					),
				),
				'blog_visibility_tags' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Meta Tags',
					'size'		 				=> 'span2',
					'class'						=> 'admin-listen-handler',
					'data-handler'				=> 'blog',
					'default' 	 				=> 'visible',
					'data-target'				=> '.tags-meta',
					'switch-values' => array(
						'visible'	=> 'Visible',
						'hidden'  	=> 'Hidden',
					),
				),
			),
			'share_options' => array(
				'title'  	 => 'Share Options',
				'break'		 => '1,2,1,1,2,2,2',
				'data-hide-mobile' => true,
				'style-class' => 'ep-collapsed',
				'type' => array(
					'data-input-type' 			=> 'switch',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Type',
					'size'		 				=> 'span4',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'icons,buttons',
					'data-visibility-prefix'	=> 'ov-share',
					'default' 	 				=> 'buttons',
					'class' 	 				=> 'editor-listen',
					'data-handler'				=> 'share',
					'switch-values' => array(
						'icons'  	=> 'Icons',
						'buttons'	=> 'Buttons',
					),
				),
				'button_bg_color' => array(
					'title'				=> 'Button Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'default'			=> 'transparent',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'share',
					'data-target'		=> '.text',
					'style-class'		=> 'ov-share-buttons',
					'data-css-attribute'=> 'background-color',
				),
				'button_border_color' => array(
					'title'				=> 'Border Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'default'			=> 'transparent',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'share',
					'data-target'		=> '.text',
					'style-class'		=> 'ov-share-buttons',
					'data-css-attribute'=> 'border-color',
				),
				'button_text_color' => array(
					'title'				=> 'Text Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'default'			=> 'transparent',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'share',
					'data-target'		=> '.text',
					'style-class'		=> 'ov-share-buttons',
					'data-css-attribute'=> 'color',
				),
				'icon_text_visibility' => array(
					'data-input-type' 	=> 'switch',
					'switch-type'		=> 'twoway',
					'title'		 		=> 'Text Visibility',
					'size'		 		=> 'span4',
					'style-class'		=> 'ov-share-icons',
					'default' 	 		=> 'visible',
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'data-target'		=> '.share-icons-wrapper p',
					'switch-values' => array(
						'visible'		=> 'Visible',
						'hidden'		=> 'Hidden',
					),
				),
				'icon_color' => array(
					'title'				=> 'Icon Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'default'			=> 'transparent',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'share',
					'data-target'		=> '.share-icon svg',
					'style-class'		=> 'ov-share-icons',
					'data-css-attribute'=> 'fill',
				),
				'icon_scale' => array(
					'title'				=> 'Icon Scale',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'data-css-attribute'=> 'height',
					'data-target'		=> '.share-icon svg',
					'data-style-option' => true,
					'data-has-unit'		=> true,
					'default'			=> 26,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-share-icons',
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'data-range-slider' => 'share',
				),
				'icon_padding' => array(
					'title'				=> 'Icon Padding',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'data-css-attribute'=> 'padding',
					'data-target'		=> '.share-icon a',
					'data-style-option' => true,
					'data-has-unit'		=> true,
					'default'			=> 10,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-share-icons',
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'data-range-slider' => 'share',
				),
				'icon_text_color' => array(
					'title'				=> 'Text Color',
					'size'				=> 'span2',
					'data-input-type'	=> 'color',
					'default'			=> 'transparent',
					'class'				=> 'color-picker admin-listen-handler',
					'data-handler' 		=> 'colorPicker',
					'data-picker'		=> 'share',
					'data-target'		=> '.share-icons-wrapper p',
					'style-class'		=> 'ov-share-icons',
					'data-css-attribute'=> 'color',
				),
				'icon_font_family' => array(
					'title'				=> 'Font Family',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-fonts',
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'data-target'		=> '.share-icons-wrapper p',
					'style-class'		=> 'ov-share-icons',
					'select-box-values' => $atts->fonts,
					'help'				=> 'No live preview available.',
				),
				'icon_font_size' => array(
					'title'				=> 'Font size',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'data-css-attribute'=> 'font-size',
					'data-target'		=> '.share-icons-wrapper p',
					'data-style-option' => true,
					'data-has-unit'		=> true,
					'default'			=> 14,
					'min'				=> 0,
					'max'				=> 9999,
					'style-class'		=> 'ov-share-icons',
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'data-range-slider' => 'share',
				),
				'icon_letter_spacing' => array(
					'title'				=> 'Letter Spacing',
					'size'				=> 'span2',
					'data-input-type' 	=> 'range-slider',
					'data-css-attribute'=> 'letter-spacing',
					'data-style-option' => true,
					'data-target'		=> '.share-icons-wrapper p',
					'data-has-unit'		=> true,
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-negative' 	=> true,
					'data-divider'		=> 10,
					'class' 	 		=> 'editor-listen',
					'data-handler'		=> 'share',
					'style-class'		=> 'ov-share-icons',
					'data-range-slider' => 'share',
				),
			),
		),
		'comments-options' => $atts->get('blogcomments', array('handler' => 'admin-listen-handler')),
	),
);