<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', "PagesController@home");

Route::get('/about', "PagesController@about");

Route::resource('employees', 'EmployeesController');

Route::resource('customers', 'CustomersController');

Route::resource('orders', 'OrdersController');

Route::resource('products', 'ProductsController');

Route::resource('supplies', 'SuppliesController');

Route::resource('providers', 'ProvidersController');
