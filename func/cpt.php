<?php
function register_cpt_nasze_specjalizacje()
{
    $labels = array(
        'name'               => 'Nasze specjalizacje',
        'singular_name'      => 'Specjalizacja',
        'menu_name'          => 'Nasze specjalizacje',
        'name_admin_bar'     => 'Nasze specjalizacje',
        'add_new'            => 'Dodaj nową',
        'add_new_item'       => 'Dodaj nową specjalizację',
        'new_item'           => 'Nowa specjalizacja',
        'edit_item'          => 'Edytuj specjalizację',
        'view_item'          => 'Zobacz specjalizację',
        'all_items'          => 'Wszystkie specjalizacje',
        'search_items'       => 'Szukaj specjalizacji',
        'not_found'          => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'nasze-specjalizacje'),
        'capability_type'    => 'page',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes', 'post-formats')
    );

    register_post_type('nasze-specjalizacje', $args);
}
add_action('init', 'register_cpt_nasze_specjalizacje');

function register_cpt_team()
{
    $labels = array(
        'name'               => 'Zespół',
        'singular_name'      => 'Członek Zespołu',
        'menu_name'          => 'Zespół',
        'name_admin_bar'     => 'Członek Zespołu',
        'add_new'            => 'Dodaj nowego',
        'add_new_item'       => 'Dodaj nowego członka zespołu',
        'new_item'           => 'Nowy członek zespołu',
        'edit_item'          => 'Edytuj członka zespołu',
        'view_item'          => 'Zobacz członka zespołu',
        'all_items'          => 'Wszyscy członkowie',
        'search_items'       => 'Szukaj członków zespołu',
        'not_found'          => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'nasz-zespol'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('zespol', $args);
}
add_action('init', 'register_cpt_team');


function register_cpt_media()
{
    $labels = array(
        'name'               => 'W mediach',
        'singular_name'      => 'Media',
        'menu_name'          => 'W mediach',
        'name_admin_bar'     => 'W mediach',
        'add_new'            => 'Dodaj nowe',
        'add_new_item'       => 'Dodaj nowy wpis medialny',
        'new_item'           => 'Nowy wpis medialny',
        'edit_item'          => 'Edytuj wpis medialny',
        'view_item'          => 'Zobacz wpis medialny',
        'all_items'          => 'Wszystkie media',
        'search_items'       => 'Szukaj w mediach',
        'not_found'          => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'w-mediach'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-format-video',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('w-media', $args);
}
add_action('init', 'register_cpt_media');


function register_cpt_sukcesy()
{
    $labels = array(
        'name'               => 'Sukcesy',
        'singular_name'      => 'Sukces',
        'menu_name'          => 'Sukcesy',
        'name_admin_bar'     => 'Sukcesy',
        'add_new'            => 'Dodaj nowy',
        'add_new_item'       => 'Dodaj nowy sukces',
        'new_item'           => 'Nowy sukces',
        'edit_item'          => 'Edytuj sukces',
        'view_item'          => 'Zobacz sukces',
        'all_items'          => 'Wszystkie sukcesy',
        'search_items'       => 'Szukaj sukcesów',
        'not_found'          => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'sukcesy'),
        'capability_type'    => 'page',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-awards',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('sukcesy', $args);
}
add_action('init', 'register_cpt_sukcesy');

function register_taxonomy_rok()
{
    $labels = array(
        'name'              => 'Rok',
        'singular_name'     => 'Rok',
        'search_items'      => 'Szukaj lat',
        'all_items'         => 'Wszystkie lata',
        'edit_item'         => 'Edytuj rok',
        'update_item'       => 'Aktualizuj rok',
        'add_new_item'      => 'Dodaj nowy rok',
        'new_item_name'     => 'Nowy rok',
        'menu_name'         => 'Rok',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'           => $labels,
        'show_ui'          => true,
        'show_admin_column' => true,
        'query_var'        => false,
        'rewrite'          => array('slug' => 'rok'),
    );
    $args_two = array(
        'hierarchical'      => true,
        'labels'           => $labels,
        'show_ui'          => true,
        'show_in_rest'       => true,
        'show_admin_column' => true,
        'query_var'        => false,
        'rewrite'          => array('slug' => 'rok'),
    );

    register_taxonomy('suk-rok', array('sukcesy'), $args_two);

    register_taxonomy('rok', array('w-media'), $args);
}
add_action('init', 'register_taxonomy_rok');



// Breadcrumbs Rank Math

add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('nasze-specjalizacje')) {
        $test_breadcrumb = [
            'Nasze specyfikacje',
            site_url('/nasze-specjalizacje/'), // URL do podstrony Test

        ];

        array_splice($crumbs, -1, 0, [$test_breadcrumb]);
    }
    return $crumbs;
}, 10, 2);

add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('w-media')) {
        $test_breadcrumb = [
            'W mediach',
            site_url('/w-mediach/'), // URL do podstrony Test

        ];

        array_splice($crumbs, -1, 0, [$test_breadcrumb]);
    }
    return $crumbs;
}, 10, 2);


add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('sukcesy')) {
        $test_breadcrumb = [
            'Sukcesy',
            site_url('/sukcesy/'), // URL do podstrony Test

        ];

        array_splice($crumbs, -1, 0, [$test_breadcrumb]);
    }
    return $crumbs;
}, 10, 2);

add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('zespol')) {
        $test_breadcrumb = [
            'O nas',
            site_url('/o-nas/'), // URL do podstrony Test

        ];

        array_splice($crumbs, -1, 0, [$test_breadcrumb]);
    }
    return $crumbs;
}, 10, 2);
