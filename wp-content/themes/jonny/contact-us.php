<?php /* Template Name: Contact Us */ ?>

<?php
get_header();
$bgUrl = get_theme_file_uri('assets/images/home_bg.jpg');
if ( has_post_thumbnail() ) {
    $bgUrl = get_the_post_thumbnail_url();
}
$fullTitle = get_the_title();
$fullTitle = explode("|", $fullTitle);
$up = $fullTitle[0];
if (isset($fullTitle[1])) {
    $down = $fullTitle[1];
}
?>

    <style>
        body {
            background-color: black;
            /*background-image: linear-gradient(0deg, rgb(0 0 0), rgb(16 28 41 / 62%));*/
            background-image: url("<?= $bgUrl ?>");
            background-size: cover;
            background-blend-mode: overlay;
            background-attachment: fixed;
        }
        div {
            -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
            -moz-box-sizing: border-box;    /* Firefox, other Gecko */
            box-sizing: border-box;         /* Opera/IE 8+ */
        }
        #osi-single {
            padding-top: 126px;
            position: relative;
        }
        .section-content {
            height: 100%;
            padding-left: 20px;
            padding-right: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .section-overlay {
            /*background: #000000d6;*/
            top: 0;
            z-index: 10;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        .page-label {
            display: inline-flex;
            position: relative;
            margin-top: 50px;
            margin-bottom: 50px;
            margin-right: 50px;
            align-self: flex-end;
        }
        .page-label .up, .page-label .down {
            display: inline-block;
            font-size: 100px;
            line-height: 100%;
        }
        .page-label::after {
            width: 25%;
            left: 30%;
        }
        .page-desc li {
            position: relative;
            margin-bottom: 8px;
        }
        .page-desc li::before {
            content: "";
            width: 20px;
            height: 5px;
            position: absolute;
            left: calc(-20px - 3px - 5px);
            top: calc(5px + 4px);
            border-top: var(--osi-orange) 2px solid;
        }
        .page-desc li::after {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 100%;
            position: absolute;
            left: -13px;
            top: 5px;
            border: var(--osi-orange) thin solid;
        }
        .page-desc {
            transition: all 0.45s cubic-bezier(.165,.84,.44,1);
            font-size: 24px;
            width: 80%;
            align-self: center;
        }
        .page-desc.active {
            opacity: 1;
        }
        .page-desc label {
            display: block;
        }
        .info-section {
            padding: 26px;
        }
        #osi-single .section {
            height: auto !important;
        }
    </style>

    <div id="osi-single">
        <div data-section-name="single" class="section ol" style="background-color; black, background-size: cover">
            <div class="section-overlay"></div>
            <div class="section-content">
                <div class="page-label label-border-key-visual flip">
                    <div class="up osi-label-gray">
                        <?= $up ?>
                    </div>
                    <?php if (isset($down)) : ?>
                        <div class="down osi-label-darkgray label-thin-border">
                            <?= $down ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="page-desc about-us-desc">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="info-section">
            <div class="text-center">
                <h1>Where to find us</h1>
            </div>
            <div class="container-fluid text-center">
                <div style="display: inline-flex; width: 80%">
                    <div style="width: 40%; display: inline-block;" class="text-left">
                        <div class="text-center">
                            <h4>INFORMATION</h4>
                        </div>
                        <div>
                            <div>
                                <h5>Orient Success International Investment JSC.,</h5>
                            </div>
                            <div>
                                3rd Floor, N01-T4 Building Diplomatic Corps Urban Area, <br>
                                Xuân Tảo Ward, <br>
                                Bắc Từ Liêm District, <br>
                                Hà Nội
                            </div>
                            <div>
                                <h5>Phone</h5>
                            </div>
                            <div>
                                +(84-24) 3207 7272
                            </div>
                            <div>
                                <h5>Mail</h5>
                            </div>
                            <div>
                                info@osi.com.vn
                            </div>
                        </div>
                    </div>
                    <div style="width: 60%; display: inline-block">
                        <div class="text-center">
                            <h4>MAP</h4>
                        </div>
                        <div style="display: flex">
                            <iframe style="flex: 1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7446.480371937826!2d105.7934246!3d21.0630671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0b737fdff3%3A0xdcab1384832f79e6!2zUGjDuiBN4bu5IENvbXBsZXggTjAxIFQ0!5e0!3m2!1sen!2s!4v1609910084143!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function scrollifyTo(section) {
        }

        $(document).ready(function () {
            // $.scrollify.disable();
        });

        $(function () {
            // $.scrollify({
            //     updateHash: false,
            //     section: ".section",
            //     scrollSpeed: 1500,
            //     offset : -126,
            //     easing: "swing",
            //     scrollbars: false,
            //     overflowScroll: false,
            //     after: function (index, section) {
            //         const nextSection = $($(section).get(index));
            //     },
            //     before:function(i,panels) {
            //
            //     },
            //     afterRender:function() {
            //
            //     }
            // });
            // $.scrollify.move(window.location.hash);
            // console.log(window.location.hash)
        });
        $(window).on('load', function() {
            setTimeout(function() {
                $(window).scrollTop(0);
            });
        });
    </script>
<?php
get_footer();
