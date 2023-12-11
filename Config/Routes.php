<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MyController::myView');
$routes->post('/insert-data', 'MyController::insertData');
