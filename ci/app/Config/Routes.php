<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LoginController::index');
$routes->post('/LoginController', 'LoginController::index');
$routes->get('/Aufgaben', 'AufgabenController::index');
$routes->get('/Login', 'LoginController::index');
$routes->get('/Mitglieder', 'MitgliederController::index');
$routes->get('/MitgliederDel', 'MitgliederController::delete');
$routes->get('/MitgliederEditController', 'MitgliederEditController::index');
$routes->post('/MitgliederEdit', 'MitgliederController::edit');
$routes->get('/Projekte', 'ProjekteController::index');
$routes->get('/Sidebar', 'SidebarController::index');
$routes->get('/Reiter', 'ReiterController::index');
$routes->get('/Database', 'DatabaseController::index');
$routes->get('/AktuellesProjekt', 'AktuellesProjektController::index');
$routes->get('/Register', 'RegisterController::index');
$routes->post('/RegisterPost', 'RegisterController::index');
$routes->get('/Edit', 'EditController::index');

$routes->post('/ProjektePost', 'ProjekteController::index');
$routes->post('/ProjekteEditPost', 'ProjekteBearbeitenController::index');
$routes->post('/ProjekteEd', 'ProjekteBearbeitenController::editProject');

$routes->get('/AufgabenDel', 'AufgabenController::delete');
$routes->get('/AufgabenEditController', 'AufgabenEditCreate::index');

$routes->post('/AufgabenEditCreate', 'AufgabenEditCreate::createEdit');

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