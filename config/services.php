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
        'client_id' => 'axuAXb5E5IuN3IDNFLUV5er3q',
        'client_secret' => 'KBKhdikegiDLqA7anAkSm3FYI74biTtewK91i0sle0kVeaBKWD',
        'redirect' => 'http://localhost:8000/auth/callback/twitter',
    ],

    'google' => [
        'client_id'     => '4508828512-7sqkkndk8js0n5qmr68g0qlgshq6cou9.apps.googleusercontent.com',
        'client_secret' => '9DePsd-6c3T7BTlAtyjIG9Io',
        'redirect'      => 'http://localhost:8000/auth/callback/google'
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
