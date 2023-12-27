<?php

use App\Controllers\User;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->post('auth', 'Login::auth');
$routes->get('users', [User::class, 'index']);
$routes->post('users/create', [User::class, 'create']);
$routes->delete('users/delete', [User::class, 'delete']);
$routes->get('users/edit/(:segment)',[User::class,'edit']);
$routes->post('users/update',[User::class,'update']);

//orders routes
$routes->group('orders', function ($routes) {
    $routes->get('/', 'OrdersController::index');
    $routes->get('create', 'OrdersController::create');
    $routes->post('store', 'OrdersController::store');
    $routes->get('edit/(:segment)', 'OrdersController::edit');
    $routes->post('update', 'OrdersController::update');
    $routes->delete('delete', 'OrdersController::delete');
});