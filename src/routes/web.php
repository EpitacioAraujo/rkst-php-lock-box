<?php

use Epitas\App\Controllers\AuthController;
use Epitas\App\Controllers\AvaliacaoController;
use Epitas\App\Utils\Router;
use Epitas\App\Utils\Container;
use Epitas\App\Controllers\IndexController;
use Epitas\App\Controllers\LivroController;

$container = Container::getInstance();

Router::get(
    path: '/',
    action: function () use ($container) {
        return IndexController::index($container->get('database'));
    }
);