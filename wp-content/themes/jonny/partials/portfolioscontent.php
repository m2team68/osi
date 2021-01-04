<div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
   	<article class="blog">
      <div class="blog-thumbnail">
        <a href="<?php echo esc_url( get_the_permalink() ); ?>">
          <div class="blog-thumbnail-img">
          <img alt="" class="img-responsive" src="<?php the_post_thumbnail_url("jonny-image-360x240-croped"); ?>"></div>
        </a>
      </div>
      <div class="blog-info">
        <a href="<?php $terms = get_the_terms(get_the_ID(), 'portfolio_categories');
				foreach ($terms as $term) {
					$term_link = get_term_link( $term );
					echo esc_url( $term_link );
				} 
			?>" class="blog-rubric">
        	<?php $terms = get_the_terms(get_the_ID(), 'portfolio_categories');
				foreach ($terms as $term) {
					echo esc_html($term->name);
				} 
			?>
		</a>
        <h3 class="blog-title">
          <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
        </h3>
      </div>
    </article>
</div>