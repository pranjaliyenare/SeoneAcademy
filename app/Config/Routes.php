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

$routes->get('login', 'Home::login');
$routes->post('adminLogin', 'Home::adminLogin');
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('courses', 'Home::courses');
// $routes->get('resources', 'Home::resources');
$routes->get('blogs', 'Home::blogs');
$routes->get('contact', 'Home::contact');
$routes->get('forexTrader', 'Home::forexTrader');
$routes->get('trading', 'Home::trading');
$routes->get('impTradingSystem', 'Home::impTradingSystem');
$routes->get('successfulTrader', 'Home::successfulTrader');
$routes->get('riskMangTrading', 'Home::riskMangTrading');
$routes->get('tradingPsychology', 'Home::tradingPsychology');

$routes->get('form', 'Home::form');
$routes->get('demo', 'Home::demo');
$routes->post('contact_datails', 'Home::contact_datails');
$routes->post('download_brochure', 'Home::download_brochure');
$routes->post('registration', 'Home::registration');
$routes->get('register_details', 'Home::register_details');

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
