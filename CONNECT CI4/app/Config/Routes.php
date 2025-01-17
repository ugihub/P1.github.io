<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'user::index');
$routes->get('/user', 'user::index');

$routes->get('/dashboard', 'user::dashboard');

$routes->get('/menu', 'menu::index');
$routes->get('/submenu', 'menu::sub');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
