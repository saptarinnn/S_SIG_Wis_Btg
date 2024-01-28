<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//login admin
$routes->get('/login', 'login::index');
$routes->post('/login/process', 'login::process');
$routes->get('/logout', 'login::logout');

//wellcome
$routes->get('/welcome', 'dini::welcome');
$routes->get('/home', 'dini::home');
$routes->get('/bontang', 'dini::bontang');
$routes->get('/maps', 'dini::maps');
$routes->get('/admin', 'admin::admin');
$routes->get('/foto', 'admin::foto');

$routes->get('/religi', 'wisata::religi');
$routes->get('/buatan', 'wisata::buatan');
$routes->get('/kuliner', 'wisata::kuliner');
$routes->get('/belanja', 'wisata::belanja');

//admin alam
$routes->get('/alam', 'dini::alam');
$routes->get('/admintambahalam', 'admintambahalam::index');
$routes->post('/admintambahalam/process', 'admintambahalam::process');
$routes->get('/dataalam', 'dataalam::index');
$routes->post('/dataalam/process', 'dataalam::process');
$routes->post('/dataalamedit/edit/(:any)', 'product::saveEdit/$1');

//admin databudaya
$routes->get('databudaya', 'budaya::index');
$routes->get('databudaya/tampilan/(:segment)', 'budaya::tampilan/$1');
$routes->get('databudaya/create', 'budaya::create');
$routes->post('databudaya/save', 'budaya::save');
$routes->get('databudaya/edit/(:segment)', 'budaya::edit/$1');
$routes->post('databudaya/update/(:segment)', 'budaya::update/$1');
$routes->get('databudaya/delete/(:segment)', 'budaya::delete/$1');


$routes->get('/form', 'dini::form');
$routes->get('/upload', 'dini::upload');
$routes->get('/koneksi', 'dini::koneksi');

$routes->get('/gambarindex', 'dini::gambarindex');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
