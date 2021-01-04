<?php /* Template Name: About Us */ ?>
<?php
get_header();
$aboutUsBg = get_theme_file_uri('assets/images/about_us_bg.jpg');
$aboutUs2Bg = get_theme_file_uri('assets/images/about_us_2_bg.jpg');
$aboutUs3Bg = get_theme_file_uri('assets/images/about_us_3_bg.jpg');
$aboutUs4Bg = get_theme_file_uri('assets/images/about_us_4_bg.jpg');
?>

    <style>
        .section {
            padding-top: 75px;
        }
        #about-us span, .osi-header .header-menu .menu li a {
            color: #515151;
        }
        .about-us-label {
            position: absolute;
            right: 50px;
            top: 300px;
        }
        .about-us-label .about {
        }
        .about-us-label .us {
            height: 180px;
        }
        .about-us-desc {
            position: absolute;
            top: 340px;
            left: 250px;
            width: 590px;
            font-size: 27px;
            float: right;
        }
        #about-us .section-overlay {
            background: #00000026;
        }
        .section {
            background-size: 100% 100%;;
        }
        .about-us-label .up {
            font-size: 50px;
            line-height: 50px;
            color: var(--osi-gray);
            font-weight: bolder;
            text-shadow: rgb(255, 255, 255) 2px 0px 0px, rgb(255, 255, 255) 1.75517px 0.958851px 0px, rgb(255, 255, 255) 1.0806px 1.68294px 0px, rgb(255, 255, 255) 0.141474px 1.99499px 0px, rgb(255, 255, 255) -0.832294px 1.81859px 0px, rgb(255, 255, 255) -1.60229px 1.19694px 0px, rgb(255, 255, 255) -1.97998px 0.28224px 0px, rgb(255, 255, 255) -1.87291px -0.701566px 0px, rgb(255, 255, 255) -1.30729px -1.5136px 0px, rgb(255, 255, 255) -0.421592px -1.95506px 0px, rgb(255, 255, 255) 0.567324px -1.91785px 0px, rgb(255, 255, 255) 1.41734px -1.41108px 0px, rgb(255, 255, 255) 1.92034px -0.558831px;
        }
        .about-us-label .down {
            font-size: 70px;
            line-height: 70px;
            color: var(--osi-darkgray);
            font-weight: bolder;
            text-shadow: rgb(255, 255, 255) 2px 0px 0px, rgb(255, 255, 255) 1.75517px 0.958851px 0px, rgb(255, 255, 255) 1.0806px 1.68294px 0px, rgb(255, 255, 255) 0.141474px 1.99499px 0px, rgb(255, 255, 255) -0.832294px 1.81859px 0px, rgb(255, 255, 255) -1.60229px 1.19694px 0px, rgb(255, 255, 255) -1.97998px 0.28224px 0px, rgb(255, 255, 255) -1.87291px -0.701566px 0px, rgb(255, 255, 255) -1.30729px -1.5136px 0px, rgb(255, 255, 255) -0.421592px -1.95506px 0px, rgb(255, 255, 255) 0.567324px -1.91785px 0px, rgb(255, 255, 255) 1.41734px -1.41108px 0px, rgb(255, 255, 255) 1.92034px -0.558831px;
        }
        .about-us-content {
            flex-direction: column;
            padding-top: 76px;
            height: 100%;
            padding-left: 85px;
            padding-right: 85px;
        }
        .about-us-content .about-us-label, .about-us-content .about-us-desc {
            position: relative;
            top: unset;
            left: unset;
            right: unset;
            bottom: unset;
        }
        .about-us-desc-line {
            text-align: right;
            color: var(--osi-darkgray);
        }
        .second-page-desc {
            width: 730px;
            margin-top: 75px;
        }
        .about-us-desc-line {
            margin-bottom: 20px;
        }
        .fourth-page-desc {
            width: 890px;
            margin-top: 75px;
        }
        .desc-line-bullet {
            content: "";
            width: 12px;
            height: 12px;
            border-radius: 100%;
            border: var(--osi-orange) thin solid;
            display: inline-block;
            position: relative;
        }
        .desc-line-bullet:before {
            content: "";
            width: 199px;
            height: 0;
            border: var(--osi-orange) thin solid;
            display: inline-block;
            position: absolute;
            top: 4px;
            right: calc(100% - 6px);
        }
    </style>

    <div id="about-us">
        <div class="section" data-section-name="first_page" style="background-image: url('<?= $aboutUsBg ?>')">
            <div class="section-overlay"></div>
            <div class="about-us-label label-border-key-visual">
                <div class="about osi-label-gray">
                    <?php getAboutUsText('first-au-upper', "ABOUT") ?>
                </div>
                <div class="us osi-label-darkgray">
                    <?php getAboutUsText('first-au-lower', "US") ?>
                </div>
            </div>
            <div class="about-us-desc">
                <span>
                    <?php getAboutUsText('first-au-desc', '“OSI is integrated property developer who creates the highest value to stakeholders by providing outstanding products and services with infinite resources”') ?>
                </span>
            </div>
            <div id="scroll-down-container" onclick="scrollifyTo('second_page')">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">Scroll Down</span>
            </div>
        </div>
        <div class="section" data-section-name="second_page" style="background-image: url('<?= $aboutUs2Bg ?>')">
            <div class="section-overlay"></div>
            <div class="about-us-content">
                <div class="about-us-label label-border-key-visual second-page-label flip">
                    <div class="up osi-label-gray">
                        <?php getAboutUsText('second-au-upper', "PROVIDE TOP-QUALITY") ?>
                    </div>
                    <div class="down osi-label-darkgray">
                        <?php getAboutUsText('second-au-lower', "PRODUCTS & SERVICES") ?>
                    </div>
                </div>
                <div class="second-page-desc about-us-desc">
                    <?php
                        $secondDesc = getAboutUsTextInline('second-au-desc', 'Provide not only top-quality products and services to the stakeholders, but also deliver premium value to them.|Maintain excellency at every stage from beginning till end.');
                        $secondDescArr = explode("|", $secondDesc);
                        foreach ($secondDescArr as $desc) :
                    ?>
                        <div class="about-us-desc-line">
                            <div class="desc-line-bullet"></div>
                            <?= $desc ?>
                        </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="section" data-section-name="third_page" style="background-image: url('<?= $aboutUs3Bg ?>')">
            <div class="section-overlay"></div>
            <div class="about-us-content">
                <div class="about-us-label label-border-key-visual third-page-label flip">
                    <div class="up osi-label-gray">
                        <?php getAboutUsText('third-au-upper', "EFFICIENT USE OF TIME") ?>
                    </div>
                    <div class="down osi-label-darkgray">
                        <?php getAboutUsText('third-au-lower', "& RESOURCES") ?>
                    </div>
                </div>
                <div class="third-page-desc about-us-desc">
                    <?php
                        $thirdDesc = getAboutUsTextInline('third-au-desc', 'Speed and efficiency is the core concept.|Focus continuos innovation to keep speed and efficiency within the pursuit of excellency.');
                        $thirdDescArr = explode("|", $thirdDesc);
                        foreach ($thirdDescArr as $desc) :
                    ?>
                        <div class="about-us-desc-line">
                            <div class="desc-line-bullet"></div>
                            <?= $desc ?>
                        </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="section" data-section-name="fourth_page" style="background-image: url('<?= $aboutUs4Bg ?>')">
            <div class="section-overlay"></div>
            <div class="about-us-content">
                <div class="about-us-label label-border-key-visual fourth-page-label flip">
                    <div class="up osi-label-gray">
                        <?php getAboutUsText('fourth-au-upper', "CREATE HIGHTEST VALUE") ?>
                    </div>
                    <div class="down osi-label-darkgray">
                        <?php getAboutUsText('fourth-au-lower', "TO ALL STAKEHOLDERS") ?>
                    </div>
                </div>
                <div class="fourth-page-desc about-us-desc">
                    <?php
                        $fourthDesc = getAboutUsTextInline('fourth-au-desc', 'Optimize partners value through successful completion of projects.|Deliver value added products and services to the clients and customers.|Pursue customer satisfaction and employee happiness.');
                        $fourthDescArr = explode("|", $fourthDesc);
                        foreach ($fourthDescArr as $desc) :
                    ?>
                        <div class="about-us-desc-line">
                            <div class="desc-line-bullet"></div>
                            <?= $desc ?>
                        </div>
                    <?php
                        endforeach;
                    ?>
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
                scrollSpeed: 750,
                offset : 0,
                easing: "linear",
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