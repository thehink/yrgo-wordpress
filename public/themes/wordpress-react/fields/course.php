<?php

declare(strict_types=1);

array_push($fields, [
    'key' => 'group_1',
    'title' => 'Course',
    'fields' => [
        [
            'key' => 'course_category',
            'label' => 'Course Category',
            'name' => 'course_category',
            'type' => 'taxonomy',
            'taxonomy' => 'course_category',
            'field_type' => 'select',
            'return_format' => 'id',
        ]
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'course',
            ],
        ],
    ],
    'hide_on_screen' => ['the_content', 'categories'],
]);
