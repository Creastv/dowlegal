<?php
$title = get_field('display_title', get_the_ID());
$customTitle = get_field('custom_title', get_the_ID());
$backgroun_image_default = get_theme_mod('header_bg');
if (!empty($customTitle)) {
	$backgroun_image_page = $customTitle['background_image'];
}
if (is_category()) {
	$category = get_queried_object();
	$background_category = get_field('background_image', 'category_' . $category->term_id);
	if ($background_category) {
		$bg = $background_category;
	} else {
		$bg = $backgroun_image_default;
	}
} elseif (is_search()) {
	$bg = $backgroun_image_default;
} elseif (!empty($backgroun_image_page)) {
	$bg = $backgroun_image_page;
} else {
	$bg = $backgroun_image_default;
}

?>
<?php if ($title || is_home() || is_archive() || is_search() || is_tag() || $customTitle && $customTitle['title']): ?>
	<header class="entry-header text-center">
		<div class="entry-header__wrap">
			<?php if ($title || is_home() || is_archive() || is_search() || is_tag()): ?>
				<h1 class="entry-title big-title">
					<?php if (is_category()) :
						single_cat_title();
					elseif (is_tax()) :
						single_tag_title();
					elseif (get_post_type(get_the_ID()) == 'nasze-specjalizacje' && is_singular('nasze-specjalizacje')) :
						the_title();
					elseif (get_post_type(get_the_ID()) == 'zespol') :
						_e('Prelegenci', 'go');

					elseif (is_404()) :
						_e('404', 'go');
					elseif (is_search()) :
						_e('Wyniki wyszukiwania', 'go');
					elseif (is_page()) :
						the_title();
					elseif (is_tag()) :
						single_tag_title();

					elseif (is_author()) :
						the_post();
						printf(__('%s', 'go'), get_the_author());
						rewind_posts();
					elseif (is_day()) :
						printf(__('Dzień: %s', 'go'), '<span>' . get_the_date() . '</span>');
					elseif (is_month()) :
						printf(__('Miesiąc: %s', 'go'), '<span>' . get_the_date('F Y') . '</span>');
					elseif (is_year()) :
						printf(__('Rok: %s', 'go'), '<span>' . get_the_date('Y') . '</span>');
					elseif (is_tax('post_format', 'post-format-aside')) :
						_e('Asides', 'go');
					elseif (is_tax('post_format', 'post-format-image')) :
						_e('Images', 'go');
					elseif (is_tax('post_format', 'post-format-video')) :
						_e('Videos', 'go');
					elseif (is_tax('post_format', 'post-format-quote')) :
						_e('Quotes', 'go');
					elseif (is_tax('post_format', 'post-format-link')) :
						_e('Links', 'go');
					else :
						_e('Blog', 'go');
					endif; ?>
				</h1>
			<?php else : ?>
				<?php if (!empty($customTitle['label'])): ?>
					<span class="entry-label"><?php echo $customTitle['label']; ?></span>
				<?php endif; ?>
				<?php if (!empty($customTitle['title'])): ?>
					<h1 class="entry-title big-title">
						<?php echo $customTitle['title']; ?>
					</h1>
					<?php if (is_singular('nasze-specjalizacje') || is_singular('sukcesy') || is_singular('zespol')) : ?>
						<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php if (!empty($customTitle['description'])): ?>
					<div class="entry-desc">
						<?php echo $customTitle['description']; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>


			<div class="scroll-down">
				<span id="scroll">
					<i></i>
					<i></i>
				</span>
				<span><?php _e('Dowiedz się więcej', 'go'); ?></span>
			</div>

		</div>
		<?php if (is_category()) : ?>
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			<?php the_archive_description('<div class="entry-desc">', '</div>'); ?>
		<?php endif; ?>
		<?php if (!empty($bg)) : ?>
			<div class="img">
				<img src="<?php echo esc_url($bg); ?>" alt="<?php esc_attr_e('Tło nagłówka', 'go'); ?>"
					class="header-image go-parallex">
				<svg id="h-ornament" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1811.11 520.11">
					<g opacity=".1">
						<rect fill="#fff" x="1782.55" y="341.33" width="28.56" height="178.78" />
						<path fill="#fff"
							d="M1432.89,520.11v-47.93c0-41.62-33.46-75.02-75.17-75.02s-75.18,33.48-75.18,75.02c0,18.25,6.47,34.95,17.25,47.93h133.1ZM1357.97,424.66c26.72,0,46.37,20.94,46.37,47.44s-19.82,47.44-46.37,47.44-46.87-20.93-46.87-47.44,20.14-47.44,46.87-47.44Z" />
						<path fill="#fff"
							d="M1680.57,520.11v-47.93c0-41.62-33.55-75.02-74.84-75.02s-75.18,33.48-75.18,75.02c0,18.25,6.53,34.95,17.36,47.93h132.66ZM1605.98,424.66c26.8,0,46.37,20.94,46.37,47.44s-19.82,47.44-46.37,47.44-46.96-20.93-46.96-47.44,20.15-47.44,46.96-47.44Z" />
						<path fill="#fff"
							d="M499.75,520.11c10.8-12.98,17.28-29.68,17.28-47.93,0-41.54-33.47-75.02-75.18-75.02s-75.18,33.48-75.18,75.02c0,18.25,6.48,34.95,17.28,47.93h115.8ZM442.19,424.74c26.81,0,46.37,20.93,46.37,47.44s-19.81,47.44-46.37,47.44-46.95-20.93-46.95-47.44,20.15-47.44,46.95-47.44Z" />
						<polygon fill="#fff"
							points="684.63 520.11 709.35 442.77 734.07 520.11 778.72 520.11 818.57 399.48 789.52 399.48 756.3 507.32 723.66 399.48 695.11 399.48 662.47 507.32 629.26 399.48 600.12 399.48 639.97 520.11 684.63 520.11" />
						<path fill="#fff"
							d="M251.85,520.11c10.77-12.98,17.26-29.68,17.26-47.93v-130.85h-28.89v76.76c-10.74-12.79-26.47-20.93-46.04-20.93-41.38,0-75.18,33.48-75.18,75.02,0,18.25,6.53,34.95,17.36,47.93h115.49ZM194.18,424.74c26.23,0,46.62,20.93,46.62,47.44s-20.15,47.44-46.62,47.44-46.62-20.93-46.62-47.44,20.06-47.44,46.62-47.44Z" />
						<path fill="#fff"
							d="M1054.22,520.11h116.21c3.81-4.5,7.11-9.46,9.79-14.78l-34.13-.33c-7.58,8.14-18.9,14.54-34.97,14.54-23.64,0-41.12-15.45-43.45-36.97h117.72c.58-3.74.91-8.14.91-13.04-1.41-45.11-37.63-72.44-75.18-72.44-41.96,0-74.01,34.31-74.01,75.35h.09c0,18.12,6.35,34.74,17.02,47.68ZM1112.04,424.74c20.98,0,38.46,14.87,43.71,34.64h-88c5.24-19.77,21.56-34.64,44.29-34.64Z" />
						<rect fill="#fff" x="910.98" y="341.33" width="28.56" height="178.78" />
					</g>
					<g>
						<path fill="#fff" opacity="0.05"
							d="M0,268.86v251.24h80.27c-10.11-19.9-15.81-42.39-15.81-66.22,0-81.23,66.23-147.05,147.92-147.05,52.65,0,98.92,27.36,125.08,68.56v-173.63c-37.65-18.48-79.93-28.99-124.82-28.99-84.78.04-160.84,37.22-212.63,96.08Z" />
						<path fill="#fff" opacity="0.05"
							d="M494.58,473.72c.46-6.53.71-13.12.71-19.77V0h-135v449.45c.06,1.89,0,2.55,0,4.44,0,23.82-5.71,46.31-15.83,66.22h165.03c-7.38-14.26-12.5-29.88-14.91-46.38Z" />
					</g>
				</svg>
			</div>
		<?php endif; ?>
	</header>
<?php endif; ?>