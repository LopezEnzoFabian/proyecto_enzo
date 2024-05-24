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

/* RUTAS PARA CRUD DE  PRODUCTO */
$routes->get('/crear', 'productos_Controller::index');
$routes->get('/agregar', 'productos_Controller::index');
$routes->get('/product-form', 'productos_Controller::creaProducto');
$routes->post('/enviar-prod', 'productos_Controller::store');
$routes->get('/editar/(:num)', 'productos_Controller::singleProducto/$1');
$routes->post('modificar/(:num)', 'productos_Controller::modificar/$1');
$routes->get('borrar/(:num)', 'productos_Controller::deletelogico/$1');
$routes->get('borrar-definitivo/(:num)', 'productos_Controller::deleteproducto/$1');
$routes->get('/eliminados', 'productos_Controller::eliminados');
$routes->get('activar/(:num)', 'productos_Controller::activarproducto/$1');

/* RUTAS PARA CRUD USUARIOS */
$routes->get('/usuarios', 'usuario_crud_controller::principal');
$routes->get('/borrar-usuario/(:num)','usuario_crud_controller::deletelogico/$1');
$routes->get('/dadosbaja','usuario_crud_controller::eliminados');
$routes->get('/activar-usuario/(:num)','usuario_crud_controller::activarlogico/$1');
$routes->get('/bdusuario/(:num)','usuario_crud_controller::activarlogico/$1');