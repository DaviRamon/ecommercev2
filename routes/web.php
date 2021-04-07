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
    return view('welcome');
});

Route::get('/app', function () {
    return view('layouts/app');
});



// rotas para comidas
Route::get('/comidas', 'FoodController@index');
Route::get('/comidas/novo', 'FoodController@returnFoodView');
Route::post('/comidas', 'FoodController@newFood');
Route::get('/comidas/apagar/{id}', 'FoodController@destroyFood');
Route::get('/comidas/editar/{id}', 'FoodController@editFood');
Route::post('/comidas/{id}', 'FoodController@updateFood');




// rotas para bebidas
Route::get('/bebidas', 'DrinkController@index');
Route::get('/bebidas/novo', 'DrinkController@returnDrinkView');
Route::post('/bebidas', 'DrinkController@newDrink');
Route::get('/bebidas/apagar/{id}', 'DrinkController@destroyDrink');
Route::get('/bebidas/editar/{id}', 'DrinkController@editDrink');
Route::post('/bebidas/{id}', 'DrinkController@updateDrink');


Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
