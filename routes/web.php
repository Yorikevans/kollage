<?php

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

// Route::get('/', function () {return view('index');});
// Route::get('/katalog', function () {return view('katalog');});
Route::get('/map', function () {return view('map');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\product::class, 'product']);
<<<<<<< HEAD
Route::get('/katalog', [App\Http\Controllers\product::class, 'katal']);
=======
Route::get('/katalog', [App\Http\Controllers\product::class, 'product']);
>>>>>>> f223dc7d7c5ec76e391948dc2958db5ce57ff0af
