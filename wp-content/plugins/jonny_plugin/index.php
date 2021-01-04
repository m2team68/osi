<?php
/*
Plugin Name: jonny
Plugin URI:
Description:  extends the capabilities of theme jonny
Version: 1.0.3
Author: VK
Author URI:
License:
*/


add_action( 'vc_before_init', 'jonny_name_integrateWithVC' );

function jonny_name_integrateWithVC() {
	require plugin_dir_path( __FILE__ ) . '/shortcodes/shortcodes.php';
	require plugin_dir_path( __FILE__ ) . '/VC_custum-data.php';
}



require plugin_dir_path( __FILE__ ) . '/import_demo.php';
require plugin_dir_path( __FILE__ ) . '/widgets.php';
require plugin_dir_path( __FILE__ ) . '/css_generator.php';
require plugin_dir_path( __FILE__ ) . '/function.php';
require plugin_dir_path( __FILE__ ) . '/sendmail.php';
require plugin_dir_path( __FILE__ ) . '/custom-style.php';
require plugin_dir_path( __FILE__ ) . '/mailchamp.php';
require plugin_dir_path( __FILE__ ) . '/metabox.php';
require plugin_dir_path( __FILE__ ) . '/ot_demo_function.php';


function jonny_foundation_style() {
	if ( is_page_template( 'template-one-page.php' ) ) {
		wp_enqueue_style( 'schortcode', plugins_url( '/style.css', __FILE__ ) );
	}
}
add_action( 'wp_enqueue_scripts', 'jonny_foundation_style' );




add_action( 'init', 'jonny_project_init' );
/**
 * great project custom type post
 */
function jonny_project_init() {
	$args = array(
		'labels' => array(
			'edit_item' => esc_html__( 'Edit', 'jonny' ),
			'add_new_item' => esc_html__( 'Add', 'jonny' ),
			'view_item' => esc_html__( 'View', 'jonny' ),
		),
		'singular_label' => esc_html__( 'Event', 'jonny' ),
		'has_archive' => true,
		'public' => true,
		'show_ui' => true,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-groups'
	);

	$args['label'] = esc_html__( 'Projects', 'jonny' );
	$args['singular_label'] = esc_html__( 'Item', 'jonny' );
	register_post_type( 'project', $args );
	

}

add_action( 'wp_footer', 'jonny_modal_boddy' );
function jonny_modal_boddy() {
	?>
    <!-- Modals -->

    <div id="request" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal"
                          aria-label="<?php echo esc_html__( 'Close', 'jonny' ); ?>">&times;</span>
                    <h2 class="modal-title">
						<?php echo wp_kses_post( get_theme_mod( 'jonny_c_form_s_modal_title', esc_html__( 'Send request', 'jonny' ) ) );

						?>  </h2>
                </div>
                <div class="modal-body">
					<?php
		                if ( function_exists( 'jonny_contact_form_func' ) ) {

						echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'jonny_c_form_s_val', '[jonny_contact_form]' ) ) );

					} else {

						$atts = array(
							'items' => '',
							'name' => esc_html__( 'Name ', 'jonny' ),
							'Email' => esc_html__( 'Email *', 'jonny' ),
							'sm' => esc_html__( 'Submit', 'jonny' ),
							'message' => esc_html__( 'Message', 'jonny' ),
						);
						extract( $atts );
						?>
                        <form class="form-request js-ajax-form">
                            <div class="form-group">
                                <input type="text" name="name" required
                                       placeholder="<?php echo esc_attr( $name ); ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required
                                       placeholder="<?php echo esc_attr( $Email ); ?>">
                            </div>
                            <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block" >
                                	<?php echo esc_attr( $sm ); ?>
                                </button>
                            </div>
                        </form>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals success -->

	<div id="success" class="modal modal-message fade" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <span class="close" data-dismiss="modal" aria-label="<?php echo esc_html__( 'Close', 'jonny' ); ?>"><span
	                            aria-hidden="true">&times;</span></span>
	                <h2 class="modal-title"> <?php
						echo esc_html( get_theme_mod( 'jonny_c_form_s_susses_title', esc_html__( 'Thank you', 'jonny' ) ) ); ?>
	                </h2>
	                <p class="modal-subtitle">
						<?php echo esc_html( get_theme_mod( 'jonny_c_form_s_susses_sub_title', esc_html__( 'Your message is successfully sent...', 'jonny' ) ) ); ?>
	                </p>

	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <span class="close" data-dismiss="modal" aria-label="<?php echo esc_html__( 'Close', 'jonny' ); ?>"><span
	                            aria-hidden="true">&times;</span></span>
	                <h2 class="modal-title">
						<?php echo esc_html( get_theme_mod( 'jonny_c_form_s_error_title', esc_html__( 'Sorry', 'jonny' ) ) ); ?>
	                </h2>
	                <p class="modal-subtitle">
						<?php echo esc_html( get_theme_mod( 'jonny_c_form_s_error_sub_title', esc_html__( 'Something went wrong', 'jonny' ) ) ); ?>
	                </p>
	            </div>
	        </div>
	    </div>
	</div>
	<?php
}
add_shortcode('jonny_social_links', 'jonny_social_links_func');
function jonny_social_links_func($atts, $content)
{
	ob_start();
	$atts = shortcode_atts(
		array(
			'url' => '',
			'class' => '',


		), $atts

	);
	?>
    <a target="_blank" href="<?php  echo esc_url($atts['url']) ?>"
       class="icon <?php  echo esc_attr($atts['class']); ?>"></a>
	<?php
	return ob_get_clean();
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');