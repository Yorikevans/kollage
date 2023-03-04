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

Route::get('/katalog', [App\Http\Controllers\product::class, 'katal']);
Route::get('/home', [App\Http\Controllers\Korzina::class, 'all_korzina'])->name('home');
Route::get('/info_tov{id} ', [App\Http\Controllers\product::class, 'podrob']);
Route::get('/katalog{id} ', [App\Http\Controllers\Korzina::class, 'add']);
Route::get('/delete{id}', [App\Http\Controllers\Korzina::class, 'delete'])->name('delete');
Route::get('/admin', [App\Http\Controllers\product::class, 'admin_bd'])->name('admin');
Route::get('/admin{id}', [App\Http\Controllers\product::class, 'delete'])->name('delete');
Route::post('/admin', [App\Http\Controllers\product::class, 'add_tov'])->name('add_tov');