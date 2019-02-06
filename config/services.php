<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1032385136953817',
        'client_secret' => 'a37738d668bd7eb24666948647659c9c',
        'redirect' => 'http://localhost:8000/auth/callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'bt9ltiqq9wmRSfj0Lof3CVJas ',
        'client_secret' => 'WVEY2JXwQP468mMkxPwk5PO4Cf9riKUTKhT201gSohUypruNKQ',
        'redirect' => 'http://localhost:8000/auth/callback/twitter',
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
