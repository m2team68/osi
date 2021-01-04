<?php get_header(); ?>




    <!-- Content -->
    <div class="content">
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
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

					if ( $positin_sidebar == 'left' ) {
						get_sidebar();
					}
					?>
                    <div class=" primary col-md-8">

						<?php if ( have_posts() ) : ?>
							<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								?>
								<?php get_template_part( 'partials/content', get_post_format() ); ?>

							<?php endwhile;


						else :

						endif; ?>
                        <section class="section-add-comment section-primary">
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif; ?>
                        </section>
                    </div>
					<?php
					if ( $positin_sidebar == 'right' ) {
						get_sidebar();
					}
					?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

