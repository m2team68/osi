<?php


/**
 * @return categorias
 */
function jonny_wp_infinitepaginate()
{


	$paged = (int)sanitize_text_field($_POST['page_no']);
	$posts_per_page = (int)sanitize_text_field(get_option('posts_per_page'));

	if (isset($_POST['s']{0})) {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'post_status' => 'publish',
			's' => sanitize_text_field($_POST['s'])
		);


	} else {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'cat' => sanitize_text_field($_POST['cat']),
			'post_status' => 'publish',
			'post_type' => 'post'
		);
	}

	if (isset($_POST['year']) && !empty($_POST['year']))
		$args['year'] = ($_POST['year']);

	if (isset($_POST['monthnum']) && !empty($_POST['monthnum']))
		$args['monthnum'] = ($_POST['monthnum']);

	if (isset($_POST['day']) && !empty($_POST['day']))
		$args['day'] = ($_POST['day']);

	$query = new WP_Query($args);

	$n = 0;
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			switch ($_POST['type']) {
				case 'col2':
					echo "<div class='col-blog col-sm-6'>";
					get_template_part('partials/col2content', get_post_format());
					echo "</div>";
					break;
				case 'col3':
					echo "<div class='col-blog col-sm-6 col-md-4'>";
					get_template_part('partials/col2content', get_post_format());
					echo "</div>";
					break;
				case 'col1':
					get_template_part('partials/col3content', get_post_format());
					break;				
				default:
					get_template_part('partials/content', get_post_format());
					break;
			}
		}
	}
	wp_reset_postdata();

	exit;
	die();
}

add_action('wp_ajax_jonny_infinite_scroll', 'jonny_wp_infinitepaginate'); // for logged in user
add_action('wp_ajax_nopriv_jonny_infinite_scroll', 'jonny_wp_infinitepaginate'); // if user not logged in


function jonny_ajax_portfolio_loadmore()
{


	$paged = (int)sanitize_text_field($_POST['page_no']);
	$posts_per_page = (int)sanitize_text_field(get_option('posts_per_page'));

		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
	        'post_type' => 'portfolio',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'portfolio_categories',
	                'field' => 'term_id',
	                'terms' => sanitize_text_field($_POST['terms']),
	            )
	        )
		);


	$querys = new WP_Query($args);

	if ($querys->have_posts()) {
		while ($querys->have_posts()) {
			$querys->the_post();

			get_template_part('partials/portfolioscontent', get_post_format());

		}
	}
	wp_reset_postdata();

	exit;
	die();
}

add_action('wp_ajax_portfolio_loadmore', 'jonny_ajax_portfolio_loadmore'); // for logged in user
add_action('wp_ajax_nopriv_portfolio_loadmore', 'jonny_ajax_portfolio_loadmore'); // if user not logged in



?>