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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ikan', [App\Http\Controllers\IkanController::class, 'index'])->name('ikan');

Route::get('/ikan/create', [App\Http\Controllers\IkanController::class, 'create']);
Route::post('/ikan', [App\Http\Controllers\IkanController::class, 'store'])->name('ikan');
Route::get('ikan/search', [App\Http\Controllers\IkanController::class, 'search'])->name('search');

Route::get('ikan/{id}/edit', [App\Http\Controllers\IkanController::class, 'edit']);
Route::get('ikan/{id}/lihat', [App\Http\Controllers\IkanController::class, 'lihat']);

Route::patch('ikan/{id}', [App\Http\Controllers\IkanController::class, 'update']);

Route::delete('ikan/{id}', [App\Http\Controllers\IkanController::class, 'destroy'])->name('ikan');

/*Route::get('/ikan/create', 'IkanController@create'); 
Route::post('/ikan', 'IkanController@store');
Route::get('ikan/{id}/edit', 'IkanController@edit'); 
Route::patch('ikan/{id}', 'IkanController@update');
Route::delete('ikan/{id}', 'IkanController@destroy');*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

