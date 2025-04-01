<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

function enqueue_scripts()
{


	wp_enqueue_script('go-paroller', get_template_directory_uri() . '/src/js/paroller.min.js', array('jquery'), '3', true);
	wp_enqueue_script('go-aos', get_template_directory_uri() . '/src/js/aos.min.js', array('jquery'), '3', true);
	wp_enqueue_script('go-main', get_template_directory_uri() . '/src/js/go-main.js', array('jquery'), '3', true);

	$translation_array = array(
		'zwin'     => __('Rozwiń', 'go'),
		'rozwin'     => __('Zwiń', 'go'),
	);
	wp_localize_script('go-main', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
