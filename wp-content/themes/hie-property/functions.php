<?php
function enqueue_property_styles() {

    $parent_style = 'hudson-industrial-equities-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
    wp_enqueue_style( 'property-style', get_stylesheet_directory_uri() . '/css/property.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_property_styles' );


add_action('after_setup_theme', 'wp_kill_parent_post');

function wp_kill_parent_post() {
	remove_action('init', 'create_post_type');
}

function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_stylesheet_directory_uri() . '/js/my-script.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}
 
function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

// if (isset($_GET['page']) && $_GET['page'] == '?page=functions') {
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
// }

//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_menu_page('Global Fields', 'Global Fields', 'moderate_comments', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<style>
	.wrap input[type="text"],
	.wrap textarea {
		width: 400px;
		height: 44px;
	}
	.wrap input[type="color"] {
		height: 44px;
		width: 44px;
	}
	.wrap input[type="submit"] {
		padding: 2rem;
	}
	.wrap .logo-preview-holder {
		width: 50px;
		height: 50px;
		position: relative;
		top: 20px;
		display: inline-block;
		background: white;
		border: 1px solid lightgray;
		padding: 3px;
	}
	.wrap img.logo-preview {
		height: auto;
		width: 100%;
	}
	.wrap .logo-label {
	}
	.wrap #upload_image_button {
		height: 44px;
		/*border: none;*/
		padding: 10px;
	}
	</style>
	<div class='wrap'>
	<h2>Global Fields</h2>
	<p>Edit the values in the header &amp; footer of the site globally (not specific to a single page). <br>If left blank, these will not show up in header or footer.</p>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<label class="logo-label" for="upload_image">
		<?php if ( get_option('upload_image') ): ?>
			<div class="logo-preview-holder">
				<img class="logo-preview" src="<?php echo get_option('upload_image'); ?>" />
			</div>
		<?php endif; ?>
		<input id="upload_image" type="text" size="36" name="upload_image" value="<?php echo get_option('upload_image'); ?>" />
		<input id="upload_image_button" type="button" value="Upload Image" />
	</label>
	<p>Enter an URL or upload an image for the banner.</p>

	<p><strong>Branding Color</strong><br />
	<input type="color" name="global_company_color" value="<?php echo get_option('global_company_color'); ?>"/><span style="position: relative; top: -8px; margin-left: 4px;">Select the color to be used in header & throughout the site.</span>
	</p>

	<p><strong>Logo Style</strong><br />
	<select name="global_logo_style">
		<option value="round" <?php if (get_option('global_logo_style') === 'round') { echo "selected='selected'"; } ?>>Round</option>
		<option value="rect" <?php if (get_option('global_logo_style') === 'rect') { echo "selected='selected'"; } ?>>Rectangle</option>
	</select>
	</p>

	<p><strong>Accent Color</strong><br />
	<input type="color" name="global_accent_color" value="<?php echo get_option('global_accent_color'); ?>"/><span style="position: relative; top: -8px; margin-left: 4px;">Select the color to be used for the Call Now CTA.</span>
	</p>
	
	<p><strong>Company Phone</strong><br />
	<input type="text" name="global_company_phone" value="<?php echo get_option('global_company_phone'); ?>" /></p>

	<p><strong>Company Fax</strong><br />
	<input type="text" name="global_company_fax" value="<?php echo get_option('global_company_fax'); ?>" /></p>

	<p><strong>Google Analytics Code</strong><br />
	<textarea name="global_google_analytics"><?php echo get_option('global_google_analytics'); ?></textarea>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="global_company_phone, global_company_fax, global_company_color, global_accent_color, global_logo_style, upload_image, global_google_analytics" />

	</form>
	</div>
	<?php
}


?>