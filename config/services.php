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
        'client_id' => '236684840193768',
        'client_secret' => 'ff0e8a877e7b1071dea3fca02d924abf',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'rCggh7QdST268JvlWRimubLvg',
        'client_secret' => 'JLzaPfxN5KVDMcbBCiyR6XR82pWclhVAsFW21dwmlRiQob5Wb7',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '794270170026-k0flpev17el1v32gn85d76iqgiipcubl.apps.googleusercontent.com',
        'client_secret' => 'LQK2esbhzedzMoKvlObz18gx',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
