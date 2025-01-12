<!-- customize template -->
<script id="customize-template" type="text/template">
	<div id="customize" class="{{customizeClass}}">
		{{content}}
		<div class="customize-breakpoints">
			<ul>
				<li><a class="customize-breakpoint xl active-breakpoint" data-customize-breakpoint="xl"><?php echo get_svg('backend', '/icons/breakpoints_desktop_wide'); ?><div class="tooltip">Desktop Wide</div></a></li>
				<li><a class="customize-breakpoint lg" data-customize-breakpoint="lg"><?php echo get_svg('backend', '/icons/breakpoints_desktop'); ?><div class="tooltip">Desktop</div></a></li>
				<li><a class="customize-breakpoint md" data-customize-breakpoint="md"><?php echo get_svg('backend', '/icons/breakpoints_tablet_wide'); ?><div class="tooltip">Tablet Wide</div></a></li>
				<li><a class="customize-breakpoint sm" data-customize-breakpoint="sm"><?php echo get_svg('backend', '/icons/breakpoints_tablet_portrait'); ?><div class="tooltip">Tablet Portrait</div></a></li>
				<li><a class="customize-breakpoint xs" data-customize-breakpoint="xs"><?php echo get_svg('backend', '/icons/breakpoints_mobile'); ?><div class="tooltip">Mobile</div></a></li>
			</ul>
		</div>
	</div>
	<!-- customize breakpoints dropdown -->
</script>
<!-- unsaved changes -->
<script id="admin-unsaved-changes" type="text/template">
	<div id="semplice-exit" class="popup">
		<div class="popup-inner">
			<div class="popup-content">
				<div class="important">
					<?php echo get_svg('backend', '/icons/popup_important'); ?>
				</div>
				<h3>Unsaved Changes</h3>
				<p>Do you want to save your progress before continuing?</p>
			</div>
			<div class="popup-footer">
				<a class="admin-click-handler cancel" data-handler="execute" data-action-type="helper" data-action="triggerHashchange">Don't Save</a>
				<a class="admin-click-handler confirm semplice-button" data-handler="execute" data-action-type="{{type}}" data-action="save" data-customize-setting="{{setting}}" data-settings-setting="{{setting}}" data-hashchange="yes">Save &amp; continue</a>
			</div>					
		</div>
	</div>
</script>
<!-- grid template -->
<script id="grid-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-content">
			{{content}}
		</div>
	</div>
</script>
<!-- typography -->
<script id="typography-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-heading">
			<div class="inner typography-inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<h2 class="admin-title">Typography</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content typography-inner">
			<div class="typography">
				{{content}}
			</div>
		</div>
	</div>
</script>
<!-- custom styles element select -->
<script id="custom-styles-type-template" type="text/template">
	<div class="cs-type-select">
		<div class="type-select-inner">
			<h3>Inline or Block?</h3>
			<div class="buttons">
				<div class="cs-type-selection" data-type="inline">
					<p class="cs-element">Inline</p>
					<p class="cs-element-desc">Your style is only applied to your active text selection.</p>
				</div>
				<div class="cs-type-selection" data-type="block">
					<p class="cs-element">Block</p>
					<p class="cs-element-desc">You style is applied to the complete text block of your selection.</p>
				</div>
			</div>
		</div>
	</div>
</script>
<!-- thumb hover-->
<script id="thumbhover-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-heading">
			<div class="inner thumbhover-inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<h2 class="admin-title">Thumb Hover</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content thumbhover-inner">
			<p class="note">Create your global portfolio thumbnail hover below (will apply to each thumbnail).<br />Of course, you can also create a custom hover for each individual project. <a href="https://vimeo.com/211601701/96fec1ea40" target="_blank">Watch the video tutorial</a>.</p>
			<div class="thumb-hover-preview">
				{{content}}
			</div>
		</div>
	</div>
</script>
<!-- project nav -->
<script id="projectnav-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-heading">
			<div class="inner projectnav-inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<h2 class="admin-title">Project Nav</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content projectnav-preview">
			<p class="note">Below you can customize your project nav design.<br />The project nav will be visible within the footer of your page.<br />Only published projects will be displayed in the project nav.</p>
			<div class="project-nav-preview" data-breakpoint="xl">
				{{content}}
			</div>
		</div>
	</div>
