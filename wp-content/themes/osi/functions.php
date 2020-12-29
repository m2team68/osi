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

add_action('wp_enqueue_scripts', 'custom_theme_assets', 20, 1);

function custom_customize_enqueue() {
    wp_enqueue_script( 'custom-customize', get_theme_file_uri('assets/js/customization.js'), array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'custom_customize_enqueue' );

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
    $wp_customize->add_panel('homepage_block', array(
        'priority' => 10,
        'theme_supports' => '',
        'title' => __('Homepage Customize', 'osi'),
        'description' => __('Set editable text for certain content.', 'osi'),
    ));
    // Add section.
    $wp_customize->add_section('first_page', array(
        'title' => __('#1 Home', 'osi'),
        'panel' => 'homepage_block',
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

    $wp_customize->add_setting('first_page_background', [
        'default' => $homeBg
    ]);
    $wp_customize->add_control(new WP_Customize_Media_Control(
            $wp_customize,
            'first_page_background',
            array(
                'label' => __('Background', 'osi'),
                'section' => 'first_page',
                'settings' => 'first_page_background'
            )
        )
    );

    $featureBg = get_theme_file_uri('assets/images/feature_bg.jpg');
    $featureInnovation = get_theme_file_uri('assets/images/feature_innovation.jpg');
    $featureExcellency = get_theme_file_uri('assets/images/feature_excellency.jpg');
    $pages = [
        'second_page' => [
            'page_name' => '#2 Collaboration',
            'title' => 'Collaboration',
            'label' => 'Collaboration',
            'desc' => 'Harmonize Collaboration among employees, clients and partners. <br> Respect all the relevant parties involved including your peers and <br> balance your your work and your life and care for our communities we work with',
            'cta' => 'Who we are',
            'background' => $featureBg,
            'cta_url' => '/about-us'
        ],
        'third_page' => [
            'page_name' => '#3 Excellency',
            'title' => 'Excellency',
            'label' => 'Excellency',
            'desc' => 'Provide high quality real estate products & first class service to Partners and Clients <br> Quality control at every stage of development with professional excellency',
            'cta' => 'OUR PRODUCTS & SERVICES',
            'background' => $featureExcellency,
            'cta_url' => '/products-services'
        ],
        'fourth_page' => [
            'page_name' => '#4 Innovation',
            'title' => 'Innovation',
            'label' => 'Innovation',
            'desc' => 'Provide high quality real estate products & first class service to Partners and Clients <br> Quality control at every stage of development with professional excellency',
            'cta' => 'OUR CREATORS',
            'background' => $featureInnovation,
            'cta_url' => '/about-us'
        ],
    ];

    foreach ($pages as $pageKey => $page) {
        $wp_customize->add_section($pageKey, array(
            'title' => __($page['page_name'], 'osi'),
            'panel' => 'homepage_block',
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
        $wp_customize->add_setting($pageKey.'_cta_url', array(
            'default' => __($page['cta_url'], 'osi'),
            'sanitize_callback' => 'sanitize_text'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                $pageKey.'_cta_url',
                array(
                    'label' => __('Call to action URL', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_cta_url',
                    'type' => 'text'
                )
            )
        );

        $wp_customize->add_setting($pageKey.'_background', [
            'default' => $page['background']
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control(
                $wp_customize,
                $pageKey.'_background',
                array(
                    'label' => __('Background', 'osi'),
                    'section' => $pageKey,
                    'settings' => $pageKey.'_background',
                    'type' => 'image'
                )
            )
        );
    }
}

// Sanitize text
function sanitize_text($text)
{
    return sanitize_text_field($text);
}

add_action('customize_register', 'theme_name_register_theme_customizer');


function getHomepageText($mod, $default = null)
{
    echo get_theme_mod($mod) ? get_theme_mod($mod) : $default;
}

add_action('homepage-get_text', 'getHomepageText', 10, 2);

function getHomepageMedia($mod, $default = null)
{
    echo wp_get_attachment_url(get_theme_mod($mod) ? get_theme_mod($mod) : $default);
}
add_action('homepage-get_media', 'getHomepageMedia', 10, 2);

/**
 * Register Homepage widget
 */

function register_about_us_customizer($wp_customize)
{
    // Create custom panel.
    $wp_customize->add_panel('about_us_block', array(
        'priority' => 10,
        'theme_supports' => '',
        'title' => __('About Us Customize', 'osi'),
        'description' => __('Set editable text for certain content.', 'osi'),
    ));
    $sections = [
        'first' => [
            'key' => 'au_first_page',
            'label' => "First Page",
            'configs' => [
                'au-upper' => [
                    'default' => 'ABOUT',
                    'label' => 'Upper Text',
                    'type' => 'text'
                ],
                'au-lower' => [
                    'default' => 'US',
                    'label' => 'Lower Text',
                    'type' => 'text'
                ],
                'au-desc' => [
                    'default' => '“OSI is integrated property developer who creates the highest value to stakeholders by providing outstanding products and services with infinite resources”',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],
            ]
        ],
        'second' => [
            'key' => 'au_second_page',
            'label' => "Second Page",
            'configs' => [
                'au-upper' => [
                    'default' => 'PROVIDE TOP-QUALITY',
                    'label' => 'Upper Text',
                    'type' => 'text'
                ],
                'au-lower' => [
                    'default' => 'PRODUCTS & SERVICES',
                    'label' => 'Lower Text',
                    'type' => 'text'
                ],
                'au-desc' => [
                    'default' => 'Provide not only top-quality products and services to the stakeholders, but also deliver premium value to them.|Maintain excellency at every stage from beginning till end.',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],
            ]
        ],
        'third' => [
            'key' => 'au_third_page',
            'label' => "Third Page",
            'configs' => [
                'au-upper' => [
                    'default' => 'EFFICIENT USE OF TIME',
                    'label' => 'Upper Text',
                    'type' => 'text'
                ],
                'au-lower' => [
                    'default' => '& RESOURCES',
                    'label' => 'Lower Text',
                    'type' => 'text'
                ],
                'au-desc' => [
                    'default' => 'Speed and efficiency is the core concept.|Focus continuos innovation to keep speed and efficiency within the pursuit of excellency.',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],
            ]
        ],
        'fourth' => [
            'key' => 'au_fourth_page',
            'label' => "Fourth Page",
            'configs' => [
                'au-upper' => [
                    'default' => 'CREATE HIGHTEST VALUE',
                    'label' => 'Upper Text',
                    'type' => 'text'
                ],
                'au-lower' => [
                    'default' => 'TO ALL STAKEHOLDERS',
                    'label' => 'Lower Text',
                    'type' => 'text'
                ],
                'au-desc' => [
                    'default' => 'Optimize partners value through successful completion of projects.|Deliver value added products and services to the clients and customers.|Pursue customer satisfaction and employee happiness.',
                    'label' => 'Description',
                    'type' => 'textarea'
                ],
            ]
        ],
    ];
    foreach ($sections as $sectionKey => $sectionConfigs) {
        $wp_customize->add_section($sectionConfigs['key'], array(
            'title' => __($sectionConfigs['label'], 'osi'),
            'panel' => 'about_us_block',
            'priority' => 10
        ));
        foreach ($sectionConfigs['configs'] as $key => $config) {
            // Add setting
            $wp_customize->add_setting($sectionKey."-".$key, array(
                'default' => __($config['default'], 'osi'),
                'sanitize_callback' => 'sanitize_text'
            ));
            // Add control
            $wp_customize->add_control(new WP_Customize_Control(
                    $wp_customize,
                    $sectionKey."-".$key,
                    array(
                        'label' => __($config['label'], 'osi'),
                        'section' => $sectionConfigs['key'],
                        'settings' => $sectionKey."-".$key,
                        'type' => $config['type']
                    )
                )
            );
        }
    }
}

add_action('customize_register', 'register_about_us_customizer');


function getAboutUsText($mod, $default = null)
{
    echo get_theme_mod($mod) ? get_theme_mod($mod) : $default;
}

function getAboutUsTextInline($mod, $default = null)
{
    return get_theme_mod($mod) ? get_theme_mod($mod) : $default;
}

add_action('about_us-get_text', 'getAboutUsText', 10, 2);