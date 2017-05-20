<?php

declare(strict_types=1);

$pagecheck = get_page_by_path('about');

if(!$pagecheck)
{
    return;
}

$pageid = $pagecheck->ID;
array_push($fields, [
    'key' => 'about_page',
    'title' => 'Info',
    'fields' => [
        [
            'key' => 'yrgo_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'required' => 1
        ]
    ],
    'location' => [
        [
            [
                'param' => 'page',
                'operator' => '==',
                'value' => $pageid,
            ],
        ],
    ],
    'hide_on_screen' => ['the_content'],
]);
