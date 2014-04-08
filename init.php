<?php
require_once __DIR__ . '/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__ . '/www/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/twig-cache',
    'auto_reload' => true,
    'debug' => true
));