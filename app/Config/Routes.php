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
$routes->get('/Login', 'Home::Login');
$routes->get('/Registration', 'Home::Registration');
$routes->get('/Homework', 'Home::Homework');
$routes->get('/Attendance', 'Home::Attendance');
$routes->get('/Courses', 'Home::Courses');
$routes->get('/Contact', 'Home::Contact');
$routes->get('/About', 'Home::About');
$routes->get('/Feestructure', 'Home::Feestructure');
$routes->get('/Feestructurearabic', 'Home::Feestructurearabic');
$routes->get('/Feestructurechinese', 'Home::Feestructurechinese');
$routes->get('/Feestructureenglish', 'Home::Feestructureenglish');
$routes->get('/Feestructurefrench', 'Home::Feestructurefrench');
$routes->get('/Feestructuregerman', 'Home::Feestructuregerman');
$routes->get('/Feestructureitalian', 'Home::Feestructureitalian');
$routes->get('/Feestructurejapanese', 'Home::Feestructurejapanese');
$routes->get('/Feestructurespanish', 'Home::Feestructurespanish');
$routes->get('/Feestructureswahili', 'Home::Feestructureswahili');
$routes->get('/Admission', 'Home::Admission');
$routes->get('/Attendance', 'Home::Attendance');
$routes->get('/Homework', 'Home::Homework');
$routes->get('/Scholarship', 'Home::Scholarship');

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
