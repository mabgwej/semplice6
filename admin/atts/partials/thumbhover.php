<?php

// -----------------------------------------
// semplice
// admin/atts/partials/thumb_hover.php
// -----------------------------------------

// thumb hover
if($args['option'] == 'scale') {
	$options = array(
		'break' 	  => '1,2',
		'class'		  => 'custom-hover',
		'title'		  => 'Scale Thumbnail',
		'style-class' => 'ep-collapsed',
		'hover_scale' => array(
			'title'				=> 'Scale Status',
			'data-input-type' 	=> 'switch',
			'switch-type'		=> 'twoway',
			'size'				=> 'span4',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-ps-type' 		=> 'thumbnail',
			'data-handler'		=> 'thumbHover',
			'default'			=> 'noscale',
			'switch-values' => array(
				'noscale'	=> 'Disabled',
				'scale'		=> 'Enabled'
			),
		),
		'hover_scale_amount' => array(
			'title'					=> 'Scale (in %)',
			'help'					=> 'Define the amount the thumbnail should get scaled on mouseover. (in %)',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'min'					=> 0,
			'default'				=> 15,
			'max'					=> 70,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-target'			=> '.thumb-hover',
			'data-range-slider'		=> 'thumbHover',
		),
		'hover_scale_duration' => array(
			'title'					=> 'Duration (ms)',
			'help'					=> 'Duration of your scale transition in milliseconds.',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'min'					=> 0,
			'default'				=> 300,
			'max'					=> 5000,
			'data-divider'			=> 1000,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-target'			=> '.thumb-hover',
			'data-range-slider'		=> 'thumbHover',
		),

	);
} else if($args['option'] == 'shadow') {
	// box shadow
	$options = array(
		'title' => 'Drop Shadow',
		'break'	=> '4,3',
		'class' => 'ep-styles-box-shadow',
		'style-class' => 'ep-collapsed',
		'box-shadow-color' => array(
			'title'			=> 'Color',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'color',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-ps-type'  => 'thumbnail',
			'responsive'	=> true,
			'data-picker'	=> 'thumbHover',
		),
		'box-shadow-h-length' => array(
			'title'			=> 'H Length',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit'	=> true,
			'class'			=> 'ps-setting admin-listen-handler box-shadow-hover',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 	=> 'thumbnail',
			'data-target'	=> '.thumb-hover',
			'data-range-slider'	=> 'thumbHover',
		),
		'box-shadow-v-length' => array(
			'title'			=> 'V Length',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit'	=> true,
			'class'			=> 'ps-setting admin-listen-handler box-shadow-hover',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 	=> 'thumbnail',
			'data-target'	=> '.thumb-hover',
			'data-range-slider'	=> 'thumbHover',
		),
		'box-shadow-blur-radius' => array(
			'title'			=> 'Blur',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit'	=> true,
			'class'			=> 'ps-setting admin-listen-handler box-shadow-hover',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 	=> 'thumbnail',
			'data-target'	=> '.thumb-hover',
			'data-range-slider'	=> 'thumbHover',
		),
		'box-shadow-spread-radius' => array(
			'title'			=> 'Spread',
			'size'			=> 'span1',
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-has-unit'	=> true,
			'class'			=> 'ps-setting admin-listen-handler box-shadow-hover',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 	=> 'thumbnail',
			'data-target'	=> '.thumb-hover',
			'data-range-slider'	=> 'thumbHover',
		),
		'box-shadow-opacity' => array(
			'title'			=> 'Opacity',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'min'			=> 0,
			'max'			=> 100,
			'default'		=> 100,
			'class'			=> 'ps-setting admin-listen-handler box-shadow-hover',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 	=> 'thumbnail',
			'data-target'	=> '.thumb-hover',
			'data-range-slider'	=> 'thumbHover',
		),
		'hover_box_shadow_duration' => array(
			'title'					=> 'Duration (ms)',
			'help'					=> 'Duration of your shadow transition in milliseconds.',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'min'					=> 0,
			'default'				=> 300,
			'max'					=> 5000,
			'data-divider'			=> 1000,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-target'			=> '.thumb-hover',
			'data-range-slider'		=> 'thumbHover',
		),
	);
} else if($args['option'] == 'background-type') {
	$options = array(
		'title' => 'Background Type',
		'break' => '1',
		'style-class' => 'custom-hover no-spacer bg-type-switch no-pt',
		'hide-title' => true,
		'hover_bg_type' => array(
			'data-input-type' 			=> 'switch',
			'switch-type'				=> 'twoway',
			'title'		 				=> 'Background Type',
			'hide-title'				=> true,
			'size'		 				=> 'span4',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'img,vid',
			'data-visibility-prefix'	=> 'ov-bg-type-thumbhover',
			'default' 	 				=> 'img',
			'class'						=> 'ps-setting admin-listen-handler',
			'data-handler'				=> 'thumbHover',
			'data-ps-type' 				=> 'thumbnail',
			'switch-values' => array(
				'img'  	=> 'Image',
				'vid'	=> 'Video',
			),
		),
	);
} else if($args['option'] == 'background-color') {
	$options = array(
		'break' 	  => '2',
		'style-class' => 'custom-hover no-spacer',
		'title'		  => 'Background Options',
		'hover_bg_color' => array(
			'title'				=> 'Color',
			'size'				=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'		=> '.thumb-hover',
			'default'			=> '#000000',
			'class'				=> 'color-picker admin-listen-handler',
			'data-ps-type' 		=> 'thumbnail',
			'data-handler'  	=> 'colorPicker',
			'data-picker'		=> 'thumbHover',
			'data-css-attribute'=> 'background-color',
		),
		'hover_bg_color_opacity' => array(
			'title'					=> 'Color Opacity',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'min'					=> 0,
			'default'				=> 50,
			'max'					=> 100,
			'data-divider'			=> 100,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-target'			=> '.thumb-hover',
			'data-range-slider'		=> 'thumbHover',
		),
	);
} else if($args['option'] == 'background-image') {
	$options = array(
		'break' 	  => '2,2',
		'style-class' => 'custom-hover  bg-img-upload ov-bg-type-thumbhover-img',
		'title'		  => 'Background',
		'hide-title'   => true,
		'has-media'    => 'thumbHover,hover_bg_image',
		'hover_bg_image' => array(
			'title'			=> 'Image',
			'size'			=> 'span2',
			'hide-title'	=> true,
			'data-input-type'	=> 'admin-image-upload',
			'data-target'	=> '.thumb-hover',
			'default'		=> '',
			'data-upload'	=> 'hoverBgImage',
			'style-class'	=> 'ov-bg-type-thumbhover-img ce-dropzone hide-unsplash general-dropzone',
		),
		'hover_bg_size' => array(
			'title'				=> 'Options',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'stack'				=> 'vertical-start',
			'data-input-type'   => 'select-box',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'data-target'		=> '.thumb-hover',
			'default'			=> 'auto',
			'data-css-attribute'=> 'background-size',
			'style-class'	=> 'ov-bg-type-thumbhover-img',
			'select-box-values' => array(
				'auto'		=> 'No Scale',
				'cover' 	=> 'Cover (full width)',
			),
		),
		'hover_bg_position' => array(
			'title'				=> 'Position',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'stack'				=> 'vertical',
			'data-input-type'    => 'select-box',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'data-target'		=> '.thumb-hover',
			'default'			=> '0% 0%',
			'data-css-attribute'=> 'background-position',
			'style-class'	=> 'ov-bg-type-thumbhover-img',
			'select-box-values' => array(
				'0% 0%' 	=> 'Top Left',
				'50% 0%' 	=> 'Top Center',
				'100% 0%' 	=> 'Top Right',
				'0% 50%' 	=> 'Middle Left',
				'50% 50%' 	=> 'Middle Center',
				'100% 50%' 	=> 'Middle Right',
				'0% 100%' 	=> 'Bottom Left',
				'50% 100%' 	=> 'Bottom Center',
				'100% 100%' => 'Bottom Right'
			),
			'responsive'	=> true,
		),
		'hover_bg_repeat' => array(
			'title'				=> 'Repeat',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'stack'				=> 'vertical-end',
			'data-input-type'   => 'select-box',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'data-target'		=> '.thumb-hover',
			'default'			=> 'no-repeat',
			'data-css-attribute'=> 'background-repeat',
			'style-class'	=> 'ov-bg-type-thumbhover-img',
			'select-box-values' => array(
				'no-repeat' => 'No Repeat',
				'repeat-x' 	=> 'Repeat horizontal',
				'repeat-y' 	=> 'Repeat vertical',
				'repeat' 	=> 'Repeat both'
			),
		),
	);
} else if($args['option'] == 'background-video') {
	$options = array(
		'title'			=> 'Background Video',
		'class'		  => 'custom-hover ov-bg-type-thumbhover-vid',
		'hide-title'	=> true,
		'break'			=> '1,1,1',
		'bg_video' => array(
			'title'			=> 'Video Upload',
			'size'			=> 'span4',
			'hide-title'	=> true,
			'data-input-type' => 'video-upload',
			'default'		=> '',
			'class'			=> 'ps-setting admin-listen-handler',
			'data-handler'	=> 'thumbHover',
			'style-class'	=> 'ov-bg-type-thumbhover-vid',
			'data-upload'	=> 'hoverBgImage',
			'data-ps-type' 		=> 'thumbnail',
		),
		'bg_video_url' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'or use external video',
			'size'		 	=> 'span4',
			'placeholder'	=> 'http://my.cdn.com/video.mp4',
			'default'		=> '',
			'class'			=> 'ps-setting admin-listen-handler',
			'data-handler'	=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'style-class'	=> 'ov-bg-type-thumbhover-vid',
		),
		'bg_video_opacity' => array(
			'title'			=> 'Video Opacity',
			'size'			=> 'span4',
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.background-video',
			'default'		=> 100,
			'min'			=> 0,
			'max'			=> 100,
			'class'			=> 'ps-setting admin-listen-handler',
			'data-handler'	=> 'thumbHover',
			'data-divider'  => 100,
			'style-class'	=> 'ov-bg-type-thumbhover-vid',
			'data-ps-type' 		=> 'thumbnail',
			'data-range-slider'		=> 'thumbHover',
		),
	);
} else if($args['option'] == 'title-category') {
	$options = array(
		'break' 	  => '1,2,1',
		'class'		  => 'custom-hover',
		'title'		  => 'Title &amp; Type Visibility',
		'style-class' => 'ep-collapsed',
		'hover_title_visibility' => array(
			'data-input-type' => 'select-box',
			'title'		 		=> 'Visibility',
			'size'		 		=> 'span4',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'default' 	 		=> 'hide-both',
			'data-target'		=> '.thumb-hover-meta',
			'select-box-values' => array(
				'hide-both'		=> 'Hide Both',
				'show-both' 	=> 'Show both title and project type',
				'show-title'	=> 'Show only title',
				'show-category'	=> 'Show only project type',
			),
		),
		'hover_title_alignment' => array(
			'data-input-type' => 'select-box',
			'title'		 		=> 'Alignment',
			'size'		 		=> 'span2',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'default' 	 		=> 'none',
			'data-target'		=> '.thumb-hover-meta',
			'select-box-values' => array(
				'top-left'		=> 'Top Left',
				'top-center'	=> 'Top Center',
				'top-right'		=> 'Top Right',
				'middle-left'	=> 'Middle Left',
				'middle-center'	=> 'Middle Center',
				'middle-right'	=> 'Middle Right',
				'bottom-left'	=> 'Bottom Left',
				'bottom-center'	=> 'Bottom Center',
				'bottom-right'	=> 'Bottom Right',
			),
		),
		'hover_title_padding' => array(
			'title'					=> 'Padding',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'min'					=> 0,
			'default'				=> 40,
			'max'					=> 1000,
			'data-has-unit'			=> true,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-target'			=> '.thumb-hover-meta',
			'data-range-slider'		=> 'thumbHover',
		),
		'hover_title_transition' => array(
			'data-input-type' => 'select-box',
			'title'		 		=> 'Transition',
			'size'		 		=> 'span4',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'default' 	 		=> 'fadein',
			'select-box-values' => array(
				'fade' 		  => 'Fade in only',
				'move-top' => 'Fade in + move from top',
				'move-right' => 'Fade in + move from right',
				'move-bottom' => 'Fade in + move from bottom',
				'move-left' => 'Fade in + move from left',
			),
		),
	);
} else if($args['option'] == 'title') {
	$options = array(
		'break' 	  => '2',
		'class'		  => 'custom-hover',
		'title'		  => 'Title Formatting',
		'style-class' => 'ep-collapsed',
		'hover_title_color' => array(
			'title'					=> 'Color',
			'size'					=> 'span2',
			'data-input-type'		=> 'color',
			'default'				=> 'transparent',
			'class'					=> 'color-picker admin-listen-handler',
			'data-handler'  	 	=> 'colorPicker',
			'data-css-attribute' 	=> 'color',
			'data-target'			=> '.thumb-hover-meta .title',
			'data-picker'		=> 'thumbHover',
		),
		'hover_title_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'default' 	 		=> 'none',
			'select-box-values' => $this->fonts,
			'data-target'		=> '.thumb-hover-meta .title',
		),
		'hover_title_fontsize' => array(
			'title'					=> 'Font Size',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'default'				=> 24,
			'min'					=> 0,
			'max'					=> 999,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-has-unit'			=> true,
			'data-css-attribute'	=> 'font-size',
			'data-target'			=> '.thumb-hover-meta .title',
			'data-range-slider'		=> 'thumbHover',
		),
		'hover_title_text_transform' => array(
			'title'					=> 'Text Transform',
			'size'					=> 'span2',
			'data-input-type'		=> 'select-box',
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'default'				=> 'none',
			'data-css-attribute'	=> 'text-transform',
			'data-target'			=> '.thumb-hover-meta .title',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
	);
} else if($args['option'] == 'category') {
	$options = array(
		'break' 	  => '2',
		'class'		  => 'custom-hover',
		'title'		  => 'Type Formatting',
		'style-class' => 'ep-collapsed',
		'hover_category_color' => array(
			'title'					=> 'Color',
			'size'					=> 'span2',
			'data-input-type'		=> 'color',
			'data-target'			=> '.content-block',
			'default'				=> 'transparent',
			'class'					=> 'color-picker admin-listen-handler',
			'data-handler'  		=> 'colorPicker',
			'data-css-attribute' 	=> 'color',
			'data-target'			=> '.thumb-hover-meta .category',
			'data-picker'		=> 'thumbHover',
		),
		'hover_category_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'ps-setting admin-listen-handler',
			'data-handler'		=> 'thumbHover',
			'data-ps-type' 		=> 'thumbnail',
			'default' 	 		=> 'none',
			'select-box-values' => $this->fonts,
			'data-target'		=> '.thumb-hover-meta .category',
		),
		'hover_category_fontsize' => array(
			'title'					=> 'Font Size',
			'size'					=> 'span2',
			'offset'				=> false,
			'data-input-type' 		=> 'range-slider',
			'default'				=> 18,
			'min'					=> 0,
			'max'					=> 999,
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'data-has-unit'			=> true,
			'data-css-attribute'	=> 'font-size',
			'data-target'			=> '.thumb-hover-meta .category',
			'data-range-slider'		=> 'thumbHover',
		),
		'hover_category_text_transform' => array(
			'title'					=> 'Text Transform',
			'size'					=> 'span2',
			'data-input-type'		=> 'select-box',
			'class'					=> 'ps-setting admin-listen-handler',
			'data-handler'			=> 'thumbHover',
			'data-ps-type' 			=> 'thumbnail',
			'default'				=> 'none',
			'data-css-attribute'	=> 'text-transform',
			'data-target'			=> '.thumb-hover-meta .category',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
	);
}