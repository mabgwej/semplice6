<?php

// -----------------------------------------
// semplice
// admin/functions.php
// -----------------------------------------

// -----------------------------------------
// add admin page as node to admin bar
// -----------------------------------------

function semplice_admin_node($wp_admin_bar) {

	// url of current page
	$current_page = substr(strrchr(rtrim($_SERVER["REQUEST_URI"], '/'), '/'), 1);

	// args
	$args = array(
		'id'    => 'semplice-admin',
		'title' => '<span class="adler-icon">' . get_svg('backend', 'adler_admin_bar') . '</span> Launch Semplice',
		'href'  => admin_url('admin.php?page=semplice-admin&ref=' . $current_page),
		'meta'  => array('class' => 'semplice-admin-button')
	);
	$wp_admin_bar->add_node($args);
}

add_action('admin_bar_menu', 'semplice_admin_node', 999);

// -----------------------------------------
// add admin page to admin menu
// -----------------------------------------

function semplice_admin_menu() {

	// global semplice admin page
	global $semplice_admin_page;

	// url of current page
	$current_page = substr(strrchr(rtrim($_SERVER["REQUEST_URI"], '/'), '/'), 1);

	$semplice_admin_page = add_menu_page(
		'Semplice',
		'Semplice',
		'manage_options',
		'semplice-admin',
		'semplice_admin',
		'dashicons-admin-generic',
		999
	);
}

add_action('admin_menu', 'semplice_admin_menu');

// add base template
function semplice_admin(){
	// get ref
	$ref = isset($_GET['ref']) ? $_GET['ref'] : '';
	// check if instagram auth
	if($ref != 'instagram-auth' && $ref != 'dribbble-auth') {
		// add main html code
		require get_template_directory() . '/admin/index.php';
	} else {
		// instagram auth
		if($ref == 'instagram-auth') {
			// get token
			$token = isset($_GET['token']) ? $_GET['token'] : '';
			$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
			$expires = isset($_GET['expires']) ? $_GET['expires'] : '';
			// save token
			if($token && $userid) {
				$token = array(
					'access_token'	=> $token,
					'user_id'		=> $userid,
					'expires'		=> $expires
				);
				update_option('semplice_instagram_token', json_encode($token));
				echo '
					<div class="app-auth">
						<img src="' . get_template_directory_uri() . '/assets/images/admin/instagram_success.png">
						<h3>Successfully connected Instagram</h3>
						<p>All done! You can now close this tab<br />and continue editing your page</p>
					</div>
				';
			} else {
				echo '
					<div class="app-auth">
						<img src="' . get_template_directory_uri() . '/assets/images/admin/instagram_error.png">
						<h3>Couldn\'t get access token</h3>
						<p>Looks like there were some errors. Please try again.</p>
					</div>
				';
			}
		} else if($ref == 'dribbble-auth') {
			// get token
			$token = isset($_GET['token']) ? $_GET['token'] : '';
			if($token && $token !== 'error') {
				// save token
				update_option('semplice_dribbble_token_v2', $token);
				echo '
					<div class="app-auth">
						<img src="' . get_template_directory_uri() . '/assets/images/admin/dribbble_success.png">
						<h3>Successfully connected Dribbble</h3>
						<p>All done! You can now close this tab<br />and continue editing your page</p>
					</div>
				';
			} else {
				echo '
					<div class="app-auth">
						<img src="' . get_template_directory_uri() . '/assets/images/admin/dribbble_error.png">
						<h3>Couldn\'t get your token</h3>
						<p>Looks like there were some errors. Please try again.</p>
					</div>
				';
			}
		}
	}
}

// -----------------------------------------
// include meta boxes
// -----------------------------------------

function semplice_metabox() {
	// add our semplice status metabox
	add_meta_box('_is_semplice', 'Semplice Status', 'semplice_metabox_output', 'page', 'normal', 'high', null);
}

