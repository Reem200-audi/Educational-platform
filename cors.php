<?php
return [
    'paths' => ['api/*','sanctum/csrf-cookie', 'login', 'logout', 'register'],
    'allowed_methods'  => ['*'],
    'allowed_origins' => ['http://localhost:3003'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true

];

//return [
//    'paths' => ['api/*'],
//    'allowed_methods' => ['*'],
//    'allowed_origins' => ['*'], // يسمح لأي جهاز يتصل
//    'allowed_headers' => ['*'],
//    'exposed_headers' => [],
//    'max_age' => 0,
//    'supports_credentials' => false,
//];
