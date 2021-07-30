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
    return view('auth.login');
});

Auth::routes();
//----------- home ------------
Route::get('/home', 'HomeController@index')->name('home');

//----------- employees------------
Route::resource('/role', 'RoleController');
Route::get('/search', 'EmployeeController@search')->name('search');
// Route::get('/employee', 'EmployeeController@tag');
Route::get('/tag', 'EmployeeController@tag');
Route::resource('/employee', 'EmployeeController');

//------------Stock details-----------
Route::resource('/brand', 'BrandController');
Route::resource('/manufacturer', 'ManufacturerController');
Route::resource('/vehicle', 'VehicleController');
Route::resource('/models', 'ModelsController'); //
Route::resource('/capacity', 'CapacityController');
Route::resource('/category', 'CategoryController');
Route::resource('/stock', 'StockController');