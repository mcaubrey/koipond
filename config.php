<?php

return [
    'database' => [
        'type' => 'sqlite',
        'path' => local('core/database/data/data.sql'),
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];

// MYSQL EXAMPLE
// 
// return [
//     'database' => [
//         'type' => 'mysql',
//         'name' => 'koipond',
//         'username' => 'michael',
//         'password' => 'password',
//         'host' => '127.0.0.1',
//         'port' => '3306',
//         'options' => [
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//         ]
//     ]
//];
