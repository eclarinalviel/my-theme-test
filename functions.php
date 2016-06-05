 <?php
function mytheme_script_enqueue() {
	// CSS
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/mytheme.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	// JS
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/mytheme.js', array(), true );
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
}
add_action( 'wp_enqueue_scripts', 'mytheme_script_enqueue' );

// Activate Menus
function mytheme_theme_setup() {
	add_theme_support( 'menus' );
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}
add_action( 'init', 'mytheme_theme_setup' );
// Theme Support function
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));
add_theme_support('html5',array('search-form','comment-form')); //activate html5 support
// Sidebar function
function mytheme_widget_setup(){
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_widget' => '<h1 class="widget-title">',
			'before_widget' => '</h1>',
			)
		);
}
add_action( 'widgets_init','mytheme_widget_setup' );
// internalization
add_action('after_setup_theme', 'mytheme_language_setup');
function mytheme_language_setup(){
    load_theme_textdomain('mytheme_setup', get_template_directory() . '/languages');
}
//shortcodes
function show_current_year(){
    return date('Y');
}
add_shortcode('year', 'show_current_year');

function button_shortcode() {
    return '<a href="http://twitter.com/vieclarinalxiv" class="btn btn-info">Twitter</a>"';
}
add_shortcode('button', 'button_shortcode'); 

//settings 
function theme_settings_page(){
	  ?>
	    <div class="wrap">
	    <h1>Theme Settings</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");


function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}
function display_address()
{
	?>
    	<input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
    <?php
}
function display_contact_number()
{
	?>
    	<input type="text" name="contact" id="contact" value="<?php echo get_option('contact'); ?>" />
    <?php
}
function display_email()
{
	?>
    	<input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}


function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
	add_settings_field("address", "Address", "display_address", "theme-options", "section");
    add_settings_field("contact", "Contact Number", "display_contact_number", "theme-options", "section");
     add_settings_field("email", "Email Adress", "display_email", "theme-options", "section");
   
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "address");
    register_setting("section", "contact");
    register_setting("section", "email");
}

add_action("admin_init", "display_theme_panel_fields");
//Read More - Replaces the excerpt "Read More" text by a link
function custom_excerpt_length( $length ) {
    return 50; // You can change the number here as per your need.
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Make the “read more” string link to the post
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?> 
