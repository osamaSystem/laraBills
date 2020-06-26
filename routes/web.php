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

Route::get('home', function () {
    return view('index');
});


Route::group(['prefix'=>'products'],function () {

    Route::get('getAll', 'ProductController@getAllProducts');
    Route::get('create', 'ProductController@create');
    Route::post('store', 'ProductController@store');
    Route::get('edit/{id}', 'ProductController@edit');
    Route::post('update/{id}', 'ProductController@update');
    Route::get('delete/{id}', 'ProductController@delete');
    Route::get('getProductPrice', 'ProductController@getProductPrice');

});


Route::group(['prefix'=>'bills'],function () {

    Route::get('getAll', 'AllbillController@getAllBills');
    Route::get('create', 'AllbillController@create');
    Route::post('store', 'AllbillController@store');
    Route::get('edit/{id}', 'AllbillController@edit');
    Route::post('update/{id}', 'AllbillController@update');
    Route::get('delete/{id}', 'AllbillController@delete');
    Route::post('search', 'AllbillController@search');
    Route::get('print/{id}', 'AllbillController@print');

});

Route::get('print', 'InvoiceController@index');
