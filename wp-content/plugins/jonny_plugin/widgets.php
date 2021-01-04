<?php

add_action( 'widgets_init', 'jonny_widgets_int' );


/*popular_places*/
function jonny_widgets_int() {

	//sidibar widget


	register_widget( 'jonny_Recent_posts' );
	register_widget( 'jonny_Recent_comments' );
	register_widget( 'jonny_TAG_Wigdet_class' );
	register_widget( 'jonny_footer_info' );
	register_widget( 'jonny_newsletter' );
	register_widget( 'jonny_menu_Wigdet_class' );
	register_widget( 'jonny_author_class' );
	register_widget( 'jonny_footer_contact' );



	//footer widget


}

/*
 * jonny_author_Wigdet_class
 */

class jonny_author_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny author', 'jonny' ),
			'description' => esc_html__( 'It displays information about the author', 'jonny' ),
			'classname'   => 'jonny_author_'
		);
		parent::__construct( 'jonny_author_', esc_html__( 'jonny author', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'ABOUT ME', 'jonny' ), // Legacy.
				'photo' => '',
				'name'  => esc_html__( 'TOM ROBBINS', 'jonny' ),
				'prof'  => esc_html__( 'WEB DESIGNER', 'jonny' ),
				'url'   => '',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'photo' ) ); ?>"> <?php esc_html_e( 'Author photo:', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'photo' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'photo' ) ); ?>" type="text"
			       value="<?php if ( isset( $photo ) ) {
				       echo esc_attr( $photo );
			       } ?>">
		</p>

		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"> <?php esc_html_e( 'Author photo(insert image url)', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text"
			       value="<?php if ( isset( $url ) ) {
				       echo esc_attr( $url );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"> <?php esc_html_e( 'Author name:', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" type="text"
			       value="<?php if ( isset( $name ) ) {
				       echo esc_attr( $name );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'prof' ) ); ?>"> <?php esc_html_e( 'Author profession:', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'prof' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'prof' ) ); ?>" type="text"
			       value="<?php if ( isset( $prof ) ) {
				       echo esc_attr( $prof );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'ABOUT ME', 'jonny' ), // Legacy.
				'photo' => '',
				'name'  => esc_html__( 'TOM ROBBINS', 'jonny' ),
				'prof'  => esc_html__( 'WEB DESIGNER', 'jonny' ),
				'url'   => '',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );

		echo wp_kses_post( $before_widget . "" );
		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );


		?>


		<?php
		if ( isset( $photo{5} ) ) {

			?>
			<img alt="" src="<?php echo esc_url( $photo ) ?>">
			<?php

		} else {
			$img = get_template_directory_uri() . "/img/blog/widget-text-img.jpg"; ?>
			<img alt="" src="<?php echo esc_url( $img ) ?>">
			<?php

		} ?>

		<h4 class="widget-about-title"> <?php echo esc_html( $name ) ?></h4>
		<a href="<?php echo esc_html( $url ) ?>" class="subtitle"><?php echo esc_html( $prof ) ?></a>


		<?php
		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}


class jonny_menu_Wigdet_class extends WP_Widget {

