<?php /* Template Name: Products and Services */ ?>
<?php
get_header();
$pasBg = get_theme_file_uri('assets/images/pas_bg.jpg');
$pasSectionBg = get_theme_file_uri('assets/images/pas-section-bg.jpg');
$location = get_theme_file_uri('assets/images/location.png');
$search = get_theme_file_uri('assets/images/search.png');
$financing = get_theme_file_uri('assets/images/financing.png');
$marketing = get_theme_file_uri('assets/images/marketing.png');
$design = get_theme_file_uri('assets/images/design.png');
$construct = get_theme_file_uri('assets/images/construct.png');
$operation = get_theme_file_uri('assets/images/operation.png');
?>

    <style>
        .section {
            padding-top: 75px;
        }
        .section-content {
            height: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
        .section-overlay {
            background: #00000026;
        }

        .pas_extra .up, .pas_extra .down, .pas_1 .up, .pas_1 .down {
            font-size: 80px;
            line-height: 80px;
        }
        .pas_extra .pas-label, .pas_1-label {
            position: relative;
        }
        .pas_extra .pas-label .label-border-key-visual::after, .pas_1-label.label-border-key-visual::after {
            width: 180px;
            height: 300px;
            top: 0;
            bottom: 0;
            margin: auto;
            left: 0;
            right: 0;
        }
        .pas_extra .section-content, .pas_1 .section-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pas_extra .section-content {
            justify-content: start;
        }
        .pas_extra .up {
            font-size: 115px;
            line-height: 115px;
        }
        #products-services p {
            color: var(--osi-darkgray);
        }
        .pas_extra .pas-label.label-border-key-visual::after {
            width: 120px;
            height: 230px;
            right: unset;
            left: 60px;
        }
        .section-content-right, .section-content-left {
            flex: 1;
        }
        .pas_extra .section-content-right {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pas_3 .pas-label .down {
            font-size: 50px;
            line-height: 50px;
        }
        .pas_3 .pas-label.label-border-key-visual::after {
            width: 120px;
            height: 195px;
            right: unset;
            left: 60px;
        }
        .pas_4 .pas-label.label-border-key-visual::after {
            width: 100px;
            height: 130px;
            right: unset;
            left: 60px;
        }
        .pas_4 .pas-label .up {
            position: relative;
        }
        .pas_5 .pas-label .up::after {
            content: "&";
            font-size: 70px;
            position: absolute;
            bottom: 60px;
            left: 160px;
            font-family: sans-serif;
        }
        .pas_6 .pas-label .up::after {
            content: "&";
            font-size: 70px;
            position: absolute;
            bottom: 70px;
            left: 200px;
            font-family: sans-serif;
        }
        .pas_7 .section-content {
            align-items: unset;
            justify-content: unset;
            padding-right: 0;
        }
        .pas_7 .section-content-right, .pas_7  .section-content-left {
            /*flex: unset;*/
        }
        .pas_7 .pas-label .up {
            font-size: 100px;
            line-height: 100px;
        }
        .pas_7 .section-content-right {
            align-items: flex-end;
            justify-content: flex-end;
        }
        .pas_7 .section-content-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>

    <div id="products-services">
        <div data-section-name="pas_1" class="section pas_1" style="background-image: url(<?= $pasBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="pas_1-label label-border-key-visual flip">
                    <div class="up osi-label-gray">
                        INTEGRATED PROPERTY
                    </div>
                    <div class="down osi-label-darkgray label-thin-border">
                        DEVELOPMENT
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
        <div data-section-name="pas_2" class="section pas_2 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            SELECT
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            LOCATION
                        </div>
                    </div>
                    <p>
                        3 most important factors in real-estate market are location, location and location.
                    </p>
                    <p>
                        OSI is an expert in choosing prime location with best value.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="height: 80vh" src="<?= $location ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_3" class="section pas_3 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            ANALYSIS OF
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            DEVELOPMENT ENVIRONMENT
                        </div>
                    </div>
                    <p>
                        Through pre f/s we can identify what to build, how to build.
                    </p>
                    <p>
                        OSI's highly experienced experts can give full analysis of development environment with precise F/S.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="height: 80vh" src="<?= $search ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_4" class="section pas_4 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            FINANCING
                        </div>
                    </div>
                    <p>
                        How to finance is crucital point in real-estate development.
                    </p>
                    <p>
                        OSI have many connection with local and foreign financial institutions and strategic investors.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="width: 80vh" src="<?= $financing ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_5" class="section pas_5 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            SALES
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            MARKETING
                        </div>
                    </div>
                    <p>
                        OSI is capable of Sales & Marketing the products using domestic and overseas networking.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="width: 80vh" src="<?= $marketing ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_6" class="section pas_6 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            DESIGN
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            LICENSING
                        </div>
                    </div>
                    <p>
                        OSI has excellent network of world-class designers.
                    </p>
                    <p>
                        OSI have great  know-hows regarding licensing works which will save time and effort.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="width: 80vh" src="<?= $design ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_7" class="section pas_7 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            CONSTRUCTION
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            MANAGEMENT
                        </div>
                    </div>
                    <p>
                        Good construction management guarnatees the quality and cost, time saving.
                    </p>
                    <p>
                        OSI has group of high profile project mangers who can control construction management.
                    </p>
                </div>
                <div class="section-content-right" style="position: relative">
                    <img style="width: 100%;" src="<?= $construct ?>" alt="">
                </div>
            </div>
        </div>
        <div data-section-name="pas_8" class="section pas_8 pas_extra" style="background-image: url(<?= $pasSectionBg ?>); background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="section-content-left">
                    <div class="pas-label label-border-key-visual flip">
                        <div class="up osi-label-gray">
                            OPERATION
                        </div>
                        <div class="down osi-label-darkgray label-thin-border">
                            MANAGEMENT
                        </div>
                    </div>
                    <p>
                        Good operation and management will lead to value of the products.
                    </p>
                    <p>
                        OSI's commitments, creativity and innovation will give extra value to the customers.
                    </p>
                </div>
                <div class="section-content-right">
                    <img style="width: 80vh" src="<?= $operation ?>" alt="">
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
