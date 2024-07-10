<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('collections', static function($routes) {
    $routes->get('/', 'Collections::index');
});