<?php

declare(strict_types=1);

function my_acf_add_local_field_groups() {
    $fields = [];

    // require get_template_directory().'/fields/course.php';
    require get_template_directory().'/fields/course_category.php';
    require get_template_directory().'/fields/home.php';
    require get_template_directory().'/fields/about.php';
    require get_template_directory().'/fields/contact.php';

    foreach ($fields as $field) {
        acf_add_local_field_group($field);
    }
}

add_action('acf/init', 'my_acf_add_local_field_groups');


add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf';


    // return
    return $path;

}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);


    // append path
    $paths[] = get_stylesheet_directory() . '/acf';


    // return
    return $paths;

}
