<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'home', 'action' => 'index', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks(DashedRoute::class);
});
$routes->get('/typography', ['controller' => 'Home', 'action' => 'typography'], 'home:typography');
$routes->get('/sin-up', ['controller' => 'Signup', 'action' => 'index'], 'Signup:index');
$routes->get('/login', ['controller' => 'Signup', 'action' => 'login'], 'Signup:login');
$routes->connect('/signUpForm', ['controller' => 'Signup', 'action' => 'index', 'Signup:index']);
$routes->connect('/loginForm', ['controller' => 'Signup', 'action' => 'login', 'Signup:login']);
$routes->get('/ajaxEx', ['controller' => 'Ajax', 'action' => 'index', 'Ajax:index']);
Plugin::routes();
