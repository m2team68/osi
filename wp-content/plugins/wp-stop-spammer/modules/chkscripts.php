<?php

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

class chkscripts extends be_module {
	// some scripts need to be Allow Listed - so far wp_cron.php, but maybe some others - AJAX?
	public function process( $ip, &$stats = array(), &$options = array(), &$post = array() ) {
		$sname = $this->getSname();
		if ( strpos( $sname, 'wp-cron.php' ) !== false ) {
			return __( 'allow wp-cron', 'wp-stop-spammer' );
		}
		// if( strpos( $sname, 'admin.php?' ) !== false ) return "allow admin.php?";
		if ( strpos( $sname, 'admin-ajax.php' ) !== false ) {
			return __( 'allow admin-ajax.php', 'wp-stop-spammer' );
		} // necessary?
		return false;
	}
}

?>