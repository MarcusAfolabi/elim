<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pastors', function () {
    return view('pastors');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/salvation', function () {
    return view('salvation');
});

Route::get('/testimony', function () {
    return view('testimony');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/grow-with-a-friend', function () {
    return view('houseFellowship');
});
