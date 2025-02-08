z<?php

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

Route::get('/', function () {
    return view('index');
});
// Route for the sign-in page
Route::get('/signin', function () {
    return view('signin');
});

// Route for the sign-in page
Route::get('/editprofile', function () {
    return view('editprofile');
});

// Route for the sign-in page
Route::get('/tables', function () {
    return view('table-basic');
});

// Route for the sign-in page
Route::get('/admins', function () {
    return view('adminlist');
});
Route::get('/latefiles', function () {
    return view('latefiles');
});
Route::get('/allfiles', function () {
    return view('allfiles');
});
Route::get('/safe', function () {
    return view('safe');
});
Route::get('/{page}', 'AdminController@index');
