<?php
use App\Mail\SimpleDemoMail;
use App\Mail\SecondSimpleDemoMail;
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

Route::get('/simpledemomail', function() {
    $email = Mail::to('mayankrairai786@gmail.com')->send(new SimpleDemoMail);
    return "email Send";
});

Route::get('/simplemarkdownmail', function() {
    $email = Mail::to('mayankrairai786@gmail.com')->send(new SecondSimpleDemoMail);
    return "email Send";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
