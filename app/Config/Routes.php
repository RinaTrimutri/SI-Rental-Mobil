<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/baru', 'Home::baru');
$routes->get('/baru1', 'Home::baru1');
$routes->get('/index', 'Mahasiswa::index');
$routes->get('/input', 'Mahasiswa::input');
$routes->get('/mhs', 'Mhs::mhs');
$routes->setAutoRoute(true);


