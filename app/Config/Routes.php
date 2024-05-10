<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


/**RUTAS DE LAS VISTAS */
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('contacto', 'Home::contacto');
$routes->get('quienessomos', 'Home::quienessomos');
$routes->get('terminosyusos', 'Home::terminosyusos');

$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');


