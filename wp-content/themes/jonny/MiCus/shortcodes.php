<?php

/**
 * Intro
 **/
add_shortcode( 'osi_intro', 'osi_intro_func' );
function osi_intro_func( $atts, $content ) {
    ob_start();
    $content = !empty( $content ) ? $content : "";
    $atts = shortcode_atts(
        array(
            'section_id' => '',
            'vt' => esc_html__( 'Home', 'jonny' ),
            't' => esc_html__( 'About me', 'jonny' ),
            'd1' => esc_html__( 'My mission is', 'jonny' ),
            'd2' => esc_html__( 'design &amp; develop', 'jonny' ),
            'd3' => esc_html__( 'the best Websites around', 'jonny' ),

            'desc' => esc_html__( 'About me', 'jonny' ),
            'cont' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.', 'jonny' ),
            'items' => '',
            'css' => '',
            'bg_video' => ''
        ), $atts
    );


    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

    ?>

    <div
        data-anchor="page-intro" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
        class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section">
        <div class="osi-wrapper intro-section">
            <video class="bg-video" muted autoplay loop src="<?= wp_get_attachment_url($atts['bg_video']) ?>"></video>
            <div class="overlay"></div>
            <div class="intro-main">
                <div class="intro-label">
                    <div class="big-label">
                        WE ARE
                    </div>
                    <div class="small-label">
                        INTEGRATED PROPERTY DEVELOPERS
                    </div>
                </div>
                <div class="osi-logo">
                    <div class="click-me">
                        Discovery →
                    </div>
                    <div class="osi-logo-bg"></div>
                    <div class="osi-logo-icon"></div>
                </div>
            </div>
        </div>

        <style>
            .intro-main {
                z-index: 1;
            }
            .intro-section {
                display: flex;
                flex-direction: column;
                text-align: center;
                align-items: center;
                justify-content: center;
            }
            .intro-label {
                text-align: center;
                text-transform: uppercase;
                margin-bottom: 30px;
                max-height: 191px;
                transition: all 1s ease-out, opacity 0.6s;
                opacity: 1;
                font-family: impact, 'sans-serif';
                color: var(--osi-green);
                z-index: 1;
            }
            .intro-label.active {
                max-height: 0;
                margin-bottom: 0;
                opacity: 0;
            }
            .intro-label .big-label {
                font-size: 147px;
                line-height: 100%;
            }
            .intro-label .small-label {
                font-size: 30px;
            }
            .overlay {
                background-color: rgb(0 0 0 / 16%);
                background-image:url(
                data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAGklEQVQYV2NkYGD4zwABjHACKgCWAIniVwEAirIEA6kOpAAAAAAASUVORK5CYII=
                );
                background-repeat: repeat;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
            }
            .bg-video {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                top: 0;
                left: 0;
            }
            .osi-wrapper {
                width: 100%;
                height: 100%;
                position: relative;
            }
            @keyframes osi-logo-small-ring {
                0% {
                    opacity: 0.4;
                }
                50% {
                    opacity: 0.2;
                }
                100% {
                    opacity: 0.4;
                }
            }
            @keyframes osi-logo-big-ring {
                from {
                    opacity: 0.2;
                    height: 100%;
                    width: 100%;
                    top: 0;
                    left: 0;
                }
                to {
                    height: 150%;
                    width: 150%;
                    top: -25%;
                    left: -25%;
                    opacity: 0;
                }
            }
            @keyframes osi-logo {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(0.96);
                }
                100% {
                    transform: scale(1);
                }
            }
            .osi-logo-bg {
                content: "";
                position: relative;
                height: 100%;
                width: 100%;
                background-color: #fff;
                opacity: 0.3;
                border-radius: 100%;
                transition: all 0.9s ease-in;
                transition-property: background-color,opacity;
                z-index: 1;
            }
            .osi-logo-icon {
                position: absolute;
                left: 34%;
                top: 34%;
                width: 32%;
                height: 32%;
                background-color: var(--osi-orange);
                border: white 5px solid;
                cursor: pointer;
                z-index: 5;
                border-radius: 2px;
                opacity: 0.8;
                transition: all 0.9s ease-out;
                transition-property: height, width, top, left, box-shadow, opacity;
            }
            .osi-logo {
                position: relative;
                left: 0;
                right: 0;
                margin: auto;
                top: 0;
                bottom: 0;
                display: inline-block;
                width: 142px;
                height: 142px;
                cursor: pointer;
                animation-name: osi-logo;
                animation-duration: 3s;
                animation-iteration-count: infinite;
                animation-timing-function: ease-out;
                animation-direction: reverse;
            }
            .osi-logo .click-me {
                position: absolute;
                right: 115%;
                top: 42%;
                display: block;
                width: fit-content !important;
                font-size: 18px;
            }
            .osi-logo.active .click-me {
                display: none;
            }
            .osi-logo:hover .osi-logo-bg{
                opacity: 0.6;
            }
            .osi-logo:hover .osi-logo-icon {
                opacity: 1;
            }
            .osi-logo-bg:after {
                content: "";
                position: absolute;
                height: 100%;
                width: 100%;
                /*border: #e4e4e3 2px solid;*/
                box-shadow: 0 0 0 3px #e4e4e3;
                opacity: 0.4;
                border-radius: 100%;
                animation-name: osi-logo-big-ring;
                animation-duration: 1.2s;
                animation-iteration-count: infinite;
                animation-timing-function: ease-out;
                transition: all 0.9s ease-out;
                transition-property: height, width, top, left, box-shadow, opacity;
            }
            .osi-logo.active .osi-logo-bg {
                cursor: pointer;
                opacity: 0.6;
                background-color: var(--osi-green);
            }
            .osi-logo.active {
                animation: unset;
            }
            .osi-logo.active .osi-logo-bg::after {
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                animation: unset;
                box-shadow: 0 0 0 40px #e4e4e3;
            }
            .osi-logo.active .osi-logo-icon {
                opacity: 0.9;
            }
        </style>
    </div>

    <?php
    return ob_get_clean();
}

