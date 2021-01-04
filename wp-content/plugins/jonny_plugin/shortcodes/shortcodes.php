<?php
/*
*welcome
**/


add_shortcode( 'jonny_welcome', 'jonny_welcome_func' );
function jonny_welcome_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			't' => esc_html__( 'Welcome To', 'jonny' ),
			'vt' => esc_html__( 'Introduce', 'jonny' ),
			'desc' => esc_html__( 'Welcome To Jonny Design Studio', 'jonny' ),
			'd2' => esc_html__( 'Hello', 'jonny' ),
			'd1' => esc_html__( 'my name is jonny.', 'jonny' ),
			'css' => '',
			'src' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	$img_arr = wp_get_attachment_image_src( $atts['src'], 'full' );

	?>
    <div
            data-anchor="page1" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            class=" <?php echo esc_attr( $css_class ); ?>  pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
            <div class="section-bg"
				<?php if ( isset( $img_arr[0] ) ) { ?>
                    style="background-image:url('<?php echo esc_url( $img_arr[0] ); ?>');"
				<?php } ?>

            ></div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>

                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-6">
                                            <p class="subtitle-top">
												<?php echo do_shortcode( urldecode( base64_decode( $atts['t'] ) ) ); ?>
                                            </p>
                                            <h1 class="display-2 text-white">
												<?php if ( isset( $atts['d2']{1} ) ) { ?><span
                                                        class="text-primary"><?php echo esc_html( $atts['d2'] ); ?></span><?php } ?> <?php if ( isset( $atts['d1']{0} ) ) {
													echo esc_html( $atts['d1'] );
												} ?></h1>
                                            <div class="hr-bottom"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php
	return ob_get_clean();
}

/**
 * About me
 **/
add_shortcode( 'jonny_about_me', 'jonny_about_me_func' );
function jonny_about_me_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'vt' => esc_html__( 'what I do', 'jonny' ),
			't' => esc_html__( 'About me', 'jonny' ),
			'd1' => esc_html__( 'My mission is', 'jonny' ),
			'd2' => esc_html__( 'design &amp; develop', 'jonny' ),
			'd3' => esc_html__( 'the best Websites around', 'jonny' ),

			'desc' => esc_html__( 'About me', 'jonny' ),
			'cont' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.', 'jonny' ),
			'items' => '',
			'css' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <div
            data-anchor="page2" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section section-2">
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title text-dark hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>


                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5">

											<?php if ( isset( $atts['t']{0} ) ) { ?>
                                                <p class="subtitle-top text-dark"><?php echo esc_html( $atts['t'] ); ?></p>
											<?php } ?>


                                            <h2 class="title-uppercase"> <?php if ( isset( $atts['d1']{0} ) ) {
													echo esc_html( $atts['d1'] );
												} ?><br> <span
                                                        class="text-primary"><?php if ( isset( $atts['d2']{0} ) ) {
														echo esc_html( $atts['d2'] );
													} ?></span> <?php if ( isset( $atts['d3']{0} ) ) {
													echo esc_html( $atts['d3'] );
												} ?></h2>
											<?php echo do_shortcode( $content ); ?>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                            <div class="progress-bars">
												<?php
												$items_v = vc_param_group_parse_atts( $atts['items'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) { ?>
                                                        <div class="clearfix">
															<?php if ( isset( $item['title'] ) ) { ?>
                                                                <div class="number pull-left"><?php
																	echo esc_html( $item['title'] ); ?>
                                                                </div>
															<?php } ?>

                                                            <div
                                                                    class="number pull-right"> <?php if ( isset( $item['number'] ) ) {
																	echo esc_html( $item['number'] );
																	echo esc_html__( '%', 'jonny' );
																} ?></div>
                                                        </div>


                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: <?php if ( isset( $item['number'] ) ) {
																     echo esc_attr( $item['number'] );
																     echo esc_html__( '%', 'jonny' );
															     } ?>" aria-valuenow="0" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>

													<?php }
												}
												?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<?php
	return ob_get_clean();
}


/*
 *  jonny_works
 */


