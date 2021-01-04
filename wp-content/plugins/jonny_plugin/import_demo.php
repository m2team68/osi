<?php
global $wpdb;

function kons_my_appearance_menu_item() {
	add_theme_page( __( 'Import demo data', 'kons' ), esc_html__( 'Import demo data',
		'kons' ), 'edit_theme_options', 'kons_wp_importer_geocity244',
		'kons_wp_importer_geocity' );
}

add_action( 'admin_menu', 'kons_my_appearance_menu_item' );


function kons_wp_importer_geocity() {

	global $_POST;
	if ( isset( $_POST['wfm_hidenn'] ) && $_POST['wfm_hidenn'] == 'wmf_hiden' ) {
		global $wpdb, $wp_filesystem;


		$home = get_option( 'home' );
		$siteurl = get_option( 'siteurl' );


		/*
				 * uploads files
				 */
		if ( empty( $wp_filesystem ) ) {
			require_once( ABSPATH . '/wp-admin/includes/file.php' );
			WP_Filesystem();
		}

		//dowload files
		if ( !isset( $_POST['not_export_image'] ) ) {
			$tmp_files = download_url( 'http://paul-themes.com/wp/jonny/jonny-demo/wp-content/uploads.zip' );

			if ( is_wp_error( $tmp_files ) ) {
				$tmp_files->get_error_messages();

			} else {
				$destination = wp_upload_dir();
				unzip_file( $tmp_files, $destination['basedir'] );
			}
		}
		/*
		 * SQL
		 */

		global $wpdb;

		$wpdb->hide_errors();
		$users_role = get_option( 'user_roles' );
		$admin_email = get_option( 'admin_email' );
		/*********************************************************************************/
		kons_import_sql_from_file(
			plugin_dir_path( __FILE__ ) . 'sql/demo.sql',
			array( 'jhgkp_', 'http://paul-themes.com/wp/jonny/jonny-demo', 'admin@kons.paul-themes.com' ),
			array( $wpdb->prefix, get_home_url( '/' ), $admin_email )
		);


		/***********import demo date ****************************/
		global $wp_customize;
		// theme config
		$setting = 'YTozOntzOjg6InRlbXBsYXRlIjtzOjU6Impvbm55IjtzOjQ6Im1vZHMiO2E6MjE6e2k6MDtiOjA7czoxODoibmF2X21lbnVfbG9jYXRpb25zIjthOjM6e3M6MTM6Impvbm55X3RvcG1lbnUiO2k6MTA7czo0OiJtYWluIjtpOjA7czoxMDoiam9ubnlfbWFpbiI7aToxMDt9czoxODoiY3VzdG9tX2Nzc19wb3N0X2lkIjtpOi0xO3M6MTY6InNpZGViYXJzX3dpZGdldHMiO2E6Mjp7czo0OiJ0aW1lIjtpOjE1MTY0Nzg1Mjc7czo0OiJkYXRhIjthOjM6e3M6MTk6IndwX2luYWN0aXZlX3dpZGdldHMiO2E6Njp7aTowO3M6MTA6ImFyY2hpdmVzLTIiO2k6MTtzOjY6Im1ldGEtMiI7aToyO3M6ODoic2VhcmNoLTIiO2k6MztzOjEyOiJjYXRlZ29yaWVzLTIiO2k6NDtzOjE0OiJyZWNlbnQtcG9zdHMtMiI7aTo1O3M6MTc6InJlY2VudC1jb21tZW50cy0yIjt9czoxMzoiam9ubnlfc2lkZWJhciI7YTowOnt9czoyMDoiam9ubnlfZm9vdGVyX3NpZGViYXIiO2E6MDp7fX19czoxNjoiam9ubnlfbG9nb19zbWFsbCI7czo3OToiaHR0cDovL3BhdWwtdGhlbWVzLmNvbS93cC9qb25ueS9qb25ueS1kZW1vL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDE4LzAxL2JyYW5kLnBuZyI7czo5OiJsb2dvX25hbWUiO3M6NToiSm9ubnkiO3M6OToibG9nb190ZXh0IjtzOjE3OiJjcmVhdGl2ZSB0ZW1wbGF0ZSI7czoxOToibG9nb2pvbm55X2xvZ29fbmFtZSI7czo1OiJKb25ueSI7czoxOToibG9nb2pvbm55X2xvZ29fdGV4dCI7czoxNzoiY3JlYXRpdmUgdGVtcGxhdGUiO3M6MzI6InNvY2lhbF9uZXR3b3Jrc19jb250cm9sX2ZhY2Vib29rIjtzOjI1OiJodHRwczovL3d3dy5mYWNlYm9vay5jb20vIjtzOjMxOiJzb2NpYWxfbmV0d29ya3NfY29udHJvbF90d2l0dGVyIjtzOjIwOiJodHRwczovL3R3aXR0ZXIuY29tLyI7czoxOToib3Rfc2V0X2dvb2dsZV9mb250cyI7YToxOntzOjE3OiJib2R5X2dvb2dsZV9mb250cyI7YToxOntpOjA7YToxOntzOjY6ImZhbWlseSI7czowOiIiO319fXM6MzQ6InNvY2lhbF9uZXR3b3Jrc19jb250cm9sX2dvb2dsZXBsdXMiO3M6Mjc6Imh0dHBzOi8vcGx1cy5nb29nbGUuY29tLyUyMCI7czozMjoic29jaWFsX25ldHdvcmtzX2NvbnRyb2xfbGlua2VkaW4iO3M6MjU6Imh0dHBzOi8vd3d3LmxpbmtlZGluLmNvbS8iO3M6MzI6InNvY2lhbF9uZXR3b3Jrc19jb250cm9sX2RyaWJiYmxlIjtzOjIxOiJodHRwczovL2RyaWJiYmxlLmNvbS8iO3M6Mzg6Impvbm55X3NvY2lhbF9uZXR3b3Jrc19jb250cm9sX2ZhY2Vib29rIjtzOjI1OiJodHRwczovL3d3dy5mYWNlYm9vay5jb20vIjtzOjM3OiJqb25ueV9zb2NpYWxfbmV0d29ya3NfY29udHJvbF90d2l0dGVyIjtzOjIwOiJodHRwczovL3R3aXR0ZXIuY29tLyI7czo0MDoiam9ubnlfc29jaWFsX25ldHdvcmtzX2NvbnRyb2xfZ29vZ2xlcGx1cyI7czoyNzoiaHR0cHM6Ly9wbHVzLmdvb2dsZS5jb20vJTIwIjtzOjM4OiJqb25ueV9zb2NpYWxfbmV0d29ya3NfY29udHJvbF9saW5rZWRpbiI7czoyNToiaHR0cHM6Ly93d3cubGlua2VkaW4uY29tLyI7czozODoiam9ubnlfc29jaWFsX25ldHdvcmtzX2NvbnRyb2xfZHJpYmJibGUiO3M6MjE6Imh0dHBzOi8vZHJpYmJibGUuY29tLyI7czoyMzoiam9ubnlfcGVyZm9ybWFuc19zY3JvbGwiO2I6MTt9czo3OiJvcHRpb25zIjthOjI6e3M6OToic2l0ZV9pY29uIjtzOjE6IjAiO3M6MjM6Im5hdl9tZW51c19jcmVhdGVkX3Bvc3RzIjthOjA6e319fQ==';

		$data = unserialize( base64_decode( $setting ) );


		// Call the customize_save action.

		$data['mods'] = kons_import_images( $data['mods'] );


		//do_action( 'customize_save', $wp_customize );

		// Loop through the mods.
		foreach ( $data['mods'] as $key => $val ) {

			// Call the customize_save_ dynamic action.
			do_action( 'customize_save_' . $key, $wp_customize );

			// Save the mod.
			set_theme_mod( $key, $val );
		}

		do_action( 'customize_save' );

		update_option( 'user_roles', $users_role );
		update_option( 'admin_email', $admin_email );

		update_option( 'home', $home );
		update_option( 'siteurl', $siteurl );


	}
	?>
    <div class="updated below-h2 rs-update-notice-wrap" id="message">

        <p>
			<?php
			esc_html_e( 'Import was successful. ReActivate all plugins!', 'kons' )
			?>
        </p></div>
	<?php


	?>
    <div style="padding:20px;background-color:white;

        margin-bottom: 2px;
margin-left: 15px;
margin-right: 15px;
margin-top: 5px;
        ">
		<?php
		esc_html_e( 'Press the button for import', 'kons' );

		?>

        <form action="" method="post">
            <table border="0" width="600">
                <input type="hidden" name="wfm_hidenn" value="wmf_hiden"/>
                <tbody>
                <tr>
                    <span
                            style="color: red; font-weight: bold"> <?php esc_html_e( 'All exist data will be deleted!', 'kons' ) ?></span>

                    <br>

                </tr>
                <tr>
                    <td colspan="2">
                       
                        <label>

							<?php echo __( 'Not Import images ? for weak hosting  (if demo import not works check this checkbox after import dowload images here for  
 <a href="http://paul-themes.com/wp/jonny/jonny-demo/wp-content/uploads.zip">dark version </a> 

                           unzip and upload to folder wp-content\uploads  
                            and do not forgot set permission to this folder and all files 755). <br>
                            Also if after demo import you have <b>error to many redirects</b>, check that the URLs are correct and the same in Settings > General  " WordPress Address (URL)" "Site Address (URL)"
 
                            ', 'bauhaus' ); ?>
                            <input type="checkbox" name="not_export_image">
                        </label>
						<?php submit_button( esc_html__( 'Import', 'bauhaus' ) ); ?>

                    </td>

                </tr>
                </tbody>
            </table>
        </form>
    </div>

	<?php


}


