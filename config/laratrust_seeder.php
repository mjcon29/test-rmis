<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'documents' => 'c,r,u,d',
            'routes' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'divisions' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'means_of_receivings' => 'c,r,u,d',
            'origin_offices' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'rod-chief' => [
            'users' => 'c,r,u,d',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
            'profile' => 'r,u'
        ],



        'rod-ellen' => [
            'users' => 'c,r,u',
            'routes' => 'c,r,u,d',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'rod1' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rod2' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rod3' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        
        'rod4' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rod5' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rod6' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rod7' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],

        'rtci-chief' => [
            'users' => 'c,r,u,d',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'rtci1' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci2' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci3' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci4' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci5' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci6' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci7' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci8' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci9' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci10' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci11' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci12' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'rtci13' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],

        'fasd-chief' => [
            'users' => 'c,r,u,d',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'fasd1' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd2' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd3' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd4' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd5' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd6' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'fasd7' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],

        'hrmo' => [
            'users' => 'c,r,u',
            'documents' => 'c,r,u',
            'routes' => 'c,r,u',
            'profile' => 'r,u'
        ],

        'records' => [
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
        ],
        'return-clerk' => [
            'documents' => 'c,r,u',
            'routes' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
