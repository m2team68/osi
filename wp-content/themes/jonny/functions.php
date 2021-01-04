<?php

require_once "MiCus/VC_custom.php";

/**
 * Class jonny
 */
add_editor_style( get_template_directory_uri() . '/editor-style.css' );



class jonny_class {
	public function __construct() {
		// Include required files
		$this->jonny_includes();
		/**
		 * Hooks
		 */
		add_action( 'after_setup_theme', array( $this, 'jonny_crucial_setup' ) );

		// widgets
		add_action( 'widgets_init', array( $this, 'jonny_arphabet_widgets_init' ) );
		//theme support
		$this->jonny_theme_support_setting();

	}


	/**
	 * theme support setting
	 */
	function jonny_theme_support_setting() {
		add_editor_style( 'editor-styles.css' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'custom-background' );
		add_theme_support( "title-tag" );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( "custom-header", array() );
		add_theme_support( 'post-thumbnails' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'title-tag' );
		set_post_thumbnail_size( 849, 450, true );


		add_image_size( "jonny-image-70x70-croped", 70, 70, true );
		add_image_size( "jonny-image-100x100-croped", 100, 100, true );
		add_image_size( "jonny-image-324x216-croped", 324, 216, true );
		add_image_size( "jonny-image-760x390-croped", 760, 390, true );
		add_image_size( "jonny-image-540x670-croped", 540, 670, true );
		add_image_size( "jonny-image-370x420-croped", 370, 420, true );
		add_image_size( "jonny-image-360x240-croped", 360, 240, true );
		add_image_size( "jonny-image-637x465-croped", 637, 465, true );
		add_image_size( "jonny-image-637x930-croped", 637, 930, true );
		add_image_size( "jonny-image-637x960-croped", 637, 960, true );
		add_image_size( "jonny-image-170x57-croped", 170, 57, true );


		register_nav_menus(
			array(
				'jonny_main' => esc_html__( 'Main menu', 'jonny' ),

			) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'video',
			'gallery'
		) );


	}

	/**
	 * require files and function
	 */
	function jonny_includes() {
		//# Part 1. Includes

		require get_template_directory() . '/assets/customizer.php';
		require get_template_directory() . '/assets/style_scripts.php';
		require get_template_directory() . '/assets/tgm.php';
		require get_template_directory() . '/assets/ajax_comment.php';
		require get_template_directory() . '/assets/loadmore.php';
		require get_template_directory() . '/assets/menu.php';


	}

	/************************************************************
	 *                           Hooks Action
	 ************************************************************/
	function jonny_crucial_setup() {
		load_theme_textdomain( 'jonny', get_template_directory() . '/languages' );

	}


	/**
	 *
	 */
	function jonny_arphabet_widgets_init() {
		register_sidebar( array(
			'name' => esc_html__( 'jonny blog sidebar', 'jonny' ),
			'id' => 'jonny_sidebar',
			'before_widget' => '<div id="%1$s" class="widget   %2$s">',
			'after_widget' => '</div>',
			'description' => esc_html__( 'blog sidebar', 'jonny' ),
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );


	}



	/**
	 *
	 * /************************************************************
	 *                          Metods
	 ************************************************************/


	/**
	 * @return string
	 */
	function jonny_container_class() {
		$mod = get_theme_mod( "site_Identity_layout", 's2' );
		if ( $mod == "s2" ) {
			return "container-fluid container-fluid_pad_off";
		}
		return "container";
	}

	function jonny_my_theme_add_editor_styles() {
		add_editor_style( 'editor_styles.css' );
	}
	/****************************************************
	 *                  Helper methods
	 * **************************************************
	 */


	/**
	 * Prepares correct the url to google font
	 * @param $fonts_param
	 * @return string url google fonts
	 */
	function jonny_google_fonts_url( $fonts_param ) {
		$font_url = '';
		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'jonny' ) ) {
			$font_url = add_query_arg( 'family', urlencode( $fonts_param ), "//fonts.googleapis.com/css" );
		}
		$font_url = str_replace( '%2B', '+', $font_url );
		return $font_url;
	}

	/**
	 * return blog type
	 * @return string
	 */
	function jonny_get_blog_type() {
		$res = get_theme_mod( 'jonny_blog_list_type_blog', 'default' );
		if ( isset( $_GET['showas']{1} ) ) {
			$arr = array( 'default', 'col2', 'col3', 'col1' );
			if ( in_array( $_GET['showas'], $arr ) ) {
				return sanitize_text_field( $_GET['showas'] );
			}

		}


		return $res;
	}


	/**
	 * @param string $before
	 * @param string $after
	 * @param bool|true $echo
	 * @param array $args
	 * @param null $wp_query
	 * @return int|string pagination in categorias
	 */
	function jonny_pagenavi( $max_page = false, $before = '', $after = '', $echo = true, $args = array(), $wp_query = null ) {
		if ( !$wp_query ) {
			global $wp_query;
		}

		// the default settings
		$default_args = array(
			'text_num_page' => '',
			// Text before pagination. {current} - current; {last} - last (pr. 'Page {current} of {last}' get 'Page 4 of 60 ")
			'num_pages' => 10,
			// how many links to display
			'step_link' => 10,
			// Links increments (value - the number, the step size (at. 1,2,3 ... 10,20,30). Put 0 if such references are not needed.
			'dotright_text' => '',
			// intermediate text "to".
			'dotright_text2' => '',
			//intermediate text "after."
			'back_text' => '<i class="fa fa-angle-double-left"></i> ' . esc_html__( 'Previous', 'jonny' ),
			// text "go to the previous page." Put 0 if this reference is not needed
			'next_text' => esc_html__( 'Next', 'jonny' ) . ' <i class="fa fa-angle-double-right"></i>',
			// text "go to the next page." Put 0 if this reference is not needed.
			'first_page_text' => 0,
			// text "to the first page." Put 0 if instead of text you need to show a page number.
			'last_page_text' => 0,
			// text "to the last page." Put 0 if instead of text you need to show a page number.
		);

		$default_args = apply_filters( 'jonny_pagenavi_args', $default_args ); //to be able to establish their default values

		$args = array_merge( $default_args, $args );

		extract( $args );

		$posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
		$paged = (int) $wp_query->query_vars['paged'];
		if ( $max_page == false ) {
			$max_page = $wp_query->max_num_pages;
		}

		//check the need for navigation
		if ( $max_page <= 1 ) {
			return false;
		}

		if ( empty( $paged ) || $paged == 0 ) {
			$paged = 1;
		}

		$pages_to_show = intval( $num_pages );
		$pages_to_show_minus_1 = $pages_to_show - 1;

		$half_page_start = floor( $pages_to_show_minus_1 / 2 ); // how many links to the current page
		$half_page_end = ceil( $pages_to_show_minus_1 / 2 ); // how many links after current page

		$start_page = $paged - $half_page_start; //first page
		$end_page = $paged + $half_page_end; // the last page (conditionally)

		if ( $start_page <= 0 ) {
			$start_page = 1;
		}
		if ( ( $end_page - $start_page ) != $pages_to_show_minus_1 ) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if ( $end_page > $max_page ) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = (int) $max_page;
		}

		if ( $start_page <= 0 ) {
			$start_page = 1;
		}

		// display navigation
		$out = '';

		// Create a base to cause get_pagenum_link once
		$link_base = str_replace( 99999999, '___', get_pagenum_link( 99999999 ) );
		$first_url = get_pagenum_link( 1 );
		if ( false === strpos( $first_url, '?' ) ) {
			$first_url = user_trailingslashit( $first_url );
		}

		$out .= $before . "<ul class='pagination'>\n";

		if ( $text_num_page ) {
			$text_num_page = preg_replace( '!{current}|{last}!', '%s', $text_num_page );
			$out .= sprintf( "<li><span class='pages'>$text_num_page</span></li> ", $paged, $max_page );
		}


		// ago
		if ( $back_text && $paged != 1 ) {
			$out .= '<li><a class="prev" href="' . ( ( $paged - 1 ) == 1 ? $first_url : str_replace( '___', ( $paged - 1 ), $link_base ) ) . '">' . $back_text . '</a></li> ';
		} else {
			$out .= '<li class="disabled"><a>' . $back_text . '</a></li> ';

		}
		// to the begining
		if ( $start_page >= 2 && $pages_to_show < $max_page ) {
			$out .= '<li><a class="first" href="' . esc_url( $first_url ) . '">' . wp_kses_post( $first_page_text ? $first_page_text : 1 ) . '</a></li> ';
			if ( $dotright_text && $start_page != 2 ) {
				$out .= '<li><span class="extend">' . wp_kses_post( $dotright_text ) . '</span> </li>';
			}
		}
		// pagination
		for ( $i = $start_page; $i <= $end_page; $i ++ ) {
			if ( $i == $paged ) {
				$out .= '<li class="active">' . '<a href="#">' . $i . ' <span class="sr-only">(current)</span></a>' . '</li> ';
			} elseif ( $i == 1 ) {
				$out .= '<li><a href="' . esc_url( $first_url ) . '">1</li></a> ';
			} else {
				$out .= '<li><a href="' . esc_url( str_replace( '___', $i, $link_base ) ) . '">' . wp_kses_post( $i ) . '</a></li> ';
			}
		}


		// links increments
		$dd = 0;
		if ( $step_link && $end_page < $max_page ) {
			for ( $i = $end_page + 1; $i <= $max_page; $i ++ ) {
				if ( $i % $step_link == 0 && $i !== $num_pages ) {
					if ( ++ $dd == 1 ) {
						$out .= '<span class="extend">' . $dotright_text2 . '</span> ';
					}
					$out .= '<li><a href="' . str_replace( '___', $i, $link_base ) . '">' . $i . '</a></li> ';
				}
			}
		}

		// In the end
		if ( $end_page < $max_page ) {
			if ( $dotright_text && $end_page != ( $max_page - 1 ) ) {
				$out .= '<span class="extend">' . $dotright_text2 . '</span> ';
			}
			$out .= '<li><a class="last" href="' . str_replace( '___', $max_page, $link_base ) . '">' . ( $last_page_text ? $last_page_text : $max_page ) . '</a></li> ';
		}
		// forward
		if ( $next_text && $paged != $end_page ) {
			$out .= '<li><a class="next" href="' . str_replace( '___', ( $paged + 1 ), $link_base ) . '">' . $next_text . '</a></li> ';
		} else {
			$out .= '<li class="disabled"><a class="next" href="' . '">' . $next_text . '</a> </li>';

		}

		$out .= "</ul>" . $after . "\n";

		$out = apply_filters( 'kama_pagenavi', $out );

		if ( $echo ) {
			return print $out;
		}

		return $out;
	}


}

