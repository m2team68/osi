<?php /* Template Name: OSI Leaders */ ?>
<?php
get_header();
$kim = get_theme_file_uri('assets/images/kim.png');
$huong = get_theme_file_uri('assets/images/huong.png');
$dung = get_theme_file_uri('assets/images/dung.png');
$city = get_theme_file_uri('assets/images/river-city.jpg');
?>

    <style>
        body {
            background-color: black;
            /*background-image: linear-gradient(0deg, rgb(0 0 0), rgb(16 28 41 / 62%));*/
            background-image: url("<?= $city ?>") !important;
            background-size: cover !important;
            background-blend-mode: overlay;
        }
        div {
            -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
            -moz-box-sizing: border-box;    /* Firefox, other Gecko */
            box-sizing: border-box;         /* Opera/IE 8+ */
        }
        .section-content {
            height: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
        .section-overlay {
            /*background: #000000d6;*/
            top: 0;
            z-index: 10;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        #osi-leaders {
            padding-top: 126px;
            position: relative;
        }
        .section {
            position: unset;
        }

        .ol {
            display: flex;
            height: 100%;
            width: 100%;
        }

        .leader:hover {
            z-index: 12;
        }

        .leader {
            flex: 1;
            height: 100%;
            position: relative;
            opacity: 1;
            transition: opacity 0.6s ease;
            z-index: 12;
            cursor: pointer;
        }

        .leader-image {
            height: 100%;
            text-align: center;
        }
        .leader-name>div {
            display: inline-block;
        }
        .leader-name {
            position: absolute;
            bottom: 80px;
            background: transparent;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            transition: all 0.45s cubic-bezier(.165,.84,.44,1);
            opacity: 1;
        }

        .leader-image img {
            height: 100%;
            width: auto;
        }
        .osi-text-label span {
            line-height: 100%;
        }
        .osi-text-label {
            line-height: 100%;
            text-align: left;
        }
        .key-visual::after {
            animation-delay: 0s !important;
        }
        .leader-name-desc {
            font-size: 20px;
            text-transform: capitalize;
            padding-left: 5px;
            transition: all 0.45s cubic-bezier(.165,.84,.44,1);
        }
        .leader-name-bullet {
            content: "";
            width: 12px;
            height: 12px;
            border-radius: 100%;
            border: var(--osi-orange) thin solid;
            display: inline-block;
            position: relative;
        }
        .leader-name-bullet:before {
            content: "";
            width: 0px;
            height: 0;
            border: var(--osi-orange) thin solid;
            display: inline-block;
            position: absolute;
            top: 4px;
            right: calc(100% - 6px);
            transition: all 0.45s cubic-bezier(.165,.84,.44,1);
        }
        .leader.active .leader-name-bullet:before {
            width: 90px;
        }
        .leader.active .leader-name-desc {
            padding-left: 85px;
        }
        .leader-desc.left {
            left: -90% !important;
            right: unset !important;;
        }
        .leader-desc.right {
            right: -90% !important;;
            left: unset !important;;
        }
        .leader-desc {
            visibility: hidden;
            transform: translateX(-10%);
            transition: all 0.45s cubic-bezier(.165,.84,.44,1);
            opacity: 0;
        }
        .leader.active .leader-desc {
            opacity: 1;
            position: absolute;
            top: 0;
            left: -90%;
            width: 100%;
            text-align: justify;
            visibility: visible;
            transform: translateX(0%);
        }
        .leader.hide-info .leader-name, .leader.hide-info .leader-desc {
            opacity: 0;
        }
    </style>

    <div id="osi-leaders">
        <div data-section-name="ol" class="section ol" style="background-color; black, background-size: cover">
            <div class="section-overlay"></div>
            <div class="leader">
                <div class="leader-image">
                    <img class="leader-img" data-src="<?= $kim ?>" alt="">
                </div>
                <div class="leader-name">
                    <div class="text-left d-inline-block">
                        <div class="osi-text-label f-title no-border">
                            <span>Mr.</span><br><span>Kim Young Woo</span>
                            <div class="key-visual left"></div>
                        </div>
                        <div class="leader-name-desc">
                            <div class="leader-name-bullet"></div>
                            Operation Director
                        </div>
                    </div>
                </div>
                <div class="osi-desc leader-desc right">
                    He graduated from Sogang University and also studied at Seoul National University Graduate School.
                    Before he joined OSI International JSC he worked with Daewoo Group from June 1995 until April 2018
                    (23 years). He started his career in Finance and IR department of Daewoo (1995 ~ 2006). He joined the
                    real estate development team from 2006 He was involved in the projects like and a project development
                    manager. Cheong Ra Project in Korea in Incheon, Korea. Songdo Global City Project in Incheon, Korea.
                    Weihai Point Golf Course PJ in Weihai, China. LaoLao Resort Project in Saipan, Northern Mariana Islands.
                    District 8 Project in Jakarta, Indonesia ...Etc. From 2013 ~ 2017 he worked as CFO cum Development
                    Director of THT Development Co.,Ltd. In Hanoi, Vietnam which were the developer of Starlake Project.
                </div>
            </div>
            <div class="leader">
                <div class="leader-image">
                    <img class="leader-img" data-src="<?= $dung ?>" alt="">
                </div>
                <div class="leader-name">
                    <div class="text-left d-inline-block">
                        <div class="osi-text-label f-title no-border">
                            <span>Mr.</span><br><span>Tran Viet Dung</span>
                            <div class="key-visual left"></div>
                        </div>
                        <div class="leader-name-desc">
                            <div class="leader-name-bullet"></div>
                            Vice Chairman
                        </div>
                    </div>
                </div>
                <div class="osi-desc leader-desc">
                    He graduated with Master Degree of Law and Business Administration at Latrobe University, Australia
                    Before he joined OSI International JSC he was the CEO of F.A.I.R.W.A.Y Real-Estate Joint Stock Company
                    and Deputy General Manager of Vietnam Asset Development JSC (VAD). He started his career in Real
                    Estate field since 2004 and until now, he has been leading and directly advising key projects:  Pacific
                    Palace in Ly Thuong Kiet, Hoan Kiem, Hanoi, Sai Gon Height, Hochiminh City, The Vista, An Phu, Ho
                    Chi Minh city Mulberry Lane, Ha Dong, Hanoi, Hoang Thanh Tower, Mai Hac De, Hanoi,
                    The Premier Residence, Ton That Thuyet, Hanoi.
                </div>
            </div>
            <div class="leader">
                <div class="leader-image">
                    <img class="leader-img" data-src="<?= $huong ?>" alt="">
                </div>
                <div class="leader-name">
                    <div class="text-left d-inline-block">
                        <div class="osi-text-label f-title no-border">
                            <span>Ms.</span><br><span>Chu Van Huong</span>
                            <div class="key-visual left"></div>
                        </div>
                        <div class="leader-name-desc">
                            <div class="leader-name-bullet"></div>
                            Investment Director
                        </div>
                    </div>
                </div>
                <div class="osi-desc leader-desc">
                    She graduated with Master Degree of Science in Finance
                    at Manchester Business School in UK. Before she joined
                    OSI International JSC she had more than 10 years taking
                    lead in researching and acquiring development opportunities
                    for land and property. She played an important role as
                    Business Development Manager – Advisory & Transaction
                    Services at CBRE Vietnam and Project Manager at Advance
                    International Company.With a Deep knowledge in financial
                    modeling, valuation and analysis, she had successfully advised
                    clients on the acquisition and disposal of a wide range of
                    investment land and property opportunities throughout key
                    locations in Vietnam, as well as promoted business development
                    activities for all business lines.
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
                offset : -126,
                easing: "swing",
                scrollbars: false,
                overflowScroll: false,
                after: function (index, section) {
                    const nextSection = $($(section).get(index));
                },
                before:function(i,panels) {
                },
                afterRender:function() {
                    $('.leader-img').each(function (img) {
                        $(this).attr('src', $(this).data('src'));
                    });
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
                // $(window).scrollTop(0);
            });
            $(".leader").hover(function () {
                $(".ol .section-overlay").css({
                    opacity: 1
                });

                $(".leader").css({
                    opacity: 0.1
                }).addClass("hide-info");
                $(this).addClass("active");
                $(this).removeClass("hide-info");

                $(this).css({
                    opacity: 1
                });
                $(this).find('.key-visual').addClass('active');
            }, function () {
                $(".ol .section-overlay").css({
                    opacity: 0
                });

                $(".leader").css({
                    opacity: 1
                }).removeClass("hide-info").removeClass("active");

                $(this).find('.key-visual').removeClass('active');
            });
        });
    </script>
<?php
get_footer();
