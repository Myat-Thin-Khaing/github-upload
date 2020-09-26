<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
});



//get route

Route::get('index','PageController@index')->name('index');
Route::get('about','PageController@about')->name('about');
Route::get('dashboard','PageController@dashboard');
Route::get('menu','PageController@menu')->name('menu');
Route::get('contact','PageController@contact')->name('contact');
Route::post('contact','PageController@contact')->name('contact');


//for products
Route::resource('products',"ProductController");
Route::get('products.create',"ProductController@create")->name('products.create');
Route::get('products.index',"ProductController@index");
Route::post('products.store',"ProductController@index");
Route::get('products.show',"ProductController@show");
Route::post('products.edit',"ProductController@edit");
Route::post('products.update',"ProductController@update");
Route::get('products.destroy',"ProductController@index");
Route::get('products.search',"ProductController@search");



//for Category
Route::resource('categories',"CategoryController");
Route::get('categories.create',"CategoryController@create");
Route::get('categories.index',"CategoryController@index");
Route::post('categories.store',"CategoryController@index");
Route::get('categories.show',"CategoryController@show");
Route::post('categories.edit',"CategoryController@index");
Route::put('categories.update',"CategoryController@update");
Route::get('categories.destroy',"CategoryController@index");











Route::group(['middleware'=>"web"],function(){
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    
});


    
