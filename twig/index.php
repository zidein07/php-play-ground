<?php

require_once '../vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, [
    'debug' => true,
    'cache' => './compilation_cache',
]);

$collector = new RouteCollector();
$collector->get('/', function () {
    global $twig;
    return $twig->render('home.twig', [
        'name' => 'Fabien',
    ]);
});
$collector->get('/about', function () {
    global $twig;
    return $twig->render('about.twig', [
        'name' => 'Fabien',
    ]);
});

$dispatcher = new Dispatcher($collector->getData());

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

echo $dispatcher->dispatch($httpMethod, $uri), "\n";


