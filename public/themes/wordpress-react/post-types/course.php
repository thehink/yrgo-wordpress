<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('course', [
        'has_archive' => false,
        'labels' => [
            'add_new_item' => __('Add New Course'),
            'edit_item' => __('Edit Course'),
            'name' => __('Courses'),
            'search_items' => __('Search Courses'),
            'singular_name' => __('Course'),
        ],
        'menu_icon' => 'dashicons-plus',
        'menu_position' => 20,
        'public' => true,
		'show_in_rest' => true,
		'rest_base' => 'courses'
    ]);
});
