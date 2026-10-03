<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Resend, Postmark, AWS, and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Gemini (Chatbot AI SMK INFOKOM)
    |--------------------------------------------------------------------------
    | Isi GEMINI_API_KEY di file .env. Jangan pernah menaruh API key di
    | JavaScript / file publik.
    */
    'gemini' => [
        'key'             => env('GEMINI_API_KEY'),
        'model'           => env('GEMINI_MODEL', 'gemini-3.5-flash'),
        // Dicoba berurutan bila model utama tidak tersedia / kena limit
        'fallback_models' => env('GEMINI_FALLBACK_MODELS', 'gemini-3.5-flash-lite,gemini-3.1-flash-lite'),
        // minimal | low | medium | high (hanya dipakai model Gemini 3.x)
        'thinking_level'  => env('GEMINI_THINKING_LEVEL', 'low'),
        'endpoint'        => env('GEMINI_ENDPOINT', 'https://generativelanguage.googleapis.com/v1beta'),
        'timeout'         => (int) env('GEMINI_TIMEOUT', 40),
    ],

];