$GLOBALS['jonny_class'] = new jonny_class();

/**
 * @return mixed
 */
function jonny_get_global_class() {
	global $jonny_class;
	return $jonny_class;
}

add_filter( 'get_the_excerpt', 'jonny_exc', 90 );

/**
 * carves out a brief description of shortcodes
 * @param $param
 * @return mixed
 */
function jonny_exc( $param ) {
	$param = preg_replace( "/\[.*?\].*?\[\/.*?\]/", "", $param );
	$param = preg_replace( "/<.*?>/", "", $param );
	return $param;
}

/**
 * @param bool $path
 * @param bool $is_page
 * @return mixed
 */
function jonny_newBasename( $path = false, $is_page = false ) {
	if ( $path == false && $is_page = false ) {
		$path = get_page_template();
	}
	if ( $path == false && $is_page = true && is_page() ) {
		$path = get_page_template();
	}
	$path = str_replace( '\\', '/', $path );
	$path_array = explode( '/', $path );
	return array_pop( $path_array );
}

/*
 * coments pagination
 */
function jonny_wp_comments_corenavi() {
	$pages = '';
	$max = get_comment_pages_count();
	$page = get_query_var( 'cpage' );
	if ( !$page ) {
		$page = 1;
	}
	$a['current'] = $page;
	$a['echo'] = false;
	$total = 0; //1 - display text "Page N of N", 0 - not to withdraw
	$a['mid_size'] = 3; // how many links to display on the left and right of the current
	$a['end_size'] = 1; // how many links to show the beginning and the end
	$a['prev_text'] = '&laquo;'; // link text "Previous"
	$a['next_text'] = '&raquo;'; // link text "Next page"
	if ( $max > 1 ) {
		echo '<div class="commentNavigation">';
	}
	echo esc_attr( $pages ) . paginate_comments_links( $a );
	if ( $max > 1 ) {
		echo '</div>';
	}
}


