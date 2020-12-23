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
            outline-offset: 4px;
            display: flex;
            flex-direction: column;
            margin-top: 35px;
            margin-bottom: 35px;
        }
        .about-us-label.flip::after {
            transform: skew(30deg);

        }
        .about-us-label::after {
            content: "";
            position: absolute;
            width: 220px;
            height: calc(100% + 40px);
            transform: skew(-30deg);
            background: transparent;
            border: #F27126 15px solid;
            top: -20px;
        }
        .about-us-label .about {
            font-size: 80px;
            line-height: 80px;
            color: #777777;
            font-weight: bolder;
            text-shadow: rgb(255, 255, 255) 2px 0px 0px, rgb(255, 255, 255) 1.75517px 0.958851px 0px, rgb(255, 255, 255) 1.0806px 1.68294px 0px, rgb(255, 255, 255) 0.141474px 1.99499px 0px, rgb(255, 255, 255) -0.832294px 1.81859px 0px, rgb(255, 255, 255) -1.60229px 1.19694px 0px, rgb(255, 255, 255) -1.97998px 0.28224px 0px, rgb(255, 255, 255) -1.87291px -0.701566px 0px, rgb(255, 255, 255) -1.30729px -1.5136px 0px, rgb(255, 255, 255) -0.421592px -1.95506px 0px, rgb(255, 255, 255) 0.567324px -1.91785px 0px, rgb(255, 255, 255) 1.41734px -1.41108px 0px, rgb(255, 255, 255) 1.92034px -0.558831px;
        }
        .about-us-label .us {
            font-size: 220px;
            color: #3F3F3F;
            line-height: 220px;
            height: 180px;
            font-weight: bolder;
            text-shadow: rgb(255, 255, 255) 9px 0px 0px, rgb(255, 255, 255) 8.9445px 0.997944px 0px, rgb(255, 255, 255) 8.77869px 1.98358px 0px, rgb(255, 255, 255) 8.50461px 2.94475px 0px, rgb(255, 255, 255) 8.12565px 3.86961px 0px, rgb(255, 255, 255) 7.64647px 4.74674px 0px, rgb(255, 255, 255) 7.07299px 5.56533px 0px, rgb(255, 255, 255) 6.41227px 6.31528px 0px, rgb(255, 255, 255) 5.67248px 6.98735px 0px, rgb(255, 255, 255) 4.86272px 7.57324px 0px, rgb(255, 255, 255) 3.99299px 8.06573px 0px, rgb(255, 255, 255) 3.07402px 8.45875px 0px, rgb(255, 255, 255) 2.11714px 8.74744px 0px, rgb(255, 255, 255) 1.13414px 8.92825px 0px, rgb(255, 255, 255) 0.137162px 8.99895px 0px, rgb(255, 255, 255) -0.861512px 8.95867px 0px, rgb(255, 255, 255) -1.84956px 8.8079px 0px, rgb(255, 255, 255) -2.8148px 8.5485px 0px, rgb(255, 255, 255) -3.74532px 8.18368px 0px, rgb(255, 255, 255) -4.62965px 7.71792px 0px, rgb(255, 255, 255) -5.45689px 7.15698px 0px, rgb(255, 255, 255) -6.21682px 6.50777px 0px, rgb(255, 255, 255) -6.90009px 5.77831px 0px, rgb(255, 255, 255) -7.49825px 4.97757px 0px, rgb(255, 255, 255) -8.00394px 4.11545px 0px, rgb(255, 255, 255) -8.41092px 3.20258px 0px, rgb(255, 255, 255) -8.71416px 2.2502px 0px, rgb(255, 255, 255) -8.90993px 1.27008px 0px, rgb(255, 255, 255) -8.99582px 0.274291px 0px, rgb(255, 255, 255) -8.97076px -0.72488px 0px, rgb(255, 255, 255) -8.83507px -1.71511px 0px, rgb(255, 255, 255) -8.59041px -2.68419px 0px, rgb(255, 255, 255) -8.23981px -3.62017px 0px, rgb(255, 255, 255) -7.78758px -4.51149px 0px, rgb(255, 255, 255) -7.23931px -5.34718px 0px, rgb(255, 255, 255) -6.60176px -6.11692px 0px, rgb(255, 255, 255) -5.88279px -6.81122px 0px, rgb(255, 255, 255) -5.09127px -7.42152px 0px, rgb(255, 255, 255) -4.23696px -7.94029px 0px, rgb(255, 255, 255) -3.33039px -8.36113px 0px, rgb(255, 255, 255) -2.38275px -8.67885px 0px, rgb(255, 255, 255) -1.40572px -8.88954px 0px, rgb(255, 255, 255) -0.411357px -8.99059px 0px, rgb(255, 255, 255) 0.58808px -8.98077px 0px, rgb(255, 255, 255) 1.58026px -8.86018px 0px, rgb(255, 255, 255) 2.55296px -8.63032px 0px, rgb(255, 255, 255) 3.49417px -8.29402px 0px, rgb(255, 255, 255) 4.39229px -7.85543px 0px, rgb(255, 255, 255) 5.23623px -7.31996px 0px, rgb(255, 255, 255) 6.0156px -6.69422px 0px, rgb(255, 255, 255) 6.72078px -5.98591px 0px, rgb(255, 255, 255) 7.34307px -5.20378px 0px, rgb(255, 255, 255) 7.87479px -4.35748px 0px, rgb(255, 255, 255) 8.3094px -3.45743px 0px, rgb(255, 255, 255) 8.64153px -2.51474px 0px, rgb(255, 255, 255) 8.86709px -1.54104px 0px, rgb(255, 255, 255) 8.98328px -0.548328px 0px;
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
            color: #777777;
            font-weight: bolder;
            text-shadow: rgb(255, 255, 255) 2px 0px 0px, rgb(255, 255, 255) 1.75517px 0.958851px 0px, rgb(255, 255, 255) 1.0806px 1.68294px 0px, rgb(255, 255, 255) 0.141474px 1.99499px 0px, rgb(255, 255, 255) -0.832294px 1.81859px 0px, rgb(255, 255, 255) -1.60229px 1.19694px 0px, rgb(255, 255, 255) -1.97998px 0.28224px 0px, rgb(255, 255, 255) -1.87291px -0.701566px 0px, rgb(255, 255, 255) -1.30729px -1.5136px 0px, rgb(255, 255, 255) -0.421592px -1.95506px 0px, rgb(255, 255, 255) 0.567324px -1.91785px 0px, rgb(255, 255, 255) 1.41734px -1.41108px 0px, rgb(255, 255, 255) 1.92034px -0.558831px;
        }
        .about-us-label .down {
            font-size: 70px;
            line-height: 70px;
            color: #3F3F3F;
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
            color: #3F3F3F;
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
            <div class="about-us-label">
                <div class="about">
                    <?php getAboutUsText('first-au-upper', "ABOUT") ?>
                </div>
                <div class="us">
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
                <div class="about-us-label second-page-label flip">
                    <div class="up">
                        <?php getAboutUsText('second-au-upper', "PROVIDE TOP-QUALITY") ?>
                    </div>
                    <div class="down">
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
                <div class="about-us-label third-page-label flip">
                    <div class="up">
                        <?php getAboutUsText('third-au-upper', "EFFICIENT USE OF TIME") ?>
                    </div>
                    <div class="down">
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
                <div class="about-us-label fourth-page-label flip">
                    <div class="up">
                        <?php getAboutUsText('fourth-au-upper', "CREATE HIGHTEST VALUE") ?>
                    </div>
                    <div class="down">
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