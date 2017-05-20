<?php

declare(strict_types=1);

array_push($fields, [
    'key' => 'course_category',
    'title' => 'Info',
    'fields' => [
        [
            'key' => 'sub_heading',
            'label' => 'Sub Heading',
            'name' => 'sub_heading',
            'type' => 'text',
            'required' => 1,
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
    'hide_on_screen' => [],
]);
