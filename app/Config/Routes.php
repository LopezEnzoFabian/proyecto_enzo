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


/* Rutas de registro de usuario */
$routes->get('registro', 'usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');


/* Rutas de login de usuario */
$routes->get('login', 'login_controller');
$routes->post('enviarlogin', 'login_controller::auth');
$routes->get('logout', 'login_controller::logout');