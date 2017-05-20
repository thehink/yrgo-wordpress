<?php

declare(strict_types=1);

$pagecheck = get_page_by_path('home');

if(!$pagecheck)
{
    return;
}

$pageid = $pagecheck->ID;
array_push($fields, [
    'key' => 'start_page',
    'title' => 'Info',
    'fields' => [
        [
            'key' => 'image_1',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'required' => 1,
            'return_format' => 'url'
        ],
        [
            'key' => 'yrgo_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'required' => 1
        ],
        [
            'key' => 'yrgo_video',
            'label' => 'Video',
            'name' => 'video_url',
            'type' => 'url',
            'required' => 1
        ],
        [
            'key' => 'yrgo_facebook',
            'label' => 'Facebook',
            'name' => 'facebook_url',
            'type' => 'url'
        ],
        [
            'key' => 'yrgo_instagram',
            'label' => 'Instagram',
            'name' => 'instagram_url',
            'type' => 'url'
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
