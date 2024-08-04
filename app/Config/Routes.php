<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('terms-conditions', 'Home::terms');
$routes->get('privacy-policy', 'Home::privacy');
$routes->get('contact', 'Contact::index');
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');

$routes->group('collections', static function($routes) {
    $routes->get('/', 'Collections::index');
    $routes->get('(:num)', 'Collections::detail/$1');
});

$routes->group('admin', static function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('login', 'Admin::login');
    $routes->get('logout', 'Admin::logout');
    $routes->get('layout', 'Admin::layout');
    $routes->get('orders', 'Admin::orders');
    $routes->get('collections', 'Admin::collections');
    $routes->get('settings', 'Admin::settings');
});