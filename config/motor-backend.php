<?php

return [
    'models' => [
        'client'           => Motor\Admin\Models\Client::class,
        'language'         => Motor\Admin\Models\Language::class,
        'user'             => Motor\Admin\Models\User::class,
        'role'             => Motor\Admin\Models\Role::class,
        'permission'       => Motor\Admin\Models\Permission::class,
        'permission_group' => Motor\Admin\Models\PermissionGroup::class,
        'email_template'   => Motor\Admin\Models\EmailTemplate::class,
    ],
    'routes' => [
        'dashboard'       => true,
        'users'           => true,
        'roles'           => true,
        'permissions'     => true,
        'clients'         => true,
        'languages'       => true,
        'email_templates' => true,
        'profile'         => true,
    ]
];
