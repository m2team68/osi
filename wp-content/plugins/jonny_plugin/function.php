<?php


/**
 * function extract colors from style.css
 * @return array
 */
function jonny_get_style_color() {


	global $wp_filesystem;
	$colors = array();
	//the existence check
	if ( empty( $wp_filesystem ) ) {
		require_once( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
	}
	$mycity_upload_dir = wp_upload_dir();
	$mycity_filename   = trailingslashit( $mycity_upload_dir['basedir'] ) . 'main.css';


	if ( $wp_filesystem->exists( $mycity_filename ) ) {
		$con = $wp_filesystem->get_contents( 'mycity_css_php', $mycity_upload_dir["baseurl"] . "/main.css" );
	} else {
		$con = $wp_filesystem->get_contents( get_template_directory() . "/css/style.css" );
	}



	preg_match_all( "/#([A-z0-9]{6,6}?)/", $con, $arr );
	$colors = $arr[1];
	foreach ( $colors as $k => $v ) {
		$colors[ $k ] = strtoupper( $v );
	}

	$colors = array_unique( $colors );

	return $colors;

}

/**
 * return url base style or false
 * @return bool|string
 */
function jonny_enqueue_url_base_style() {
	global $wp_filesystem;
	if ( empty( $wp_filesystem ) ) {
		require_once( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
	}
	$jonny_upload_dir = wp_upload_dir();
	$jonny_filename   = trailingslashit( $jonny_upload_dir['basedir'] ) . 'style.css';
	if ( $wp_filesystem->exists( $jonny_filename ) ) {
		$url = $jonny_upload_dir["baseurl"];

		if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ) { //HTTPS
			$url = str_replace( 'http', 'https', $url );
			$url = str_replace( 'httpss', 'https', $url );
		}
		$url = str_replace(get_home_url('/'),'',$url);
		return $url . "/style.css";
	} else {
		return false;
	}

}





/** Generate one page menu
 * add menu elements
 * @param $items
 * @param $args
 * @return string
 */
function jonny_social_menu_item($items, $args)
{
	$frontpage_id = get_option('page_on_front');
	$post_ID = get_the_ID();
	$newitems = $items;
	$menu_left = '';
	$menu_right = '';

	if (get_option('jonny_one_page_menu') == true && ($args->theme_location == 'jonny_topmenu' || $args->theme_location == 'jonny_main')) {

		if (!is_front_page() && get_option('jonny_one_page_menu_' . $post_ID) == false) {
			$menu_left = get_option('jonny_one_page_menu');
			$menu_left = str_replace('#', get_home_url('/') . '/#', $menu_left);

		} else {


			$menu_left = get_option('jonny_one_page_menu_' . $post_ID);

		}
		if (is_front_page()) {
			$menu_left = get_option('jonny_one_page_menu');
		}


	}

	if (get_option('jonny_one_page_menu_right') == true && ($args->theme_location == 'jonny_topmenu' || $args->theme_location == 'jonny_main')) {


		if (!is_front_page() && get_option('jonny_one_page_menu_right_' . $post_ID) == false) {
			$menu_right = get_option('jonny_one_page_menu_right');;
			$menu_right = str_replace('#', get_home_url('/') . '/#', $menu_right);


		} else {


			$menu_right = get_option('jonny_one_page_menu_right_' . $post_ID);

		}
		if (is_front_page()) {
			$menu_right = get_option('jonny_one_page_menu_right');
		}


	}

	return $menu_left . $items . $menu_right;



}

add_filter('wp_nav_menu_items', 'jonny_social_menu_item', 10, 2);




// translation
add_action( 'jonny-before-menu', 'jonny_before_menu_fn' , 100 );
function jonny_before_menu_fn() {

	?>
    <div class="menu-lang right-boxed">
		<?php if ( function_exists( 'ot_get_option' ) ) {
			echo do_shortcode( ot_get_option( 'jonny_multilanguage' ) );
		} ?>


    </div>
	<?php
}



add_action( 'jonny-after-footer-menu', 'jonny_after_footer_menu_fn' );
function jonny_after_footer_menu_fn() {
	if ( function_exists( 'ot_get_option' ) ) {
		?>
        <div class="menu-lang">
			<?php echo do_shortcode( ot_get_option( 'jonny_multilanguage_footer' ) );
			?>
        </div>
		<?php
	}
}


if ( !function_exists( 'jonny_get_youtube_id' ) ) {

	/**
	 * @param $value
	 * @return mixed|null
	 */
	function jonny_get_youtube_id( $value ) {
		$id = null;
		if ( preg_match( '/youtu.be\/(.*)/', $value, $math ) ) {
			$id = $math[1];
		} elseif ( preg_match( '/youtube.com.*?v=(.*)/', $value, $math ) ) {
			$id = $math[1];
		} else {
			$id = $value;
		}

		$id = str_replace( "http://", '', $id );
		$id = str_replace( "https://", '', $id );
		return $id;
	}
}


/**
 * @param $carry
 * @param $item
 * @return mixed|string
 */
function jonny_video_patern( $carry, $item ) {
	if ( strpos( $item, '#' ) === 0 ) {
		// Assuming '#...#i' regexps.
		$item = substr( $item, 1, - 2 );
	} else {
		// Assuming glob patterns.
		$item = str_replace( '*', '(.+)', $item );
	}
	return $carry ? $carry . ')|(' . $item : $item;
}


if ( !function_exists( 'jonny_theme_oembed_videos' ) ) :

	function jonny_theme_oembed_videos() {


		global $post;
		if ( $post && $post->post_content ) {
			global $shortcode_tags;
			// Make a copy of global shortcode tags - we'll temporarily overwrite it.
			$theme_shortcode_tags = $shortcode_tags;
			// The shortcodes we're interested in.
			$shortcode_tags = apply_filters( 'jonny_vide_embed_tags', array(
				'video' => $theme_shortcode_tags['video'],
				'embed' => $theme_shortcode_tags['embed']
			), $theme_shortcode_tags );
			// Get the absurd shortcode regexp.
			$video_regex = '#' . get_shortcode_regex() . '#i';
			// Restore global shortcode tags.
			$shortcode_tags = $theme_shortcode_tags;
			$pattern_array = array( $video_regex );
			$pattern_array = array_merge( $pattern_array, array_keys( $providers = array(
				'#http://((m|www)\.)?youtube\.com/watch.*#i' => array( 'http://www.youtube.com/oembed', true ),
				'#https://((m|www)\.)?youtube\.com/watch.*#i' => array(
					'http://www.youtube.com/oembed?scheme=https',
					true
				),
				'#http://((m|www)\.)?youtube\.com/playlist.*#i' => array( 'http://www.youtube.com/oembed', true ),
				'#https://((m|www)\.)?youtube\.com/playlist.*#i' => array(
					'http://www.youtube.com/oembed?scheme=https',
					true
				),
				'#http://youtu\.be/.*#i' => array( 'http://www.youtube.com/oembed', true ),
				'#https://youtu\.be/.*#i' => array( 'http://www.youtube.com/oembed?scheme=https', true ),
				'http://blip.tv/*' => array( 'http://blip.tv/oembed/', false ),
				'#https?://(.+\.)?vimeo\.com/.*#i' => array( 'http://vimeo.com/api/oembed.{format}', true ),
				'#https?://(www\.)?dailymotion\.com/.*#i' => array(
					'http://www.dailymotion.com/services/oembed',
					true
				),
				'http://dai.ly/*' => array( 'http://www.dailymotion.com/services/oembed', false ),
				'#https?://(www\.)?flickr\.com/.*#i' => array( 'https://www.flickr.com/services/oembed/', true ),
				'#https?://flic\.kr/.*#i' => array( 'https://www.flickr.com/services/oembed/', true ),
				'#https?://(.+\.)?smugmug\.com/.*#i' => array( 'http://api.smugmug.com/services/oembed/', true ),
				'#https?://(www\.)?hulu\.com/watch/.*#i' => array( 'http://www.hulu.com/api/oembed.{format}', true ),
				'http://i*.photobucket.com/albums/*' => array( 'http://photobucket.com/oembed', false ),
				'http://gi*.photobucket.com/groups/*' => array( 'http://photobucket.com/oembed', false ),
				'#https?://(www\.)?scribd\.com/doc/.*#i' => array( 'http://www.scribd.com/services/oembed', true ),
				'#https?://wordpress.tv/.*#i' => array( 'http://wordpress.tv/oembed/', true ),
				'#https?://(.+\.)?polldaddy\.com/.*#i' => array( 'https://polldaddy.com/oembed/', true ),
				'#https?://poll\.fm/.*#i' => array( 'https://polldaddy.com/oembed/', true ),
				'#https?://(www\.)?funnyordie\.com/videos/.*#i' => array( 'http://www.funnyordie.com/oembed', true ),
				'#https?://(www\.)?twitter\.com/.+?/status(es)?/.*#i' => array(
					'https://api.twitter.com/1/statuses/oembed.{format}',
					true
				),
				'#https?://vine.co/v/.*#i' => array( 'https://vine.co/oembed.{format}', true ),
				'#https?://(www\.)?soundcloud\.com/.*#i' => array( 'http://soundcloud.com/oembed', true ),
				'#https?://(.+?\.)?slideshare\.net/.*#i' => array( 'https://www.slideshare.net/api/oembed/2', true ),
				'#https?://instagr(\.am|am\.com)/p/.*#i' => array( 'https://api.instagram.com/oembed', true ),
				'#https?://(www\.)?rdio\.com/.*#i' => array( 'http://www.rdio.com/api/oembed/', true ),
				'#https?://rd\.io/x/.*#i' => array( 'http://www.rdio.com/api/oembed/', true ),
				'#https?://(open|play)\.spotify\.com/.*#i' => array( 'https://embed.spotify.com/oembed/', true ),
				'#https?://(.+\.)?imgur\.com/.*#i' => array( 'http://api.imgur.com/oembed', true ),
				'#https?://(www\.)?meetu(\.ps|p\.com)/.*#i' => array( 'http://api.meetup.com/oembed', true ),
				'#https?://(www\.)?issuu\.com/.+/docs/.+#i' => array( 'http://issuu.com/oembed_wp', true ),
				'#https?://(www\.)?collegehumor\.com/video/.*#i' => array(
					'http://www.collegehumor.com/oembed.{format}',
					true
				),
				'#https?://(www\.)?mixcloud\.com/.*#i' => array( 'http://www.mixcloud.com/oembed', true ),
				'#https?://(www\.|embed\.)?ted\.com/talks/.*#i' => array(
					'http://www.ted.com/talks/oembed.{format}',
					true
				),
				'#https?://(www\.)?(animoto|video214)\.com/play/.*#i' => array(
					'http://animoto.com/oembeds/create',
					true
				),
				'#https?://(.+)\.tumblr\.com/post/.*#i' => array( 'https://www.tumblr.com/oembed/1.0', true ),
				'#https?://(www\.)?kickstarter\.com/projects/.*#i' => array(
					'https://www.kickstarter.com/services/oembed',
					true
				),
				'#https?://kck\.st/.*#i' => array( 'https://www.kickstarter.com/services/oembed', true ),
				'#https?://cloudup\.com/.*#i' => array( 'https://cloudup.com/oembed', true ),
			) ) );
			// Or all the patterns together.

			$pattern = '#(' . array_reduce( $pattern_array, "jonny_video_patern" ) . ')#is';
			// Simplistic parse of content line by line.
			$lines = explode( "\n", $post->post_content );
			$i = 0;
			foreach ( $lines as $line ) {
				$line = trim( $line );
				if ( preg_match( $pattern, $line, $matches ) ) {
					if ( strpos( $matches[0], '[' ) === 0 ) {
						$ret = do_shortcode( $matches[0] );
					} elseif ( preg_match( '#youtu#', $matches[0] ) ) {
						$ret = '<' . 'iframe' . ' src="https://www.youtube.com/embed/' . sanitize_text_field( jonny_get_youtube_id( $matches[0] ) ) . '?feature=oembed" class="youtube_video"  allowfullscreen></iframe>';

					} else {
						$ret = wp_video_shortcode( array( 'src' => $matches[0] ) );
					}
					$ret = preg_replace( '/width=".*?"/', '', $ret );
					$ret = preg_replace( '/height=".*?"/', '', $ret );
					$ret = '<div class="embed-responsive embed-responsive-16by9">' . $ret;
					$ret = $ret . '</div>';
					print( $ret );
				}
			}
		}
	}
endif;
