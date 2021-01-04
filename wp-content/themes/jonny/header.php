<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body <?php  body_class('body-full-page');  ?>>

<?php
if ( get_theme_mod( 'jonny_performans_preloader', true ) != false ) {
?>
<div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>
<?php } ?>
<!-- Content CLick Capture-->

<div class="click-capture"></div>

<!-- Sidebar Menu-->

<div class="sidebar-menu">
    <span class="close-menu icon-cross2 right-boxed"></span>

	<?php
	if ( function_exists( 'jonny_before_menu_fn' ) ) {

		do_action('jonny-before-menu');

	}
	?>


	<?php


	?>
	<?php $jonny_defaults = array(
		'theme_location' => 'jonny_main',
		'menu' => '',
		'container' => false,
		'container_class' => '',
		'container_id' => '',
		'menu_class' => '',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul id="%1$s" class="menu-list right-boxed %2$s">%3$s</ul>',
		'depth' => 0
	);


	if ( has_nav_menu( 'jonny_main' ) ) {
		wp_nav_menu( $jonny_defaults );
	}


	?>


    <div class="menu-footer right-boxed">
        <div class="social-list">

			<?php
			if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_social_shortcode' ) ) > 8 ):
				echo do_shortcode( get_theme_mod( 'jonny_social_networks_control_social_shortcode' ) );
			endif; ?>

			<?php
			if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_twitter' ) ) > 8 ): ?>

                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_twitter' ) ); ?>"
                   class="icon ion-social-twitter"></a>
			<?php endif; ?>

			<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_facebook' ) ) > 8 ): ?>
                <a target="_blank"  href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_facebook' ) ); ?>"
                   class="icon ion-social-facebook"></a>


			<?php endif; ?>

			<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_googleplus' ) ) > 8 ): ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_googleplus' ) ); ?>"
                   class="icon ion-social-googleplus"></a>


			<?php endif; ?>

			<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_linkedin' ) ) > 8 ): ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_linkedin' ) ); ?>"
                   class="icon ion-social-linkedin"></a>


			<?php endif; ?>
			<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_dribbble' ) ) > 8 ): ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_dribbble' ) ); ?>"
                   class="icon ion-social-dribbble-outline"></a>


			<?php endif; ?>


        </div>
        <div class="copy">
			<?php
			echo wp_kses_post(
				do_shortcode( ( get_theme_mod( 'side_menu_copyright', ' &copy; ' . esc_html__( 'Jonny ', 'jonny' ) . date('Y').esc_html__('. All Rights Resevered ', 'jonny' ) .  '<br/>' . 'Design by LoganCee' ) ) ) ); ?>
        </div>
    </div>
</div>
<!-- Navbar -->


<header class="osi-header hidden-sm hidden-xs">
    <div class="logo">
        <?php
            $logo = get_theme_mod( 'jonny_logo_small' );
        ?>
        <img class="brand-img" alt="" src="<?php echo esc_url( $logo ); ?>">
    </div>
    <div class="header-menu">
        <?php wp_nav_menu([
            'container_id' => 'navigation'
        ]); ?>
    </div>
</header>

<header class="hidden visible-xs-block visible-sm-block navbar navbar-2 navbar-white boxed <?php  if(!is_front_page()  && !jonny_is_single_project()){ ?> navbar-fixed <?php  } ?>">
    <div class="navbar-bg"></div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <a class="brand" href="<?php  echo  esc_url(get_home_url('/')); ?>">
	<?php
	$logo = get_theme_mod( 'jonny_logo_small' );
	$logo_text = get_theme_mod( 'logo_text' );
	$logo_name = get_theme_mod( 'logo_name' );

	if ( isset( $logo{2} ) ) {
	?>



        <img class="brand-img" alt="" src="<?php echo esc_url( $logo ); ?>">
        <div class="brand-info">
            <div class="brand-name"><?php if ( isset( $logo_name{0} ) ) {
					echo  esc_html( $logo_name );
				} ?></div>
            <div class="brand-text"><?php if ( isset( $logo_text{0} ) ) {
					echo esc_html( $logo_text );
				} ?></div>
        </div>



		<?php   } else {

			?>



            <div class="brand-info">
                <div class="brand-name "><?php

					echo esc_html( get_option( 'blogname' ) );

					?></div>

            </div>
			<?php
		}

		?>


    </a>


    <div class="social-list hidden-xs">

		<?php
		if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_social_shortcode' ) ) > 8 ):
			echo do_shortcode( get_theme_mod( 'jonny_social_networks_control_social_shortcode' ) );
		endif; ?>

		<?php
		if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_twitter' ) ) > 8 ): ?>

            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_twitter' ) ); ?>"
               class="icon ion-social-twitter"></a>
		<?php endif; ?>

		<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_facebook' ) ) > 8 ): ?>
            <a target="_blank"  href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_facebook' ) ); ?>"
               class="icon ion-social-facebook"></a>


		<?php endif; ?>

		<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_googleplus' ) ) > 8 ): ?>
            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_googleplus' ) ); ?>"
               class="icon ion-social-googleplus"></a>


		<?php endif; ?>

		<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_linkedin' ) ) > 8 ): ?>
            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_linkedin' ) ); ?>"
               class="icon ion-social-linkedin"></a>


		<?php endif; ?>
		<?php if ( mb_strlen( get_theme_mod( 'jonny_social_networks_control_dribbble' ) ) > 8 ): ?>
            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'jonny_social_networks_control_dribbble' ) ); ?>"
               class="icon ion-social-dribbble-outline"></a>


		<?php endif; ?>


    </div>

</header>