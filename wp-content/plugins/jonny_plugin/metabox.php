<?php


add_action('add_meta_boxes', 'jonny_custom_meta_box');

/**
 * init metabox
 * @param $postType
 */
function jonny_custom_meta_box($postType)
{

	$postType = (isset($postType)) ? $postType : "post";
	add_meta_box('jonny_meta_box',
		esc_html__(  'jonny Onepage menu', 'jonny'),
		'jonny_footer_meta_box',
		'page',
		'side',
		'low');


}

add_action('save_post', 'jonny_save_metabox', 9999);


/***
 *  Combine 2 Arrays of Different Lengths
 * @param $arr1
 * @param $arr2
 * @return array
 */
function jonny_array_combine2($arr1, $arr2) {
	$count = min(count($arr1), count($arr2));
	return array_combine(array_slice($arr1, 0, $count), array_slice($arr2, 0, $count));
}

/***
 * Save metabox
 * @param $post_id
 * @return mixed
 */
function jonny_save_metabox($post_id)
{
	global $post;

	if (!empty($_POST['_jonny_short_description'])) {
		$datta = wp_kses_post($_POST['_jonny_short_description']);
		update_post_meta($post_id, '_jonny_short_description', $datta);

	}

	if (!current_user_can('edit_page', $post_id)) {
		return $post_id;
	}

	if (isset($post->ID)) {
		if (isset($_POST["jonny_menu_name"])) {
			$meta_element_class = serialize($_POST['jonny_menu_name']);
			update_post_meta($post->ID, '_jonny_menu_name', ($meta_element_class));
		} else {
			@delete_post_meta($post->ID, '_jonny_menu_name');
		}
		if (isset($_POST["jonny_munu_url"])) {
			$meta_element_class = serialize($_POST['jonny_munu_url']);
			update_post_meta($post->ID, '_jonny_munu_url', ($meta_element_class));
		} else {
			@delete_post_meta($post->ID, '_jonny_munu_url');
		}
		if (isset($_POST["jonny_menu_pos"])) {
			$meta_element_class = serialize($_POST['jonny_menu_pos']);
			update_post_meta($post->ID, '_jonny_menu_pos', ($meta_element_class));
		} else {
			@delete_post_meta($post->ID, '_jonny_menu_pos');
		}

		$frontpage_id = get_option('page_on_front');
		$contents = unserialize(get_post_meta($post->ID, '_jonny_menu_name', true));
		$socialurl = unserialize(get_post_meta($post->ID, '_jonny_munu_url', true));
		$menu_pos = unserialize(get_post_meta($post->ID, '_jonny_menu_pos', true));



		if ($post->ID == $frontpage_id) {


			delete_option('jonny_one_page_menu');
			delete_option('jonny_one_page_menu_right');

			$menu = '';
			$menu_right = '';
			if (($contents && $socialurl) != '') {
				$i = 0;
				foreach (jonny_array_combine2($contents, $socialurl) as $content => $url) {

					$i++;

					if ($menu_pos[$i] == 'right') {
						$menu_right .= '<li data-menuanchor="'.esc_attr('page'.$i ).  '"  ><a href="' . esc_url($url) . '">' . esc_html($content) . '</a></li>';

					} else {
						$menu .= ' 	<li  data-menuanchor="'.esc_attr('page'.$i ).  '"  ><a href="' . esc_url($url) . '">' . esc_html($content). '</a></li>';




					}

				}
			}
			//
			if ($menu != '') {
				update_option('jonny_one_page_menu', $menu);


			}
			if ($menu_right != '') {
				update_option('jonny_one_page_menu_right', $menu_right);


			}


		} else {
			/*
             * onother page
             */
			$menu_o = '';
			if (($contents && $socialurl) != '') {


				foreach (array_combine($contents, $socialurl) as $content => $url) {
					$ancor = str_replace( '#','', $url);
					$menu_o .= ' 	<li data-menuanchor="' .esc_attr($ancor). '" ><a href="' . esc_url($url) . '">' . esc_html($content).  '</a></li>';
				}
			}
			if ($menu_o != '')
				update_option('jonny_one_page_menu_' . $post->ID, $menu_o);


		}

	}


}


/**
 *  menu build
 * @param $post
 */
