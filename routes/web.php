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
    return view('home/index');
})->name("home");
Route::get('/games', function() {
    return view('games/index');
})->name("games");
Route::get('/wiki', function() {
    return view('wiki ');
})->name("wiki");
Route::get('/login', function() {
    return view('home/index');
})->name("login");
