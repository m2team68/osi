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
?>

<div id="fullpage">
    <div class="section first-page active" data-section-name="home" style="background-image: url('<?= $homeBg ?>')">
        <div class="section-overlay"></div>
        <div id="first-page-logo" class="osi-logo">
            <div class="osi-logo-bg"></div>
            <div class="osi-logo-icon"></div>
        </div>

        <div class="osi-text-label collaboration" onclick="scrollifyTo('collaboration')">
            Collaboration
        </div>

        <div class="osi-text-label innovation">
            Innovation
            <div class="key-visual left"></div>
        </div>

        <div class="osi-text-label excellency">
            Excellency
        </div>
    </div>
    <div class="section feature-collaboration" data-section-name="collaboration" style="background-image: url('<?= $featureBg ?>')">
        <div class="section-overlay"></div>
        <div class="f-collaboration-main">
            <div class="osi-text-label no-border f-collaboration">
                Harmonize Collaboration
                <div class="key-visual right"></div>
            </div>
            <div class="osi-desc f-collaboration-desc">
                Harmonize Collaboration among employees, clients and partners. <br>
                Respect all the relevant parties involved including your peers and <br>
                Balance your your work and your life and care for our communities we work with
            </div>
        </div>
    </div>
    <div class="section" data-section-name="about">Some section</div>
    <div class="section" data-section-name="test">Some section</div>
</div>

<script>
    function scrollifyTo(section) {
        $.scrollify.move("#"+section);
    }
    function toggleHome(on) {
        if (on) {
            $("#first-page-logo").addClass("active");
            $(".osi-text-label.collaboration").fadeIn(1900);
            setTimeout(function () {
                $(".osi-text-label.innovation").fadeIn(1900);
                $(".osi-text-label.innovation .key-visual").addClass("active");
            }, 500);
            setTimeout(function () {
                $(".osi-text-label.excellency").fadeIn(1900);
            }, 1000);
        } else {
            $("#first-page-logo").removeClass("active");
            $(".osi-text-label.collaboration").fadeOut(900);
            setTimeout(function () {
                $(".osi-text-label.innovation").fadeOut(900);
            }, 500);
            setTimeout(function () {
                $(".osi-text-label.excellency").fadeOut(900);
            }, 1000);
        }
    }
    function toggleFeatureCollaboration(on) {
        if (on) {
            $(".osi-text-label.f-collaboration .key-visual").addClass("active");
            $(".osi-desc.f-collaboration-desc").fadeIn(900);
        } else {

        }
    }

    $(document).ready(function() {
        $("#first-page-logo").click(function () {
            if ($(this).hasClass("active")) {
                toggleHome(false);
            } else {
                toggleHome(true);
            }
        });
        toggleHome(true);
    });

    $(function() {
        $.scrollify({
            easing: "swing",
            section : ".section",
            after: function (index, section) {
                const nextSection = $($(section).get(index));
                console.log(nextSection.data('section-name'))
                if (nextSection.data('section-name') === "home") {
                    toggleHome(true);
                }
                if (nextSection.data('section-name') === "collaboration") {
                    toggleFeatureCollaboration(true);
                }
            }
        });
    });
</script>

<?php
get_footer();