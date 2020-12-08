<?php
function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery3', get_theme_file_uri('assets/js/jquery.min.js'));
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap/bootstrap.min.js'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap/bootstrap.min.css'));
//    wp_enqueue_script('fullpage',get_theme_file_uri('assets/js/fullpage/fullpage.min.js'));
//    wp_enqueue_style('fullpage', get_theme_file_uri('assets/css/fullpage/fullpage.min.css'));
//    wp_enqueue_script('greenshock',get_theme_file_uri('assets/js/greenshock/gsap.min.js'));
//    wp_enqueue_script('greenshock_ScrollTrigger',get_theme_file_uri('assets/js/greenshock/ScrollTrigger.min.js'));
//    wp_enqueue_script('greenshock_ScrollToPlugin',get_theme_file_uri('assets/js/greenshock/ScrollToPlugin.min.js'));
    wp_enqueue_script('scrollify', get_theme_file_uri('assets/js/jquery.scrollify.js'));
    wp_enqueue_style('font-impact', get_theme_file_uri('assets/fonts/impact/impact.ttf'), array(), null);
    wp_enqueue_style('font-modeco', get_theme_file_uri('assets/fonts/modeco/ModecoTrial-Regular.otf'), array(), null);
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

function my_style_loader_tag_filter($html, $handle)
{

    if ($handle === 'font-impact') {
        return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/ttf' crossorigin='anonymous'", $html);
    }
    if ($handle === 'font-modeco') {
        return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/otf' crossorigin='anonymous'", $html);
    }

    return $html;

}

add_filter('style_loader_tag', 'my_style_loader_tag_filter', 10, 2);

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function mytheme_register_nav_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-text-domain'),
        'footer' => __('Footer Menu', 'your-text-domain')
    ));
}

add_action('after_setup_theme', 'mytheme_register_nav_menus');

function mytheme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Main Sidebar', 'your-text-domain'),
        'id' => 'sidebar-1',
        'description' => __('Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'mytheme_widgets_init');

function nd_dosth_theme_setup()
{

    // Add <title> tag support
    add_theme_support('title-tag');

    // Add custom-logo support
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'nd_dosth_theme_setup');

/**
 * Register Homepage widget
 */

function theme_name_register_theme_customizer($wp_customize)
{
    // Create custom panel.
    $wp_customize->add_panel('text_blocks', array(
        'priority' => 10,
        'theme_supports' => '',
        'title' => __('Homepage Customize', 'osi'),
        'description' => __('Set editable text for certain content.', 'osi'),
    ));
    // Add section.
    $wp_customize->add_section('first_page', array(
        'title' => __('#1 Home', 'osi'),
        'panel' => 'text_blocks',
        'priority' => 10
    ));
    $customTextArr = [
        'homepage-big_label' => [
            'default' => 'We Are',
            'label' => 'Big Label'
        ],
        'homepage-small_label' => [
            'default' => 'INTEGRATED PROPERTY DEVELOPERS',
            'label' => 'Small Label'
        ],
        'homepage-click_me' => [
            'default' => 'Click me &#8594;',
            'label' => 'Click me text'
        ],
    ];
    foreach ($customTextArr as $key => $data) {
        // Add setting
        $wp_customize->add_setting($key, array(
            'default' => __($data['default'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        // Add control
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $key,
                array(
                    'label' => __($data['label'], 'osi'),
                    'section' => 'first_page',
                    'settings' => $key,
                    'type' => 'text'
                )
            )
        );
    }
    $homeBg = get_theme_file_uri('assets/images/home_bg.jpg');
    $featureBg = get_theme_file_uri('assets/images/feature_bg.jpg');
    $featureInnovation = get_theme_file_uri('assets/images/feature_innovation.jpg');
    $featureExcellency = get_theme_file_uri('assets/images/feature_excellency.jpg');

    $wp_customize->add_setting('first_page_background', [
        'default' => $homeBg
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'first_page_background',
            array(
                'label' => __('Background', 'osi'),
                'section' => 'first_page',
                'settings' => 'first_page_background',
                'type' => 'image'
            )
        )
    );

    $pages = [
        'second_page' => [
            'page_name' => '#2 Page',
            'title' => 'Collaboration',
            'label' => 'Collaboration',
            'desc' => 'Harmonize Collaboration among employees, clients and partners. <br> Respect all the relevant parties involved including your peers and <br> balance your your work and your life and care for our communities we work with',
            'cta' => 'Who we are'
        ],
        'third_page' => [
            'page_name' => '#3 Page',
            'title' => 'Excellency',
            'label' => 'Excellency',
            'desc' => 'Provide high quality real estate products & first class service to Partners and Clients <br> Quality control at every stage of development with professional excellency',
            'cta' => 'OUR PRODUCTS & SERVICES'
        ],
        'fourth_page' => [
            'page_name' => '#4 Page',
            'title' => 'Innovation',
            'label' => 'Innovation',
            'desc' => 'Provide high quality real estate products & first class service to Partners and Clients <br> Quality control at every stage of development with professional excellency',
            'cta' => 'OUR CREATORS'
        ],
    ];

    foreach ($pages as $pageKey => $page) {
        $wp_customize->add_section($pageKey, array(
            'title' => __($page['page_name'], 'osi'),
            'panel' => 'text_blocks',
            'priority' => 10
        ));
        $wp_customize->add_setting($pageKey.'_title', array(
            'default' => __($page['title'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $pageKey.'_title',
                array(
                    'label' => __('Title', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_title',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_setting($pageKey.'_label', array(
            'default' => __($page['label'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $pageKey.'_label',
                array(
                    'label' => __('Label', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_label',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_setting($pageKey.'_desc', array(
            'default' => __($page['desc'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $pageKey.'_desc',
                array(
                    'label' => __('Description', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_desc',
                    'type' => 'textarea'
                )
            )
        );
        $wp_customize->add_setting($pageKey.'_cta', array(
            'default' => __($page['cta'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $pageKey.'_cta',
                array(
                    'label' => __('Call to action', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_cta',
                    'type' => 'textarea'
                )
            )
        );
    }

    // Sanitize text
    function sanitize_text($text)
    {
        return sanitize_text_field($text);
    }
}

add_action('customize_register', 'theme_name_register_theme_customizer');


function getHomepageText($mod)
{
    echo get_theme_mod($mod);
}

add_action('homepage-get_text', 'getHomepageText', 10, 1);