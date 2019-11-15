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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create.home');
})->name('homecate');

Route::resource('catalog', 'CatalogController');








Route::get('/users/logout', 'Auth\LoginController@logout')->name('users.logout');

// Route::get('/stock',function(){
//     return view('stock');
// });

Route::prefix('admin')->group(function () {
    //login & logout
    Route::get('/login', 'Auth\AdminLoginController@showSigninForm')->name('admin.signin');
    Route::post('/login', 'Auth\AdminLoginController@signin')->name('admin.signin.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    //dashboard edit & delete
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/employee/edit/{employeeNumber}', 'AdminController@employeeedit');
    Route::put('/employee/edit-update/{employeeNumber}', 'AdminController@employeeupdate');
    //order

    Route::get('/orders', 'ControllerSystem@index')->name('admin.orders');
    Route::get('/order/edit/{no}', 'ControllerSystem@edit_index');
    Route::put('/order/edit/update/{no}', 'ControllerSystem@update');
    //stock
    Route::get('/stock', 'StockController@index')->name('admin.stock');
    //cart
    Route::get('/cart', 'CartController@index')->name('admin.cart-index');
    Route::get('/cart/add/{id}', 'CartController@additem')->name('admin.cart-add');
   
    Route::get('/cart/update/','CartController@update');


    Route::get('cart/remove/{id}', 'CartController@removeId');
});


Route::resource('catalog', 'CatalogController');

Route::post('catalog/cat10', 'CatalogController@get10'); //->name('catalog.filter');
Route::post('catalog/cat12', 'CatalogController@get12');
Route::post('catalog/cat18', 'CatalogController@get18');
Route::post('catalog/cat24', 'CatalogController@get24');
Route::post('catalog/cat32', 'CatalogController@get32');
Route::post('catalog/cat50', 'CatalogController@get50');
Route::post('catalog/cat72', 'CatalogController@get72');
Route::post('catalog/cat700', 'CatalogController@get700');

Route::post('catalog/v1', 'CatalogController@v1');
Route::post('catalog/v2', 'CatalogController@v2');
Route::post('catalog/v3', 'CatalogController@v3');
Route::post('catalog/v4', 'CatalogController@v4');
Route::post('catalog/v5', 'CatalogController@v5');
Route::post('catalog/v6', 'CatalogController@v6');
Route::post('catalog/v7', 'CatalogController@v7');
Route::post('catalog/v8', 'CatalogController@v8');
Route::post('catalog/v9', 'CatalogController@v9');
Route::post('catalog/v10', 'CatalogController@v10');
Route::post('catalog/v11', 'CatalogController@v11');
Route::post('catalog/v12', 'CatalogController@v12');
Route::post('catalog/v13', 'CatalogController@v13');

Route::post('catalog/t1', 'CatalogController@t1');
Route::post('catalog/t2', 'CatalogController@t2');
Route::post('catalog/t3', 'CatalogController@t3');
Route::post('catalog/t4', 'CatalogController@t4');
Route::post('catalog/t5', 'CatalogController@t5');
Route::post('catalog/t6', 'CatalogController@t6');
Route::post('catalog/t7', 'CatalogController@t7');


Route::post('catalog', 'CatalogController@reset');
Route::post('/', function () {
    return view('create.home');
});


Route::get('catalog/{product}', 'CatalogController@show')->name('catalog.show');






Route::post('catalog', 'CatalogController@reset');
