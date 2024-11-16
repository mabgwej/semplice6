<?php

// -----------------------------------------
// semplice
// admin/atts/partials/mobile/pgtitle.php
// -----------------------------------------

$options = array(
	'title'  	 => 'Title & Category Formatting',
	'break'		 => '2,2',
	'style-class'=> 'ep-collapsed',
	'class'		 => 'mobile-option mobile-option-' .$breakpoint,
	'title_fontsize_' . $breakpoint => array(
		'title'			=> 'Title Font Size',
		'size'			=> 'span2',
		'offset'		=> false,
		'data-input-type' 	=> 'range-slider',
		'default'		=> 16,
		'min'			=> 0,
		'max'			=> 999,
		'class'				=> 'editor-listen',
		'data-handler'		=> 'save',
		'data-style-option' => true,
		'data-has-unit'	=> true,
		'responsive'	=> true,
	),
	'title_padding_' . $breakpoint => array(
		'title'			=> 'Title Padding',
		'help'			=> 'Padding has no effect if title position is set to \'Overlay Middle Center.\'',
		'size'			=> 'span2',
		'offset'		=> false,
		'data-input-type' 	=> 'range-slider',
		'default'		=> 18,
		'min'			=> 0,
		'max'			=> 999,
		'class'				=> 'editor-listen',
		'data-handler'		=> 'save',
		'data-style-option' => true,
		'data-has-unit'	=> true,
		'responsive'	=> true,
	),
	'category_fontsize_' . $breakpoint => array(
		'title'			=> 'Type Font Size',
		'size'			=> 'span2',
		'offset'		=> false,
		'data-input-type' 	=> 'range-slider',
		'default'		=> 14,
		'min'			=> 0,
		'max'			=> 999,
		'class'				=> 'editor-listen',
		'data-handler'		=> 'save',
		'data-style-option' => true,
		'data-has-unit'	=> true,
		'responsive'	=> true,
	),
	'category_padding_top_' . $breakpoint => array(
		'title'			=> 'Type Padding Top',
		'size'			=> 'span2',
		'offset'		=> false,
		'data-input-type' 	=> 'range-slider',
		'default'		=> 8,
		'min'			=> 0,
		'max'			=> 999,
		'class'				=> 'editor-listen',
		'data-handler'		=> 'save',
		'data-style-option' => true,
		'data-has-unit'	=> true,
		'responsive'	=> true,
	),
);