<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get','post'], '/', 'Users::index', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'register', 'Users::register', ['filter' => 'noauth']);
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'profile', 'Users::Profile', ['filter' => 'auth']);
$routes->get('logout', 'Users::logout');
