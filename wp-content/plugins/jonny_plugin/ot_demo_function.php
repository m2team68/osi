<?php
/**
 * Theme Mode
 */
/**
 * Show Settings Pages
 */




add_filter( 'ot_show_pages', '__return_false' );

/**
 * Show New Layout
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/*******************************************************/

/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'jonny_custom_theme_options' );
/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function jonny_custom_theme_options() {
    /* OptionTree is not loaded yet, or this is not an admin request */
    if ( !function_exists( 'ot_settings_id' ) || !is_admin() ) {
        return false;
    }
    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option( ot_settings_id(), array() );
    $custom_settings = array(
        'contextual_help' => array(
            'sidebar' => ''
        ),
        'sections' => array(
            array(
                'id' => 'general',
                'title' => esc_html__( 'General Config', 'jonny' )
            ),
            array(
                'id' => 'css',
                'title' => esc_html__( 'Custom JS', 'jonny' )
            ),
            array(
                'id' => 'multilanguage',
                'title' => esc_html__( 'Multilanguage', 'jonny' )
            ),
            array(
                'id' => 'mask',
                'title' => esc_html__( 'Image mask', 'jonny' )
            ),
            array(
                'id' => 'google_fonts',
                'title' => esc_html__( 'Google Fonts', 'jonny' )
            ),
            array(
                'id' => 'typography',
                'title' => esc_html__( 'Typography', 'jonny' )
            ),
            array(
                'id' => 'navigation',
                'title' => esc_html__( 'Navigation / header', 'jonny' )
            ),

            array(
                'id' => 'sidebars_settings',
                'title' => esc_html__( 'Theme Sidebars Color Options', 'jonny' )
            ),


            array(
                'id' => 'frontheader_color',
                'title' => esc_html__( 'Frontage Color Options', 'jonny' )
            ),

            array(
                'id' => 'header',
                'title' => esc_html__( 'blog/Page Options', 'jonny' )
            ),
            array(
                'id' => 'header_color',
                'title' => esc_html__( 'blog/Page Header Color Options', 'jonny' )
            ),


            array(
                'id' => 'error_page',
                'title' => esc_html__( '404 Page Header Options', 'jonny' )
            ),
            array(
                'id' => 'search_page',
                'title' => esc_html__( 'Search Page Header Options', 'jonny' )
            ),


        ),
        'settings' => array(


            array(
                'id' => 'additionaljs',
                'label' => esc_html__( 'additional javascript', 'jonny' ),
                'desc' => esc_html__( 'You can add additional javascript ', 'jonny' ),
                'std' => '',
                'type' => 'css',
                'section' => 'css',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => ''
            ),


            /*********************/

            array(
                'id' => 'jonny_multilanguage',
                'label' => esc_html__( 'Multilanguage in side menu ', 'jonny' ),
                'desc' => esc_html__( 'You can add multilanguage html code or shortcode in header', 'jonny' ),
                'std' => '',
                'type' => 'textarea',
                'section' => 'multilanguage',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => ''
            ),

            array(
                'id' => 'jonny_multilanguage_footer',
                'label' => esc_html__( 'Multilanguage in footer  ', 'jonny' ),
                'desc' => esc_html__( 'You can add multilanguage html code or shortcode in footer', 'jonny' ),
                'std' => '',
                'type' => 'textarea',
                'section' => 'multilanguage',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => ''
            ),
  
            //////////////////*/
            array(
                'id' => 'jonny_m_c',
                'label' => esc_html__( 'Mask color', 'jonny' ),
                'desc' => esc_html__( 'Please select color with opacity', 'jonny' ),
                'type' => 'colorpicker-opacity',
                'std' => '',
                'section' => 'mask'
            ),


            /**
             * FRONTPAGE COLOR SETTINGS.
             */

            array(
                'id' => 'jonny_frontpage_header_slogan_color',
                'label' => esc_html__( 'Frontpage paragraph color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'frontheader_color'
            ),


            array(
                'id' => 'jonny_frontpage_slider_dotes_active',
                'label' => esc_html__( 'Slider dotes active', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'frontheader_color'
            ),
            array(
                'id' => 'jonny_frontpage_slider_dotes',
                'label' => esc_html__( 'Slider dotes ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'frontheader_color'
            ),
            array(
                'id' => 'jonny_frontpage_hamburg',
                'label' => esc_html__( 'Hamburg menu color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'frontheader_color'
            ),


            /*** GENERAL SETTINGS. **/


            array(
                'id' => 'jonny_logowidth',
                'label' => esc_html__( 'Logo width', 'jonny' ),
                'desc' => esc_html__( 'Logo width', 'jonny' ),
                'std' => '33',
                'type' => 'numeric-slider',
                'min_max_step' => '0,300',
                'section' => 'general',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_logoheight',
                'label' => esc_html__( 'Logo height', 'jonny' ),
                'desc' => esc_html__( 'Logo height', 'jonny' ),
                'std' => '33',
                'type' => 'numeric-slider',
                'min_max_step' => '0,300',
                'section' => 'general',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_navbar_height',
                'label' => esc_html__( 'Header Navbar height', 'jonny' ),
                'desc' => esc_html__( 'Header Navbar height', 'jonny' ),
                'std' => '7',
                'type' => 'numeric-slider',
                'min_max_step' => '0,100',
                'section' => 'general',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_font_size',
                'label' => esc_html__( 'Logo  text font size', 'jonny' ),
                'desc' => esc_html__( 'Logo font size', 'jonny' ),
                'std' => '1.875',
                'type' => 'numeric-slider',
                'min_max_step' => '0,6,0.001',
                'section' => 'general',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),


            /**
             * GOOGLE FONTS SETTINGS.
             */
	        array(
		        'id' => 'google_fonts_api_key',
		        'label' => esc_html__( 'Google Fonts API key', 'jonny' ),
		        'desc' => 'Add Google Fonts API key https://console.developers.google.com/apis/library/webfonts.googleapis.com/',
		        'type' => 'text',
		        'section' => 'google_fonts',

	        ),
            array(
                'id' => 'body_google_fonts',
                'label' => esc_html__( 'Google Fonts', 'jonny' ),
                'desc' => 'Add Google Font and after the save settings follow these steps Dashboard  > Appearance > Theme Options > Typography',
                'std' => '',
                'type' => 'google-fonts',
                'section' => 'google_fonts',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            /**
             * TYPOGRAPHY SETTINGS.
             */
            array(
                'id' => 'jonny_tipigrof',
                'label' => esc_html__( 'Typography', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof1',
                'label' => esc_html__( 'Typography h1', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof2',
                'label' => esc_html__( 'Typography h2', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof3',
                'label' => esc_html__( 'Typography h3', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof4',
                'label' => esc_html__( 'Typography h4', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof5',
                'label' => esc_html__( 'Typography h5', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_tipigrof6',
                'label' => esc_html__( 'Typography h6', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),

            array(
                'id' => 'jonny_blockquote_typography',
                'label' => esc_html__( ' Typography  quotation - blockquote ', 'jonny' ),
                'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'jonny' ),
                'std' => '',
                'type' => 'typography',
                'section' => 'typography',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'min_max_step' => '',
                'class' => '',
                'condition' => '',
                'operator' => 'and'
            ),
            /**
             * NAVIGATION SETTINGS.
             */

            array(
                'id' => 'jonny_header_bg',
                'label' => esc_html__( 'Header background color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color with opacity', 'jonny' ),
                'type' => 'colorpicker-opacity',
                'std' => '',
                'section' => 'navigation'
            ),
            array(
                'id' => 'jonny_header_afix_bg',
                'label' => esc_html__( 'Header background affix color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color with opacity', 'jonny' ),
                'type' => 'colorpicker-opacity',
                'std' => '',
                'section' => 'navigation'
            ),

            array(
                'id' => 'jonny_navigationbg',
                'label' => esc_html__( 'Theme navigation background color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color with opacity', 'jonny' ),
                'type' => 'colorpicker-opacity',
                'std' => '',
                'section' => 'navigation'
            ),
            array(
                'id' => 'jonny_navitem',
                'label' => esc_html__( 'Theme navigation menu item color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'navigation'
            ),

            array(
                'id' => 'jonny_navitemhover',
                'label' => esc_html__( 'Theme navigation menu item hover color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'navigation'
            ),

            array(
                'id' => 'jonny_navitem_social',
                'label' => esc_html__( 'Theme navigation menu  social icons color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'navigation'
            ),

            array(
                'id' => 'jonny_navitem_copy',
                'label' => esc_html__( 'Theme navigation menu  copyright text color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'navigation'
            ),


            array(
                'id' => 'jonny_sidebarwidgettitlecolor',
                'label' => esc_html__( 'Theme Sidebar widget title color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'sidebars_settings'
            ),
            array(
                'id' => 'jonny_sidebarlinkcolor',
                'label' => esc_html__( 'Theme Sidebar link title color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'sidebars_settings'
            ),
            array(
                'id' => 'jonny_sidebarlinkhovercolor',
                'label' => esc_html__( 'Theme Sidebar link title hover color', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'sidebars_settings'
            ),

            /**
             * blog/PAGE HEADER SETTINGS.
             */


            array(
                'id' => 'jonny_blogheaderbgcolor_mask',
                'label' => esc_html__( 'blog preview items background mask color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker-opacity',
                'std' => '',
                'section' => 'header'
            ),


            array(
                'id' => 'jonny_blogheaderpaddingtop',
                'label' => esc_html__( 'Header padding top', 'jonny' ),
                'desc' => esc_html__( 'You can use this option for heading text vertical align', 'jonny' ),
                'std' => '17',
                'type' => 'numeric-slider',
                'min_max_step' => '0,100',
                'section' => 'header',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_blogheaderpaddingbottom',
                'label' => esc_html__( 'Header padding bottom', 'jonny' ),
                'desc' => esc_html__( 'You can use this option for heading text vertical align', 'jonny' ),
                'std' => '14',
                'type' => 'numeric-slider',
                'min_max_step' => '0,100',
                'section' => 'header',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),

            /**
             * SINGLE HEADER SETTINGS.
             */


            /**
             * 404 PAGE HEADER SETTINGS.
             */


            array(
                'id' => 'jonny_errorheadingcolor',
                'label' => esc_html__( '404 Page Title color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'typography',
                'std' => '',
                'section' => 'error_page'
            ),


            array(
                'id' => 'jonny_errorheaderparagraphcolor',
                'label' => esc_html__( '404 Page paragraph/slogan color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'typography',
                'std' => '',
                'section' => 'error_page'
            ),


            /**
             * SEARCH PAGE HEADER SETTINGS.
             */


            array(
                'id' => 'jonny_searchheaderbgcolor',
                'label' => esc_html__( 'Search Pages Heading color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'typography',
                'std' => '',
                'section' => 'search_page'
            ),

            array(
                'id' => 'jonny_searchheaderpaddingtop',
                'label' => esc_html__( 'Header padding top', 'jonny' ),
                'desc' => esc_html__( 'You can use this option for heading text vertical align', 'jonny' ),
                'std' => '17',
                'type' => 'numeric-slider',
                'min_max_step' => '0,100',
                'section' => 'search_page',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),
            array(
                'id' => 'jonny_searchheaderpaddingbottom',
                'label' => esc_html__( 'Header padding bottom', 'jonny' ),
                'desc' => esc_html__( 'You can use this option for heading text vertical align', 'jonny' ),
                'std' => '14',
                'type' => 'numeric-slider',
                'min_max_step' => '0,100',
                'section' => 'search_page',
                'rows' => '',
                'post_type' => '',
                'taxonomy' => '',
                'class' => '',
                'operator' => 'and'
            ),


            /**
             * blog/PAGE HEADING COLOR SETTINGS.
             */
            array(
                'id' => 'jonny_blogheadingcolor',
                'label' => esc_html__( 'blog Pages Heading color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'header_color'
            ),
            array(
                'id' => 'jonny_blogsubtitlecolor',
                'label' => esc_html__( 'blog Pages  post / page title color ', 'jonny' ),
                'desc' => esc_html__( 'Please select color', 'jonny' ),
                'type' => 'colorpicker',
                'std' => '',
                'section' => 'header_color'
            ),


        )
    );
    /* allow settings to be filtered before saving */
    $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
    /* settings are not the same update the DB */
    if ( $saved_settings !== $custom_settings ) {
        update_option( ot_settings_id(), $custom_settings );
    }
    /* Lets OptionTree know the UI Builder is being overridden */
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
}