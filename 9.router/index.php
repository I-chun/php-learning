<?php 

$database = require 'core/bootstrap.php';

// $router = new Router;
// require 'routes.php';
// require $router->direct(
//    trim($_SERVER['REQUEST_URI'], '/')
// );

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = Router::load('routes.php')->define($uri);



