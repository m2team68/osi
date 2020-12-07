<?php
function custom_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery3',get_theme_file_uri('assets/js/jquery.min.js'));
    wp_enqueue_script('bootstrap',get_theme_file_uri('assets/js/bootstrap/bootstrap.min.js'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap/bootstrap.min.css'));
//    wp_enqueue_script('fullpage',get_theme_file_uri('assets/js/fullpage/fullpage.min.js'));
//    wp_enqueue_style('fullpage', get_theme_file_uri('assets/css/fullpage/fullpage.min.css'));
//    wp_enqueue_script('greenshock',get_theme_file_uri('assets/js/greenshock/gsap.min.js'));
//    wp_enqueue_script('greenshock_ScrollTrigger',get_theme_file_uri('assets/js/greenshock/ScrollTrigger.min.js'));
//    wp_enqueue_script('greenshock_ScrollToPlugin',get_theme_file_uri('assets/js/greenshock/ScrollToPlugin.min.js'));
    wp_enqueue_script('scrollify',get_theme_file_uri('assets/js/jquery.scrollify.js'));
	wp_enqueue_style('font-impact', get_theme_file_uri('assets/fonts/impact/impact.ttf'), array(), null);
	wp_enqueue_style('font-modeco', get_theme_file_uri('assets/fonts/modeco/ModecoTrial-Regular.otf'), array(), null);
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

function my_style_loader_tag_filter($html, $handle) {

	if($handle === 'font-impact') {
		return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/ttf' crossorigin='anonymous'", $html);
	}
	if($handle === 'font-modeco') {
		return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/otf' crossorigin='anonymous'", $html);
	}

	return $html;

}

add_filter('style_loader_tag', 'my_style_loader_tag_filter', 10, 2);

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function mytheme_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-text-domain' ),
        'footer' => __( 'Footer Menu', 'your-text-domain' )
    ));
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );

function mytheme_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Main Sidebar', 'your-text-domain' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');