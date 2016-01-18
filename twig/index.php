<?php

require_once '../vendor/autoload.php';

//$loader = new Twig_Loader_Array([
//    'index' => 'Hello {{ name }}!',
//]);
//
//$twig = new Twig_Environment($loader);
//
//echo $twig->render('index', [
//    'name' => 'Stas'
//]);

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, [
    'debug' => true,
    'cache' => './compilation_cache',
]);

$list = [
    [
        'name' => 'ivan',
        'age' => '33',
    ],
    [
        'name' => 'stas',
        'age' => '21',
    ],
    [
        'name' => 'vlad',
        'age' => '21',
    ],
    [
        'name' => 'vasya',
        'age' => '1',
    ],
    [
        'name' => 'igor',
        'age' => '55',
    ],
];

echo $twig->render('index.twig', [
    'name' => 'Fabien',
    'user_list' => $list,
]);
