<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('partner', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Partner'),
            'edit_item' => __('Edit Partner'),
            'name' => __('Partners'),
            'search_items' => __('Search Partners'),
            'singular_name' => __('Partner'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
		'show_in_rest' => true,
		'rest_base' => 'partners'
    ]);
});
