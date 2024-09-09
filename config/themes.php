<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tema Implicită
    |--------------------------------------------------------------------------
    |
    | Această valoare controlează tema implicită utilizată de aplicație. Poți
    | schimba această valoare la orice temă disponibilă în directorul "themes".
    |
    */

    'default' => env('THEME_NAME', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Directorul Temelor
    |--------------------------------------------------------------------------
    |
    | Această opțiune specifică calea către directorul unde sunt stocate temele
    | aplicației. Poți schimba această cale în funcție de necesitățile tale.
    |
    */

    'path' => base_path('themes'),

    /*
    |--------------------------------------------------------------------------
    | Cache pentru Teme
    |--------------------------------------------------------------------------
    |
    | Puteți activa caching-ul pentru template-uri și resursele temelor pentru
    | a îmbunătăți performanța aplicației.
    |
    */

    'cache' => [
        'enabled' => env('THEME_CACHE_ENABLED', true),
        'ttl' => env('THEME_CACHE_TTL', 3600),
    ],

    /*
    |--------------------------------------------------------------------------
    | Setări pentru Personalizarea Temelor
    |--------------------------------------------------------------------------
    |
    | Aici poți adăuga setări personalizabile pentru teme, cum ar fi activarea
    | sau dezactivarea anumitor module sau funcționalități.
    |
    */

    'settings' => [
        'custom_css' => env('THEME_CUSTOM_CSS', true),
        'custom_js' => env('THEME_CUSTOM_JS', true),
        'enable_dark_mode' => env('THEME_DARK_MODE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Temele Disponibile
    |--------------------------------------------------------------------------
    |
    | Lista de teme disponibile în aplicație. Fiecare temă ar trebui să aibă un
    | director propriu în calea specificată în 'path'.
    |
    */

    'themes' => [
        'default' => [
            'name' => 'Default Theme',
            'author' => 'Your Name',
            'description' => 'The default theme for the application.',
            'version' => '1.0.3',
        ],
        'modern' => [
            'name' => 'Modern Theme',
            'author' => 'Your Name',
            'description' => 'An alternative theme for the application.',
            'version' => '1.0.1',
        ],
    ],
];
