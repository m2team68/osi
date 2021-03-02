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


$leaders = [
	[
		'image' => $linh,
		'tag' => 'linh',
		'type' => 'MR.',
		'name' => 'TRAN TUNG LINH',
		'role' => 'Chairman',
		'desc' => 'He graduated with Master Degree of Law and Business Administration at Latrobe University, Australia Before he joined OSI International JSC he was the CEO of F.A.I.R.W.A.Y Real-Estate Joint Stock Company and Deputy General Manager of Vietnam Asset Development JSC (VAD). He started his career in Real Estate field since 2004 and until now, he has been leading and directly advising key projects: Pacific Palace in Ly Thuong Kiet, Hoan Kiem, Hanoi, Sai Gon Height, Hochiminh City, The Vista, An Phu, Ho Chi Minh city Mulberry Lane, Ha Dong, Hanoi, Hoang Thanh Tower, Mai Hac De, Hanoi, The Premier Residence, Ton That Thuyet, Hanoi.\n',
	],
	[
		'image' => $dung,
		'tag' => 'dung',
		'type' => 'MR.',
		'name' => 'TRAN VIET DUNG',
		'role' => 'Vice Chairman',
		'desc' => 'He graduated with Master Degree of Law and Business Administration at Latrobe University, Australia Before he joined OSI International JSC he was the CEO of F.A.I.R.W.A.Y Real-Estate Joint Stock Company and Deputy General Manager of Vietnam Asset Development JSC (VAD). He started his career in Real Estate field since 2004 and until now, he has been leading and directly advising key projects: Pacific Palace in Ly Thuong Kiet, Hoan Kiem, Hanoi, Sai Gon Height, Hochiminh City, The Vista, An Phu, Ho Chi Minh city Mulberry Lane, Ha Dong, Hanoi, Hoang Thanh Tower, Mai Hac De, Hanoi, The Premier Residence, Ton That Thuyet, Hanoi.'
	],
	[
		'image' => $huong,
		'tag' => 'huong',
		'type' => 'MRS.',
		'name' => 'CHU VAN HUONG',
		'role' => 'Investment Director',
		'desc' => 'She graduated with Master Degree of Science in Finance at Manchester Business School in UK. Before she joined OSI International JSC she had more than 10 years taking lead in researching and acquiring development opportunities for land and property. She played an important role as Business Development Manager – Advisory & Transaction Services at CBRE Vietnam and Project Manager at Advance International Company.With a Deep knowledge in financial modeling, valuation and analysis, she had successfully advised clients on the acquisition and disposal of a wide range of investment land and property opportunities throughout key locations in Vietnam, as well as promoted business development activities for all business lines.'
	],
	[
		'image' => $kim,
		'tag' => 'kim',
		'type' => 'MR.',
		'name' => 'KIM YOUNG WOO',
		'role' => 'Operation Director',
		'desc' => 'He graduated from Sogang University and also studied at Seoul National University Graduate School. Before he joined OSI International JSC he worked with Daewoo Group from June 1995 until April 2018 (23 years). He started his career in Finance and IR department of Daewoo (1995 ~ 2006). He joined the real estate development team from 2006 He was involved in the projects like and a project development manager. Cheong Ra Project in Korea in Incheon, Korea. Songdo Global City Project in Incheon, Korea. Weihai Point Golf Course PJ in Weihai, China. LaoLao Resort Project in Saipan, Northern Mariana Islands. District 8 Project in Jakarta, Indonesia ...Etc. From 2013 ~ 2017 he worked as CFO cum Development Director of THT Development Co.,Ltd. In Hanoi, Vietnam which were the developer of Starlake Project.'
	],
];
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

        .leaders-content, .mission-content {
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

        .leaders-content {
            position: relative;
        }

        .leaders-content .leader-image {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .leaders-content .left {
            position: relative;
        }

        .leaders-content .right {
            flex-direction: column;
        }

        .mission-content .left {
            background-image: url("<?= $aboutUs2Bg ?>");
            position: relative;
        }

        .mission-content .right {
            padding: 20px;
            padding-top: 75px;
            background-image: url("<?= $missionBg ?>");
        }

        .mission-content .right-title {
            font-size: 54px;
            color: #333;
        }

        .mission-content .right-desc {
            font-size: 18px;
            color: #333;
        }

        .mission-details {
            display: grid;
            grid-column-gap: 20px;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 40px;
        }

        .mission-detail {
            /*text-align: justify;*/
            background-color: rgba(242, 113, 38, 0.6);
            padding: 10px;
            cursor: pointer;
            -webkit-transition: all 0.45s ease-out;
            -moz-transition: all 0.45s ease-out;
            transition: all 0.45s ease-out;
            font-size: 18px;
        }

        .leader-role.osi-bullet:after {
            top: 8px;
        }

        .leader-role.osi-bullet:before {
            top: calc(5px + 7px);
        }

        .leader-role.osi-bullet.animated.active:before {
            width: 70px;
            left: calc(-70px - 3px - 5px);
        }

        .mission-detail:hover {
            background-color: rgba(242, 113, 38, 1);
        }

        .leader-role {
            color: var(--osi-orange);
            font-size: 18px;
            margin-left: calc(70px + 8px);
            padding-left: 10px;
        }

        .leader-gen, .leader-name {
            font-size: 54px;
        }

        .leader-image {
            max-height: 100%;
        }

        .leader-desc {
            width: 87%;
            text-align: justify;
        }

        .leaders-nav {
            margin-top: 30px;
            width: 100%;
            display: flex;
        }

        .leader-nav {
            margin-right: 30px;
            width: 80px;
            height: 80px;
            background-size: 140% auto;
            background-position-x: center;
            border-radius: 100%;
            border: var(--osi-orange) thin solid;
            cursor: pointer;
            opacity: 0.6;
            -webkit-transition: all 0.45s ease-out;
            -moz-transition: all 0.45s ease-out;
            transition: all 0.45s ease-out;
        }

        .leader-nav.active {
            opacity: 1 !important;
        }

        .leader-nav:hover {
            opacity: 0.8;
        }
    </style>

    <div id="about-us">
        <div class="section first_page" data-section-name="first_page"
             style="background-image: url('<?= $aboutUsBg ?>')">
            <div class="section-overlay"></div>

            <div class="ab-content">
                <div class="title">
                    <span>OUR COMPANY</span>
                </div>

                <div class="desc">
                    <span>We are an integrated property developer, constantly striving to create the highest value for partners and customers by providing high quality products and services.</span>
                </div>
            </div>

            <div id="scroll-down-container" onclick="scrollifyTo('second_page')">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
                <span class="text">Scroll Down</span>
            </div>
        </div>
        <div class="section mission" data-section-name="second_page">
            <div class="mission-content">
                <div class="left">
                    <div class="section-overlay"></div>
                    <img width="50%" src="<?= $logo ?>" alt="">
                </div>
                <div class="right">
                    <div class="right-content">
                        <div class="right-title">MISSION</div>

                        <div class="right-desc">
                            With the goal to become an investment and real estate development company with competitive
                            strength to compete with big companies on the market, we currently emphasizes on developing
                            high-end projects and providing in-depth investment service
                        </div>

                        <div class="mission-details">
                            <div class="mission-detail">
                                Focus on listening, advising and sharing our professional experience with our partners
                                and customers
                            </div>
                            <div class="mission-detail">
                                Prove our uniqueness via passion and attention to every detail and returning exceptional
                                investment results which are highly rated by the market and customers
                            </div>
                            <div class="mission-detail">
                                Build a prestigious brand, capitalize on our existing strengths and add value to all
                                assets under our management
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section leaders" data-section-name="third_page" style="background-image: url('<?= $buildings ?>')">
            <div class="section-overlay" style="background: rgba(0, 0, 0, 0.74) !important;"></div>
            <div class="leaders-content">
                <div class="left">
                    <img width="80%" src="<?= $logo ?>" alt="">
                    <img class="leader-image" id="leader-image" width="80%" src="<?= $linh ?>" alt="">
                </div>
                <div class="right">
                    <div class="leader-info">
                        <div class="leader-full-name">
                            <span class="leader-gen" id="leader-gen">MR.</span>
                            <br>
                            <span class="leader-name" id="leader-name">TRAN TUNG LINH</span>
                        </div>
                        <div id="leader-role" class="leader-role osi-bullet animated active">Vice Chairman</div>

                        <div class="leader-desc" id="leader-desc">
                            He graduated with Master Degree of Law and Business Administration at Latrobe University,
                            Australia Before he joined OSI International JSC he was the CEO of F.A.I.R.W.A.Y Real-Estate
                            Joint Stock Company and Deputy General Manager of Vietnam Asset Development JSC (VAD). He
                            started his career in Real Estate field since 2004 and until now, he has been leading and
                            directly advising key projects: Pacific Palace in Ly Thuong Kiet, Hoan Kiem, Hanoi, Sai Gon
                            Height, Hochiminh City, The Vista, An Phu, Ho Chi Minh city Mulberry Lane, Ha Dong, Hanoi,
                            Hoang Thanh Tower, Mai Hac De, Hanoi, The Premier Residence, Ton That Thuyet, Hanoi.
                        </div>
                    </div>

                    <div class="leaders-nav" id="leaders-nav">
                        <div class="leader-nav active" style="background-image: url('<?= $linh ?>')">

                        </div>
                        <div class="leader-nav" style="background-image: url('<?= $dung ?>')">

                        </div>
                        <div class="leader-nav" style="background-image: url('<?= $huong ?>')">

                        </div>
                        <div class="leader-nav" style="background-image: url('<?= $kim ?>')">

                        </div>
                    </div>
                </div>
            </div>

            <a class="cta-btn" href="/products-services">
                <div class="cta-icon">
                    <svg height="46" width="45" style="position: absolute; z-index: 5;">
                        <circle class="circle" cx="19.6" cy="19.4" r="20" fill-opacity="0"/>
                    </svg>
                </div>
		        OUR BUSINESS
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

            initLeadersNav();
            toggleLeader(0);
        });

        const leaders = [
            {
                'image': '<?= $linh ?>',
                'tag': 'linh',
                'type': 'MR.',
                'name': 'TRAN TUNG LINH',
                'role': 'Chairman',
                'desc': 'Linh has more than 15 years of experience in the investment field. Before joining OSI, he took responsibilities as Chairman cum General Director in Vietnam Asset Development Company, Head of Project Investment Unit at PVI Holdings, General Director of An Hung Urban Investment Company and General Director of PVI Asset Management Company. Mr. Linh was awarded the Chevening Scholarship for the program of Master of Business Administration (major: Finance) at the University of Nottingham, UK. He also graduated with a master’s degree in construction from the University of Korea, Korea',
            },
            {
                'image': '<?= $dung ?>',
                'tag': 'dung',
                'type': 'MR.',
                'name': 'TRAN VIET DUNG',
                'role': 'Vice Chairman cum General Director',
                'desc': 'Dzung has been in the real estate industry for more than 15 years. He has extensive real estate development experience, ranging from project establishment, licensing, sales & marketing and project development. He has played various important roles in many major real estate investment and development deals in Hanoi, such as Pacific Place, Hoang Thanh Tower, Premier Residences, Rose Valley and The One West Lake... Dzung holds a B.E Degree from the Foreign Trade University, Hanoi and an MBA from La Trobe University, Australia.'
            },
            {
                'image': '<?= $huong ?>',
                'tag': 'huong',
                'type': 'MRS.',
                'name': 'CHU VAN HUONG',
                'role': 'Investment Director',
                'desc': 'Huong is one of the key members joining OSI since the Company\'s first establishment. She is in charge of managing and monitoring investment activities and also plays an active role in the other aspects of the company\'s business. Prior to working at OSI, Huong worked for Vietnam Asset Development, CBRE Vietnam and PriceWaterhouseCoopers. Her experience encompass feasibility studies, financial modeling, valuation and development analysis of real estate projects as well as extending to accounting, finance and business advisory services.'
            },
            {
                'image': '<?= $kim ?>',
                'tag': 'kim',
                'type': 'MR.',
                'name': 'MIKE HSU',
                'role': 'Member of Board of Directors',
                'desc': 'Mike has over 30 years experience in real estate development in Taiwan and more than 15 years experience in Vietnam market. He always keeps leadership role in various companies: Taipei Housing, HAWA development; Viet Fortune, Chang Ting Development... Total sales value for projects in which he involved in Taiwan exceed US$1 bn. In Vietnam, he involved and developed projects of nearly US$2 bn in value, including the well-known Pacific Place. Mike has an MBA from Cheng Chi university, MSC in Hotel Management and a B.A degree in architecture.'
            },
            {
                'image': '<?= $kim ?>',
                'tag': 'kim',
                'type': 'MR.',
                'name': 'KIM YOUNG WOO',
                'role': 'Operation Director',
                'desc': 'Before joining OSI, Mr. Kim worked with Daewoo Group from June 1995 until April 2018 (23 years). He started his career in Finance and IR department of Daewoo (1995 ~ 2006). He joined the real estate development team from 2006 and was involved in the many projects acting as project development manager including Cheong Ra Project in Korea in Incheon - Korea, Songdo Global City Project in Incheon - Korea, Weihai Point Golf Course PJ in Weihai - China, LaoLao Resort Project in Saipan - Northern Mariana Islands, District 8 Project in Jakarta - Indonesia.'
            },
        ];

        function initLeadersNav() {
            const nav = $("<div>").addClass('leader-nav');
            const navContainer = $("#leaders-nav");

            navContainer.html("");

            leaders.forEach(function (leader, index) {
                const navLeader = nav.clone();
                navLeader.attr('leader-index', index);
                navLeader.attr('id', 'leader-nav-' + index)
                navLeader.click(function () {
                    toggleLeader(index);
                });
                navLeader.css({
                    backgroundImage: `url(${leader.image})`
                });
                navContainer.append(navLeader);
            });
        }

        function toggleLeader(index) {
            const leader = leaders[index];

            $("#leader-gen").html(leader.type);
            $("#leader-name").html(leader.name);
            $("#leader-image").attr('src', leader.image);
            $("#leader-role").html(leader.role);
            $("#leader-desc").html(leader.desc);

            $('.leader-nav').removeClass('active');
            $('#leader-nav-' + index).addClass('active');
        }
    </script>

<?php
get_footer();