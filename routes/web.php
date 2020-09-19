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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/payments', 'HomeController@payments')->name('payments');
Route::post('/charge', 'CheckoutController@charge');

Route::get('/sms', 'HomeController@sms')->name('sms');
Route::post('sms', 'SmsController@sendSms');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('test', function () {
    event(new App\Events\MyEvent('WELCOME TO MY PAGE'));
    return "Event has been sent!";
});

Route::resource('posts','PostsController');