add_shortcode( 'jonny_works', 'jonny_works_func' );
function jonny_works_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'section_id' => '',
			'css' => '',
			'src' => '',
			'vt' => esc_html__( 'MY WORKS', 'jonny' ),
			't' => esc_html__( 'Featured works', 'jonny' ),
			'url' => '#',
			'icon' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $atts['src'] );

	?>


    <div <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            data-anchor="page3"
            class="<?php echo esc_attr( $css_class ); ?> pp-scrollable text-white section section-3">
        <div class="scroll-wrap">
            <div class="bg-changer">

				<?php
				foreach ( $arr_img as $item ) { ?>

					<?php

					$img_arr = wp_get_attachment_image_src( $item, 'full' );

					?>

                    <div class="section-bg"
                         style="background-image:url('<?php echo esc_url( $img_arr[0] ); ?>');"></div>
				<?php }
				?>


            </div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>


                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-12">
											<?php if ( isset( $atts['t']{0} ) ) { ?>
                                                <h2 class="title-uppercase text-white"><?php echo esc_html( $atts['t'] ); ?></h2>
											<?php } ?>


                                            <div class="row-project-box row">

												<?php
												$items_v = vc_param_group_parse_atts( $atts['items'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) {

														?>

                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-3">
                                                            <a href="<?php if ( isset( $item['url'][0] ) ) {
																echo esc_attr( $item['url'] );
															} ?> " class="project-box">
                                                                <div class="project-box-inner">
																	<?php if ( isset( $item['t'][0] ) ) {
																		?>
                                                                        <h5><?php echo esc_html( $item['t'] ); ?></h5>
																		<?php

																	} ?>

																	<?php if ( isset( $item['cat'][0] ) ) {
																		?>
                                                                        <div
                                                                                class="project-category"><?php echo esc_html( $item['cat'] ); ?></div>
																		<?php

																	} ?>


                                                                </div>
                                                            </a>
                                                        </div>

													<?php }
												}
												?>
                                            </div>

											<?php
											$link = $atts['url'];

											if ( isset( $link{1} ) ) {

												$link = vc_build_link( $link );
												if(isset($link['title']{1})) {

													$text = $link['title'] ? esc_attr( $link['title'] ) : '';
													$text = '<a class="h5 link-arrow text-white"  href="' . esc_attr( $link['url'] ) . '"' . ( $link['target'] ? ' target="' . esc_attr( $link['target'] ) . '"' : '' ) . ( $link['rel'] ? ' rel="' . esc_attr( $link['rel'] ) . '"' : '' ) . ( $link['title'] ? ' title="' . esc_attr( $link['title'] ) . '"' : '' ) . '><span>' . $text . '<i class="icon ' . esc_attr( $atts['icon'] ) . '"></i></a>';
													echo $text;
												}
												?>

												<?php


											} ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php


	return ob_get_clean();
}


/*
 *  jonny_services
 */


add_shortcode( 'jonny_services', 'jonny_services_func' );
function jonny_services_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'section_id' => '',
			'css' => '',
			'src' => '',
			'vt' => esc_html__( 'Services', 'jonny' ),
			't' => esc_html__( 'My services', 'jonny' ),
			'num' => esc_html__( '4', 'jonny' ),
			'url' => '#',
			'd2' => esc_html__( 'to make', 'jonny' ),
			'd3' => esc_html__( 'things easy and fun', 'jonny' ),
			'd1' => esc_html__( 'I like ', 'jonny' ),
			'cont' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$img_arr = wp_get_attachment_image_src( $atts['src'], 'full' );


	?>


    <div <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            data-anchor="page4" class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section section-4">
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title text-dark hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>


                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5">
                                            <p class="subtitle-top text-dark"><?php echo esc_html( $atts['t'] ); ?></p>


                                            <h2 class="title-uppercase"><?php if ( isset( $atts['d1']{0} ) ) {
													echo esc_html( $atts['d1'] );
												} ?> <span class="text-primary"><?php if ( isset( $atts['d2']{0} ) ) {
														echo esc_html( $atts['d2'] );
													} ?></span> <?php if ( isset( $atts['d3']{0} ) ) {
													echo esc_html( $atts['d3'] );
												} ?></h2>

											<?php
											$items_v = vc_param_group_parse_atts( $atts['items'] );
											if ( $items_v ) { ?>
                                                <ul class="service-list">
													<?php

													foreach ( $items_v as $item ) {

														?>

                                                        <li><a href="<?php if ( isset( $item['url'][0] ) ) {
																echo esc_attr( $item['url'] );
															} ?>"><?php if ( isset( $item['t'][0] ) ) {
																	echo esc_html( $item['t'] );
																} ?></a></li>

													<?php }

													?>

                                                </ul>

												<?php
											}
											?>

                                        </div>
                                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                            <div class="dots-image-2">
												<?php if ( isset( $img_arr{1} ) ) {
													?>
                                                    <img alt="" class="img-responsive"
                                                         src="<?php echo esc_url( $img_arr[0] ); ?>">

												<?php } ?>
                                                <div class="dots"></div>
                                                <div class="experience-info">
													<?php if ( isset( $atts['num']{0} ) ) { ?>
                                                        <div class="number"><?php echo esc_html( $atts['num'] ); ?></div>
													<?php } ?>
                                                    <div class="text">
														<?php echo do_shortcode( urldecode( base64_decode( $atts['cont'] ) ) ); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php


	return ob_get_clean();
}


/*
 *  jonny_resume
 */


