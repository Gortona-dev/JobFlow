<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// admin
$routes->post('/admin-login', 'AdminLogin::login');
$routes->get('/admin-login', 'AdminLogin::index');
$routes->get('/admin-logout', 'AdminLogin::logout');



// vagas
$routes->get('/vagas', 'Vagas::index');
$routes->match(['get', 'post'], '/vagas/adicionar', 'Vagas::adicionar');
$routes->match(['get', 'post'], '/vagas/editar/(:num)', 'Vagas::editar/$1');
$routes->get('/vagas/excluir/(:num)', 'Vagas::excluir/$1');
$routes->get('/vaga/(:num)', 'Vagas::verVaga/$1');

// cargos
$routes->get('/cargos', 'Cargos::index');
$routes->match(['get', 'post'], '/cargos/adicionar', 'Cargos::adicionar');
$routes->match(['get', 'post'], '/cargos/editar/(:num)', 'Cargos::editar/$1');
$routes->get('/cargos/excluir/(:num)', 'Cargos::excluir/$1');
