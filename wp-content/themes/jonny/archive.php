<?php get_header();

$jonny_cat = 0;
$jonny_category = get_category( get_query_var( 'cat' ) );
if ( isset( $jonny_category->cat_ID ) ) {
	$jonny_cat = $jonny_category->cat_ID;
} else {
	$jonny_cat = 0;
}

?>



<?php $type = jonny_get_blog_type();

if ( $type == 'col2' || $type == 'col3' || $type == 'col1' ) { ?>
	<?php if ( $type == 'col2' ) { ?>
		<?php

		$positin_sidebar = "";

		if ( get_theme_mod( 'jonny_sidebar_position', 's2' ) == 's1' ) {
			$positin_sidebar = 'left';
		} else {
			$positin_sidebar = 'right';
		}

		if ( isset( $_GET['showas'] ) && $_GET['showas'] == 'left' ) {
			$positin_sidebar = 'left';
		} elseif ( isset( $_GET['showas'] ) && $_GET['showas'] == 'right' ) {
			$positin_sidebar = 'right';
		}
		?>
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
					<?php
					if ( $positin_sidebar == 'left' ) {
						get_sidebar();
					}
					?>
                    <div class="primary col-md-8 ">
                        <div class="row-blog row b-grid">
							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post(); ?>
                                    <div class="col-blog col-sm-6">
										<?php get_template_part( 'partials/col2content' ); ?>
                                    </div>
								<?php endwhile;
								wp_reset_postdata();
								?>


							<?php else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );
							endif; ?>
                        </div>
                        <div class="overview text-center">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                               class="btn btn-white load-more"> <?php esc_html_e( 'More posts', 'jonny' ) ?></a>
                        </div>
                    </div>
					<?php
					if ( $positin_sidebar == 'right' ) {
						get_sidebar();
					}
					?>
                </div>
            </div>
        </div>
	<?php } ?>
	<?php if ( $type == 'col3' ) { ?>

        <div class="blog-list bg-light section">
            <div class="container">
                <div class="primary">
                    <div class="row-blog row b-grid">
						<?php if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post(); ?>
                                <div class="col-blog col-base col-sm-6 col-md-4">
									<?php get_template_part( 'partials/col2content' ); ?>
                                </div>
							<?php endwhile;
							wp_reset_postdata();
							?>


						<?php else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );
						endif; ?>
                    </div>
                    <div class="overview text-center">
                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                           class="btn btn-white load-more"> <?php esc_html_e( 'More posts', 'jonny' ) ?></a>
                    </div>
                </div>
            </div>
        </div>

	<?php } ?>

	<?php if ( $type == 'col1' ) { ?>
		<?php

		$positin_sidebar = "";

		if ( get_theme_mod( 'jonny_sidebar_position', 's2' ) == 's1' ) {
			$positin_sidebar = 'left';
		} else {
			$positin_sidebar = 'right';
		}

		if ( isset( $_GET['showas'] ) && $_GET['showas'] == 'left' ) {
			$positin_sidebar = 'left';
		} elseif ( isset( $_GET['showas'] ) && $_GET['showas'] == 'right' ) {
			$positin_sidebar = 'right';
		}
		?>
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
					<?php
					if ( $positin_sidebar == 'left' ) {
						get_sidebar();
					}
					?>
                    <div class="primary col-md-8 ">
                        <div class="b-grid">
							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'partials/col3content' ); ?>
								<?php endwhile;
								wp_reset_postdata();
								?>


							<?php else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );
							endif; ?>
                        </div>
                        <div class="overview text-center">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-white load-more">
								<?php esc_html_e( 'More posts', 'jonny' ) ?>
                            </a>
                        </div>
                    </div>
					<?php
					if ( $positin_sidebar == 'right' ) {
						get_sidebar();
					}
					?>
                </div>
            </div>
        </div>
	<?php } ?>

<?php } else { ?>

    <div class="blog-list bg-light section">

        <div class="container">
            <h1  class="page-title">        	<?php
	            the_archive_title();
				?></h1>
            <div class="b-grid">
				<?php if ( have_posts() ) { ?>
					<?php
					// Start the Loop.
					while ( have_posts() ) {
						the_post();
						get_template_part( 'partials/content', get_post_format() );

					}
				}

				wp_reset_postdata();
				?>

            </div>
            <div class="text-center">
	            <?php if ( $wp_query->max_num_pages > 1 ): ?>

                    <a href="#"
                   class="btn btn-white load-more more_btn2"> <?php esc_html_e( 'More posts', 'jonny' ) ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="d-none">
		<?php

		ob_start();
		the_posts_pagination();
		wp_link_pages( array(
			'echo' => 0
		) );
		ob_get_clean();
		?>
    </div>
<?php } ?>
<?php get_footer(); ?>