<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('staff', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Staff'),
            'edit_item' => __('Edit Staff'),
            'name' => __('Staff'),
            'search_items' => __('Search Staff'),
            'singular_name' => __('Staff'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
		'show_in_rest' => true,
		'rest_base' => 'staff'
    ]);
});
