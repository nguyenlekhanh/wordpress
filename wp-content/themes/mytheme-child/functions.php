<?php 
require dirname( __FILE__ ) . '/inc/init.php';


function mythemechild_theme_setup() {
    add_image_size( 'product_thumb', 370, 300, false );
}
add_action('init', 'mythemechild_theme_setup', 10);


function remove_default_styles() {
    wp_dequeue_style( 'mytheme-style' );
}
add_action('wp_print_styles', 'remove_default_styles', 10 );


function mythemechild_load_theme_style() {
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
}
add_action('wp_enqueue_scripts', 'mythemechild_load_theme_style', 15 );

//add_submenu_page( string $parent_slug, string $page_title, 
//string $menu_title, string $capability, 
//string $menu_slug, callable $function = '' );

// function my_admin_menu() {
// 	add_menu_page(
// 		__( 'Sample page', 'my-textdomain' ),
// 		__( 'Sample menu', 'my-textdomain' ),
// 		'manage_options',
// 		'sample-page',
// 		'my_admin_page_contents',
// 		'dashicons-schedule',
// 		3
// 	);
// }

// add_action( 'admin_menu', 'my_admin_menu' );


// function my_admin_page_contents() {
// 	?>
// 		<h1>
// 			<!-- <?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?> -->
// 		</h1>
// 	<?php
// }



//  first way to load stylesheet 
// // function load_custom_wp_admin_style($hook) {
// // 	// Load only on ?page=mypluginname
// // 	if( $hook != 'toplevel_page_sample-page' ) {
// // 		 return;
// // 	}
// // 	wp_enqueue_style( 'custom_wp_admin_css', plugins_url('admin-style.css', __FILE__) );
// // }

// // add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

// // get hook name ?page=mypluginname and fill to load_custom_wp_admin_style
// // function load_custom_wp_admin_style( $hook ) {
// // 	wp_die( $hook );
// // }
// // add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


//second way load stylesheet by Register to wordpress first
// function register_my_plugin_styles() {
// 	wp_register_style( 'my-plugin', plugins_url( 'my-plugin/css/plugin.css' ) );
// }

// // Register style sheet.

// add_action( 'admin_enqueue_scripts', 'register_my_plugin_styles' );


// function load_custom_wp_admin_style($hook) {

// 	// Load only on ?page=mypluginname

// 	if( $hook != 'toplevel_page_sample-page' ) {
// 		return;
// 	}

// 	// Load style

// 	wp_enqueue_style( 'my-plugin' );
// }

// add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );




// function register_my_plugin_scripts() {
// 	wp_register_script( 'my-plugin', get_stylesheet_directory_uri() . '/plugin-scripts.js', array( 'jquery' ) );
// }



// // Register style sheet.

// add_action( 'admin_enqueue_scripts', 'register_my_plugin_scripts' );


// function load_custom_wp_admin_scripts($hook) {

// 	// Load only on ?page=mypluginname
// 	if($hook != 'toplevel_page_mypluginname') {
// 		return;
// 	}

// 	// Load style
// 	wp_enqueue_script( 'my-plugin' );

// }

// add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_scripts' );