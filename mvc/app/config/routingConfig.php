<?php

// Роуты и их данные делаем в виде массива

return [
    'home' => [
        'path' => '/home/',
        'controller' => \app\Controller\HomeController::class,
        'method' => 'GET',
    ],
    'blog' => [
        'path' => '/blog/i',
        'controller' => \app\Controller\BlogController::class,
        'action' => 'list',
        'method' => 'GET',
    ],
    'admin' => [
        'path' => '/admin/i',
        'controller' =>  \app\Controller\AdminController::class,
        'action' => 'login',
        'method' => 'GET',
    ],
    'authorisation' => [
        'path' => '/admin/i',
        'controller' =>  \app\Controller\AdminController::class,
        'action' => 'index',
        'method' => 'POST',
    ],
    'about' => [
        'path' => '/about\\-us/i',
        'controller' => \app\Controller\AboutUsController::class,
        'action' => 'index',
        'method' => 'GET',
    ],
    'Not Found' => [
        'controller' => \app\Controller\NotFoundController::class,
    ]
];

