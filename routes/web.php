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
// Route::get('/', 'HomeController@admin');

Auth::routes();

Route::get('admin/main/home', 'HomeController@home')->name('main');
Route::post('/loginadmin', 'Auth\LoginController@loginadmin')->name('loginadmin');
Route::get('/logoutadmin', 'Auth\LoginController@getLogout')->name('logoutadmin');
Route::middleware(['admin'])->prefix('admin')->namespace('BackEnd')->group(function () {
    Route::resource('users', 'Users');
    Route::resource('products', 'Products')->except('show');
    Route::resource('offers', 'Offers')->except('show');
    Route::get('messages', 'Messages@index')->name('messages.index');
    Route::delete('messages/{message}/delete', 'Messages@destroy')->name('messages.destroy');
    Route::get('contacts', 'Contacts@index')->name('contacts.index');
    Route::delete('contacts/{contact}/delete', 'Contacts@destroy')->name('contacts.destroy');

    Route::post('notifyuser', 'Users@notifusers')->name('notif');
    Route::post('notifyallusers', 'Users@notifyallusers')->name('notifyall');
    Route::get('notifications/create', 'Users@createNotification')->name('notifications.create');
    Route::get('settings/edit', 'Configrationss@editSettings')->name('settings.edite');
    Route::post('settings/update', 'Configrationss@updateSettings')->name('settings.update');
    Route::resource('sliders', 'Configrationss');

    Route::resource('notifications', 'NotificationsController')->except('show');
});

Route::get('admin/orders', 'API\Orders@index')->name('orders.index');
Route::get('admin/orders/orderdetails/{order}', 'API\Orders@orderdetails')->name('orders.edit');
Route::resource('admin/favorites', 'API\Favorites');
Route::delete('admin/rates/{rate}', 'API\Rates@destroy')->name('rates.destroy');
Route::get('admin/rates', 'API\Rates@index')->name('rates.index');





