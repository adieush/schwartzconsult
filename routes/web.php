<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes(['register' => false]);

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
Route::get('/checkout/by-hash/{hash}', 'CheckoutController@byHash');
Route::get('/checkout/test', 'CheckoutController@test');
Route::post('/checkout/response-to-server', 'CheckoutController@responseToServer');
Route::post('/checkout/callback-to-server', 'CheckoutController@callbackToServer');
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
        Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
        Route::get('/example', ['as' => 'admin.dashboard', 'uses' => 'AdminController@example']);
        Route::get('/orders', ['as' => 'admin.orders', 'uses' => 'OrdersController@index']);
        Route::get('/orders/create', ['as' => 'admin.orders.create', 'uses' => 'OrdersController@create']);
        Route::post('/orders/store', ['as' => 'admin.orders.store', 'uses' => 'OrdersController@store']);
        Route::delete('/orders/destroy', ['as' => 'admin.orders.destroy', 'uses' => 'OrdersController@destroy']);
        Route::get('/orders/show', ['as' => 'admin.orders.show', 'uses' => 'OrdersController@show']);
        Route::get('/orders/edit', ['as' => 'admin.orders.edit', 'uses' => 'OrdersController@edit']);

        Route::get('/invoices', ['as' => 'admin.invoices', 'uses' => 'InvoicesController@index']);
        Route::get('/invoices/create', ['as' => 'admin.invoices.create', 'uses' => 'InvoicesController@create']);
        Route::post('/invoices/store', ['as' => 'admin.invoices.store', 'uses' => 'InvoicesController@store']);
        Route::delete('/invoices/destroy{id}', ['as' => 'admin.invoices.destroy', 'uses' => 'InvoicesController@destroy']);
        Route::get('/invoices/show', ['as' => 'admin.invoices.show', 'uses' => 'InvoicesController@show']);
        Route::get('/invoices/edit', ['as' => 'admin.invoices.edit', 'uses' => 'InvoicesController@edit']);
        Route::get('/users', ['as' => 'admin.users', 'uses' => 'UsersController@index']);
        Route::get('/users/create', ['as' => 'admin.users.create', 'uses' => 'UsersController@create']);
        Route::post('/users/store', ['as' => 'admin.users.store', 'uses' => 'UsersController@store']);
        Route::delete('/users/destroy{id}', ['as' => 'admin.users.destroy', 'uses' => 'UsersController@destroy']);
        Route::get('/users/show', ['as' => 'admin.users.show', 'uses' => 'UsersController@show']);
        Route::get('/users/edit', ['as' => 'admin.users.edit', 'uses' => 'UsersController@edit']);

    });
