<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('library/plate.php');

require get_template_directory().'/default-pages/index.php';

require get_template_directory().'/post-types/course.php';
// Register location taxonomy for the employee custom post type.
require get_template_directory().'/taxonomies/course_category.php';

require get_template_directory().'/post-types/partners.php';

// Register employee custom post type.
require get_template_directory().'/post-types/personnel.php';
// Register location taxonomy for the employee custom post type.
require get_template_directory().'/taxonomies/location.php';

require get_template_directory().'/fields/index.php';

// add_action( 'rest_api_init', 'slug_register_starship' );
// function slug_register_starship() {
//     register_rest_field( ['staff'],
//         '_links',
//         array(
//             'get_callback'    => 'slug_get_starship',
//             'update_callback' => null,
//             'schema'          => null,
//         )
//     );
// }
//
// function slug_get_starship( $object, $field_name, $request ) {
//     global $post;
//
//     return [];
// }


// Add theme supported features.
add_action('after_setup_theme', function () {
	// Show the admin bar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add support for post formats.
    //add_theme_support('post-formats', ['aside', 'audio', 'gallery', 'image', 'link', 'quote', 'video']);

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});
// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

});