/**
 * post pagination
 * @return string
 */
function jonny_link_pages() {
	/* ================ Settings ================ */
	$text_num_page = ''; // The text for the number of pages. {current} is replaced by the current, and {last} the last. Example: "Page {current} of {last} '= Page 4 of 60
	$num_pages = 10; // how many links to display
	$stepLink = 10; // after the navigation links to specific step (value = the number (a pitch) or '' if you do not need to show). Example: 1,2,3 ... 10,20,30
	$dotright_text = '...';
	$dotright_text2 = '...';
	$backtext = '&#171; ';
	$nexttext = '&raquo;';
	$first_page_text = ''; //  text "to the first page" or put '', instead of the text if you need to show a page number.
	$last_page_text = ''; // text "to the last page 'or write' 'if, instead of the text you need to show a page number.
	/* ================ End Settings ================ */
	global $page, $numpages;
	$paged = (int) $page;
	$max_page = $numpages;
	if ( $max_page <= 1 ) {
		return false;
	} //check the need for navigation
	if ( empty( $paged ) || $paged == 0 ) {
		$paged = 1;
	}
	$pages_to_show = intval( $num_pages );
	$pages_to_show_minus_1 = $pages_to_show - 1;
	$half_page_start = floor( $pages_to_show_minus_1 / 2 ); //how many links to the current page
	$half_page_end = ceil( $pages_to_show_minus_1 / 2 ); //how many links after current page
	$start_page = $paged - $half_page_start; //first page
	$end_page = $paged + $half_page_end; //last page (conditionally)
	if ( $start_page <= 0 ) {
		$start_page = 1;
	}
	if ( ( $end_page - $start_page ) != $pages_to_show_minus_1 ) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if ( $end_page > $max_page ) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = (int) $max_page;
	}
	if ( $start_page <= 0 ) {
		$start_page = 1;
	}
	$out = '';
	$out .= "<ul class='pagination'>\n";
	if ( $text_num_page ) {
		$text_num_page = preg_replace( '!{current}|{last}!', '%s', $text_num_page );
		$out .= sprintf( " <li class=\"active\"><a href=\"#\"><span class='sr-only'>$text_num_page</span></a></li>", $paged, $max_page );
	}
	if ( $backtext && $paged != 1 ) {
		$out .= '<li>' . _wp_link_page( ( $paged - 1 ) ) . $backtext . '</a>';
	}
	if ( $start_page >= 2 && $pages_to_show < $max_page ) {
		$out .= _wp_link_page( 1 ) . ( $first_page_text ? $first_page_text : 1 ) . '</a>';
		if ( $dotright_text && $start_page != 2 ) {
			$out .= '<span class="extend">' . $dotright_text . '</span>';
		}
	}
	for ( $i = $start_page; $i <= $end_page; $i ++ ) {
		if ( $i == $paged ) {
			$out .= '<li class="active"><a href="#">' . $i . ' <span class="sr-only"></span></a></li>
';
		} else {
			$out .= '<li><a href="' . _wp_link_page( $i ) . '">' . $i . '</a></li>';
		}
	}
	//Links increments
	if ( $stepLink && $end_page < $max_page ) {
		for ( $i = $end_page + 1; $i <= $max_page; $i ++ ) {
			if ( $i % $stepLink == 0 && $i !== $num_pages ) {
				if ( ++ $dd == 1 ) {
					$out .= '<span class="extend">' . $dotright_text2 . '</span>';
				}
				$out .= '<li><a href="' . _wp_link_page( $i ) . '">' . $i . '</a></li>';
			}
		}
	}
	if ( $end_page < $max_page ) {
		if ( $dotright_text && $end_page != ( $max_page - 1 ) ) {
			$out .= '<span class="extend">' . $dotright_text2 . '</span>';
		}
		$out .= '<li>' . _wp_link_page( $max_page ) . ( $last_page_text ? $last_page_text : $max_page ) . '</a></li>';
	}
	if ( $nexttext && $paged != $end_page ) {
		$out .= '<li>' . _wp_link_page( ( $paged + 1 ) ) . $nexttext . '</a></li>';
	}
	$out .= "</ul>";
	$out = str_replace( '"<a href="', '"', $out );
	$out = str_replace( '">">', '">', $out );

	return wp_kses_post( $out );
}


