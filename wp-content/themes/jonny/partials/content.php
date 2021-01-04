<?php
$jonny_class = jonny_get_global_class();
if ( !is_single() && ( !is_page() ) ) { 


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
			<?php

			if ( has_post_thumbnail() ) {
				?>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="blog-thumbnail col-md-8">
					<a href="<?php echo esc_url( get_the_permalink() ); ?>">
						<div class="blog-thumbnail-bg col-md-8 visible-md visible-lg"
						     style="background-image: url(<?php the_post_thumbnail_url("jonny-image-760x390-croped"); ?>);">
						</div>
					</a>
					
					<a href="<?php echo esc_url( get_the_permalink() ); ?>">
						<div class="blog-thumbnail-img visible-xs visible-sm">
							<img src="<?php the_post_thumbnail_url("jonny-image-760x390-croped"); ?>" alt="" class="img-responsive">
						</div>
					</a>
				</div>
				<?php endif; ?>
				<div class="blog-info col-md-4">
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
				<?php
			} else { ?>
				<div class="blog-info col-md-12">
					<?php  jonny_get_list_cats_blog(); ?>
					<h3 class="blog-title">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php $title = the_title('','',false);
					if (empty($title)) { 
					    the_ID(); 
					} else { 
					    the_title();
					}  ?></a>
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
				<?php

			}
			?>


		</div>
	</article>

<?php } else { ?>

	<article class="post ">
		<?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
			 <img src="<?php the_post_thumbnail_url("jonny-image-760x390-croped"); ?>" alt="" class="img-responsive">
        </div>
       	<?php endif; ?>

        <?php  if(!is_page()){ ?>
        <div class="post-meta <?php  $categories = get_the_category( $post->ID ); if (isset( $categories[0]->term_id)) { echo 'has-rubric'; }?>">
         	<?php jonny_get_list_cats(); ?>
          <div class="post-date">
            <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
          </div>
          <div class="post-author">
             <?php esc_html_e( 'by ', 'jonny' ); ?>
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="user"><?php echo esc_html( get_the_author() ); ?></a>
          </div>
        </div>

        <?php  } ?>

        <h3 class="post-title"><?php the_title(); ?></h3>
        
        <div class="text-muted">
          <?php the_content(); ?>
        </div>
        <?php if (jonny_link_pages()) : ?>
		  <div class="post_pagination">
		   <?php
		   	echo jonny_link_pages();
		   ?>
		  </div>
		<?php endif; ?>
		<?php if ( has_tag() ) : ?>
        <footer class="post-footer">
          <div class="widget widget_tags">
            <h3 class="widget-title">
            	<?php if ( has_tag() ) : ?>
					<?php esc_html_e( 'Tags ', 'jonny' ); ?>
				<?php endif; ?>
           	</h3>
            <div class="blog-tags">
             	<?php the_tags( '', '' ); ?>
            </div>
          </div>
        </footer>
        <?php endif; ?>
      </article>

<?php } ?>