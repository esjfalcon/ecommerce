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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
	Session::forget('user');
    return view('login');
});


Route::post('/login', 'UserController@login');
Route::get('/', 'ProductController@index');
Route::get('detail/{id}', 'ProductController@detail');
Route::get('search', 'ProductController@search');

Route::post('add_to_cart', 'ProductController@addtocart');

Route::get('/cart', 'ProductController@cart');
Route::get('removecart/{id}', 'ProductController@removecart');
Route::get('ordernow', 'ProductController@ordernow');
Route::post('orderplace', 'ProductController@orderplace');
Route::get('myorders', 'ProductController@myorders');
// Route::post('addqty', 'ProductController@addqty');
Route::get('admin', 'UserController@admin');
Route::post('/deleteProduct', 'ProductController@deleteProduct');
Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::post('/addproduct', 'ProductController@addproduct');



Route::get('phones/{id}', 'CategoriesController@categories');
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'UserController@register');

Route::get('/delete_prd', function () {
	Session::forget('cart');
    return view('/cart');
});

