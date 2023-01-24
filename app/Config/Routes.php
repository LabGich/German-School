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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//admin
$routes->get('/Admin', 'Admin::Login');
$routes->get('/userlist', 'Admin::userlist');
$routes->get('/Enrollmentlist', 'Admin::Enrollmentlist');
$routes->get('/Scholarshiplist', 'Admin::Scholarshiplist');
$routes->get('/Loginstaff', 'Admin::Loginstaff');
$routes->match(['get', 'post'], '/logincontrollerstaff', 'Admin::logincontrollerstaff');
$routes->get('/Adminprofileview', 'Admin::Adminprofileview');
$routes->get('/Admitstudent', 'Admin::Admitstudent');
$routes->get('/Admitcontroller', 'Admin::Admitcontroller');
$routes->get('/Instructorprofile', 'Admin::Instructorprofile');
$routes->get('/Addinstructor', 'Admin::Addinstructor');
$routes->match(['get', 'post'],'/DeleteUser', 'Admin::DeleteUser');
$routes->match(['get', 'post'],'/GetUser', 'Admin::GetUser');
$routes->match(['get', 'post'],'/UpdateUser', 'Admin::UpdateUser');
$routes->match(['get', 'post'], '/Saveinstructor', 'Admin::Saveinstructor');


$routes->get('/', 'Home::index');
$routes->get('/Logout', 'Home::Logout');
$routes->get('/Login', 'Home::Login');
$routes->get('/userlist', 'Home::userlist');
$routes->get('/Loginstaff', 'Home::Loginstaff');
$routes->match(['get', 'post'], '/loginfunc', 'Home::loginfunc');



$routes->get('/Registration', 'Home::Registration');
$routes->get('/Homework', 'Home::Homework');
$routes->get('/Attendance', 'Home::Attendance');
$routes->get('/Courses', 'Home::Courses');
$routes->get('/Contact', 'Home::Contact');
$routes->get('/About', 'Home::About');
$routes->get('/Admittedfeepayment', 'Home::Admittedfeepayment');
$routes->get('/Feepayment', 'Home::Feepayment');
$routes->get('/Feestructure', 'Home::Feestructure');
$routes->get('/Feestructurearabic', 'Home::Feestructurearabic');
$routes->get('/Feestructurechinese', 'Home::Feestructurechinese');
$routes->get('/Feestructureenglish', 'Home::Feestructureenglish');
$routes->get('/Feestructurefrench', 'Home::Feestructurefrench');
$routes->get('/Feestructuregerman', 'Home::Feestructuregerman');
$routes->get('/Feestructureitalian', 'Home::Feestructureitalian');
$routes->get('/Feestructurejapanese', 'Home::Feestructurejapanese');
$routes->get('/Feestructureportuguese', 'Home::Feestructureportuguese');
$routes->get('/Feestructurespanish', 'Home::Feestructurespanish');
$routes->get('/Feestructureswahili', 'Home::Feestructureswahili');
$routes->get('/Admission', 'Home::Admission');
$routes->get('/Attendance', 'Home::Attendance');
$routes->get('/Homework', 'Home::Homework');
$routes->get('/Scholarship', 'Home::Scholarship');
$routes->get('/Enrollment', 'Home::Enrollment');
$routes->get('/Applyscholarship', 'Home::Applyscholarship');
$routes->get('/Studentprofileview', 'Home::Studentprofileview');
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
