<?php

// -----------------------------------------
// semplice
// admin/atts/modules/blogsearch.php
// -----------------------------------------

$blogsearch = array(
	'basic-styling' => array(
		'title'  	 => 'Basic Styling',
		'break'		 => '2,2,2,2,2',
		'data-hide-mobile' => true,
		'placeholder' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Search label',
			'size'		 	=> 'span2',
			'placeholder'	=> 'Placeholder',
			'default'		=> 'Search posts',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'blogsearch',
		),
		'font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'blogsearch',
			'default' 	 		=> 'none',
			'data-target'		=> '.search-field',
			'select-box-values' => $atts->fonts,
		),
		'font_size' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.search-field',
			'default'		=> 16,
			'min'			=> 6,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'blogsearch',
			'data-has-unit'	=> true,
			'data-range-slider' => 'blogsearch',
		),
		'letter_spacing' => array(
			'title'				=> 'Letter Spacing',
			'size'				=> 'span2',
			'data-input-type' 	=> 'range-slider',
			'default'			=> 0,
			'min'				=> 0,
			'max'				=> 9999,
			'data-negative' 	=> true,
			'data-has-unit'		=> true,
			'data-divider'		=> 10,
			'class' 	 		=> 'editor-listen',
			'data-handler'		=> 'blogsearch',
			'data-range-slider' => 'blogsearch'
		),
		'color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text Color',
			'help'			=> 'Not previewed since there is only the placeholder in the preview but no real user input.',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
		),
		'bg_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#f5f5f5',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
		'placeholder_color' => array(
			'title'			=> 'Placeholder Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#aaaaaa',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
		'icon_color' => array(
			'title'			=> 'Icon Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#aaaaaa',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
	),
	'padding-options' => array(
		'title'  	 => 'Padding',
		'break'		 => '2,1',
		'style-class'	=> 'ep-collapsed',
		'data-hide-mobile' => true,
		'padding_ver' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Vertical',
			'help'			=> 'If your layout is horizontal, the padding for the input fields and the submit button will be matching in size so they always have the same height.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.search-field',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'blogsearch',
			'data-has-unit'	=> true,
			'data-range-slider' => 'blogsearch',
		),
		'padding_hor' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Horizontal',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.search-field',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'blogsearch',
			'data-has-unit'	=> true,
			'data-range-slider' => 'blogsearch',
		),
		'icon_padding' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Icon Padding',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.search-field',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'blogsearch',
			'data-has-unit'	=> true,
			'data-range-slider' => 'blogsearch',
		),
	),
	'mouseover' => array(
		'title'  	 => 'Mouseover & Focus',
		'break'		 => '2,2',
		'style-class'	=> 'ep-collapsed',
		'mouseover_color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text Color',
			'help'			=> 'Not previewed since there is a only the placeholder in the preview but no real user input.',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
		'bg_mouseover_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#e9e9e9',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
		'placeholder_mouseover_color' => array(
			'title'			=> 'Placeholder Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#666666',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
		'icon_mouseover_color' => array(
			'title'			=> 'Icon Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.search-field',
			'default'		=> '#aaaaaa',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'blogsearch',
		),
	),
	// mobile blogsearch options
	'blogsearch_responsive_lg' => $atts->get_mobile('blogsearch', 'Desktop', 'lg', false),
	'blogsearch_responsive_md' => $atts->get_mobile('blogsearch', 'Tablet Landscape', 'md', false),
	'blogsearch_responsive_sm' => $atts->get_mobile('blogsearch', 'Tablet Portrait', 'sm', false),
	'blogsearch_responsive_xs' => $atts->get_mobile('blogsearch', 'Mobile', 'xs', false),
);

?>