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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/employees', function () {
    return view('employees');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/supplies', function () {
    return view('supplies');
});
Route::get('/providers', function () {
    return view('providers');
});
