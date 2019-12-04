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

Route::get('/employees', "EmployeesController@index");
Route::post('/employees', "EmployeesController@store");
Route::get('/employees/create', "EmployeesController@create");

Route::get('/customers', "CustomersController@index");
Route::post('/customers', "CustomersController@store");
Route::get('/customers/create', "CustomersController@create");

Route::get('/orders', "OrdersController@index");
Route::post('/orders', "OrdersController@store");
Route::get('/orders/create', "OrdersController@create");

Route::get('/products', "ProductsController@index");
Route::post('/products', "ProductsController@store");
Route::get('/products/create', "ProductsController@create");

Route::get('/supplies', "SuppliesController@index");
Route::post('/supplies', "SuppliesController@store");
Route::get('/supplies/create', "SuppliesController@create");

Route::get('/providers', "ProvidersController@index");
Route::post('/providers', "ProvidersController@store");
Route::get('/providers/create', "ProvidersController@create");
