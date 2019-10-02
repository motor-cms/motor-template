<?php

return [
    'default' => [
        'meta'  => [
            'name'      => 'Default template',
            'namespace' => 'motor-cms',
        ],
        'items' => [
            [

                [
                    'alias' => 'content-two-thirds',
                    'class' => 'main-content',
                    'width' => 8,
                    'items' => [
                        [
                            [
                                'alias'     => 'content-full',
                                'container' => 'first-row-content',
                                'width'     => 12,
                            ],
                        ],
                        [
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-1',
                                'width'     => 4,
                            ],
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-2',
                                'width'     => 4,
                            ],
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-3',
                                'width'     => 4,
                            ],
                        ],
                        [
                            [
                                'alias'     => 'content-half',
                                'container' => 'third-row-content-1',
                                'width'     => 6,
                            ],
                            [
                                'alias'     => 'content-half',
                                'container' => 'third-row-content-2',
                                'width'     => 6,
                            ],
                        ]
                    ]
                ],
                [
                    'alias'     => 'content-third',
                    'class'     => 'sidebar-content',
                    'container' => 'second-row-sidebar',
                    'width'     => 4,
                ],
            ],
            [
                [
                    'alias'     => 'content-full',
                    'class'     => 'full-content',
                    'container' => 'fourth-row-content',
                    'width'     => 12
                ],
            ],
        ]

    ],
    'no-nav'  => [
        'meta'  => [
            'name'      => 'Default template without navigation',
            'namespace' => 'motor-cms',
        ],
        "items" => [
            [

                [
                    'alias' => 'content-two-thirds',
                    'class' => 'main-content',
                    'width' => 8,
                    'items' => [
                        [
                            [
                                'alias'     => 'content-full',
                                'container' => 'first-row-content',
                                'width'     => 12,
                            ],
                        ],
                        [
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-1',
                                'width'     => 4,
                            ],
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-2',
                                'width'     => 4,
                            ],
                            [
                                'alias'     => 'content-third',
                                'container' => 'second-row-content-3',
                                'width'     => 4,
                            ],
                        ],
                        [
                            [
                                'alias'     => 'content-half',
                                'container' => 'third-row-content-1',
                                'width'     => 6,
                            ],
                            [
                                'alias'     => 'content-half',
                                'container' => 'third-row-content-2',
                                'width'     => 6,
                            ],
                        ]
                    ]
                ],
                [
                    'alias'     => 'content-third',
                    'class'     => 'sidebar-content',
                    'container' => 'second-row-sidebar',
                    'width'     => 4,
                ],
            ],
            [
                [
                    'alias'     => 'content-full',
                    'class'     => 'full-content',
                    'container' => 'fourth-row-content',
                    'width'     => 12
                ],
            ],
        ],
    ]
];
