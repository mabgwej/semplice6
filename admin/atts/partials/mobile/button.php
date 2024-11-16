<?php

// -----------------------------------------
// semplice
// admin/atts/partials/mobile/button.php
// -----------------------------------------

// type
if($args['type'] == 'general') {
	$options = array(
		'title'  	 => $title . ' Options',
		'break'		 => '1,2',
		'class'		 => 'mobile-option mobile-option-' .$breakpoint,
		'label_' . $breakpoint => array(
			'data-input-type' => 'input-text',
			'title'		 	=> 'Label',
			'size'		 	=> 'span4',
			'placeholder'	=> 'Semplice Button',
			'default'		=> 'Semplice Button',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'responsive'	=> true,
		),
	);
} else if($args['type'] == 'border') {
	$options = array(
		'title' 	  => 'Border',
		'style-class' => 'ep-collapsed',
		'break' 	  => '2',
		'class'		  => 'mobile-option mobile-option-' .$breakpoint,
		'border-width_' . $breakpoint => array(
			'title'			=> 'Border Width',
			'help'			=> 'This will overwrite the border width option in the [Styles] tab of your button if set.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
		),
		'border-radius_' . $breakpoint => array(
			'title'			=> 'Border Radius',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content, .is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,%'
		),
	);
} else if($args['type'] == 'typography') {
	$options = array(
		'title' => 'Typography',
		'style-class' => 'ep-collapsed',
		'break' => '2',
		'class'		 => 'mobile-option mobile-option-' .$breakpoint,
		'font-size_' . $breakpoint => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 16,
			'min'			=> 6,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
		),
		'letter-spacing_' . $breakpoint => array(
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 9999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-divider'  => 10,
			'data-has-unit'	=> true,
			'data-negative' => true,
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px. <br /><br /><b>Note:</b><br />You will see the letter spacing also added to the last char on the right while editing. For the frontend this will get compensated with a negative margin to correctly align your button label.',
			'responsive'	=> true,
			'data-range-slider' => 'button',
		),
	);
} else if($args['type'] == 'padding') {
	$options = array(
		'title' => 'Paddings',
		'style-class' => 'ep-collapsed',
		'class'		 => 'mobile-option mobile-option-' .$breakpoint,
		'padding-top_' . $breakpoint => array(
			'title'			=> 'Top',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-right_' . $breakpoint => array(
			'title'			=> 'Right',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-bottom_' . $breakpoint => array(
			'title'			=> 'Bottom',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-left_' . $breakpoint => array(
			'title'			=> 'Left',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'responsive'	=> true,
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
	);
} else if($args['type'] == 'mouseover') {
	$options = array(
		'title'  	 => 'Mouseover',
		'break'		 => '2,2',
		//'help'		 => 'To avoid editing problems the button mouseover is not animated in the editor.',
		'style-class' => 'ep-collapsed',
		'class'		 => 'mobile-option mobile-option-' .$breakpoint,
		'hover-letter-spacing_' . $breakpoint => array(
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'data-divider'  => 10,
			'data-negative' => true,
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
			'data-range-slider' => 'buttonHover',
			'responsive'	=> true,
			'data-range-slider' => 'button',
		),
	);
}