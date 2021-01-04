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

        if ( $positin_sidebar == 'left' ) {
            get_sidebar();
        }
        ?>
        <div class="blog-list bg-light section">
            <div class="container">
                <h1 class="page-title"><?php printf(esc_html(esc_html__('Search Results for: %s', 'jonny')), get_search_query()); ?></h1>
                <div class="row">
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
                                ?>
                                <article <?php post_class('post'); ?>>

                                    <header class="post-header">
                                        <p><?php
                                            esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jonny'); ?>
                                        </p>

                                    </header>

                                    <div class="post-entry text-left">
                                        <?php   get_search_form(); ?>
                                    </div>

                                </article>
                             <?php
                            endif; ?>
                        </div>
                        <div class="clearfix text-center">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-white load-more">
                                <?php 
                                    $text = get_theme_mod( 'jonny_blog_list_text' );
                                    if ( isset( $text{0} ) ) {
                                        echo wp_kses_post( $text ); 
                                    }
                                ?>
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
    <?php if ( $type == 'col3' ) { ?>

        <div class="blog-list bg-light section">
            <div class="container">
                <h1 class="page-title"> <?php printf(esc_html(esc_html__('Search Results for: %s', 'jonny')), get_search_query()); ?></h1>
                <div class="primary">
                    <div class="row-blog row b-grid">
                        <?php if ( have_posts() ) : ?>
                            <?php
                            while ( have_posts() ) : the_post(); ?>
                                <div class="col-blog col-sm-6 col-md-4">
                                    <?php get_template_part( 'partials/col2content' ); ?>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                            ?>


                        <?php else :
                            ?>
                            <article <?php post_class('post'); ?>>

                                <header class="post-header">
                                    <p><?php
                                        esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jonny'); ?>
                                    </p>

                                </header>

                                <div class="post-entry text-left">
                        <?php   get_search_form(); ?>
                                </div>

                            </article>
                         <?php
                        endif; ?>
                    </div>
                    <div class="clearfix text-center">
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

        if ( $positin_sidebar == 'left' ) {
            get_sidebar();
        }
        ?>
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
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
                                ?>
                                    <article <?php post_class('post'); ?>>

                                        <header class="post-header">
                                            <p><?php
                                                esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jonny'); ?>
                                            </p>

                                        </header>

                                        <div class="post-entry text-left">
                                <?php   get_search_form(); ?>
                                        </div>

                                    </article>
                                 <?php
                            endif; ?>
                        </div>
                        <div class="clearfix text-center">
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

<?php } else { ?>

    <div class="blog-list bg-light section">

        <div class="container">
            <h1 class="page-title"> <?php printf(esc_html(esc_html__('Search Results for: %s', 'jonny')), get_search_query()); ?></h1>
            <div class="row b-grid">
                <?php if ( have_posts() ) : ?>
                                <?php
                                while ( have_posts() ) : the_post(); ?>
                                    <?php  get_template_part( 'partials/col3content' ); ?>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>


                            <?php else :
                                ?>
                                    <article <?php post_class('post  col-md-6'); ?>>

                                        <header class="post-header">
                                            <p><?php
                                                esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jonny'); ?>
                                            </p>

                                        </header>

                                        <div class="post-entry text-left">
                                <?php   get_search_form(); ?>
                                        </div>

                                    </article>
                                 <?php
                            endif; ?>

            </div>
        </div>
    </div>

<?php } ?>

<?php get_footer(); ?>
