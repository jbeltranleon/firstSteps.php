<?php
use PlatziPHP\Http\Controllers\HomeController;
use Illuminate\Http\Request;
require_once __DIR__ . '/../vendor/autoload.php';

$container = new Illuminate\Container\Container();

$router = new \Illuminate\Routing\Router(
    new \Illuminate\Events\Dispatcher($container),
    $container
);

$router->get('/', HomeController::class . '@index');

$response = $router->dispatch(Request::capture());

$response->send();
