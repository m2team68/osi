<?php

/**
 * We print the scripts and styles in the frontend
 */


add_action( 'wp_enqueue_scripts', 'jonny_style_scripts', 500 );


/**
 *
 */
function jonny_style_scripts() {
	global $post, $jonny_class, $wp_query;


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.css" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css" );
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . "/css/ionicons.min.css" );
	wp_enqueue_style( 'linearicons', get_template_directory_uri() . "/css/linearicons.css" );
	wp_enqueue_style( 'jquery-fullPage', get_template_directory_uri() . "/css/jquery.fullPage.css" );
	wp_enqueue_style( 'jquery-pagepiling', get_template_directory_uri() . "/css/jquery.pagepiling.css" );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . "/css/owl.carousel.css" );
	wp_enqueue_style( 'jonny-main-style', get_template_directory_uri() . "/css/style.css" );


	if (  function_exists( 'jonny_enqueue_url_base_style' ) && jonny_enqueue_url_base_style() == true ) {
		wp_enqueue_style( 'jonny_style_new', jonny_enqueue_url_base_style() );
	}


	if ( is_customize_preview() && function_exists( 'jonny_css_generator_custumize' ) ) {
		wp_add_inline_style( 'jonny-main-style', jonny_css_generator_custumize() );
		wp_add_inline_style( 'jonny_style_new', jonny_css_generator_custumize() );
	}


	wp_enqueue_style( 'jonny-style-wp', get_stylesheet_directory_uri() . '/style.css' );


	//************************************* Fonts ***********************************************/

	wp_enqueue_style( 'kons-google-fonts', $jonny_class->jonny_google_fonts_url( 'Playfair+Display:400,400i,700,700i|Poppins:400,500,600,700' ) );
	/*---------------------------------------- JS --------------------------------------------------------------------------*/
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(
		'jquery',
		'imagesloaded'
	), '1', true );

	if ( get_theme_mod( 'jonny_performans_scrollE', false ) ) {
		wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '1', true );
	}

	wp_enqueue_script( 'jquery-validate-min', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jonny-jquery-pagepiling', get_template_directory_uri() . '/js/jquery.pagepiling.js"', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jonny-main', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1', true );


	// new js object
	$affix = '';
	if ( get_theme_mod( 'jonny_performans_affix', true ) != false ) {
		$affix = get_theme_mod( 'jonny_performans_affix', 'true' );
	}

	$terms = '';
	if ( is_tax( 'portfolio_categories' ) ) {
		$term = get_the_terms( get_the_ID(), 'portfolio_categories' );
		$terms = $term[0]->term_id;
	}

	$args_obj = array(

		'ajaxurl' => esc_url( admin_url( 'admin-ajax.php' ) ),
		'theme_url' => esc_url( get_template_directory_uri() ),
		'tag' => '',
		'terms' => $terms,
		'year' => '',
		'monthnum' => '',
		'day' => '',
		's' => '',
		'type' => '',
		'max_num_pages' => esc_html( $wp_query->max_num_pages ),
		'affix' => $affix,
	);

	if ( isset( $wp_query->query['year'] ) && !empty( $wp_query->query['year'] ) ) {
		$args_obj['year'] = esc_html( $wp_query->query['year'] );
	}
	if ( isset( $wp_query->query['monthnum'] ) && !empty( $wp_query->query['monthnum'] ) ) {
		$args_obj['monthnum'] = esc_html( $wp_query->query['monthnum'] );
	}

	if ( isset( $wp_query->query['day'] ) && !empty( $wp_query->query['day'] ) ) {
		$args_obj['day'] = esc_html( $wp_query->query['day'] );
	}
	$s = get_search_query();
	if ( isset( $_GET['s']{1} ) ) {
		$args_obj['s'] = esc_html( $_GET['s'] );
	}

	// get cat id
	$jonny_cat = 0;
	$jonny_category = get_category( get_query_var( 'cat' ) );
	if ( isset( $jonny_category->cat_ID ) ) {
		$jonny_cat = $jonny_category->cat_ID;
	} else {
		$jonny_cat = 0;
	}

	if ( is_front_page() ) { // is the index page cat = 0
		$args_obj['cat'] = 0;
	} else {
		if ( get_the_category() ) {
			$args_obj['cat'] = sanitize_text_field( $jonny_cat );
		}

	}

	if ( isset( $wp_query->query['tag'] ) && !empty( $wp_query->query['tag'] ) ) {
		$args_obj['tag'] = sanitize_text_field( $wp_query->query['tag'] );
	}

	$type = $jonny_class->jonny_get_blog_type();

	$args_obj['type'] = $type;

	wp_localize_script( 'jonny-main', 'jonny_obj', $args_obj );

	wp_enqueue_script( 'comment-reply' );


}


/**
 * init admin scripts and style
 */
function jonny_style_scripts_admin() {

	wp_enqueue_style( 'jonny_admins', get_template_directory_uri() . '/css/admins.css' );
	wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/css/linearicons.css' );
	wp_enqueue_style( 'jonny-ionicons', get_template_directory_uri() . '/css/ionicons.min.css' );
	wp_enqueue_script( 'jonny-admins', get_template_directory_uri() . '/js/admin/admin.js', array( 'jquery' ), '1', true );
	wp_localize_script( 'jonny-admins', 'jonny_admin_obj',
		array(
			'version' => sanitize_text_field( esc_html( get_bloginfo( "version" ) ) )
		)
	);
	$T = get_the_tags();
}

add_action( 'admin_enqueue_scripts', 'jonny_style_scripts_admin' );




