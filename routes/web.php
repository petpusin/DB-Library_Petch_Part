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
});

Route::get('/master', function(){
    return view('create.master');
});

// Route::get('/categories', function(){
//     return view('create.categories');
// });


Route::get('/signmode', function(){
    return view('create.signmode');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/login', 'Auth\LoginController@login')->name('login');
// Route::get('/admin', 'AdminController@index');
Route::get('/users/logout', 'Auth\LoginController@logout')->name('users.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showSigninForm')->name('admin.signin');
    Route::post('/login', 'Auth\AdminLoginController@signin')->name('admin.signin.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

// Route::get('/show', 'Controller@showData');

// Route::get('/edit/{id}', 'Controller@editData')->name('edit');
// Route::post('/update', 'Controller@UbdateData')->name('update');

