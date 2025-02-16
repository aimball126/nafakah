z<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
use App\Http\Controllers\LandingPageController;

Route::get('home', [LandingPageController::class, 'index']);

Route::get('/', function () {
    return view('index'); // Home page
});// Protect the home route

// Route for the sign-in page
Route::get('/signin', [UserController::class, 'create'])->name('signin');
// Route for handling the sign-in form submission
Route::post('/signin', [UserController::class, 'login'])->name('login');

// Route for creating a user
Route::get('/create-user', [UserController::class, 'create'])->name('create.user');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route for the sign-in page
Route::get('/editprofile', function () {
    return view('editprofile');
});

// Route for the sign-in page
Route::get('/tables', function () {
    return view('table-basic');
});

Route::get('/create-user', [UserController::class, 'create'])->name('create.user');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
