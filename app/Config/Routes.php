<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//LAB 3
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/contact', 'Home::contact');
$routes->get('/about', 'Home::about');

