<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Home Controller
$routes->get('/', 'Home::index');

//Page Controller
$routes->get('/about', 'PageController::about');
$routes->get('/contact', 'PageController::contact');
$routes->get('/faqs', 'PageController::faqs');

//NewsController
$routes->get('/news', 'NewsController::index');
$routes->get('/news/(:any)', 'NewsController::viewNews/$1');

//Route Admin
$routes->group('admin', function($routes){
	$routes->get('news', 'AdminController::index');
	$routes->get('news/(:segment)/preview', 'AdminController::preview/$1');
    $routes->add('news/new', 'AdminController::create');
	$routes->add('news/(:segment)/edit', 'AdminController::edit/$1');
	$routes->get('news/(:segment)/delete', 'AdminController::delete/$1');
});