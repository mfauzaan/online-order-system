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
    return redirect(route('login'));
});

/*
 * Merchant Routes
 */
Route::prefix('merchant')->namespace('Merchant')->name('merchant.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('items', 'ItemController');
    Route::resource('orders', 'OrderController');
    Route::resource('customers', 'CustomerController');
});

/*
 * Customer Routes
 */
Route::prefix('customer')->namespace('Customer')->group(function () {
	Route::resource('restaurants', 'RestaurantController');
	Route::resource('restaurants.items', 'ItemController');
    Route::get('history', 'HistoryController@index')->name('history');
});

/*
 * Admin Routes
 */

Route::prefix('admin')->namespace('Merchant')->name('merchant.')->group(function () {
    Route::resource('merchants', 'MerchantController');
});

Route::prefix('admin')->namespace('Customer')->group(function () {
    Route::resource('customers', 'CustomerController');
});


/*
 * Users Routes
 */
Route::name('users')->group(function () {

});