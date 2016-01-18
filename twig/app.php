<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Array([
    'index' => 'Hello {{ name }}!',
]);
$twig = new Twig_Environment($loader);

echo $twig->render('index', [
    'name' => 'Fabien'
]);
