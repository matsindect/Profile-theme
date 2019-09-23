<?php
If (!current_user_can('manage-options')){
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('post-formats', array('aside', 'gallery', 'video','image'));
	add_theme_support('title-tag');
	add_theme_support('menus');
}

register_nav_menus(
	
	array(
		'header_menu' => 'Header Menu'
	)
);

function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function eCommerce_scripts_enqueue (){
	// Load stylesheets
	wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap-3.3.7.min.css', array(), '4.9.8', 'all');
	wp_register_style('bootstrapmini', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '4.9.8', 'all');
	wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome-4.7.min.css', array(), '4.9.8', 'all');
	wp_register_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '4.9.8', 'all');
	wp_register_style('style-main', get_template_directory_uri().'/style.css', array(), '4.9.8', 'all');
	wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '4.9.8', 'all');
	// enqueue stylesheets
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrapmini');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('owl-carousel');
	wp_enqueue_style('style-main');
	wp_enqueue_style('responsive');
	// Load Scripts
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '', true);
	wp_enqueue_script('bootstrapminijs', get_template_directory_uri().'/assets/js/bootstrap-3.3.7.min.js', array(), '', true );
	

}
add_action('wp_enqueue_scripts', 'eCommerce_scripts_enqueue');

?>