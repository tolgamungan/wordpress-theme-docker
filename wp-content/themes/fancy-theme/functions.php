<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@900&display=swap');
	wp_enqueue_style( 'GoogleFonts');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');


// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }

// Twitter
function setting_twitter() { ?>
	<input type="url" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function setting_github() { ?>
	<input type="url" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function setting_linkedin() { ?>
	<input type="url" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }


// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}

add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page_setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
    add_settings_field('linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section');

    register_setting('section', 'twitter');
    register_setting('section', 'github');
    register_setting('section', 'linkedin');
}

add_action( 'admin_init', 'custom_settings_page_setup' );


