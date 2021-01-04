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
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="blog-thumbnail">
        <a href="<?php echo esc_url( get_the_permalink() ); ?>">
          <div class="blog-thumbnail-img">
            <img src="<?php the_post_thumbnail_url("jonny-image-324x216-croped"); ?>" alt="" class="img-responsive">
          </div>
        </a>
      </div>
      <?php endif; ?>
      <div class="blog-info">
        <?php  jonny_get_list_cats_blog(); ?>
        <h3 class="blog-title">
          <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="blog-meta">
          <div class="pull-left">
            <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
          </div>
           <div class="pull-right">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="read-more"><?php esc_html_e( 'Read more ', 'jonny' ); ?> &rarr;</a>
          </div>
        </div>
      </div>
    </article>