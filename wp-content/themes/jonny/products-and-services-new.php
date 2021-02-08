<?php /* Template Name: Products and Services */ ?>
<?php
get_header();
$pasBg = get_theme_file_uri('assets/images/pas_bg.jpg');
$pasSectionBg = get_theme_file_uri('assets/images/pas_bg.jpg');
$location = get_theme_file_uri('assets/images/location.png');
$search = get_theme_file_uri('assets/images/search.png');
$financing = get_theme_file_uri('assets/images/financing.png');
$marketing = get_theme_file_uri('assets/images/marketing.png');
$design = get_theme_file_uri('assets/images/design.png');
$construct = get_theme_file_uri('assets/images/construct.png');
$operation = get_theme_file_uri('assets/images/operation.png');
$logo = get_theme_file_uri('assets/images/logo.svg');

$investment = get_theme_file_uri('assets/images/investment.svg');
$investmentBg = get_theme_file_uri('assets/images/investment.jpg');

$development = get_theme_file_uri('assets/images/development.svg');
$developmentBg = get_theme_file_uri('assets/images/development.jpg');

$advisory = get_theme_file_uri('assets/images/advisory.svg');
$advisoryBg = get_theme_file_uri('assets/images/advisory.jpg');


$missionBg = get_theme_file_uri('assets/images/mission-bg.png');
?>

    <style>
        body {
            background: none !important;
        }

        .menu-item a {
            color: var(--osi-orange) !important;
        }

        .investment-content {
            position: relative;
            display: flex;
            height: 100%;
            width: 100%;
        }

        .left, .right {
            flex: 1;
            padding-top: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-position-x: 70%;
            background-size: auto 100%;
        }

        .investment-content .left {
            flex-direction: column;
            position: relative;
        }

        .investment-content .left-title {
            font-size: 72px;
            line-height: 100%;
            margin-bottom: 50px;
            text-align: center;
            color: var(--osi-orange);
        }

        .left-desc {
            display: flex;
            align-items: center;
        }

        .left-desc-center {
            padding: 0 50px;
            position: relative;
        }

        .left-desc-left, .left-desc-right {
            font-size: 32px;
        }

        .left-desc-left {
            text-align: right;
        }

        .left-desc-center .osi-bullet-single {
            position: absolute;
        }

        .left-desc-center .osi-bullet-single.bullet-up {
            transform: rotate(-90deg);
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            margin: auto;
        }

        .left-desc-center .osi-bullet-single.bullet-left {
            transform: rotate(180deg);
            position: absolute;
            top: 0;
            left: 10px;
            bottom: 0;
            margin: auto;
        }

        .left-desc-center .osi-bullet-single.bullet-right {
            position: absolute;
            top: 0;
            right: 10px;
            bottom: 0;
            margin: auto;
        }

        .osi-bullet-single.bullet-left, .osi-bullet-single.bullet-left:after,
        .osi-bullet-single.bullet-right, .osi-bullet-single.bullet-right:after
        {
            border: white thin solid !important;
        }

        .right-title {
            color: #333;
            width: 95%;
            text-align: center;
            margin: auto;
            margin-bottom: 50px;
            font-size: 18px;
        }

        .mission-details {
            text-align: center;
        }
    </style>

    <div id="products-services">
        <div data-section-name="investment" class="section investment">
            <div class="investment-content">
                <div class="left" style="background-image: url(<?= $investmentBg ?>); background-size: cover">
                    <div class="section-overlay"></div>
                    <div class="left-content">
                        <div class="left-title">
                            Real Estate <br>
                            Investment
                        </div>
                        <div class="left-desc">
                            <div class="left-desc-left">
                                Real Estate Development
                            </div>
                            <div class="left-desc-center">
                                <img width="100px" src="<?= $logo ?>" alt="">
                                <div class="osi-bullet-single bullet-right"></div>
                                <div class="osi-bullet-single bullet-left"></div>
                                <div class="osi-bullet-single bullet-up"></div>
                            </div>
                            <div class="left-desc-right">
                                Investment Advisory
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right" style="background-image: url(<?= $missionBg ?>); background-size: cover">
                    <div class="right-content">
                        <div class="right-title">
                            We seek to utilise our expertise to generate attractive returns for our investors by investing in high-quality assets with outstanding growth potential. Backed by the existing capability and wide relationship with many domestic and foreign partners, we prioritize Real Estate Investment as the key business of the company.
                        </div>

                        <div class="mission-details">
                            <img width="60%" src="<?= $investment ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="scroll-down-container" onclick="scrollifyTo('pas_2')">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">Scroll Down</span>
            </div>
        </div>

        <div data-section-name="development" class="section development">
            <div class="investment-content">
                <div class="left" style="background-image: url(<?= $developmentBg ?>); background-size: cover">
                    <div class="section-overlay"></div>
                    <div class="left-content">
                        <div class="left-title">
                            Real Estate <br>
                            Development
                        </div>
                        <div class="left-desc">
                            <div class="left-desc-left">
                                Real Estate Investment
                            </div>
                            <div class="left-desc-center">
                                <img width="100px" src="<?= $logo ?>" alt="">
                                <div class="osi-bullet-single bullet-right"></div>
                                <div class="osi-bullet-single bullet-left"></div>
                                <div class="osi-bullet-single bullet-up"></div>
                            </div>
                            <div class="left-desc-right">
                                Investment Advisory
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right" style="background-image: url(<?= $missionBg ?>); background-size: cover">
                    <div class="right-content">
                        <div class="right-title">
                            We provide a variety of project development services, ranging from market research, design concept, comprehensive financial balancing solution, sales and marketing plan during the and operation upon project execution and finalisation. We apply our expertise across various sectors of the industry including residential, office and mixed-use.
                        </div>

                        <div class="mission-details">
                            <img width="60%" src="<?= $development ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-section-name="advisory" class="section development">
            <div class="investment-content">
                <div class="left" style="background-image: url(<?= $advisoryBg ?>); background-size: cover">
                    <div class="section-overlay"></div>
                    <div class="left-content">
                        <div class="left-title">
                            Investment Advisory
                        </div>
                        <div class="left-desc">
                            <div class="left-desc-left">
                                Real Estate Investment
                            </div>
                            <div class="left-desc-center">
                                <img width="100px" src="<?= $logo ?>" alt="">
                                <div class="osi-bullet-single bullet-right"></div>
                                <div class="osi-bullet-single bullet-left"></div>
                                <div class="osi-bullet-single bullet-up"></div>
                            </div>
                            <div class="left-desc-right">
                                Real Estate Development
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right" style="background-image: url(<?= $missionBg ?>); background-size: cover">
                    <div class="right-content">
                        <div class="right-title">
                            We provide a variety of project development services, ranging from market research, design concept, comprehensive financial balancing solution, sales and marketing plan during the and operation upon project execution and finalisation. We apply our expertise across various sectors of the industry including residential, office and mixed-use.
                        </div>

                        <div class="mission-details">
                            <img width="60%" src="<?= $advisory ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function scrollifyTo(section) {
            $.scrollify.move("#" + section);
        }

        $(document).ready(function () {

        });

        $(function () {
            $.scrollify({
                section: ".section",
                scrollSpeed: 1500,
                offset : 0,
                easing: "swing",
                scrollbars: false,
                after: function (index, section) {
                    const nextSection = $($(section).get(index));
                },
                before:function(i,panels) {
                },
                afterRender:function() {
                }
            });
            // $.scrollify.move(window.location.hash);
            // console.log(window.location.hash)
        });
        function getParameterByName(name, url = window.location.href) {
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
        $(window).on('load', function() {
            setTimeout(function() {
                $(window).scrollTop(0);
            });
        });
    </script>

<?php
get_footer();