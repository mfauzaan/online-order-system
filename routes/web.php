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

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return 'This is Index Page';
});

/*
 * Admin Routes
 */
Route::name('admin')->group(function () {
   // Route::get('/login', 'App/Http/Controller/Admin/LoginController.');
});

/*
 * Users Routes
 */
Route::name('users')->group(function () {

});