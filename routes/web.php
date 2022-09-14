<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/second', function () {
//    return view('second');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name(name: 'home');
Route::view('/about', view: 'about')->name(name: 'about');
Route::view('/contact', view: 'contact')->name(name: 'contact');

Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
