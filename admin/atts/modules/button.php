<?php

// -----------------------------------------
// semplice
// admin/atts/modules/button.php
// -----------------------------------------

$button = array(
	'options' => array(
		'title'  	 => 'Options',
		'hide-title' => true,
		'break'		 => '1,2,1,1,1,1',
		'data-hide-mobile' => true,
		'label' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Label',
			'size'		 	=> 'span4',
			'placeholder'	=> 'Semplice Button',
			'default'		=> 'Semplice Button',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
		),
		'link_type' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link Type',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => 'url',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'url,email,page,project,post',
			'data-visibility-prefix'	=> 'ov-btn-link',
			'select-box-values' => array(
				'url' 		 => 'Url or E-Mail',
				'page'		 => 'Page',
				'project'	 => 'Project',
				'post'		 => 'Blog post',
			),
		),
		'link_target' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Target',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => 'new',
			'select-box-values' => array(
				'new'	 => 'New Tab',
				'same'	 => 'Same Tab',
			),
		),	
		'link' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Link or E-Mail',
			'size'		 	=> 'span4',
			'placeholder'	=> 'https://www.semplice.com',
			'default'		=> '',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'style-class'	=> 'ov-btn-link-url',
		),
		'link_page' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to page',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('page'),
			'style-class'	=> 'ov-btn-link-page',
		),
		'link_project' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to project',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('project'),
			'style-class'	=> 'ov-btn-link-project',
		),
		'link_post' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to blog post',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('post'),
			'style-class'	=> 'ov-btn-link-post',
		),
	),
	'width-options' => array(
		'title' => 'Width &amp; Alignment',
		'data-hide-mobile' => true,
		'break' => '2',
		'width' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Width',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-target'=> '.is-content',
			'default' 	 => 'auto',
			'select-box-values' => array(
				'auto'		 => 'Auto',
				'grid-width' => 'Grid Width',
			),
		),
		'align' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Align',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-target'=> '.ce-button',
			'default' 	 => 'center',
			'select-box-values' => array(
				'center'		=> 'Center',
				'left'			=> 'Left',
				'right'			=> 'Right',
			),
		),
	),
	'btn_general_responsive_lg' => $atts->get_mobile('button', 'Desktop', 'lg', array('type' => 'general')),
	'btn_general_responsive_md' => $atts->get_mobile('button', 'Tablet Landscape', 'md', array('type' => 'general')),
	'btn_general_responsive_sm' => $atts->get_mobile('button', 'Tablet Portrait', 'sm', array('type' => 'general')),
	'btn_general_responsive_xs' => $atts->get_mobile('button', 'Mobile', 'xs', array('type' => 'general')),
	'border-options' => array(
		'title' => 'Border &amp; Background',
		'data-hide-mobile' => true,
		'style-class' => 'ep-collapsed',
		'break' => '2,2',
		'border-width' => array(
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
			'data-range-slider' => 'button',
		),
		'border-radius' => array(
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
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,%',
		),
		'border-color' => array(
			'title'			=> 'Border Color',
			'help'			=> 'This will overwrite the border color option in the [Styles] tab of your button if set.',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button'
		),
		'background-color' => array(
			'title'			=> 'BG Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> '#ffd300',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button'
		),
	),
	'btn_border_responsive_lg' => $atts->get_mobile('button', 'Desktop', 'lg', array('type' => 'border')),
	'btn_border_responsive_md' => $atts->get_mobile('button', 'Tablet Landscape', 'md', array('type' => 'border')),
	'btn_border_responsive_sm' => $atts->get_mobile('button', 'Tablet Portrait', 'sm', array('type' => 'border')),
	'btn_border_responsive_xs' => $atts->get_mobile('button', 'Mobile', 'xs', array('type' => 'border')),
	'typography-options' => array(
		'title' => 'Typography',
		'data-hide-mobile' => true,
		'style-class' => 'ep-collapsed',
		'break' => '2,2',
		'font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-target'		=> '.is-content a',
			'default' 	 		=> 'none',
			'select-box-values' => $atts->fonts,
		),
		'font-size' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 6,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-has-unit'	=> true,
			'data-range-slider' => 'button',
		),
		'color' => array(
			'title'			=> 'Text Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content a',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button'
		),
		'letter-spacing' => array(
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 9999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-divider'  => 10,
			'data-has-unit'	=> true,
			'data-negative' => true,
			'data-range-slider' => 'button',
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px. <br /><br /><b>Note:</b><br />You will see the letter spacing also added to the last char on the right while editing. For the frontend this will get compensated with a negative margin to correctly align your button label.',
		),
	),
	'btn_typography_responsive_lg' => $atts->get_mobile('button', 'Desktop', 'lg', array('type' => 'typography')),
	'btn_typography_responsive_md' => $atts->get_mobile('button', 'Tablet Landscape', 'md', array('type' => 'typography')),
	'btn_typography_responsive_sm' => $atts->get_mobile('button', 'Tablet Portrait', 'sm', array('type' => 'typography')),
	'btn_typography_responsive_xs' => $atts->get_mobile('button', 'Mobile', 'xs', array('type' => 'typography')),
	'padding' => array(
		'title' => 'Paddings',
		'data-hide-mobile' => true,
		'style-class' => 'ep-collapsed',
		'padding-top' => array(
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
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-right' => array(
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
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-bottom' => array(
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
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
		'padding-left' => array(
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
			'data-range-slider' => 'button',
			'data-supported-units' => 'rem,vw,vh',
		),
	),
	'btn_padding_responsive_lg' => $atts->get_mobile('button', 'Desktop', 'lg', array('type' => 'padding')),
	'btn_padding_responsive_md' => $atts->get_mobile('button', 'Tablet Landscape', 'md', array('type' => 'padding')),
	'btn_padding_responsive_sm' => $atts->get_mobile('button', 'Tablet Portrait', 'sm', array('type' => 'padding')),
	'btn_padding_responsive_xs' => $atts->get_mobile('button', 'Mobile', 'xs', array('type' => 'padding')),
	'mouseover' => array(
		'title'  	 => 'Mouseover',
		'break'		 => '2,2,2,2',
		//'help'		 => 'To avoid editing problems the button mouseover is not animated in the editor.',
		'style-class' => 'ep-collapsed',
		'data-hide-mobile' => true,
		'effect' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Effect Preset',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-target'=> '.is-content',
			'default' 	 => 'colorfade',
			'select-box-values' => array(
				'colorfade'	 => 'Colorfade',
				'slide-left-to-right' => 'Slide Left to Right',
				'slide-right-to-left' => 'Slide Right to Left',
				'slide-top-to-bottom' => 'Slide Top to Bottom',
				'slide-bottom-to-top' => 'Slide Bottom to Top',
				'expand-vertically'	  => 'Expand Vertically',
				'expand-horizontally' => 'Expand Horizontally',
				'fill-up' => 'Fill Up',
			),
		),
		'text_effect' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Text Effect',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-target'=> '.is-content',
			'default' 	 => 'none',
			'select-box-values' => array(
				'none'	 => 'None',
				'top-out-bottom-in' => 'Top out bottom in',
				'bottom-out-top-in' => 'Bottom out top in'
			),
		),
		'easing' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Easing',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-target'=> '.is-content',
			'default' 	 => '--ease-out-expo',
			'select-box-values' => $atts->css_easings
		),
		'duration' => array(
			'title'			=> 'Duration (ms)',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 700,
			'min'			=> 0,
			'max'			=> 9999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-range-slider' => 'button',
		),
		'hover-color' => array(
			'title'			=> 'Text Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content a',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button',
		),
		'hover-background-color' => array(
			'title'			=> 'BG Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> '#ffe152',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button',
		),
		'hover-border-color' => array(
			'title'			=> 'Border Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'button',
		),
		'hover-letter-spacing' => array(
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
			'data-range-slider' => 'button',
		),
		'box_shadow_opacity' => array(
			'title'			=> 'Box Shadow Opacity',
			'size'			=> 'span4',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 100,
			'min'			=> 0,
			'max'			=> 100,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'help'			=> 'Please note that this only defines the opacity of your shadow for the mouseover. In order to add a shadow please click on the tab <b>[ Styles ]</b> in this popup window<br /><br />There is no preview for the box shadow hover.',
		),
	),
	'btn_mouseover_responsive_lg' => $atts->get_mobile('button', 'Desktop', 'lg', array('type' => 'mouseover')),
	'btn_mouseover_responsive_md' => $atts->get_mobile('button', 'Tablet Landscape', 'md', array('type' => 'mouseover')),
	'btn_mouseover_responsive_sm' => $atts->get_mobile('button', 'Tablet Portrait', 'sm', array('type' => 'mouseover')),
	'btn_mouseover_responsive_xs' => $atts->get_mobile('button', 'Mobile', 'xs', array('type' => 'mouseover')),
);
?>