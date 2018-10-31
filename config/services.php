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

    'facebook' => [
        'client_id'     => ENV('FACEBOOK_CLIENT_ID'),
        // 'client_id'     => '183886865850577',
        'client_secret' => ENV('FACEBOOK_CLIENT_SECRET'),
        // 'client_secret'     =>'0dfe422d140fba9699757bbdc055f0e8',
        'redirect'      => ENV('APP_URL').'login/facebook/callback',
        // 'redirect'      => 'http://localhost:8000/login/facebook/callback',
        // 'redirect'      => 'http://skidu.herokuapp.com/login/facebook/callback',
    ],

];