/**
 * import from file
 * @param $file_path
 * @param $arr1
 * @param $arr2
 */
function kons_import_sql_from_file( $file_path, $arr1, $arr2 ) {

	$filename = $file_path;
	( $fp = fopen( $filename, 'r' ) );
	global $wpdb;
	$wpdb->hide_errors();
	$query = '';


	while ( $line = fgets( $fp, 1024000 ) ) {
		if ( substr( $line, 0, 2 ) == '--' OR trim( $line ) == '' ) {
			continue;
		}
		$query .= $line;
		$query = str_replace( $arr1, $arr2, $query );

		if ( substr( trim( $query ), - 1 ) == ';' ) {
			if ( !$wpdb->query( $query ) ) {
			}

			$query = '';
		}
	}
}


/**
 * Imports images for settings saved as mods.
 * @param $mods
 * @return mixed
 */
function kons_import_images( $mods ) {
	foreach ( $mods as $key => $val ) {

		if ( kons_is_image_url( $val ) ) {

			$data = kons_sideload_image( $val );

			if ( !is_wp_error( $data ) ) {

				$mods[$key] = $data->url;

				// Handle header image controls.
				if ( isset( $mods[$key . '_data'] ) ) {
					$mods[$key . '_data'] = $data;
					update_post_meta( $data->attachment_id, '_wp_attachment_is_custom_header', get_stylesheet() );
				}
			}
		}
	}

	return $mods;
}


