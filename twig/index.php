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

echo $twig->render('index.twig', ['name' => 'Fabien']);
