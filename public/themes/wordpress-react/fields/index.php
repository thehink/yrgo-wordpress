<?php

declare(strict_types=1);

function my_acf_add_local_field_groups() {
    $fields = [];

    require get_template_directory().'/fields/course.php';
    require get_template_directory().'/fields/course_category.php';

    foreach ($fields as $field) {
        acf_add_local_field_group($field);
    }
}

add_action('acf/init', 'my_acf_add_local_field_groups');