function jonny_footer_meta_box($post)
{


	$jonny_munu_url = unserialize(get_post_meta($post->ID, '_jonny_munu_url', true));
	$jonny_menu_name = unserialize(get_post_meta($post->ID, '_jonny_menu_name', true));

	$menu_pos = unserialize(get_post_meta($post->ID, '_jonny_menu_pos', true));

	?>
	<div class="jonny_one_page">
		<div class="inside">
			<strong><?php esc_html_e('Menu item name', 'jonny') ?></strong>
		</div>
		<div class="input_fields_wrap">

			<?php if ($jonny_menu_name) {
				$j = 0;
				foreach ($jonny_menu_name as $item) {
					?>
					<div><input type="text" name="jonny_menu_name[]" value="<?php echo wp_kses_post($item); ?>"
								class="widefat valid jonny_vdf"/><a href="#" class="remove_field"><i
								class="fa fa-times"
								aria-hidden="true"></i></a>
						<select name="jonny_menu_pos[]">
							<option value="left" <?php selected($menu_pos[$j], "left"); ?> ><?php esc_html_e('Left', 'jonny') ?></option>
							<option <?php selected($menu_pos[$j], "right"); ?> value="right"><?php esc_html_e('Right', 'jonny') ?></option>
						</select>
					</div>
					<?php
					$j++;
				}
			} ?>


		</div>
		<button
			class="add_field_button vc_btn vc_btn-primary vc_btn-sm vc_navbar-btn">
			<?php esc_html_e('+ Add More item', 'jonny') ?>
		</button>
		<p class="description"><?php esc_html_e('Format: Any text', 'jonny') ?></p>
		<script>
			jQuery(document).ready(function ($) {
				var max_fields = 10; //maximum input boxes allowed
				var wrapper = $(".input_fields_wrap"); //Fields wrapper
				var add_button = $(".add_field_button"); //Add button ID

				var x = 1; //initlal text box count
				$(add_button).click(function (e) { //on add input button click
					e.preventDefault();
					if (x < max_fields) { //max input box allowed
						x++; //text box increment
						$(wrapper).append('<div><input type="text" name="jonny_menu_name[]"  class="widefat valid jonny_vdf"/> <select name="jonny_menu_pos[]" >     <option value="left" selected="selected">Left</option>                           <option value="right" >Right</option></select><a href="#" class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></a></div>'); //add input box
					}
				});

				$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
					e.preventDefault();
					$(this).parent('div').remove();
					x--;
				})
			});
		</script>
		<div class="inside">
			<strong><?php esc_html_e('Menu item Url', 'jonny') ?></strong>
		</div>
		<div class="input_fields_wrap2">


			<?php if ($jonny_munu_url) {
				foreach ($jonny_munu_url as $item) {
					?>
					<div><input type="text" name="jonny_munu_url[]" class="widefat valid jonny_vdf"
								value="<?php echo wp_kses_post($item); ?>"/><a href="#" class="remove_field"><i
								class="fa fa-times" aria-hidden="true"></i></a></div>
					<?php
				}
			} ?>

		</div>
		<button
			class="add_field_button2 vc_btn vc_btn-primary vc_btn-sm vc_navbar-btn">
			<?php esc_html_e('+ Add More item', 'jonny') ?>
		</button>
		<p class="description"><?php esc_html_e('Format: #sectionname or http://yoururl.com', 'jonny') ?></p>
		<script>
			jQuery(document).ready(function ($) {
				var max_fields = 10; //maximum input boxes allowed
				var wrapper = $(".input_fields_wrap2"); //Fields wrapper
				var add_button = $(".add_field_button2"); //Add button ID

				var x = 1; //initlal text box count
				$(add_button).click(function (e) { //on add input button click
					e.preventDefault();
					if (x < max_fields) { //max input box allowed
						x++; //text box increment
						$(wrapper).append('<div><input type="text" name="jonny_munu_url[]"  class="widefat valid jonny_vdf"/><a href="#" class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></a></div>'); //add input box
					}
				});

				$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
					e.preventDefault();
					$(this).parent('div').remove();
					x--;
				})
			});
		</script>
	</div>
	<?php
}


function jonny_meta_box_all_posttype_fun($post)
{

	$valueeee2 = get_post_meta($post->ID, '_jonny_short_description', true);
	wp_editor(wp_kses_post($valueeee2), 'mettaabox_ID_stylee',
		$settings = array('textarea_name' => '_jonny_short_description',
			'textarea_rows' => 3, 'media_buttons' => false));
}


