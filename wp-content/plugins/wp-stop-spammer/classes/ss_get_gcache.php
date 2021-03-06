<?php

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

class ss_get_gcache {
	public function process( $ip, &$stats = array(), &$options = array(), &$post = array() ) {
		// gets the innerhtml for cache - same as get gcache except for names
		$goodips   = $stats['goodips'];
		$cachedel  = 'delete_gcache';
		$container = 'goodips';
		$trash	   = SS_PLUGIN_URL . 'images/trash.png';
		$tdown	   = SS_PLUGIN_URL . 'images/tdown.png';
		$tup	   = SS_PLUGIN_URL . 'images/tup.png';
		$whois	   = SS_PLUGIN_URL . 'images/whois.png';
		$stophand  = SS_PLUGIN_URL . 'images/stop.png';
		$search	   = SS_PLUGIN_URL . 'images/search.png';
		$ajaxurl   = admin_url( 'admin-ajax.php' );
		$show	   = '';
		foreach ( $goodips as $key => $value ) {
			$who	 = "<a title=\"" . esc_attr__( 'Look Up WHOIS', 'wp-stop-spammer' ) . "\" target=\"_stopspam\" href=\"https://whois.domaintools.com/$key\"><img src=\"$whois\" height=\"16px\" /></a>";
			$show   .= "<a href=\"https://www.stopforumspam.com/search?q=$key\" target=\"_stopspam\">$key: $value</a> ";
			// try AJAX on the delete from bad cache
			$onclick = "onclick=\"sfs_ajax_process('$key','$container','$cachedel','$ajaxurl');return false;\"";
			$show   .= " <a href=\"\" $onclick title=\"" . esc_attr__( 'Delete $key from Cache', 'wp-stop-spammer' ) . "\" alt=\"" . esc_attr__( 'Delete $key from Cache', 'wp-stop-spammer' ) . "\" ><img src=\"$trash\" height=\"16px\" /></a> ";
			$onclick = "onclick=\"sfs_ajax_process('$key','$container','add_black','$ajaxurl');return false;\"";
			$show   .= " <a href=\"\" $onclick title=\"" . esc_attr__( 'Add to $key Block List', 'wp-stop-spammer' ) . "\" alt=\"" . esc_attr__( 'Add to Block List', 'wp-stop-spammer' ) . "\" ><img src=\"$tdown\" height=\"16px\" /></a> ";
			$onclick = "onclick=\"sfs_ajax_process('$key','$container','add_white','$ajaxurl');return false;\"";
			$show   .= " <a href=\"\" $onclick title=\"" . esc_attr__( 'Add to $key Allow List', 'wp-stop-spammer' ) . "\" alt=\"" . esc_attr__( 'Add to Allow List', 'wp-stop-spammer' ) . "\" ><img src=\"$tup\" height=\"16px\" /></a>";
			$show   .= $who;
			$show   .= "<br />";
		}
		return $show;
	}
}

?>