<?php

use Illuminate\Support\Facades\Route;


// añadir estre middleware si queremos que rutas sean para verificados ->middleware('verified');

// rutas del tema de Auth y login
Auth::routes(['verify' => true]);
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

// controlador helper
Route::get('/image/file/{disk}/{filename}', 'HelperController@getFile')->name('image.file');

// home controller
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/prueba', 'HomeController@prueba')->name('prueba');

// rutas usuarios
// email verificado todos
Route::get('user/{user}/role', 'UserController@role')->name('user.role');
Route::patch('user/saverole', 'UserController@saveRole')->name('user.saverole');
Route::resource('user', 'UserController');

// rutas seller
Route::get('seller/image/{filename}', 'SellerController@getImage')->name('seller.getImage');
Route::resource('seller', 'SellerController');

// rutas roles
Route::resource('roles', 'RoleController');

// rutas localizaciones
Route::resource('location', 'LocationController');

// rutas categorias
Route::resource('category', 'CategoryController')->except(['show']);
Route::get('category/{slug}', 'CategoryController@show')->name('category.show');

// rutas sub_categorias
Route::resource('sub_category', 'Sub_CategoryController')->except(['show']);
Route::get('sub_category/{slug}', 'Sub_CategoryController@show')->name('sub_category.show');

// rutas de atributos
Route::resource('attribute', 'AttributeController');


// // rutas plantilla admin
// Route::get('/admin', function(){
//     return view('admin.index');
// });

// falta terminar el controlador seller, falta bankAccount
// controller location :toca hacer el delete, pero tiene que ver si no hay datos relacionados con la localizacion

// https://styde.net/laravel-6-doc-eloquent-relaciones/#eager-loading