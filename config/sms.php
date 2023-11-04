<?php

return [
    'default' => env('SMS_DEFAULT_DRIVER', 'kavenegar'),
    'kavenegar' => [
        'api_key' => env('KAVENEGAR_KEY')
    ],
    'payam' => [
        'api' => env('PAYAM_SMS_API', 'https://new.payamsms.com/services/rest/index.php'),
        'organization' => env('PAYAM_SMS_ORGANIZATION', 'ayria'),
        'username' => env('PAYAM_SMS_USERNAME', 'zoot'),
        'password' => env('PAYAM_SMS_PASSWORD', 'Zoot@2023'),
        'sender' => env('PAYAM_SMS_SENDER', '2000144563984'),
    ]
];

