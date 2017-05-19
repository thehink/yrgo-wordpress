<?php
declare(strict_types=1);
add_action('init', function () {
    register_taxonomy('course_category', ['course'], [
        'hierarchical' => false,
        'labels' => [
            'add_new_item' => __('Add New Course Category'),
            'edit_item' => __('Edit Course Category'),
            'name' => __('Course Categories'),
            'search_items' => __('Search Course Categories'),
            'singular_name' => __('Course Category'),
        ],
        'query_var' => true,
        'rewrite' => ['slug' => 'course-category'],
        'show_admin_column' => true,
        'show_ui' => true,
		'show_in_rest' => true,
		'rest_base' => 'course_categories'
    ]);
});