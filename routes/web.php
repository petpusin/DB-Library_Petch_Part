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
    return view('create.categories');
})->name('homecate');

Route::get('/master', function(){
    return view('create.master');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/logout', 'Auth\LoginController@logout')->name('users.logout');

Route::get('/stock',function(){
    return view('stock');
});

Route::prefix('admin')->group(function() {
    //login & logout
    Route::get('/login', 'Auth\AdminLoginController@showSigninForm')->name('admin.signin');
    Route::post('/login', 'Auth\AdminLoginController@signin')->name('admin.signin.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    //dashboard edit & delete
    Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::get('/employee/edit/{employeeNumber}','AdminController@employeeedit');
    Route::put('/employee/edit-update/{employeeNumber}','AdminController@employeeupdate');
    //order

    Route::get('/orders', 'ControllerSystem@index')->name('admin.orders');
    Route::get('/order/edit/{no}', 'ControllerSystem@edit_index');
    Route::put('/order/edit/update/{no}', 'ControllerSystem@update');

});
