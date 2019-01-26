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


Route::get('/', function () {
    return 'This is Index Page';
});

/*
 * Merchant Routes
 */
Route::prefix('merchant')->namespace('Merchant')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('items', 'ItemController');
    Route::resource('orders', 'OrderController');
    Route::resource('customers', 'CustomerController');
});

/*
 * Admin Routes
 */

Route::prefix('admin')->namespace('Merchant')->group(function () {
    Route::resource('merchants', 'MerchantController');
});


/*
 * Users Routes
 */
Route::name('users')->group(function () {

});