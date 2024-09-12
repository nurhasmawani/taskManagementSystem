<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::home');
$routes->get('/home', 'AuthController::home');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/profile', 'AuthController::profile');
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);

$routes->post('/login', 'AuthController::process_login');
$routes->post('/register', 'AuthController::process_register');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboard', 'TaskController::dashboard', ['filter' => 'auth']);
$routes->get('/newTask', 'TaskController::newTask', ['filter' => 'auth']);
$routes->get('/update/(:num)', 'TaskController::update/$1', ['filter' => 'auth']);
$routes->get('/delete/(:num)', 'TaskController::delete/$1', ['filter' => 'auth']);


$routes->post('/process_newtask', 'TaskController::process_newtask', ['filter' => 'auth']);
$routes->post('/process_update/$1', 'TaskController::process_update/$1', ['filter' => 'auth']);
