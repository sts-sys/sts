<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Driver de Cache Implicit
    |--------------------------------------------------------------------------
    |
    | Această opțiune controlează driverul de cache pe care aplicația îl va
    | utiliza implicit. Opțiunile suportate sunt "file", "redis", "memcached".
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Conexiuni Cache
    |--------------------------------------------------------------------------
    |
    | Aici poți configura toate conexiunile de cache utilizate de aplicație.
    | De exemplu, poți specifica mai multe conexiuni pentru diverse tipuri de
    | cache precum "file", "redis", "memcached".
    |
    */

    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => storage_path('cache'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'memcached' => [
            'driver' => 'memcached',
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timp de Expirare Implicit pentru Cache
    |--------------------------------------------------------------------------
    |
    | Aici poți seta timpul de expirare implicit pentru cache, în minute. Poți
    | schimba această valoare în funcție de necesitățile aplicației.
    |
    */

    'ttl' => env('CACHE_TTL', 60),

    /*
    |--------------------------------------------------------------------------
    | Prefix pentru Cache
    |--------------------------------------------------------------------------
    |
    | Această valoare este utilizată pentru a preveni conflictele de nume
    | între diverse instanțe de cache, mai ales când sunt utilizate mai multe
    | aplicații pe același server.
    |
    */

    'prefix' => env('CACHE_PREFIX', 'sts_cache'),
];
