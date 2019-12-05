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
Route::get('/employees/{id}/edit', "EmployeesController@edit");
Route::patch('/employees/{id}', "EmployeesController@update");

Route::get('/customers', "CustomersController@index");
Route::post('/customers', "CustomersController@store");
Route::get('/customers/create', "CustomersController@create");
Route::get('/customers/{id}/edit', "CustomersController@edit");
Route::patch('/customers/{id}', "CustomersController@update");

Route::get('/orders', "OrdersController@index");
Route::post('/orders', "OrdersController@store");
Route::get('/orders/create', "OrdersController@create");
Route::get('/orders/{id}/edit', "OrdersController@edit");
Route::patch('/orders/{id}', "OrdersController@update");

Route::get('/products', "ProductsController@index");
Route::post('/products', "ProductsController@store");
Route::get('/products/create', "ProductsController@create");
Route::get('/products/{id}/edit', "ProductsController@edit");
Route::patch('/products/{id}', "ProductsController@update");

Route::get('/supplies', "SuppliesController@index");
Route::post('/supplies', "SuppliesController@store");
Route::get('/supplies/create', "SuppliesController@create");
Route::get('/supplies/{id}/edit', "SuppliesController@edit");
Route::patch('/supplies/{id}', "SuppliesController@update");

Route::get('/providers', "ProvidersController@index");
Route::post('/providers', "ProvidersController@store");
Route::get('/providers/create', "ProvidersController@create");
Route::get('/providers/{id}/edit', "ProvidersController@edit");
Route::patch('/providers/{id}', "ProvidersController@update");
