<?php

function test_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/test.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . 'js/test.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'test_script_enqueue');