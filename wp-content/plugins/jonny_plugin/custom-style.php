<?php

add_filter('ot_google_fonts_api_key','vetrov_ot_google_fonts_api_key');

function vetrov_ot_google_fonts_api_key($key) {
	return ot_get_option('google_fonts_api_key','AIzaSyBSMah19otro4eCNjhCScE1zs4MTam3udM');
}

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package jonny
 */
/* HEADER ------------------------------------------- */
function jonny_custom_styling() { ?>
	<?php if ( function_exists( 'ot_get_option' ) ) : ?>

		<style>
			<?php if ( ot_get_option( 'jonny_logowidth' ) !='' &&  ot_get_option( 'jonny_logowidth' ) != '39'): ?>
			.brand img {
				width: <?php echo esc_attr( ot_get_option( 'jonny_logowidth' ) ); ?>px;
			}
			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_font_size' ) !='' &&  ot_get_option( 'jonny_font_size' ) != '1.875'): ?>
			.brand {
				font-size: <?php echo esc_attr( ot_get_option( 'jonny_font_size' ) ); ?>em;
			}
			
			<?php endif; ?>
			<?php if( is_customize_preview('administrator')): ?>
			.logged-in .navbar.affix, .logged-in .navbar {
				top: 0px;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_navigationbg' ) !='' ): ?>
			.navbar.affix {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_navigationbg' ) ); ?> !important;
			}

			<?php endif; ?>

			<?php $jonny_navitem = ot_get_option( 'jonny_navitem', array() ); ?>
			<?php if($jonny_navitem) { ?>
			.navbar.affix-top .nav-desctop-list>li>a, .navbar.affix-top .nav-desctop-list>li>ul>li>a  {
				color: <?php echo esc_attr( $jonny_navitem['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_navitem['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_navitem['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_navitem['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_navitem['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_navitem['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_navitem['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_navitem['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_navitem['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_navitem['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if ( ot_get_option( 'jonny_navitemhover' ) !='' ): ?>
			.navbar.affix-top li  a:hover, .navbar.affix-top li  .active > a, .navbar.affix-top li.active > a {
				color: <?php echo esc_attr( ot_get_option( 'jonny_navitemhover' ) ); ?> !important;
			}

			<?php endif; ?>
	
			<?php $jonny_navitem_affix = ot_get_option( 'jonny_navitem_affix', array() ); ?>
			<?php if($jonny_navitem_affix) { ?>
			.navbar.affix li  a, .navbar.affix > li > a {
				color: <?php echo esc_attr( $jonny_navitem_affix['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_navitem_affix['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_navitem_affix['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_navitem_affix['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_navitem_affix['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_navitem_affix['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_navitem_affix['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_navitem_affix['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_navitem_affix['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_navitem_affix['text-transform'] ) ; ?>;
			}

			<?php } ?>
			<?php if ( ot_get_option( 'jonny_navitemhover_affix' ) !='' ): ?>
			.navbar.affix li  a:hover, .navbar.affix li  .active > a, .navbar.affix li.active > a {
				color: <?php echo esc_attr( ot_get_option( 'jonny_navitemhover_affix' ) ); ?> !important;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_navigationbg' ) !='' ): ?>

			.navbar-desctop.affix-top .navbar-desctop li > a:hover,
			.navbar-desctop.affix-top .navbar-desctop .active > a {
				color: <?php echo esc_attr( ot_get_option( 'jonny_navigationbg' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarwidgettitlecolor' ) !='' ): ?>
			.widget-title {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarwidgettitlecolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarwidgetgeneralcolor' ) !='' ): ?>
			.widget ul, .widget li, .col-base ul, .col-base li  {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarwidgetgeneralcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarlinkcolor' ) !='' ): ?>
			.widget ul li a, .col-base ul li a {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarlinkcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarlinkhovercolor' ) !='' ): ?>
			.widget ul li a:hover, .col-base ul li a:hover {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarlinkhovercolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarsearchsubmittextcolor' ) !='' ): ?>
			input[type="text"], input[type="password"], input[type="search"], input[type="email"], input[type="phone"], input[type="tel"], textarea, select {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarsearchsubmittextcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_sidebarsearchsubmitbgcolor' ) !='' ): ?>
			.search-form button {
				color: <?php echo esc_attr( ot_get_option( 'jonny_sidebarsearchsubmitbgcolor' ) ); ?>;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_blogheaderpaddingtop' ) !='' && ot_get_option( 'jonny_blogheaderpaddingtop' ) !='17'): ?>

			.page .main-inner , .category .main-inner {

				padding-top: <?php echo esc_attr( ot_get_option( 'jonny_blogheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'jonny_blogheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_blogheadingcolor' ) !='' ): ?>
			.page .main-blog h1, .category .main-blog h1, .page .main-blog p.lead, .category .main-blog p.lead {
				color: <?php echo esc_attr( ot_get_option( 'jonny_blogheadingcolor' ) ); ?>;
			}
			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_blogsubtitlecolor' ) !='' ): ?>
			.category .blog-list h3.post-title {
				color: <?php echo esc_attr( ot_get_option( 'jonny_blogsubtitlecolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_m_c' ) !='' ): ?>
			.showcase-item-hover {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_m_c' ) ); ?> !important;
			}

			.team-caption {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_m_c' ) ); ?> !important;
			}

			.promo:before {
				background: <?php echo esc_attr( ot_get_option( 'jonny_m_c' ) ); ?> !important;
			}

			.address-panel-2 {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_m_c' ) ); ?> !important;
			}

			<?php endif; ?>
			<?php if ( ot_get_option('jonny_mask') == 'off') : ?>
			.showcase-item-hover {
				background-color: transparent;
			}



			<?php endif; ?>

			<?php if ( ot_get_option('jonny_mask_c_page_header') == 'off') : ?>
			.main-blog {
				background: none !important;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_frontpage_header_slogan_color' ) !='' ): ?>
			.home p {
				color: <?php echo esc_attr( ot_get_option( 'jonny_frontpage_header_slogan_color' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_frontpage_header_buttonbg_color' ) !='' ): ?>
			.home .btn, .home [type="submit"] {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_frontpage_header_buttonbg_color' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_frontpage_header_buttonbg_hover_color' ) !='' ): ?>
			.home .btn:hover, .home .btn:focus, .home [type="submit"]:hover, .home [type="submit"]:focus {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_frontpage_header_buttonbg_hover_color' ) ); ?>;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_singleheadingcolor' ) !='' ): ?>
			.single .main-inner h1,.single .main-inner p.lead {
				color: <?php echo esc_attr( ot_get_option( 'jonny_singleheadingcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_singleheaderparagraphcolor' ) !='' ): ?>
			.single .blog-list h3 {
				color: <?php echo esc_attr( ot_get_option( 'jonny_singleheaderparagraphcolor' ) ); ?> !important;
			}

			<?php endif; ?>

			<?php if ((    ot_get_option( 'jonny_singleheaderpaddingtop' ) !='' and ot_get_option( 'jonny_singleheaderpaddingtop' ) !='17') ||(ot_get_option( 'jonny_singleheaderpaddingbottom' ) !='' &&  ot_get_option( 'jonny_singleheaderpaddingbottom' ) !='14' )): ?>

			.single .main-inner   {
				padding-top: <?php echo esc_attr( ot_get_option( 'jonny_singleheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'jonny_singleheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>

			<?php $jonny_archiveheadingcolor = ot_get_option( 'jonny_archiveheadingcolor', array() ); ?>
			<?php if($jonny_archiveheadingcolor) { ?>
			.archive .main-inner h1 {
				color: <?php echo esc_attr( $jonny_archiveheadingcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_archiveheadingcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_archiveheadingcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_archiveheadingcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_archiveheadingcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_archiveheadingcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_archiveheadingcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_archiveheadingcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_archiveheadingcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_archiveheadingcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if (( ot_get_option( 'jonny_archiveheaderpaddingtop' ) !=''  &&   ot_get_option( 'jonny_archiveheaderpaddingtop' ) !='17') ||( ot_get_option( 'jonny_archiveheaderpaddingbottom' ) !='' && ot_get_option( 'jonny_archiveheaderpaddingbottom' ) !='14' )): ?>

			.archive .main-inner  {
				padding-top: <?php echo esc_attr( ot_get_option( 'jonny_archiveheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'jonny_archiveheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_errorpageheadbg' ) !='' ): ?>
			.main-404 {
				background: url( <?php echo esc_attr( ot_get_option( 'jonny_errorpageheadbg' ) ); ?>);
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_errorheaderbgcolor' ) !='' ): ?>
			.main-404 {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_errorheaderbgcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php $jonny_errorheadingcolor = ot_get_option( 'jonny_errorheadingcolor', array() ); ?>
			<?php if($jonny_errorheadingcolor) { ?>
			.error404 .main-inner h1 {
				color: <?php echo esc_attr( $jonny_errorheadingcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_errorheadingcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_errorheadingcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_errorheadingcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_errorheadingcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_errorheadingcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_errorheadingcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_errorheadingcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_errorheadingcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_errorheadingcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if ( ot_get_option( 'jonny_errorheadingcolor' ) !='' ): ?>
			.main-404  h1 {
				color: <?php echo esc_attr( ot_get_option( 'jonny_errorheadingcolor' ) ); ?>;
			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_errorheaderparagraphcolor' ) !='' ): ?>
			.main-404 p {
				color: <?php echo esc_attr( ot_get_option( 'jonny_errorheaderparagraphcolor' ) ); ?>;
			}

			<?php endif; ?>

			<?php $jonny_errorheaderparagraphcolor = ot_get_option( 'jonny_errorheaderparagraphcolor', array() ); ?>
			<?php if($jonny_errorheaderparagraphcolor) { ?>
			.main-404 p.lead {
				color: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_errorheaderparagraphcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if ((ot_get_option( 'jonny_errorheaderpaddingtop' ) !=''  &&   ot_get_option( 'jonny_errorheaderpaddingtop' ) != '17')||( ot_get_option( 'jonny_errorheaderpaddingbottom' ) !='' && ot_get_option( 'jonny_errorheaderpaddingbottom' )  !='14' )): ?>

			.main-404  {
				padding-top: <?php echo esc_attr( ot_get_option( 'jonny_errorheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'jonny_errorheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>

			<?php if ( ot_get_option( 'jonny_searchpageheadbg' ) !='' ): ?>
			.search {
				background: url( <?php echo esc_attr( ot_get_option( 'jonny_searchpageheadbg' ) ); ?>) no-repeat scroll center top / cover !important;
			}

			<?php endif; ?>
			


			<?php $jonny_searchheaderbgcolor = ot_get_option( 'jonny_searchheaderbgcolor', array() ); ?>
			<?php if($jonny_searchheaderbgcolor) { ?>
			.search  .main-inner h1  {
				color: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_searchheaderbgcolor['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_searchheaderbgcolor['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_searchheaderbgcolor['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_searchheaderbgcolor['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_searchheaderbgcolor['text-transform'] ) ; ?>;
			}

			<?php } ?>


			<?php if ( ot_get_option( 'jonny_search_heading_fontsize' ) !='' ): ?>
			.search .main-inner h1 {
				font-size: <?php echo esc_attr( ot_get_option( 'jonny_search_heading_fontsize' ) ); ?>px;
			}

			<?php endif; ?>


			<?php if ( ot_get_option( 'jonny_searchheaderpaddingtop' ) !='' && ot_get_option( 'jonny_searchheaderpaddingtop' ) !='17' ): ?>

			.search .main-inner {

				padding-top: <?php echo esc_attr( ot_get_option( 'jonny_searchheaderpaddingtop' ) ); ?>em !important;
				padding-bottom: <?php echo esc_attr( ot_get_option( 'jonny_searchheaderpaddingbottom' ) ); ?>em !important;
				padding-left: 0em;
				padding-right: 0em;
			}

			<?php endif; ?>



			<?php
			  /*
			 * Typography
			 */
			 $jonny_tipigrof = ot_get_option( 'jonny_tipigrof', array() ); ?>
			<?php if($jonny_tipigrof) { ?>
			body {
				color: <?php echo esc_attr( $jonny_tipigrof['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof['text-transform'] ) ; ?>;
			}

			<?php } ?>
			<?php if ( ot_get_option( 'jonny_blogheaderbgcolor' ) !='' ): ?>
			.page .main, .single .main, 	.category .main {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_blogheaderbgcolor' ) ); ?> !important;

			}

			<?php endif; ?>
			<?php if ( ot_get_option( 'jonny_blogheaderbgcolor_mask' ) !='' ): ?>
			.page .main-inner:before, .single .main-inner:before, 	.category .main-inner:before {
				background-color: <?php echo esc_attr( ot_get_option( 'jonny_blogheaderbgcolor_mask' ) ); ?> !important;

			}

			<?php endif; ?>
			<?php

			 $jonny_tipigrof1 = ot_get_option( 'jonny_tipigrof1', array() ); ?>
			<?php if( $jonny_tipigrof1 ) { ?>
			h1 {
				color: <?php echo esc_attr( $jonny_tipigrof1['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof1['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof1['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof1['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof1['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof1['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof1['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof1['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof1['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof1['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $jonny_tipigrof2 = ot_get_option( 'jonny_tipigrof2', array() ); ?>
			<?php if($jonny_tipigrof2) { ?>
			h2 {
				color: <?php echo esc_attr( $jonny_tipigrof2['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof2['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof2['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof2['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof2['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof2['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof2['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof2['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof2['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof2['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $jonny_tipigrof3 = ot_get_option( 'jonny_tipigrof3', array() ); ?>
			<?php if($jonny_tipigrof3) { ?>
			h3 {
				color: <?php echo esc_attr( $jonny_tipigrof3['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof3['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof3['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof3['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof3['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof3['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof3['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof3['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof3['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof3['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $jonny_tipigrof4 = ot_get_option( 'jonny_tipigrof4', array() ); ?>
			<?php if($jonny_tipigrof4) { ?>
			h4 {
				color: <?php echo esc_attr( $jonny_tipigrof4['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof4['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof4['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof4['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof4['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof4['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof4['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof4['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof4['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof4['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $jonny_tipigrof5 = ot_get_option( 'jonny_tipigrof5', array() ); ?>
			<?php if($jonny_tipigrof5) { ?>
			h5 {
				color: <?php echo esc_attr( $jonny_tipigrof5['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof5['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof5['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof5['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof5['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof5['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof5['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof5['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof5['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof5['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php $jonny_tipigrof6 = ot_get_option( 'jonny_tipigrof6', array() ); ?>
			<?php if($jonny_tipigrof6) { ?>
			h6 {
				color: <?php echo esc_attr( $jonny_tipigrof6['font-color'] ) ; ?>;
				font-family: <?php echo esc_attr( $jonny_tipigrof6['font-family'] ) ; ?> !important;
				font-size: <?php echo esc_attr( $jonny_tipigrof6['font-size'] ) ; ?>;
				font-style: <?php echo esc_attr( $jonny_tipigrof6['font-style'] ) ; ?>;
				font-variant: <?php echo esc_attr( $jonny_tipigrof6['font-variant'] ) ; ?>;
				font-weight: <?php echo esc_attr( $jonny_tipigrof6['font-weight'] ) ; ?>;
				letter-spacing: <?php echo esc_attr( $jonny_tipigrof6['letter-spacing'] ) ; ?>;
				line-height: <?php echo esc_attr( $jonny_tipigrof6['line-height'] ) ; ?>;
				text-decoration: <?php echo esc_attr( $jonny_tipigrof6['text-decoration'] ) ; ?>;
				text-transform: <?php echo esc_attr( $jonny_tipigrof6['text-transform'] ) ; ?>;
			}

			<?php } ?>

			<?php if (ot_get_option('additionalcss') != '') {
				echo wp_kses_post(ot_get_option('additionalcss'));
			} ?>


		</style>

		<?php if ( ot_get_option( 'additionaljs' ) != '' ): ?>
			<script type="text/javascript">
				<?php if ( ot_get_option( 'additionaljs' ) ) {
					echo wp_kses_post( ot_get_option( 'additionaljs' ) );
				} ?>
			</script>
		<?php endif; ?>

	<?php endif; ?>
<?php }

add_action( 'wp_head', 'jonny_custom_styling' );