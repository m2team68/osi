<?php /* Template Name: Portfolio */ ?>
<?php /* Template Name: About Us */ ?>
<?php
get_header();
$aboutUsBg = get_theme_file_uri('assets/images/river-city.jpg');
$aboutUs2Bg = get_theme_file_uri('assets/images/high-tower.png');
$logo = get_theme_file_uri('assets/images/logo.svg');
$buildings = get_theme_file_uri('assets/images/buildings.png');
$missionBg = get_theme_file_uri('assets/images/mission-bg.png');
$aboutUs4Bg = get_theme_file_uri('assets/images/about_us_4_bg.jpg');

$linh = get_theme_file_uri('assets/images/linh.png');
$dung = get_theme_file_uri('assets/images/dung.png');
$huong = get_theme_file_uri('assets/images/huong.png');
$kim = get_theme_file_uri('assets/images/kim.png');

$floraGarden = get_theme_file_uri('assets/images/development.jpg');
$osiTower = get_theme_file_uri('assets/images/advisory.jpg');
?>

	<style>
		body {
			background: none !important;
		}

		.menu-item a {
			color: var(--osi-orange) !important;
		}

		.section {
			padding-top: 0;
		}

		#about-us .first_page {
			text-align: center;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		#about-us .ab-content {
			width: 50%;
		}

		#about-us .ab-content .title {
			font-size: 72px;
			margin: 25px 0;
		}

		#about-us .ab-content .desc {
			font-size: 24px;
		}

		.cons-desc {
			position: absolute;
			bottom: 0;
			left: 0;
			padding: 30px;
			font-size: 18px;
		}
	</style>

	<div id="about-us">
		<div class="section first_page" data-section-name="first_page"
		     style="background-image: url('<?= $aboutUsBg ?>')">
			<div class="section-overlay"></div>

			<div class="ab-content">
				<div class="title">
					<span>OUR PORTFOLIO</span>
				</div>

				<div class="desc">
					<span>Each of our projects is a product of the “startup” mindset, aiming to prove our uniqueness via passion and attention to every detail and returning exceptional investment results which are highly rated by the market and customers.</span>
				</div>
			</div>

			<div id="scroll-down-container" onclick="scrollifyTo('second_page')">
				<div class="chevron"></div>
				<div class="chevron"></div>
				<div class="chevron"></div>
				<span class="text">Scroll Down</span>
			</div>
		</div>
		<div class="section commerical" data-section-name="residential"
		     style="background-image: url('<?= $floraGarden ?>')">
			<div class="section-overlay"></div>
			<div class="cons-desc">
				<span style="font-size: 32px">Residential</span> <br>
				<span style="font-size: 24px">Floral Garden</span> <br>
                Project: Low-rise residential <br>
                Location: Bac Tu Liem district <br>
                Land area: 2.6ha <br>
                Status: Under construction
			</div>
		</div>
		<div class="section commerical" data-section-name="commerical"
		     style="background-image: url('<?= $osiTower ?>')">
			<div class="section-overlay"></div>
			<div class="cons-desc">
				<span style="font-size: 32px">Commerical</span> <br>
				<span style="font-size: 24px">OSI Tower</span> <br>
                Project: Office building <br>
                Status: On-going
			</div>

			<a class="cta-btn" href="/contacts" style="text-shadow: 2px 2px 6px black;">
				<div class="cta-icon">
					<svg height="46" width="45" style="position: absolute; z-index: 5;">
						<circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
					</svg>
				</div>
				CONTACT US
			</a>
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
                offset: 0,
                easing: "linear",
                scrollbars: false,
                after: function (index, section) {
                    const nextSection = $($(section).get(index));
                },
                before: function (i, panels) {
                },
                afterRender: function () {
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

        $(window).on('load', function () {
            setTimeout(function () {
                $(window).scrollTop(0);
            });
        });
	</script>

<?php
get_footer();