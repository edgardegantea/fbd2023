<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('consultas', 'ConsultasController::index');

// VERBOS HTTP: GET, POST, PUT, DELETE, UPDATE, PATCH, ...

