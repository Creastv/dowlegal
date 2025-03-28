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
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
