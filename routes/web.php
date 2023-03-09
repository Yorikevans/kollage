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
// Route::get('/katalog/sort', [App\Http\Controllers\product::class, 'katal_s']);
Route::get('/home', [App\Http\Controllers\Korzina::class, 'all_korzina'])->name('home');
Route::get('/info_tov{id} ', [App\Http\Controllers\product::class, 'podrob']);
Route::get('/katalog{id} ', [App\Http\Controllers\Korzina::class, 'add']);
Route::get('/delete{id}', [App\Http\Controllers\Korzina::class, 'delete'])->name('delete_tov');
Route::get('/admin', [App\Http\Controllers\product::class, 'admin_bd'])->name('admin');
Route::get('/admin/delete/{id}', [App\Http\Controllers\product::class, 'delete'])->name('delete');
Route::post('/admin/addTovar', [App\Http\Controllers\product::class, 'add_tov'])->name('add_tov');
Route::post('/admin/addCategory', [App\Http\Controllers\product::class, 'add_kategory'])->name('add_kategory');
Route::get('/katalog/game{id}', [App\Http\Controllers\product::class, 'katal_sort'])->name('game');
Route::get('/katalog/sort_min', [App\Http\Controllers\product::class, 'sort_min'])->name('sort_min');
Route::get('/katalog/sort_max', [App\Http\Controllers\product::class, 'sort_max'])->name('sort_max');
Route::get('/admin/delete_kat/{id}', [App\Http\Controllers\kategory::class, 'delete_kat'])->name('delete_kat');