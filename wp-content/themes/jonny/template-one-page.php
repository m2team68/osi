<?php
/**
 * Template Name: One Page
 *
 */
get_header(); ?>
  <div class="copy-bottom white boxed">
      <?php
      echo wp_kses_post(
          do_shortcode( ( get_theme_mod( 'footer_copyright', ' &copy; ' . esc_html__( 'jonny ', 'jonny' ) . date( 'Y' ) . ' ' ) ) ) ); ?>
  </div>

    <div class="lang-bottom white boxed">
        <?php
        if ( function_exists( 'jonny_after_footer_menu_fn' ) ) {

            do_action('jonny-after-footer-menu');

        }
        ?>
    </div>

<div class="pagepiling">
<?php the_post(); ?>
<?php
the_content(); ?>


</div>
<?php wp_footer(); ?>
</body>
</html>
