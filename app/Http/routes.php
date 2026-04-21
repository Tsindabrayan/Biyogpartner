<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Route::get('/realisation', function () {
    return view('realisation');
})->name('realisation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/send','ContactController@sendMail');

/*Route::get('/emails/contacte', function () {
    return view('emails/contacte');
})->name('contacte');*/