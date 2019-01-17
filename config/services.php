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
        'client_id' => '272784500304169',
        'client_secret' => 'bd643ba4ee3a427856a82cdff0db8680',
        'redirect' => 'https://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '700482631396-7ojh6ron2egciajc1p5mh0ib20srj4ii.apps.googleusercontent.com',
        'client_secret' => 'o3oZ-wemKbkw4RcQ-0A02W13',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    'twitter' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

];
