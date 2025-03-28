<?php

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/blocks/blocks.php';
require get_template_directory() . '/func/wp-cuztomize.php';
require get_template_directory() . '/func/svg-support.php';
require get_template_directory() . '/func/cpt.php';
// blocks
require  get_template_directory() . '/blocks/w-mediach/function.php';
require  get_template_directory() . '/blocks/sukcesy/function.php';
require  get_template_directory() . '/blocks/team/function.php';

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_image_size('post-futured', 300, 300, array('center', 'center'), true);


if (!function_exists('go_register_nav_menu')) {
	function go_register_nav_menu()
	{
		register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'go'),
			'footer' => __('Footer', 'go'),
		));
	}
	add_action('after_setup_theme', 'go_register_nav_menu', 0);
}
function go_custom_logo_setup()
{
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'go_custom_logo_setup');


// gutenberg editor
function add_block_editor_assets()
{
	wp_enqueue_style('block_editor_css', get_template_directory_uri() . '/src/css/go-admin.css');
}
add_action('enqueue_block_editor_assets', 'add_block_editor_assets', 10, 0);


// Paginacja
function pagination_bars()
{
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
	if ($total_pages > 1) {
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => $current_page,
			'total' => $total_pages,
		));
	}
}
// Excerpt changing 3 dots
function new_excerpt_more($more)
{
	return;
}
add_filter('excerpt_more', 'new_excerpt_more');

// Excerpt
function wp_example_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'wp_example_excerpt_length');

function custom_excerpt($length = 55, $more = '...')
{
	global $post;

	// Sprawdzenie, czy post ma ustawiony excerpt
	if (has_excerpt($post->ID)) {
		$excerpt = get_the_excerpt();
	} else {
		// Pobranie treści posta bez HTML i shortcodów Divi
		$content = wp_strip_all_tags(get_the_content());
		$content = preg_replace('/\[(\/?et_pb_[a-zA-Z0-9_]+)[^\]]*\]/', '', $content);

		// Tworzenie skrótu
		$words = explode(' ', $content, $length + 1);
		if (count($words) > $length) {
			array_pop($words);
			$excerpt = implode(' ', $words) . $more;
		} else {
			$excerpt = implode(' ', $words);
		}
	}

	return $excerpt;
}


function remove_divi_shortcodes($content)
{
	if (empty($content)) {
		return ''; // Zapobiega błędowi "Passing null"
	}
	// Usuń wszystkie shortcody Divi (zarówno otwierające, jak i zamykające)
	$content = preg_replace('/\[(\/?et_pb_[a-zA-Z0-9_]+)[^\]]*\]/', '', $content);

	return $content;
}
add_filter('the_content', 'remove_divi_shortcodes');
add_filter('get_the_excerpt', 'remove_divi_shortcodes');

function remove_unwanted_text($content)
{
	return str_replace('<h3>Spodobał Ci się nasz artykuł? Przeczytaj podobne wpisy</h3>', '', $content);
}
add_filter('the_content', 'remove_unwanted_text');





function wp_category_dropdown_links()
{
	$categories = get_categories();

	if (!empty($categories)) {
		$output = '<div class="category-dropdown">';
		$output .= '<button class="dropdown-button">Wybierz kategorię</button>';
		$output .= '<ul class="dropdown-menu">';

		foreach ($categories as $category) {
			$output .= '<li>';
			$output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
			$output .= esc_html($category->name);
			$output .= '</a>';
			$output .= '</li>';
		}

		$output .= '</ul>';
		$output .= '</div>';

		return $output;
	}
}



function wp_post_search_form()
{
	$search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

	ob_start();
?>
	<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="post-search-form">
		<input type="hidden" name="post_type" value="post">
		<input type="text" name="s" id="post-search" value="<?php echo esc_attr($search_query); ?>"
			placeholder="Wpisz frazę...">

		<button type="submit">Szukaj</button>
	</form>
<?php
	return ob_get_clean();
}

function add_body_class_header($classes)
{
	$title = get_field('display_title', get_the_ID());
	$customTitle = get_field('custom_title', get_the_ID());
	// var_dump($customTitle);

	if (!is_category() && !$title && empty($customTitle['title']) && !is_home() && ! is_front_page() && !is_tag() && !is_search()) {
		$classes[] = 'no-title';
	}

	return $classes;
}
add_filter('body_class', 'add_body_class_header');
