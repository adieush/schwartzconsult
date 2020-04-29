<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index');
Route::get('/packages', 'PackagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/company-details', 'PagesController@companyDetails');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions');
Route::get('/service-and-refund', 'PagesController@serviceRefund');
Route::get('/checkout/success', 'CheckoutController@success');
Route::get('/checkout/fail', 'CheckoutController@fail');
Route::get('/checkout/one-to-one', 'CheckoutController@oneToOne');
Route::get('/checkout/agency-package', 'CheckoutController@agencyPackage');
Route::post('/checkout/response-to-server', 'CheckoutController@responseToServer');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(
    [
        'prefix' => 'admin', 'namespace' => 'Admin',
        'middleware' => [
            'auth',
//            'permission:use-admin-panel',
//            'crsf'
        ]
    ],
    function() {
        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
        Route::get('/orders', ['as' => 'admin.orders', 'uses' => 'OrdersController@index']);
        Route::get('/orders/create', ['as' => 'admin.orders.create', 'uses' => 'OrdersController@create']);
        Route::post('/orders/store', ['as' => 'admin.orders.store', 'uses' => 'OrdersController@store']);
        Route::get('/orders/destroy', ['as' => 'admin.orders.destroy', 'uses' => 'OrdersController@destroy']);
        Route::get('/orders/show', ['as' => 'admin.orders.show', 'uses' => 'OrdersController@show']);
        Route::get('/orders/edit', ['as' => 'admin.orders.edit', 'uses' => 'OrdersController@edit']);
});