/**
 * Intro
 **/
add_shortcode( 'osi_homepage_section', 'osi_homepage_section_func' );
function osi_homepage_section_func( $atts, $content ) {
    ob_start();
    $content = !empty( $content ) ? $content : "";
    $atts = shortcode_atts(
        array(
            'section_id' => '',
            'vt' => esc_html__( 'Home', 'jonny' ),
            't' => esc_html__( 'About me', 'jonny' ),
            'd1' => esc_html__( 'My mission is', 'jonny' ),
            'd2' => esc_html__( 'design &amp; develop', 'jonny' ),
            'd3' => esc_html__( 'the best Websites around', 'jonny' ),

            'desc' => esc_html__( 'About me', 'jonny' ),
            'cont' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.', 'jonny' ),
            'items' => '',
            'css' => '',
            'bg_video' => ''
        ), $atts
    );


    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

    ?>

    <div
            data-anchor="page-intro" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section">
        <div class="osi-wrapper intro-section">
<!--            <div class="overlay"></div>-->
            <div class="f-main f-collaboration-main">
                <div class="osi-text-label f-title no-border f-collaboration">
                    <?= $atts['vt'] ?>
                    <div class="key-visual right active"></div>
                </div>
                <div class="clear-both"></div>
                <div class="osi-desc f-collaboration-desc">
                    <?= $atts['cont'] ?>
                </div>
            </div>
            <a class="cta-btn" href="<?php do_action('homepage-get_text', 'second_page_cta_url'); ?>">
                <div class="cta-icon">
                    <svg height="46" width="45" style="position: absolute; z-index: 5;">
                        <circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
                    </svg>
                </div>
                <?php do_action('homepage-get_text', 'second_page_cta'); ?>
            </a>
        </div>

    </div>

    <style>

    </style>

    <?php
    return ob_get_clean();
}