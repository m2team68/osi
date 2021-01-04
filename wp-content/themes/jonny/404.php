<?php
get_header(); ?>

<main class="main main-inner main-404 jarallax"   data-jarallax='{"speed": 0.6}' style="background: url('<?php $img = get_theme_mod('jonny_404_top_img'); if (isset($img[0])) { echo wp_kses_post($img); }?>');">
  <div class="container">
    <div class="section">
      <?php $main_title = get_theme_mod('jonny_404_main_title',  esc_html__('Oops... You got lost.','jonny'));
        if (isset($main_title[0])) { ?>   
          <h1><?php echo wp_kses_post($main_title); ?> </h1>
        <?php }?>
        <div class="row">
		    <?php $top_desc = get_theme_mod('jonny_404_top_desc', esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse non earum consectetur, ratione.','jonny'));
            if (isset($top_desc[0])) { ?>
                <p class="col-md-6"><?php echo wp_kses_post($top_desc); ?></p>
            <?php }?>
      	</div>
      	<?php $btn_text = get_theme_mod('jonny_404_btn_text',esc_html__('Go Back','jonny'));

                    if (isset($btn_text[0])) {

                        $url = get_theme_mod('jonny_404_btn_url',esc_url_raw(get_home_url('/')));
                        ?>
                        <a href="<?php echo esc_url($url); ?>" class="btn"><?php echo wp_kses_post($btn_text); ?> </a>

                    <?php }?>

    </div>
  </div>
</main>

		<?php get_footer(); ?>
