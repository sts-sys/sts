<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Numele Aplicației
    |--------------------------------------------------------------------------
    |
    | Acesta este numele aplicației tale. Este folosit în diverse părți ale
    | aplicației, cum ar fi notificările, email-urile, și altele.
    |
    */

    'name' => env('APP_NAME', 'STS Framework'),

    /*
    |--------------------------------------------------------------------------
    | Mediul Aplicației
    |--------------------------------------------------------------------------
    |
    | Această valoare determină mediul de rulare al aplicației. Poate fi setată
    | la "local", "production", "staging", etc. Această valoare poate afecta
    | diverse setări din cadrul aplicației.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Mod Debug
    |--------------------------------------------------------------------------
    |
    | Când această valoare este setată la true, aplicația va afișa mesaje de
    | eroare detaliate. Este recomandat să fie dezactivată în producție.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL-ul Aplicației
    |--------------------------------------------------------------------------
    |
    | Aceasta este URL-ul principal al aplicației. Este folosit pentru a genera
    | linkuri absolute în diverse părți ale aplicației.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Cheia de Criptare
    |--------------------------------------------------------------------------
    |
    | Această cheie este utilizată de serviciul de criptare. Asigură-te că este
    | setată la o valoare securizată.
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Timezone-ul Aplicației
    |--------------------------------------------------------------------------
    |
    | Aici poți specifica timezone-ul implicit utilizat de funcțiile PHP
    | legate de data și ora.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Locale-ul Implicit
    |--------------------------------------------------------------------------
    |
    | Locale-ul implicit pentru traducerile aplicației. Acest locale va fi
    | utilizat de serviciul de localizare.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Fallback Locale
    |--------------------------------------------------------------------------
    |
    | Fallback locale este utilizat când locale-ul curent nu este disponibil.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Furnizori de Servicii
    |--------------------------------------------------------------------------
    |
    | Acestea sunt clasele de furnizori de servicii care vor fi încărcate
    | automat de aplicație.
    |
    */

    'providers' => [
        // Listă de furnizori de servicii ai aplicației
    ],
];
