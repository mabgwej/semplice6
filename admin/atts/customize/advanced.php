<?php

// -----------------------------------------
// semplice
// admin/atts/customize/advanced.php
// -----------------------------------------

$advanced = array(
	'text' => array(
		'title'	 		=> 'Text Colors',
		'description' 	=> 'Define the basic text colors for your paragraphs.',
		'text_color' => array(
			'title'			=> 'Text Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
		'link_color' => array(
			'title'			=> 'Link Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#1573dd',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
		'mouseover_color' => array(
			'title'			=> 'Hover Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
	),
	'progress-bar' => array(
		'title'	 		=> 'Loader Bar Color',
		'description' 	=> 'Define the color of your \'Loader Bar\'',
		'progress_bar' => array(
			'title'			=> 'Progress Bar Color',
			'hide-title'	=> true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
	),
	'back-to-top' => array(
		'title'	 		=> 'Back To Top Arrow',
		'description' 	=> 'Customize your Back to Top arrow. If you upload a custom arrow, the ‘Color’ option will not be applied. For best quality, upload an SVG image.',
		'top_arrow' => array(
			'title'				 => 'Custom Arrow',
			'hide-title'		 => true,
			'size'				 => 'span1',
			'data-input-type'	 => 'admin-image-upload',
			'class'			  	 => 'admin-listen-handler',
			'data-handler'       => 'advanced',
			'data-upload'		 => 'advanced',
			'style-class'		 => 'ce-upload-small span1-settings general-dropzone hide-unsplash',
		),
		'top_arrow_width' => array(
			'title'				=> 'Arrow Width',
			'size'				=> 'span1',
			'offset'			=> false,
			'data-input-type' 	=> 'range-slider',
			'class'				=> 'admin-listen-handler',
			'data-handler'		=> 'advanced',
			'default'			=> 53,
			'min'				=> 0,
			'max'				=> 999,
			'data-has-unit'		=> true,
			'data-range-slider' => 'advanced',
		),
		'top_arrow_color' => array(
			'title'			=> 'Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
		'top_arrow_align' => array(
			'title'				 => 'Aligment',
			'size'				 => 'span1',
			'data-input-type'    => 'select-box',
			'class'			  	 => 'admin-listen-handler',
			'data-handler'       => 'advanced',
			'default'			 => 'right',
			'select-box-values'  => array(
				'left'	 => 'Left',
				'center' => 'Center',
				'right'	 => 'Right'
			),
		),
	),
	'lightbox' => array(
		'title'	 		=> 'Lightbox',
		'description' 	=> 'Customize colors and opacity of your image lightbox.',
		'lightbox_bg_opacity' => array(
			'title'				=> 'BG Opacity',
			'size'				=> 'span1',
			'data-input-type'	=> 'select-box',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'default'			=> '1',
			'select-box-values' => array(
				'0'			=> '0%',
				'.05'		=> '5%',
				'.1'		=> '10%',
				'.15'		=> '15%',
				'.2'		=> '20%',
				'.25'		=> '25%',
				'.3'		=> '30%',
				'.35'		=> '35%',
				'.4'		=> '40%',
				'.45'		=> '45%',
				'.5'		=> '50%',
				'.55'		=> '55%',
				'.6'		=> '60%',
				'.65'		=> '65%',
				'.7'		=> '70%',
				'.75'		=> '75%',
				'.8'		=> '80%',
				'.85'		=> '85%',
				'.9'		=> '90%',
				'.95'		=> '95%',
				'1'			=> '100%',
			),
		),
		'lightbox_icon_opacity' => array(
			'title'				=> 'Icon Opacity',
			'size'				=> 'span1',
			'data-input-type'	=> 'select-box',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'default'			=> '.75',
			'select-box-values' => array(
				'0'			=> '0%',
				'.05'		=> '5%',
				'.1'		=> '10%',
				'.15'		=> '15%',
				'.2'		=> '20%',
				'.25'		=> '25%',
				'.3'		=> '30%',
				'.35'		=> '35%',
				'.4'		=> '40%',
				'.45'		=> '45%',
				'.5'		=> '50%',
				'.55'		=> '55%',
				'.6'		=> '60%',
				'.65'		=> '65%',
				'.7'		=> '70%',
				'.75'		=> '75%',
				'.8'		=> '80%',
				'.85'		=> '85%',
				'.9'		=> '90%',
				'.95'		=> '95%',
				'1'			=> '100%',
			),
		),
		'lightbox_bg_color' => array(
			'title'			=> 'BG Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
		'lightbox_icon_color' => array(
			'title'			=> 'Icon Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'default'		=> '#ffffff',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'advanced',
		),
	),
	'image-treshold' => array(
		'title'	 		=> 'Big Image Detection',
		'description' 	=> 'Per default WordPress has a big image detection which will automatically limit your image width or heigth to 2560px. Disable this option to upload bigger images.',
		'big_image_treshold' => array(
			'data-input-type' 	=> 'switch',
			'switch-type'		=> 'twoway',
			'title'				=> 'Big Image Treshold',
			'hide-title'		=> true,
			'size'				=> 'span4',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'default' 	 		=> 'enabled',
			'switch-values' => array(
				'enabled'	 => 'Enabled',
				'disabled' 	 => 'Disabled',
			),
		),
	),
	'global-footer' => array(
		'title'	 		=> 'Global Footer',
		'description' 	=> 'Define your global footer here. To define an individual footer for a page or project please do this in the post settings.<br /><br />Note: If your footer is not listed here, please make sure it\'s published already.',
		'global_footer' => array(
			'title'				 => 'Global Footer',
			'hide-title'		 => true,
			'size'				 => 'span2',
			'data-input-type'    => 'select-box',
			'class'			  	 => 'admin-listen-handler',
			'data-handler'       => 'advanced',
			'default'			 => '1',
			'select-box-values' => semplice_get_post_dropdown('footer'),
		),
	),
	'password_protected' => array(
		'title' => 'Password Protected Content',
		'description' 	=> 'Choose the theme for your password protected page or project.<br /><br />To further customize the password protected template please <a class="help-link" href="#customize/ppc">click here</a>.',
		'password_form_theme' => array(
			'data-input-type' 	=> 'switch',
			'switch-type'		=> 'twoway',
			'title'				=> 'Password protected',
			'hide-title'		=> true,
			'size'				=> 'span4',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'default' 	 		=> 'bright',
			'switch-values' => array(
				'bright'	 => 'Bright',
				'dark' 	 => 'Dark',
			),
		),
	),
	'custom-css' => array(
		'title' 		=> 'Custom CSS',
		'description' 	=> 'Choose the custom css you want to edit from the select box and hit \'Edit Custom CSS\'',
		'custom_css_switch' => array(
			'title'				=> 'Custom CSS Switch',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'select-box-values' => array(
				'global'		=> 'Global',
				'xl'			=> 'Desktop Wide',
				'lg'			=> 'Desktop',
				'md'			=> 'Tablet Wide',
				'sm'			=> 'Tablet Portrait',
				'xs'			=> 'Mobile',
			),
		),
		'custom_css' 	=> array(
			'title'				=> 'Edit CSS Code',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'help'				=> '',
			'data-input-type'	=> 'codemirror',
			'placeholder'		=> '',
			'default'			=> '',
			'button-title'		=> 'Edit Custom css',
			'class'				=> 'semplice-button codemirror white-button admin-click-handler',
			'data-handler'		=> 'codemirror',
		),
	),
	'custom-js' => array(
		'title' 		=> 'Custom Javascript',
		'description' 	=> 'This custom javascript gets applied globally to all pages and projects. Please start right away with your javascript code without using any html tags like (< script >).<br /><br />Example: alert("Hello World");',
		'custom_js_spa' => array(
			'title'				=> 'Custom Javascript SPA Behavior',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'admin-listen-handler',
			'data-handler'  	=> 'advanced',
			'select-box-values' => array(
				'default'		=> '— Single Page App Behavior',
				'once'			=> 'Execute once (default)',
				'pagechange'	=> 'Execute after each page transition'
			),
		),
		'custom_js' 	=> array(
			'title'				=> 'Edit Javascript Code',
			'hide-title'		=> true,
			'size'				=> 'span2',
			'help'				=> '',
			'data-input-type'	=> 'codemirror',
			'placeholder'		=> '',
			'default'			=> '',
			'button-title'		=> 'Edit Javascript',
			'class'				=> 'semplice-button codemirror white-button admin-click-handler',
			'data-handler'		=> 'codemirror',
		),
	),
);