add_shortcode( 'jonny_resume', 'jonny_resume_func' );
function jonny_resume_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'section_id' => '',
			'css' => '',
			'src' => '',
			'vt' => esc_html__( 'Resume', 'jonny' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$img_arr = wp_get_attachment_image_src( $atts['src'], 'full' );


	?>


    <div data-anchor="page5" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
         class=" <?php echo esc_attr( $css_class ); ?> pp-scrollable text-white section section-6">
        <div class="scroll-wrap">
            <div class="section-bg" <?php if ( isset( $img_arr{1} ) ) { ?>    style=" background-image: url('<?php echo esc_url( $img_arr[0] ) ?>'); "  <?php } ?>></div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">

						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
										<?php
										$items_v = vc_param_group_parse_atts( $atts['items'] );
										if ( $items_v ) {
											foreach ( $items_v as $item ) {

												?>

                                                <div class="col-md-6">
                                                    <div class="col-resume">
                                                        <h6 class="resume-title">
															<?php if ( isset( $item['t'][0] ) ) {
																echo esc_html( $item['t'] );
															} ?>
                                                        </h6>
                                                        <div class="resume-content">
                                                            <div class="resume-inner">
																<?php $items_v2 = vc_param_group_parse_atts( $item['items2'] );


																if ( $items_v2 ) {
																	foreach ( $items_v2 as $item2 ) {

																		?>

                                                                        <div class="resume-row">

																			<?php if ( isset( $item2['resume_type'][0] ) ) { ?>
                                                                                <h6 class="resume-type"> <?php echo esc_html( $item2['resume_type'] ); ?></h6>
																				<?php
																			} ?>

																			<?php if ( isset( $item2['study'][0] ) ) { ?>

                                                                                <p class="resume-study"><?php echo esc_html( $item2['study'] ); ?></p>

																				<?php
																			} ?>

																			<?php if ( isset( $item2['date'][0] ) ) { ?>

                                                                                <p class="resume-date text-primary"><?php echo esc_html( $item2['date'] ); ?></p>

																				<?php
																			} ?>

																			<?php if ( isset( $item2['text'][0] ) ) { ?>
                                                                                <p class="resume-text"><?php echo esc_html( $item2['text'] ); ?> </p>

																				<?php
																			} ?>

                                                                        </div>
																	<?php }
																}

																?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

											<?php }
										}

										?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php


	return ob_get_clean();
}


/*
 *  jonny_partners
 */


add_shortcode( 'jonny_partners', 'jonny_partners_func' );
function jonny_partners_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'css' => '',
			'src' => '',
			'vt' => esc_html__( 'Partners', 'jonny' ),


		), $atts

	);

	

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $atts['src'] );

	?>


    <div data-anchor="page6" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
         class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section section-4">
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title text-dark hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>


                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row-partners">

												<?php
												foreach ( $arr_img as $item ) { ?>

													<?php

													$img_arr = wp_get_attachment_image_src( $item, 'jonny-image-170x57-croped' );

													?>


                                                    <div class="col-partner">
                                                        <div class="partner-inner"><img alt=""
                                                                                        src="<?php echo esc_url( $img_arr[0] ); ?>">
                                                        </div>
                                                    </div>


												<?php }
												?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php


	return ob_get_clean();
}


/*
 *  jonny_testimonials
 */


add_shortcode( 'jonny_testimonials', 'jonny_testimonials_func' );
function jonny_testimonials_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'section_id' => '',
			'css' => '',
			'src' => '',
			'vt' => esc_html__( 'testimonials', 'jonny' ),
			't' => esc_html__( 'Featured works', 'jonny' ),
			'url' => '#',
			'icon' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$img_arr = wp_get_attachment_image_src( $atts['src'], 'full' );


	?>


    <div data-anchor="page7" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
         class=" <?php echo esc_attr( $css_class ); ?>  pp-scrollable text-white section section-6">
        <div class="scroll-wrap">
            <div class="section-bg" <?php if ( isset( $img_arr{1} ) ) { ?>    style=" background-image: url('<?php echo esc_url( $img_arr[0] ) ?>'); "  <?php } ?> ></div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">


						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>
						<?php } ?>


                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5">
                                            <span class="icon-quote ion-quote"></span>
                                            <h2 class="title-uppercase text-white"><?php echo do_shortcode( $content ); ?></h2>
                                        </div>
                                        <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                                            <div class="review-carousel owl-carousel">
												<?php
												$items_v = vc_param_group_parse_atts( $atts['items'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) {

														?>

                                                        <div class="review-carousel-item">
                                                            <div class="text">
																<?php if ( isset( $item['d'][0] ) ) {
																	echo wp_kses_post( $item['d'] );
																} ?>


                                                            </div>
                                                            <div class="review-author">
																<?php if ( isset( $item['auth_name'][0] ) ) {
																	?>
                                                                    <div class="author-name"><?php echo esc_html( $item['auth_name'] ); ?></div>
																	<?php

																} ?>

																<?php if ( isset( $item['project_name'][0] ) ) {
																	?>

                                                                    <i><?php echo esc_html( $item['project_name'] ); ?></i>
																	<?php

																} ?>


                                                            </div>
                                                        </div>


													<?php }
												}
												?>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php


	return ob_get_clean();
}