function semplice_metabox_output($object) {
	// metabox nonce
	wp_nonce_field(basename(__FILE__), 'semplice_metabox_nonce');
	// get is semplice
	$is_semplice = get_post_meta($object->ID, '_is_semplice', true);
	// button prefix
	$prefix = 'Activate';
	// set status
	if(empty($is_semplice)) {
		// set vars
		$is_semplice = 0;
		$status = 'inactive';
	} else {
		if(false !== $is_semplice) {
			$status = 'active';
			$prefix = 'Deactivate';
		} else {
			$status = 'inactive';
		}
	}
	
	// output html
	echo '
		<div class="activate-semplice" data-semplice-status="' . $status . '">
			<div class="content">
				<div class="active">' . get_svg('backend', '/icons/is_semplice') . '</div>
				<div class="inactive">' . get_svg('backend', '/icons/is_not_semplice') . '</div>
				<p>If activated the content from our editor will get displayed in the frontend instead of the content from the default WordPress editor.</p>
				<a class="activate-semplice-button">' . $prefix . ' Semplice</a>
			</div>
		</div>
		<input name="_is_semplice" class="is-semplice" type="text" value="' . $is_semplice . '">
	';
}

add_action('add_meta_boxes', 'semplice_metabox');

// -----------------------------------------
// remove revision if post is permantently removed
// -----------------------------------------

add_action('admin_init', 'semplice_revision_init');

function semplice_revision_init() {
	add_action('delete_post', 'semplice_revision_synch', 10);
}

function semplice_revision_synch($post_id) {
	// wpdb and table
	global $wpdb;
	$rev_table_name = $wpdb->prefix . 'semplice_revisions';

	// if post id is still in revisions, delete it
	if ($wpdb->get_var("SELECT post_id FROM $rev_table_name WHERE post_id = '$post_id'")) {
		$wpdb->delete($rev_table_name, array('post_id' => $post_id), array( '%d'));
	}
}

// -----------------------------------------
// changes for the save post hook
// -----------------------------------------