	/**
	 * Sets up a new Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 */
	public function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny  Menu', 'jonny' ),
			'description' => esc_html__( 'It displays Menu', 'jonny' ),
			'classname'   => 'jonny_Menu'
		);
		parent::__construct( 'nav_menu', esc_html__( 'jonny  Menu', 'jonny' ), $args );


	}

	/**
	 * Outputs the content for the current Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Custom Menu widget instance.
	 */
	public function widget( $args, $instance ) {
		// Get menu
		$nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

		if ( ! $nav_menu ) {
			return;
		}

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );


		?>
		<div class="col-base col-space col-sm-6 col-md-2">
			<strong class="footer-title">
			<?php
			if ( ! empty( $instance['title'] ) ) {
				echo wp_kses_post($instance['title']);
			}
			?>
			</strong>
			<?php $nav_menu_args = array(
				'fallback_cb' => '',
				'menu'        => $nav_menu,
				'menu_class' => 'nav-bottom',
				'container' => false
			);

			wp_nav_menu( apply_filters( 'widget_nav_menu_args', $nav_menu_args, $nav_menu, $args, $instance ) );

			?>
		</div>
		<?php

	}

	/**
	 * Handles updating settings for the current Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 *
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['title'] ) ) {
			$instance['title'] = sanitize_text_field( stripslashes( $new_instance['title'] ) );
		}
		if ( ! empty( $new_instance['nav_menu'] ) ) {
			$instance['nav_menu'] = (int) $new_instance['nav_menu'];
		}

		return $instance;
	}

	/**
	 * Outputs the settings form for the Custom Menu widget.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$title    = isset( $instance['title'] ) ? $instance['title'] : '';
		$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

		// Get menus
		$menus = wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		?>
		<p class="nav-menu-widget-no-menus-message" <?php if ( ! empty( $menus ) ) {

		} ?>>
			<?php
			if ( isset( $GLOBALS['wp_customize'] ) && $GLOBALS['wp_customize'] instanceof WP_Customize_Manager ) {
				$url = 'javascript: wp.customize.panel( "nav_menus" ).focus();';
			} else {
				$url = admin_url( 'nav-menus.php' );
			}
			?>
			<?php echo sprintf( esc_html__( 'No menus have been created yet.', "jonny" ) . '<a href="%s">' . esc_html__( "Create some", "jonny" ) . '</a>.', esc_url( $url ) ); ?>
		</p>
		<div class="nav-menu-widget-form-controls" <?php if ( empty( $menus ) ) {

		} ?>>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'jonny' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				       value="<?php echo esc_attr( $title ); ?>"/>
			</p>

			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'nav_menu' ) ); ?>"><?php esc_html_e( 'Select Menu:', 'jonny' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'nav_menu' ) ); ?>"
				        name="<?php echo esc_attr( $this->get_field_name( 'nav_menu' ) ); ?>">
					<option value="0"><?php esc_html_e( '&mdash; Select &mdash;', 'jonny' ); ?></option>
					<?php foreach ( $menus as $menu ) : ?>
						<option
							value="<?php echo esc_attr( $menu->term_id ); ?>" <?php selected( $nav_menu, $menu->term_id ); ?>>
							<?php echo esc_html( $menu->name ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>
		</div>
		<?php
	}
}

class jonny_footer_info extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny footer info', 'jonny' ),
			'description' => esc_html__( 'It displays footer information', 'jonny' ),
			'classname'   => 'jonny_footer_info'
		);
		parent::__construct( 'jonny_footer_info', esc_html__( 'jonny footer_info', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(

				'text'  => esc_html__( 'We create web products for the help and growth of your business', 'jonny' ),
				'title' => esc_html__( 'jonny.', 'jonny' ),
				'email_text' => esc_html__( 'E-mail.', 'jonny' ),
				'email' => esc_html__( 'selena@info.ru', 'jonny' ),


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( ' Insert title',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'text' ) ) ); ?>"> <?php esc_html_e( ' Insert text:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'text' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'text' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email_text' ) ) ); ?>"> <?php esc_html_e( ' Insert text:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email_text' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'email_text' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $email_text ) ) {
				       echo esc_attr( $email_text );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"> <?php esc_html_e( ' Insert email:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'email' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $email ) ) {
				       echo esc_attr( $email );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {

		extract( $args );
		$instance         = wp_parse_args(
			(array) $instance,
			array(
				'text'  => esc_html__( 'We create web products for the help and growth of your business', 'jonny' ),
				'title' => esc_html__( 'jonny', 'jonny' ),



			)
		);

		$arr               = explode( ' ', $instance['title'] );
		$arr_h             = implode( " ", array_splice( $arr, 0, 2 ) );
		$instance['title'] = str_replace( $arr_h, '' . $arr_h . '', $instance['title'] );


		// Create a filter to the other plug-ins can change them

		$before_widget = str_replace( 'class="', 'class=" widget  column col-sm-6 col-md-4" ', $before_widget );



		?>
		<div class="brand-info col-base col-space col-sm-6 col-md-3">
			<a href="<?php echo esc_url( get_home_url( '/' ) . '/#home' ) ?> " class="brand js-target-scroll">
				<?php echo wp_kses_post( $instance['title'] ); ?>
			</a>
			<p><?php echo wp_kses_post( $instance['text'] ); ?></p>
			<address>
				<strong class="text-white">
					<?php echo wp_kses_post( $instance['email_text'] ); ?>
				</strong>
				<?php echo antispambot( $instance['email'] ); ?>
			</address>
		</div>


		<?php


	}
}




class jonny_footer_contact extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny footer contact', 'jonny' ),
			'description' => esc_html__( 'It displays footer contacts', 'jonny' ),
			'classname'   => 'jonny_footer_contact'
		);
		parent::__construct( 'jonny_footer_contact', esc_html__( 'jonny footer_contact', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(

				'phone'  => esc_html__( '+8 800 555 35 35 ', 'jonny' ),
				'email' => esc_html__( 'info@jonny.com', 'jonny' ),


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'phone' ) ) ); ?>"> <?php esc_html_e( ' Insert phone',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'phone' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'phone' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $phone ) ) {
				       echo esc_attr( $phone );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"> <?php esc_html_e( ' Insert email:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'email' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $email ) ) {
				       echo esc_attr( $email );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {

		extract( $args );
		$instance         = wp_parse_args(
			(array) $instance,
			array(
				'email'  => esc_html__( '', 'jonny' ),
				'phone' => esc_html__( '', 'jonny' ),


			)
		);

		$arr               = explode( ' ', $instance['phone'] );
		$arr_h             = implode( " ", array_splice( $arr, 0, 2 ) );
		$instance['phone'] = str_replace( $arr_h, '' . $arr_h . '', $instance['phone'] );


		// Create a filter to the other plug-ins can change them



		?>
		<div class="col-contacts col-base col-sm-6 col-md-3">
              <a href="#" class="phone">
               	<?php echo wp_kses_post( $instance['phone'] ); ?>
              </a><br>
              <a href="mailto:<?php echo wp_kses_post( $instance['email'] ); ?>" class="email">
                <?php echo wp_kses_post( $instance['email'] ); ?>
                </a>
            </div>

		<?php



	}
}





class jonny_Recent_posts extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny  Recent posts', 'jonny' ),
			'description' => esc_html__( 'It displays a list of tweets', 'jonny' ),
			'classname'   => 'jonny_Recent_posts'
		);
		parent::__construct( 'jonny_Recent_posts', esc_html__( 'jonny Tweets2', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent posts', 'jonny' ), // Legacy.
				'text'  => 2,
				'description' => ''


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"> <?php esc_html_e( 'How many show post?',
					'jonny' ); ?></label>

			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"
			       value="<?php
			       if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       }
			       ?>">

		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'description' ) ) ); ?>"> <?php esc_html_e( 'Description:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'description' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'description' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $description ) ) {
				       echo esc_attr( $description );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );


		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent posts', 'jonny' ), // Legacy.
				'Name'  => '',
				'text'  => 2,
				'description' => ''


			)
		);
		extract( $instance );
		// Create a filter to the other plug-ins can change them
		$title         = sanitize_text_field( apply_filters( 'widget_title', $title ) );


		$args = array(
			'post_type'           => 'post',
			'orderby'             => 'date',
			'post_status'         => 'publish',
			'posts_per_page'      => $text,
			'ignore_sticky_posts' => true,
			'meta_query'          => array( array( 'key' => '_thumbnail_id' ) )

		);

		global $jonny_class;

		?>

		<div class="col-base col-space col-sm-6 col-md-4">
            <div class="widget_recent_entries">
                <strong class="footer-title"><?php echo esc_attr( $title ); ?></strong>
                <?php if ( $instance['description'] !==""): ?>
	            	<p>
	            		<?php echo wp_kses_post( $description ); ?>
	            	</p>
	            <?php endif ?>
                <ul>
		<?php
		$rent_blog_query = new WP_Query( $args );
		if ( $rent_blog_query->have_posts() ):
			while ( $rent_blog_query->have_posts() ) {
				$rent_blog_query->the_post();
				?>
					<li>
						<div class="media-left">
							<a href="<?php echo esc_url( get_the_permalink() ); ?>">
								<img alt="<?php the_title(); ?>"
								     src="<?php the_post_thumbnail_url("jonny-image-70x70-croped"); ?>"
								     width="70" height="70">
							</a>
						</div>
						<div class="media-right">
							<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="recet-entries-title">
								<?php the_title(); ?>
							</a>
							<div class="recent-entries-time">
								<?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?>
							</div>
						</div>
					</li>
				<?php
			}
			wp_reset_postdata();
		endif; ?>
				</ul>
			</div>
		</div>


		<?php


	}

	function update( $new_instance, $old_instance ) {
		$new_instance['title'] = ! empty( $new_instance['title'] ) ? esc_attr( $new_instance['title'] ) :
			esc_html__( 'Recent posts', 'jonny' );
		$new_instance['text']  = ( (int) $new_instance['text'] ) ? $new_instance['text'] : 3;

		return $new_instance;
	}


}

class jonny_Recent_comments extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny Recent comments', 'jonny' ),
			'description' => esc_html__( 'It displays a list of tweets', 'jonny' ),
			'classname'   => 'jonny_Recent_comments_noppp'
		);
		parent::__construct( 'jonny_Recent_comments', esc_html__( 'jonny Tweets2', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent comments', 'jonny' ), // Legacy.
				'text'  => 4


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"> <?php esc_html_e( 'How many show post?',
					'jonny' ); ?></label>

			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"
			       value="<?php
			       if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       }
			       ?>">

		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );


		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent comments', 'jonny' ), // Legacy.
				'Name'  => '',
				'text'  => 4


			)
		);
		extract( $instance );
		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );
		echo wp_kses_post( $before_widget . "" );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );


		$comments = get_comments( apply_filters( 'widget_comments_args', array(
			'number'      => $text,
			'status'      => 'approve',
			'post_status' => 'publish'
		) ) );
		if ( is_array( $comments ) && $comments ) {


			?>

			<ul class="widget-comment-list widget-list">
				<?php

				foreach ( (array) $comments as $comment ) {


					?>

					<li>
						<span class="media-left"><i class="icon icon-chat"></i></span>
                        <span class="media-body"><?php echo esc_html( $comment->comment_author ); ?> <a
		                        href="<?php echo esc_url( get_permalink( $comment->comment_post_ID ) ); ?>"><?php echo esc_html( get_the_title( $comment->comment_post_ID ) ); ?></a></span>
					</li>
					<?php

				}

				?>
			</ul>

			<?php
		}


		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		$new_instance['title'] = ! empty( $new_instance['title'] ) ? esc_attr( $new_instance['title'] ) :
			esc_html__( 'Recent comments', 'jonny' );
		$new_instance['text']  = ( (int) $new_instance['text'] ) ? $new_instance['text'] : 4;

		return $new_instance;
	}


}


class jonny_TAG_Wigdet_class extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny TAG', 'jonny' ),
			'description' => esc_html__( 'It displays a list of TAG', 'jonny' ),
			'classname'   => 'widget-tag-cloud'
		);
		parent::__construct( 'widget-tag-cloud', esc_html__( 'jonny TAG', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance,
			array(
				'title'    => '',
				'type_tag' => '0',
				'number'   => 20
			) );
		extract( $instance );
		$title = sanitize_text_field( $instance['title'] );
		?>
		<p><label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"><?php esc_html_e( 'Title:', 'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>"
			       type="text" value="<?php echo esc_attr( esc_attr( $title ) ); ?>"/></p>
		<p>

		<?php

	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	public function widget( $args, $instance ) {

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		extract( $args );
		extract( $instance );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? esc_html__( 'Tags', 'jonny' ) : $instance['title'], $instance, $this->id_base );
		echo wp_kses_post( $before_widget );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );
		?>
		<div class="blog-tags">
			<?php
			$posttags = get_tags();
			if ( $posttags ) {
				foreach ( $posttags as $tag ) {
					?>

					<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
					><?php echo esc_html( $tag->name ); ?></a>

					<?php
				}
			}

			?>
		</div>
		<?php

		echo wp_kses_post( $after_widget );
	}

	public function update( $new_instance, $old_instance ) {
		$instance             = $old_instance;
		$new_instance         = wp_parse_args( (array) $new_instance, array(
			'title'    => '',
			'count'    => 0,
			'dropdown' => ''
		) );
		$instance['title']    = sanitize_text_field( $new_instance['title'] );
		$instance['number']   = $new_instance['number'] ? (int) sanitize_title( $new_instance['number'] ) : 20;
		$instance['type_tag'] = $new_instance['type_tag'] ? (int) sanitize_title( $new_instance['type_tag'] ) : '0';

		return $instance;
	}


}









class jonny_newsletter extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'jonny newsletter', 'jonny' ),
			'description' => esc_html__( 'It displays newsletter form', 'jonny' ),
			'classname'   => 'jonny_newsletter'
		);
		parent::__construct( 'jonny_newsletter', esc_html__( 'jonny newsletter', 'jonny' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(

				'title'  => esc_html__( 'NEWSLETTER', 'jonny' ),
				'placeholder' => esc_html__( 'Email', 'jonny' ),
				'description' => '',


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( ' Insert title',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'placeholder' ) ) ); ?>"> <?php esc_html_e( ' Insert placeholder text:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'placeholder' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'placeholder' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $placeholder ) ) {
				       echo esc_attr( $placeholder );
			       } ?>">
		</p>

		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'description' ) ) ); ?>"> <?php esc_html_e( ' Description:',
					'jonny' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'description' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'description' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $description ) ) {
				       echo esc_attr( $description );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {

		extract( $args );
		$instance         = wp_parse_args(
			(array) $instance,
			array(
				'title'  => esc_html__( 'NEWSLETTER', 'jonny' ),
				'placeholder' => esc_html__( 'Email', 'jonny' ),
				'description' => esc_html__( '', 'jonny' ),



			)
		);

		$arr               = explode( ' ', $instance['title'] );
		$arr_h             = implode( " ", array_splice( $arr, 0, 2 ) );
		$instance['title'] = str_replace( $arr_h, '' . $arr_h . '', $instance['title'] );


		// Create a filter to the other plug-ins can change them

		$before_widget = str_replace( 'class="', 'class=" widget  column col-sm-6 col-md-4" ', $before_widget );



		?>
		<div class="col-subscribe col-base col-space col-sm-6 col-md-3">
          <strong class="footer-title"><?php echo wp_kses_post( $instance['title'] ); ?></strong>
          <form id="mc-form" class="subscribe-form js-subscribe-form">
            <div class="input-group">
              <input id="mc-email" type="email" class="input-round form-control" name="EMAIL" placeholder="<?php echo wp_kses_post( $instance['placeholder'] ); ?>">
              <span class="input-group-btn">
                <button class="btn" type="submit"><span class="icon-arrow-right"></span></button>
              </span>
            </div>
            <label class="mc-label" for="mc-email" id="mc-notification"></label>
          </form>
          <?php if ( $instance['description'] !==""): ?>
            	<p>
            		<?php echo wp_kses_post( $instance['description'] ); ?>
            	</p>
            <?php endif ?>
        </div>


		<?php


	}
}