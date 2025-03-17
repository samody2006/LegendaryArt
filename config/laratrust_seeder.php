<?php

return [
    'role_structure' => [
        'super-admin' => [
            'users' => 'c,r,u,d',
            'albums' => 'c,r,u,d',
            'photos' => 'c,r,u,d',
            'teams' => 'c,r,u,d',
            'services' => 'c,r,u,d',
            'contactInfos' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'albums' => 'c,r,u,d',
            'photos' => 'c,r,u,d',
            'teams' => 'c,r,u,d',
            'services' => 'c,r,u,d',
            'contactInfos' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u',
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
