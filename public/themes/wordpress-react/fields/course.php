<?php

declare(strict_types=1);

array_push($fields, [
    'key' => 'course',
    'title' => 'Course',
    'fields' => [
        [
            'key' => 'course_category_ref',
            'label' => 'Course Category',
            'name' => 'category',
            'type' => 'taxonomy',
            'taxonomy' => 'course_category',
            'field_type' => 'select',
            'return_format' => 'id',
            'required' => 1,
        ],
        [
            'key' => 'course_thumb',
            'label' => 'Thumbnail',
            'name' => 'thumbnail',
            'type' => 'image',
            'return_format' => 'url'
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
    'hide_on_screen' => ['categories'],
]);
