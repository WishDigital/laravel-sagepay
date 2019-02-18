<?php

return [
    'currency' => env('SAGEPAY_CURRENCY', 'GBP'),
    'mode' => env('SAGEPAY_MODE', 'live'),
    'live_encryption_password' => env('SAGEPAY_LIVE_ENCRYPTION_PASSWORD'),
    'test_encryption_password' => env('SAGEPAY_TEST_ENCRYPTION_PASSWORD')
];