/*
 *jonny_map_section
 */


add_shortcode( 'jonny_contact_section', 'jonny_contact_section_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function jonny_contact_section_func( $atts, $content ) {

	ob_start();


	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'c_short' => '',
			'vt' => esc_html__( 'contact', 'jonny' ),
			't' => esc_html__( 'Get In Touch', 'jonny' ),
			'css' => '',


		), $atts
	);

	extract( $atts );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>
    <div data-anchor="page8" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
         class="<?php echo esc_attr( $css_class ); ?>  pp-scrollable section section-6">
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">


						<?php if ( isset( $atts['vt']{0} ) ) { ?>
                            <div class="vertical-title text-dark hidden-xs hidden-sm">
                                <span><?php echo esc_html( $atts['vt'] ); ?></span></div>

						<?php } ?>

                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">


											<?php if ( isset( $atts['t']{0} ) ) { ?>

                                                <h2 class="title-uppercase"><?php echo esc_html( $atts['t'] ); ?></h2>


											<?php } ?>


                                            <div class="contact-info">

												<?php echo do_shortcode( urldecode( base64_decode( $atts['c_short'] ) ) ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<?php

	return ob_get_clean();
}


/*
 *  jonny_project_detail
 */


add_shortcode( 'jonny_project_detail', 'jonny_project_detail_func' );
function jonny_project_detail_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',

			'css' => '',
			'items' => '',
			'src' => '',
			'items2' => '',
			'items_1' => '',
			't_social' => esc_html__( 'Share:', 'jonny' ),
			'hide_info' => esc_html__( 'hide information', 'jonny' ),
			'show_info' => esc_html__( 'show information', 'jonny' ),
			't' => esc_html__( 'The Luxury Residence In Forest', 'jonny' ),

		), $atts

	);


	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v_1 = vc_param_group_parse_atts( $atts['items_1'] );


	?>


    <div class="project-carousel owl-carousel <?php echo esc_attr($css_class); ?>">

		<?php if ( $items_v_1 ) {
			foreach ( $items_v_1 as $item_1 ) {
				$img_arr = wp_get_attachment_image_src( $item_1['src'], 'full' );
				$items_v = vc_param_group_parse_atts( $item_1['items'] );

				?>
                <div class="project-carousel-item"
	                <?php if ( isset( $img_arr[0] ) ){ ?>
                        style="background-image:url('<?php  echo esc_url($img_arr[0]); ?>');"
	                <?php } ?>>
                    <div>
                        <div class="inner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="project-detail-info col-md-6">
                                        <div class="project-detail-content">
                                            <h3 class="project-detail-title"><?php if ( isset( $item_1['t'] ) ) {
				                                    echo wp_kses_post( $item_1['t'] );
			                                    } ?></h3>
                                            <p class="project-detail-text"> <?php if ( isset( $item_1['content'] ) ) {
				                                    echo wp_kses_post( $item_1['content'] );
			                                    } ?></p>
                                            <ul class="project-detail-list text-dark">
			                                    <?php
			                                    if ( $items_v ) {
				                                    foreach ( $items_v as $item ) { ?>

                                                        <li>
											<span class="left"><?php if ( isset( $item['left_text']{1} ) ) {
													echo wp_kses_post( $item['left_text'] );
												} ?></span>
                                                            <span class="right"><?php if ( isset( $item['right_text']{1} ) ) {
								                                    echo wp_kses_post( $item['right_text'] );
							                                    } ?></span>
                                                        </li>
					                                    <?php
				                                    }
			                                    }
			                                    ?>
                                            </ul>
                                            <div class="project-detail-meta">
                               	<span class="left text-dark hidden-xs pull-sm-left"><?php if ( isset($item_1['t_social'] ) ) {
		                                echo esc_html( $item_1['t_social'] );
	                                } ?></span>

                                                <div class="social-list pull-sm-right">
				                                    <?php
				                                    $items_v2 = vc_param_group_parse_atts($item_1['items2'] );


				                                    if ( $items_v2 ) {
					                                    foreach ( $items_v2 as $item2 ) { ?>

                                                            <a target="_blank" href="<?php echo esc_url( $item2['url'] ); ?>"
                                                               class="<?php echo esc_attr( $item2['icon'] ); ?> "></a>
						                                    <?php
					                                    }
				                                    }
				                                    ?>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
		}
		?>



    </div>
	<?php
	return ob_get_clean();
}
