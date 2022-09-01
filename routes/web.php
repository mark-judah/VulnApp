<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAuthStatus;
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
    return view('templates.home');
});

Route::get('/login', function () {
    return view('templates.login');
});
Route::get('/signup', function () {
    return view('templates.signup');
});
//protected routes
Route::middleware([CheckAuthStatus::class])->group(function () {
    Route::get('/share-book', function () {
        return view('templates.new-book');
    });
    Route::post('/upload-book', [BooksController::class, 'store']);
});


Route::post('/login-auth', [AuthController::class, 'login'])->name('login-auth');
Route::post('/signup-auth', [AuthController::class, 'signup'])->name('signup-auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/preview/{book}', [BooksController::class, 'preview']);
