<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '766590860043615',
    'client_secret' => '06a843063d1f417104f85075a746cb77',
    'redirect' => 'http://www.obscuraconflu.com/account/facebook',
],

    'google' => [
    'client_id' => '914664825675-h6mdroul58fti849ukog0726ht2qd1a1.apps.googleusercontent.com',
    'client_secret' => 'y1TjphhY3clhnhBrZto8uftb',
    'redirect' => 'http://www.obscuraconflu.com/account/google',
],

];
