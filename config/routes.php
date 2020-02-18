<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::connect('/',['controller' => 'Test','action' => 'index']);

Router::connect('/contact-us/:param1/:param2', ['controller' =>'Test', 'action'=>'index',['pass' => ['param1','param2']]]);
Router::connect('/about-us', ['controller' =>'Test', 'action'=>'about']);
Router::connect('/beta', ['controller' =>'Test', 'action'=>'beta']);
Router::connect('/upload', ['controller' =>'Test', 'action'=>'upload']);
Router::connect('/registration', ['controller' =>'Home', 'action'=>'registration']);
Router::connect('/login', ['controller' =>'Home', 'action'=>'login']);
Router::connect('/home', ['controller' =>'Home', 'action'=>'index']);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks(DashedRoute::class);
});
