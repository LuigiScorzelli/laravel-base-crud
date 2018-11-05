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

Route::get('/', 'HomeController@indexHome')->name('home');
 // products route
Route::get('/prodotti', 'ProductsController@indexProdotti')->name('products');
//create new product
Route::get('/prodotto/nuovoProdotto', 'CreateProductController@indexCreate')->name('createProduct');
// route save product
Route::post('/prodotto/nuovoProdotto', 'CreateProductController@save')->name('saveProduct');
// route contact
Route::get('/contatti', 'contactController@contact')->name('contact');
