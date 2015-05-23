<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    // slim configs
    'log.enable' => false,
    'debug' => true,
    'mode' => 'development',
    'templates.path' => '../src/views',
    
    // system
    'templates.ext' => '.html'
));

Class RouteDumper extends \Slim\Router {
    public static function getAllRoutes() {
        $slim = \Slim\Slim::getInstance();
        return $slim->router->routes;
    }
}

#$routes = RouteDumper::getAllRoutes();
#var_dump($routes);

@include_once('../src/system.php');
@include_once('../src/routes.php');

$app->run();
