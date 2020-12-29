<?php /* Template Name: OSI Leaders */ ?>
<?php
get_header();
$kim = get_theme_file_uri('assets/images/kim.png');
$huong = get_theme_file_uri('assets/images/huong.png');
$dung = get_theme_file_uri('assets/images/dung.png');
?>

    <style>
        body {

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
            padding-top: 75px;
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
            opacity: 0.8;
            transition: opacity 0.6s ease;
        }

        .leader-image {
            height: 100%;
            text-align: center;
        }

        .leader-name {
            position: absolute;
            bottom: 40px;
            background: transparent;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .leader-image img {
            height: 100%;
            width: auto;
        }

        .osi-text-label {
            line-height: 100%;
            text-align: left;
        }
        .key-visual::after {
            animation-delay: 0s !important;
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
                    <div class="osi-text-label f-title no-border">
                        <span>Mr.</span><br><span>Kim Young Woo</span>
                        <div class="key-visual left"></div>
                    </div>
                </div>
            </div>
            <div class="leader">
                <div class="leader-image">
                    <img class="leader-img" data-src="<?= $huong ?>" alt="">
                </div>
                <div class="leader-name">
                    <div class="osi-text-label f-title no-border">
                        <span>Ms.</span><br><span>Chu Van Huong</span>
                        <div class="key-visual left"></div>
                    </div>
                </div>
            </div>
            <div class="leader">
                <div class="leader-image">
                    <img class="leader-img" data-src="<?= $dung ?>" alt="">
                </div>
                <div class="leader-name">
                    <div class="osi-text-label f-title no-border">
                        <span>Mr.</span><br><span>Tran Viet Dung</span>
                        <div class="key-visual left"></div>
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
                offset : -75,
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
                $(this).css({
                    zIndex: 11
                });
                $(this).find('.key-visual').addClass('active');
            }, function () {
                $(".ol .section-overlay").css({
                    opacity: 0
                });
                $(this).css({
                    zIndex: 2
                });
                $(this).find('.key-visual').removeClass('active');
            });
        });
    </script>
<?php
get_footer();
