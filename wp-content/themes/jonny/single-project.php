<?php  get_header();
the_post();
?>
<div class="page-wrapper">
    <div class="copy-bottom white boxed"> <?php
        echo wp_kses_post(
            do_shortcode( ( get_theme_mod( 'footer_copyright', ' &copy; ' . esc_html__( 'jonny ', 'jonny' ) . date( 'Y' ) . ' ' ) ) ) ); ?></div>


    <div class="lang-bottom white boxed">
        <div class="menu-lang">
            <?php
            if ( function_exists( 'jonny_after_footer_menu_fn' ) ) {

                do_action('jonny-after-footer-menu');

            }
            ?>
        </div>
    </div>

        <?php the_content(); ?>

</div>

<?php  get_footer(); ?>
