<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('home/insert', 'Home::insert');
$routes->get('dashboard','Home::dashboard');
