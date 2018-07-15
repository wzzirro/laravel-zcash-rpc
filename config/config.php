<?php

return [
    'protocol' => env('ZCASHD_PROTOCOL', 'http'),
    'host' => env('ZCASHD_HOST', 'localhost'),
    'port' => env('ZCASHD_PORT', 8232),
    'user' => env('ZCASHD_USER', ''),
    'password' => env('ZCASHD_PASSWORD', ''),
    'ca' => null,
];
