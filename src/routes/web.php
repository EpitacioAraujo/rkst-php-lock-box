<?php

use Epitas\App\Controllers\AuthController;
use Epitas\App\Utils\Router;
use Epitas\App\Utils\Container;
use Epitas\App\Controllers\IndexController;

$container = Container::getInstance();

Router::get(
    path: '/',
    action: function () use ($container) {
        return IndexController::index($container->get('database'));
    }
);

Router::get(
    path: '/signin',
    action: function () use ($container) {
        return AuthController::auth();
    }
);

Router::get(
    path: '/signup',
    action: function () use ($container) {
        return AuthController::auth();
    }
);

Router::post(
    path: '/auth/signup',
    action: function () use ($container) {
        return AuthController::signUp($container->get('database'));
    }
);

Router::post(
    path: '/auth/signin',
    action: function () use ($container) {
        return AuthController::sigIn($container->get('database'));
    }
);

Router::get(
    path: '/signout',
    action: function () use ($container) {
        return AuthController::signOut();
    }
);