function semplice_save_post($post_id) {

	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = (isset($_POST['semplice_metabox_nonce']) && wp_verify_nonce($_POST['prfx_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		 return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if(isset($_POST['_is_semplice'])) {
		update_post_meta($post_id, '_is_semplice', sanitize_text_field($_POST['_is_semplice']));
	}

	// portfolio order
	semplice_portfolio_order($post_id);
}

add_action('save_post', 'semplice_save_post');

// -----------------------------------------
// run a update check
// -----------------------------------------

semplice_update_check();

// -----------------------------------------
// enqueue scripts
// -----------------------------------------

function semplice_admin_styles_and_scripts($hook) {

	// global semplice admin page
	global $semplice_admin_page;

	// semplice meta
	global $semplice, $editor_api;

	// get ref
	$ref = isset($_GET['ref']) ? $_GET['ref'] : '';

	// only add scripts and styles for the semplice admin
	if ($hook == $semplice_admin_page && $ref != 'instagram-auth' && $ref != 'dribbble-auth') {

		// google webfont
		wp_enqueue_style('google_webfonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic|Source+Code+Pro:400|Lora:400,400italic,700,700italic');

		// jquery ui parts
		wp_enqueue_script('jquery-ui-droppable');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('jquery-ui-resizable');
		wp_enqueue_script('jquery-ui-tabs');

		// wordpress color picker
		wp_enqueue_style('wp-color-picker');

		// wp media
		wp_enqueue_media();

		// semplice shared scripts
		wp_enqueue_script('semplice-shared-scripts', get_template_directory_uri() . '/assets/js/shared.scripts.min.js', '', semplice_theme('version'), true);

		// semplice-admin scripts
		wp_enqueue_script('semplice-admin-scripts', get_template_directory_uri() . '/assets/js/admin.scripts.min.js', '', semplice_theme('version'), true);

		// semplice-admin
		wp_enqueue_script('semplice-admin', get_template_directory_uri() . '/assets/js/admin.min.js', array('wp-color-picker'), semplice_theme('version'), true);

		// atts
		require get_template_directory() . '/admin/atts/atts.php';

		// transitions
		require get_template_directory() . '/includes/transitions.php';

		// for the is plugin active check
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		// is yoast
		$is_yoast = false;

		// check if yoast plugin is active
		if(is_plugin_active('wordpress-seo/wp-seo.php') || is_plugin_active('wordpress-seo-premium/wp-seo-premium.php')) {
			$is_yoast = true;
		}

		$atts = array(
			'styles'  	 		=> $styles,
			'options' 	 		=> $options,
			'animations' 	 	=> $animations,
			'modules'	 		=> $module_options,
			'branding'			=> $branding,
			'customize'	 		=> $customize,
			'settings'			=> $settings,
			'postSettings'		=> $post_settings,
			'coverslider'		=> $coverslider,
		);

		// localize script
		wp_localize_script('semplice-admin', 'semplice', array(
			'version'			=> semplice_theme('version'),
			'installed'			=> semplice_theme('edition'),
			'default_api_url' 	=> untrailingslashit(semplice_rest_url()),
			'semplice_api_url'	=> untrailingslashit(semplice_rest_url()) . '/semplice/v1/admin',
			'editor_api_url'	=> untrailingslashit(semplice_rest_url()) . '/semplice/v1/editor',
			'template_dir'		=> get_template_directory_uri(),
			'update'			=> semplice_has_update(),
			'nonce'  			=> wp_create_nonce('wp_rest'),
			'admin_url'			=> admin_url(),
			'origin_url'		=> isset($_GET['ref']) ? $_GET['ref'] : '',
			'site_name'			=> get_bloginfo('name'),
			'atts'				=> $atts,
			'base_url'			=> home_url(),
			'is_yoast'			=> $is_yoast,
			'php_error'			=> version_compare(phpversion(), '5.3', '<'),
			'is_onboarding'		=> semplice_is_onboarding(),
			'project_slug'		=> semplice_get_project_slug(),
			'max_upload_size'	=> semplice_get_max_upload_size(),
			'customize'			=> array(
				'grid'			=> json_decode(get_option('semplice_customize_grid')),
				'webfonts'		=> json_decode(get_option('semplice_customize_webfonts')),
				'navigations'	=> json_decode(get_option('semplice_customize_navigations')),
				'typography'	=> json_decode(get_option('semplice_customize_typography')),
				'mobile'		=> json_decode(get_option('semplice_customize_mobile')),
				'projectpanel'	=> json_decode(get_option('semplice_customize_projectpanel')),
				'thumbhover'	=> json_decode(get_option('semplice_customize_thumbhover')),
				'transitions'	=> json_decode(get_option('semplice_customize_transitions')),
				'blog'			=> json_decode(get_option('semplice_customize_blog')),
				'advanced'		=> json_decode(get_option('semplice_customize_advanced')),
				'cursor'		=> json_decode(get_option('semplice_customize_cursor')),
				'ppc'			=> json_decode(get_option('semplice_customize_ppc'))
			),
			'settings'			=> array(
				'general'		=> semplice_get_general_settings(),
			),
			'taxonomy'			=> array(
				'category'		=> semplice_taxonomy_checklist('category'),
				'tag'			=> semplice_taxonomy_checklist('tag'),
				'author'		=> semplice_taxonomy_checklist('author'),
			),
			'blogposts'			=> semplice_blogposts_checklist(),
			'blocks'			=> $editor_api->blocks->layout_blocks(),
			'custom_colors'     => json_decode(get_option('semplice_custom_colors')),
			'admin_images'		=> semplice_get_admin_images(json_decode(get_option('semplice_admin_images'), true)),
			'license'			=> semplice_get_license(),
			'transition_atts'	=> $transition_atts,
			'unsplash'			=> 'e95fb83abfd1391700b12538108635e145be85e378809091770e17b9656ee6e5',
			'editor_notices'	=> semplice_editor_notices(),
			'whats_new'			=> semplice_whats_new(),
			'posts'				=> semplice_get_apg_posts('content', false),
			'sortby'			=> semplice_get_sortby(),
			'projects_view'		=> semplice_get_projects_view(),
			'onboarding'		=> semplice_get_onboarding_content(),
			'mime_types'		=> semplice_get_allowed_mime_types(),
			'social_profiles'	=> semplice_get_social_profiles(),
			'animate'			=> array(
				'presets'		=> semplice_get_animate_presets(),
			),
		));

		// fontend style css
		wp_enqueue_style('semplice-stylesheet', get_stylesheet_uri(), array(), semplice_theme('version'));
		// fontend styles
		wp_enqueue_style('semplice-frontend-stylesheet', get_template_directory_uri() . '/assets/css/frontend.min.css', false, semplice_theme('version'));
		// backend style css
		wp_enqueue_style('semplice-admin-stylesheet', get_template_directory_uri() . '/assets/css/admin.min.css', false, semplice_theme('version'));
	} else {
		// register gutenberg styles
		wp_enqueue_script('semplice-gutenberg', get_template_directory_uri() . '/assets/js/gutenberg.js', array('wp-blocks','wp-dom'), semplice_theme('version'), true);
		// gutenberg styles
		wp_enqueue_style('semplice-gutenberg-stylesheet', get_template_directory_uri() . '/assets/css/gutenberg.css', false, semplice_theme('version'));
		// google webfont
		wp_enqueue_style('google_webfonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300');
		// localize script
		wp_localize_script('semplice-gutenberg', 'sempliceGutenberg', semplice_gutenberg_options());
	}
}

add_action('admin_enqueue_scripts', 'semplice_admin_styles_and_scripts');

// -----------------------------------------
// admin head
// -----------------------------------------

function wp_admin_head($hook) {

	// get current screen
	$screen = get_current_screen();

	// show custom css only on semplice admin
	if($screen->id == 'toplevel_page_semplice-admin') {

		// custom css
		global $semplice_custom_css;

		// webfonts css
		$output = $semplice_custom_css->webfonts() . '
			<style type="text/css" id="semplice-advanced-css">' . $semplice_custom_css->advanced(false) . '</style>
			<style type="text/css" id="semplice-typography-css">' . $semplice_custom_css->typography('css', true) . '</style>
			<style type="text/css" id="semplice-grid-css">' . $semplice_custom_css->grid('editor') . '</style>
			<style type="text/css" id="semplice-inter-webfont">' . semplice_inter_webfont(false) . '</style>
		';

		// placeholders
		$head_placeholders = array('semplice-post-css', 'semplice-options-visibility', 'semplice-navigations', 'semplice-navigations-hover-css', 'semplice-navigations-hamburger', 'semplice-thumbhover-css', 'semplice-thumbhover-scale-css', 'semplice-projectnav-css', 'semplice-animate-post-css', 'semplice-animate-css', 'semplice-blog-css', 'semplice-cover-slider', 'semplice-fluid-text');

		foreach ($head_placeholders as $key => $placeholder) {
			$output .= '<style type="text/css" id="' . $placeholder . '"></style>';
		}

		// output
		echo $output;
	}

	// show everytime
	?>
	<style type="text/css">
		.adler-icon { float: left; margin-right: 4px !important; }
		.adler-icon svg { height: 32px !important; width: 18px !important; }
		.semplice-admin-button a { background: #ffd300 !important; color: black !important;  }
		.semplice-admin-button a:hover { background: #ffe152 !important; }
		#adminmenu .menu-icon-project div.wp-menu-image:before { content: "\f128"; }
		#adminmenu .menu-icon-footer div.wp-menu-image:before { content: "\f135"; }
		#_is_semplice {	background: #ffd300; position: relative; margin: 10px 0 10px; }
		#_is_semplice h2 { border-bottom: 1px solid #e5bd00 !important; }
		#_is_semplice .inside { position: initial; }
		#_is_semplice .handlediv { color: #000000; }
		.is-semplice { display: none; }
		.activate-semplice {
			padding: 20px;
		}
		.activate-semplice h3 {
			margin: 0px !important;
			font-size: 24px;
			font-weight: 600;
		}
		.activate-semplice p {
			font-size: 18px;
			color: #a38600;
		}
		.activate-semplice-button {
			margin-top: 10px;
			font-size: 14px;
			line-height: 40px;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 1px;
			padding: 0 30px;
			background: #ffd300;
			border: 1px solid #a38600;
			border-radius: 2px;
			display: inline-block;
			color: black;
			cursor: pointer;
			transition: all 0.2s ease;
			-moz-transition: all 0.2s ease;
			-webkit-transition: all 0.2s ease;
			-o-transition: all 0.2s ease;
		}
		.activate-semplice-button:hover {
			color: black;
			border: 1px solid #000000;
		}
		[data-semplice-status="inactive"] .inactive { display: block; }
		[data-semplice-status="inactive"] .active { display: none; }
		[data-semplice-status="active"] .inactive { display: none; }
		[data-semplice-status="active"] .active { display: block; }
		#adminmenu .toplevel_page_semplice-admin a{ color: black !important; background: #ffd300; }
		#adminmenu .toplevel_page_semplice-admin a:focus { color: black !important; background: #ffd300 !important; }
		#adminmenu .toplevel_page_semplice-admin:hover { background: #ffe152; }
		#adminmenu .toplevel_page_semplice-admin .wp-menu-image { background-image: url(<?php echo get_template_directory_uri() . '/assets/images/admin/adler_admin_bar.svg'; ?>); background-position: center center; background-repeat: no-repeat; }
		#adminmenu .toplevel_page_semplice-admin .wp-menu-image:before { display: none; }
		.app-auth { width: 100%; height: 100%; position: fixed; background: #f5f5f5; top: 0; left: 0; bottom: 0; z-index: 500000; display: flex; flex-direction: column; align-items: center; justify-content: center; }
		.app-auth h3 { font-family: 'Open Sans', sans-serif; font-size: 30px; font-weight: 300; color: black; margin-bottom: 10px; }
		.app-auth p { font-family: 'Open Sans', sans-serif; font-size: 20px; font-weight: 300; color: #888888; text-align: center; }
		.app-auth img { width: 172px; height: auto; }
	</style>
	<?php
}

add_action('admin_head', 'wp_admin_head');

// -----------------------------------------
// admin footer
// -----------------------------------------

function wp_admin_footer() {
	?>
		<script type="text/javascript">
			// semplice global elements
			var $semplice = jQuery('#semplice');
			var $adminWrapper = jQuery('#semplice-wrapper');
			var $adminContent = jQuery('#semplice-content');
			var $editor = jQuery('#semplice-editor');
			var $holder = jQuery('#content-holder');
			var $editorContent = jQuery('#editor-content');
			var $navHeader = jQuery('header.navigation');
			var $editPopup = jQuery('#edit-popup');
			var $adminEditPopup = jQuery('#admin-edit-popup');
			var $sempliceGrid = jQuery('#semplice-grid');
			var $blocks = jQuery('#semplice-blocks');
			var $navigator = jQuery('#semplice-navigator');
			var $cover = jQuery('#cover');

			// semplice debug
			sempliceDebug = false;

			jQuery(document).on('click', '.activate-semplice-button', function() {
				// get element
				element = jQuery('.is-semplice');
				// get status
				var status = element.val();
				// set new status
				if(true == status) {
					element.val(0);
					jQuery('.activate-semplice').attr('data-semplice-status', 'inactive');
					jQuery('.activate-semplice-button').text('Activate Semplice');
				} else {
					element.val(1);
					jQuery('.activate-semplice').attr('data-semplice-status', 'active');
					jQuery('.activate-semplice-button').text('Deactivate Semplice');
				}
			});
		</script>
	<?php
}
add_action('admin_footer', 'wp_admin_footer');
?>