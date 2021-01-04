<?php

/**
 * Adds sections and settings to customizer
 *
 * @param $wp_customize
 */

function jonny_true_customizer_init( $wp_customize ) {
	//Panels
	$wp_customize->add_panel( 'panel_blog', array(
		'title' => esc_html__( 'Blog settings', 'jonny' ),
		'description' => esc_html__( 'Settings of the blog', 'jonny' ),
		'priority' => 31,
	) );


	/*********************************************************
	 * Side menu
	 **************************************************************/
	$tmp_sectionname = "side_menu";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Side menu', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( '', 'jonny' )
	) );







	$tmp_settingname = $tmp_sectionname . '_copyright';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );


	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Menu copyright', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );




	/*******************************************************************
	 * Main page settings
	 *******************************************************************/

	$tmp_sectionname = "jonny";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Location sidebar', 'jonny' ),
		'priority' => 30,
		'panel' => 'panel_blog'
	) );
	$tmp_tabel = 'sidebar_position';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 's2',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Location sidebar', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'radio',
		'choices' => array(
			's1' => esc_html__( 'Sidebar Left', 'jonny' ),
			's2' => esc_html__( 'Sidebar Right', 'jonny' ),
		)
	) );

	/*----------------------------------------------------------------
	 * Blog list setting
	 -----------------------------------------------------------------*/
	$tmp_sectionname = "jonny_blog_list";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Blog list', 'jonny' ),
		'priority' => 30,
		'panel' => 'panel_blog'
	) );

	$tmp_tabel = 'text';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'More posts', 'jonny' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Button text More posts', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_tabel = 'limit_word';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 27,
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Limit word in post blog list', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );


	$tmp_tabel = 'type_blog';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 'default',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Select blog type', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'select',
		'choices' => array(
			'default' => esc_html__( 'default', 'jonny' ),
			'col2' => esc_html__( 'column 2', 'jonny' ),
			'col3' => esc_html__( 'column 3', 'jonny' ),
			'col1' => esc_html__( 'blog sidebar', 'jonny' ),
		)
	) );



	/*******************************************************************
	 * Social networks
	 *******************************************************************/
	$tmp_sectionname = "jonny_social_networks";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Social networks', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( 'Enter url desired social networks so that they appear on the site', 'jonny' )
	) );

	/*short*/


	$tmp_settingname = $tmp_sectionname . '_control_social_shortcode';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Insert Social shortcode or another ', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'description' => esc_html__( 'its show  shortcode [jonny_social_links url="https://pinterest.com/" class="fa fa-pinterest"]', 'jonny' ),
		'settings' => $tmp_settingname,
		'type' => 'textarea'
	) );


	/*facebook*/
	$tmp_settingname = $tmp_sectionname . '_control_facebook';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Facebook  url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*twitter*/
	$tmp_settingname = $tmp_sectionname . '_control_twitter';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Twitter url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*googleplus*/
	$tmp_settingname = $tmp_sectionname . '_control_googleplus';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'googleplus url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*linkedin*/
	$tmp_settingname = $tmp_sectionname . '_control_linkedin';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'linkedin url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*dribbble*/
	$tmp_settingname = $tmp_sectionname . '_control_dribbble';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'dribbble url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_sectionname = "control_social_footer_shortcode";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Blog list', 'jonny' ),
		'priority' => 30,
		'panel' => 'panel_blog'
	) );





	/*******************************************************************
	 * Social networks
	 *******************************************************************/
	$tmp_sectionname = "jonny_mail";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Setting email', 'jonny' ),
		'priority' => 31,
		'description' => ''
	) );

	/*short*/

	$tmp_settingname = $tmp_sectionname . '_email';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Insert your email', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'description' => esc_html__( 'can specify one email', 'jonny' ),
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );


	/*******************************************************************
	 * mailchimp
	 *******************************************************************/
	$tmp_sectionname = "mail";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Email sitting', 'jonny' ),
		'priority' => 31,
	) );
	$tmp_settingname = $tmp_sectionname . '_email';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'sanitize_email'
	) );
	$wp_customize->add_control( '_control', array(
		'label' => esc_html__( 'Enter email', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( 'can specify  one email', 'jonny' ),
		'type' => 'text'
	) );


	
	/*******************************************************************
	 * logo
	 *******************************************************************/


	$tmp_sectionname = "logo";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Logo', 'jonny' ),
		'priority' => 30,
		'description' => esc_html__( 'Here You can change the logo in the header and in the footer', 'jonny' )
	) );
	$tmp_settingname = 'jonny_logo_small';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' =>
			'',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => esc_html__( ' Logo', 'jonny' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );



	$tmp_settingname = $tmp_sectionname . '_name';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Logo name', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type'	=> 'text'
	) );




	$tmp_settingname = $tmp_sectionname . '_text';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Logo text', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );



	/******************************************************************
	 * Colors
	 */

	$colors = array();
	if ( function_exists( 'jonny_get_style_color' ) ) {
		$colors = jonny_get_style_color();
	}


	$arr_exclude = array(
		'5874DB',
		'425CBB',
		'8A8A8A',
		'4B4B4B',
		'ACACAC',
	);


	foreach ( $colors as $k => $v ) {
		$grb = jonny_Hex2RGB( $v );
		if ( in_array( $v, $arr_exclude ) ) {
			continue;
		}
		$tmp_sectionname = 'colors';
		$tmp_settingname = $tmp_sectionname . '_m_' . $v;
		$label = $v;


		if ( $v == '727272' ) {
			$label = esc_html__( 'Body main ', 'jonny' );
		}
		if ( $v == '6534FF' ) {
			$label = esc_html__( 'Link ', 'jonny' );
		}
		if ( $v == '3B3B3B' ) {
			$label = esc_html__( 'Title text ', 'jonny' );
		}
		if ( $v == '1A1A1A' ) {
			$label = esc_html__( 'blockquote and comment border', 'jonny' );
		}
		if ( $v == '686868' ) {
			$label = esc_html__( 'blockquote and comment ', 'jonny' );
		}
		if ( $v == 'D1D1D1' ) {
			$label = esc_html__( 'Footer widget calendar border ', 'jonny' );
		}
		if ( $v == 'F45D5D' ) {
			$label = esc_html__( 'Sticky bloginfo title', 'jonny' );
		}
		if ( $v == 'A1A1A1' ) {
			$label = esc_html__( 'Recent comment link', 'jonny' );
		}

		if ( $v == '939393' ) {
			$label = esc_html__( 'Footer sidebar rss', 'jonny' );
		}
		if ( $v == '858585' ) {
			$label = esc_html__( 'Navigation mobile link ', 'jonny' );
		}
		if ( $v == '3D3D3D' ) {
			$label = esc_html__( 'Statistics number ', 'jonny' );
		}
		if ( $v == 'DADADA' ) {
			$label = esc_html__( 'Form textarea border buttom ', 'jonny' );
		}
		if ( $v == 'A7A7A7' ) {
			$label = esc_html__( 'Form subscribe placeholder text ', 'jonny' );
		}
		if ( $v == '5E31E9' ) {
			$label = esc_html__( 'Form validation label text ', 'jonny' );
		}
		if ( $v == '747474' ) {
			$label = esc_html__( 'Form validation error text ', 'jonny' );
		}
		if ( $v == '7549FF' ) {
			$label = esc_html__( 'Button focuse, button viole ', 'jonny' );
		}
		if ( $v == '292929' ) {
			$label = esc_html__( 'Banner dark, button dark background ', 'jonny' );
		}
		if ( $v == '59D5F0' ) {
			$label = esc_html__( 'Banner blue, button blue background ', 'jonny' );
		}
		if ( $v == 'C5A47E' ) {
			$label = esc_html__( 'Brown button, background brown ', 'jonny' );
		}
		if ( $v == '030203' ) {
			$label = esc_html__( 'Text dark ', 'jonny' );
		}
		if ( $v == '9A9A9A' ) {
			$label = esc_html__( 'Category name. post name ', 'jonny' );
		}
		if ( $v == '222222' ) {
			$label = esc_html__( 'Background dark', 'jonny' );
		}
		if ( $v == '1C1C1C' ) {
			$label = esc_html__( 'Left menu link brandpanel ', 'jonny' );
		}
		if ( $v == 'F7F7F7' ) {
			$label = esc_html__( 'Background light', 'jonny' );
		}
		if ( $v == 'A515CC' ) {
			$label = esc_html__( 'Background violet', 'jonny' );
		}
		if ( $v == 'A515CC' ) {
			$label = esc_html__( 'Background violet', 'jonny' );
		}
		if ( $v == '989898' ) {
			$label = esc_html__( 'Footer', 'jonny' );
		}
		if ( $v == '383838' ) {
			$label = esc_html__( 'Recent entries', 'jonny' );
		}
		if ( $v == '343434' ) {
			$label = esc_html__( 'Button gray', 'jonny' );
		}
		if ( $v == '949494' ) {
			$label = esc_html__( 'Menu link hover, active', 'jonny' );
		}
		if ( $v == '959595' ) {
			$label = esc_html__( 'Background yellow', 'jonny' );
		}
		if ( $v == '959595' ) {
			$label = esc_html__( 'Mobile menu link ', 'jonny' );
		}
		if ( $v == '161616' ) {
			$label = esc_html__( 'Left menu link background ', 'jonny' );
		}
		if ( $v == '202020' ) {
			$label = esc_html__( 'Left menu link hover ', 'jonny' );
		}
		if ( $v == '595959' ) {
			$label = esc_html__( 'Left menu link ', 'jonny' );
		}
		if ( $v == '3E3E3E' ) {
			$label = esc_html__( 'Statistics dark column border ', 'jonny' );
		}
		if ( $v == '141414' ) {
			$label = esc_html__( 'Portfolio image popup background ', 'jonny' );
		}
		if ( $v == 'C1C1C1' ) {
			$label = esc_html__( 'Blog author name text ', 'jonny' );
		}
		if ( $v == 'E9E9E9' ) {
			$label = esc_html__( 'Blog tags background ', 'jonny' );
		}
		if ( $v == '474747' ) {
			$label = esc_html__( 'Blog tags text ', 'jonny' );
		}
		if ( $v == 'EAE9E9' ) {
			$label = esc_html__( 'Client reviews qute icon ', 'jonny' );
		}
		if ( $v == 'E2E2E2' ) {
			$label = esc_html__( 'Owl reviews slider pagination ', 'jonny' );
		}
		if ( $v == 'E5E5E5' ) {
			$label = esc_html__( 'Address icon ', 'jonny' );
		}
		if ( $v == '666666' ) {
			$label = esc_html__( 'Address title ', 'jonny' );
		}
		if ( $v == 'F2F2F2' ) {
			$label = esc_html__( 'Footer light background ', 'jonny' );
		}
		if ( $v == '525252' ) {
			$label = esc_html__( 'Footer bottom text ', 'jonny' );
		}
		if ( $v == 'B0B0B0' ) {
			$label = esc_html__( 'Model info text ', 'jonny' );
		}

		if ( $v == 'CACACA' ) {
			$label = esc_html__( 'Statistics column border ', 'jonny' );
		}
		if ( $v == 'FEDE5C' ) {
			$label = esc_html__( 'bg yellow ', 'jonny' );
		}


		$wp_customize->add_setting( $tmp_settingname, array(
			'default' => "#" . esc_html( $v ),
			'sanitize_callback' => 'jonny_sanitize_temp'
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $tmp_settingname,
			array(
				'label' => esc_html__( 'Color ', 'jonny' ) . esc_html( $label ) . '',
				'section' => $tmp_sectionname,
				'settings' => $tmp_settingname,
			) ) );
	}


	/*******************************************************************
	 * Performans
	 *******************************************************************/

	$tmp_sectionname = "jonny_performans";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Performance', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( '', 'jonny' )
	) );

	$tmp_settingname = $tmp_sectionname . '_preloader';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => true,
		'sanitize_callback' => 'wp_validate_boolean'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Enable preloader ?', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'checkbox',
	) );


	$tmp_settingname = $tmp_sectionname . '_scroll';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => false,
		'sanitize_callback' => 'wp_validate_boolean'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Enable smoothscroll?', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'checkbox',
	) );


	$tmp_settingname = $tmp_sectionname . '_affix';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => true,
		'sanitize_callback' => 'wp_validate_boolean'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Enable navbar affix?', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'checkbox',
	) );



	/*******************************************************************
	 * contact form shortcode
	 *******************************************************************/

	$tmp_sectionname = "jonny_c_form_s";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Contact form shortcode', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( '', 'jonny' )
	) );

	$tmp_settingname = $tmp_sectionname . '_val';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '[jonny_contact_form]',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Contact form shortcode', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );



	$tmp_settingname = $tmp_sectionname . '_modal_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Send request', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'modal title', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );

	$tmp_settingname = $tmp_sectionname . '_susses_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Thank you', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal susses title', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );


	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_susses_sub_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Your message is successfully sent...', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal susses subtitle', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );

	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Sorry', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal error title', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );
	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_sub_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Something went wrong', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal error subtitle', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );

	/*
	 *
	 */


	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Sorry', 'jonny' ),
		'sanitize_callback' => 'wp_kses_post'
	) );


	/*********************************************************
	 * Footer
	 **************************************************************/
	$tmp_sectionname = "footer";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Footer', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( '', 'jonny' )
	) );

	$tmp_settingname = $tmp_sectionname . '_copyright';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Footer copyright', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );


	/*******************************************************************
	 * 404
	 *******************************************************************/
	$tmp_sectionname = "jonny_404";
	$tmp_default = "";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( '404', 'jonny' ),
		'priority' => 30,
	) );

	$tmp_settingname = $tmp_sectionname . '_top_img';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' =>
			'',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => esc_html__( '404 page Top img', 'jonny' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );


	$tmp_tabel = 'main_title';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$tmp_settingtitle = esc_html__( 'main_title', 'jonny' );
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => $tmp_default,
		'sanitize_callback' => 'jonny_sanitize_temp'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Top title', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( 'insert title (for example 404 Page) )', 'jonny' ),
		'type' => 'text'
	) );


	$tmp_settingname = $tmp_sectionname . '_top_desc';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse non earum consectetur, ratione.', 'jonny' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your description', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'jonny' ),
		'type' => 'textarea',

	) );


	$tmp_settingname = $tmp_sectionname . '_btn_text';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Back home', 'jonny' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button text', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'jonny' ),
		'type' => 'text',


	) );


	$tmp_settingname = $tmp_sectionname . '_btn_url';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert url )', 'jonny' ),
		'type' => 'text',


	) );




	/*******************************************************************
	 * Comming soon
	 *******************************************************************/
	$tmp_sectionname = "jonny_comming";
	$tmp_default = "";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Comming soon page', 'jonny' ),
		'priority' => 30,
	) );

	$tmp_settingname = $tmp_sectionname . '_top_img';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' =>
			'',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => esc_html__( 'Comming soon page Top img', 'jonny' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );


	$tmp_tabel = 'main_title';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$tmp_settingtitle = esc_html__( 'Main_title', 'jonny' );
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Comming Soon...', 'jonny' ),
		'sanitize_callback' => 'jonny_sanitize_temp'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Top title', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( 'insert title (for example Comming soon Page) )', 'jonny' ),
		'type' => 'text'
	) );


	$tmp_settingname = $tmp_sectionname . '_top_desc';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'jonny' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your description', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'jonny' ),
		'type' => 'textarea',

	) );


	$tmp_settingname = $tmp_sectionname . '_btn_text';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Back home', 'jonny' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button text', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'jonny' ),
		'type' => 'text',


	) );


	$tmp_settingname = $tmp_sectionname . '_btn_url';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button url', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert url )', 'jonny' ),
		'type' => 'text',


	) );




	/*******************************************************************
	 * mailchimp
	 *******************************************************************/
	$tmp_sectionname = "jonny_mailchimp";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Mailchimp / Subscribe ', 'jonny' ),
		'priority' => 31,
		'description' => esc_html__( 'Specify api key and ID list', 'jonny' )
	) );
	$tmp_settingname = $tmp_sectionname . '_api_control';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'esc_attr'
	) );
	$wp_customize->add_control( '_control', array(
		'label' => esc_html__( 'API key', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_settingname = $tmp_sectionname . 'id_list_control';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'esc_attr'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'ID list', 'jonny' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );
}


function jonny_sanitize_to_int( $value ) {
	return (int) $value;
}


function jonny_sanitize_temp( $value ) {
	return $value;
}


/**
 *Plug in  script to customize
 */

add_action( 'customize_register', 'jonny_true_customizer_init' );


function jonny_color_hack( $css ) {
	$css = str_ireplace( "322F44", "33244A", $css );
	$css = str_ireplace( "47A5F5", "009ECC", $css );
	$css = str_ireplace( "45C3E8", "009ECC", $css );
	$css = str_ireplace( "7CCB18", "AAC600", $css );
	$css = str_ireplace( "62B50A", "AAC600", $css );
	$css = str_ireplace( "006EC6", "0081DB", $css );
	$css = str_ireplace( array(
		"7CCB18",
		"1B2027",
		"191A22",
		"1F1C2D",
		"191A22"
	), array(
		"97C900",
		"030102",
		"011222",
		"011222"
	), $css );
	//green
	$css = str_ireplace( "AAC600", "97C900", $css );
	//orange
	$css = str_ireplace( array(
		"FF9C00",
		"FFAC00",
		"FF5700",
		"FFCB00"
	), "FF9100", $css );
	//dark red
	$css = str_ireplace( array(
		"D82E26",
		"CC130A",
		"A1201A"
	), "D82E26", $css );
	//light red
	$css = str_ireplace( array(
		"E51616",
		"F54100",
		"E73931"
	), "FF9100", $css );

	return $css;


}

function jonny_Hex2RGB( $color ) {
	$color = str_replace( '#', '', $color );
	if ( mb_strlen( $color ) != 6 ) {
		return array(
			0,
			0,
			0
		);
	}
	$jonny_rgb = array();
	for ( $x = 0; $x < 3; $x ++ ) {
		$jonny_rgb[$x] = hexdec( substr( $color, ( 2 * $x ), 2 ) );
	}

	return $jonny_rgb;
}