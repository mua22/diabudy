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

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        // 'client_id' => env('FB_KEY'),         // Your GitHub Client ID
        // 'client_secret' => env('FB_SECRET'), // Your GitHub Client Secret
       
        'client_id' => env("FB_APP",'600679100315436'),
        'client_secret' => env('dbd68ea6ebd3056953bbd9cba123e2b8'), 
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

];
