<?php

// bloks
// 🔹 AJAX DO FILTRACJI (zmienia całą listę postów)
function filter_posts_by_category_sukcesy()
{
    $category = isset($_POST['category']) && $_POST['category'] !== 'all' ? sanitize_text_field($_POST['category']) : '';

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'paged'          => 1,
        'category_name' => 'sukcesy'
    );

    if (!empty($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'suk-rok', // 🔹 Sprawdź poprawność!
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        ob_start();
        while ($query->have_posts()) : $query->the_post(); ?>
<?php get_template_part('templates-parts/content/content', 'cart-sukces'); ?>
<?php endwhile;

        $output = ob_get_clean();

        echo json_encode(array(
            'posts' => $output,
            'has_more' => ($query->max_num_pages > 1) ? 'true' : 'false',
        ));

    else :
        echo json_encode(array(
            'posts' => '',
            'has_more' => 'false',
        ));
    endif;

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_filter_posts_sukcesy', 'filter_posts_by_category_sukcesy');
add_action('wp_ajax_nopriv_filter_posts_sukcesy', 'filter_posts_by_category_sukcesy');



// 🔹 AJAX DO WCZYTYWANIA KOLEJNYCH POSTÓW (osobno od filtracji)
function load_more_posts_sukcesy()
{
    $paged = isset($_POST['page']) ? intval($_POST['page']) + 1 : 1;
    $category = isset($_POST['category']) && $_POST['category'] !== 'all' ? sanitize_text_field($_POST['category']) : '';

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'paged'          => $paged,
        'category_name' => 'sukcesy'
    );

    if ($category) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'suk-rok',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        ob_start();
        while ($query->have_posts()) : $query->the_post(); ?>
<?php get_template_part('templates-parts/content/content', 'cart-sukces'); ?>
<?php endwhile;

        $output = ob_get_clean();

        // Sprawdzenie, czy są kolejne posty
        $has_more_posts = ($query->max_num_pages > $paged) ? 'true' : 'false';

        echo json_encode(array(
            'posts' => $output,
            'has_more' => $has_more_posts,
        ));

    else :
        echo json_encode(array(
            'posts' => '',
            'has_more' => 'false',
        ));
    endif;

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_load_more_sukcesy', 'load_more_posts_sukcesy');
add_action('wp_ajax_nopriv_load_more_sukcesy', 'load_more_posts_sukcesy');
