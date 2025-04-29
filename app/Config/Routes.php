<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */




$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::doLogin');
$routes->get('/admin', 'DashboardController::admin');  // Only accessible for admin role
$routes->get('/user', 'DashboardController::user');  // Only accessible for user role
$routes->get('/logout', 'AuthController::logout');

