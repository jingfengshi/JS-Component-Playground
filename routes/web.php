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
Route::get('/smooth-scroll', function () {
    return view('smooth-scroll');
});
Route::get('/context-menu', function () {
    return view('context-menu');
});

Route::get('/conditional-visibility', function () {
    return view('conditional-visibility');
});


Route::get('/modal', function () {
    return view('modal');
});
