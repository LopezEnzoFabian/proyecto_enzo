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
$routes->get('/crear', 'productos_Controller::index',['filter' => 'auth']);
$routes->get('/agregar', 'productos_Controller::index',['filter' => 'auth']);
$routes->get('/product-form', 'productos_Controller::creaProducto',['filter' => 'auth']);
$routes->post('/enviar-prod', 'productos_Controller::store',['filter' => 'auth']);
$routes->get('/editar/(:num)', 'productos_Controller::singleProducto/$1',['filter' => 'auth']);
$routes->post('modificar/(:num)', 'productos_Controller::modificar/$1',['filter' => 'auth']);
$routes->get('borrar/(:num)', 'productos_Controller::deletelogico/$1',['filter' => 'auth']);
$routes->get('borrar-definitivo/(:num)', 'productos_Controller::deleteproducto/$1',['filter' => 'auth']);
$routes->get('/eliminados', 'productos_Controller::eliminados',['filter' => 'auth']);
$routes->get('activar/(:num)', 'productos_Controller::activarproducto/$1',['filter' => 'auth']);

/* RUTAS PARA CRUD USUARIOS */
$routes->get('/usuarios', 'usuario_crud_controller::principal',['filter' => 'auth']);
$routes->get('/borrar-usuario/(:num)','usuario_crud_controller::deletelogico/$1',['filter' => 'auth']);
$routes->get('/dadosbaja','usuario_crud_controller::eliminados',['filter' => 'auth']);
$routes->get('/activar-usuario/(:num)','usuario_crud_controller::activarlogico/$1',['filter' => 'auth']);
$routes->get('/bdusuario/(:num)','usuario_crud_controller::activarlogico/$1',['filter' => 'auth']);


/* RUTA PARA CONSULTA */
$routes->get('/consulta_contactos', 'consultas_controller::principal',['filter' => 'auth']);
$routes->get('/consulta_ya_leidos', 'consultas_controller::Leidos',['filter' => 'auth']);
$routes->get('/borrarconsulta/(:num)', 'consultas_controller::borrarConsulta/$1',['filter' => 'auth']);
$routes->post('/consulta', 'consultas_controller::registrar_consulta');

$routes->get('/consulta_leido/(:num)', 'consultas_controller::leido/$1',['filter' => 'auth']);
$routes->get('/consulta_reply/(:num)', 'consultas_controller::reply/$1',['filter' => 'auth']);
$routes->post('/enviar_respuesta', 'consultas_controller::enviarRespuesta',['filter' => 'auth']);

/* RUTAS PARA CARRITO */

//muestra todos los productos del catalogo
$routes->get('/todos_p', 'carrito_controller::catalogo',['filter' => 'auth']);
//carga la vista carrito_parte_view
$routes->get('/muestro', 'carrito_controller::muestra',['filter' => 'auth']);
//actualiza los datos del carrito
$routes->get('/carrito_actualiza','carrito_controller::actualiza_carrito',['filter' => 'auth']);
//agregar los items al carrito
$routes->post('/carrito_agrega', 'carrito_controller::add',['filter' => 'auth']);
//elimina un ítem seleccionado
$routes->get('carrito_elimina/(:any)','carrito_controller::remove/$1',['filter' => 'auth']);
//eliminar todo el carrito
$routes->get('/borrar','carrito_controller::borrar_carrito',['filter' => 'auth']);
//muestra las compras una vez que realizamos la misma
$routes->get('/carrito-comprar', 'Ventas_controller::comprarCarrito',['filter' => 'auth']);

$routes->get('/ventas', 'ventas_controller::ventas',['filter' => 'auth']);
$routes->get('/factura/(:num)', 'Ventas_controller::factura/$1',['filter' => 'auth']);