if ( !isset( $content_width ) ) {
	$content_width = 1170;
}




if ( !function_exists( 'jonny_post_gallery_slide' ) ) :


	/**
	 * its diplay gallery in posts
	 * @param bool $cut
	 * @param int $width
	 * @param int $height
	 */
	function jonny_post_gallery_slide( $cut = false, $width = 848, $height = 566 ) {

		global $jonny_class, $post;


		$gallery = get_post_gallery_images( $post );

		// Make sure the post has a gallery in it

		?>
        <div class="gallery-carousel carousel">
			<?php
			if ( has_post_thumbnail() ) {

				$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
				$feature_src = wp_get_attachment_image_src( $post_thumbnail_id, 'jonny_post' );

				?>
                <div class="gallery-item">
                    <img alt="<?php the_title(); ?>"
                         src=<?php echo esc_url( $feature_src[0] ); ?>>
                </div>
				<?php

			}

			foreach ( $gallery as $image_url ) {

				?>
                <div class="gallery-item">
                    <img alt="<?php the_title(); ?>" src=<?php echo esc_url( ( $image_url ) ); ?>>
                </div>
				<?php


			}
			?>
        </div>
		<?php


	}
endif;


if ( !function_exists( 'jonny_limit_excerpt' ) ) :
	function jonny_limit_excerpt( $limit, $content = null ) {

		if ( empty( $content ) ) {
			$content = preg_replace( "~(?:\[/?)[^/\]]+/?\]~s", '', get_the_excerpt() );
		}
		$out = $content;
		$out = preg_replace( "#\<code\>.*?\<\/code\>#s", '', $out );
		$out = preg_replace( "#<pre>.*?</pre>#im", '', $out );
		$out = preg_replace( "~(?:\[/?)[^/\]]+/?\]~s", '', $out );
		$out = preg_replace( "#\[.*?\]#", '', $out );
		$out = preg_replace( "#\<.*?\>#", '', $out );

		$excerpt = explode( ' ', $content, $limit + 1 );
		if ( count( $excerpt ) >= $limit ) {
			array_pop( $excerpt );
			$excerpt = implode( " ", $excerpt );

		} else {
			$excerpt = implode( " ", $excerpt );

		}
		$excerpt .= '...';
		$excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

		$output = $excerpt;

		return $output;

	}
