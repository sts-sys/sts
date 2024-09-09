<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Conexiunea Implicită la Baza de Date
    |--------------------------------------------------------------------------
    |
    | Această opțiune definește care conexiune la baza de date va fi utilizată
    | implicit pentru toate operațiunile bazei de date. Puteți seta această
    | valoare la orice conexiune definită în array-ul "connections".
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Conexiuni la Baza de Date
    |--------------------------------------------------------------------------
    |
    | Aici sunt definite toate conexiunile la bazele de date ale aplicației.
    | Fiecare conexiune poate folosi un driver diferit de baze de date.
    | Configurările pentru fiecare driver sunt listate mai jos.
    |
    */

    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'my_database'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'my_database'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', __DIR__.'/../database/database.sqlite'),
            'prefix' => '',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'my_database'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tabelele de Migrație
    |--------------------------------------------------------------------------
    |
    | Această opțiune specifică numele tabelului în care vor fi stocate
    | informațiile despre migrațiile bazei de date executate.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Configurare
    |--------------------------------------------------------------------------
    |
    | Redis este un magazin de valori cheie avansat și open-source. Este cunoscut
    | pentru performanțele sale mari și flexibilitatea sa. Aici puteți configura
    | conexiunile Redis pentru aplicația dvs.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', 'sts_database_'),
        ],

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],
    ],

];