<?php get_header();

$jonny = jonny_get_global_class();
$jonny_cat = 0;
$jonny_category = get_category(get_query_var('cat'));
if (isset($jonny_category->cat_ID)) {
	$jonny_cat = $jonny_category->cat_ID;
} else {
	$jonny_cat = 0;
}


?>
	<main class="main main-inner main-portfolio jarallax <?php echo esc_attr( $css_class ); ?>" data-jarallax='{"speed": 0.7}'>
      <div class="container">
        <div class="opener">
          <h1><?php $terms = get_the_terms(get_the_ID(), 'portfolio_categories');

					foreach ($terms as $term) {
						echo esc_html($term->name);
					}


					?></h1>
          <p class="lead col-md-6 col-md-offset-3"><?php $terms = get_the_terms(get_the_ID(), 'portfolio_categories');

					foreach ($terms as $term) {
						echo esc_html($term->description);
					}


					?></p>
        </div>
      </div>
    </main>

	<div class="content">
		<!-- Portfolio -->

      <div class="section bg-light">
        <div class="section-content">
          <div class="container">
            <div class="row-blog row b-grid">
            	<?php if (have_posts()) { while (have_posts()) { the_post();
            		get_template_part( 'partials/portfolioscontent' ); 
            	} } wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <div class="overview text-center">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>"
               class="btn btn-white p-btn"> <?php esc_html_e( 'More posts', 'jonny' ) ?></a>
        </div>
      </div>
	</div>


<?php get_footer(); ?>