</script>
<!-- transitions-->
<script id="transitions-template" type="text/template">
	<div class="transitions-preview no-transition">
		<div class="out tp-visible">
			<div class="admin-container">
				<div class="admin-row">
					<div class="admin-column content" data-xl-width="12">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/admin/transitions/text_out.svg'; ?>" alt="text out">
					</div>
				</div>
			</div>
		</div>
		<div class="in tp-not-visible transition-hidden">
			<div class="admin-container">
				<div class="admin-row">
					<div class="admin-column content" data-xl-width="12">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/admin/transitions/text_in.svg'; ?>" alt="text out">
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
<!-- blog-->
<script id="blog-template" type="text/template">
	<?php
		$reset_template = '
			<div class="reset-success">
				<div class="reset-success-inner">
					<div class="icon">' . get_svg('backend', '/icons/save_checkmark') . '</div>
					<div class="message">Successful reset</div>
				</div>
			</div>
		';
	?>
	<div class="customize-inner" data-blog-templates="{{templates}}">
		<div class="customize-heading">
			<div class="inner blog-inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<div class="blog-back hide-blog-options"><?php echo get_svg('backend', '/icons/ep_back_arrow'); ?></div><h2 class="admin-title">Blog</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content blog-content">
			<div class="blog-content-inner">
				<p class="note">You can use our content editor to create your own<br />design for the blog templates or you can just customize<br />the default WordPress blog templates. <a href="https://help.semplice.com/hc/en-us/articles/4418838557972" target="_blank" class="blog-note">Read our guide!</a></p>
				<div class="divider"></div>
				<div class="blog-default">
					<div class="blog-switch">
						<div class="option">
							<div class="option-inner">
								<div class="attribute">
									<div class="onoff-switch">
										<div class="switch admin-click-handler switch-on" data-handler="onOffSwitch">
											<div class="circle"></div>
											<input type="hidden" name="blog_default" value="on" data-input-type="onoff-switch" class="admin-listen-handler" data-handler="blog" data-on="on" data-off="off" data-unique-name="blog_default">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="label">Use default blog templates</div>
					</div>
					<div class="semplice-button show-blog-options">Customize</div>
				</div>
				<div class="divider blog-custom-divider"></div>
				<div class="blog-custom">
					<div class="blog-switch">
						<div class="option">
							<div class="option-inner">
								<div class="attribute">
									<div class="onoff-switch">
										<div class="switch admin-click-handler switch-off" data-handler="onOffSwitch">
											<div class="circle"></div>
											<input type="hidden" name="blog_custom" value="off" data-input-type="onoff-switch" class="admin-listen-handler" data-handler="blog" data-on="on" data-off="off" data-unique-name="blog_custom">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="label">Design your custom blog templates</div>
					</div>
					<div class="blog-templates">
						<div class="posts admin-container">
							<div class="posts-list posts-view-thumb">
								<div class="posts-top-row admin-row">
									<div class="admin-column" data-xl-width="4"><span class="post-title">Template</span></div>
									<div class="admin-column" data-xl-width="5">Usage</div>
								</div>
								<div class="post admin-row" id="singlepost">
									<div class="post-title admin-column" data-xl-width="4">
										<h2><a class="post-link" href="#edit/singlepost">Single post</a></h2>
									</div>
									<div class="post-date admin-column" data-xl-width="5">Displays a single post</div>
									<div class="post-actions admin-column" data-xl-width="3"><a class="admin-click-handler" data-handler="execute" data-action-type="popup" data-action="resetTemplate" data-template="singlepost">Reset Template</a></div>
									<?php echo $reset_template; ?>
								</div>
								<div class="post admin-row" id="archive">
									<div class="post-title admin-column" data-xl-width="4">
										<h2><a class="post-link" href="#edit/archive">Archive</a></h2>
									</div>
									<div class="post-date admin-column" data-xl-width="5">Displays all posts of a category or tag a user clicked</div>
									<div class="post-actions admin-column" data-xl-width="3"><a class="admin-click-handler" data-handler="execute" data-action-type="popup" data-action="resetTemplate" data-template="archive">Reset Template</a></div>
									<?php echo $reset_template; ?>
								</div>
								<div class="post admin-row" id="searchresults">
									<div class="post-title admin-column" data-xl-width="4">
										<h2><a class="post-link" href="#edit/searchresults">Search results</a></h2>
									</div>
									<div class="post-date admin-column" data-xl-width="5">Displays the search results after user input</div>
									<div class="post-actions admin-column" data-xl-width="3"><a class="admin-click-handler" data-handler="execute" data-action-type="popup" data-action="resetTemplate" data-template="searchresults">Reset Template</a></div>
									<?php echo $reset_template; ?>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div id="content-holder">
				<div class="post-divider search-divider"></div>
			</div>
		</div>
	</div>
</script>
<!-- footer-->
<script id="footer-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-heading">
			<div class="inner footer-inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<h2 class="admin-title">Footer <a class="admin-click-handler semplice-button" data-handler="execute" data-action="addPost" data-action-type="main" data-post-type="footer">Add New Footer</a></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content footer-inner">
			{{content}}
		</div>
	</div>
</script>
<!-- advanced-->
<script id="advanced-customize-template" type="text/template">
	<div class="customize-inner">
		<div class="customize-content">
			<div class="browser-top">
				<div class="dots">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>	
			</div>
			{{content}}
		</div>
	</div>
</script>