<?php

declare(strict_types=1);

$pagecheck = get_page_by_path('contact');

if(!$pagecheck)
{
    return;
}

$pageid = $pagecheck->ID;
array_push($fields, [
    'key' => 'contact_page',
    'title' => 'Info',
    'fields' => [
        [
            'key' => 'contact_us',
            'label' => 'Contact Information',
            'name' => 'contacts',
            'type' => 'repeater',
            'sub_fields' => [
                [
                    'key' => 'contact_title',
                    'label' => 'Heading',
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1
                ],
                [
                    'key' => 'contact_information',
                    'label' => 'Information',
                    'name' => 'information',
                    'type' => 'wysiwyg',
                    'required' => 1
                ]
            ]
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
