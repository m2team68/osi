<?php
$jonny_class = jonny_get_global_class();


$jonny_cat = 0;
$jonny_category = get_category( get_query_var( 'cat' ) );
if ( isset( $jonny_category->cat_ID ) ) {
	$jonny_cat = $jonny_category->cat_ID;
} else {
	$jonny_cat = 0;
}
 ?>
    <article <?php post_class( 'blog post blog_item  post-item ' ); ?>>
        <div class="row">
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="blog-thumbnail col-lg-6">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
              <div class="blog-thumbnail-bg col-lg-6 visible-lg" style="background-image: url(<?php the_post_thumbnail_url("jonny-image-760x390-croped"); ?>);"></div>
            </a>
            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
              <div class="blog-thumbnail-img hidden-lg"><img src="<?php the_post_thumbnail_url("jonny-image-760x390-croped"); ?>" alt="" class="img-responsive"></div>
            </a>
          </div>

          <div class="blog-info col-lg-6">
            <?php  jonny_get_list_cats_blog(); ?>
            <h3 class="blog-title">
              <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="text-muted"><?php echo jonny_limit_excerpt( jonny_words_limit() ); ?></p>
            <div class="blog-meta">
              <div class="pull-left">
               <?php esc_html_e( 'by ', 'jonny' ); ?><a
                href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="user"><?php echo esc_html( get_the_author() ); ?></a>
              </div>
               <div class="pull-right">
                <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
              </div>
            </div>
          </div>

        <?php } else { ?>
          <div class="blog-info col-md-12">
            <?php  jonny_get_list_cats_blog(); ?>
            <h3 class="blog-title">
              <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="text-muted"><?php echo jonny_limit_excerpt( jonny_words_limit() ); ?></p>
            <div class="blog-meta">
              <div class="pull-left">
               <?php esc_html_e( 'by ', 'jonny' ); ?><a
                href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="user"><?php echo esc_html( get_the_author() ); ?></a>
              </div>
               <div class="pull-right">
                <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </article>