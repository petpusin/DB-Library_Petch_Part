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

Route::get('/','CatalogController@index')->name('homecate');


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
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.home');
    //dashboard edit & delete
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/employee/edit/{employeeNumber}', 'AdminController@employeeEdit');
    Route::get('/employee/create/{employeeNumber}','AdminController@employeeCreate')->name('admin.create');
    Route::get('/employee/delete/{employeeNumber}','AdminController@employeeDelete');
    Route::get('/employee/delete/update/{employeeNumber}','AdminController@deleteUpdate');
    Route::put('/employee/create/update/{employeeNumber}', 'AdminController@CreateUpdate');
    Route::put('/employee/edit-update/{employeeNumber}', 'AdminController@employeeupdate');
    //order

    Route::get('/orders', 'ControllerSystem@index')->name('admin.orders');
    Route::get('/order/edit/{no}', 'ControllerSystem@edit_index');
    Route::put('/order/edit/update/{no}', 'ControllerSystem@update');
    //stock
    Route::get('/stock', 'StockController@index')->name('admin.stock');
    Route::get('/stock/create', 'StockController@create')->name('admin.stock.create');
    Route::post('/stock', 'StockController@store')->name('admin.stock.store');
    //cart
    Route::get('/cart', 'CartController@index')->name('admin.cart-index');
    Route::get('/cart/add/{id}', 'CartController@additem')->name('admin.cart-add');
   
    Route::get('/cart/update/','CartController@update');


    Route::get('cart/remove/{id}', 'CartController@destroy');
    Route::get('/customer/register','CustomerController@create')->name('admin.customer.create');
    Route::get('/customer/registerold','CustomerController@create2')->name('admin.customer.create2');
    Route::post('/customer/success','CustomerController@store')->name('admin.customer.store');
    Route::get('/checkout','CheckoutController@index')->name('checkout.index');
});


Route::resource('catalog', 'CatalogController');


Route::post('/coupon','CouponsController@store')->name('coupon.store');
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

Route::get('productsCat','CatalogController@productsCat');


Route::get('catalog/{id}', 'CatalogController@show')->name('catalog.show');
Route::get('catalog/{id}/{product}', 'CatalogController@showproduct')->name('catalog.product');






