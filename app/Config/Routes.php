<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');

$routes->group('collections', static function($routes) {
    $routes->get('/', 'Collections::index');
    $routes->get('(:num)', 'Collections::detail/$1');
});