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
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logut')->name('admin.logout');
});

// Route::get('/show', 'Controller@showData');

// Route::get('/edit/{id}', 'Controller@editData')->name('edit');
// Route::post('/update', 'Controller@UbdateData')->name('update');

Route::resource('catalog', 'CatalogController');

Route::post('catalog/cat10','CatalogController@get10');//->name('catalog.filter');
Route::post('catalog/cat12','CatalogController@get12');
Route::post('catalog/cat18','CatalogController@get18');
Route::post('catalog/cat24','CatalogController@get24');
Route::post('catalog/cat32','CatalogController@get32');
Route::post('catalog/cat50','CatalogController@get50');
Route::post('catalog/cat72','CatalogController@get72');
Route::post('catalog/cat700','CatalogController@get700');

Route::post('catalog/v1','CatalogController@v1');
Route::post('catalog/v2','CatalogController@v2');
Route::post('catalog/v3','CatalogController@v3');
Route::post('catalog/v4','CatalogController@v4');
Route::post('catalog/v5','CatalogController@v5');
Route::post('catalog/v6','CatalogController@v6');
Route::post('catalog/v7','CatalogController@v7');
Route::post('catalog/v8','CatalogController@v8');
Route::post('catalog/v9','CatalogController@v9');
Route::post('catalog/v10','CatalogController@v10');
Route::post('catalog/v11','CatalogController@v11');
Route::post('catalog/v12','CatalogController@v12');
Route::post('catalog/v13','CatalogController@v13');

Route::post('catalog','CatalogController@reset');
