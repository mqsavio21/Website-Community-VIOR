<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home');
$routes->get('/', 'Home::index');

$routes->get('/about-vior', 'Home::aboutVior');
$routes->get('/management', 'Home::management');
$routes->get('/teams', 'Home::teams');
$routes->get('/events', 'Home::events');
$routes->get('/academy', 'Home::academy');