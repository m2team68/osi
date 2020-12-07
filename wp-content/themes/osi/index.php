<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$homeBg = get_theme_file_uri('assets/images/home_bg.jpg');
$featureBg = get_theme_file_uri('assets/images/feature_bg.jpg');
$featureInnovation = get_theme_file_uri('assets/images/feature_innovation.jpg');
$featureExcellency = get_theme_file_uri('assets/images/feature_excellency.jpg');
?>

    <div id="fullpage">
        <ul class="pagination">
            <li>
                <a class="active" href="#home">
                    <div class="page-index">01</div>
                    <div class="hover-text">Home</div>
                </a>
            </li>
            <li>
                <a class="" href="#collaboration">
                    <span class="page-index">02</span>
                    <div class="hover-text">Collaboration</div>
                </a>
            </li>
            <li>
                <a class="" href="#excellency">
                    <span class="page-index">03</span>
                    <div class="hover-text">Excellency</div>
                </a>
            </li>
            <li>
                <a class="" href="#innovation">
                    <span class="page-index">04</span>
                    <div class="hover-text">Innovation</div>
                </a>
            </li>
        </ul>
        <div class="section first-page active" data-section-name="home" style="background-image: url('<?= $homeBg ?>')">
            <div class="section-overlay"></div>
            <div class="first-page-info">
                <div class="first-page-label">
                    <div class="big-label">
                        We are
                    </div>
                    <div class="small-label">
                        Integrated Property Developers
                    </div>
                </div>
                <div id="first-page-logo" class="osi-logo">
                    <div class="click-me">Click me &#8594;</div>
                    <div class="osi-logo-bg"></div>
                    <div class="osi-logo-icon"></div>
                </div>
            </div>

            <div class="osi-text-label collaboration" onclick="scrollifyTo('collaboration')">
                Collaboration
                <div class="key-visual left"></div>
            </div>

            <div class="osi-text-label innovation" onclick="scrollifyTo('innovation')">
                Innovation
                <div class="key-visual left"></div>
            </div>

            <div class="osi-text-label excellency" onclick="scrollifyTo('excellency')">
                Excellency
                <div class="key-visual left"></div>
            </div>

            <div id="scroll-down-container" onclick="scrollifyTo('collaboration')">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">Scroll Down</span>
            </div>
        </div>
        <div class="section feature-collaboration" data-section-name="collaboration"
             style="background-image: url('<?= $featureBg ?>')">
            <div class="section-overlay"></div>
            <div class="f-main f-collaboration-main">
                <div class="osi-text-label f-title no-border f-collaboration">
                    Collaboration
                    <div class="key-visual right"></div>
                </div>
                <div class="clear-both"></div>
                <div class="osi-desc f-collaboration-desc">
                    Harmonize Collaboration among employees, clients and partners. <br>
                    Respect all the relevant parties involved including your peers and <br>
                    balance your your work and your life and care for our communities we work with
                </div>
            </div>
            <div class="cta-btn">
                <div class="cta-icon">
                    <svg height="46" width="45" style="position: absolute; z-index: 5;">
                        <circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
                    </svg>
                </div>
                Who we are
            </div>
        </div>
        <div class="section feature-excellency" data-section-name="excellency"
             style="background-image: url('<?= $featureExcellency ?>')">
            <div class="section-overlay"></div>
            <div class="f-main f-excellency-main">
                <div class="osi-text-label f-title no-border f-excellency">
                    Excellency
                    <div class="key-visual right"></div>
                </div>
                <div class="clear-both"></div>
                <div class="osi-desc f-excellency-desc">
                    Provide high quality real estate products & first class service to Partners and Clients <br>
                    Quality control at every stage of development with professional excellency
                </div>
            </div>
            <div class="cta-btn">
                <div class="cta-icon">
                    <svg height="46" width="45" style="position: absolute; z-index: 5;">
                        <circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
                    </svg>
                </div>
                Our Products & Services
            </div>
        </div>
        <div class="section feature-innovation" data-section-name="innovation"
             style="background-image: url('<?= $featureInnovation ?>')">
            <div class="section-overlay"></div>
            <div class="f-main f-innovation-main">
                <div class="osi-text-label f-title no-border f-innovation">
                    Innovation
                    <div class="key-visual right"></div>
                </div>
                <div class="clear-both"></div>
                <div class="osi-desc f-innovation-desc">
                    Provide high quality real estate products & first class service to Partners and Clients <br>
                    Quality control at every stage of development with professional excellency
                </div>
            </div>
            <div class="cta-btn">
                <div class="cta-icon">
                    <svg height="46" width="45" style="position: absolute; z-index: 5;">
                        <circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
                    </svg>
                </div>
                Our Creators
            </div>
        </div>
    </div>

    <script>
        function scrollifyTo(section) {
            $.scrollify.move("#" + section);
        }

        function toggleHome(on) {
            if (on) {
                // $(".first-page-label").fadeOut(400);
                $(".first-page-label").addClass("active");
                $("#first-page-logo").addClass("active");

                $(".osi-text-label.collaboration").fadeIn(900);
                setTimeout(function () {
                    $(".osi-text-label.innovation").fadeIn(900);
                }, 500);
                setTimeout(function () {
                    $(".osi-text-label.excellency").fadeIn(900);
                    $("#scroll-down-container").fadeIn(900);
                }, 1000);
                $.scrollify.enable();
            } else {
                // $(".first-page-label").fadeIn(400);
                $(".first-page-label").removeClass("active");
                $("#first-page-logo").removeClass("active");
                $(".osi-text-label.collaboration").fadeOut(300);
                setTimeout(function () {
                    $(".osi-text-label.innovation").fadeOut(300);
                }, 500);
                setTimeout(function () {
                    $(".osi-text-label.excellency").fadeOut(300);
                    $("#scroll-down-container").fadeOut(300);
                }, 1000);
                $.scrollify.disable();
            }
        }

        function toggleFeatureCollaboration(on) {
            if (on) {
                $(".f-collaboration-main").addClass("active");
                $(".osi-text-label.f-collaboration .key-visual").addClass("active");
                $(".osi-desc.f-collaboration-desc").fadeIn(900);
            } else {

            }
        }

        function toggleFeatureExcellency(on) {
            if (on) {
                $(".f-excellency-main").addClass("active");
                $(".osi-text-label.f-excellency .key-visual").addClass("active");
                $(".osi-desc.f-excellency-desc").fadeIn(900);
            } else {

            }
        }

        function toggleFeatureInnovation(on) {
            if (on) {
                $(".f-innovation-main").addClass("active");
                $(".osi-text-label.f-innovation .key-visual").addClass("active");
                $(".osi-desc.f-innovation-desc").fadeIn(900);
            } else {

            }
        }

        $(document).ready(function () {
            $("#first-page-logo").click(function () {
                if ($(this).hasClass("active")) {
                    toggleHome(false);
                } else {
                    toggleHome(true);
                }
            });
        });

        $(function () {
            $.scrollify({
                section: ".section",
                scrollSpeed: 1500,
                offset : 0,
                sectionName: false,
                easing: "swing",
                scrollbars: false,
                after: function (index, section) {
                    const nextSection = $($(section).get(index));
                    if (nextSection.data('section-name') === "home") {
                        toggleHome(true);
                    }
                    if (nextSection.data('section-name') === "collaboration") {
                        toggleFeatureCollaboration(true);
                    }
                    if (nextSection.data('section-name') === "excellency") {
                        toggleFeatureExcellency(true);
                    }
                    if (nextSection.data('section-name') === "innovation") {
                        toggleFeatureInnovation(true);
                    }
                },
                before:function(i,panels) {

                    var ref = panels[i].attr("data-section-name");

                    $(".pagination .active").removeClass("active");

                    $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
                },
                afterRender:function() {
                    var pagination = "<ul class=\"pagination\">";
                    var activeClass = "";
                    $(".panel").each(function(i) {
                        activeClass = "";
                        if(i===$.scrollify.currentIndex()) {
                            activeClass = "active";
                        }
                        pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
                    });

                    pagination += "</ul>";

                    $(".home").append(pagination);
                    /*

                    Tip: The two click events below are the same:

                    $(".pagination a").on("click",function() {
                      $.scrollify.move($(this).attr("href"));
                    });

                    */
                    $(".pagination a").on("click",$.scrollify.move);
                }
            });
        });
        $(window).on('load', function() {
            setTimeout(function() {
                $(window).scrollTop(0);
            });
        });
    </script>

<?php
get_footer();