endif;


if ( !function_exists( 'jonny_words_limit' ) ) :

	function jonny_words_limit() {
		$limit = get_theme_mod( 'jonny_blog_list_limit_word' );

		if ( empty( $limit ) ) {
			return 50;
		}

		return $limit;
	}

endif;


/*
 *  it display lis of post cat
 */
function jonny_get_list_cats() {
	global $post;
	$categories = get_the_category( $post->ID );

	if ( isset( $categories[0]->term_id ) ) {


		?>
		<?php
		$c = count( $categories );
		$i = 1;
		foreach ( $categories as $category ) {

			?>

        <a rel="category tag" class="post-rubric"
           href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?> ">
			<?php echo esc_html( $category->name ); ?></a><?php

			if ( $c != $i ) {
				?>
				<?php
			}
			$i ++;
		}
		?>
		<?php
	}

}


/*
 *  it display lis of post cat
 */
function jonny_get_list_cats_blog() {
	global $post;
	$categories = get_the_category( $post->ID );

	if ( isset( $categories[0]->term_id ) ) {


		?>
		<?php
		$c = count( $categories );
		$i = 1;
		foreach ( $categories as $category ) {

			?>

            <a rel="category tag" class="blog-rubric"
               href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?> ">
				<?php echo esc_html( $category->name ); ?></a>                <?php

			if ( $c != $i ) {
				?>                   ,
				<?php
			}
			$i ++;
		}
		?>
		<?php
	}

}


/**
 * return  dark or light scheme
 * @return string
 */
function jonny_get_tememe_color() {
	$type = get_theme_mod( 'jonny_performans_style', 'dark' );
	if ( isset( $_GET['style'] ) ) {
		$arr = array( 'dark', 'light' );
		if ( in_array( sanitize_text_field( $_GET['style'] ), $arr ) ) {
			$type = sanitize_text_field( $_GET['style'] );
		}
	}
	return $type;
}

add_filter( 'nav_menu_css_class', 'jonny_special_nav_class', 10, 2 );

function jonny_special_nav_class( $classes, $item ) {
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'active ';
	}

	if ( in_array( 'current_page_ancestor', $classes ) ) {
		$classes[] = 'active ';
	}


	if ( in_array( 'current-menu-ancestor', $classes ) ) {
		$classes[] = 'active ';
	}
	return $classes;
}




/**
 * return blog type
 * @return string
 */
function jonny_get_blog_type() {
	$res = get_theme_mod( 'jonny_blog_list_type_blog', 'default' );
	if ( isset( $_GET['showas']{1} ) ) {
		$arr = array( 'default', 'col2', 'col3', 'col1' );
		if ( in_array( $_GET['showas'], $arr ) ) {
			return sanitize_text_field( $_GET['showas'] );
		}

	}


	return $res;
}

function jonny_is_single_project(  ) {
	if ( is_single() || is_page() ) {
		if ( get_post_type( get_the_ID() ) == 'project' ) {
			return true;
		}
	}
	return false;
}

function jonny_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}

add_filter( 'widget_tag_cloud_args', 'jonny_widget_tag_cloud_args' );

/**
 * Visual Composer Functions
 */
require get_template_directory() . '/functions/vc-functions.php';