/**
 * Checks to see whether a string is an image url or not.
 * @param string $string
 * @return bool
 */
function kons_is_image_url( $string = '' ) {
	if ( is_string( $string ) ) {

		if ( preg_match( '/\.(jpg|jpeg|png|gif)/i', $string ) ) {
			return true;
		}
	}

	return false;
}


/**
 * Taken from the core media_sideload_image function and
 * modified to return an array of data instead of html.
 * @param $file
 * @return int|mixed|object|stdClass
 */
function kons_sideload_image( $file ) {
	$data = new stdClass();

	if ( !function_exists( 'media_handle_sideload' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
	}
	if ( !empty( $file ) ) {

		// Set variables for storage, fix file filename for query strings.
		preg_match( '/[^\?]+\.(jpe?g|jpe|gif|png)\b/i', $file, $matches );
		$file_array = array();
		$file_array['name'] = basename( $matches[0] );

		// Download file to temp location.
		$file_array['tmp_name'] = download_url( $file );

		// If error storing temporarily, return the error.
		if ( is_wp_error( $file_array['tmp_name'] ) ) {
			return $file_array['tmp_name'];
		}

		// Do the validation and storage stuff.
		$id = media_handle_sideload( $file_array, 0 );

		// If error storing permanently, unlink.
		if ( is_wp_error( $id ) ) {
			@unlink( $file_array['tmp_name'] );
			return $id;
		}

		// Build the object to return.
		$meta = wp_get_attachment_metadata( $id );
		$data->attachment_id = $id;
		$data->url = wp_get_attachment_url( $id );
		$data->thumbnail_url = wp_get_attachment_thumb_url( $id );
		$data->height = $meta['height'];
		$data->width = $meta['width'];
	}

	return $data;
}
