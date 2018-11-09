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

//  Route per home shop
Route::get('/', 'HomeController@indexHome')->name('home');

    // Route admin
Route::prefix('admin')->group(function(){

            // products route
        Route::get('/prodotti', 'ProductsController@indexProdotti')->name('products');
            //create new product
        Route::get('/prodotto/nuovoProdotto', 'CreateProductController@indexCreate')->name('createProduct');
            // route save product
        Route::post('/prodotto/nuovoProdotto', 'CreateProductController@save')->name('saveProduct');
            // route cancella prodotto per id
        Route::get('/prodotto/cancella/{id}', 'CreateProductController@delete')->name('delete');
            // route modifica e salva prodotto per id
        Route::get('/prodotto/modifica/{id}', 'CreateProductController@edit')->name('edit');

        Route::post('/prodotto/modifica/{product}', 'CreateProductController@change')->name('change');
            // route contact
        Route::get('/contatti', 'contactController@contact')->name('contact');
            // route categories
        Route::get('/categorie', 'categoriesController@category')->name('categories');
            // route create category
        Route::get('/categorie/nuovaCategoria', 'createCategoryController@create')->name('createCategory');
            // route save category
        Route::post('/categorie/nuovaCategoria', 'createCategoryController@save')->name('saveCategory');
            // Route delete category
        Route::get('/categorie/cancella/{id}', 'createCategoryController@delete')->name('deleteCategory');
            //edit category per id
        Route::get('/categorie/modifica/{id}', 'createCategoryController@edit')->name('editCategory');
            // salva le modifiche
        Route::post('/categorie/modifica/{id}', 'createCategoryController@change')->name('changeCategory');
            // prodotti associati alle categorie
        Route::get('/categorie/prodottiAssociati/{category}', 'createCategoryController@products')->name('productsCategory');
});
