<?php

declare(strict_types=1);

array_push($fields, [
    'key' => 'course_category',
    'title' => 'Course Category',
    'fields' => [
        [
            'key' => 'sub_heading',
            'label' => 'Sub Heading',
            'name' => 'sub_heading',
            'type' => 'text'
        ]
    ],
    'location' => [
        [
            [
                'param' => 'taxonomy',
                'operator' => '==',
                'value' => 'course_category',
            ],
        ],
    ],
    'hide_on_screen' => ['the_content', 'categories'],
]);
